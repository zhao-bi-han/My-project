import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import {Link} from 'react-router-dom';
import '../../../static/css/common.less'
import './style.less';

class Item extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    render(){
        const data=this.props.data;
        return(
            <div className="list-item clear-fix">
               <Link to={`/detail/${data.id}`}>
               <div className="item-img float-left">
                  <img src={require("./img/"+data.img)}/>
                </div>
               <div className="item-info">
                 <div className="item-title">
                    <h3>{data.title}</h3>
                    <span className="float-right">{data.distance}</span>
                 </div>
                 <p>{data.subTitle}</p>
                 <div className="item-price">
                    <span className="price">￥{data.price}</span>
                    <span className="number float-right">已售 {data.number}</span>
                 </div>
               </div>
               </Link>
            </div>
        )
    }
}

export default Item;