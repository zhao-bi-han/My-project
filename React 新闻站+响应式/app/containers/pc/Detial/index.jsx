import React, { Component } from 'react';
import DetialComponent from '../../../components/PC/Detail'
import { getDetailData ,getNewsListData} from '../../../fetch/getdata/getdata';



class Detail extends Component {
  constructor(){
      super();
      this.state={
          data:[],
          recommend:[]
      }
  }

    componentDidMount() {
        const articleId = this.props.match.params.id;
        // 请求数据  新闻详情
        getDetailData(articleId).then(res => res.json())
            .then(json => {
                this.setState({
                    data: json
                })
            })
        // 相关推荐
        getNewsListData(11,20,"guoji").then(res => res.json())
        .then(json => {
            this.setState({
                recommend: json
            })
        })
    
    }

    render() {
        const articleId = this.props.match.params.id;
        return (
            <DetialComponent data={this.state.data} recommend={this.state.recommend} articleId={articleId}/>
        )
    }
}

export default Detail;