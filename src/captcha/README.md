验证码组件
=============
安全可靠的验证码，拥有很强的反机器识别能力，同时又不失人眼阅读体验。

## require
 - php 5.5+
 - GD2

## 安装
该组件已包含在Windwork框架中，如果你已安装Windwork框架则可以直接使用。

- 安装方式一：通过composer安装（推荐）
```
composer require windwork/wf
```

- 安装方式二：传统方式安装
[下载源码](https://github.com/windwork/wf/releases)后，解压源码到项目文件夹中，然后require_once $PATH_TO_WF/core/lib/Loader.php文件，即可自动加载组件中的类。

## 使用示例
1、生成验证码图片
```
$cfg = [
    'gradient'  => 32,  // 文字倾斜度范围
    'fontSize'  => 30,  // 验证码字体大小(px)
    'length'    => 4,   // 验证码位数
    'distortLevel' => 0,// 验证码扭曲级别（0-9），0为不扭曲，如果启用，建议为验证码字体大小/6
];

$capt = new \wf\captcha\strategy\GDSimple($cfg);
$secId = 'login';
$capt->render($secId);

```

2、验证码对比校验
```
// 验证码id与生产验证码的id一致
$secId = 'login';
if (!\wf\captcha\Code::check(@$_POST['secode'], $secId)) {
     print 'error secode';
}
```

## 效果预览

- 普通效果 

![效果图](assets/example-1.png)

- 高级效果 

![效果图](assets/example-2.jpg)



## 配置选项

```
// 在 config/app.php 设置验证码组件参数

// GDSimple（推荐使用）
return [
    'srv' => [
        'captcha' => [
		    'class'     => '\wf\captcha\strategy\GDSimple',
		    'gradient'  => 32,  // 文字倾斜度范围
		    'fontSize'  => 30,  // 验证码字体大小(px)
		    'length'    => 4,   // 验证码位数
		    'distortLevel' => 0,// 验证码扭曲级别（0-9），0为不扭曲，如果启用，建议为验证码字体大小/6
		    // 验证码中使用的字符，01IO容易混淆，建议不用
		    'codeSet'   => '356789ABCDEFGHKLMNPQRSTUVWXY',
		    'expire'    => 3000,
		]
    ]
];


// GDSafety
return [
    'srv' => [
        'captcha' => [
		    'class'     => '\wf\captcha\strategy\GDSafety',
		    'expire'    => 3000,   // 验证码过期时间（s）
		    'gradient'  => 20,     // 文字倾斜度范围
		    'length'    => 4,      // 验证码位数
		]
    ]
];


// GD
return [
    'srv' => [
        'captcha' => [
		    'class'     => '\wf\captcha\strategy\GD',
		    'expire'    => 3000,   // 验证码过期时间（s）
		    'useBgImg'  => false,  // 是否使用背景图片 
		    'useCurve'  => false,  // 是否画混淆曲线
		    'useNoise'  => true,  // 是否添加杂点    
		    'gradient'  => 22,     // 文字倾斜度范围
		    'fontSize'  => 30,     // 验证码字体大小(px)
		    'height'    => 0,      // 验证码图片高，0为根据fontSize自动计算
		    'width'     => 0,      // 验证码图片宽，0为根据fontSize自动计算
		    'length'    => 4,      // 验证码位数
		    'distortLevel' => 5,   // 验证码扭曲级别（0-9），0为不扭曲，如果启用，建议为验证码字体大小/6
		
		    // 验证码背景颜色
		    'bg'        => [243, 251, 254], 
		
		    // 验证码选择使用的字体列表，字体放在 ./assets/ttfs/ 文件夹
		    'ttfs'      => ['1.ttf'],  
		
		    // 验证码选择使用的背景图片列表，图片放在 ./assets/bgs/ 文件夹
		    'bgs'       => ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg'], 

		]
    ]
];

// 创建实例
$capt = wfCaptcha(); // new {$cfg['srv']['captcha']['class']}($cfg['srv']['captcha'])

```


<br />  
<br />  

### 要了解更多？  
> - [官方完整文档首页](http://docs.windwork.org/manual/)  
> - [官方源码首页](https://github.com/windwork)  
