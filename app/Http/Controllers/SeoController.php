<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landingpageseos;
use Illuminate\Support\Facades\Redirect;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['seo'] = Landingpageseos::orderby('id', 'Desc')->get();
        $this->data['seo_counts'] = Landingpageseos::count();

        return view('admin.seo.show',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.seo.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bool=0;

        if($bool==0)
        {

            //
            $Landingpageseo = new Landingpageseos();

            $Landingpageseo->page = $request->page;
            $Landingpageseo->meta_title_en = $request->meta_title_en;
            $Landingpageseo->meta_title_ru = '0';
            $Landingpageseo->meta_title_ar = '0';
            $Landingpageseo->meta_keywords_en = $request->meta_keyword_en;
            $Landingpageseo->meta_keywords_ru = '0';
            $Landingpageseo->meta_keywords_ar = '0';
            $Landingpageseo->meta_description_en = $request->meta_description_en;
            $Landingpageseo->meta_description_ru = '0';
            $Landingpageseo->meta_description_ar = '0';
            $Landingpageseo->save();


            return Redirect::to('admin/seo')->withSuccess('message','Record has Been Uploaded.');
        }
        else
        {
            return Redirect::to('admin/seo')->withErrors(['message', 'Record is already Exist']);
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
        $landingpage = Landingpageseos::where('id', $id )->first();

        // dd($landingpage);
        $this->data['seo'] = $landingpage;

        return view('admin.seo.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bool=0;

        if($bool==0)
        {

            //
            $Landingpageseo = Landingpageseos::find($id);
            $Landingpageseo->page = $request->page;
            $Landingpageseo->meta_title_en = $request->meta_title_en;
            $Landingpageseo->meta_title_ru = '0';
            $Landingpageseo->meta_title_ar = '0';
            $Landingpageseo->meta_keywords_en = $request->meta_keyword_en;
            $Landingpageseo->meta_keywords_ru = '0';
            $Landingpageseo->meta_keywords_ar = '0';
            $Landingpageseo->meta_description_en = $request->meta_description_en;
            $Landingpageseo->meta_description_ru = '0';
            $Landingpageseo->meta_description_ar = '0';
            $Landingpageseo->save();


            return Redirect::to('admin/seo')->withSuccess('message','Record has Been Uploaded.');
        }
        else
        {
            return Redirect::to('admin/seo')->withErrors(['message', 'Record is already Exist']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
