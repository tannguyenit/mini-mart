<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Request;
use App\User;
use Auth;


class UserController extends Controller
{
	public function index()
	{
		$arUser=User::orderBy('id', 'desc')->get()->toArray();
		return view("admin.user.index",compact("arUser"));
	}
	public function postadd(Request $request)
	{
		$arUser = array(
			'username' =>trim($request->username),
			'fullname' =>trim($request->fullname),
			'password' =>bcrypt(trim($request->password)),
			'email' =>$request->email,
			'address' =>$request->address,
			'remember_token' =>$request->_token,
			);
		if (User::insert($arUser)){
			return redirect()->route('admin.user.index')->with(["level"=>"success","msg"=>"Thêm thành công"]);
		}
	}
	public function delete($id)
	{
		if (Auth::user()->username=="admin") {
			$del=User::find($id);
			if ($del->username=="admin") {
				return redirect()->route('admin.user.index')->with(["level"=>"success","msg"=>"Bạn không thể xóa tài khoản admin"]);
			}else{
				if ($del->delete()){
					return redirect()->route('admin.user.index')->with(["level"=>"success","msg"=>"Xóa thành công"]);
				}
			}
			if ($del->delete()){
				return redirect()->route('admin.user.index')->with(["level"=>"success","msg"=>"Xóa thành công"]);
			}
		}else{
			return redirect()->route('admin.user.index')->with(["level"=>"success","msg"=>"Bạn không có quyền để thực hiện chức năng này"]);
		}
	}
	public function getEdit()
	{
		if (Request::ajax()) {
			$id=Request::get('id');
			$arEdit=User::find($id)->toArray();
			return view("admin.user.edit",compact("arEdit"));
		}	
	}
	public function postEdit(Request $request)
	{
		$id=Request::Input('id');
		$arUpdate=User::find($id);
		$password=Request::Input('password');
		if ($password!="") {
			$arUpdate->password=bcrypt(trim($password));
		}
		$arUpdate->fullname=Request::Input('fullname');
		$arUpdate->email=Request::Input('email');
		$arUpdate->address=Request::Input('address');
		if ($arUpdate->update()){
			return redirect()->route('admin.user.index')->with(["level"=>"success","msg"=>"Sửa thành công"]);
		}
		

	}
}
