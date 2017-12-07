import * as actionTypes from '../constants/user';


export const adduser=(username)=>{
     return {
         type:actionTypes.ADD_USERNAME,
         username
     }
}

export const removeuser=()=>{
    return {
        type:actionTypes.REMOVE_USER
    }
}

export const updatevisible=()=>{
  return{
      type:actionTypes.UPDATE_VISIBLE
  }
}