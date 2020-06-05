<?php

namespace Tim168\SearchEngineRank\Enum;

class SearchEngineEnum
{
    const PC_BAI_DU = 'pc-bai-du';

    const M_BAI_DU = 'm-bai-du';

    const M_360 = 'm-360';

    const PC_360 = 'pc-360';

    const PC_SOU_GOU = 'pc-sou-gou';

    const M_SHEN_MA = 'm-shen-ma';

    const M_TOU_TIAO = 'm-tou-tiao';

    const ENGINE_URL = [
        self::PC_BAI_DU => 'https://www.baidu.com/s',
        self::M_BAI_DU => 'https://m.baidu.com/s',
        self::PC_SOU_GOU => 'https://www.sogou.com/web',
        self::PC_360 => 'https://www.so.com/s',
        self::M_360 => 'https://m.so.com/s',
        self::M_SHEN_MA => 'https://m.sm.cn/s',
        self::M_TOU_TIAO => 'https://m.toutiao.com/search'
    ];

    const HEADER_HOST = [
        self::PC_BAI_DU => 'www.baidu.com',
        self::M_BAI_DU => 'm.baidu.com',
        self::PC_SOU_GOU => 'www.sogou.com',
        self::PC_360 => 'www.so.com',
        self::M_360 => 'm.so.com',
        self::M_SHEN_MA => 'm.sm.cn',
        self::M_TOU_TIAO => 'm.toutiao.com'
    ];

    const MAX_PAGE = 10;
}