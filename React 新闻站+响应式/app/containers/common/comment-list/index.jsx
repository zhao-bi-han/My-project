import React,{Component} from 'react';
import CommentListComponent from '../../../components/Common/comment-list'
import {connect} from 'react-redux';

class CommentList extends Component{
  

    render(){
        return(
              <CommentListComponent comments={this.props.comments}/>
        )
    }
}


const mapStateToProps = (state, ownProps) => {
    return {
        comments: state.comments
    }
}

const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        }
}

export default connect(mapStateToProps,mapDispatchToProps)(CommentList) ;