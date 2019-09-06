<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
//для версии 5.2 и ранее:
//use DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
  /**
   * Показать список всех пользователей приложения.
   *
   * @return Response
   */
  public function index()
  {
    $users = DB::select('select * from Regions', [1]);
    //echo "string";
    return view('user.index', ['users' => $users]);
  }
}
?>
