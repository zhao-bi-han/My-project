import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import {Link} from 'react-router-dom';
import SearchInput from '../../components/SearchInput'
import './style.less';

class HomeHeader extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
      
    }
    enterHandle(value){
        this.props.history.push('/search/all/' + encodeURIComponent(value))
    }
    render() {
        return (
            <div id="home-header" className="clear-fix">
                <div className="float-left home-header-left">
                    <Link to="/city">{this.props.cityName}</Link>
                    <i className="iconfont icon-xia"></i>
                </div>
                <div className="float-right home-header-right">
                <Link to="/login"> <i className="iconfont icon-wode"></i></Link>
                </div>
                <div className="home-header-middle">                
                        <SearchInput value='' enterHandle={this.enterHandle.bind(this)}/>
                </div>

            </div>
        )
    }
}

export default HomeHeader;