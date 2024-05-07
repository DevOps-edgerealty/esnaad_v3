<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        
        <?php
            $route_name = request()->route()->getName();
            $currentUrl = request()->url();
            $segments = explode('/', $currentUrl);
            $nameBeforeSlug = $segments[count($segments) - 2];
        ?>
        
        {{-- @if($nameBeforeSlug == 'developments')
            <title>{{$jsonSEOData['title_en']}}</title>
            <meta name="description" content="{{$jsonSEOData['description_en']}}" />
            <meta name="keywords" content="{{$jsonSEOData['keywords_en']}}" />
        @else
            @if(isset($jsonSEOData))
                <title>{{$jsonSEOData['title_en']}}</title>
                <meta name="description" content="{{$jsonSEOData['description_en']}}" />
                <meta name="keywords" content="{{$jsonSEOData['keywords_en']}}" />
            @endif
        @endif --}}

        @yield('title_segment')
        
        @if($route_name == "esnaad.home")
            <title>ESNAAD Real Estate Developments	</title>
            <meta name="description" content="Your premium real estate developer in Dubai. ESNAAD offers a diverse portfolio of prestige residential, commercial, hospitality, and retail spaces. Discover more." />

        @elseif($route_name == "esnaad.about")
            <title>ESNAAD Developments	</title>
            <meta name="description" content="With over 2,000 global customers, the majority hailing from the GCC region and Europe with Arab origins, ESNAAD strategically focuses its expansion plans on Dubai for the next five years." />

        @elseif($route_name == "esnaad.ceo-msg")
            <title>ESNAAD Developments Founder	</title>
            <meta name="description" content="With over 2,000 global customers, the majority hailing from the GCC region and Europe with Arab origins, ESNAAD strategically focuses its expansion plans on Dubai for the next five years." />

        @elseif($route_name == "esnaad.about")
            <title>ESNAAD Developments	</title>
            <meta name="description" content="With over 2,000 global customers, the majority hailing from the GCC region and Europe with Arab origins, ESNAAD strategically focuses its expansion plans on Dubai for the next five years." />

        @elseif($route_name == "esnaad.communities.comingsoon")
            <title>ESNAAD Developments Communities		</title>
            <meta name="description" content="With over 2,000 global customers, the majority hailing from the GCC region and Europe with Arab origins, ESNAAD strategically focuses its expansion plans on Dubai for the next five years." />

        @elseif($route_name == "esnaad.projects")
            <title>ESNAAD Projects</title>
            <meta name="description" content="Discover ESNAAD's transformative real estate projects, including the groundbreaking. Experience innovative design and find your dream property.	" />

        @elseif($route_name == "esnaad.media_gallery")
            <title>A Visual Journey: Experience the Beauty of ESNAAD Developmen	</title>
            <meta name="description" content="Immerse yourself in the captivating world of ESNAAD's developments through our gallery.	" />

        @elseif($route_name == "esnaad.media_blogs")
            <title>Media Center Blogs | ESNAAD Developer</title>
            <meta name="description" content="Gain valuable insights and explore the latest trends in the UAE real estate market through ESNAAD's informative blog.	" />

        @elseif($route_name == "esnaad.invest_in_dubai")
            <title>Invest in Dubai Real Estate</title>
            <meta name="description" content="With over 2,000 global customers, the majority hailing from the GCC region and Europe with Arab origins, ESNAAD strategically focuses its expansion plans on Dubai for the next five years." />

        @elseif($route_name == "esnaad.constructions")
            <title>ESNAAD Projects Construction Updates	</title>
            <meta name="description" content="Explore exceptional investment opportunities in Dubai with ESNAAD Real Estate Development. Discover a world of innovative projects and invest in the future of the UAE.	" />

        @elseif($route_name == "esnaad.news")
            <title>Media ESNAAD Developers	</title>
            <meta name="description" content="Stay informed about the latest developments and announcements from ESNAAD Real Estate Development	" />

        @elseif($route_name == "website.terms-and-conditions")
            <title>Terms & Conditions | ESNAAD Developments	</title>
            <meta name="description" content="With over 2,000 global customers, the majority hailing from the GCC region and Europe with Arab origins, ESNAAD strategically focuses its expansion plans on Dubai for the next five years." />
        
        @elseif($route_name == "website.privacy-and-policy")
            <title>Privacy & Policy | ESNAAD Developments	</title>
            <meta name="description" content="With over 2,000 global customers, the majority hailing from the GCC region and Europe with Arab origins, ESNAAD strategically focuses its expansion plans on Dubai for the next five years." />
        
        @elseif($route_name == "agency.registration")
            <title>Join the ESNAAD Journey: Become a Registered Broker</title>
            <meta name="description" content="Partner with ESNAAD Real Estate Development by joining our broker program. Access exclusive opportunities, training, and support, shaping the future of UAE communities.	" />
        
        @elseif($route_name == "careers")
            <title>ESNAAD Careers</title>
            <meta name="description" content="Be part of shaping the future of UAE communities! Explore rewarding career opportunities at ESNAAD Real Estate Development	" />
        
        @elseif($route_name == "esnaad.contact")
            <title>Sales Center | ESNAAD Developments	</title>
            <meta name="description" content="Immerse yourself in the captivating world of ESNAAD's developments through our gallery." />
        
        @elseif($route_name == "esnaad.developments.slug")
            <title>The Spark by ESNAAD Developments</title>
            <meta name="description" content="Be part of shaping the future of UAE communities! Explore rewarding career opportunities at ESNAAD Real Estate Development	" />

        @elseif($route_name == "esnaad.gallery.detail")
            <title>The Spark by ESNAAD - Gallery</title>
            <meta name="description" content="Partner with ESNAAD Real Estate Development by joining our broker program. Access exclusive opportunities, training, and support, shaping the future of UAE communities.	" />
        
        @elseif($route_name == "esnaad.news.detail")
            <title>The Spark by ESNAAD - Press Release</title>
            <meta name="description" content="ESNAAD Real Estate Development L.L.C, known as 'ESNAAD', proudly announced the launch of its ground-breaking project, 'The Spark by ESNAAD'" />
        @elseif($route_name == "subscription-thanks")
            <title>Thank You - You're a Member | ESNAAD</title>
            <meta name="description" content="Thank You for registering as a member at ESNAAD Real Estate Developments." />
        @endif


        <script src="https://www.google.com/recaptcha/api.js?render=explicit" async defer></script>
        

        <!-- Facebook -->
        <meta property="og:url" content="URL to your website">
        <meta property="og:type" content="website">
        <meta property="fb:app_id" content="Your Facebook App ID">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@YourTwitterHandle">
        <meta name="twitter:creator" content="@YourTwitterHandle">

        <!-- Instagram -->
        <meta property="og:instagram" content="YourInstagramUsername">

        <!-- LinkedIn -->
        <meta property="og:linkedin" content="YourLinkedInProfileURL">

        <!-- Pinterest -->
        <meta property="og:pinterest" content="YourPinterestUsername">

        <!-- YouTube -->
        <meta property="og:youtube" content="YourYouTubeChannelURL">


        {{-- Canonical Links --}}
        @php
            // Get the current URL without the query string
            $baseUrl = url()->current();
            header("Cache-Control: max-age=2592000");

            // Check if the current page is the first page
            if (!request()->has('page') || request()->get('page') == 1) {

                $current_url_2 = $_SERVER['REQUEST_URI'];

                if (strpos($current_url_2, 'en') !== false) {
                    $langhref = 'en';
                    $rel_type = 'canonical';
                } 
                elseif (strpos($current_url_2, 'ru') !== false) {
                    $langhref = 'ru';
                    $rel_type = 'canonical';
                } 
                elseif (strpos($current_url_2, 'ar') !== false) {
                    $langhref = 'ar';
                    $rel_type = 'canonical';
                } 
                else {
                    $langhref = 'x-default';
                    $rel_type = 'canonical';
                }
                $canonicalUrl = $baseUrl; // Use the base URL for the first page
            } 
            else {
                $current_url_2 = $_SERVER['REQUEST_URI'];

                if (strpos($current_url_2, 'en') !== false) {
                    $langhref = 'en';
                    $rel_type = 'canonical';
                } 
                elseif (strpos($current_url_2, 'ar') !== false) {
                    $langhref = 'ar';
                    $rel_type = 'canonical';
                } 
                else {
                    $langhref = 'x-default';
                    $rel_type = 'canonical';
                }
                $canonicalUrl = $baseUrl . '?page=' . request()->get('page'); // Append the page query parameter
            }                
        @endphp

        <link rel="{{$rel_type}}" href="<?php echo $canonicalUrl;?>" hreflang="{{$langhref}}">

        <script type="application/ld+json" >
			[
                {
                    "@context":"https://schema.org",
                    "@type":"Organization",
                    "@id":"https://esnaad.com",
                    "name":"ESNAAD Real Estate Development",
                    "url":"https://esnaad.com",
                    "sameAs":[],
                    "logo":{
                        "@type":"ImageObject",
                        "url":"https://www.esnaad.com/public/logo-dark-2.png",
                        "width":"184",
                        "height":"35"
                    }
                }
            ]
        </script>



        <script type="application/ld+json">{
			"@context": "http://schema.org",
			"@type": "SiteNavigationElement",
			"name": [
				"Home",
				"Developments",
				"Why Invest In Dubai?",
				"Construction Updates",
				"Communities",
				"Press Release",
				"Careers",  
				"About ESNAAD",
				"CEO's Message",
				"Contact Us",
			],
			"url": [
				"https://esnaad.com",
				"https://www.esnaad.com/en/developments",
				"https://www.esnaad.com/en/invest-in-dubai",
				"https://www.esnaad.com/en/constructions",
				"https://www.esnaad.com/en/communities,
				"https://www.esnaad.com/en/press-release",
				"https://www.esnaad.com/en/careers",
				"https://www.esnaad.com/en/about-us",
				"https://www.esnaad.com/en/ceo-msg",
				"https://www.esnaad.com/en/contact",
			],
		}</script>


        <style>

            html {
            
            }
            html,body{
                @apply text-gray-800;
                background-color: #000 !important;
                max-width: 100%;
                overflow-x: hidden;
            }

            @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            
            @font-face {
                font-family: 'OptimaNew';
                font-style: normal;
                font-weight: lighter;
                src: local('OptimaNew'), url('front/fonts/Optima/OptimaLTPro-Roman.otf') format('otf');
            }

            @font-face {
                font-family: 'Optima';
                font-style: lighter;
                font-weight: normal;
                src: local('Optima'), url('front/fonts/OPTIMA.woff') format('woff');
            }

            @font-face {
                font-family: 'Optima Italic';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Italic'), url('front/fonts/Optima_Italic.woff') format('woff');
            }


            @font-face {
                font-family: 'Optima Medium';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Medium'), url('front/fonts/Optima Medium.woff') format('woff');
            }


            @font-face {
                font-family: 'Optima Bold';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Bold'), url('front/fonts/OPTIMA_B.woff') format('woff');
            }
            
            @font-face {
                font-family: 'Optima LT W02 Roman';
                font-style: normal;
                font-weight: normal;
                src: url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.eot");
                src: url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.eot?#iefix")format("embedded-opentype"),
                url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.woff2")format("woff2"),
                url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.woff")format("woff"),
                url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.ttf")format("truetype"),
                url("https://db.onlinewebfonts.com/t/c78d5ac2e0567f3d7abc24629e42741f.svg#Optima LT W02 Roman")format("svg");
            }

            @media screen and (max-width : 1920px){
                .large_screens{
                    display:block;
                }
                .microsoft_screens{
                    display:none;
                }
            }
            @media screen and (max-width : 1368){
                .large_screens{
                    display:none;
                }
                .microsoft_screens{
                    display:block;
                }
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('luxe_asset_css')

        <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-MDTQRDXP');</script>
        <!-- End Google Tag Manager -->


        <!-- Hotjar Tracking Code for https://www.esnaad.com -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:4945856,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>


    </head>


    <body class="font-body bg-black text-white" style="background-color: #1C1C1C !important; color: #ccc !important; ">

        <?php
            $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $uri_segments = explode('/', $uri_path);
            $seg1 = $uri_segments[1];
            if($seg1 == 'en' || $seg1 == 'ar'){
                $langSeg = $uri_segments[1];
            }else{
                $langSeg = 'en';
            }
        ?>
        <?php
            $finalUrl = '/ar/home';
            $finalUrlen = '/en/home';
            $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            if($uri_path == '/' || $uri_path == '/home' ){
                $finalUrl = '/ar/home';
                $finalUrlen = '/en/home';
            } else {
                $uri_segments = explode('/', $uri_path);
                $seg1 = $uri_segments[1];
                if($seg1) {
                    if($seg1 == 'en'){
                        $replacements1 = array(1 => "en");
                        $replacements2 = array(1 => "ar");
                        $basket1 = array_replace($uri_segments, $replacements1);
                        $basket2 = array_replace($uri_segments, $replacements2);
                        $finalUrlen = implode("/",$basket1);
                        $finalUrl = implode("/",$basket2);

                    } elseif($seg1 == 'ar'){
                        $replacements1 = array(1 => "en");
                        $replacements2 = array(1 => "ar");
                        $basket1 = array_replace($uri_segments, $replacements1);
                        $basket2 = array_replace($uri_segments, $replacements2);
                        $finalUrlen = implode("/",$basket1);
                        $finalUrl = implode("/",$basket2);

                    }elseif($seg1 == 'ru'){
                        $replacements1 = array(1 => "en");
                        $replacements2 = array(1 => "ar");
                        $basket1 = array_replace($uri_segments, $replacements1);
                        $basket2 = array_replace($uri_segments, $replacements2);
                        $finalUrlen = implode("/",$basket1);
                        $finalUrl = implode("/",$basket2);
                    }
                }else{
                    $replacements2 = array(1 => "ar");
                    $basket = array_replace($uri_segments, $replacements2);
                    $finalUrl = implode("/",$basket);
                }
            }
        ?>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDTQRDXP"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div class="min-h-screen ">

            @notmobile       
                <nav x-data="{ open: false }" class="bg-white p-0 m-0 z-50 shadow "  id="sample" style="position: fixed; width: 100vw !important; background-color: #1C1C1C !important; color: #ccc !important;">
                    @include('layout.navigation')
                </nav>
            @endnotmobile

            @mobile
                @include('layout.mobileNavigation2')
            @endmobile

            
            <div class="relative">
                @yield('content')
            </div>


            @notmobile
            <section class="" style="position: fixed; z-index: -10;  right: 15px; margin-bottom: 90px; bottom: 0; color: white; text-align: right; z-index: 5; background-c0lor: #000 !important;">
                <style>
                    .bounce2 {
                        display: inline-block;
                        position: relative;
                        -moz-animation: bounce 1.5s infinite linear;
                        -o-animation: bounce 1.5s infinite linear;
                        -webkit-animation: bounce 1.5s infinite linear;
                        animation: bounce 1.5s infinite linear;
                        }
                        @-webkit-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-moz-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-o-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-ms-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                </style>

                <div class="h-fit min-h-full flex ml-2 justify-end bounce2">
                    <a href="https://wa.link/pzf7z4"  class="col-6 py-2 text-white mx-1" data-mdb-toggle="tooltip" title="Chat on WhatsApp">
                        <img src="{{ asset('home/wa.png') }}" class="rounded-circle p-2 border border-50 bg-black bg-opacity-50" style="border-radius: 50%; width: 60px;float: right !important;" alt="WhatsApp" />
                    </a>		
                </div>
            </section>

            <section class="" style="position: fixed; z-index: -10;  right: 15px; margin-bottom: 160px; bottom: 0; color: white; text-align: right; z-index: 5; background-c0lor: #000 !important;">
                <style>
                    .bounce2 {
                        display: inline-block;
                        position: relative;
                        -moz-animation: bounce 1.5s infinite linear;
                        -o-animation: bounce 1.5s infinite linear;
                        -webkit-animation: bounce 1.5s infinite linear;
                        animation: bounce 1.5s infinite linear;
                        }
                        @-webkit-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-moz-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-o-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-ms-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                </style>
                <div class="h-fit min-h-full flex ml-2 justify-end bounce2">
                    <a href="tel:+971-4-287-9506"  class="col-6 py-2 text-white mx-1" data-mdb-toggle="tooltip" title="Call Us on +971 4 287 9506">
                        <img src="{{ asset('/developments/phone.png') }}" class="rounded-circle p-3 border rounded-50 bg-black bg-opacity-50" style="border-radius: 50%; width: 60px;float: right !important;" alt="Call" />
                    </a>		
                </div>
            </section>
            @endnotmobile


            @mobile
            <section class="" style="position: fixed; z-index: -10;  right: 15px; margin-bottom: 30px; bottom: 0; color: white; text-align: right; z-index: 5; background-c0lor: #000 !important;">
                <style>
                    .bounce2 {
                        display: inline-block;
                        position: relative;
                        -moz-animation: bounce 1.5s infinite linear;
                        -o-animation: bounce 1.5s infinite linear;
                        -webkit-animation: bounce 1.5s infinite linear;
                        animation: bounce 1.5s infinite linear;
                        }
                        @-webkit-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-moz-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-o-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-ms-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                </style>

                <div class="h-fit min-h-full flex ml-2 justify-end bounce2">
                    <a href="https://wa.link/pzf7z4"  class="col-6 py-2 text-white mx-1" data-mdb-toggle="tooltip" title="Chat on WhatsApp">
                        <img src="{{ asset('home/wa.png') }}" class="rounded-circle p-2 border border-50 bg-black bg-opacity-75" style="border-radius: 50%; width: 60px;float: right !important;" alt="WhatsApp" />
                    </a>		
                </div>
            </section>

            <section class="" style="position: fixed; z-index: -10;  right: 15px; margin-bottom: 100px; bottom: 0; color: white; text-align: right; z-index: 5; background-c0lor: #000 !important;">
                <style>
                    .bounce2 {
                        display: inline-block;
                        position: relative;
                        -moz-animation: bounce 1.5s infinite linear;
                        -o-animation: bounce 1.5s infinite linear;
                        -webkit-animation: bounce 1.5s infinite linear;
                        animation: bounce 1.5s infinite linear;
                        }
                        @-webkit-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-moz-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-o-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @-ms-keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                        @keyframes bounce2 {
                            0% { top: 0; }
                            50% { top: -0.3em; }
                            70% { top: -0.4em; }
                            100% { top: 0; }
                        }
                </style>
                <div class="h-fit min-h-full flex ml-2 justify-end bounce2">
                    <a href="tel:+971-4-287-9506"  class="col-6 py-2 text-white mx-1" data-mdb-toggle="tooltip" title="Call Us on +971 4 287 9506">
                        <img src="{{ asset('/developments/phone.png') }}" class="rounded-circle p-3 border rounded-50 bg-black bg-opacity-75" style="border-radius: 50%; width: 60px;float: right !important;" alt="Call" />
                    </a>		
                </div>
            </section>
            @endmobile
            
            
            <section style="z-index: 20;">
                @include('layout.footer')
            </section>


            

        </div>

        {{-- <script>
            function initNewsletterModal() {
                if (!localStorage.getItem('newsletter-modal')) {
                    setTimeout(() => {
                        document.getElementById('newsletter-modal').classList.remove('hidden');
                    }, 1);
                }
            }    
            initNewsletterModal();
    
        </script> --}}
</html>
