import {get} from '../get';

export const getDetailData=(id)=>{
    const result=get(`/api/detail/${id}`)
    return result;
}