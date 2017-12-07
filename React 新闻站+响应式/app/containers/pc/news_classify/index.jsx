import React, { Component } from 'react';
import NewsClassifyBlock from '../../../components/PC/news_classify_block'
import { getNewsClassifygData } from '../../../fetch/getdata/getdata';

class NewsClassify extends Component {

    constructor() {
        super();
        this.state = {
            data: []
        }
    }
    componentDidMount() {
        // 请求数据
        var result = getNewsClassifygData();
        result.then(res => res.json())
            .then(json => {
                this.setState({
                    data: json
                })
            })
    }


    render() {
        return (
            <NewsClassifyBlock data={this.state.data}/>
        )
    }
}

export default NewsClassify;