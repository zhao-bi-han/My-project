import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';

import './style.less'

class StoreComponent extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }
    render(){
        const {isStore,storeHandle}=this.props;
        return(
            <div className="store" onClick={()=>storeHandle()}>
               <i className={isStore?"active":''}></i>
            </div>
        )
    }
}

export default StoreComponent;