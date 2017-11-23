import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import {connect} from 'react-redux';
import {getOrderData,postComment} from '../../fetch/order/order'
import Header from '../../components/Header'
import OrderComponent from '../../components/OrderComponent'
class Order extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
       this.state={
           data:[]
       }
    }

    componentDidMount(){
       const username=this.props.userinfo.username;
       if(username){
            this.loadOrderList(username);
       }else{
           this.props.history.push('/login')
       }
    }
    loadOrderList(username){
         const result=getOrderData(username);
         result.then(res=>{
             return res.json()
         }).then(json=>{
             this.setState({
                 data:json
             })
         })
    }
    // 提交评价   id 商户id 
    submitComment(id,value,callback){
          const result=postComment(id,value);
          result.then(res=>{
              return res.json()
          }).then(json=>{
              if(json.errno===0){
                 callback()
              }
          })
    }
    render(){
        return(
            <div className="order">
                <Header title="全部订单"/>
                <OrderComponent data={this.state.data} submitComment={this.submitComment.bind(this)}/>
            </div>
        )
    }
}


const mapStateToProps = (state, ownProps) => {
    return {
        userinfo: state.userinfo
    }
}
 const mapDispatchToProps = (dispatch, ownProps) => {
    return {
    }
}

export default connect(mapStateToProps,mapDispatchToProps)(Order);