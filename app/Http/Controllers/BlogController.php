<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    private $blog;
    private $blogs;
    private $categories;
    private $message;

    public function index()
    {
        $this->categories = Category::all();
        return view('admin.blog.add', ['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
        Blog::newBlog($request);
        return redirect()->back()->with('message', 'Blog info created successfully.');
    }

    public function manage()
    {
        $this->blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blog.manage', ['blogs' => $this->blogs]);
    }

    public function detail($id)
    {
        $this->blog = Blog::find($id);
        return view('admin.blog.detail', ['blog' => $this->blog]);
    }

    public function edit($id)
    {
        $this->blog = Blog::find($id);
        $this->categories = Category::all();
        return view('admin.blog.edit', ['blog' => $this->blog, 'categories' => $this->categories]);
    }

    public function updateStatus($id)
    {
        $this->blog = Blog::find($id);
        if ($this->blog->status == 1)
        {
            $this->blog->status = 0;
            $this->message = 'Blog status info unpublished successfully. ';
        }
        else
        {
            $this->blog->status = 1;
            $this->message = 'Blog status info published successfully. ';
        }
        $this->blog->save();
        return redirect('/manage-blog')->with('message', $this->message);
    }

    public function update(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/manage-blog')->with('message', 'Blog info update successfully.');
    }

    public function delete($id)
    {
        Blog::deleteBlog($id);
        return redirect('/manage-blog')->with('message', 'Blog delete Successfully');
    }


}
