import * as actionTypes from '../constants/store.js';

export const update=(data)=>{
   return {
       type:actionTypes.STORE_UPDATE,
       data
   }
}

export const add=(id)=>{
  return {
      type:actionTypes.STORE_ADD,
      id
  }
}

export const remove=(id)=>{
    return {
        type:actionTypes.STORE_REMOVE,
        id
    }
}
