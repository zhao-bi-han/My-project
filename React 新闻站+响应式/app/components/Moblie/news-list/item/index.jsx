import React, { Component } from 'react';
import { Row, Col } from 'antd'
import { Link } from 'react-router-dom'
import './style.less'
class Item extends Component {
  render() {
    const { id, img, title } = this.props;
    return (
      <div className="item">
        <Link to={`detail/${id}`}>
          <Row>
            <Col span={16}>
              <p className="title">{title}</p>
              <p className="time">
                <span>1小时前</span>
                <span>128评</span>
              </p>
            </Col>
            <Col span={8}>
              <img src={require('./img/' + img)} />
            </Col>
          </Row>
        </Link>
      </div>
    )
  }
}

export default Item;