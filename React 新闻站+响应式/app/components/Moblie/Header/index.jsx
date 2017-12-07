import React,{Component} from 'react';
import './style.less';

class Header extends Component{
    backHandle(){
        window.history.back();
    }
    render(){
        return(
             <div className="header">
              <a href="javascript:;" onClick={this.backHandle.bind(this)}>
                  <i className="iconfont icon-fanhui"></i>
                </a>
              {
                  this.props.title?<h1>{this.props.title}</h1>:""
              }
             </div>
        )
    }
}

export default Header;