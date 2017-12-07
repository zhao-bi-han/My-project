var path = require('path');
var webpack = require('webpack');  // 自己安装的插件
var HtmlWebpackPlugin = require('html-webpack-plugin'); // 将输出文件自动注入到html页面中，不用手动引入js文件
var OpenBrowserPlugin = require('open-browser-webpack-plugin');

module.exports = {
    entry: path.resolve(__dirname, './app/index.jsx'),   // 解析成绝对路径
    output: {
        filename: "bundle.js",
        publicPath:'/'
    },
    resolve: {
        extensions: ['.js', '.jsx']
    },
   
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,     //要解析什么类的文件
                use: {
                    loader: "babel-loader",   //需要的插件
                    options: {
                        plugins: [
                            ["import", { "libraryName": "antd", "style": "css" }] // `style: true` 会加载 less 文件
                          ]
                    }
                },
                exclude: __dirname + '/node_modules/'      //屏蔽不需要处理的文件（文件夹）

            },
            {
                test: /\.(css|less)$/,
                exclude: __dirname + '/node_modules/',     //屏蔽不需要处理的文件（文件夹）
                use: [
                    'style-loader',
                     'css-loader',
                   {
                    loader:'postcss-loader',
                    options:{
                        plugins:function(){
                            return [
                                require('postcss-import')()     
                            ]
                        }
                   }
                },
                 'less-loader'
                ]
            },
            {
                test: /\.(png|gif|jpg|jpeg|bmp)$/i,
                use: "url-loader?limit=5000&name=app/static/img/[name][hash].[ext]"  // 限制大小5kb   
            },
            {
                test: /\.(woff|woff2|svg|ttf|eot)($|\?)/i,
                use: 'url-loader?limit=5000'    // 限制大小小于5k           
            }

        ]
    },
    plugins: [
        
        new webpack.LoaderOptionsPlugin({
            options: {
                postcss: function () {
                    return [precss, autoprefixer];
                }
            }
        }),
        // html 模板插件
        new HtmlWebpackPlugin({
            template: __dirname + '/app/index.tmpl.html'
        }),
        // 热加载 修改页面后自动刷新
        new webpack.HotModuleReplacementPlugin(),

        // 打开浏览器
        new OpenBrowserPlugin({
            url: 'http://localhost:8080'
        })
    ],
    devServer: {
        proxy: {
            '/api': {
              target: 'http://localhost:3000',
              secure: false
            }
          },
          contentBase: "./public", //本地服务器所加载的页面所在的目录
        //   colors: true, //终端中输出结果为彩色
          historyApiFallback: true, //不跳转
          inline: true, //实时刷新
          hot: true  // 使用热加载插件 HotModuleReplacementPlugin
      }


}