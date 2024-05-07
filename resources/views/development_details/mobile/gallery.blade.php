
<style>
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
</style>
<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto sm:h-[25vh] xl:h-[50vh]">
    <div class="row-span-2 h-[100%] w-[100%]">
        <div class="owl-carousel">
          <div class="item">  
              <x-index-card-mobile
                  description="Our designs blend aesthetics with functionality, creating homes that are as beautiful as they are comfortable while we weave architectural dreams into reality
                  "
                  base="DESIGN"
                  url="{{ asset('home/DESIGN.webp') }}"
              />  
          </div>
          <div class="item">
              <x-index-card-mobile
                  description="We are committed to delivering quality in every aspect of its projects, from the choice of materials and equipment, to the execution and supervision of the construction
                  "
                  base="QUALITY"
                  url="{{ asset('home/QUALITY.webp') }}"
              />
          </div>
          <div class="item">
              <x-index-card-mobile
                  description="Relentless pursuit of the highest standards, achieved through dedication, skill and a commitment to surpassing expectations
                  "
                  base="EXCELENCE"
                  url="{{ asset('home/EXCELLENCE.webp') }}"
              />
          </div>
      </div>   
    </div>
</div>


<script>
    $(document).ready(function(){  
        $('.owl-carousel').owlCarousel({
            margin:10,
            center:true,
            dots: true,
            startPosition: 1,
            responsive:{
                0:{
                    items:1.25
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })
    });
</script>