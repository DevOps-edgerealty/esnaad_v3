<div class="block sm:hidden" style="z-index: 10000">
  <div class="sticky top-0 z-50 flex  inset-x-0  h-16 border border-gray-600">
    <div class="flex justify-between bg-white p-0 w-full h-full">

        <div>
            <a href="{{ url($langSeg.'/') }}"
                class="h-full inline-block w-full px-1 py-2 text-white font-light  text-center  align-middle transition-all bg-transparent  rounded-0 cursor-pointer leading-normal ease-in tracking-tight-rem shadow-xs bg-150  hover:-translate-y-px active:opacity-85 hover:shadow-md">
                    <img style="height: 40px !important;" 
                    
                    src="{{ asset('logo-dark.png') }}" alt="esnaad-logo-navbar">
            </a>
        </div>

        <div>
            <button onclick="openModalMenu('mymodalcenteredMenu')" class="flex row rounded-0 p-0 m-0 w-full my-auto mx-auto text-center h-full">
                {{-- <span class="my-auto mx-auto text-gray-800 ">Menu</span> --}}
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="mx-4 my-auto "
                    width="30px" height="30px" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M415 3826 c-67 -29 -105 -106 -91 -181 9 -47 59 -102 104 -115 26 -8
                    689 -10 2154 -8 l2117 3 27 21 c53 39 69 71 69 134 0 63 -16 95 -69 134 l-27
                    21 -2127 2 c-1753 2 -2132 0 -2157 -11z"/>
                    <path d="M415 2706 c-67 -29 -105 -106 -91 -181 9 -47 59 -102 104 -115 26 -8
                    689 -10 2154 -8 l2117 3 27 21 c53 39 69 71 69 134 0 63 -16 95 -69 134 l-27
                    21 -2127 2 c-1753 2 -2132 0 -2157 -11z"/>
                    <path d="M415 1586 c-67 -29 -105 -106 -91 -181 9 -47 59 -102 104 -115 26 -8
                    689 -10 2154 -8 l2117 3 27 21 c53 39 69 71 69 134 0 63 -16 95 -69 134 l-27
                    21 -2127 2 c-1753 2 -2132 0 -2157 -11z"/>
                    </g>
                </svg>
            

            </button>
        </div>
        
        <div class="md:hidden z-50 transition-all duration-300 ease-in-out">
            <button class="flex items-center px-3 py-2 border rounded text-gray-700 border-gray-700 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
            <div class="w-full flex-grow bg-white py-2 px-4 mt-1 rounded shadow-lg">
                <ul class="flex flex-col space-y-2">
                    <li ><a href="{{ url($langSeg.'/about-us') }}" class="block px-2 py-1 text-gray-800 rounded hover:bg-gray-200"">About</a></li>
                    <li ><a href="{{ url($langSeg.'/our-communities') }}" class="block px-2 py-1 text-gray-800 rounded hover:bg-gray-200">Communities</a></li>
                    <li ><a href="{{ url($langSeg.'/our-developments') }}" class="block px-2 py-1 text-gray-800 rounded hover:bg-gray-200">Developments</a></li>
                    <li ><a href="{{ url($langSeg.'/invest-in-dubai') }}" class="block px-2 py-1 text-gray-800 rounded hover:bg-gray-200">Invest in Dubai</a></li>
                    <li ><a href="{{ url($langSeg.'/media-center') }}" class="block px-2 py-1 text-gray-800 rounded hover:bg-gray-200">Media Center</a></li>
                    <li ><a href="{{ url($langSeg.'/contact-us') }}" class="block px-2 py-1 text-gray-800 rounded hover:bg-gray-200">Contact</a></li>
                </ul>
            </div>
        </div>
        
    </div>
  </div>
</div>
