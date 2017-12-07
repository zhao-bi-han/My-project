import React,{Component} from 'react';
import {Row,Col} from 'antd';
import Item from './item'

class AdListBlock extends Component{
    render(){
        return(
            <div className="ad-list">
             {this.props.data
             ?this.props.data.map(item=> <Item key={item.id} {...item}/>)
             :"没有新闻LA"
             }
            </div>
        )
    }
}

export default  AdListBlock;