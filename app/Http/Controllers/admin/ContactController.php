<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Mail;
use Request;

class ContactController extends Controller
{
    public function index()
    {
        $arContact = Contact::all();

        return view('admin.contact.index', compact('arContact'));
    }

    public function getEdit()
    {
        if (Request::ajax()) {
            $id = Request::get('id');
            $arView = Contact::find($id)->toArray();
            return view('admin.contact.view', compact('arView'));
        }
    }

    public function sendMail(Request $request)
    {
        $email = Request::Input('email');
        $fullname = Request::Input('fullname');
        $data = [
            "fullname" => $fullname,
            "content" => Request::Input('reply'),
            "email" => $email,
        ];

        Mail::send("admin.contact.send", $data, function ($msg) {
            $msg->from("vantancnttk13@gmail.com", "Tân Nguyễn");
            $msg->to(Request::Input('email'), Request::Input('fullname'))->subject("Thông tin đăng ký tài khoản tại Mini Market");
        });

        return redirect()->route('admin.contact.index')->with(["level" => "success", "msg" => "Gủi liên hệ thành công"]);
    }

    public function delete($id)
    {
        $del = Contact::find($id);

        if ($del->delete()) {
            return redirect()->route('admin.contact.index')->with(["level" => "success", "msg" => "Xóa thành công"]);
        }
    }
}
