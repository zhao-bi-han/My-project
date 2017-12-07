import React,{Component} from 'react';
import Header from '../Header'
import {Row,Col,Modal} from 'antd';
import UploadComponent from '../upload'
import './style.less';
class UserComponent extends Component{

    constructor(){
        super();
        this.state={
            visible:false,
            imgUrl:''
        }
    }
    // 退出登录
   signout(){
       this.props.userActions.removeuser();
       this.props.history.push('/');
   }
  //上传头像
  showHandle(flag){
      this.setState({
          visible:flag
      })
  }

  // 上传成功
uploadSuccess(url){
    setTimeout(()=>this.showHandle(false),1000);
    this.setState({
        imgUrl:url
    })
}


    render(){
        return(
           <div className="user">
              <Header title="个人中心"/>
              <div className="user-container">
                 <div className="user-info">
                     <Row>
                       <Col span={6}>
                         <img 
                             src={this.state.imgUrl==""?require('./img/girl2.png'):this.state.imgUrl} 
                             onClick={this.showHandle.bind(this,true)}/> 
                       </Col>
                       <Col span={18}>
                        <p><i className="iconfont icon-V"></i>{this.props.username}</p>
                        <p>说点什么吧。。</p>
                       </Col>
                     </Row>
                 </div>
                 <div className="user-list" onClick={this.signout.bind(this)}>
                      退出登录
                 </div>
              </div>
              <Modal visible={this.state.visible} onCancel={this.showHandle.bind(this,false)}>
                 <UploadComponent uploadSuccess={this.uploadSuccess.bind(this)}/>       
              </Modal>
           </div>
        )
    }
}

export default UserComponent