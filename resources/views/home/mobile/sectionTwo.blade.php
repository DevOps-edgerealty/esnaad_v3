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

<div class="mt-15 bg-footer ">

    <div class="pt-5 mb-5 px-6 w-full">
        <h3 class="text-xl font-thin text-left w-[100%]">
            {{__('frontend.homeSectionTwoH1')}} <br> {{__('frontend.homeSectionTwoH2')}}
        </h3>
    </div>

    <div class="owl-carousel">
        <div class="item">  
            <x-index-card-mobile
                description="homeSectionTwoDesign"
                base="DESIGN"
                url="{{ asset('home/DESIGN.webp') }}"
            />  
        </div>
        <div class="item">
            <x-index-card-mobile
                description="homeSectionTwoQuality"
                base="QUALITY"
                url="{{ asset('home/QUALITY.webp') }}"
            />
        </div>
        <div class="item">
            <x-index-card-mobile
                description="homeSectionTwoExcelence"
                base="EXCELENCE"
                url="{{ asset('home/EXCELLENCE.webp') }}"
            />
        </div>
    </div>   
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

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