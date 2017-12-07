import React, { Component } from 'react';
import LoginAndRegister from '../../../components/PC/Login_register';
import { postLoginFormData, postRegFormData } from '../../../fetch/login_reg/login_reg';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import * as userActionsFile from '../../../actions/user';
class LoginRegister extends Component {

    constructor() {
        super();
        this.state = {
            isLogin: false,
            username: ''

        }
    }

    componentDidMount() {
        // 先判断用户是否登录
        if (this.props.user.username) {
            this.setState({
                isLogin: true,
                username: this.props.user.username
            })
        }
    }

    // 登录处理
    loginSubmit(value, callback) {
        const result = postLoginFormData(value);
        result.then(reg => reg.json())
            .then(json => {
                // 登录成功，执行回调函数
                callback();
                this.setState({
                    isLogin:true,
                    username:value.username
                })
                // 将用户名存入 redux中 
                this.props.userActions.adduser(value.username)
            })
    }
    // 注册处理
    registerSubmit(value, callback) {

        // 接受参数 用户的注册信息
        const result = postRegFormData(value);
        result.then(reg => reg.json())
            .then(json => {
                callback();
            })
    }

    // 退出登录
    signOut(){
        this.props.userActions.removeuser();
        this.setState({
            isLogin:false
        })
    }


    render() {
        return (
            <LoginAndRegister isLogin={this.state.isLogin}
                loginSubmit={this.loginSubmit.bind(this)}
                registerSubmit={this.registerSubmit.bind(this)}
                signOut={this.signOut.bind(this)}
                username={this.state.username}
                visible={this.props.user.visible}
                userActions={this.props.userActions}
            />
        )
    }
}
const mapStateToProps = (state, ownProps) => {
    return {
        user: state.user
    }
}
const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        userActions: bindActionCreators(userActionsFile, dispatch)
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(LoginRegister);