<?php

namespace SysJsonrpc\Src;

interface AccessServiceInterface
{
    public function getAccessByCustomAppId(int $custom_appid, $module = '', $start_time = '', $end_time = '');
}