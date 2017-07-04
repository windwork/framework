Windwork 加密解密组件
============================
可逆加密算法组件封装，目前支持AzDG、XxTea算法。

```
// usage:

$key = '秘钥';
$txt = '明文~';

// 1、使用AzDG算法加密解密
$crypt = new \wf\crypt\strategy\AzDG();  
$enc = $crypt->encrypt($txt, $key); // 加密
$dec = $crypt->decrypt($enc, $key); // 解密

// 2、使用Xxtea算法加密解密
$crypt = \wf\crypt\strategy\Xxtea();
$enc = $crypt->encrypt($txt, $key); // 加密
$dec = $crypt->decrypt($enc, $key); // 解密

// 3、通过配置文件选择使用加密方式
$cfg = [
    'class' => '\\wf\\crypt\\strategy\\AzDG',
    'key' => 'value',
];
$crypt = $cfg['class']($cfg);

// 4、在Windwork框架中使用
$crypt = \wfCrypt();

```


<br />  
<br />  

### 要了解更多？  
> - [官方完整文档首页](http://docs.windwork.org/manual/)  
> - [官方源码首页](https://github.com/windwork)  