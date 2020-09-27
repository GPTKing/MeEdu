<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Constant;

class CacheConstant
{

    // controller 层调用的前缀
    public const PREFIX_C = 'c::';

    // service 层调用的前缀
    public const PREFIX_S = 's::';

    // 数据自增调用前缀
    public const PREFIX_I = 'i::';

    // 用户观看时间缓存
    // 用户观看时间轮训到服务端，会临时保存该条数据
    // 该数据会与之后轮训的数据进行比对
    public const USER_VIDEO_WATCH_DURATION = [
        'name' => self::PREFIX_C . 'uvwd:%d',
        'expire' => 1440 * 3,
    ];

    // 用户验证码缓存
    // 登录，注册，找回密码等短信验证码
    public const MOBILE_CODE = [
        'name' => self::PREFIX_C . 'm:%s',
        'expire' => 3,
    ];

    // 用户微信小程序登录sessionKey缓存
    public const WECHAT_MINI_SESSION_KEY = [
        'name' => self::PREFIX_C . 'wmsk:%s',
        'expire' => 60 * 12,
    ];

    // 微信扫码支付请求返回数据缓存
    public const WECHAT_PAY_SCAN_RETURN_DATA = [
        'name' => self::PREFIX_C . 'wpsrd:%s',
        'expire' => 60 * 3,
    ];

    // adFrom访问统计
    public const AD_FROM_INCREMENT_ = [
        'name' => self::PREFIX_I . 'af:%s:%s',
        'expire' => 60 * 24,
    ];

    // [courseService]最新课程
    public const COURSE_SERVICE_LATEST = [
        'name' => self::PREFIX_S . 'c:cs:lc:%d',
        'expire' => -1, // 系统缓存时间决定
    ];

    // [courseService]课程章节
    public const COURSE_SERVICE_CHAPTERS = [
        'name' => self::PREFIX_S . 'c:cs:cc:%d',
        'expire' => -1,
    ];

    // [courseService]分页列表
    public const COURSE_SERVICE_PAGINATOR = [
        'name' => self::PREFIX_S . 'c:cs:sp:%d:%d:%d',
        'expire' => -1,
    ];

    // [videoService]课程视频
    public const VIDEO_SERVICE_COURSE_VIDEOS = [
        'name' => self::PREFIX_S . 'cs:vs:c:%d',
        'expire' => -1,
    ];

    // [videoService]最新视频
    public const VIDEO_SERVICE_LATEST = [
        'name' => self::PREFIX_S . 'cs:vs:lv',
        'expire' => -1,
    ];

    // [videoService]分页列表
    public const VIDEO_SERVICE_PAGINATOR = [
        'name' => self::PREFIX_S . 'cs:vs:sp:%d:%d',
        'expire' => -1,
    ];
}
