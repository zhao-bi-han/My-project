import React, { Component } from 'react'
import { render } from 'react-dom'
import { Provider } from 'react-redux';
import configureStore from './store/configureStore';
import { BrowserRouter as Router, Route, Link } from 'react-router-dom';
import App from './containers';

import './static/css/common.less';
import './static/css/font.css';

const store = configureStore();
render(
  <Provider store={store}>
    <App />
  </Provider>
  ,
  document.getElementById('root')
)
