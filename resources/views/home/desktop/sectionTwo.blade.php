<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto">
    <div class="mt-10 mb-10">
        <h2 class="text-xl xl:text-3xl font-thin text-center">
            {{__('frontend.homeSectionTwoH1')}} <br> {{__('frontend.homeSectionTwoH2')}}
        </h2>
    </div>

    <div class="grid md:grid-cols-3 gap-7 mb-5 mx-auto" >

        <?php //LOAD COMPONENT INDEX CARD ?>
        <x-index-card
            description="homeSectionTwoDesign"
            base="Design"
            url="{{ asset('home/DESIGN.webp') }}"
        />

        <x-index-card
            description="homeSectionTwoQuality"
            base="QUALITY"
            url="{{ asset('home/QUALITY.webp') }}"
        />

        <x-index-card
            description="homeSectionTwoExcelence"
            base="EXCELENCE"
            url="{{ asset('home/EXCELLENCE.webp') }}"
        />
    </div>

    <?php //SHOW ON MOBILE ONLY ?>
    {{-- <div class="block sm:hidden flex mx-auto px-4 w-full">
        <a href="{{ route('luxe.new-projects') }}" class="w-full hover:bg-gray-100 mx-auto text-center text-gray-700 font-light py-2 sm:py-1 px-4 border border-gray-400 rounded shadow hover:bg-white hover:shadow-gray/30"
            aria-label="luxe-home-view-more-new-projects"
        >
            View More New Projects
        </a>
    </div> --}}
</div>
