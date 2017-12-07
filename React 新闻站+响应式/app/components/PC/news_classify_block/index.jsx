import React,{Component} from 'react';
import Item from './item';

class NewsClassifyBlock extends Component{


    render(){
        return(
            <div className="news-classify">
           {
               this.props.data?
               this.props.data.map(item=><Item key={item.id} {...item}/>)
               :"没有新闻咯"
           }
            </div>
        )
    }
}


export default NewsClassifyBlock;