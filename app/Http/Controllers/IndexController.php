<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Contact;
use App\Models\Other;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $arLeftbar = Cat::where('parent_id', 0)->take(6)->get();
        return view("index.index", compact('arLeftbar'));
    }

    public function intro()
    {
        $intro = Other::find(1);
        return view("index.intro", compact('intro'));
    }

    public function contact()
    {
        return view("index.contact");
    }

    public function postContact(Request $request)
    {
        $arContact = [
            'email' => $request->email,
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'address' => $request->address,
            'content' => $request->content,
            'note' => $request->note,
        ];

        if (Contact::create($arContact)) {
            return redirect()->action('IndexController@index')
                ->with(['level' => 'success', "msg" => "Gửi liên hệ thành công"]);
        } else {
            return redirect()->action('IndexController@index')
                ->with(['level' => 'danger', "msg" => "Có lỗi khi gửi. Chúng tôi sẽ khắc phục lại. Xin lỗi bạn "]);
        }
    }
}
