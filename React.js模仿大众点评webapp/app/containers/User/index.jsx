import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import {connect} from 'react-redux';
import Header from '../../components/Header'
import UserInfo from '../../components/Userinfo'
class User extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    componentDidMount(){
        // 先判断用户是否已经登录
          if(!this.props.userinfo.username){
            //  this.props.history.push('/login')
          }
    }
    //  
    render(){
        const userinfo=this.props.userinfo;
        return(
            <div className="user">
            <Header title="用户中心" history={this.props.history} backRouter="/"/>
            <UserInfo cityName={userinfo.cityName} username={userinfo.username}/>
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

export default connect(mapStateToProps,mapDispatchToProps)(User) ;