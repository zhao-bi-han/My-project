var app =require('koa')();
var router=require('koa-router')();

// s首页特惠广告
var homeData=require('./home/ad.js');
router.get('/api/homead',function *(next){
    this.body=homeData
})

// 首页 推荐列表
var homeListDate=require('./home/list.js');
router.get('/api/homelist/:city/:page',function *(next){
    // 参数
    const params=this.params;
    const paramsCity=this.params.city;
    const paramsPage=this.params.page;
    
    console.log('当前城市',paramsCity);
    console.log('当前页数',paramsPage);

    this.body=homeListDate;
})

// 获取城市
var cityList =require('./city/city.js');
router.get('/api/city',function *(next){
    this.body=cityList;
})
// 搜索页

var searchData=require('./search/search.js');
router.get('/api/search/:page/:city/:category/:keyword',function *(next){
      // 参数
    const params = this.params
    const paramsPage = params.page
    const paramsCity = params.city
    const paramsCategory = params.category
    const paramsKeyword = params.keyword

    console.log('当前页数：' + paramsPage)
    console.log('当前城市：' + paramsCity)
    console.log('当前类别：' + paramsCategory)
    console.log('关键字：' + paramsKeyword)
    this.body=searchData;
})

// 商品详情
var DetailData=require('./detail/detail.js');
router.get('/api/detail/:id',function *(next){
    const id=this.params.id;
  this.body=DetailData.filter(data=>{
        return data.id==id
    })
})

// 订单信息
var orderList =require('./orderlist/orderlist.js');
router.get('/api/orderlist/:username',function *(next){
    const username=this.params.username
    console.log("订单列表 用户名："+username);
    this.body=orderList
});
// 提交用户评论

router.post('/api/submitComment',function *(next){
    console.log("提交评论");
    // 获取参数

    this.body = {
        errno: 0,
        msg: 'ok'
    }
})

// 开始服务并生成路由
app.use(router.routes())
.use(router.allowedMethods());
app.listen(3000);