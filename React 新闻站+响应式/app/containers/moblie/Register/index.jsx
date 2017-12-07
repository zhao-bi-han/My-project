import React,{Component} from 'react';
import RegisterComponent from '../../../components/Moblie/Register'
import {postRegFormData} from '../../../fetch/login_reg/login_reg'
import {message} from 'antd'
class Register extends Component{
    registerHandle(value){
        if(value){
            postRegFormData(value)
            .then(res=>res.json())
            .then(json=>{
               if(json.error==0){
                message.success("注册成功",1,()=>{
                    this.props.history.push('/login')
                })
                      
               }
            }) 
        }
    }
    render(){
        return(
           <RegisterComponent registerHandle={this.registerHandle.bind(this)}/>
        )
    }
}

export default Register;