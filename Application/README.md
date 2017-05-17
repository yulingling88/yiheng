Application 一个开发目录，项目目录

当运行index.php时，会自动产生三个文件夹

三个文件夹：模块
Common  默认公共文件夹，如放入数据库连接
Home    前台目录 -> MVC
Runtime 运行时的目录

复制 Home (前台目录) 为 Admin (后台文件)

Home：
1，模块函数
2，配置目录
3，控制器
4，模型
5，视图

http://127.0.0.1/thinkphp/index.php/Home/index/text
http://127.0.0.1/
                thinkphp(站点目录)
                /index.php(入口文件)
                /Home(前台模块)
                /index(控制器,不访问controller文件夹，直接访问下面的类文件)
                /text(方法操作)
如：http://127.0.0.1/thinkphp/index.php/Admin/index/indexs

namespace Home\controller;  //命名空间。运行它加载时，告诉他要加载那个文件夹下面的那个，相当与引用的意思。它之上不能有任何东西
use Think\Model;            // use 自动生成的

//页面辅助工具：在配置文件下面添加
    'SHOW_PAGE_TRACE'=>true,

Application/Common/conf/config : 连接数据库文件
连接数据库三种方式：
// 1,实例化 model 基类，并且传了一张表名进去：$user = new Model('[表名]','[前缀]','[连接信息]');
    $user = new Model('user');
    var_dump($user->select());

// 2，使用大 M() 方法 ，必须传人数据表名，不需要引用基类空间 就是：use Think\Model;
     $user = M('user');
     var_dump($user->select());

//3，使用大 D() 方法 ，必须传人数据表名，不需要引用基类空间
     $user = D('user');
     var_dump($user->select());

//4，实例化自定义模型，因为在那边时已经选择了数据表名
     $user = new UserModel();
     var_dump($user->select());

使用Model基类（法1）要导入命名空间，使用M()方法不需要。
连接上数据库后，我们需要从数据库里操作数据，那么就需要实例化模型类。
    在ThinkPHP 中，提供了Model 基类处理，也可以使用M()方法。
D()方法是对应于使用了具体的模型类。使用D()方法比直接使用模型类更加的智能，
    如果在\Home\Model\UserModel 找，不到该模型类，那么就会去公共模块下找\Common\Model\UserModel 去找。
    如果还找不到，就会直接实例化基类Model()类，也就是等同于使用M()方法。

在model模型中，// UserModel -> 文件名  类名 数据名 三者合一,之后再实例化自定义模型，就不用输入表名了




