import React,{Component} from 'react';
import UserComponent from '../../../components/Moblie/User'
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import * as userActionsFile from '../../../actions/user';

class User extends Component{

    componentDidMount(){
        // 先判断用户是否已登录
    }

    render(){
        return(
            <UserComponent 
                userActions={this.props.userActions}
                username={this.props.user.username} 
                history={this.props.history}/>
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
        userActions: bindActionCreators(userActionsFile,dispatch)
    }
}
export default connect(mapStateToProps,mapDispatchToProps)(User)