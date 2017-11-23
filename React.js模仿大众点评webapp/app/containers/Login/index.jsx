import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import LoginComponent from '../../components/LoginComponent'
import * as userInfoActionsFromOtherFile from '../../actions/userinfo';
import Header from '../../components/Header'

class Login extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
       this.state={
           isChecking:true
       }
     }

     componentDidMount(){
         this.doCheck()
     }

     // 登录成功处理操作
     loginHandle(username){
         // 保存用户名
        const actions=this.props.userinfoActions;
        let userinfo=this.props.userinfo;
        userinfo.username=username;
        actions.update(userinfo)

        // 跳转链接
        const params=this.props.match.params;
        const router=params.router;
        if(router){
            // 跳转到指定页面
            this.props.history.push(decodeURIComponent(router))
        }else{
            // 跳转到默认页面
            this.goUserPage();
        }
     }

     doCheck(){
         const userinfo=this.props.userinfo;
         if(userinfo.username){
                // 已经登陆
                // 跳转到用户中心页
                this.goUserPage()
         }else{
               // 没有登录
               this.setState({
                   isChecking:false
               })
         }
     }

     goUserPage(){
         this.props.history.push('/user')
     }

      
    render(){
        return( 
            <div className="login">
                 <Header title={"用户登录"}/>
                {
                    this.state.isChecking
                    ?<div>{/*正在检查登陆*/}</div>
                    :<LoginComponent loginHandle={this.loginHandle.bind(this)}/>
                }
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
       userinfoActions:bindActionCreators(userInfoActionsFromOtherFile,dispatch)
    }
}
export default connect(mapStateToProps,mapDispatchToProps)(Login);