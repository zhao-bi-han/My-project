import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import ListComponent from '../../../components/list'
import { getSearchData } from '../../../fetch/search/search';
import LoadMore from '../../../components/LoadMore'
import {connect} from 'react-redux'

// 初始化一个组件的 state
const initialState = {
    datas: [],
    hasMore: false,
    isLoadingMore: false,
    page: 0
}
class SearchList extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
        this.state = initialState 
    }
    componentDidMount() {
        // 获取首页数据
        this.loadFirstPageData();
    }

    //获取首屏数据
    loadFirstPageData() {
        const cityName = this.props.userinfo.cityName;
        const keyword = this.props.keyword || ''
        const category = this.props.category
        const result = getSearchData(0,cityName,category,keyword);     // 这里只获取首屏数据，第一页
        this.resultHandle(result);
    }
    // 加载更多
    loadMoreData() {
        // 记录状态 点击一下变成加载中
        this.setState({
            isLoadingMore: true
        })
        const cityName = this.props.userinfo.cityName
        const page = this.state.page; // 下一页码
        const keyword = this.props.keyword || ''
        const category = this.props.category
        const result = getSearchData(page,cityName,category,keyword);
        this.resultHandle(result);
        //增加 page 的计数
        this.setState({
            page: page + 1,
            isLoadingMore: false
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
        }).catch(ex=>{
            if(_DEV_){
                console.error("搜索数据出错,",ex.message)
            }
        })
    }

   componentDidUpdata(prevProps, prevState){
       const keyword=this.props.keyword;
       const category=this.props.category;
       //// 搜索条件完全相等时，忽略。重要！！！
       if(keyword===prevProps.keyword && category === prevProps.category){
          return;
       }
       // 重置state
       this.setState(initialState )

        // 重新加载数据
        this.loadFirstPageData()
   }

    render() {
        return (
            <div className="search-list">
                <ListComponent datas={this.state.datas} />
                <LoadMore  loadMoreData={this.loadMoreData.bind(this)}/>
            </div>
        )
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        userinfo: state.userinfo
    }
}
const mapDispatchToProps = (dispatch, ownProps) => {
    return {
      }
}
export default connect(mapStateToProps,mapDispatchToProps)(SearchList);