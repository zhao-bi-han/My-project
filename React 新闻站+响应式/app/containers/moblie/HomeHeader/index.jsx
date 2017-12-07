import React,{Component} from 'react';
import HomeHeaderComponent from '../../../components/Moblie/HomeHeader'
import {connect} from 'react-redux'
class HomeHeader extends Component{
    constructor(){
        super();
    }

   
    render(){
        return(
           <HomeHeaderComponent username={this.props.user.username}/> 
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
    }
}

export default connect(mapStateToProps,mapDispatchToProps)(HomeHeader);