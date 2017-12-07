import React,{Component} from 'react';
import Item from './item';

class NewsListBlock extends Component{


    render(){
        const data=this.props.data;
        return(
            <div className="news-list">
           {
            data
            ?data.map(item=> <Item {...item} key={item.id} />)
            :"没有新闻哦"
           }
           
            </div>
        )
    }
}


export default NewsListBlock;