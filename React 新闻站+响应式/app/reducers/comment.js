import * as actionTypes from '../constants/comment';

const init=[
    {
        username:"啦啦嘿",
        articleId:"1",
        comment:"瑞士出产的东西基本都是精工制造，中国也要像这方面发展，真正做到精工中国制造！",
        datatime:"1512114820222"
    }
]

const comments=(state=init,action)=>{
    switch(action.type){
        case actionTypes.COMMENT_ADD:
             state.unshift(action.comment)
             return [...state]             // 返回一个新的state   
        default:
        return state;
    }
}

export default comments;

