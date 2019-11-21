<?php
// +----------------------------------------------------------------------
// | 应用设置
// +----------------------------------------------------------------------

use think\facade\Env;

return [
    // 框架名称
    'frame_name'   => 'EasyAdmin',
    // 框架名称
    'frame_url'   => 'https://www.EasyAdmin.vip',
    // 插件市场
    'market_url'   => 'https://market.EasyAdmin.vip',
    //是否开启前台会员中心
    'usercenter'          => true,
    //登录验证码
    'login_captcha'       => true,
    //登录失败超过10次则1天后重试
    'login_failure_retry' => true,
    //是否同一账号同一时间只能在一个地方登录
    'login_unique'        => false,
    //登录页默认背景图
    'login_background'    => "/assets/img/loginbg.jpg",
    //自动检测更新
    'checkupdate'         => false,
    //版本号
    'version'             => '1.0.0.20190705_beta',
    //API接口地址
    'api_url'             => 'https://api.easyadmin.vip',
];
