import React,{Component} from 'react';
import Item from './item';

class NewsImgBlock extends Component{


    render(){
        return(
            <div className="news-img">
           {
               this.props.data
               ?this.props.data.map(item=><Item key={item.id} {...item}/>)
               :"没有数据咯"
           }
            </div>
        )
    }
}


export default NewsImgBlock;