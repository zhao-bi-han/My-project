import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import img from './img/loading.gif'

class Loading extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
        this.style={
            width:"100%",
            height:"200px",
            backgroundColor:'#fff',
            backgroundImage:`url(${img})`,
            backgroundRepeat:"no-repeat",
            backgroundPosition:"center"
          }
    }
  
    render(){
        return(
           <div className="loading" style={this.style}></div>
        )
    }
}

export default Loading;