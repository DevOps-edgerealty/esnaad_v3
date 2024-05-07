<div class="container mx-0 my-4 px-0 mx-auto">
    <div class="row-span-2 grid gap-2 h-[100%] w-[100%]" @if($langSeg == 'ar') dir="rtl" @endif>
        <div class="group flex flex-col gap-2 rounded-lg " tabindex="1">
            <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                <h3 class="font-semibold text-lg"> 
                    @if($langSeg == 'ar')
                        وسائل الراحة
                    @else
                        Amenities
                    @endif

                </h3>
            </div>
            <div class="text-left">
                @if($langSeg == 'ar')
                    {!! $SecTwo_amenities_ar !!}
                @else
                    {!! $SecTwo_amenities !!}
                @endif
            </div>

        </div>
    </div>

    <div class="row mb-4 mt-2 h-[100%] w-[100%]">
        <div class="" tabindex="1">
            @include('development_details.mobile.buttonsBrochure')
        </div>
    </div>

</div>

