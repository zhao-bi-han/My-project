import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import { Link } from 'react-router-dom';

import './style.less';

class UserInfo extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    render() {
        const { cityName, username } = this.props;
        return (
            <div className="user-container">
                <div className="user-info">
                    <div className="user-pic">
                        <img src={require("./img/pic.jpg")} />
                    </div>
                    <div className="user-content">
                        <p>
                            {/*  <i className="iconfont icon-wode"></i>*/}
                            {username}
                            <i className="iconfont icon-V"></i>
                        </p>
                        <p>
                            {/* <i className="iconfont icon-didian"></i>  {cityName}*/}
                            账户余额：0
                        </p>
                    </div>
                </div>
                <div className="user-list">
                    <div className="order">
                        <span>
                            <Link to="/order">
                                <i className="iconfont icon-dingdan"></i>
                                全部订单
                                <span><i className="iconfont icon-iconfont13"></i></span>
                            </Link>
                        </span>
                        <i></i>
                    </div>
                    <div className="orderindex">
                        <ul>
                            <li>
                                <i className="iconfont icon-fukuan"></i>
                                <p>待付款</p>
                            </li>
                            <li>
                                <i className="iconfont icon-shiyonghongbao"></i>
                                <p> 待使用</p>
                            </li>
                            <li>
                                <i className="iconfont icon-pingjia"></i>
                                <p>待评价</p>
                            </li>
                            <li>
                                <i className="iconfont icon-tuikuan-copy"></i>
                                <p> 退款/售后</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div className="list">
                    <ul>
                        <li>
                            <i className="iconfont icon-shoucang"></i>
                            我的收藏
                           <span><i className="iconfont icon-iconfont13"></i></span>
                        </li>
                        <li>
                            <i className="iconfont icon-qiajuan"></i>
                            我的抵用券
                             <span><i className="iconfont icon-iconfont13"></i></span>
                        </li>
                        <li>
                            <i className="iconfont icon-liwu"></i>
                            我的抽奖单
                            <span><i className="iconfont icon-iconfont13"></i></span>
                        </li>
                        <li>
                            <i className="iconfont icon-icon_jifen"></i>
                            积分换礼品
                           <span><i className="iconfont icon-iconfont13"></i></span>
                        </li>
                    </ul>
                    <ul className="city">
                        <Link to="/city"><li><i className="iconfont icon-didian"></i>
                            当前城市
                        <span>{cityName}</span>
                        </li></Link>
                    </ul>
                </div>
            </div>
        )
    }
}

export default UserInfo;



