<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// バリデーションを行う場所
use App\Http\Requests\ReservationListRequest;

// 予約をとるクラス
class NewReservationController extends Controller
{
    public function add(Request $request)
    {
      return view('newreservation.add');
    }

    public function create(ReservationListRequest $request)
    {
    // $param = parameter
      $param =
      [
        'name' => $request->name,
        'date' => $request->date,
        'starttime' => $request->starttime,
        'endtime' => $request->endtime,
        'court' => $request->court,
      ];
      DB::table('reservationlists')->insert($param);
      return redirect('/reslist');
    }
}
