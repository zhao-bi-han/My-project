import {get} from '../get'

export const getCityData=()=>{
    const result=get('/api/city');
    return result;
}