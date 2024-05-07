<div class="sm:container sm:mx-auto mx-0 px-4 xl:my-10 sm:my-4 mx-auto" id="projectSectionOne"  @if($langSeg == 'ar') dir="rtl" @endif>

    <div class="row-span-2 grid sm:grid-cols-2 gap-4 w-[100%]">
        <div>
            <h2 class=" font-base my-8 text-2xl xl:text-2xl w-[90%] ">
                @if($langSeg == 'ar')
                    {{$secOne_title_ar}}
                @else
                    {{$secOne_title}}
                @endif
            </h2>
            <p class=" font-base my-8 w-[90%] leading-8 text-justify">
                @if($langSeg == 'ar')
                    {{$SecOnedescription_ar}}
                @else
                    {{$SecOnedescription}}
                @endif
            </p>
        </div>
        <div class=" text-justify font-light m-8 w-full my-auto" @if($langSeg == 'ar') dir="rtl" @endif>
            <div class="row-span-2 grid sm:grid-cols-2 gap-4 w-[100%] mb-8" >
                <div>
                    <h3 class="text-esnaad_ text text-justify font-thin text-lg xl:text-lg w-[90%] tracking-wider">
                        Prices From
                    </h3>
                    <p class="text-xl xl:text-3xl text-justify font-light w-[90%] tracking-wider" >
                        AED 1,050,000
                    </p>
                </div>

                <div>
                    <h3 class=" text-justify font-thin text-lg xl:text-lg w-[90%] tracking-wider">
                        Apartments
                    </h3>
                    <p class="text-xl xl:text-3xl font-light w-[100%] tracking-wider rtl:text-right " dir="ltr">
                        @if($langSeg == 'ar')
                            {{$bedrooms}}
                        @else
                            {{$bedrooms}}
                        @endif
                    </p>
                </div>
            </div>

            <div class="row-span-2  w-[100%] mb-8">
                @include('development_details.desktop.buttons')
            </div>
        </div>
    </div>

</div>

