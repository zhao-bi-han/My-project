import React,{Component} from 'react';
import Item from './item'

class NewsList extends Component{
    render(){
        return(
             <div className="news-list">
                {
                    this.props.data?
                    this.props.data.map(item=><Item key={item.id} {...item} />)
                    :"没有新闻啦"
                }
             
             </div>
        )
    }
}

export default NewsList;