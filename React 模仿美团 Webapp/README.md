# React.js模仿美团webapp
## React.js + Redux +  React-router + webpack + koa

## 功能描述
* 用户登录
* 显示并修改当前城市
* 信息列表展示，及上拉加载更多
* 商品的收藏购买
* 发表评论
* 搜索
## 项目总结
#### 一、 wepack环境搭建
#### 二、fetch的使用
`fetch` 就是一种可代替 ajax 获取/提交数据的技术，返回一个Promise 对象，常用方法有两种get 和post，在实际开发中我们可以将这两个方法单独抽象出来，分别放在 `get.js` 和 `post.js`文件，post.js文件中有一个对参数处理的方法。

#### 三、模拟数据接口
这个项目是使用   `koa`来模拟后端数据接口的，在mock文件夹下建一个`server.js`文件编写数据接口。

并对` package.json` 文件 （启动服务）和 `webpack.config.js`文件（代理转发）进行相关配置。

#### 四、页面开发
编写组件前，先对组件进行分类，这个组件是 智能组件还是木偶组件。

分析页面结构有几部分组成，考虑组件的复用

###### 获取城市信息

  当组件加载完成， 从 localStorage 中获取城市信息， 如果为空设置默认值，并将信息存入 redux中。之后获取城市信息都是从Redux中获取的。
###### 城市页面
* 显示当前城市
 直接将获取到的参数显示在页面。
* 修改城市
```
changeCity(newCity) { 
    // 将新选择的城市设置为当前城市 
    // 1. 修改 redux 
    // 2. 修改 localStorage
    // 3. 跳转到首页
 }
```
###### 搜索页面
从首页进入搜索页有一下两种情况
* 通过输入框输入关键字搜索
* 通过轮播图的类型搜索

约束性 和 非约束性组件
* 约束组件
针对 input输入框类型，我们获取它的value值 通常情况是通过操作DOM
来获取的。这样做的缺点是：
 1、依赖DOM操作，不符合组件化的设计，也不易扩展
 2、查询dom 消耗更多的性能

* 非约束性
实时监控 input的变化，将值实时保存到state中，直接从state中获取值，这是一种基于数据驱动视图设计方式。

抽离`SearchInput` 组件，因为首页和搜索页都用到了该组件。
引用该组件时需要传递两个参数，一个参数value即要显示默认值， enterHandle 输入内容并回车时触发。
```
 enterHandle(value){
        this.props.history.push('/search/all/' + encodeURIComponent(value))
    }
```

引用`SearchHeader` 组件时，需要把搜索结果页拿到的keyword参数传递进去 —— 因为要在头部的 input 中显示搜索的关键字。

###### 商品详情页
从商品列表进入商品详情页，从url中获取商户的id，并在组件加载完成后，向后台发送请求，获取数据。

###### 收藏功能
当组件加载完成，先检测商品是否收藏，来改变isStroe（state 中的一个属性）的状态  ，控制组件显示 “收藏” 和 “已收藏”
```
  // 检查商品是否被收藏
    checkStore() {
        const id = this.props.id;   // 商品id
        const store = this.props.store;   // 所有收藏的商品
        let flag = store.some(item => item.id === id)   // 如果有商品被收藏 则返回true
        if (flag) {
            this.setState({
                isStore: true
            })
        }
    }
```
点击收藏按钮
 * 先检测是否已经登录
 * 如果已经收藏，点击已收藏 ，则取消收藏  执行 STROE_REMOVE操作
 * 收藏 执行 STORE_ADD操作

###### 用户登录
 获取用户名是从Redux中获取的

* 先判断是否已经登录，如果已经登录直接跳转到用户中心页，这个判断是在componentDidMount函数中执行的。
 * 登录成功，会将用户ID（这里用的手机号）存储到Redux中，如果有指定则跳回指定页，没有则跳到用户中心

###### 订单评价
三个状态：未评价、评价中、已评价

提交评论 用到了 post方法
```
 // 提交评价   id 商户id 
    submitComment(id,value,callback){
          const result=postComment(id,value);
          result.then(res=>{
              return res.json()
          }).then(json=>{
              if(json.errno===0){
                 callback()
              }
          })
    }
```





