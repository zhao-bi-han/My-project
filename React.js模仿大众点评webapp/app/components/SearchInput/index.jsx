import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import './style.less';

class SearchInput extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
        this.state = {
            value: ''
        }
    }
    componentDidMount() {
        this.setState({
            value: this.props.value || ''
        })
    }
    handleChange(e) {
        this.setState({
            value: e.target.value
        })
    }
    handleSearch(e) {
        if (e.keyCode !== 13) {
            return;
        }
        this.props.enterHandle(e.target.value)
    }
    render() {
        return (
            <div className="serach-container">
                <i className="iconfont icon-sousuo "></i>
                <input type="text"
                    value={this.state.value}
                    onChange={this.handleChange.bind(this)}
                    onKeyUp={this.handleSearch.bind(this)}
                    placeholder="请输入搜索内容"
                />
            </div>
        )
    }
}

export default SearchInput;