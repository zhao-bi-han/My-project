import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';

class NotFount extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    render(){
        return(
            <div>
                <h1>访问的页面不存在！</h1>
            </div>
        )
    }
}

export default NotFount;