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
use App\Models\Communities_image;
use App\Models\PropertyLocation;
use App\Models\Properties_image;
use App\Models\ProjectType;
use App\Models\Banner;
use App\Models\Developer;
use App\Models\Developer_image;
use App\Models\Features;
use App\Models\Project_status;
use App\Models\Life_style;
use App\Models\Facilities;
use App\Models\Project_document;
use App\Models\Project_image;
use App\Models\ProjectLocation;
use App\Models\Landingpageseos;
use App\Models\BrochureDownload;
use App\Models\ContactLeads;
  
use PDF;
use Mail;
use App\Mail\DemoEmail;
use App\Mail\CommunityInquiry;
use App\Mail\SubscriptionInquiry;
use App\Mail\ContactUs;
use App\Mail\verificationEmail;
use App\Mail\ProjectInquiry;
use App\Mail\ThankYou;
use App\Mail\BrokerRegistration;
use App\Mail\ProjectBrochureDownload;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Client\RequestException;
use GuzzleHttp\Client;
use App\Jobs\DevelopmentApi;

use Response;

class FrontEndController extends Controller
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

        $this->data['footer_communities'] = Community::select('id', 'slug_link', 'title_en')->orderBy('id', 'DESC')->take(6)->get();

        $this->data['footer_developers'] = Developer::select('id', 'slug_link', 'name_en')->orderBy('id', 'DESC')->take(6)->get();

        $this->data['footer_new_projects'] = Project::where('pro_status', '1')->select('id', 'slug_link', 'title_en')->orderBy('id', 'DESC')->take(6)->get();

        $this->data['footer_ready_projects'] = Project::with(['project_types'])->where('pro_status', '2')->select('id', 'slug_link', 'sub_type_id', 'title_en')->orderBy('id', 'DESC')->take(6)->get();

        $this->data['footer_ready_properties'] = Property::with(['images', 'property_category', 'locationss','cityss'])->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->take(6)->get();

        return $this->data;
    }


    private function landingpageseos($id) {

        // $this->data['landingpageseo'] = Landingpageseos::select('id', 'meta_title_en', 'meta_description_en', 'meta_keywords_en')->findorFail($id);
        
       $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/seo/'.$id);

        return $response;
    }


    public function project_map_individually($id, $properties) {

        $original_data = json_decode($properties, JSON_PRETTY_PRINT);

        if($properties[0]->property_locations == null)
        {
            $long = null;
            $lat = null;
        } else {
            $long = $properties[0]->property_locations->longitude;

            $lat = $properties[0]->property_locations->latitude;
        }

        $this->data['long'] = $long;

        $this->data['lat'] = $lat;

        return $this->data;
    }

    public function property_map_individually($id, $properties) {

        $original_data = json_decode($properties, JSON_PRETTY_PRINT);

        if($properties[0]->property_locations == null)
        {
            $long = null;
            $lat = null;
        } else {
            $long = $properties[0]->property_locations->longitude;

            $lat = $properties[0]->property_locations->latitude;
        }

        $this->data['long'] = $long;

        $this->data['lat'] = $lat;

        return $this->data;
    }



    public function home($lang='') {

        // $jsonSEOData = $this->landingpageseos(1);

        // $this->data['jsonSEOData'] =  $jsonSEOData->json();

        return view('welcome3');
    }


    // public function communities() {
    //     $client = new \GuzzleHttp\Client();
    //     $response = $client->get('https://jsonplaceholder.typicode.com/posts');
    //     $this->data['response'] = $response;

    //     return view('communities', $this->data);
    // }


    public function communities_details($lang='', $slug)
    {

        $jsonSEOData = $this->landingpageseos(3);
        $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/communities-details/'.$slug);
        $jsonData = $response->json();  
        
        // RETURN AS JSON
        // dd($jsonData);
        $this->data['response'] = $jsonData;

        // RETURN MAP DATA SEPARATELY
        // $this->data['long'] = $jsonData[0]['longitude'];
        // $this->data['lat'] = $jsonData[0]['latitude'];

        $this->data['long'] =  55.156860;
        $this->data['lat'] = 25.101131;

        return view('communityDetails', $this->data);
    }


    public function developments($lang='') {
        $this->data['long'] =  55.156860;
        $this->data['lat'] = 25.101131;
        return view('developmentDetails', $this->data);
    }

    public function communities($lang='') {
        
        // $response = Http::withHeaders([
        //     'authkey' => 'YOUR_SECRET_KEY'
        // ])->get('www.mis.esnaad.com/api/v1/esnaad/communities-index');
        // $jsonData = $response->json();

        // dd($jsonData);
        
        // RETURN AS JSON
        // $this->data['response'] = $jsonData;

        // if(count($jsonData) > 0){
        //     $this->data['available'] = '1';
        // }

        // dd($jsonData);


        $jsonSEOData = $this->landingpageseos(9);
        $this->data['jsonSEOData'] =  $jsonSEOData->json();
        return view('communities', $this->data);
    }

    public function community_details($lang='', $slug ) {
        
        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/communities-details/'.$slug);
        $jsonData = $response->json(); 
        // dd(($jsonData)) ;

        if($jsonData != null){
            // $this->data['images'] = $images = $jsonData['images'];

            $this->data['response'] = $jsonData[0];

            $this->data['long'] = $jsonData[0]['longitude'];
            $this->data['lat'] = $jsonData[0]['latitude'];

            if($lang == 'ar'){
                $jsonSEOData = [
                    'title_en' => $jsonData[0]['meta_title_ar'],
                    'description_en' => $jsonData[0]['meta_description_ar'],
                    'keywords_en' => $jsonData[0]['meta_keywords_ar'],
                ];
            } else {
                $jsonSEOData = [
                    'title_en' => $jsonData[0]['meta_title'],
                    'description_en' => $jsonData[0]['meta_description'],
                    'keywords_en' => $jsonData[0]['meta_keywords'],
                ];
            }

            // dd($jsonSEOData['title_en']);
            // dd($this->data);

            

            return view('communityDetails', $this->data)->with('jsonSEOData', $jsonSEOData);
        }


        return redirect()->back()->with('error', 'Project is Not Available for Viewing');
    }


    public function developments_details($lang='', $slug)
    {
        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/developments-details/'.$slug);
        $jsonData = $response->json(); 
        // dd(($jsonData)) ;

        if($jsonData != null){
            $this->data['images'] = $images = $jsonData['images'];

            $this->data['response'] = $jsonData['resources'][0];
            $this->data['pid'] = $jsonData['resources'][0]['id'];

            $this->data['long'] = $jsonData['resources'][0]['longitude'];
            $this->data['lat'] = $jsonData['resources'][0]['latitude'];

            if($lang == 'ar'){
                $jsonSEOData = [
                    'title_en' => $jsonData['resources'][0]['meta_title_ar'],
                    'description_en' => $jsonData['resources'][0]['meta_description_ar'],
                    'keywords_en' => $jsonData['resources'][0]['meta_keywords_ar'],
                ];
            } else {
                $jsonSEOData = [
                    'title_en' => $jsonData['resources'][0]['meta_title'],
                    'description_en' => $jsonData['resources'][0]['meta_description'],
                    'keywords_en' => $jsonData['resources'][0]['meta_keywords'],
                ];
            }

            // dd($this->data);

            

            return view('developmentDetails', $this->data)->with('jsonSEOData', $jsonSEOData);
        }


        return redirect()->back()->with('error', 'Project is Not Available for Viewing');
    }


    public function project_brochure_post_v1($lang='', Request $request){
        $verification_code = $request->input('MAVmKG09eI4aX8uv');
        try{
            $data = [
                'verification_code' =>  $verification_code, 
            ];

            // Mail::mailer('noreply')->to($request->email_brochure)->send(new verificationEmail($data));

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return Response::json(['message' => 'verification sent'], 200);
    }


    public function projects($lang='') {

        // DevelopmentApi::dispatch();

        // Rest of your code here, doesn't depend on the API data

        // return response()->json([
        //     'message' => 'API call initiated, data will be processed in the background.'
        // ]);




        // $response = Http::withHeaders([
        //     'authkey' => 'YOUR_SECRET_KEY'
        // ])->get('http://www.mis.esnaad.com/api/v1/esnaad/developments');

        // sleep(5);

        // $jsonData = $response->json();
        
        // $this->data['response'] = $jsonData;

        // if($jsonData){
        //     $this->data['available'] = '1';
        //     $this->data['response'] = $jsonData;
        // } else {
        //     $this->data['available'] = '0';
        // }

        $jsonSEOData = $this->landingpageseos(2);
        $this->data['jsonSEOData'] =  $jsonSEOData->json();
        return view('projects', $this->data);
    }


    public function communities_registration($lang='', Request $request)
    {
        try{
            $data = [
                'name'      =>  $request->name, 
                'email'     =>  $request->email, 
                'phone'     =>  $request->phone,
                'country_code'   =>  $request->country_code
            ];

            $data2 = ['message' => '
                Thank you for contacting ESNAAD Real Estate Development. We appreciate you reaching out and taking the time to register your interest. 
                We have received your inquiry and a member of our team will be in touch with you shortly.'];

            Mail::mailer('noreply')->to('leads@notifications.esnaad.com')->send(new CommunityInquiry($data));
            // Mail::mailer('noreply')->to($request->email)->send(new ThankYou($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return Response::json(['message' => 'verification sent'], 200);
    }

    public function ceo_msg($lang='') {
        $jsonSEOData = $this->landingpageseos(7);
        $this->data['jsonSEOData'] =  $jsonSEOData->json();
        return view('ceo_msg', $this->data);
    }

    public function about($lang='') {
        // $jsonSEOData = $this->landingpageseos(8);
        // $this->data['jsonSEOData'] =  $jsonSEOData->json();
        $this->data['long'] =  55.265547;
        $this->data['lat'] = 25.206984;
        return view('about', $this->data);
    }

    public function contact($lang='') {
        // $jsonSEOData = $this->landingpageseos(6);
        // $this->data['jsonSEOData'] =  $jsonSEOData->json();
        return view('contact');
    }


    public function invest($lang='') {
        // $jsonSEOData = $this->landingpageseos(12);
        // $this->data['jsonSEOData'] =  $jsonSEOData->json();

        return view('invest_in_dubai');
    }


    public function constructions($lang='') {
        // $jsonSEOData = $this->landingpageseos(4);
        // $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        // $response = Http::withHeaders([
        //     'authkey' => 'YOUR_SECRET_KEY'
        // ])->get('www.mis.esnaad.com/api/v1/esnaad/constructions');
        // $jsonData = $response->json();
        
        // // RETURN AS JSON
        // $this->data['response'] = $jsonData;

        // if(count($jsonData) > 0){
        //     $this->data['available'] = '1';
        // }

        return view('constructions');
        // return view('constructions');

    }


    public function news($lang='') {
        // $jsonSEOData = $this->landingpageseos(3);
        // $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        // $response = Http::withHeaders([
        //     'authkey' => 'YOUR_SECRET_KEY'
        // ])->get('www.mis.esnaad.com/api/v1/esnaad/news');
        // $jsonData = $response->json();  


        // if(count($jsonData) > 0){
        //     $this->data['available'] = '1';
        // }
        
        // RETURN AS JSON
        // $this->data['response'] = $jsonData;

        return view('news');
        // return view('news');

    }


    public function news_details($lang='', $slug) {

        // $jsonSEOData = $this->landingpageseos(3);
        // $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/news/'.$slug);

        $jsonData = $response->json();  

        // dd($jsonData);

        if(count($jsonData) > 0){
            $this->data['available'] = '1';
        }

        // dd($jsonData);
        if(count($jsonData[0]['website_news_images']) > 0){
            $this->data['available'] = '1';
        }

        
        // RETURN AS JSON
        $this->data['response'] = $jsonData[0];

        return view('news_details', $this->data);
    }


    public function constructions_details($lang='', $slug) {

        // $jsonSEOData = $this->landingpageseos(3);

        // $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/constructions/'.$slug);
        

        $jsonData = $response->json();  
        

        if(count($jsonData) > 0){
            $this->data['available'] = '1';
        }

        // dd($jsonData);
        if(count($jsonData[0]['website_construction_images']) > 0){
            $this->data['available'] = '1';
        }
        
        // RETURN AS JSON
        $this->data['response'] = $jsonData[0];

        return view('constructions_details', $this->data);
    }





    public function privacy_and_policy($lang='', ) {

        // $jsonSEOData = $this->landingpageseos(9);
        
        // $this->data['jsonSEOData'] =  $jsonSEOData->json();

        return view('privacy-and-policy');        
    }

    public function terms_and_conditions($lang='', ) {
        
        // $jsonSEOData = $this->landingpageseos(10);
        
        // $this->data['jsonSEOData'] =  $jsonSEOData->json();

        return view('terms-and-conditions');        
    }



    public function agency_registration() {
        // $jsonSEOData = $this->landingpageseos(13);
        
        // $this->data['jsonSEOData'] =  $jsonSEOData->json();

        return view('brokers');
    }







    public function agency_registration_post($lang='', Request $request) {
        /**
         * EMAIL SEND OFF
         * ===================================
         * A VERY COMPLEX PIECE OF CODE THAT
         * REQUIRES PRECISION!
         * ===================================
         * 
         * 
         * STAGE I
         * ---------
         * RETRIEVE THE REQUESTS INTO AN ARRAY TO BE TRANSLATED
         * TO THE EMAIL PDF CONTAINING BROKER DATA
         * 
         * 
         * STAGE II
         * ---------
         * CREATE AN INSTANCE OF A PDF OBJECT USING THE PDF 
         * GENERATOR BELOW. THEN ADD THEM INTO A MAILER FUNCTION
         * 
         * 
         * STAGE III
         * ---------
         * AVOIDED USING INTERNAL MAIL MODEL FILE DUE TO DEBUGGING.
         * CREATED TWO SEGMENTS TO SEND OFF THE EMAIL WHERE THE SECOND
         * SEGMENT WILL LOOP UPON THE FILES SUBMITTED BY THE REGISTRATION
         * REQUEST
         * 
         * 
         * STAGE IV
         * --------
         * ERROR HANDLING USING TRY-CATCH
         * 
         */


        $RECAPTCHA_SECRET_KEY = "6Lc-16MpAAAAAOQL7wMUQmaBxmAZPhwvIujFDTqz";

        $json_response = function($data = []) {
            header('Content-Type: application/json; charset=utf-8');
            exit(json_encode($data));
        };

        // call recaptcha site verify
        $response = file_get_contents(
            'https://www.google.com/recaptcha/api/siteverify?'.http_build_query([
                'secret'   => $RECAPTCHA_SECRET_KEY,
                'response' => $request['g-recaptcha-response'],
                'remoteip' => $_SERVER['REMOTE_ADDR'],
            ])
        );
        $response = json_decode($response, true);

        // handle status and respond with json
        // if (intval($response["success"]) !== 1) {
        //     $json_response(['errors' => ['recaptcha' => 'Captcha failed.']]);
        // } else {
            /** STAGE I */
            $data = [
                'company_name'      =>  $request->company_name, 
                'company_type'      =>  $request->company_type, 
                'trade_license'      =>  $request->trade_license, 
                'trade_license_expiry'      =>  $request->trade_license_expiry, 
                'rera_certificate'      =>  $request->rera_certificate, 
                'rera_certificate_expiry'      =>  $request->rera_certificate_expiry, 
                'company_po_box'      =>  $request->company_po_box, 
                'company_address'      =>  $request->company_address, 
                'company_email'      =>  $request->company_email, 
                'company_po_box'      =>  $request->company_po_box, 
                'company_country_code'      =>  $request->company_country_code, 
                'company_landline'      =>  $request->company_landline, 
                'company_website'      =>  $request->company_website, 

                'authorized_p_name'      =>  $request->authorized_p_name, 
                'authorized_p_country'      =>  $request->authorized_p_country, 
                'authorized_p_passport'      =>  $request->authorized_p_passport, 
                'authorized_p_position'      =>  $request->authorized_p_position, 
                'authorized_p_email'      =>  $request->authorized_p_email, 
                'authorized_p_country_code'      =>  $request->authorized_p_country_code, 
                'authorized_p_contact'      =>  $request->authorized_p_contact, 
                'authorized_p_address'      =>  $request->authorized_p_address, 
                'authorized_p_city'      =>  $request->authorized_p_city, 

                'bank_name'      =>  $request->bank_name, 
                'bank_country'      =>  $request->bank_country, 
                'bank_city'      =>  $request->bank_city, 
                'account_no'      =>  $request->account_no, 
                'iban'      =>  $request->iban, 
                'swift_code'      =>  $request->swift_code, 
                'account_title'      =>  $request->account_title, 
            ];

            $data2 = ['message' => '
                Thank you for your interest in becoming a broker with ESNAAD Real Estate Development. We appreciate you choosing to submit your registration through our website.
                We have received your application and are currently reviewing it. You will receive a follow-up email notifying you of the next steps in the registration process.
            '];

            // Mail::mailer('noreply')->to($request->company_email)->send(new ThankYou($data2));
            
            try{
                /**STAGE II */
                $pdf = PDF::loadView('emails.pdf.brokerReg', $data);
                // $pdf->getDomPDF()->getCanvas()->get_cpdf()->setEncryption("esnaad_12345", "admin_password");
                $pdf->getDomPDF()->getCanvas()->get_cpdf();

                /**STAGE III */
                Mail::mailer('noreply')->send('emails.brokerReg', $data, function($message)use($data, $pdf, $request) {
                        $first_segment = $message->to("registrations@broker.esnaad.com")
                            ->subject("ESNAAD Notification - Broker Registration")
                            ->attachData($pdf->output(), "Broker-registration-details.pdf");
                        
                        foreach($request->files as $file) {
                            $first_segment->attach($file->getRealPath(), [
                                'as' => $file->getClientOriginalName(),
                                'mime' => $file->getMimeType(),
                            ]);
                        }
                        
                    }
                );

            } catch (\Exception $e) {   
                // dd($e->getMessage());
                return Response::json(['error' => $e->getMessage()], 500);

            }
            // return Response::json(['success' => 'success'], 200);
            return redirect()->to('https://esnaad.com/en/thankyou');
        // }
    }



    public function subscription_form($lang='', Request $request) {

        $RECAPTCHA_SECRET_KEY = "6Lc-16MpAAAAAOQL7wMUQmaBxmAZPhwvIujFDTqz";

        $json_response = function($data = []) {
            header('Content-Type: application/json; charset=utf-8');
            exit(json_encode($data));
        };

         // call recaptcha site verify
        $response = file_get_contents(
            'https://www.google.com/recaptcha/api/siteverify?'.http_build_query([
                'secret'   => $RECAPTCHA_SECRET_KEY,
                'response' => $request['g-recaptcha-response'],
                'remoteip' => $_SERVER['REMOTE_ADDR'],
            ])
        );
        $response = json_decode($response, true);


        // handle status and respond with json
        if (intval($response["success"]) !== 1) {
            $json_response(['errors' => ['recaptcha' => 'Captcha failed.']]);
        } else {
            try{
                $data = [
                    'name'      =>  $request->name, 
                    'email'     =>  $request->email,
                    'ip'     =>  $request->ip_address
                ];
                $data2 = ['message' => "
                    Thanks for subscribing to our news letter! We're excited to welcome you to our community and share valuable content, updates, and special offers with you."
                ];
                // Mail::mailer('noreply')->to($request->email)->send(new ThankYou($data2));

                // Mail::to('lead@edgerealty.ae')->send(new DemoEmail($mailData));
                // Mail::mailer('noreply')->to('customercare@esnaad.onmicrosoft.com')->send(new SubscriptionInquiry($data));
                Mail::mailer('noreply')->to('leads@notifications.esnaad.com')->send(new SubscriptionInquiry($data));
                // Mail::mailer('noreply')->to('webmaster@esnaad.com')->send(new SubscriptionInquiry($data));

                return redirect()->to('https://esnaad.com/en/subscription/thanks');

            } catch (\Exception $e) {
                dd($e->getMessage());
            }
            $json_response(['success' => true]);
        }
        
        

        

        // try{
        //     // $formData = [
        //     //     'headers' => [
        //     //         'Content-Type' => 'application/json',
        //     //         'X-CSRF-TOKEN' => csrf_token(),
        //     //         'authkey' => 'YOUR_SECRET_KEY',
        //     //     ],
        //     //     'body' => json_encode([
        //     //         'name' => $request->name,
        //     //         'email' => $request->email,
        //     //         // Add other form fields as needed
        //     //     ]),
        //     // ];
            
        //     // // API endpoint on another domain
        //     // $apiEndpoint = 'https://mis.esnaad.com/api/v1/esnaad/email-subscription';

        //     // // Send a POST request to the API
        //     // $response = Http::post($apiEndpoint, $formData);

        //     // // Check the response
        //     // if ($response->successful()) {
        //     //     // The request was successful
        //     //     return response()->json(['message' => 'Form submitted successfully']);
        //     // } else {
        //     //     // Handle errors
        //     //     dd($response->body());
        //     //     return response()->json(['error' => 'Error submitting form'], $response->status());
        //     // }

            

        //     $data = [

        //         'name' => $request->name,
        //         'email' => $request->email,
        //     ];


        //     $curl = curl_init();

        //     $url = 'https://mis.esnaad.com/api/email-subscription-v3';

        //     curl_setopt_array($curl, array(
        //         CURLOPT_URL => $url,
        //         CURLOPT_RETURNTRANSFER => true,
        //         CURLOPT_ENCODING => '',
        //         CURLOPT_MAXREDIRS => 10,
        //         CURLOPT_TIMEOUT => 0,
        //         CURLOPT_FOLLOWLOCATION => true,
        //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //         CURLOPT_CUSTOMREQUEST => 'POST',
        //         CURLOPT_POSTFIELDS => $data,
        //         CURLOPT_HTTPHEADER => array(
        //             'Cookie: XSRF-TOKEN=eyJpdiI6ImdjVUpXbDhCbk9BSGFWOTZsTTZSL0E9PSIsInZhbHVlIjoiUUJrWTlWOVVnb00zWDhzVk1kQTBTWWNYcHlvZXA0OXpEMWVVREUyTlZXR3Z2dkNMSlZZb1JMK3ppNjROazMzYlczalc0NHVBKzZ6WWhPYTloT3d4UmI0U0ptZUR6S0JsbmRrdlZzSThQSVNOUi90WGw0WkRhYXpTUFVIQXZGS0wiLCJtYWMiOiIxMTA2OWI1ZmZjMjZiY2I5ZGRjZWQyNmIwNGY1ZTRmMjgwNTk5YWFmODE1YzU4ODg3MWNmN2ViZTkzNjg4ODEzIiwidGFnIjoiIn0%3D'
        //         ),
        //     ));

        //     $response = curl_exec($curl);

        //     if ($response === false) {
        //         $error = curl_error($curl);
        //         $errno = curl_errno($curl);

        //         echo "Error: " . $error . " (Error code: " . $errno . ")";
        //     } else {
        //         // Process successful response
        //         echo $response;
        //     }

        //     curl_close($curl);

        // } catch (\Exception $e) {
        //     dd($e->getMessage());
        // }
    }




    public function contact_form_post($lang='', Request $request) {
        
        $tel = $request->country_code + $request->phone;

        $lead_db = new ContactLeads();
        $lead_db->name = $request->name;
        $lead_db->email = $request->email;
        $lead_db->contact = $tel;
        $lead_db->country_code = $request->country_code;
        $lead_db->ip_address = $request->getClientIp();
        $lead_db->msg = $request->msg;
        $lead_db->save();

        try{
            
            $data = [
                'name'      =>  $request->name, 
                'email'     =>  $request->email,
                'ip'     =>  $request->getClientIp(),
                'msg'     =>  $request->msg,
                'phone'     =>  $request->phone,
                'country_code'     =>  $request->country_code,
            ];

            $data2 = ['message' => 'Thank you for contacting ESNAAD Real Estate Development. We appreciate you reaching out and taking the time to share your message. 
            We have received your inquiry and a member of our team will be in touch with you shortly.'];


            Mail::mailer('noreply')->to('leads@notifications.esnaad.com')->send(new ContactUs($data));
            // Mail::mailer('noreply')->to($request->email)->send(new ThankYou($data2));
        } catch (\Exception $e) {
            
        }

        // return redirect()->back()->with('success', 'Your inquiry has been submitted!');  
        // return Response::json(['success' => 'verification sent'], 200);  
        return redirect()->to('https://esnaad.com/en/contact-us/thanks');

        // try{           

        //     $data = [

        //         'name' => $request->name,
        //         'email' => $request->email,
        //     ];


        //     $curl = curl_init();

        //     $url = 'https://mis.esnaad.com/api/email-subscription-v3';

        //     curl_setopt_array($curl, array(
        //         CURLOPT_URL => $url,    
        //         CURLOPT_RETURNTRANSFER => true,
        //         CURLOPT_ENCODING => '',
        //         CURLOPT_MAXREDIRS => 10,
        //         CURLOPT_TIMEOUT => 0,
        //         CURLOPT_FOLLOWLOCATION => true,
        //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //         CURLOPT_CUSTOMREQUEST => 'POST',
        //         CURLOPT_POSTFIELDS => $data,
        //         CURLOPT_HTTPHEADER => array(
        //             'Cookie: XSRF-TOKEN=eyJpdiI6ImdjVUpXbDhCbk9BSGFWOTZsTTZSL0E9PSIsInZhbHVlIjoiUUJrWTlWOVVnb00zWDhzVk1kQTBTWWNYcHlvZXA0OXpEMWVVREUyTlZXR3Z2dkNMSlZZb1JMK3ppNjROazMzYlczalc0NHVBKzZ6WWhPYTloT3d4UmI0U0ptZUR6S0JsbmRrdlZzSThQSVNOUi90WGw0WkRhYXpTUFVIQXZGS0wiLCJtYWMiOiIxMTA2OWI1ZmZjMjZiY2I5ZGRjZWQyNmIwNGY1ZTRmMjgwNTk5YWFmODE1YzU4ODg3MWNmN2ViZTkzNjg4ODEzIiwidGFnIjoiIn0%3D'
        //         ),
        //     ));

        //     $response = curl_exec($curl);

        //     if ($response === false) {
        //         $error = curl_error($curl);
        //         $errno = curl_errno($curl);

        //         echo "Error: " . $error . " (Error code: " . $errno . ")";
        //     } else {
        //         // Process successful response
        //         echo $response;
        //     }

        //     curl_close($curl);

        // } catch (\Exception $e) {
        //     dd($e->getMessage());
        // }
        
    }



    public function project_detail_inquiry($lang='', Request $request) {
        $tel = $request->country_code + $request->phone;        

        try{
            
            $data = [
                'name'      =>  $request->name, 
                'email'     =>  $request->email,
                'ip'     =>  $request->getClientIp(),
                'enquiry_type'     =>  $request->project,
                'project'     =>  $request->project,
                'phone'     =>  $request->phone,
                'tel'     =>  $tel,
                'country_code'     =>  $request->country_code,
            ];

            $data2 = ['message' => 'Thank you for contacting ESNAAD Real Estate Development. We appreciate you reaching out and taking the time to register your interest. 
            We have received your inquiry and a member of our team will be in touch with you shortly.'];

            Mail::mailer('noreply')->to('leads@notifications.esnaad.com')->send(new ProjectInquiry($data));
            // Mail::mailer('noreply')->to($request->email)->send(new ThankYou($data2));
            // Mail::mailer('noreply')->to('webmaster@esnaad.com')->send(new ProjectInquiry($data));

        } catch (\Exception $e) {
            dd($e->getMessage());
        }        

        return redirect()->back()->with('success', 'Your inquiry has been submitted!');   
    }



    
    public function project_detail_brochure_download($lang='', Request $request) {
        
        $tel = $request->country_code_brochure + $request->phone_brochure;

        try{
            
            $data = [
                'name'      =>  $request->name_brochure, 
                'email'     =>  $request->email_brochure,
                'ip'     =>  $request->getClientIp(),
                'project'     =>  $request->project_brochure,
                'url'     =>  $request->url_brochure,
                'phone'     =>  $request->phone_brochure,
                'tel'     =>  $tel,
                'country_code'     =>  $request->country_code_brochure,
            ];

            $data2 = ['message' => 'Thank you for contacting ESNAAD Real Estate Development. We appreciate you reaching out and taking the time to download our brochure. 
            We have received your inquiry and a member of our team will be in touch with you shortly.'];

            $brochure_db = new BrochureDownload();
            $brochure_db->name = $request->name_brochure;
            $brochure_db->email = $request->email_brochure;
            $brochure_db->contact = $request->phone_brochure;
            $brochure_db->country_code = $request->country_code_brochure;
            $brochure_db->ip_address = $request->getClientIp();
            $brochure_db->project = $request->project_brochure;
            $brochure_db->url = $request->url_brochure;
            $brochure_db->save();


            // Mail::to('lead@edgerealty.ae')->send(new DemoEmail($mailData));
            // Mail::mailer('noreply')->to('leads@notifications.esnaad.com')->send(new SubscriptionInquiry($data));
            // Mail::mailer('noreply')->to('customercare@esnaad.onmicrosoft.com')->send(new ProjectBrochureDownload($data));
            // Mail::mailer('noreply')->to($request->email_brochure)->send(new ThankYou($data2));

        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Response::json(['message' => 'verification sent'], 200);   
    }



    public function careers($lang='') {
        $jsonSEOData = $this->landingpageseos(10);
        
        $this->data['jsonSEOData'] =  $jsonSEOData->json();

        return view('careers', $this->data);
    }




    public function career_registration_post_v1($lang='', Request $request) {
        $verification_code = $request->input('4srMa62q63awVETd4mo9');
        try{
            $data = [
                'verification_code' =>  $verification_code, 
            ];

            // Mail::mailer('noreply')->to($request->applicant_email)->send(new verificationEmail($data));

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return Response::json(['message' => 'verification sent'], 200);
    }


    public function career_registration_post_v2($lang='', Request $request){
        $data = [
            'name'      =>  $request->applicant_name, 
            'email'      =>  $request->applicant_email, 
            'country'      =>  $request->applicant_country, 
            'contact'      =>  $request->applicant_phone, 
            'languages'      =>  $request->applicant_languages, 
            'job'      =>  $request->applicant_job, 
        ];

        $data2 = ['message' => '
            Thank you for your interest in joining ESNAAD Real Estate Development! We appreciate you taking the time to submit your application.
            We have received your application and resume, and it is currently under review by our recruiting team.'];

        // Mail::mailer('noreply')->to($request->applicant_email)->send(new ThankYou($data));

        try{

            /**STAGE III */
            Mail::mailer('noreply')->send('emails.careerApplication', $data, function($message)use($data, $request) {
                    $first_segment = $message->to("jobs@hiring.esnaad.com")
                        ->subject("Notification - Career Application");
                    
                    foreach($request->files as $file) {
                        $first_segment->attach($file->getRealPath(), [
                            'as' => $file->getClientOriginalName(),
                            'mime' => $file->getMimeType(),
                        ]);
                    }
                }
            );
        } catch (\Exception $e) {   
            return Response::json(['error' => $e->getMessage()], 500);
        }
        return Response::json(['success' => 'success'], 200);
    }



    public function careers_thanks($lang = '') {
        $this->data['source'] = $source = "careers";
        return view('thankyou2', $this->data);
    }   

    public function project_details_thanks($lang = '') {
        $this->data['source'] = $source = "project_details";
        return view('thankyou2', $this->data);
    }

    public function project_brochure_thanks($lang = '') {
        $this->data['source'] = $source = "project_brochure";
        return view('thankyou2', $this->data);
    }

    public function communities_thanks($lang = '') {
        $this->data['source'] = $source = "communities";
        return view('thankyou2', $this->data);
    }

    public function contact_us_thanks($lang = '') {
        $this->data['source'] = $source = "contact_us";
        return view('thankyou2', $this->data);
    }

    public function broker_registration_thanks($lang = '') {
        $this->data['source'] = $source = "broker_registration";
        return view('thankyou2', $this->data);
    }

    public function subscription_thanks($lang = '') {
        $this->data['source'] = $source = "subscription";
        return view('thankyou', $this->data);
    }

    public function brochure_thanks($lang = '') {
        $this->data['source'] = $source = "brochure";
        return view('thankyou2', $this->data);
    }


    public function media_gallery($lang = ''){
        
        $jsonSEOData = $this->landingpageseos(5);

        $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/gallery');
        $jsonData = $response->json();  

        if($jsonData){
            $date = $jsonData[0]['created_at'];

        }
        // dd($date->format('dd/mm/yy'));
        // dd($jsonData[0]['created_at']);


        if(count($jsonData) > 0){
            $this->data['available'] = '1';
        }
        
        // RETURN AS JSON
        $this->data['response'] = $jsonData;


        return view('gallery', $this->data);
    }

    public function media_blogs($lang = ''){
        
        $jsonSEOData = $this->landingpageseos(11);

        $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/blogs');

        $jsonData = $response->json();  
    


        if(count($jsonData) > 0){
            $this->data['available'] = '1';
            $date = $jsonData[0]['created_at'];
        }
        
        // RETURN AS JSON
        $this->data['response'] = $jsonData;

        return view('blogs', $this->data);
    }

    public function media_gallery_details($lang='', $slug) {

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/gallery/'.$slug);

        $jsonData = $response->json();  

        // dd($jsonData);

        if(count($jsonData) > 0){
            $this->data['available'] = '1';
        }

        // dd($jsonData);
        if(count($jsonData[0]['website_gallery_medias']) > 0){
            $this->data['available'] = '1';
        }

        
        // RETURN AS JSON
        $this->data['response'] = $jsonData[0];
        // dd($this->data);
        return view('gallery_details', $this->data);
    }


    public function media_blogs_details($lang='', $slug) {

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/blogs/'.$slug);

        $jsonData = $response->json();  

        // dd($jsonData);

        if(count($jsonData) > 0){
            $this->data['available'] = '1';
        }
        
        // RETURN AS JSON
        $this->data['response'] = $jsonData[0];

        return view('blogs_details', $this->data);
    }
}
