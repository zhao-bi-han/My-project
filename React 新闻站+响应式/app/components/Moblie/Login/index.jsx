import React, { Component } from 'react';
import Header from '../Header'
import { Form, Input, Button, Icon,Row,Col } from 'antd'
import {Link} from 'react-router-dom'
const FormItem = Form.Item
import './style.less'
class LoginComponent extends Component {
    loginSubmit(e){
         e.preventDefault();
         this.props.form.validateFieldsAndScroll((err,value)=>{
             if(!err){
                 // 提交操作
                 this.props.loginHandle(value);
             }
         })
    }
    render() {
        const {getFieldDecorator }=this.props.form;
        return (
            <div className="mobile-login">
                <Header title="登录" />
                <div className="login-form">
                   <Form onSubmit={this.loginSubmit.bind(this)}>
                     <FormItem hasFeedback>
                       {
                        getFieldDecorator ('username',{
                             rules:[{required:true,message:"请填写用户名"}]
                        })(<Input type="text" prefix={<Icon type="user" style={{fontSize:"18px"}}/>} placeholder="QQ号/手机号/邮箱"/>)
                       }
                     </FormItem>
                     <FormItem hasFeedback>
                     {
                      getFieldDecorator ('password',{
                           rules:[{required:true,message:"请填写密码"}]
                      })(<Input type="passowrd" prefix={<Icon type="lock" style={{fontSize:"18px"}}/>}placeholder="请填写密码"/>)
                     }
                   </FormItem>
                    <Button htmlType="submit">登录</Button>
                   </Form>
                </div>
                <div className="info">
                  <p>没有账户,<Link to="/register">立即注册</Link></p>
                </div>
            </div>
        )
    }
}

export default Form.create()(LoginComponent);