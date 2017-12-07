import * as actionTypes from '../constants/user';

const init={
    username:'',
    visible:false
}
const user=(state=init,action)=>{
   switch(action.type){
       case actionTypes.ADD_USERNAME:
           return {...state,username:action.username}
       case  actionTypes.REMOVE_USER:
           return {...state,username:''}
       case actionTypes.UPDATE_VISIBLE:
           return {...state,visible:!state.visible}
       default:
       return state;
   }
}

export default user;

