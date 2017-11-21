import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import * as userInfoActionsFromOtherFile from '../../actions/userinfo';
import { bindActionCreators } from 'redux';
import { connect } from 'react-redux'
import Header from '../../components/Header';
import CurrentCity from '../../components/CurrentCity'
import CityList from '../../components/CityList'
import LocalStore from '../../util/localStore';
import { CITYNAME } from '../../config/localStoreKey';
import { getCityData } from '../../fetch/city/city';

class City extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
        this.state = {
            cityData: []
        }
    }
    componentDidMount() {
        const result = getCityData();
        result.then(res => {
            return res.json()
        }).then(json => {
            if (json) {
                this.setState({
                    cityData: json
                })
            }

        })
    }

    // 改变城市
    changeCity(newCity) {
        if (!newCity) {
            return
        }
        // 修改redux
        const userinfo = this.props.userinfo;
        userinfo.cityName = newCity;
        this.props.userinfoActions.update(userinfo)

        // 修改loaclstorage
        LocalStore.setItem(CITYNAME, newCity)

        //跳转首页
       this.props.history.push('/');
    }

    render() {
        const  cityName=this.props.userinfo.cityName;
        return (
            <div className="city">
                <Header title={"选择城市"} />
                <CurrentCity cityName={cityName} />
                <CityList changeFn={this.changeCity.bind(this)} cityData={this.state.cityData} currentCity={cityName}/>
            </div>
        )
    }
}
const mapStateToProps = (state, ownProps) => {
    return {
        userinfo: state.userinfo
    }
}
const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        userinfoActions: bindActionCreators(userInfoActionsFromOtherFile, dispatch)
    }
}
export default connect(mapStateToProps, mapDispatchToProps)(City);
