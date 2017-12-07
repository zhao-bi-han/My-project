import  'whatwg-fetch';

function optionsTran(params){
   var result='';
   for(var item in params){
        result+=`&${item}=${encodeURIComponent(params[item])}`
   }
   if(result){
           result=result.slice(1);
   }
   return result;
}

export function post (url,options){
    var result=fetch(url,{
        method:'POST',
        credentials:"include",
        headers:{
            "Accept":"application/json,text/plain,*/*",
            "Content-Type":"application/x-www-form-urlencoded"
        },
        body:optionsTran(options)
    })
    return result;
}