import {get} from '../get';

// 请求广告数据
export const getAdData=()=>{
    const result=get('/api/homead');
    return result;
}

// 推荐列表数据

export const getListData=(city,page)=>{
    const result=get(`/api/homelist/${encodeURIComponent(city)}/${page}`);
    return result;
}