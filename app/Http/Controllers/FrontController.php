<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $contents = Content::where('status', 1)->where('publish_section', 'Section 1')->get();
        $content = Content::where('status', 1)->where('publish_section', 'Section 2')->get();
        return view('frontend.index', compact('contents', 'content'));
    }

    public function Details($id)
    {
        $details = Content::where("id",$id)->first();
        return view('frontend.details', compact('details'));
    }
}
