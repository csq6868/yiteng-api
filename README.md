# yiteng Api SDK For PHP
ver 1.2.13
## `yitengAPI`

`yitengAPI`代码是引用`ThinkPHP`官方推出的统一`API`接口的客户端代码。


## 安装依赖

```
composer require yiteng/yiteng-api
```


## 快速使用

以查询[身份证所属地区]()接口为例

~~~
use yiteng\api\Client;

$client = new Client("YourAppCode");

$result = $client->idcardIndex()
    ->withCardno('身份证号码')
    ->request();
~~~

请务必注意方法大小写必须保持一致,所有的API调用服务必须设置`appCode`值，用于接口调用的身份认证。

 
## 返回数据

`yitengAPI`所有的接口返回数据为`JSON`格式，通用规范如下：

| 名称 | 类型 | 说明 |
| --- | --- | --- |
| code | int | 返回码,1 表示成功 其它表示失败 |
| msg| string | 返回提示信息 |
| data| array | 返回数据 |
