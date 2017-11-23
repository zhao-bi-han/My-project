import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import {connect} from 'react-redux';
import HomeHeader from '../../components/HomeHeader/index';
import CateGory from '../../components/Category'
import Ad from './subpage/ad';
import List from './subpage/list'

class Home extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    render(){
        return(
            <div>
              <HomeHeader cityName={this.props.userinfo.cityName} {...this.props}/>
              <CateGory />
              <div style={{height:"15px"}}></div>
              <Ad />
              <div style={{height:"15px"}}></div>
              <List cityName={this.props.userinfo.cityName} />
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
    }
}
export default connect(mapStateToProps, mapDispatchToProps)(Home);