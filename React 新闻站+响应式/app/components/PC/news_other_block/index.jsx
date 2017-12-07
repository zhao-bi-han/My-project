import React, { Component } from 'react';
import { Row, Col } from 'antd';
import './style.less';
class NewsOtherBlock extends Component {
  render() {
    return (
      <Row gutter={16}>
        <Col className="gutter-row" span={12}>
          <div className="gutter-box">
            <div className="news-other">
              <div className="head clearfix">
                <span className="title"><em>媒体合作</em></span>
              </div>
              <h3>财新将全面收费 “财新通”问世</h3>
              <Row className="content">
                <Col span={11}>
                  <img src={require("./img/0.jpg")} />
                </Col>
                <Col span={13} className="text">财新成为第一家全面实施收费的媒体</Col>
              </Row>
              <ul>
                <li><i className="iconfont icon-dian"></i>人民日报推出首部三维动画《刻度上的五年》</li>
                <li><i className="iconfont icon-dian"></i>阅文集团赴港上市在望，CEO为网络文学奠基人</li>
              </ul>
            </div>
          </div>
        </Col>
        <Col className="gutter-row" span={12}>
          <div className="gutter-box">
            <div className="news-other">
              <div className="head clearfix">
                <span className="title"><em>政府新闻</em></span>
              </div>
              <h3>中国-中东欧青年企业家圆桌会议在京举办</h3>
              <Row className="content">
                <Col span={11}>
                  <img src={require("./img/1.jpg")} />
                </Col>
                <Col span={13} className="text">此次会议主题为展望“16+1”框架内中国与中东欧青年企业家务实合作。</Col>
              </Row>
              <ul>
                <li><i className="iconfont icon-dian"></i>吴统文：让“国产”气候模式为世界瞩目</li>
                <li><i className="iconfont icon-dian"></i>北京医改新政提升患者就医体验 80%患者称满意</li>
              </ul>
            </div>
          </div>
        </Col>
      </Row>

    )
  }
}

export default NewsOtherBlock;