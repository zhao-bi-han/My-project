import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import Star from '../Star'
import './style.less'

class DetailComponent extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
        this.state = {
            screenWidth: '100%'
        }
    }
    componentDidMount() {
        // 添加屏幕尺寸变化监听事件
        this.getScreenWidth();
        window.addEventListener('resize', this.getScreenWidth.bind(this))
    }
    getScreenWidth() {
        const width = window.screen.width;
        this.setState({
            screenWidth: width
        })
    }

    render() {
        const { img, title, subTitle, price,star,address } = this.props;
        return (
            <div className="detail-content">
                <div className="detail-info">
                    <div className="info-img">
                        <img src={require('./img/' + img)} style={{ width: `${this.state.screenWidth}px` }} />
                        <div className="text">
                            <p className="title">{title}</p>
                            <p className="subtitle">{subTitle}</p>
                        </div>
                    </div>
                    <div className="buy-box">
                        <span>￥{price}</span>
                        <a href="javascript:;">立即购买</a>
                    </div>
                    <div className="advantage ">
                        <ul>
                            <li><i className="iconfont icon-tuikuan"></i> 随时可退</li>
                            <li><i className="iconfont icon-wancheng"></i> 过期自动退</li>
                        </ul>
                    </div>
                </div>
                 {/*评价*/}
                <div className="user-review box">
                   <div className="review-title">
                    <Star star={star}/> 
                    <span>4.0</span>
                    <a href="javascript:;">6234人评价 <i className="iconfont icon-iconfont13"></i></a>
                   </div>
                   <div className="review-content">
                      <ul>
                        <li className="hot">回头客350</li>
                        <li className="hot">上菜快48</li>
                        <li className="hot">干净卫生123</li>
                        <li className="hot">现做现卖15</li>
                        <li>不推荐5</li>
                        <li>闺蜜聚会11</li>
                        <li>朋友聚会16</li>
                        <li>下午茶33</li>
                      </ul>
                   </div>
                </div>

                {/*商家信息*/}
                <div className="seller-info box">
                    <div className="seller-title">商家信息</div>
                    <div className="seller-content">
                        <div className="content">
                            <h3>{title}</h3>
                            <p>{address}</p>
                            <p><i className="iconfont icon-didian"></i> <span>离我最近</span></p>
                        </div>
                        <div className="phone">
                            <i className="iconfont icon-dianhua"></i>
                        </div>
                    </div>
                </div>

                {/*购买须知*/}
                <div className="buy-note box">
                    <div className="note-title">购买须知</div>
                    <div className="note-content">
                        <dl>
                            <dt>有效期</dt>
                            <dd>2017.6.22 至 2018.6.22</dd>
                        </dl>
                        <dl>
                            <dt>不可用日期</dt>
                            <dd>9月18日 - 9月20日</dd>
                        </dl>
                        <dl>
                            <dt>使用时间</dt>
                            <dd>09:00 -21:00</dd>
                        </dl>
                        <dl>
                            <dt>使用规则</dt>
                            <dd>
                                <ul>
                                    <li>
                                        <i className="iconfont icon-circle"></i>
                                        无需预约，消费高峰时可能需要等位
                                    </li>
                                    <li>
                                        <i className="iconfont icon-circle"></i>
                                        每张美团券建议1人使用
                                    </li>
                                    <li>
                                        <i className="iconfont icon-circle"></i>
                                        团购用户不可同时享受商家其他优惠
                                    </li>
                                    <li>
                                        <i className="iconfont icon-circle"></i>
                                        堂食外带均可，可免费打包
                                    </li>
                                    <li>
                                        <i className="iconfont icon-circle"></i>
                                        提供免费WiFi
                                   </li>
                                    <li>
                                        <i className="iconfont icon-circle"></i>
                                        免费提供5个停车位
                                   </li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        )
    }
}

export default DetailComponent;