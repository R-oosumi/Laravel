<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservationlist;
use DB;

// 予約リストを表示するクラス
class ReservationListController extends Controller
{
    public function index(Request $request)
    {
      $sort = $request->sort;
      //予約は10件ずつが見やすそう
      $items = Reservationlist::orderBy($sort, 'asc')->paginate(10);
      // $param = parameter
      $param =
      [
        'items' => $items,
        'sort' => $sort,
      ];
      return view('reservationlist.index', $param);
    }
}
