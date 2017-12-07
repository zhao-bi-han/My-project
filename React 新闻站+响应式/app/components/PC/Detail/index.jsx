import React, { Component } from 'react';
import Header from '../Header';
import Comment from '../../../containers/common/comment'
import Store from '../../../containers/common/store'
import Footer from '../../PC/Footer';
import { Row, Col } from 'antd'
import Item from './item'
import './style.less'

class DetialComponent extends Component {
    constructor() {
        super();
        this.state = {
            isAddClass: false
        }
    }
    componentDidMount() {
        const scrollEle = this.refs.scrollEle;
        let timeout;
        window.addEventListener('scroll', () => {
            if (timeout) {
                clearTimeout(timeout);
            }
            timeout = setTimeout(() => {
                const top = scrollEle.getBoundingClientRect().top;
                if (top && top <= 0) {
                    this.setState({
                        isAddClass: true
                    })
                }else{
                    this.setState({
                        isAddClass: false
                    })
                }
            }, 50)

        })

    }


    createMarkUp() {
        return { __html: this.props.data.content }
    }
    // 收藏
    storeHandle() {
        const storeSubmit = this.props.storeSubmit;
    }

    render() {
        const { data, recommend, articleId } = this.props;

        return (
            <div className="detail">
                <Header />
                <div className="container">
                    <h1 ref="scrollEle">{data.title}</h1>
                    <Row>
                        <Col span={3} className={`silder ${this.state.isAddClass ? "stop" : ""}`}  >
                                <div className="data-time" >
                                    <p className="year"><span>2017</span></p>
                                    <p className="month">11/29</p>
                                    <p className="time">11:08</p>
                                </div>
                                <div className="from" >中国新闻网</div>
                                <div className="share">
                                    <ul>
                                        <li className="weixin"><i className="iconfont icon-weixin"></i></li>
                                        <li className="qq"><i className="iconfont icon-qq"></i></li>
                                        <li className="kongjian"><i className="iconfont icon-kongjian"></i></li>
                                        <li className="weibo"><i className="iconfont icon-weibo"></i></li>
                                    </ul>
                                </div>
                        </Col>
                        <Col span={17} offset={this.state.isAddClass?3:0} className="content">
                            <div className="article">
                                <div dangerouslySetInnerHTML={this.createMarkUp()}></div>
                                <div className="article-end">
                                    <span className="end">THE END</span>
                                    <div>
                                      <a href="javascript:;"><i className="iconfont icon-zan"></i></a>
                                    {/*收藏*/}
                                    <Store articleId={articleId} />
                                    </div>
                                  
                                </div>
                            </div>
                            {/*评论*/}
                            <div className="comment">
                                <Comment articleId={articleId} />
                            </div>
                            <Footer/>
                        </Col>
                        <Col span={4} className="recommend-list">
                            <h3>相关推荐</h3>
                            <span><i className="iconfont icon-zhuanhuan"></i> 换一换</span>
                            {
                                recommend.map(item => <Item key={item.id} {...item} />)
                            }
                        </Col>
                    </Row>
                </div>


       
            </div>

        )
    }
}

export default DetialComponent;


