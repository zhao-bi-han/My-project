import React,{Component} from 'react';
import AdListBlock from '../../../components/PC/ad_list_block'
import {getAdData} from '../../../fetch/getdata/getdata';

class AdList extends Component{
     constructor(){
         super();
         this.state={
             data:[]
         }
     }

    componentDidMount(){
        // 请求数据
     var result=getAdData();
     result.then(res=>res.json())
     .then(json=>{
         this.setState({
             data:json
         })
     })
    }

    render(){
        return(
              <AdListBlock data={this.state.data}/>   
        )
    }
}

export default AdList;