<h1 align="center"> Search-Engine-Rank </h1>

<p align="center"> 根据关键词获取网站在各大搜索引擎的排名情况</p>

[![Latest Stable Version](https://poser.pugx.org/tim168/search-engine-rank/v/stable)](https://packagist.org/packages/tim168/search-engine-rank)
[![License](https://poser.pugx.org/tim168/search-engine-rank/license)](https://packagist.org/packages/tim168/search-engine-rank)
[![Latest Unstable Version](https://poser.pugx.org/tim168/search-engine-rank/v/unstable)](https://packagist.org/packages/tim168/search-engine-rank)
[![Total Downloads](https://poser.pugx.org/tim168/search-engine-rank/downloads)](https://packagist.org/packages/tim168/search-engine-rank)
[![composer.lock](https://poser.pugx.org/tim168/search-engine-rank/composerlock)](https://packagist.org/packages/tim168/search-engine-rank)
<a href="https://www.php.net/"><img src="https://img.shields.io/badge/php-%3E%3D7.2-blue"></a>

README: [中文](https://github.com/TIM168/search-engine-rank/blob/master/README.md "中文")/[English](https://github.com/TIM168/search-engine-rank/blob/master/README-en.md "English")

## 前言
#### 仅供学习交流，切勿商用！
#### 未设置代理ip的情况下，请谨慎使用！

## 安装

```shell
$ composer require tim168/search-engine-rank
```

## 使用
    require __DIR__ .'/vendor/autoload.php';

    use Tim168\SearchEngineRank\SearchEngineRank;
	
	//关键字
    $keyword = '华为';
    
	//查询的页码
    $page = 1;
    
	//查询的网址
    $url = 'https://www.huawei.com/';
	
	//代理ip（若不设置，默认用本地ip）
	$proxy = "112.245.21.58:548";
	
	//超时时间
	$timeout = 5；
	
	$rank = SearchEngineRank::getRank(\Tim168\SearchEngineRank\Enum\SearchEngineEnum::PC_360, $keyword, $page, $proxy, $url,$timeout);
	
	//返回排名数组
	return $rank;
	
## 目前支持的搜索引擎
|  名称| 标示  | 备注  |
| :------------ | :------------ |:------------ |
| 百度 | SearchEngineEnum::PC_BAI_DU  |pc-bai-du  |
| 移动百度  | SearchEngineEnum::M_BAI_DU  |m-bai-du  |
| 360  | SearchEngineEnum::PC_360  |pc-360  |
| 搜狗  | SearchEngineEnum::PC_SOU_GOU  |pc-sou-gou  |

## 搜索原理


## License
**MIT**

## 后语
#### 欢迎Star
