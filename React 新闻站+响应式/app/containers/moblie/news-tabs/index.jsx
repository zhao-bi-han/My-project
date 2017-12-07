import React, { Component } from 'react';
import NewsTabsComponent from '../../../components/Moblie/news-tabs'
import {getNewsListData} from '../../../fetch/getdata/getdata';
import { bindActionCreators } from 'redux';
import {connect} from 'react-redux'
import * as newsdataActionFromFile from '../../../actions/newadata';
class NewsTabs extends Component {
     constructor(){
         super();
     }

         
    getDataHandle(type,callback){
         const result=getNewsListData(type);
         result.then(res=>res.json()).
         then(json=>{
            callback(json);
            // 将数据存入redux
            this.props.newsdataActions.newsdataAdd(type,json);
         })
    }

    render() {
        return (
            <NewsTabsComponent getDataHandle={this.getDataHandle.bind(this)} newsdata={this.props.newsdata}/>
        )
    }
}
const mapStateToProps = (state, ownProps) => {
    return {
        newsdata: state.newsdata
    }
}
const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        newsdataActions: bindActionCreators(newsdataActionFromFile,dispatch)
    }
}

export default connect(mapStateToProps,mapDispatchToProps)(NewsTabs)