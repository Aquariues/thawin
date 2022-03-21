<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Customer\CustomerHelper;
use Exception;

class CustomerAuthenticateController extends Controller {

  public function signUp(Request $request) {
    $helper = new CustomerHelper();
    $user = DB::table('users')->where('phone', $request->phone)->count();

    if ($user > 0) {
      flash('error', 'Số điện thoại đã được sử dụng','error');
      var_dump(Session('flash_message'));
      die;
      return back();
    }

    DB::beginTransaction();
    try {
      $user = DB::table('users')->insert([
        'phone' => $request->phone,
        'password' => $request->password,
      ]);

      DB::commit();
    } catch (Exception $e) {
      DB::rollBack();
      flash('error', 'Lỗi','error');  
      return back();
    }

    flash('success', 'Đăng ký thành công', 'success');
    return redirect('/sign-in');

  }

  public function updateProfile(Request $request)
  {
    dd('update profile');
  }

  public function signIn(Request $request)
  {
    dd('sign in');
  }

  public function profile() {
    // $helper = new CustomerHelper();
    // $helper->checkLogin();
    return redirect('/sign-in');
  }
}
