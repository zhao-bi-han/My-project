import React, { Component } from 'react';
import { Row, Col, Menu,  Button, Dropdown ,Icon} from 'antd';
import LoginRegister from '../../../containers/pc/Login_register';
import './style.less';

const MenuItem = Menu.Item;

class HomeHeader extends Component {
    constructor() {
        super();
        this.state = {
            current: 'shouye'  // 菜单切换
        }
    }
    handleChange(e){
        this.setState({
            current:e.key
        })
    }

    render() {     
        return (
            <div className="pc-header">
                <Row type="flex" justify="center" className="top">
                    <Col span={15}>
                        <img src={require('./img/logo.png')} />
                    </Col>
                    <Col span={5} className="top-right">
                        <span className="weather"><i className="iconfont icon-tianqi"></i>石家庄市 6° 多云</span>
                         {/*登录注册*/}
                        <LoginRegister />
                    </Col>
                </Row>
                <Row type="flex" justify="center" className="menu">
                    <Col span={20}>
                        <Menu mode="horizontal" selectedKeys={[this.state.current]} onClick={this.handleChange.bind(this)}>
                            <MenuItem key="shouye">首页</MenuItem>
                            <MenuItem key="gundong">滚动</MenuItem>
                            <MenuItem key="guoji">国际</MenuItem>
                            <MenuItem key="shehui">社会</MenuItem>
                            <MenuItem key="tupian">图片</MenuItem>
                            <MenuItem key="shipin">视频</MenuItem>
                            <MenuItem key="junshi">军事</MenuItem>
                            <MenuItem key="pinglun">评论</MenuItem>
                            <MenuItem key="lishi">历史</MenuItem>
                            <MenuItem key="luyou">旅游</MenuItem>
                            <MenuItem key="gongyi">公益</MenuItem>
                        </Menu>
                    </Col>
                </Row>  
            
            </div>
        )
    }
}

export default HomeHeader;