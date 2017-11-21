import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import OrderItem from './item/index';

import './style.less'

class OrderComponent extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    render(){
        const submitComment=this.props.submitComment
        return(
            <div className="order-list">
                {this.props.data.map(item=><OrderItem key={item.id} {...item} submitComment={submitComment}/>)}
            </div>
        )
    }
}

export default OrderComponent;