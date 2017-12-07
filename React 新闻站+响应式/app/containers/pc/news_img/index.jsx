import React,{Component} from 'react';
import NewsImgBlock from '../../../components/PC/news_img_block'
import {getNewsImgData} from '../../../fetch/getdata/getdata';
class NewsImg extends Component{
  constructor(){
      super();
      this.state={
          data:[]
      }
  }
// 请求数据
    componentDidMount(){
        const {type}=this.props;
        var result=getNewsImgData(type);
        result.then(res=>res.json())
        .then(json=>{
            this.setState({
                data:json
            })
        })
    }

    render(){
        return(
              <NewsImgBlock data={this.state.data}/>   
        )
    }
}

export default NewsImg;