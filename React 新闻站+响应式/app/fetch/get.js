import  'whatwg-fetch';

export function get(url){
    var result=fetch(url,{
        credentials:'include',
        hearders:{
            "Accept":"application/json,text/plain,*/*"
        }
    })
   return result;
}