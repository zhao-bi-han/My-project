import React,{Component} from 'react';
import LoginComponent from '../../../components/Moblie/Login'
import {postLoginFormData} from '../../../fetch/login_reg/login_reg'
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import * as userActionsFile from '../../../actions/user';

import {message} from 'antd'
class Login extends Component{


    loginHandle(value){
        if(value){
            postLoginFormData(value)
            .then(res=>res.json())
            .then(json=>{
                if(json.error==0){
                    message.success("登录成功",1,()=>{
                        this.props.history.push('/');
                        this.props.userActions.adduser(value.username)
                    })
                }
            })
        }
    }
    render(){
        return(
            <LoginComponent loginHandle={this.loginHandle.bind(this)}/>
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
        userActions:bindActionCreators(userActionsFile,dispatch)
    }
}

export default connect(mapStateToProps,mapDispatchToProps)(Login);