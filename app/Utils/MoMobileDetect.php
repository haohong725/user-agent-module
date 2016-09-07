<?php
namespace App\Utils;

use Jenssegers\Agent\Agent;

class MoMobileDetect extends Agent
{
    protected static $applications = [
        'WeChat'        => 'MicroMessenger',
        'QQ'            => 'QQ/',
        'Youku'         => 'Youku',
        'Iqiyi'         => 'IqiyiApp/iqiyi|iQiYiPhoneVideo|QIYIVideo',
        'QQMail'        => 'mailapp|QQMailApp|QQMail',
        'jd'            => 'jdapp|%E6%89%8B%E6%9C%BA%E4%BA%AC%E4%B8%9C',
        'alipay'        => 'AlipayClient|%E6%94%AF%E4%BB%98%E5%AE%9D',
        'QQLive'        => 'live4iphone|QQLiveBrowser',
        'XianYu'        => 'AliApp\(FM/',
        'TaoBao'        => '%E6%89%8B%E6%9C%BA%E6%B7%98%E5%AE%9D|AliApp\(TB/',
        'CTrip'         => 'CTRIP',
        'Weibo'         => 'Weibo',
        'LETV'          => '%E4%B9%90%E8%A7%86%E8%A7%86%E9%A2%91|LetvClient|LetvMobileClient',
        'BaiduMap'      => 'baidumap|IphoneCom',
        'BaiduNuomi'    => 'Bainuo|BDNuomiAppAndroid|BDNuomiAppIOS',
        'TouTiao'       => 'NewsArticle',
        'ShoujiBaidu'   => 'baiduboxapp',
        'UC'            => 'UCBrowser',
        'SuNing'        => 'SNEBUY-APP',
        'QuNaEr'        => 'QunariPhone|qunaraphone',
        'QQNews'        => 'qqnews',
        'QQBrowser'     => 'MQQBrowser',
        'AliTrip'       => 'AliApp\(LX|%E9%98%BF%E9%87%8C%E6%97%85%E8%A1%8C',
        'TianMao'       => 'AliApp\(TM|%E5%A4%A9%E7%8C%AB',
        'SinaNews'      => 'SinaNews',
        'MoMo'          => 'MomoChat|momoWebView',
        'DianPing'      => '%E5%A4%A7%E4%BC%97%E7%82%B9%E8%AF%84|com.dianping',
        'GanJi'         => 'GJLife|ganji_',
        'TieBa'         => 'TBClient|tieba|bdtb',
        'QZone'         => 'Qzone|QQ%E7%A9%BA%E9%97%B4',
        'DouBan'        => 'com.douban.frodo',
        'WhatsApp'      => 'WhatsApp',
        'AliWangXin'    => 'AliApp\(WX',
        'YiXin'         => '%E6%98%93%E4%BF%A1|YiXin',
        'TXWeibo'       => '%E8%85%BE%E8%AE%AF%E5%BE%AE%E5%8D%9A|TXMicroBlog',
        'SinaBlog'      => 'com.sina.blog|SinaBlogAPP',
        'MiLiao'        => '%E7%B1%B3%E8%81%8A',
        'HuaBan'        => 'huaban',
        'ZhuanZhaun'    => 'zhuanzhuan',
        'JuMei'         => 'jumei',
        'MoGuJie'       => '%E8%98%91%E8%8F%87%E8%A1%97|Mogujie4iPhone|mogujie4android',
        'YiHaoDian'     => 'yhd-|OneStoreUniversal|yhdandroid',
        'JuHuaSuan'     => 'AliApp\(JU|%E8%81%9A%E5%88%92%E7%AE%97',
        'MeiLiShuo'     => 'meilishuo',
        'smzdm'         => 'smzdm',
        'Twitter'       => 'twitter',
        'CaiXin'        => 'caixin',
        'SohuNews'      => 'sohunews',
        'QDaily'        => 'QDaily',
        'ZOL'           => 'zol',
        'JieMian'       => 'JiemianNews|JM_APP',
        'Wallstreetcn'  => 'WscnApp',
        'BaiduNews'     => 'bdnews',
        'JiKe'          => '%E5%8D%B3%E5%88%BB|Jike',
        'iReader'       => 'ireader',
        'Instagram'     => 'instagram',
        'GroupMe'       => 'GroupMe',
        'ESPN'          => 'ESPN',
        'Groupon'       => 'Groupon',
        'Flipp'         => 'Flipp',
        'Pinterest'     => 'Pinterest',
        'Live.me'       => 'Live.me',
        'LinkedIn'      => 'LinkedIn',
        'Tumblr'        => 'Tumblr',
        'Line'          => 'Line'
    ];

