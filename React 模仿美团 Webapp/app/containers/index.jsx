import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import {bindActionCreators} from 'redux';
import {connect} from 'react-redux';
import LocalStore from '../util/localStore';
import { CITYNAME } from '../config/localStoreKey';
import RouterMap from '../router/router';
import * as userInfoActionsFromOtherFile from '../actions/userinfo';
class App extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
        this.state = {
            initDone: false
        }
    }

    componentDidMount() {
        // 从loaclstorage 中获取数据
        let cityName = LocalStore.getItem(CITYNAME);
        if (cityName == null) {
            cityName = "北京"
        }
        // 将城市信息存到 Redux
       this.props.userinfoActions.update({cityName:cityName})
        this.setState({
            initDone: true
        })

    }
    render() {
        return (
            <div className="app">
                {this.state.initDone ? <RouterMap /> : <h1>正在加载...</h1>}
            </div>
        )
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
       // 这文件只需要设置数据 ，不需要获取数据展示
       // 返回一个空
    }
}

const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        userinfoActions:bindActionCreators(userInfoActionsFromOtherFile,dispatch)
    }
}
export default connect(mapStateToProps,mapDispatchToProps)(App);