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
        
        @if($nameBeforeSlug == 'developments')
            <title>{{$jsonSEOData['title_en']}}</title>
            <meta name="description" content="{{$jsonSEOData['description_en']}}" />
            <meta name="keywords" content="{{$jsonSEOData['keywords_en']}}" />
        @else
            @if(isset($jsonSEOData))
                <title>{{$jsonSEOData['title_en']}}</title>
                <meta name="description" content="{{$jsonSEOData['description_en']}}" />
                <meta name="keywords" content="{{$jsonSEOData['keywords_en']}}" />
            @endif
        @endif

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
			[{"@context":"https://schema.org","@type":"Organization","@id":"https://esnaad.com","name":"ESNAAD Real Estate Development","url":"https://esnaad.com","sameAs":[],"logo":{"@type":"ImageObject","url":"https://www.esnaad.com/public/logo-dark-2.png","width":"184","height":"35"}}]</script>



        <script type="application/ld+json">{
			"@context": "http://schema.org",
			"@type": "SiteNavigationElement",
			"name": [
				"Home",
				"Our Developments",
				"Why Invest In Dubai?",
				"Construction Updates",
				"Our Communities",
				"NEWS Updates",
				"Careers",  
				"About ESNAAD",
				"Contact Us"
			],
			"url": [
				"https://esnaad.com",
				"https://www.esnaad.com/en/projects",
				"https://www.esnaad.com/en/invest-in-dubai",
				"https://www.esnaad.com/en/constructions",
				"https://www.esnaad.com/en/communities
				"https://www.esnaad.com/en/news",
				"https://www.esnaad.com/en/careers",
				"https://www.esnaad.com/en/about-us",
				"https://www.esnaad.com/en/contact"
			]
		}</script>


        <style>
            html,body{
                background-color: #fff !important;
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


    </head>


    <body class="font-body bg-white" style="background-color: #fff !important;">

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
                <nav x-data="{ open: false }" class="bg-white p-0 m-0 z-50 shadow " id="sample" style="position: fixed; width: 100vw !important" >
                    @include('layout.navigation')
                </nav>
            @endnotmobile

            @mobile
                @include('layout.mobileNavigation2')
            @endmobile

            
            <div class="relative">
                @yield('content')
            </div>

            @desktop
                <section id="newsletter-modal" class="hidden">
                    @include('layout.popup')
                </section>
            @enddesktop


            <section class="" style="position: fixed; z-index: -10;  right: 0; bottom: 0; color: white; text-align: right; z-index: 5; background-c0lor: #000 !important;">
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
                        <img src="{{ asset('home/wa.png') }}" class="rounded-circle p-1" style="width: 60px; background-color: #000 !important; border-radius: 50% !important; float: right !important;" alt="Avatar" />
                    </a>		
                    
                </div>
            </section>
            
            
            <section style="z-index: 20;">
                @include('layout.footer')
            </section>


            @desktop
                <script src="{{ asset('js/popup/Zmymn335HXL2Vpz5.min.js')}}"></script>
            @enddesktop
            

        </div>

        <script>
            function initNewsletterModal() {
                if (!localStorage.getItem('newsletter-modal')) {
                    setTimeout(() => {
                        document.getElementById('newsletter-modal').classList.remove('hidden');
                    }, 1);
                }
            }    
            initNewsletterModal();
    
        </script>
</html>
