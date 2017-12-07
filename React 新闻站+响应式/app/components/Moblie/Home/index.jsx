import React,{Component} from 'react';
import Header from '../../../containers/moblie/HomeHeader'
import NewsTabs from '../../../containers/moblie/news-tabs'
class Home extends Component{
    render(){
        return(
            <div className="mobile-home">
               <Header />
               <NewsTabs />
            </div>
        )
    }
}

export default Home;