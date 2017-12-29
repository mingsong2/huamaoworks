<?php

namespace App\Http\Controllers\Sales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\salesContracts;
use Illuminate\Support\Facades\DB;
class SalesController extends Controller
{
    public function lst(){
        $where = array(
            'sid' => 2,
            'comid' => 1,
        );

        DB::enableQueryLog();

        $data = salesContracts::where($where)->orderBy('add_time','desc')->get();
        salesContracts::all();
        
        print_r(DB::getQueryLog());

        echo $data->toJson();exit;
    }
}
