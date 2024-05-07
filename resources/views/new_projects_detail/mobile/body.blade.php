<div class="">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="container mx-auto flex flex-col items-start md:flex-row">
            <div class="ml-0 md:mr-12 lg:w-2/3 sticky">
                <div class="container mx-auto w-full h-full">
                    <p>
                        {!!html_entity_decode($properties->description_en, ENT_COMPAT, 'UTF-8')!!}
                    </p>
                </div>
            </div>
            <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 mx-0">
                @include('new_projects_detail.mobile.simplified')
            </div>

        </div>
    </div>
</div>
