import React,{Component} from 'react';
import Item from './item';

class CommentListComponent extends Component{
    
     constructor(){
         super();
     }

    render(){
        const comments=this.props.comments;
        return(
        <div className="comment-list-container">
        {
            comments
            ?comments.map((comment,index)=><Item key={index} {...comment} />)
            : "还没有评论啦，刚快写下你的评论吧！"
        }   
        </div>
        )
    }
}

export default CommentListComponent;