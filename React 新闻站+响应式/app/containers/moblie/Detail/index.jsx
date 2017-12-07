import React,{Component} from 'react';
import DetailComponent from '../../../components/Moblie/Detail'
import {getDetailData} from '../../../fetch/getdata/getdata';

class Detail extends Component{
  constructor(){
      super();
      this.state={
          data:{}
      }
  }

  
  componentDidMount() {
      const newsId=this.props.match.params.id;
     const result=getDetailData(newsId);
     result.then(res=>res.json())
     .then(json=>{
             this.setState({
                 data:json
             })
     })
  }
  
    render(){
        return(
           <DetailComponent {...this.state.data}/>
        )
    }
}

export default Detail;