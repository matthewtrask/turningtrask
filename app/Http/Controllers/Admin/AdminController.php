<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Models\Charleston;
use App\Models\WeddingParty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $about = About::all();
        $charleston = Charleston::all();

        return view('admin.admin', ['about' => $about, 'charleston' => $charleston]);
    }

    public function about(Request $request)
    {
        $about = json_decode($request->about);

        $bio = '';

        foreach($about as $content) {
            foreach($content as $k => $v) {
                $bio = $v->insert;
            }
        }

        $aboutModel = new About();

        $aboutModel->content = $bio;
        $aboutModel->save();

        return redirect('/admin');
    }

    public function location(Request $request)
    {
        $location = new Charleston();

        $location->name = $request->name;
        $location->location = $request->location;
        $location->business_type = $request->business_type;
        $location->link = $request->link;
        $location->description = $request->description;

        $location->save();

        return redirect('/admin');
    }

    public function party(Request $request)
    {

    }

    public function editAbout(Request $request)
    {
        //
    }

    public function destroyAbout(Request $request)
    {

    }
}