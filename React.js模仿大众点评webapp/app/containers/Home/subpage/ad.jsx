import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import { getAdData } from '../../../fetch/home/home';
import HomeAd from '../../../components/HomeAd'
import Loading from '../../../components/loading'
class Ad extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
        this.state = {
            data: []
        }
    }
    componentDidMount() {
        const result = getAdData();
        result.then(res => {
            return res.json();
        }).then(json => {
            const data = json;
            if (data.length) {
                this.setState({
                    data: data
                })
            }

        })
    }

    render() {
        return (
            <div className="adver">
             {this.state.data? 
                <HomeAd data={this.state.data}/> : <Loading /> 
            } 
            </div>
        )
    }
}

export default Ad;