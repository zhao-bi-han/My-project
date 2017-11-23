import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import Item from './item';
import './style.less';

class ListComponent extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    render(){
        const datas=this.props.datas;
        return(
            <div id="lists">
                {datas.map((data,index)=><Item data={data} key={index}/>)}
            </div>
        )
    }
}

export default ListComponent;