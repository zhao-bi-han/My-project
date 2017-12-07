import React, { Component } from 'react';
import Home from './Home';
import Detail from '../../containers/pc/Detial'
import { BrowserRouter as Router, Route,Switch } from 'react-router-dom';
class PC extends Component {
    render() {
        return (
            <Router>
                <Switch>
                    <Route path='/' component={Home} exact />
                    <Route path='/detail/:id' component={Detail} />
                </Switch>
            </Router>
        )
    }
}

export default PC;