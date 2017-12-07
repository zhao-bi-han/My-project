import React,{Component} from 'react';
import './style.less'

class Item extends Component{
    render(){
        const {img,title}=this.props
        return(
            <div className="recommend">
                <img src={require('../../news_list_block/item/img/'+img)}/>
                <p>{title}</p>
            </div>
        )
    }
}

export default Item;