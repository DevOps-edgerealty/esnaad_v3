<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

// use Illuminate\Support\Facades\Validator;
use Validator;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BlogController extends Controller
{

    private $uploadPath = "uploads/blogs/";

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['blogs'] = Blog::orderby('id', 'desc')->get();
        $this->data['blog_counts'] = Blog::count();

        return view('admin.blog.show',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'name_en' => ['required'],

            'meta_title_en' => ['required'],

            'meta_keyword_en' => ['required'],

            'meta_description_en' => ['required'],

            'description_en' => ['required'],
        ]);

        $bool=0;

        if($bool==0)
		{

            $Blogs = new Blog();
            $Blogs->name_en = $request->name_en;
            $Blogs->name_ru = '0';
            $Blogs->name_ar = '0';
            $Blogs->slug_link = Str::slug($request->name_en);
            $Blogs->description_en = $request->description_en;
            $Blogs->description_ru = '0';
            $Blogs->description_ar = '0';
            $Blogs->meta_title_en = $request->meta_title_en;
            $Blogs->meta_title_ru = '0';
            $Blogs->meta_title_ar = '0';
            $Blogs->meta_keywords_en = $request->meta_keyword_en;
            $Blogs->meta_keywords_ru = '0';
            $Blogs->meta_keywords_ar = '0';
            $Blogs->meta_description_en = $request->meta_description_en;
            $Blogs->meta_description_ru = '0';
            $Blogs->meta_description_ar = '0';
            $Blogs->status = 1;
            $Blogs->save();

            $this->data['blogs'] = Blog::find($Blogs->id);

            return view('admin.blog.image', $this->data);

            // return Redirect::to('admin/blog')->withSuccess('message','Record has Been Uploaded.');
        }
        else
        {
            return Redirect::to('admin/blog')->withErrors(['message', 'Record is already Exist']);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->data['blogs'] = Blog::find($id);
        return view('admin.blog.edit', $this->data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'name_en' => ['required'],

            'meta_title_en' => ['required'],

            'meta_keyword_en' => ['required'],

            'meta_description_en' => ['required'],

            'description_en' => ['required'],
        ]);

        $bool=0;

        if($bool==0)
		{
            try{
                $Blogs = Blog::find($id);
            } catch(\Exception $e) {
                return Redirect::back()->withErrors(['message', '$e->getMessage']);
            }

            $Blogs = Blog::find($id);
            $Blogs->name_en = $request->name_en;
            $Blogs->name_ru = '0';
            $Blogs->name_ar = '0';
            $Blogs->slug_link = Str::slug($request->name_en);
            $Blogs->description_en = $request->description_en;
            $Blogs->description_ru = '0';
            $Blogs->description_ar = '0';
            $Blogs->meta_title_en = $request->meta_title_en;
            $Blogs->meta_title_ru = '0';
            $Blogs->meta_title_ar = '0';
            $Blogs->meta_keywords_en = $request->meta_keyword_en;
            $Blogs->meta_keywords_ru = '0';
            $Blogs->meta_keywords_ar = '0';
            $Blogs->meta_description_en = $request->meta_description_en;
            $Blogs->meta_description_ru = '0';
            $Blogs->meta_description_ar = '0';
            $Blogs->status = 1;
            $Blogs->save();

            // $this->data['blog_id'] = $Blogs->id;

            // return view('admin.blog.image', $this->data);

            return Redirect::to('admin/blog')->withSuccess('message','Record has Been Uploaded.');
        }
        else
        {
            return Redirect::to('admin/blog')->withErrors(['message', 'Record is already Exist']);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function image_delete($id){

        $blog = Blog::find($id);

        if($blog){
            try {
                $blog->image_url = null;
                $blog->save();
            } catch(\Exception $e) {
                // dd($e->getMessage);
                return Redirect::back()->withErrors(['message', $e->getMessage()]);
            }
        }

        return Redirect::back()->with(['success','Image deleted successfully!']);

    }



    public function image_update(Request $request){
        $request->validate([
            'files' => 'required | min: 1 | max: 1',
            'files.*' => 'max:400'
        ]);


        try {

            if($request->hasfile('files'))
            {
                // dd($request->files);
                foreach($request->file('files') as $image)
                {
                    $Blogs_id = $request->blog_id;
                    $image_name = 'lpd-blogs-'.time().'.'.$image->guessExtension();
                    $path = $this->uploadPath;


                    $image->move($path."$Blogs_id/", $image_name);

                    $file_name=$image_name;
                    $orig_path = $path."$Blogs_id/".$image_name;

                    $dest_path = $orig_path;

                    $Blogs = Blog::find($Blogs_id);

                    $Blogs->image_url = $image_name;

                    $Blogs->save();
                }
            }

        } catch (\Exception $e) {
            // dd($e->getMessage());
            return Redirect::back()->withErrors(['message', '$e->getMessage']);
        }


        $this->data['blogs'] = Blog::orderby('id', 'desc')->get();
        $this->data['blog_counts'] = Blog::count();

        return view('admin.blog.show',$this->data)->withSuccess('Blog has been successfully created!');;

    }


    public function image_edit($id){
        $this->data['blogs'] = Blog::find($id);
        return view('admin.blog.image', $this->data);
    }

}
