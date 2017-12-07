import React, { Component } from 'react';
import { Tabs, Row, Col } from 'antd';
import NewsList from '../../../containers/pc/news_list';
import NewsImg from '../../../containers/pc/news_img';
import NewsClassify from '../../../containers/pc/news_classify';
import NewsOtherBlock from '../news_other_block';
const TabPane = Tabs.TabPane;

import './style.less';
class NewsContainer extends Component {

    render() {
        const navClassify = [
            { name: "要闻", type: "yaowen" },
            { name: "财经", type: "caijing" },
            { name: "体育", type: "tiyu" },
            { name: "娱乐", type: "yule" },
            { name: "房产", type: "fangchan" },
            { name: "科技", type: "keji" },
            { name: "汽车", type: "qiche" },
            { name: "数码", type: "shuma" }
        ]
        return (
            <div className="news-container">
                <div className="hot-news">
                    <h2>习近平就埃及发生严重恐怖袭击向埃总统致慰问电</h2>
                    <p>
                    <i className="iconfont icon-dian"></i>
                        习近平将出席中国共产党与世界政党对话会开幕式
                   </p>
                    <p>
                        <i className="iconfont icon-dian"></i>
                        牢记使命 永远做草原上的“红色文艺轻骑兵
                   </p>
                </div>
                <div className="list-news">
                    <NewsList  type="首页" />
                </div>
                <div className="line"></div>
                <div className="tab-news">
                    <div className="card-container">
                        <Tabs type="card">
                            {
                                navClassify.map((item,index) =>  
                                        <TabPane tab={item.name} key={index}>
                                            <NewsImg type={item.type} />
                                        </TabPane> 
                                )
                            }
                        </Tabs>
                    </div>
                </div>
                <div className="line"></div>
                <div className="block-list">
                    <NewsClassify />
                </div>
                <div className="line"></div>
                <div className="other">
                   <NewsOtherBlock />
                </div>
            </div>
        )
    }

}

export default NewsContainer;