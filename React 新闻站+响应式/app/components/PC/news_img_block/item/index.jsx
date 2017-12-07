import React, { Component } from 'react';
import { Row, Col } from 'antd';

import './style.less';
class Item extends Component {
    render() {
       const {title,images}=this.props
        return (
            <div className="new-img">
               <h2>{title}</h2>
                <Row gutter={24}>
                {
                    images.map((item,index)=>
                    <Col className="gutter-row" span={8} key={index}>
                        <div className="gutter-box">
                            <img src={require('./img/'+item)}/>
                        </div>
                    </Col>
                    
                    )
                }
                    
                
                </Row>
                <p className="label">
                <span>中国新闻网</span>
                <span>北京青年报</span>
             </p>
            </div>
        )
    }
}


export default Item;