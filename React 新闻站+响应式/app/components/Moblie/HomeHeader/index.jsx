import React,{Component} from 'react';
import {Link} from 'react-router-dom';


import './style.less';

class HomeHeaderComponent extends Component{
    render(){
     
        return(
            <div className="mb-header">
               <div className="top">
                   <h1>euronews</h1>
                   <Link to={this.props.username!==''?"/user":"/login"}>
                         <span><i className="iconfont icon-denglu"></i></span>
                   </Link>
               </div>
            </div>
        )
    }
}

export default HomeHeaderComponent

