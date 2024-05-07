{{-- @if(isset($available)) --}}
    <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto  py-8">
        <div class="grid xl:grid-cols-1 lg:grid-cols-1 sm:grid-cols-1 gap-2 mb-5">

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
                    $created_at = $data['created_at'];
                    $updated_at = $data['updated_at'];
                ?> --}}
                <div class="">
                    <div class="mx-auto px-0 ">
                        <div class="max-w-full cursor-pointer rounded-0 border p-0 shadow">
                            <div class="row">
                                <div class="grid xl:grid-cols-7 lg:grid-cols-7 sm:grid-cols-7 grid-cols-7 gap-2 mb-5">
                                    <div class="h-25">
                                        <p class="mt-4 pl-4 text-2xl text-center font-thin">
                                            @if($langSeg == 'ar')
                                                The Spark by ESNAAD
                                            @else
                                                The Spark by ESNAAD
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col-span-5 h-25 my-auto">
    
                                        

                                        <div class="mt-8 h-6 relative w-auto rounded-full overflow-hidden my-auto">
                                            <div class=" w-full h-full bg-gray-200 absolute "></div>
                                            <div class=" h-full bg-yellow-400 sm:bg-green-500 absolute" style="width: 1%"><div class="h-full w-full mx-auto text-sm text-center pt-1 text-white font-bold"> &nbsp; &nbsp;</div></div>
                                        </div>

                                        <p class="mt-4 pl-4 text-base text-center font-thin my-auto">
                                            Progress 1 %
                                        </p>

                                                                           
                                    </div>
                                    <div class="h-25">
                                        <div class="row text-center pb-5 pt-2 mt-8 h-100">
                                            {{-- <a href="javascript:void(0)" onclick="return false;" 
                                                class="bg-white text-black px-15 my-3 py-3">
                                                Explore
                                            </a> --}}
                                        </div>   
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

            {{-- @endforeach --}}
        </div>
    </div>
{{-- @endif --}}
