import {get} from '../get.js'
import {post} from '../post.js'

export const getOrderData=(username)=>{
    const result =get(`/api/orderlist/${username}`)
    return result;
}

// 提交用户评论
export const postComment=(id,comment)=>{
   const result=post('/api/submitComment',{
       id:id,
       comment:comment
   })
   return result;
}