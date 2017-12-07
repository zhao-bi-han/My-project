import React, { Component } from 'react';
import { Row, Col, Card } from 'antd'
import './style.less';

class NewBlockItem extends Component{
    render() {
        const {id,title,img,introduce,content}=this.props
        return (
            <div className="new-block">
              <div className="head clearfix">
                 <span className="title">
                   <em>{title}</em>
                 </span>
                 <span className="more">更多</span>
              </div>
              <Row className="block-info">
                 <Col span={10}>
                    <img src={require('./img/'+img)}/>
                    <p>{introduce}</p>
                 </Col>
                 <Col span={14} className="block-info-list">
                    <ul>
                      {
                          content.map((item,index)=> <li key={index}><a href="javascript:;">{item}</a></li>)
                      }
                    </ul>
                 </Col>
              </Row>
            </div>
        )
    }
}


export default NewBlockItem;