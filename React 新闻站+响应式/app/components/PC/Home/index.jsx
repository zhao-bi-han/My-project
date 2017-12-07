import React, { Component } from 'react';
import HomeHeader from '../HomeHeader';
import Footer from '../Footer';
import { Row, Col,BackTop} from 'antd';
import NewsContainer from '../news_container'
import AdList from '../../../containers/pc/ad_list';
import './style.less';
class Home extends Component {
  
    render() {
        return (
            <div className="home">
                <HomeHeader />
                <div className="content">
                    <Row type="flex" justify="center" className="time">
                       <Col span={20}>
                       <i className="iconfont icon-zhong"></i>
                       <span>2017年11月25日</span>
                       <span>星期六</span>
                       </Col>
                    </Row>
                    <Row gutter={16} justify="center" type="flex">
                        <Col  className="gutter-row" span={14}>
                        <div className="gutter-box"><NewsContainer /></div>  
                        </Col>
                        <Col  className="gutter-row" span={6}>
                        <div className="gutter-box"> <AdList /></div>  
                        </Col>
                    </Row>
                </div>
                <Footer />
                <BackTop />
            </div>
        )
    }
}

export default Home;