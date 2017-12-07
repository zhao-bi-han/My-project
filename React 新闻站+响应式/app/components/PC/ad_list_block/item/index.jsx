import React, { Component } from 'react';
import { Row, Col } from 'antd';

import './style.less';
class Item extends Component {

    render() {
        const { id, type, title, content, textlist } = this.props;
        return (
            <div className="ad-item">
                <div className="head clearfix">
                    <h3 className="title">
                        <span></span>
                        <a href="javascript:;" className={title}></a>
                    </h3>
                    <a href="javascript:;" className="more">更多</a>
                </div>
                <div className="content">
                    {
                        type === "onlyimg"
                            ? <ItemImg content={content} />
                            : <ItemText content={content} />
                    }
                    <ul>
                        {
                            textlist.map((list, index) => <li key={index}><i className="iconfont icon-dian"></i>{list}</li>)
                        }
                    </ul>
                </div>
            </div>
        )
    }
}
const ItemImg = (props) => {
    return (<Row gutter={14} className="middle">
        {
            props.content.map((item, index) =>
                <Col className="gutter-row" span={12} key={index}>
                    <div className="gutter-box">
                        <img src={require('./img/' + item.img)} />
                        <p>{item.info}</p>
                    </div>
                </Col>
            )
        }
    </Row>
    )
}
const ItemText = (props) => {
    const item = props.content[0];
    return (
        <Row gutter={14} className="middle">
            <Col className="gutter-row" span={12}>
                <div className="gutter-box">
                    <img src={require('./img/' + item.img)} />
                </div>
            </Col>
            <Col className="gutter-row" span={12}>
                <div className="gutter-box">
                    <p className="text">{item.info}</p>
                </div>
            </Col>
        </Row>
    )
}



export default Item;