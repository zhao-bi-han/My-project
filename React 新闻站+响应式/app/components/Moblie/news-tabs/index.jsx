import React, { Component } from 'react';
import NewsList from '../news-list'
import { Tabs } from 'antd'
const TabPane = Tabs.TabPane;
import './style.less';

const tabdata = ["首页", "国际", "军事", "娱乐", "社会", "历史", "旅游", "公益", "图片", "视频"]

class NewsTabsComponent extends Component {
    constructor(){
        super();
        this.state={
            data:[]
        }
    }
    
    // 页面初次加载
    componentDidMount() {
        this.changeHandle(0);
    }

    changeHandle(index){
      const type=tabdata[index];
      //从redux中获取数据
      const newsdata=this.props.newsdata;
      const flag=newsdata.filter(item=>item.type==type);
      // 如果redux中没有这个type的数据，则发送请求
      if(flag.length===0){
        this.props.getDataHandle(type,this.callback.bind(this))
      }else{
        this.callback(flag[0].data)
      }
    }
    callback(data){
        this.setState({
            data
        })
    }
    render() {
        return (
            <div className="nav">
                <Tabs defaultActiveKey="0" onChange={this.changeHandle.bind(this)}>
                    {
                        tabdata.map((item, index) => <TabPane key={index} tab={item} onClick={this.changeHandle.bind(this)}>
                            {/*新闻列表*/}
                            <NewsList data={this.state.data}/>
                        </TabPane>)
                    }
                </Tabs>
            </div>
        )
    }
}

export default NewsTabsComponent