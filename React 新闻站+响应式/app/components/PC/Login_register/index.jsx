import React, { Component } from 'react';
import { Row, Col, Form, Input, Button, Icon, Select, message, Modal, Dropdown,Menu} from 'antd';
const InputGroup = Input.Group;
const Option = Select.Option;
const FormItem = Form.Item;
const MenuItem = Menu.Item;

import "./style.less";

class LoginAndRegister extends Component {
    constructor() {
        super();
        this.state = {
            current: true //  显示登录还是注册 
        }
    }
    // 控制modal的显示
    handleShow() {
       this.props.userActions.updatevisible();
    }
    //显示登录还是注册
    handleChange() {
        this.setState({
            current: !this.state.current
        })
    }
    // 登录
    handleLogin(e) {
        e.preventDefault();
        this.props.form.validateFieldsAndScroll((err, values) => {
            if (!err) {
                const loginSubmit = this.props.loginSubmit;
                loginSubmit(this.getFormData(), this.loginCallback.bind(this));
            }
        });
    }
    // 注册
    handleRegister(e) {
        e.preventDefault();
        this.props.form.validateFieldsAndScroll((err, values) => {
            if (!err) {
                const registerSubmit = this.props.registerSubmit;
                registerSubmit(this.getFormData(), this.registerCallback.bind(this));
            }
        });
    }
    // 获取表单数据
    getFormData() {
        const FormData = this.props.form.getFieldsValue();
        return FormData;
    }
    // 登录成功 回调函数
    loginCallback() {
        message.config({
            top: 40
        });
        message.success("登录成功", 1, () => {
            this.handleShow();
            this.props.form.resetFields();
        });
    }
    // 注册成功 回调
    registerCallback() {
        message.config({
            top: 40
        });
        message.success("注册成功，跳转登录", 1, () => {
            this.props.form.resetFields();
            this.setState({
                current: true
            })
        });
    }
 
    render() {
        const { getFieldDecorator } = this.props.form;
        // 手机号
        const prefixSelector = getFieldDecorator('prefix', {
            initialValue: '86',
        })(
            <Select style={{ width: 60 }}>
                <Option value="86">+86</Option>
                <Option value="87">+87</Option>
            </Select>
            );
        // 菜单
        const menu = (
            <Menu>
                <MenuItem>
                    <a href="javascript::">个人中心</a>
                </MenuItem>
                <MenuItem>
                    <a href="javascript:;" onClick={()=>this.props.signOut()}>退出登录</a>
                </MenuItem>
            </Menu>
        )
        return (
            <div className="login-register">
                {
                    this.props.isLogin
                        ? <Dropdown overlay={menu}>
                            <a className="ant-dropdown-link" href="javascript:;">
                                {this.props.username} <Icon type="down" />
                            </a>
                        </Dropdown>
                        : <span className="login" onClick={this.handleShow.bind(this)}>登录/注册</span>
                }
                <Modal visible={this.props.visible} onCancel={this.handleShow.bind(this)}>
                    <div className="login-register-form">
                        {this.state.current
                            ? <div className="login">
                                <Row type="flex" justify="center">
                                    <Col span={14}>
                                        <h2>账号密码登录</h2>
                                        <Form onSubmit={this.handleLogin.bind(this)}>
                                            <FormItem hasFeedback>
                                                {getFieldDecorator('username', {
                                                    rules: [{ required: true, message: '请填写账号信息' }]
                                                })(<Input type="text" prefix={<Icon type="user" style={{ fontSize: 16 }} />} placeholder="QQ号/手机号/邮箱" />)
                                                }
                                            </FormItem>
                                            <FormItem hasFeedback>
                                                {
                                                    getFieldDecorator('password', {
                                                        rules: [{ required: true, message: '请填写密码' }]
                                                    })(<Input type="password" prefix={<Icon type="lock" style={{ fontSize: 16 }} />} placeholder="请填写密码" />)
                                                }
                                            </FormItem>
                                            <FormItem >
                                                <Button htmlType="submit">登录</Button>
                                            </FormItem>
                                        </Form>
                                    </Col>
                                </Row>
                            </div>
                            : <div className="register">
                                <Row type="flex" justify="center">
                                    <Col span={14}>
                                        <h2>账号注册</h2>
                                        <Form onSubmit={this.handleRegister.bind(this)}>
                                            <FormItem hasFeedback>
                                                {getFieldDecorator('name', {
                                                    rules: [{ required: true, message: '请填写昵称' }]
                                                })(<Input type="text" prefix={<Icon type="user" style={{ fontSize: 16 }} />} placeholder="昵称" />)
                                                }
                                            </FormItem>
                                            <FormItem hasFeedback>
                                                {
                                                    getFieldDecorator('pwd', {
                                                        rules: [{ required: true, message: '请填写密码' }]
                                                    })(<Input type="password" prefix={<Icon type="lock" style={{ fontSize: 16 }} />} placeholder="密码" />)
                                                }
                                            </FormItem>
                                            <FormItem>
                                                {getFieldDecorator('phone', {
                                                    rules: [{
                                                        required: true,
                                                        message: '请填写手机号',
                                                    }],
                                                })(
                                                    <Input addonBefore={prefixSelector} placeholder="手机号" />
                                                    )}
                                            </FormItem>
                                            <Button htmlType="submit">立即注册</Button>
                                        </Form>
                                    </Col>
                                </Row>
                            </div>
                        }
                        <div className="other-info">
                            <a href="javascript:;">忘记密码</a>
                            <a href="javascript:;" onClick={this.handleChange.bind(this)}>{this.state.current ? "注册新账号" : "立即登录"}</a>
                            <a href="javascript:;">意见反馈</a>
                        </div>
                    </div>
                </Modal>
            </div>

        )
    }
}

export default Form.create()(LoginAndRegister);