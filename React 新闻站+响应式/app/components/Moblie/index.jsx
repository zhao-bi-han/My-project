import React ,{Component} from 'react';
import Home from "./Home";
import Login from '../../containers/moblie/Login'
import Detail from '../../containers/moblie/Detail'
import Register from '../../containers/moblie/Register'
import User from '../../containers/moblie/User'
import Upload from './upload'
import { BrowserRouter as Router, Route,Switch } from 'react-router-dom';
class Moblie extends Component{
    render(){
        return(
           <Router>
              <Switch>
                   <Route exact path="/" component={Home}/>
                   <Route path="/detail/:id" component={Detail}/>
                   <Route path="/login" component={Login}/>
                   <Route path="/user" component={User}/>
                   <Route path="/upload" component={Upload}/>
                   <Route path="/register" component={Register}/>
              </Switch>
           </Router> 
        )
    }
}

export default Moblie;