import React ,{Component} from 'react';
import { Row, Col } from 'antd';
import {Link} from 'react-router-dom';
import './style.less';
class Item extends Component{
    render(){
        const {id,title,content,img} =this.props
        return(
            <div className="list-item">
                <Row>
                   <Col span={4}>
                      <img src={require("./img/"+img)}/>
                   </Col>
                   <Col span={20} className="info">
                       <h2><Link to={`/detail/${id}`}>{title}</Link></h2>
                       <p>{content}</p>
                       <p className="label">
                          <span>中国新闻网</span>
                          <span>北京青年报</span>
                       </p>
                   </Col>
                </Row>
            </div>  
        )
    }
}

export default Item;