import {get} from '../get.js';

export const getNewsListData=(type)=>{
  var result=get(`/api/data/listnews/${encodeURIComponent(type)}`);
  return result;
}

export const getNewsImgData=(type)=>{
    var result=get(`/api/data/imgnews/${type}`);
    return result;
}

export const getNewsClassifygData=()=>{
  var result=get(`/api/data/newsclassify`);
  return result;
}

export const getAdData=()=>{
  var result=get(`/api/data/ad`);
  return result;
}


export const getDetailData=(id)=>{
  var result=get(`/api/data/detail/${id}`);
  return result;
}