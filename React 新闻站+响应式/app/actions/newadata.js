import * as actionTypes from '../constants/newsdata';


export const newsdataAdd=(newstype,data)=>{
 return {
     type:actionTypes.NEWSDATA_ADD,
     newstype,
     data
 }
}

