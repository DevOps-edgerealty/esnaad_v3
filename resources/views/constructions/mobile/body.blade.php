{{-- @if(isset($available)) --}}
    <div class="sm:container sm:mx-auto sm:px-4 my-4 sm:my-4 mx-auto">
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-2 mx-4 mb-5">

            {{-- @foreach($response as $data)
            <?php
                $id = $data['id'];
                $title = $data['title'];
                $titlear = $data['title_ar'];
                $description = $data['description'];
                $descriptionar = $data['description_ar'];
                $sluglink = $data['slug_link'];
                $thumbnail = $data['thumbnail'];
                $growth = $data['growth'];
            ?> --}}
            <div class="">
                <div class="mx-auto px-0 ">
                    <div class="max-w-full cursor-pointer rounded-0 border p-0 shadow">
                        <div class="row my-2 px-4">
                            <div>
                                <p class="mt-4 pl-4 text-2xl text-center font-thin">
                                    @if($langSeg == 'ar')
                                        The Spark by ESNAAD
                                    @else
                                        The Spark by ESNAAD
                                    @endif
                                </p>

                                
                                <div class="mt-2 h-6 relative w-auto rounded-full overflow-hidden">
                                    <div class=" w-full h-full bg-gray-200 absolute "></div>
                                    <div class=" h-full bg-green-400 sm:bg-green-500 absolute" style="width: 1%"><div class="h-full w-full mx-auto text-sm text-center pt-1 text-white font-bold"> &nbsp; &nbsp;</div></div>
                                </div>
                                <p class="mt-4 pl-4 text-base text-center font-thin my-auto">
                                    Progress 1 %
                                </p>
                            </div>
                        </div>
                        <div class="row text-center pb-5 pt-2">
                            {{-- <a href="{{ URL($langSeg.'/constructions/'.$sluglink) }}" 
                                class="bg-white text-black px-15 py-3">
                                Explore
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
{{-- @endif --}}
