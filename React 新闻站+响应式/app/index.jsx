import React, { Component } from 'react'
import { render } from 'react-dom'
import { Provider } from 'react-redux';
import {createStore} from 'redux';
import rootReducer from './reducers/index';
import { BrowserRouter as Router, Route, Link } from 'react-router-dom';
import App from './components';

import './static/css/common.less';
import './static/css/font.css';

const store=createStore(rootReducer,window.devToolsExtension ? window.devToolsExtension() : undefined)

render(
  <Provider store={store}>
     <App />
  </Provider>
  
  ,
  document.getElementById('root')
)
// react-responsive   响应式插件  media