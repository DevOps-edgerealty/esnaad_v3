<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\Communities_image;

use App\Models\Project;
use App\Models\Type;
use App\Models\ProjectType;
use App\Models\Banner;
use App\Models\Bed;
use App\Models\Bath;
use App\Models\Category;
use App\Models\Agents;
use App\Models\Location;
use App\Models\City;
use App\Models\Aminities;
use App\Models\Developer;
use App\Models\Features;
use App\Models\Project_status;
use App\Models\Life_style;
use App\Models\Facilities;
use App\Models\Project_document;
use App\Models\Project_image;
use App\Models\ProjectLocation;

use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommunitiesController extends Controller
{
    private $uploadPath = "uploads/communities/images/";

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $this->data['community'] = Community::orderBy('id', 'DESC')->get();


        return view('admin.community.show', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['types'] = Type::all();

        $this->data['catogory'] = Category::all();

        $this->data['agents'] = Agents::all();

        $this->data['locations'] = Location::orderBY('name_en')->get();

        $this->data['cities'] = City::all();

        $this->data['beds'] = Bed::all();

        $this->data['baths'] = Bath::all();

        // $this->data['features'] = Features::all();

        // $this->data['facilities'] = facilities::all();

        // $this->data['schools'] = Schools::all();

        $this->data['developers'] = Developer::all();

        $this->data['project_type'] = ProjectType::all();

        $this->data['project_status'] = Project_status::all();

        $this->data['life_style'] = Life_style::all();

        // $this->data['destinations'] = Destinations::all();

        return view('admin.community.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bool = 0;
        if($bool==0)
         {
            $communities = new Community();

            $communities->title_en = $request->title_en;
            $communities->title_ru = '0';
            $communities->title_ar = '0';

            $communities->slug_link = Str::slug($request->title_en);
            $communities->location = $request->location;

            $communities->address_en = $request->address_en;
            $communities->address_ru = '0';
            $communities->address_ar = '0';

            $communities->map_embed_code = $request->map_embed_code;

            $communities->description_en = $request->description_en;
            $communities->description_ru = '0';
            $communities->description_ar = '0';

            $communities->meta_title_en = $request->meta_title_en;
            $communities->meta_title_ru = '0';
            $communities->meta_title_ar = '0';

            $communities->meta_keywords_en = $request->meta_keyword_en;
            $communities->meta_keywords_ru = '0';
            $communities->meta_keywords_ar = '0';

            $communities->meta_description_en = $request->meta_description_en;
            $communities->meta_description_ru = '0';
            $communities->meta_description_ar = '0';

            $communities->status = 1;

            $communities->save();

            $this->data['property_id'] = $communities->id;

            return view('admin.community.create.image.image', $this->data);
            // return Redirect::to('admin/community')->withSuccess('message','Record has Been Uploaded.');
         }
         else
         {
             return Redirect::to('admin/community')->withErrors(['message', 'Record is already Exist']);
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
        $this->data['locations'] = Location::all();

        $communities = Community::with(['images' , 'locationss' ])->where('id', $id )->first();

        $this->data['communities'] = $communities;

        return view('admin.community.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bool = 0;
        if($bool==0)
         {

            $communities = Community::find($id);

            $communities->title_en = $request->title_en;
            $communities->title_ru = '0';
            $communities->title_ar = '0';

            $communities->slug_link = Str::slug($request->title_en);
            $communities->location = $request->location;

            $communities->address_en = $request->address_en;
            $communities->address_ru = '0';
            $communities->address_ar = '0';

            $communities->map_embed_code = $request->map_embed_code;

            $communities->description_en = $request->description_en;
            $communities->description_ru = '0';
            $communities->description_ar = '0';

            $communities->meta_title_en = $request->meta_title_en;
            $communities->meta_title_ru = '0';
            $communities->meta_title_ar = '0';

            $communities->meta_keywords_en = $request->meta_keyword_en;
            $communities->meta_keywords_ru = '0';
            $communities->meta_keywords_ar = '0';

            $communities->meta_description_en = $request->meta_description_en;
            $communities->meta_description_ru = '0';
            $communities->meta_description_ar = '0';

            $communities->status = 1;

            $communities->save();

            $this->data['property_id'] = $communities->id;

            // return view('admin.community.create.image.image', $this->data);
            return Redirect::to('admin/community')->withSuccess('message','Record has Been Uploaded.');
         }
         else
         {
             return Redirect::to('admin/community')->withErrors(['message', 'Record is already Exist']);
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = Community::find($id);

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

        // dd($request);
        $current_image_count = Communities_image::where('community_id', $request->property_id)->count();

        $max_images = 5 - $current_image_count;
        $min_images = 4 - $current_image_count;

        $request->validate([
            'files' => 'required | max: '.$max_images.' | min: '.$min_images,
            'files.*' => 'max:400'
        ]);

        try {

            if($request->hasfile('files'))
            {
                $properties_id = $request->property_id;
                $files = [];

                foreach($request->file('files') as $key => $image)
                {
                    $image_name = 'lpd-community-'.$key.'-'.time().'.'.$image->guessExtension();
                    $path = $this->uploadPath;
                    $image->move($path."$properties_id/", $image_name);
                    array_push($files, $image_name);

                    $file_name=$image_name;
                    $orig_path = $path."$properties_id/".$image_name;

                    $dest_path = $orig_path;

                    $properties_images = new Communities_image();
                    $properties_images->image = $image_name;
                    $properties_images->community_id = $properties_id;
                    $properties_images->save();
                }
            }

        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['message', '$e->getMessage']);
        }


        // $properties = Project::with(['locationss', 'project_types','developer'])->orderBy('id', 'desc')->get();

        // $properties_count = Project::with(['locationss', 'project_types','developer'])->orderBy('id', 'desc')->count();

        // $this->data['projects'] = $properties;

        // $this->data['projects_count'] = $properties_count;

        $this->index();

        return view('admin.community.show', $this->data)->withSuccess('Project has been successfully created!');
    }
}
