@section('developments_gallery_head')

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

@endsection

<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto sm:h-[25vh] xl:h-[50vh]">
    <div class="row-span-2 grid sm:grid-cols-2 gap-4 h-[100%] w-[100%]">
        <div>
            <iframe height="100%" width="100%" src="https://www.youtube.com/embed/ef2o1-VpoSc?si=KmbSbrKHYHuw-YPz&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div>
            <div x-data="imageSlider" class="relative h-full mx-auto overflow-hidden rounded-0 bg-gray-100 ">
                <div class="absolute right-5 top-5 z-10 rounded-full bg-white px-2 text-center text-sm text-black">
                    <span x-text="currentIndex"></span>/<span x-text="images.length"></span>
                </div>
                <button @click="previous()" class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                    <i class="fas fa-chevron-left text-2xl font-bold text-gray-500"></i>
                </button>

                <button @click="forward()" class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                    <i class="fas fa-chevron-right text-2xl font-bold text-gray-500"></i>
                </button>

                <div class="relative h-full">
                    <template x-for="(image, index) in images">
                        <div x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-0 h-full w-full">
                            <img :src="image" alt="image" class="h-full w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0" />
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>


@section('developments_gallery_js')
<script>
  document.addEventListener("alpine:init", () => {
    Alpine.data("imageSlider", () => ({
      currentIndex: 1,
      images: [
        "https://unsplash.it/640/425?image=30",
        "https://unsplash.it/640/425?image=40",
        "https://unsplash.it/640/425?image=50",
      ],
      previous() {
        if (this.currentIndex > 1) {
          this.currentIndex = this.currentIndex - 1;
        }
      },
      forward() {
        if (this.currentIndex < this.images.length) {
          this.currentIndex = this.currentIndex + 1;
        }
      },
    }));
  });
</script>

@endsection

