import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import BannerAnim, { Element } from 'rc-banner-anim';
import TweenOne from 'rc-tween-one';
import { Link } from 'react-router-dom'
import 'rc-banner-anim/assets/index.css';

import './style.less';
class Category extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
    }

    render() {
        return (
            <div id="home-category" >
                <BannerAnim autoPlay>
                    <Element key="demo1">
                        <TweenOne animation={{ x: -30, type: 'from' }}>
                            <ul className="clear-fix">
                                <Link to="/search/meishi"><li className="float-left meishi">美食</li></Link>
                                <Link to="/search/maoyan"><li className="float-left miaoyan">猫眼电影</li></Link>
                                <Link to="/search/jiudian"><li className="float-left jiudian">酒店</li></Link>
                                <Link to="/search/yule"><li className="float-left yvle">娱乐</li></Link>
                                <Link to="/search/waimai"><li className="float-left waimai">外卖</li></Link>
                                <Link to="/search/huoguo"><li className="float-left huoguo">火锅</li></Link>
                                <Link to="/search/liren"><li className="float-left liren">丽人</li></Link>
                                <Link to="/search/gouwu"><li className="float-left gouwu">购物</li></Link>
                                <Link to="/search/zhoubianyou"><li className="float-left zhoubianyou">周边游</li></Link>
                               <Link to="/search/ktv"> <li className="float-left ktv">KTV</li></Link>
                            </ul>
                        </TweenOne>
                    </Element>
                    <Element key="demo2">
                        <TweenOne animation={{ x: -30, type: 'from' }}>
                            <ul className="clear-fix">
                                <Link to="/search/jiehun"><li className="float-left jiehun">婚纱摄影</li></Link>
                                <Link to="/search/shenghuo"> <li className="float-left shenghuo">生活服务</li></Link>
                                <Link to="/search/jingdian"> <li className="float-left jingdian">景点</li></Link>
                                <Link to="/search/aiche"><li className="float-left aiche">爱车</li></Link>
                                <Link to="/search/yundong"><li className="float-left yundong">运动健身</li></Link>
                                <Link to="/search/qinzi"><li className="float-left qinzi">亲子</li></Link>
                                <Link to="/search/jiazu"><li className="float-left jiazhuang">家装</li></Link>
                                <Link to="/search/xuexi"><li className="float-left peixun">学习培训</li></Link>
                                <Link to="/search/yiliao"><li className="float-left yiliao">医疗健康</li></Link>
                                <Link to="/search/zizhu"><li className="float-left zizhu">自助餐</li></Link>
                            </ul>
                        </TweenOne>
                    </Element>
                </BannerAnim>
            </div>
        )
    }
}

export default Category;