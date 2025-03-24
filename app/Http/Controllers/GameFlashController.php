<?php

namespace App\Http\Controllers;

use App\Models\GameFlash;
use Illuminate\Http\Request;

class GameFlashController extends Controller
{
    public function getData(Request $request){
        $data = GameFlash::all();
        return response()->json([
            'status' => 1,
            'data' => $data,
            'message' => 'Lấy data game thành công !!'
        ]);
    }
}
