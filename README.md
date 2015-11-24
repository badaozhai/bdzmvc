# bdzmvc
php最简单的mvc框架,基于composer,orm层和View层使用的是larvael中的
# 目录介绍
app
--controllers    控制器  BaseController 可以被用来继承,属性的view是用来include视图view层的
--models         数据层  父类Model中封装了mysql的操作
--views          视图层

config          各种配置文件
---redis.php      redis配置文件
---database.php   数据库配置文件
---routes.php     路由配置文件
---可以自己添加

helpers         帮助类文件
--- View.php     视图类
---Mail.php      邮件类
public
--index.php      项目入口文件

bootstrap.php    初始化的一些启动文件

  
