# ShopXO 国内领先企业级B2C免费开源电商系统！
* 求实进取、创新专注、自主研发、国内领先企业级B2C电商系统解决方案。
* 遵循Apache2开源协议发布。
* PC+WAP、支付宝小程序、微信小程序、百度小程序。

### 传送门
* 官网地址：http://shopxo.net/
* 演示地址：http://demo.shopxo.net/ （管理账户/密码可进入官网查看）
* 支付宝小程序：http://shopxo.net/alipay.html

### 官方QQ群
* 群号：833531593
* 答案：shopxo.net

### 源代码平台
* Github：https://github.com/gongfuxiang/shopxo
* 码云/开源中国：https://gitee.com/gongfuxiang/shopxo
* 腾讯云开发者：https://dev.tencent.com/u/gongfuxiang/p/shopxo/git

### 扩展性
* 支持多语言，独立模块式开发，完善的注释，易扩展。

### 安全性
* 防止sql注入，代码高安全性。

### 轻量级，高性能
* 支持多数据库，读写分离，高并发，内置缓存机制。

# 后端基于ThinkPHP v3.2.3
ThinkPHP是一个快速、简单的基于MVC和面向对象的轻量级PHP开发框架，遵循Apache2开源协议发布，从诞生以来一直秉承简洁实用的设计原则，在保持出色的性能和至简的代码的同时，尤其注重开发体验和易用性，并且拥有众多的原创功能和特性，为WEB应用开发提供了强有力的支持。

# 前端基于AmazeUI v2.7.2
##### 组件丰富，模块化
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;以移动优先（Mobile first）为理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。
##### 本地化支持
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;相比国外框架，Amaze UI 关注中文排版，根据用户代理调整字体，实现更好的中文排版效果；兼顾国内主流浏览器及 App 内置浏览器兼容支持。
##### 轻量级，高性能
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amaze UI 面向 HTML5 开发，使用 CSS3 来做动画交互，平滑、高效，更适合移动设备，让 Web 应用更快速载入。

# 项目结构
```
shopxo
├─README.md         README文件
├─changelog.txt     更新日志
├─core.php                      入口公共文件
├─index.php                     前端入口文件
├─admin.php                     后端入口文件
├─api.php                       API入口文件
├─alipay_life_notify.php        支付宝生活号异步接口入口文件
├─apayment_*.php                支付模块异步/同步入口文件
├─robots.txt                    爬虫规则定义文件
├─composer.json                 Composer定义文件
├─AppMini                       小程序目录
│  └─Old                        小程序源码包
│     ├─alipay                      支付宝小程序
│     ├─baidu                       百度小程序
│     └─wechat                      微信小程序
├─Application                   应用目录
│  ├─Admin                      后端目录
│  │  ├─Common                      应用函数目录
│  │  ├─Conf                        应用配置目录
│  │  ├─Lang                        应用语言包目录
│  │  ├─Controller                  应用控制器目录
│  │  ├─Model                       应用模型目录
│  │  └─View                        应用视图目录
│  │     └─Default                      默认模板目录
│  ├─Home                       前端目录
│  │  ├─Common                      应用函数目录
│  │  ├─Conf                        应用配置目录
│  │  ├─Lang                        应用语言包目录
│  │  ├─Controller                  应用控制器目录
│  │  ├─Model                       应用模型目录
│  │  └─View                        应用视图目录
│  │     └─Default                      默认模板目录
│  └─Api                           API目录
│     ├─Common                      应用函数目录
│     ├─Conf                        应用配置目录
│     ├─Lang                        应用语言包目录
│     ├─Controller                  应用控制器目录
│     ├─Model                       应用模型目录
│     └─View                        应用视图目录
│        └─Default                      默认模板目录
├─Service                       服务层
├─Library                       类库
│     ├─Payment                     支付模块目录
│     └─Qrcode                      二维码类库
│─Common                        公共函数配置目录
│     ├─Common                      公共方法目录
│     └─Conf                        公共配置目录
│─Runtime                       临时文件目录
├─Public                        资源文件目录
│  ├─Admin                          后端静态资源目录
│  │  └─Default                         默认模板目录
│  ├─Home                           前端静态资源目录
│  │  └─Default                         默认模板目录
│  ├─Common                         公共静态资源目录
│  └─Upload                         用户上传附件资源目录
├─Rsakeys                       密钥存放目录
├─Install                       安装引导目录
└─ThinkPHP                      框架目录
```

# 功能简介
### 后端功能列表
```
后端配置
站点配置
    > 站点设置
    > 短信设置
    > 邮箱设置
    > SEO设置
权限控制
    > 管理员
    > 角色管理
    > 权限分配
用户管理
    > 用户管理
商品管理
    > 商品管理
    > 商品分类
订单管理
    > 订单管理
问答留言
    > 问答留言
网站管理
    > 导航管理
    > 自定义页面
    > 友情链接
    > 主题管理
    > 首页轮播
    > 筛选价格
品牌管理
    > 品牌管理
    > 品牌分类
手机端管理
    > 基础配置
    > 首页导航
    > 轮播管理
支付宝小程序
    > 基础配置
    > 小程序源码包
支付宝生活号
    > 生活号管理
    > 生活号分类
    > 消息管理
    > 菜单管理
    > 批量上下架
    > 用户管理
文章管理
    > 文章管理
    > 文章分类
数据管理
    > 消息管理
    > 支付日志
    > 用户积分日志
资源管理
    > 地区管理
    > 快递管理
    > 支付方式
工具
    > 缓存管理
```

### 前端
```
首页
所有分类
商品搜索
商品详情
自定义页面
文章
购物车
订单确认页
用户中心
    > 聚合内容
交易管理
    > 订单管理
        > 订单详情
        > 评论页
    > 我的收藏
资料管理
    > 个人资料
    > 我的地址
    > 安全设置
    > 我的消息
    > 我的积分
    > 我的足迹
    > 安全退出
```

# 如何贡献
非常欢迎您对ShopXO的开发作出贡献！
你可以选择以下方式向ShopXO贡献：
- [Github - 发布issue进行问题反馈和建议](https://github.com/gongfuxiang/shopxo/pulls)
- [码云/开源中国 - 发布issue进行问题反馈和建议](https://gitee.com/gongfuxiang/shopxo/pulls)
- 通过Pull Request提交修复
- 完善我们的文档和例子

# 开源协议
Apache License Version 2.0 see http://www.apache.org/licenses/LICENSE-2.0.html

# 更新日志
更多细节参阅 <a href="changelog.txt">changelog.txt</a>