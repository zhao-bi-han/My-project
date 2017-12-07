import {post} from '../post.js';


export const storePost=(articleId,username)=>{
    var result=post('/api/submitStore',{
        articleId,
        username
    });
    return result;
}