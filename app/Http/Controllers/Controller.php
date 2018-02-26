<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // ajax返回
    protected function ajax($status = null, $data = null, $msg = null) {
        $arr['status'] = $status;
        $arr['msg'] = $msg;
        $arr['data'] = $data;
        if (is_array($arr)) echo json_encode($arr);
        exit;
    }
}
