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
use App\Models\Blog;
use App\Models\Bath;
use App\Models\Project;
use App\Models\Community;
use App\Models\PropertyLocation;
use App\Models\Properties_image;
use App\Models\ProjectType;
use App\Models\Banner;
use App\Models\Developer;
use App\Models\Features;
use App\Models\Project_status;
use App\Models\Life_style;
use App\Models\Facilities;
use App\Models\Project_document;
use App\Models\Project_image;
use App\Models\ProjectLocation;
use App\Models\Leads;
use App\Models\Landingpageseos;

use App;
use Mail;
use Validator;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class AllFormSubmissionController extends Controller
{
    /**
     *
     * NOTICE
     * =======
     *
     * THESE VARIABLE NAMES ARE TAKEN FOR FOOTER OF ALL PAGES - DO NOT ATTEMPT TO RECREATE THESE
     *
     *
     *      footer_communities
     *      footer_developers
     *      footer_new_projects
     *      footer_ready_projects
     *
     */

    public function footer() {

        $this->data['footer_communities'] = Community::select('id', 'slug_link', 'title_en')->orderBy('id', 'DESC')->paginate(6);

        $this->data['footer_developers'] = Developer::select('id', 'slug_link', 'name_en')->orderBy('id', 'DESC')->paginate(6);

        $this->data['footer_new_projects'] = Project::where('pro_status', '1')->select('id', 'slug_link', 'title_en')->orderBy('id', 'DESC')->paginate(6);

        $this->data['footer_ready_projects'] = Project::with(['project_types'])->where('pro_status', '2')->select('id', 'slug_link', 'sub_type_id', 'title_en')->orderBy('id', 'DESC')->paginate(6);

        return $this->data;
    }


    private function landingpageseos($id) {

        $this->data['landingpageseo'] = Landingpageseos::select('id', 'meta_title_en', 'meta_description_en', 'meta_keywords_en')->findorFail($id);

        return $this->data;
    }

    public function send_to_crm($leads) {
        try {
            $data = [
                'full_name' => $leads->name,
                'phone' => $leads->phone,
                'email' => $leads->email,

                'page_url' => $leads->url,
                'inquiry' => 'ESNAAD Real Estate Development',
                'type_id' => $leads->type_id,

                'field_ip' => $leads->ip_address,
                'source' => 'ESNAAD Real Estate Development',
                'utm_parameters' => 'ESNAAD Real Estate Development',
                'agent' => '0',
            ];

            $curl = curl_init();

            $url = 'https://crm.edgerealty.ae/api/lead-save';

            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    'Cookie: XSRF-TOKEN=eyJpdiI6IjFkM2xHVFdOUE9TeGt2ZGdKQUpkb2c9PSIsInZhbHVlIjoiSVpCQkNtZWVEdDQ4dXBTMmFYbkV0V2JCNEJPdWhZeVVhN1FuaTg0RnFnWDVuZFFZRmR5aXFGM1lBWlk0OEptOXFjbUFvc3dwdkN4TXBKZ1V0SEdSd0dXV042aVpBc2Z4UUd2YUNWc2ZrVjFqME9aZWUyckI3ZHQ4SURPc3VjT3ciLCJtYWMiOiJjMGUzYmI0ODYzMTBmYmZmN2MzNDkxMDJmZWQ2ZmUyZTc1YmYwNDJlMzEyN2ZmNWU0ODM2ZGJjYTI1ZTljZWU4IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImRacTNQdlNWRHArZDdHc2FVQUNYQWc9PSIsInZhbHVlIjoibFo4L2oyVVdQUGVYYTRSZ2s4RWxUaWQ1ZlJ2SkJWcnhCaktNcUsrYVNIeWpMekhZVDBtWWJDUnlsU1RaMHZGMTlkK1FNSHNhb3EzeWdZbEgrQVVzbHpZOEN0Y0pNbE9pazgvSzl6Y01ycTBPTWNkMnpWZ2Z5aFg2bGtyN0hEN1YiLCJtYWMiOiIyYTQyNDc2NWY5NWJlMjAzY2UzNzY3ZWIyZDNhYTQxYWQ2NmYzZjE0NmY4ZGUwZDI0MzcxOTA0MzI5NDBmYzk4IiwidGFnIjoiIn0%3D'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

        } catch (\Exception $e) {

            $this->send_to_slack($e->getMessage());

            return false;
        }

        return true;

    }


    public function send_to_slack($details) {
        //API Url
        $url = 'https://hooks.slack.com/services/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';

        //Initiate cURL.
        $ch = curl_init($url);

        //The JSON data.
        $payload = array(
            'text' => $details
        );

        //Encode the array into JSON.
        $jsonDataEncoded = json_encode($payload);

        //Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, 1);

        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        //Execute the request
        $result = curl_exec($ch);
    }



    public function new_projects_details(Request $request) {
        $this->footer();
        // $this->landingpageseos(18);

        $clientIP = \Request::getClientIp(true);
        $error_variable = [];

        // SAVE TO DATABSE
        try {
            $project_id=$request->property_id;

            $Project = Project::find($project_id);

            $Leads = new Leads();
            $Leads->full_name = $request->name;
            $Leads->lead_name = $Project->title_en;
            $Leads->phone = $request->phone;
            $Leads->email = $request->email;
            $Leads->page_url = $request->url;
            $Leads->ip_address = $clientIP;
            $Leads->type_id = 1;
            $Leads->save();

        } catch (\Exception $e) {
            array_push($error_variable, $e->getMessage());
        }


        // SEND EMAIL
        try{
            $mailData = [
                'title' =>'Luxe Lead Notification',
                'body' => 'Client Lead Inquiry | Name: '.$request->name.' | Email: '.$request->email.' | Phone: '.$request->phone.' | Message: '.$Project->title_en,
            ];

            // Mail::to('lead@edgerealty.ae')->send(new DemoEmail($mailData));
            // Mail::to('web@edgerealty.ae')->send(new DemoEmail($mailData));

        } catch (\Exception $e) {
            array_push($error_variable, $e->getMessage());
        }

        // SEND TO CRM
        if( !$this->send_to_crm($request) ) {
            array_push("Controller Failed to send Lead to CRM", $error_variable);
        } else {

            $this->footer();

            return view('thankyou', $this->data);

        }

        // SEND SLACK UPDATES
        if( empty($error_variable) ) {
            array_push($error_variable, "DB:pass - Email:pass - CRM:pass ");

            try {
                $this->send_to_slack($error_variable);
            } catch (\Exception $e) {
                dd($e->getMessage());
            }

            $this->footer();

            return view('thankyou', $this->data);
        } else {
            try {
                $this->send_to_slack($error_variable);
            } catch (\Exception $e) {
                dd($e->getMessage());
            }

            // return view('thankyou', $this->data);
            return Redirect::route('luxe.thankyou', $this->data);
        }
    }




    public function property_request_inquiry(Request $request) {

        $this->footer();
        // dd($this->landingpageseos(18));

        $clientIP = \Request::getClientIp(true);
        $error_variable = [];

        // SAVE TO DATABSE
        try {

            $Leads = new Leads();
            $Leads->full_name = $request->name;
            $Leads->lead_name = $request->msg;
            $Leads->phone = $request->phone;
            $Leads->email = $request->email;
            $Leads->page_url = $request->url;
            $Leads->ip_address = $clientIP;
            $Leads->type_id = 1;
            $Leads->save();

        } catch (\Exception $e) {
            array_push($error_variable, $e->getMessage());
        }


        // SEND EMAIL
        try{
            $mailData = [
                'title' =>'Property Inquiry - Search',
                'body' => 'Client Search Inquiry | Name: '.$request->name.' | Email: '.$request->email.' | Phone: '.$request->phone.' | Message: '.$request->msg,
            ];

            Mail::to('lead@edgerealty.ae')->send(new DemoEmail($mailData));
            Mail::to('web@edgerealty.ae')->send(new DemoEmail($mailData));

        } catch (\Exception $e) {
            array_push($error_variable, $e->getMessage());
        }

        // SEND TO CRM
        if( !$this->send_to_crm($request) ) {
            array_push("Controller Failed to send Lead to CRM", $error_variable);
        } else {

            $this->footer();

            return view('thankyou', $this->data);

        }

        // SEND SLACK UPDATES
        if( empty($error_variable) ) {
            array_push($error_variable, "DB:pass - Email:pass - CRM:pass ");

            try {
                $this->send_to_slack($error_variable);
            } catch (\Exception $e) {
                dd($e->getMessage());
            }

            $this->footer();

            return view('thankyou', $this->data);
        } else {
            try {
                $this->send_to_slack($error_variable);
            } catch (\Exception $e) {
                dd($e->getMessage());
            }



            return Redirect::route('luxe.thankyou', $this->data);
            // return view('thankyou', $this->data);
        }
    }
}
