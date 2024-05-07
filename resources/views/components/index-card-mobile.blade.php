<div class="max-w-full rounded-0 overflow-hidden" >

    <div class="w-full  group p-1">
        <div class="relative overflow-hidden">

            <div class="grid grid-cols-1 ">
                <div class="">
                    <img
                        class="w-full object-cover hover:shadow-lg hover:shadow-gray/0 mx-0"
                        src="{{ asset($url)}}"
                        alt="esnaad-quality-and-services"
                        onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2 (1).jpg')}}';"
                    >
                </div>
            </div>
            
        </div>
        <div class=" h-full w-full flex items-center justify-center">
            <span class="pt-5 px-0 text-left text-md font-base leading-6">
                {{ __('frontend.'.$description) }}
            </span>
        </div>
    </div>

</div>
