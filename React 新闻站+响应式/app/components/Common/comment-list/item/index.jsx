import React, { Component } from 'react';
import { Row, Col } from 'antd';
import './style.less'

class Item extends Component {

  constructor() {
    super();
    this.state = {
      datatime: ''
    }
  }

   
  componentDidMount() {
    this.getDataTime()
    this.timer=setInterval(this.getDataTime.bind(this),10000)
   }
   componentWillUnmount(){   //评论组件销毁的时候清除定时器
    clearInterval(this.timer)
}
   getDataTime(){
     const datatime=this.props.datatime;
     const duration=(+Date.now()-datatime)/1000          //得到秒数
     this.setState({
      datatime:duration>60
            ?duration/3600>1
                ?duration/86400>1
                       ?`${(Math.round(duration/86400))}天前`:`${Math.round(duration/3600)}小时前`
                :`${Math.round(duration/60)} 分前`
            :`${Math.round(Math.max(duration, 1))} 秒前`
     })
   }


  render() {
    const { username, comment} = this.props;
    return (
      <div className="comment-list-item">
        <Row >
          <Col span={3}>
            <img src={require(`./img/pic4.png`)} />
          </Col>
          <Col span={21} className="comment-content">
            <div className="top">
              <span className="user">{username}</span>
              <span className="datatime">{this.state.datatime}</span>
            </div>
            <div className="middle">
              <p>{comment}</p>
            </div>
            <div className="bottom">
              <span><i className="iconfont icon-zan"></i> 赞<em>2</em></span>
              <span><i className="iconfont icon-huifu"></i> 回复</span>
            </div>
          </Col>
        </Row>
      </div>
    )
  }
}

export default Item;