import React, { Component } from 'react';
import Header from '../Header'
import { Form, Input, Button, Icon,Row,Col,Select } from 'antd'
import {Link} from 'react-router-dom'
const FormItem = Form.Item
const Option = Select.Option;
import './style.less'
class RegisterComponent extends Component {
    registerSubmit(e){
        e.preventDefault();
        this.props.form.validateFieldsAndScroll((err,value)=>{
            if(!err){
                  // 提交操作
                  this.props.registerHandle(value);
            }
        })
    }
    render() {
        const {getFieldDecorator }=this.props.form;
           // 手机号
           const prefixSelector = getFieldDecorator('prefix', {
            initialValue: '86',
        })(
            <Select style={{ width: 60 }}>
                <Option value="86">+86</Option>
                <Option value="87">+87</Option>
            </Select>
            );
        return (
            <div className="mobile-register">
                <Header title="注册" />
                <div className="register-form">
                   <Form onSubmit={this.registerSubmit.bind(this)}>
                     <FormItem hasFeedback>
                       {
                        getFieldDecorator ('username',{
                                  rules:[{required:true,message:"请填写昵称"}]
                        })(<Input type="text" prefix={<Icon type="user" style={{fontSize:"18px"}}/>} placeholder="昵称"/>)
                       }
                     </FormItem>
                     <FormItem hasFeedback>
                     {
                      getFieldDecorator ('password',{
                           rules:[{required:true,message:"请填写密码"}]
                      })(<Input type="passowrd" prefix={<Icon type="lock" style={{fontSize:"18px"}}/>}placeholder="请填写密码"/>)
                     }
                   </FormItem>
                   <FormItem hasFeedback>
                   {
                    getFieldDecorator ('phone',{
                       rules:[{required:true,message:"请填写手机号"}]
                    })(<Input type="text" addonBefore={prefixSelector} placeholder="请填写手机号"/>)
                   }
                 </FormItem>
                    <Button htmlType="submit">立即注册</Button>
                   </Form>
                </div>
                <div className="info">
                  <p>已有账户,<Link to="/login">登录</Link></p>
                </div>
            </div>
        )
    }
}

export default Form.create()(RegisterComponent);