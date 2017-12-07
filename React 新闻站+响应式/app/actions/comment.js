import * as actionTypes from '../constants/comment';


export const addComment=(comment)=>{
    return {
        type:actionTypes.COMMENT_ADD,
        comment
    }
}