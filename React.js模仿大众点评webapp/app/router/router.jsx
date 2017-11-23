import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link, Switch } from 'react-router-dom';
import Home from '../containers/Home';
import City from '../containers/City';
import User from '../containers/User';
import Search from '../containers/Search';
import Detail from '../containers/Detail';
import NotFound from '../containers/404';
import Login from '../containers/Login'
import Order from '../containers/order'

class RouterMap extends Component {
    render() {
        return (
            <Router>
                <div className="main">
                        <Switch>
                            <Route exact path='/' component={Home} />
                            <Route path="/city" component={City} />
                            <Route path="/user" component={User} />
                            {/*(/:keyword) 是可选参数*/}
                            <Route path="/search/:category/:keyword?" component={Search} /> 
                            <Route path="/detail/:id" component={Detail} />
                            {/*router 可选参数  即在哪个页面登录的，登录完了之后还要再跳转到哪个页面*/}
                            <Route path="/login/:router?" component={Login} />
                            <Route path="/order" component={Order} />
                            <Route component={NotFound} />
                        </Switch>
                </div>
            </Router>
        )
    }
}

export default RouterMap;