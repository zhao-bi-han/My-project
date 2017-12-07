import * as actionTypes from '../constants/newsdata';


 const newsdata=(state=[],action)=>{
    switch(action.type){
        case actionTypes.NEWSDATA_ADD:
           return [...state,{type:action.newstype,data:action.data}]
        default:
        return state
    }
}

export default newsdata;