var app=require('koa')();
var router=require('koa-router')();

// 获取新闻数据
var newslistData=require('./news_data_1.js');
router.get('/api/data/listnews/:type',function *(next){
    // 接受参数
    const type=this.params.type;
    const data=newslistData.filter(item=>item.type==type);
    data.length==0?this.body=newslistData.slice(0,20):this.body=data
})

// 图片新闻
var newsimgData=require('./news_data_2.js');
router.get('/api/data/imgnews/:type',function *(next){
     // 接受参数
     const type=this.params.type
    this.body=newsimgData.filter(item=>item.type==type);
})
// 分类
var newsClassify=require('./news_data_3.js');
router.get('/api/data/newsclassify',function *(next){
     // 接受参数
    this.body=newsClassify;
})

// 侧边广告数据

var adData=require('./ad_data.js');
router.get('/api/data/ad',function *(next){
     // 接受参数
    this.body=adData;
})

//获取新闻详情页数据
var detailData=require('./details.js');
router.get('/api/data/detail/:id',function *(next){
    console.log("文章ID："+this.params.id)
    this.body=detailData
})



// 登录
router.post('/api/login',function *(next){
    console.log("提交用户登录信息");
    this.body={
        error:0,
        msg:"ok"
    }
})
// 注册
router.post('/api/register',function *(next){
    console.log("提交用户注册信息");
    this.body={
        error:0,
        msg:"ok"
    }
})

// 提交评论

router.post('/api/submitComment',function *(next){
    console.log("用户提交评论");
    this.body={
        error:0,
        msg:"ok"
    }
})

//收藏文章

router.post('/api/submitStore',function *(next){
    console.log("用户收藏文章");
    this.body={
        error:0,
        msg:"ok"
    }
})
// 修改头像
router.post('/api/upload',function *(next){
    console.log("上传头像");
    this.body={
        error:0,
        msg:"ok"
    }
})

// 开始服务并生成路由
app.use(router.routes())
.use(router.allowedMethods());
app.listen(3000);