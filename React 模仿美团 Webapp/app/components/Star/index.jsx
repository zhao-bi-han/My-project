import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';

import './style.less'
class Star extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    render(){
        // 最多有五颗星
        let star=this.props.star;
        star=star>5?star%5:star;
        return(
            <div className="star-container">
               {[1,2,3,4,5].map(item=>{
                   const lightClass=star>=item?"light":'';
                   return <i className={`iconfont icon-shoucang ${lightClass}`} key={item}></i>
               })}
            </div>
        )
    }
}

export default Star;