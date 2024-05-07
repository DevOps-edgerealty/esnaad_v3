<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use App\Models\Type;
use App\Models\Agents;
use App\Models\Location;
use App\Models\City;
use App\Models\Bed;
use App\Models\Bath;
use App\Models\Project;
use App\Models\Community;
use App\Models\PropertyLocation;
use App\Models\Properties_image;

// use Illuminate\Support\Facades\Validator;
use Validator;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PropertiesController extends Controller
{

    private $uploadPath = "uploads/properties/";

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::with(['images', 'locationss','cityss'])->orderBy('id', 'desc')->get();

        $properties_count = Property::with(['images', 'locationss','cityss'])->orderBy('id', 'desc')->count();

        $this->data['properties'] = $properties;

        $this->data['properties_count'] = $properties_count;

        return view('admin.property.show',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['types'] = Type::all();

        $this->data['categories'] = Category::all();

        $this->data['agents'] = Agents::orderBy('name_en')->get();

        $this->data['locations'] = Location::all();

        $this->data['cities'] = City::select('id', 'city_name_en')->orderBy('id')->get();

        $this->data['beds'] = Bed::all();

        $this->data['baths'] = Bath::all();

        $this->data['projects'] = Project::select('id', 'title_en')->orderBy('id', 'Desc')->get();

        $this->data['communities'] = Community::select('id', 'title_en')->orderBy('title_en')->get();

        return view('admin.property.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if($request->property_release == 1) {

            $validatedData = $request->validate([

                'ref_no' => ['required'],

                'property_type' => ['required'],

                'associated_project' => ['required'],

                'property_release' => ['required'],

                'property_category' => ['required'],

                'emirate' => ['required'],

                'community' => ['required'],

                'longitude' => ['required'],

                'latitude' => ['required'],

                'price' => ['required'],

                'bedrooms' => ['required'],

                'bathrooms' => ['required'],

                'parking' => ['required'],

                'area' => ['required'],

                'floor' => ['required'],

                'permit_number' => ['required'],

                'title_en' => ['required'],

                'address_en' => ['required'],

                'description_en' => ['required'],

                'meta_title_en' => ['required'],

                'meta_keyword_en' => ['required'],

                'meta_description_en' => ['required'],
            ]);
        } else {
            $request->validate([
                'ref_no' => ['required'],

                'property_type' => ['required'],

                'property_release' => ['required'],

                'property_category' => ['required'],

                'emirate' => ['required'],

                'community' => ['required'],

                'longitude' => ['required'],

                'latitude' => ['required'],

                'price' => ['required'],

                'bedrooms' => ['required'],

                'bathrooms' => ['required'],

                'parking' => ['required'],

                'area' => ['required'],

                'floor' => ['required'],

                'permit_number' => ['required'],

                'title_en' => ['required'],

                'address_en' => ['required'],

                'description_en' => ['required'],

                'meta_title_en' => ['required'],

                'meta_keyword_en' => ['required'],

                'meta_description_en' => ['required'],
            ]);
        }


        if($request->no_agent != "" || $request->agent == "")
        {
            $agent = 0;
        }

        $bool=0;

		if($bool==0)
		{
            $properties = new Property();
            $properties->slug_link = Str::slug($request->title_en);
            $properties->type_id = $request->property_type;
            $properties->ref_no = $request->ref_no;
            $properties->cat_id = $request->property_category;
            $properties->property_release = $request->property_release;

            if($request->property_release == 1)
            {
                $properties->project_id = $request->associated_project;
            } else {
                $properties->project_id = '0';
            }

            $properties->project_id = '0';
            $properties->agent_id = $request->agent;

            $properties->is_premium = '0';
            $properties->is_feature = '0';
            $properties->is_exclusive = '0';

            $properties->title_en = $request->title_en;
            $properties->address_en = $request->address_en;
            $properties->description_en = $request->description_en;

            $properties->price = $request->price;
            $properties->price_usd = $request->price_usd;

            $properties->city_id = $request->emirate;
            $properties->location = $request->community;
            $properties->map_embed_code = "0";

            $properties->bedrooms = $request->bedrooms;
            $properties->bathrooms = $request->bathrooms;
            $properties->permit_no = $request->permit_number;
            $properties->permit_no = $request->floor;
            $properties->area = $request->area;
            $properties->parking = $request->parking;

            $properties->meta_title_en = $request->meta_title_en;
            $properties->meta_title_ar = '0';
            $properties->meta_title_ru = '0';
            $properties->meta_keywords_en = $request->meta_keyword_en;
            $properties->meta_keywords_ar = '0';
            $properties->meta_keywords_ru = '0';
            $properties->meta_description_en = $request->meta_description_en;
            $properties->meta_description_ar = '0';
            $properties->meta_description_ru = '0';

            $properties->status = 1;

            $properties->save();

            $properties_id = $properties->id;
            $new_location = new PropertyLocation();
            $new_location->latitude = $request->latitude;
            $new_location->longitude = $request->longitude;
            $new_location->property_id = $properties_id;
            $new_location->save();

            $this->data['property_id'] = $properties_id;

            return view('admin.property.create.image.image', $this->data);

            return Redirect::to('admin/properties')->withSuccess('message','Record has Been Uploaded.');
        }
        else
        {
            return Redirect::to('admin/properties')->withErrors(['message', 'Record is already Exist']);
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
        $this->data['properties'] = Property::with(['images', 'locationss','cityss', 'property_locations'])->find($id);

        $this->data['types'] = Type::all();

        $this->data['categories'] = Category::all();

        $this->data['agents'] = Agents::orderBy('name_en')->get();

        $this->data['locations'] = Location::all();

        $this->data['cities'] = City::select('id', 'city_name_en')->orderBy('id')->get();

        $this->data['beds'] = Bed::all();

        $this->data['baths'] = Bath::all();

        $this->data['projects'] = Project::select('id', 'title_en')->orderBy('id', 'Desc')->get();

        $this->data['communities'] = Community::select('id', 'title_en')->orderBy('title_en')->get();

        return view('admin.property.edit', $this->data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->property_release == 1) {
            $validatedData = $request->validate([
                'ref_no' => ['required'],

                'property_type' => ['required'],

                'associated_project' => ['required'],

                'property_release' => ['required'],

                'property_category' => ['required'],

                'emirate' => ['required'],

                'community' => ['required'],

                'longitude' => ['required'],

                'latitude' => ['required'],

                'price' => ['required'],

                'bedrooms' => ['required'],

                'bathrooms' => ['required'],

                'parking' => ['required'],

                'area' => ['required'],

                'floor' => ['required'],

                'permit_number' => ['required'],

                'title_en' => ['required'],

                'address_en' => ['required'],

                'description_en' => ['required'],

                'meta_title_en' => ['required'],

                'meta_keyword_en' => ['required'],

                'meta_description_en' => ['required'],
            ]);
        } else {
            $request->validate([
                'ref_no' => ['required'],

                'property_type' => ['required'],

                'property_release' => ['required'],

                'property_category' => ['required'],

                'emirate' => ['required'],

                'community' => ['required'],

                'longitude' => ['required'],

                'latitude' => ['required'],

                'price' => ['required'],

                'bedrooms' => ['required'],

                'bathrooms' => ['required'],

                'parking' => ['required'],

                'area' => ['required'],

                'floor' => ['required'],

                'permit_number' => ['required'],

                'title_en' => ['required'],

                'address_en' => ['required'],

                'description_en' => ['required'],

                'meta_title_en' => ['required'],

                'meta_keyword_en' => ['required'],

                'meta_description_en' => ['required'],
            ]);
        }

        $bool=0;

		if($bool==0)
		{
            $properties = Property::find($id);
            $properties->slug_link = Str::slug($request->title_en);
            $properties->type_id = $request->property_type;
            $properties->ref_no = $request->ref_no;
            $properties->cat_id = $request->property_category;
            $properties->property_release = $request->property_release;

            if($request->property_release == 1)
            {
                $properties->project_id = $request->associated_project;
            } else {
                $properties->project_id = '0';
            }

            $properties->project_id = '0';
            $properties->agent_id = $request->agent;

            $properties->is_premium = '0';
            $properties->is_feature = '0';
            $properties->is_exclusive = '0';

            $properties->title_en = $request->title_en;
            $properties->address_en = $request->address_en;
            $properties->description_en = $request->description_en;

            $properties->price = $request->price;
            $properties->price_usd = $request->price_usd;

            $properties->city_id = $request->emirate;
            $properties->location = $request->community;
            $properties->map_embed_code = "0";

            $properties->bedrooms = $request->bedrooms;
            $properties->bathrooms = $request->bathrooms;
            $properties->permit_no = $request->permit_number;
            $properties->permit_no = $request->floor;
            $properties->area = $request->area;
            $properties->parking = $request->parking;

            $properties->meta_title_en = $request->meta_title_en;
            $properties->meta_title_ar = '0';
            $properties->meta_title_ru = '0';
            $properties->meta_keywords_en = $request->meta_keyword_en;
            $properties->meta_keywords_ar = '0';
            $properties->meta_keywords_ru = '0';
            $properties->meta_description_en = $request->meta_description_en;
            $properties->meta_description_ar = '0';
            $properties->meta_description_ru = '0';

            $properties->status = 1;

            $properties->save();

            $properties_id = $properties->id;
            $new_location = new PropertyLocation();
            $new_location->latitude = $request->latitude;
            $new_location->longitude = $request->longitude;
            $new_location->property_id = $properties_id;
            $new_location->save();

            $this->data['property_id'] = $properties_id;

            // return view('admin.property.create.image.image', $this->data);

            return Redirect::to('admin/properties')->withSuccess('message','Record has Been Updated.');
        }
        else
        {
            return Redirect::to('admin/properties')->withErrors(['message', 'Record is already Exist']);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = Property::find($id);

        if($property){
            try {
                $property::destroy($id);
            } catch(\Exception $e) {
                dd($e->getMessage);
                return Redirect::back($this->data)->withErrors(['message', '$e->getMessage']);
            }
        }

        return Redirect::back()->with(['success','Property deleted successfully!']);
    }



    public function image_upload(Request $request)
    {
        $current_image_count = Properties_image::where('property_id', $request->property_id)->count();

        $max_images = 5 - $current_image_count;
        $min_images = 4 - $current_image_count;

        $request->validate([
            'files' => 'required | max: '.$max_images.' | min: '.$min_images,
            // 'files.*' => 'mimes: webp, avif, jpg, png, jpeg | max:400|dimensions: min_width=1920,min_height=1080'
            'files.*' => 'max:400'
        ]);


        try {

            if($request->hasfile('files'))
            {
                $properties_id = $request->property_id;
                $files = [];

                foreach($request->file('files') as $key => $image)
                {
                    $image_name = 'lpd-listings-'.$key.'-'.time().'.'.$image->guessExtension();
                    $path = $this->uploadPath;
                    $image->move($path."$properties_id/", $image_name);
                    array_push($files, $image_name);

                    $file_name=$image_name;
                    $orig_path = $path."$properties_id/".$image_name;

                    $dest_path = $orig_path;

                    $properties_images = new Properties_image();
                    $properties_images->image = $image_name;
                    $properties_images->property_id = $properties_id;

                    $properties_images->save();
                }
                // dd($files);
            }

        } catch (\Exception $e) {

            return Redirect::to('admin/properties')->withErrors(['message', '$e->getMessage']);
        }


        $properties = Property::with(['images', 'locationss','cityss'])->orderBy('id', 'desc')->get();

        $properties_count = Property::with(['images', 'locationss','cityss'])->orderBy('id', 'desc')->count();

        $this->data['properties'] = $properties;

        $this->data['properties_count'] = $properties_count;

        $this->data['success'] = 'Property listing has been listed successfully!';


        return view('admin.property.show', $this->data);
    }


    public function image_update($id)
    {
        $properties = Property::with(['images', 'locationss','cityss'])->select('id', 'title_en')->find($id);

        $property_images = Properties_image::where('property_id', $id)->get();

        $this->data['properties'] = $properties;

        $this->data['property_images'] = $property_images;

        $this->data['property_id'] = $id;

        return view('admin.property.update.images',$this->data);
    }


    public function image_delete($id)
    {
        $property_images = Properties_image::find($id);

        if($property_images){
            try {
                Properties_image::destroy($id);
            } catch(\Exception $e) {
                dd($e->getMessage);
                return Redirect::back($this->data)->withErrors(['message', '$e->getMessage']);
            }
        }

        return Redirect::back()->with(['success','Image deleted successfully!']);
    }


    public function image_re_updated($id){
        $property_image = Properties_image::count($id);

        dd($proeprty_image);
    }


}
