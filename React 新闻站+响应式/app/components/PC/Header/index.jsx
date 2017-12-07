import React, { Component } from 'react';
import { Menu, Icon, Row, Col } from 'antd';
import LoginRegister from '../../../containers/pc/Login_register';
import './style.less'

class Header extends Component {
    constructor() {
        super();
        this.state = {
            current: "yaowen" 
        }
    }
    handleChange(e) {
        this.setState({
            current: e.key
        })
    }

    render() {
        return (
            <div className={"common-header top"} ref="header">
                <Row>
                    <Col span={2}>
                        <img src={require('./img/logo.png')} />
                    </Col>
                    <Col span={19} className="menu">
                        <Menu onClick={this.handleChange.bind(this)} selectedKeys={[this.state.current]}
                            mode="horizontal">
                            <Menu.Item key="yaowen">要闻</Menu.Item>
                            <Menu.Item key="caijing">财经</Menu.Item>
                            <Menu.Item key="yvle">娱乐</Menu.Item>
                            <Menu.Item key="tiyv">体育</Menu.Item>
                            <Menu.Item key="shishang">时尚</Menu.Item>
                            <Menu.Item key="keji">科技</Menu.Item>
                            <Menu.Item key="more"><Icon type="appstore" /></Menu.Item>
                        </Menu>
                    </Col>
                    <Col span={3} className="login">
                        <LoginRegister />
                    </Col>
                </Row>

            </div>
        )
    }
}

export default Header;