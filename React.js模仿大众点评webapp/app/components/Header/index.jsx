import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';

import './style.less';

class Header extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    clickHandle(){
        const backRouter=this.props.backRouter
        if(backRouter){
            this.props.history.push(backRouter); 
        }else{
            window.history.back();
        }
        
    }
    render(){
        return(
            <div className="common-header">
                <span onClick={this.clickHandle.bind(this)}>
                  <i className="iconfont icon-fanhui"></i>
                </span>
                <h1>{this.props.title}</h1>
            </div>
        )
    }
}

export default Header;