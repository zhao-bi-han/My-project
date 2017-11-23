import * as actionTypes from '../constants/store.js'

const initState=[];
const store=(state=initState,action)=>{
     switch(action.type){
            case actionTypes.STORE_UPDATE:
               return action.data
            case actionTypes.STORE_ADD:
                 state.unshift(action.id)
                 return state
            case actionTypes.STORE_REMOVE:
             return state.filter(item=>{
                return  item!==action.id
             })
            default:
            return state;
     }
}

export default store;
