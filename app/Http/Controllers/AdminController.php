<?php

namespace App\Http\Controllers;

use App\Content;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = Content::all();
        return view('home', compact('contents'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        //validation rules
        $this->validate(request(), [
            'title' => 'required|unique:contents',
            'description' => 'required',
            'image'     =>  'required|image|mimes:jpeg,png,jpg,gif'
        ], [
                'title.required' => 'title must be filled out!',
                'image.required' => 'Must choose an image file!'
        ]);

        $data = $request->all();
        $contents = new Content();
        $contents->title = $data['title'];
        $contents->content_type = $data['content_type'];
        $contents->publish_section = $data['publish_section'];
        $contents->description = $data['description'];

        //upload image
        if ($request->hasFile('image')) {
            echo $img_tmp = Input::file('image');
            //image path
            $extension = $img_tmp->getClientOriginalExtension();
            $filename = rand(111, 999999) . '.' . $extension;
            $img_path = 'uploads/' . $filename;

            //image resize
            Image::make($img_tmp)->resize(500, 500)->save($img_path);
            $contents->image = $filename;
        }
        $contents->save();
        session()->flash('success', 'Item added successfully!!');
        return redirect(route('home'));

    }

    public function status($id)
    {
        $data = Content::where('id', $id)->first();

        if ($data->status == '1') {

            $data->status = '0';
            $data->save();

        } else {

            $data->status = '1';
            $data->save();
        }

        return redirect()->back()->with('success', 'Content status Changed Successfully!!');

    }

    public function destroy($id)
    {
        $content = Content::find($id);

        $img_path = 'uploads/';

        if(file_exists($img_path.$content->image))
        {
            unlink($img_path.$content->image);
        }
        $content->delete();
        session()->flash('danger', 'Content Deleted!!');
        return redirect()->back();
    }
}
