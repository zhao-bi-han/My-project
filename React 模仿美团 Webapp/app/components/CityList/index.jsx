import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';

import '../../static/css/common.less'
import './style.less'

class CityList extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    changeHandle(cityName){
        this.props.changeFn(cityName);
    }
    render(){
        const {cityData,currentCity}=this.props;
        return(
            <div className="city-list">
              <h2>热门城市</h2>
                <ul className="clear-fix">
                 {cityData.map(data=>
                  <li key={data.id} onClick={this.changeHandle.bind(this,data.cityName)} className="float-left">
                    <a href="javascript:;" className={currentCity==data.cityName?'active':''}>{data.cityName}</a> 
                     </li>
                )}
                </ul>
            </div>
        )
    }
}

export default CityList;