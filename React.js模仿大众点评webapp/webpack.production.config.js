var pkg = require('./package.json')
var path = require('path')
var webpack = require('webpack');
var HtmlWebpackPlugin = require('html-webpack-plugin');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
// 发布
module.exports = {
  entry: {
    app: path.resolve(__dirname, 'app/index.jsx'),    // 自己写的代码
    // 将 第三方依赖（node_modules中的） 单独打包  项目维护中第三方代码不经常改变
    vendor: Object.keys(pkg.dependencies)    
  },
  output: {
    path: __dirname + "/build/",    // 将文件打包到该文件下
    filename: "js/[name].[chunkhash:8].js"
  },

  resolve:{
      extensions:['.js','.jsx']
  },

  module: {
    rules: [
        {
            test: /\.(js|jsx)$/,     //要解析什么类的文件
            use: {
                loader: "babel-loader",   //需要的插件
                options: {
                    presets: ['es2015', 'react']    //解析什么语言这里是es6 react
                }
            },
            exclude: __dirname + '/node_modules/'      //屏蔽不需要处理的文件（文件夹）

        },
        {
            test: /\.css$/,
            use: ExtractTextPlugin.extract([ 'css-loader', 'postcss-loader' ])
          },
          {
            test: /\.less$/i,
            use: ExtractTextPlugin.extract([ 'css-loader', 'less-loader' ])
          },
        {
            test: /\.(png|gif|jpg|jpeg|bmp)$/i,
            use: "url-loader?limit=5000"  // 限制大小5kb   
        },
        {
            test: /\.(png|woff|woff2|svg|ttf|eot)($|\?)/i,
            use: 'url-loader?limit=5000'    // 限制大小小于5k           
        }

    ]
},


  plugins: [

    new webpack.LoaderOptionsPlugin({
        options: {
            postcss: function () {
                return [precss, autoprefixer];
            },
            devServer: {
                colors: true, //终端中输出结果为彩色
                historyApiFallback: true, //不跳转，在开发单页应用时非常有用，它依赖于HTML5 history API，如果设置为true，所有的跳转将指向index.html
                inline: true, //实时刷新
                hot: true  // 使用热加载插件 HotModuleReplacementPlugin
            }
        }
    }),
    // webpack 内置的 banner-plugin     可以写标注
    new webpack.BannerPlugin("Copyright"),

    // html 模板插件
    new HtmlWebpackPlugin({
        template: __dirname + '/app/index.tmpl.html'
    }),

    // 定义为生产环境，编译 React 时压缩到最小
    new webpack.DefinePlugin({
      'process.env':{
        'NODE_ENV': JSON.stringify(process.env.NODE_ENV)
      }
    }),

    // 为组件分配ID，通过这个插件webpack可以分析和优先考虑使用最多的模块，并为它们分配最小的ID
    // new webpack.optimize.OccurenceOrderPlugin(),
    
    new webpack.optimize.UglifyJsPlugin({
        compress: {
          warnings: false       // 把搜索的警告去掉
        }
    }),
    
    // 分离CSS和JS文件
    new ExtractTextPlugin('/css/[name].[chunkhash:8].css'), 
    
    // 提供公共代码
    new webpack.optimize.CommonsChunkPlugin({
      name: 'vendor',
      filename: '/js/[name].[chunkhash:8].js'
    }),

    // 可在业务 js 代码中使用 __DEV__ 判断是否是dev模式（dev模式下可以提示错误、测试报告等, production模式不提示）
    new webpack.DefinePlugin({
      __DEV__: JSON.stringify(JSON.parse((process.env.NODE_ENV == 'dev') || 'false'))
    })
  ]
}