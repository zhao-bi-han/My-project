import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import SearchInput from '../../components/SearchInput'
import './style.less'
class SearchHeader extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }
    clickHandle(){
        window.history.back();
    }
    enterHandle(value){
        this.props.history.push('/search/all/' + encodeURIComponent(value))
    }
    render(){
        return(
            <div className="search-header">
                <span onClick={this.clickHandle.bind(this)}>
                   <i className="iconfont icon-fanhui"></i>
                </span>
                <SearchInput value={this.props.keyword || ''} enterHandle={this.enterHandle.bind(this)} />
            </div>
        )
    }
}

export default SearchHeader;