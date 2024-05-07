
{{-- <style>
    .owl-dots {
    text-align: center;
    padding-top: 15px;
    padding-bottom: 25px;
    }
    .owl-dots button.owl-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    display: inline-block;
    background: #ccc;
    margin: 0 3px;
    }
    .owl-dots button.owl-dot.active {
    background-color: #000;
    }
    .owl-dots button.owl-dot:focus {
    outline: none;
    }
    .owl-nav button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.38) !important;
    }
</style> --}}
<style>
    .main-content {
    position: relative;

    .owl-theme {
        .custom-nav {
            position: absolute;
            top: 20%;
            left: 0;
            right: 0;

            .owl-prev, .owl-next {
                position: absolute;
                height: 100px;
                color: inherit;
                background: none;
                border: none;
                z-index: 100;

                i {
                    font-size: 2.5rem;
                    color: #cecece;
                }
            }

            .owl-prev {
                left: 0;
            }

            .owl-next {
                right: 0;
            }
        }
    }
}
</style>
<div class="bg-footer sm:mx-auto mx-0 px-0 my-0 mx-auto sm:h-[25vh] xl:h-[50vh]">
    <div class="row-span-2 h-[100%] w-[100%]">
        {{-- <div class="owl-carousel owl-theme owl-loaded">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="item">  
                        <img class="p-0 m-0" src="{{ asset('developments/14.jpg') }}">
                    </div>
                    <div class="item"> 
                        <img class="p-0 m-0" src="{{ asset('developments/11.jpg') }}">
                    </div>
                    <div class="item">
                        <img class="p-0 m-0" src="{{ asset('developments/10.jpg') }}">
                    </div>
                    <div class="item">
                        <img class="p-0 m-0" src="{{ asset('developments/8.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="owl-controls">
                <div class="owl-nav">
                    <div class="owl-prev">prev</div>
                    <div class="owl-next">next</div>
                </div>
            </div>
        </div> --}}
        <div class="main-content">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1510797215324-95aa89f43c33?fit=crop&fm=jpg&h=800&q=80&w=1200" alt="Picture 1">
                </div>
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?fit=crop&fm=jpg&h=800&q=80&w=1200" alt="Picture 2">
                </div>
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1509149037-37dc57ccbd13?fit=crop&fm=jpg&h=800&q=80&w=1200" alt="Picture 3">
                </div>
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?fit=crop&fm=jpg&h=800&q=80&w=1200" alt="Picture 4">
                </div>
            </div>
            <div class="owl-theme">
                <div class="owl-controls">
                    <div class="custom-nav owl-nav"></div>
                </div>
            </div>
        </div>
        {{-- </div>
        <div class="owl-carousel">
          <div class="item">  
              <img class="p-0 m-0" src="{{ asset('developments/14.jpg') }}">
          </div>
          <div class="item">  
              <img class="p-0 m-0" src="{{ asset('developments/11.jpg') }}">
          </div>
          <div class="item">  
              <img class="p-0 m-0" src="{{ asset('developments/10.jpg') }}">
          </div>
          <div class="item">  
              <img class="p-0 m-0" src="{{ asset('developments/8.jpg') }}">
          </div>
      </div>    --}}
    </div>
</div>


<script>
    $(document).ready(function(){  
        $('.main-content .owl-carousel').owlCarousel({
    stagePadding: 50,
    loop: true,
    margin: 10,
    nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.main-content .custom-nav',
    responsive:{
        0:{
            items: 1
        },
        600:{
            items: 3
        },
        1000:{
            items: 5
        }
    }
});
    });
</script>