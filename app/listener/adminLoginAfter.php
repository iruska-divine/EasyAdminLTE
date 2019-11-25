<?php

declare(strict_types=1);

namespace app\listener;

use app\admin\model\AdminLog;

class AdminLoginAfter
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event)
    {
        AdminLog::setTitle(__('Login'));
        AdminLog::setContent(__('Login successful'));
        AdminLog::record();
    }
}
