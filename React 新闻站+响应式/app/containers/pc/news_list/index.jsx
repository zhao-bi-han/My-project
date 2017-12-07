import React,{Component} from 'react';
import NewsListBlock from '../../../components/PC/news_list_block'
import {getNewsListData} from '../../../fetch/getdata/getdata';

class NewsList extends Component{
     constructor(){
         super();
         this.state={
             data:[]
         }
     }

    componentDidMount(){
        // 请求数据
     const {type}=this.props;
     var result=getNewsListData(type);
     result.then(res=>res.json())
     .then(json=>{
         this.setState({
             data:json
         })
     })
    }

    render(){
        return(
              <NewsListBlock data={this.state.data}/>   
        )
    }
}

export default NewsList;