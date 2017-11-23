import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';

import './style.less'
class OrderItem extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
        this.state={
            commentState:0   // 0 未评价 1 评价中 2 已评价
        }
    }

     componentDidMount(){
         this.setState({
             commentState:this.props.commentState
         })
     }
     // 评论中
     showBox(){
         if(this.state.commentState==2){  // 已经评论过了
              return;
         }
         this.setState({
             commentState:1
         })
     }
     // 取消评论
     hideBox(){
         this.setState({
             commentState:0
         })
     }
     submitClickHandle(){
         const submitComment=this.props.submitComment
         const id=this.props.id   
         const commentTextDom=this.refs.commentText
         const value=commentTextDom.value.trim()
          if(!value){
                 return
          }
          // 提交评价
          submitComment(id,value,this.commentOk.bind(this))
     }
     commentOk(){   // 提交成功
         this.setState({
             commentState:2   // 已评价
         })
     }
    render(){
        const {img,title,price,number,commentState}=this.props;
        return(
            <div className="order-item">
                <div className="order-item-img">
                   <img src={require('./img/'+img)}/>
                </div>
                <div className="order-item-info">
                   <div className="order-title">
                     <span>{title}</span>
                     <a href="javascript:;" onClick={this.showBox.bind(this)}>{
                         this.state.commentState==0?"待评价":
                         this.state.commentState==1?"评价中":
                         "已评价"
                        }</a>
                   </div>
                   <p>数量：{number}</p>
                   <p>总价：{price}</p>
                </div>
                {
                    this.state.commentState===1
                    ?<div className="comment-box">
                     <textarea ref="commentText"></textarea>
                     <button onClick={this.submitClickHandle.bind(this)}>提交</button>
                     <button onClick={this.hideBox.bind(this)}>取消</button>
                    </div>
                    :''
                }
            </div>
        )
    }
}

export default OrderItem;