<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;


class ShareenController extends Controller
{   
    private $recentBlogs;
    private $blog;
    private $blogs;

    public function index()
    {   $this->recentBlogs = Blog::where('status', 1)->orderBy('id', 'desc')->take('3')->get();
        return view('website.home.home',['recent_blogs' => $this->recentBlogs]);
    }

    public function category($id)
    {   $this->category = Category::find($id);
        $this->blogs = Blog::where('category_id', $id)->where('status', 1)->orderBy('id', 'desc')->paginate(2);
        //return $this->blogs;

        return view('website.category.category',['blogs'=>$this->blogs,'category'=>$this->category]);
    }

    public function detail($id)
    {
        $this->blog = Blog::find($id);
        return view('website.detail.detail', ['blog' => $this->blog]);
    }

    public function contact()
    {
        return view('website.contact.contact');
    }

    public function contactSubmit(Request $request)
    {
        Contact::contactSubmit($request);
        return redirect()->back()->with('message', 'Thanks for your contact');
    }
}
