<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryRequest;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function index() {
        return view('inquiry.index');
    }

    public function store(InquiryRequest $request){
        // 全データを取得
        $inputs = $request->all();

        // データが空の場合はリダイレクト
        if(!$inputs){
            return redirect()->route('inquiry.index');
        }

        Inquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->msg
        ]);

        $request->session()->regenerateToken();
        return view('inquiry.complate', [
            'inputs' => $inputs,
        ]);
    }
}
