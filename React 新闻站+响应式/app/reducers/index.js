import {combineReducers} from 'redux';
import user from './user';
import comments from './comment';
import newsdata from './newsdata';
const rootReducer=combineReducers({
    user,
    comments,
    newsdata
})

export default rootReducer;