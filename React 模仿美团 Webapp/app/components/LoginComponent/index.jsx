import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import './style.less'
class LoginComponent extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
        this.state = {
            phone: '',
            isError:false
        }
    }
    changeHandle(e) {
        this.setState({
            phone: e.target.value,
            isError:false
        })
    }
    submitHandle() {
        const username = this.state.phone;
        const loginHandle = this.props.loginHandle;       
        if (username!=='') {    
           loginHandle(username) 
        } else{
            this.setState({
                isError:true
            })
        }

    }
    render() {
        return (
            <div className="login-input">
              {this.state.isError?<div className="waring" >账号或验证错误，请重新输入</div>:''}  
                <div className="wrap phone">
                    <span>86 <i className="iconfont icon-xia"></i></span>
                    <input type="text"
                        value={this.state.phone}
                        onChange={this.changeHandle.bind(this)}
                        placeholder="请输入手机号"
                    />
                    <a href="javascript:;">发送验证码</a>
                </div>
                <div className="wrap yzm">
                    <span>验证码</span>
                    <input type="text" placeholder="请输入验证码" />
                </div>
                <button onClick={this.submitHandle.bind(this)}>登录</button>
           
            </div>
        )
    }
}

export default LoginComponent;