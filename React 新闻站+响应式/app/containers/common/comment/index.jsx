import React,{Component} from 'react';
import CommentComponent from '../../../components/Common/comment'
import {commentPost} from '../../../fetch/comment/comment';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import * as commentActionsFile from '../../../actions/comment';
import * as userActionsFile from '../../../actions/user';
import {message} from 'antd'

class Comment extends Component{
    constructor(){
        super();
    }
 
    commentSubmit(value){
       const username=this.props.user.username;
       const articleId=this.props.articleId;   // 文章的id
       if(value){
           const comment={
               username,
               articleId,
               comment:value,
               datatime:+Date.now()
           }
           // 真实开发将数据提交到后台，在重新让组件加载
        commentPost(comment).
        then(res=>res.json())
        .then(json=>{
           if(json.msg=="ok"){
            message.success("评论成功", 1);
           }
        })  
        
        // 这里将评论保存到redux中为了  在页面中显示，真实开发不用
        this.props.commentActions.addComment(comment);
       }
    }
   

    render(){
        return(
              <CommentComponent 
                commentSubmit={this.commentSubmit.bind(this)} 
                username={this.props.user.username || ''}
                userActions={this.props.userActions}
                />
        )
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        user: state.user
    }
}
const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        commentActions: bindActionCreators(commentActionsFile,dispatch),
        userActions:bindActionCreators(userActionsFile,dispatch)
    }
}
export default connect(mapStateToProps,mapDispatchToProps)(Comment);