import * as actionTypes from '../constants/userinfo';

const initialStore={};

 const  userinfo=(state=initialStore,action)=>{
    switch(action.type){
        case actionTypes.USERINFO_UPDATE:
        return action.data
        default:
        return state;
    }
}

export default userinfo;