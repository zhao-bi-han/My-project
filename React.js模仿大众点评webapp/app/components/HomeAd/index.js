import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import './style.less';

class HomeAd extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    render(){
        const datas=this.props.data;
        return(
            <div id="home-ad">
              <h2>超值特惠</h2>
              <div className="ad-container clear-fix">
               {datas.map(data=><div className="ad-item float-left" key={data.title}>
                      <div className="ad-img">
                      <img src={require('./img/'+data.img)} title={data.title}/>
                      </div>
                    <p className="title">{data.title}</p>
                    <p className="price"><i>￥</i>{data.price}<i className="old"><i>￥</i>{data.price+12}</i></p>
               </div>)}
              </div>
            </div>
        )
    }
}

export default HomeAd;