import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import SearchHeader from '../../components/SearchHeader';
import SearchList from './subpage/list'

class Search extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    render() {
        const params = this.props.match.params;
        return (
            <div className="search">
                <div className="search-header">
                    <SearchHeader keyword={params.keyword} history={this.props.history} />
                </div>
                <SearchList keyword={params.keyword} category={params.category} />
            </div>

        )
    }
}

export default Search;