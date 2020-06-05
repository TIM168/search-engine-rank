<h1 align="center"> Search-Engine-Rank </h1>

<p align="center"> 根据关键词获取网站在各大搜索引擎的排名情况</p>

[![Build Status](https://travis-ci.org/TIM168/Ip.svg?branch=master)](https://travis-ci.org/TIM168/Ip)
[![Latest Stable Version](https://poser.pugx.org/tim168/ip/v/stable)](https://packagist.org/packages/tim168/ip)
[![License](https://poser.pugx.org/tim168/ip/license)](https://packagist.org/packages/tim168/ip)
[![Latest Unstable Version](https://poser.pugx.org/tim168/ip/v/unstable)](https://packagist.org/packages/tim168/ip)
[![Total Downloads](https://poser.pugx.org/tim168/ip/downloads)](https://packagist.org/packages/tim168/ip)
[![composer.lock](https://poser.pugx.org/tim168/ip/composerlock)](https://packagist.org/packages/tim168/ip)

README: [中文](https://github.com/TIM168/Ip/blob/master/README.md "中文")/[English](https://github.com/TIM168/Ip/blob/master/README-en.md "English")

## 安装

```shell
$ composer require tim168/search-engine-rank
```

## 使用
    require __DIR__ .'/vendor/autoload.php';

    use Tim168\SearchEngineRank\SearchEngineRank;
	
    $keyword = '华为';
    
    $page = 1;
    
    $url = 'https://www.huawei.com/';
## 支持的语言格式
|  字符集| 描述  |
| :------------ | :------------ |
| en | 英语  |
| de  | 德语  |
| es  | 西班牙语  |
| pt-BR  | 葡语  |
| fr  | 法语  |
| ja | 日语  |
| zh-CN  | 中文  |
| ru  | 俄语  |
## 获取Ip定位信息
    $res = $ip->get('json','116.234.222.36')
	
## 示例
	{
    	"status": "success", //状态success或fail
    	"country": "中国",   //国家
    	"countryCode": "CN", //国家代码
    	"region": "SH",      //省份简称
    	"regionName": "上海",//省份
    	"city": "上海",	   //城市
    	"zip": "",           //邮编
    	"lat": 31.0449,      //纬度
    	"lon": 121.4012,	 //经度
    	"timezone": "Asia/Shanghai", //时区
    	"isp": "China Telecom (Group)", //运营商
    	"org": "Chinanet SH",  //组织
    	"as": "AS4812 China Telecom (Group)", //BGP机房
    	"query": "116.234.222.36" //ip
	}
## 获取XML格式
    $res = $ip->get('xml','116.234.222.36')
## 示例
    <?xml version="1.0" encoding="UTF-8"?>
    <query>
    	<status>success</status>
    	<country>中国</country>
    	<countryCode>CN</countryCode>
    	<region>SH</region>
    	<regionName>上海</regionName>
    	<city>上海</city>
    	<zip></zip>
    	<lat>31.0449</lat>
    	<lon>121.4012</lon>
    	<timezone>Asia/Shanghai</timezone>
    	<isp>China Telecom (Group)</isp>
    	<org>Chinanet SH</org>
    	<as>AS4812 China Telecom (Group)</as>
    	<query>116.234.222.36</query>
    </query>
## 获取CSV格式
    $res = $ip->get('csv','116.234.222.36')
## 示例
	success,中国,CN,SH,上海,上海,,31.0449,121.4012,Asia/Shanghai,China Telecom (Group),Chinanet SH,AS4812 China Telecom
    (Group),116.234.222.36
## 获取序列化格式
    $res = $ip->get('php','116.234.222.36')
## 示例
    a:14:{s:6:"status";s:7:"success";s:7:"country";s:6:"中国";s:11:"countryCode";s:2:"CN";s:6:"region";s:2:"SH";s:10:"regionName";s:6:"上海";s:4:"city";s:6:"上海";s:3:"zip";s:0:"";s:3:"lat";d:31.0449;s:3:"lon";d:121.4012;s:8:"timezone";s:13:"Asia/Shanghai";s:3:"isp";s:21:"China
    Telecom (Group)";s:3:"org";s:11:"Chinanet SH";s:2:"as";s:28:"AS4812 China Telecom
    (Group)";s:5:"query";s:14:"116.234.222.36";}
## IpV4转换成IpV6
	$res = $ip->IpV4toV6('116.234.222.36')
	
## 示例
	0000:0000:0000:0000:0000:ffff:74ea:de24

## IpV6转换成IpV4
	$res = $ip->IpV6toV4('0000:0000:0000:0000:0000:ffff:74ea:de24')
	
## 示例
	116.234.222.36
## License
**MIT**

## 后语
#### 欢迎Star
