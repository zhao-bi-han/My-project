import React,{Component} from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import './style.less'
class LoadMore extends Component{
    constructor(){
        super();
        this.shouldComponentUpdate=PureRenderMixin.shouldComponentUpdate.bind(this);
    }

  // 点击加载更多
    loadMoreHandle(){
        this.props.loadMoreData()
    }

 // 上拉加载 更多
    componentDidMount(){     
        const loadMoreFn=this.props.loadMoreData  // 由父组件传过来加载更多数据的函数
        const wrapper=this.refs.wrapper;   // 获取dom 元素
        let timeout;
        window.addEventListener('scroll',()=>{
            if(this.props.isLoadingMore){
                // 正在加载 直接返回
                 return;
            }
            if(timeout){
                  clearTimeout(timeout);
            }
            timeout=setTimeout(callback,50)    // 差不多滚动一下触发一次，保证在连续滚动时不会连续触发
        })
       function callback(){
           const top =wrapper.getBoundingClientRect().top    // 距离顶部的值
           const windowHeight=window.screen.height   // 得到屏幕的高度
           if(top && top<windowHeight){  // 当 DOM 距离顶部的距离小于 屏幕的高时（DOM 露出来时） 触发
             loadMoreFn(); 
           }
       }
    }
    render(){
        const {isLoadingMore}=this.props;
        return(
            <div className="load-more" ref="wrapper">
            {
                isLoadingMore
                ?<span>正在加载..</span>
                :<span onClick={this.loadMoreHandle.bind(this)}>加载更多</span>
            }
                
            </div>
        )
    }
}

export default LoadMore;