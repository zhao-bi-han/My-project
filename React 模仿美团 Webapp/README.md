环境搭建
1、webpack相关配置文件

组件编写
1、考虑这个组件和数据库有没有交互，进行组件分类

css字体
1、 在webpack.config.js 加载相应的loader

轮播图使用   react-swipe插件
安装  npm i swipe-js-iso   react-swipe --save


koa 模拟数据端口

1、在mock文件中配置server.js 文件，模拟后端数据接口
2、webpack.config.js 文件中 代理配置
3、在home文件中 存放首页静态的JSON数据
4、 运行命令 npm run mock  启动

一般都是在 componentDidMount 中获取数据


加载更多
1、有几个状态： 正在加载，是否还有要加载的数据，下一页 page
2、加载数据函数：  先改变加载状态  ，再触发 请求数据的函数，请求来的数据与之前数据拼接，在改变加载状态和page
   
   点击---加载更多
     点击直接调用加载数据函数
   上拉---加载更多
      在componentDidMount 中写
      添加 scroll 事件，防止多次滚动连续触发callback函数，使用定时器来延时，保证滚动一下触发一次
      callback ：来获取屏幕的高度和元素（加载更多）距离顶部的距离，通过判断距离顶部的距离来判断是否要触发 加载数据函数
  
   
返回
  直接调用   window.history.back(); 方法

路由

router 4.0 路径配置可选参数 :keyword是可选参数
  <Route path="/search/:category/:keyword?" component={..} />

  只要在组件最外层用了BrowserRouter
        那每个组件内部就可以拿到 match, location, history 等参数
        组件内部的子组件想拿到这些参数，可以通过组件传参的方式传递过去。

      获取路径中的参数 this.props.match.params

给路由加一个可选参数router，即登录之后需要跳转的页面。即在哪个页面登录的，登录完了之后还要再跳转到哪个页面，这种功能很常见。
<Route path='/Login(/:router)' component={Login}/>
 其中用到了对参数（router）进行 编码和解码 encodeURIComponent（URL）编码与decodeURIComponent（URL）解码



获取 input 值
1、非约束性 ： 先获取DOM元素，再获取元素的value，这种方式是不提倡的，
             缺点：
                  依赖DOM操作，不符合组件化的设计，也不易扩展
                  查询DOM消耗更多性能

2、约束性：  监控<input>的变化，将值实时保存到state中，直接从state中获取值。这样我只用操作数据就好了


// 添加屏幕尺寸变化监听事件
       window.addEventListener('resize',this.getScreenWidth.bind(this))


将文本中的标签 转义成html标签  
<p dangerousslySetInnerHTML={{__html:data.dese}}></p>
    


登录功能：
   获取用户名是从Redux中获取的
 1、先判断是否已经登录，如果已经登录直接跳转到用户中心页，这个判断是在componentDidMount函数中执行的。
 2、登录成功，会将用户ID（这里用的手机号）存储到Redux中，如果有指定则跳回指定页，没有则跳到用户中心


 商品收藏：
 1、先检测商品是否已经收藏， 来改变isStroe的状态  ，控制组件显示 收藏 和已收藏
 2、点击收藏操作：
                先检测是否已经登录
               如果已经收藏，点击已收藏 ，则取消收藏  执行 STROE_REMOVE操作
               收藏 执行 STORE_ADD操作


用户中心

   先判断用户是否登录


评价
   先判断是否已经评价
   