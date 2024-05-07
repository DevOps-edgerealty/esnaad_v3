<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
use App\Models\Community;
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

class ProjectController extends Controller
{

    private $uploadPath = "uploads/projects/images/";

    /**
     * NOTE:
     * =====
     *
     * PROJECT STATUS GUIDELINE
     *      Off Plan Projects   |   1
     *      Ready Projects      |   2
     *      Luxury Projects     |   3
     *
     *      Developer           |   agent_id    |   db-attribute
     *
     */

    public function index()
    {
        $projects = Project::with(['locationss', 'project_types','developer'])->orderBy('id', 'desc')->get();

        $projects_count = Project::with(['images', 'location', 'project_types','developer'])->orderBy('id', 'desc')->count();

        $this->data['projects'] = $projects;

        $this->data['projects_count'] = $projects_count;

        return view('admin.projects.show',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['types'] = Type::all();

        $this->data['categories'] = Category::all();

        $this->data['communities'] = Community::select(['title_en', 'id'])->orderby('title_en')->get();

        $this->data['agents'] = Agents::all();

        $this->data['locations'] = Location::select(['name_en', 'id'])->orderby('name_en')->get();

        $this->data['cities'] = City::all();

        $this->data['beds'] = Bed::all();

        $this->data['baths'] = Bath::all();

        $this->data['developers'] = Developer::select(['name_en', 'id'])->orderby('name_en')->get();

        $this->data['project_type'] = ProjectType::select(['name_en', 'id'])->orderby('name_en')->get();

        $this->data['project_status'] = Project_status::select(['name_en', 'id'])->orderby('name_en')->get();

        $this->data['life_style'] = Life_style::all();

        return view('admin.projects.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'developer' => ['required'],

            'project_ownership' => ['required'],

            'handover' => ['required'],

            'project_location' => ['required'],

            'property_release' => ['required'],

            'property_category' => ['required'],

            'emirate' => ['required'],

            'community' => ['required'],

            'longitude' => ['required'],

            'latitude' => ['required'],

            'price' => ['required'],

            'bedrooms' => ['required'],

            'area' => ['required'],

            'floor' => ['required'],

            'title_en' => ['required'],

            'description_en' => ['required'],

            'meta_title_en' => ['required'],

            'meta_keyword_en' => ['required'],

            'meta_description_en' => ['required'],
        ]);

        $bool=0;

		if($bool==0)
		{
            $project = new Project();

            $project->status = '1';
            $project->pro_status = $request->property_release;
            $project->type_id = '0';
            $project->agent_id = $request->developer;
            $project->community_id = $request->community;
            $project->project_status = $request->property_release;
            $project->sub_type_id = $request->property_category;
            $project->city_id = $request->emirate;
            $project->country_id = '0';

            $project->ownership_en = $request->project_ownership;
            $project->size = $request->area;
            $project->no_floors = $request->floor;

            $project->location = $request->project_location;

            $project->title_en = $request->title_en;
            $project->slug_link = Str::slug($request->title_en);
            $project->address_en = $request->address_en;

            $project->project_price = $request->price;
            $project->project_price_usd = $request->price_usd;

            $project->bedrooms = $request->bedrooms;

            $project->est_completion_en  = $request->handover;

            $project->description_en = $request->description_en;

            $project->community_en = $request->community_en;

            $project->meta_title_en = $request->meta_title_en;
            $project->meta_keywords_en = $request->meta_keyword_en;
            $project->meta_description_en = $request->meta_description_en;

            $project->save();

            $properties_id = $project->id;
            
            $new_location = new ProjectLocation();
            $new_location->latitude = $request->latitude;
            $new_location->longitude = $request->longitude;
            $new_location->project_id = $properties_id;
            $new_location->save();

            $this->data['property_id'] = $properties_id;

            return view('admin.projects.create.image.image', $this->data);
        }
        else
        {
            return Redirect::to('admin/projects')->withErrors('Record is already Exist');
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

        $this->data['types'] = Type::all();

        $this->data['categories'] = Category::all();

        $this->data['communities'] = Community::select('id', 'title_en')->orderBy('title_en')->get();

        $this->data['locations'] = Location::all();

        $this->data['cities'] = City::all();

        $this->data['beds'] = Bed::all();

        $this->data['baths'] = Bath::all();

        $this->data['developers'] = Developer::all();

        $this->data['project_type'] = ProjectType::all();

        $this->data['project_status'] = Project_status::all();

        $this->data['properties'] = Project::with(['locationss', 'project_types','developer', 'project_locations'])->find($id);

        return view('admin.projects.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([

            'developer' => ['required'],

            'project_ownership' => ['required'],

            'handover' => ['required'],

            'project_location' => ['required'],

            'property_release' => ['required'],

            'property_category' => ['required'],

            'emirate' => ['required'],

            'community' => ['required'],

            'longitude' => ['required'],

            'latitude' => ['required'],

            'price' => ['required'],

            'bedrooms' => ['required'],

            'area' => ['required'],

            'floor' => ['required'],

            'title_en' => ['required'],

            'description_en' => ['required'],

            'meta_title_en' => ['required'],

            'meta_keyword_en' => ['required'],

            'meta_description_en' => ['required'],
        ]);

        $bool = 0;

        if($bool==0)
		{
            $project = Project::find($id);

            $project->status = '1';
            $project->pro_status = $request->property_release;
            $project->agent_id = $request->developer;
            $project->community_id = $request->community;
            $project->project_status = $request->property_release;
            $project->sub_type_id = $request->property_category;
            $project->city_id = $request->emirate;
            $project->country_id = '0';

            $project->ownership_en = $request->project_ownership;
            $project->size = $request->area;
            $project->no_floors = $request->floor;


            $project->location = $request->project_location;

            $project->title_en = $request->title_en;
            $project->slug_link = Str::slug($request->title_en);
            $project->address_en = $request->address_en;

            $project->project_price = $request->price;
            $project->project_price_usd = $request->price_usd;

            $project->bedrooms = $request->bedrooms;

            $project->est_completion_en  = $request->handover;

            $project->description_en = $request->description_en;

            $project->community_en = $request->community_en;


            $project->meta_title_en = $request->meta_title_en;
            $project->meta_keywords_en = $request->meta_keyword_en;
            $project->meta_description_en = $request->meta_description_en;

            $project->save();

            $properties_id = $project->id;
            $property_location = ProjectLocation::where('project_id', 409)->first();
            if( is_null($property_location) ){
                $new_location = new ProjectLocation();
                $new_location->latitude = $request->latitude;
                $new_location->longitude = $request->longitude;
                $new_location->project_id = $properties_id;
                $new_location->save();
            } else {
                $property_location->latitude = $request->latitude;
                $property_location->longitude = $request->longitude;
                $property_location->project_id = $properties_id;
                $property_location->save();
            }


            $this->data['property_id'] = $properties_id;


            // return view('admin.projects.create.image.image', $this->data);

            return Redirect::to('admin/projects')->withSuccess('Record has Been Uploaded.');
        }
        else
        {
            return Redirect::to('admin/projects')->withErrors('Record is already Exist');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function image_update($id)
    {
        $properties = Project::with(['locationss', 'project_types','developer'])->select('id', 'title_en')->find($id);

        $property_images = Project_image::where('project_id', $id)->get();

        $this->data['properties'] = $properties;

        $this->data['property_images'] = $property_images;

        $this->data['property_id'] = $id;

        return view('admin.projects.update.images',$this->data);
    }



    public function image_upload(Request $request)
    {
        $current_image_count = Project_image::where('project_id', $request->property_id)->count();

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
                    $image_name = 'lpd-projects-'.$key.'-'.time().'.'.$image->guessExtension();
                    $path = $this->uploadPath;
                    $image->move($path."$properties_id/", $image_name);
                    array_push($files, $image_name);

                    $file_name=$image_name;
                    $orig_path = $path."$properties_id/".$image_name;

                    $dest_path = $orig_path;

                    $properties_images = new Project_image();
                    $properties_images->image = $image_name;
                    $properties_images->project_id = $properties_id;

                    $properties_images->save();
                }
            }

        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['message', '$e->getMessage']);
        }


        $properties = Project::with(['locationss', 'project_types','developer'])->orderBy('id', 'desc')->get();

        $properties_count = Project::with(['locationss', 'project_types','developer'])->orderBy('id', 'desc')->count();

        $this->data['projects'] = $properties;

        $this->data['projects_count'] = $properties_count;

        return view('admin.projects.show', $this->data)->withSuccess('Project has been successfully created!');
    }





    public function image_delete($id)
    {
        $property_images = Project_image::find($id);

        if($property_images){
            try {
                Project_image::destroy($id);
            } catch(\Exception $e) {
                dd($e->getMessage);
                return Redirect::back($this->data)->withErrors(['message', '$e->getMessage']);
            }
        }

        return Redirect::back()->with(['success','Image deleted successfully!']);
    }


}
