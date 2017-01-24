<?php

namespace App\Http\Controllers\Wedding;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    const PAGE_TITLE="Contact Us";

    public function index()
    {
        return view('app.contact', ['title' => self::PAGE_TITLE]);
    }

    public function send(Request $request)
    {
        dd($request->data['name']);
    }
}
