import React, { Component } from 'react';
import { Row, Col } from 'antd'
import './style.less';
class Footer extends Component {
    render() {
        return (
            <div className="footer">
                <Row type="flex" justify="center">
                    <Col span={20}>
                        <ul>
                            <li>关于新闻</li>
                            <li>服务协议</li>
                            <li>隐私政策</li>
                            <li>开放平台</li>
                            <li>广告服务</li>
                            <li>新闻招聘</li>
                            <li>客服中心</li>
                            <li>举报中心</li>
                            <li>网站导航</li>
                        </ul>
                        <p>2017-2018 版权所有</p>

                    </Col>
                </Row>

            </div>
        )
    }
}

export default Footer;