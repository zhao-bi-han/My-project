import React, { Component } from 'react';
import PC from './PC';
import Moblie from './Moblie';

import MediaQuery from 'react-responsive';

class Home extends Component {
    render() {
        return (
            <div className="home">
                <MediaQuery query="(min-device-width:800px)">
               
                <PC />
                </MediaQuery>
                <MediaQuery query="(max-device-width:799px)">
               <Moblie />
                </MediaQuery>
            </div>
        )
    }
}

export default Home