    /**
     * List of moque properties.
     *
     * @var array
     */
    protected static $moProperties = [
        // applications
        'WeChat'        => 'MicroMessenger/[VER]',
        'QQ'            => 'QQ/[VER]',
        'Youku'         => ['Youku/[VER]', 'Youku;[VER];iPhone OS;', 'Youku;[VER];Android'],
        'Iqiyi'         => ['IqiyiVersion/[VER]', 'iQiYiPhoneVideo/[VER]', 'QIYIVideo/[VER]'],
        'QQMail'        => ['mailapp/[VER]', 'QQMail/[VER]', 'QQMailApp/[VER]'],
        'jd'            => ['jdapp;iPhone;[VER];', 'jdapp;android;[VER];', '%E6%89%8B%E6%9C%BA%E4%BA%AC%E4%B8%9C/[VER]'],
        'alipay'        => ['%E6%94%AF%E4%BB%98%E5%AE%9D/[VER]', 'AlipayClient/[VER]'],
        'QQLive'        => ['QQLiveBrowser/[VER]'],
        'XianYu'        => ['AliApp\(FM/[VER]\)'],
        'TaoBao'        => ['AliApp\(TB/[VER]\)'],
        'CTrip'         => ['CtripWireless_[VER]', 'CTRIP_WIRELESS/[VER]'],
        'Weibo'         => ['__weibo__[VER]__iphone', '__weibo__[VER]__android__android'],
        'LETV'          => ['LetvMobileClient_[VER]_android', 'LetvClient_[VER]_iphone', '%E4%B9%90%E8%A7%86%E8%A7%86%E9%A2%91/[VER] '],
        'BaiduMap'      => ['IphoneCom/[VER] '],
        'BaiduNuomi'    => ['Bainuo/[VER] '],
        'TouTiao'       => ['NewsArticle/[VER]'],
        'ShoujiBaidu'   => ['baiduboxapp/[VER]'],
        'UC'            => ['UCBrowser/[VER]'],
        'QQNews'        => ['[VER] qqnews \(', 'qqnews/[VER]'],
        'QQBrowser'     => ['MQQBrowser/[VER]'],
        'AliTrip'       => ['AliApp\(LX/[VER]\)', '%E9%98%BF%E9%87%8C%E6%97%85%E8%A1%8C/[VER]'],
        'TianMao'       => ['%E5%A4%A9%E7%8C%AB/[VER]', 'AliApp\(TM/[VER]\)'],
        'SinaNews'      => ['__sinanews__[VER]__iOS__', '__sinanews__[VER]__android__'],
        'MoMo'          => ['MomoChat/[VER]', 'momoWebView/[VER]'],
        'DianPing'      => ['%E5%A4%A7%E4%BC%97%E7%82%B9%E8%AF%84/[VER]', 'com.dianping.dpscope/[VER]', 'com.dianping.v1/[VER]'],
        'GanJi'         => ['GJLife/[VER]', 'ganji_\d+_[VER]'],
        'TieBa'         => ['tieba/[VER]', 'TBClient/[VER]'],
        'DouBan'        => ['com.douban.frodo/[VER]'],
        'WhatsApp'      => ['WhatsApp/[VER]'],
        'AliWangXin'    => ['AliApp\(WX/[VER]\)'],
        'SinaBlog'      => ['com.sina.blog/[VER]', 'SinaBlogAPP_iOS_[VER]_', 'SinaBlogAPP_android_[VER]_'],
        'JuMei'         => ['jumei/[VER]'],
        'JuHuaSuan'     => ['%E8%81%9A%E5%88%92%E7%AE%97/[VER]', 'AliApp\(JU/[VER]\)'],
        'SohuNews'      => ['sohunews [VER]', 'SohuNews/[VER]'],
        'QDaily'        => ['QDaily/[VER]'],
        'Wallstreetcn'  => ['WscnApp/[VER]'],
        'JiKe'          => ['JiKe/[VER]'],
    ];

    public function info()
    {
        return [
            'OS' => $this->platform(),
            'device' => $this->device(),
            'deviceVersion' => $this->deviceVersion(),
            'deviceType' => $this->deviceType(),
            'browser' => $this->browser(),
            'browserVersion' => $this->browserVersion(),
            'app' => $this->application(),
            'appVersion' => $this->applicationVersion(),
        ];
    }

    /**
     * Check the version of the given property in the User-Agent.
     *
     * @inherit
     */
    public function version($propertyName, $type = self::VERSION_TYPE_STRING)
    {
        $check = key(static::$moProperties);

        // Check if the mo properties have been added already
        if ( ! array_key_exists($check, parent::$additionalProperties))
        {
            // TODO: why is mergeRules not working here?
            parent::$additionalProperties = array_merge(
                parent::$additionalProperties,
                static::$moProperties
            );
        }

        return parent::version($propertyName, $type);
    }

    /**
     * Get the application name.
     *
     * @return string
     */
    public function application($userAgent = null)
    {
        $rules = $this->mergeRules(
            static::$applications
        );

        return $this->findDetectionRulesAgainstUA($rules, $userAgent);
    }

    public function applicationVersion()
    {
        return $this->version($this->application());
    }

    public function deviceType()
    {
        $return = 'unknown';

        switch (true) {
            case $this->isPhone():
                $return = 'phone';
                break;
            case $this->isTablet():
                $return = 'tablet';
                break;
            case $this->isDesktop():
                $return = 'desktop';
                break;
            case $this->isRobot():
                $return = 'robot';
                break;
            default:
                $return = 'unknown';
        }

        return $return;
    }

    public function deviceVersion()
    {
        return $this->version($this->device());
    }

    public function browserVersion()
    {
        return $this->version($this->browser());
    }
}