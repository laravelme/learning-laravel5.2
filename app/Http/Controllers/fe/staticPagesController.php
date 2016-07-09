<?php

namespace App\Http\Controllers\fe;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class staticPagesController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }

    public function aboutUs()
    {
        return view('frontend.aboutUS');
    }

    public function contactUs()
    {
        $test             = "<span> Test sentence </span>";
        $contactUsContent = "الرجاء الأخذ بعين الإعتبار أن هذا النموذج لتقديم إقتراح أو شكوى أو رمي السلام 😉

في حال رغبتك في التقدم إلى عمل موجود مسبقاً في موقعنا اضغط على الزر المشابه لهذا الزر : التقدم لهذا العمل

لأصحاب العمل الراغبين في إضافة فرصة عمل الرجاء الضغط هنا.";

        return view('frontend.contactUs', compact('test', 'contactUsContent'));
    }
}
