import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import { getListData } from '../../../fetch/home/home';
import ListComponent from '../../../components/list'
import Loading from '../../../components/loading'
import LoadMore from '../../../components/LoadMore'
import './style.less'

class List extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
        this.state = {
            datas: [],
            hasMore: true, // 记录当前状态下还有没有更多的数据需要加载
            isLoadingMore: false,  //激励当前状态是 ‘加载中’ 还是 ‘加载更多’
            page: 1    //下一页页码

        }
    }

    componentDidMount() {
        // 获取首页数据
        this.loadFirstPageData();
    }

    //获取首屏数据
    loadFirstPageData() {
        const cityName = this.props.cityName;
        const result = getListData(cityName, 0);     // 这里只获取首屏数据，第一页
        this.resultHandle(result);
    }
    // 加载更多
    loadMoreData() {
            // 记录状态 点击一下变成加载中
            this.setState({
                isLoadingMore:true
            })
            const cityName=this.props.cityName;
            const page=this.state.page; // 下一页码
            const result=getListData(cityName,page);
            this.resultHandle(result);
            //增加 page 的计数
            this.setState({
                page:page+1,
                isLoadingMore:false
            })
    }
    // 数据处理
    resultHandle(result) {
        result.then(res => {
            return res.json()
        }).then(json => {
            const datas = json.data;
            const hasMore = json.hasMore;

            // 存储
            this.setState({
                datas: this.state.datas.concat(datas),
                hasMore: hasMore
            })
        })
    }

    render() {
        return (
            <div id="list">
                <h2>猜你喜欢</h2>
                {this.state.datas.length ? <ListComponent datas={this.state.datas} /> : <Loading />}
                {this.state.hasMore?<LoadMore isLoadingMore={this.state.isLoadingMore} loadMoreData={this.loadMoreData.bind(this)}/>:''}     
           </div>
        )
    }
}

export default List;