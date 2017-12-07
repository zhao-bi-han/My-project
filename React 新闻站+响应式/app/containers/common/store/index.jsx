import React,{Component} from 'react';
import {connect} from 'react-redux';
import {storePost} from '../../../fetch/store/store';
import {bindActionCreators} from 'redux';
import * as userActionsFile from '../../../actions/user';
import {message} from 'antd'
class Store extends Component{

    constructor(){
        super();
    }
    
    storeHandle(){
      const  articleId=this.props.articleId;
      const username=this.props.user.username;
      storePost(articleId,username).
      then(res=>res.json()).
      then(json=>{
        if(json.msg=="ok"){
            message.success("收藏成功", 1);
           }
      })
      
    }
    handleLogin(){
        message.success("你还没有登录", 1,()=>{
            this.props.userActions.updatevisible()
        });
        
        
    }
    // 
    render(){
        return(
            <a href="javascript:;" className="store"
                onClick={this.props.user.username!==''?this.storeHandle.bind(this):this.handleLogin.bind(this)}
            ><i className="iconfont icon-shoucang"></i></a>
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
        userActions:bindActionCreators(userActionsFile,dispatch)
    }
}

export default connect(mapStateToProps,mapDispatchToProps)(Store);