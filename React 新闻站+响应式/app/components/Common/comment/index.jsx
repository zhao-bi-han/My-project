import React,{Component} from 'react';
import {Row,Col,Form, Input, Button, Icon} from 'antd';
import CommentList from '../../../containers/common/comment-list'
const FormItem = Form.Item;
const { TextArea } = Input

import './style.less'
class CommentComponent extends Component{


    handleSubmit(e){
        e.preventDefault();
        const commentSubmit=this.props.commentSubmit;
        const formData=this.props.form.getFieldsValue();
        commentSubmit(formData.comment);
        this.props.form.setFieldsValue({comment:''});
    }
    handleLogin(){
      this.props.userActions.updatevisible()
    }
    render(){
        const { getFieldDecorator } = this.props.form;
        return(
            <div className="comment-wrap">
              <div className="top">
                 <h3>网友评论</h3>
                 <p>文明上网理性发言，请遵守新闻评论服务协议</p>
                 <a href="javascript:;">11条评论</a>
              </div>
              <div className="comment-container">
                 <Row>
                    <Col span={3} className="pic">
                      <img  src={require('./img/girl2.png')}/>
                    </Col>
                    <Col span={21} className="comment-form"> 
                       <Form onSubmit={this.handleSubmit.bind(this)}>
                          <FormItem>
                          {
                            getFieldDecorator('comment',{})(
                            <textarea></textarea>
                            ) 
                          }
                          </FormItem>
                            {
                              this.props.username?
                                 <Button htmlType="submit">发布评论</Button>
                                 :<Button onClick={this.handleLogin.bind(this)}>登录</Button>
                            }
                             
                       </Form>
                    </Col>
                 </Row>
              </div>
              <div className="comment-list">
                <div className="list-nav clearfix">
                  <div className="nav-left">
                    <p>全部评论<span>/</span></p>
                    <a href="javascript:;">我的评论</a>
                  </div>
                  <div className="nav-right">
                    <p>最热<span>/</span><em>最新</em></p>
                  </div>
                </div>
                <CommentList />
              </div>
            </div>
        )
    }
}

export default Form.create()(CommentComponent);