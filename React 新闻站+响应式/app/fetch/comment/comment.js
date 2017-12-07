import {post} from '../post.js';


export const commentPost=(options)=>{
    var result=post('/api/submitComment',options);
    return result;
}