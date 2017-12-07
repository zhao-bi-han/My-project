import {post} from '../post.js';


export const postLoginFormData=(obj)=>{
  const result=post('/api/login',obj);
  return result;
}

export const postRegFormData=(obj)=>{
    const result=post('/api/register',obj);
    return result;
  }