<div class="fixed top-0 z-50 w-full z-50">
  <nav class=" bg-white p-4 lg:p-0 lg:h-screen shadow-md" >
    <div class="flex justify-between">

      <div>
          <a href="{{ url($langSeg.'/') }}">
              <img style="height: 30px !important;" class="px-2" src="{{ asset('logo-dark-2.png') }}" alt="esnaad-logo-navbar">
          </a>
      </div>
    

      <div class="my-auto">
          <button class="block lg:hidden text-white px-2 my-auto" id="mobile-menu-button" aria-label="mobile-hamburger-navbar">
              <svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" 
              viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" 
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  
              s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,
              0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
              </svg>
          </button>   
      </div>
      
    </div>
    
    <ul class="hidden bg-whit$langSeg.e lg:block space-y-6 pt-8 pb-4 pl-[10vw]  ">
        <li ><a href="{{ url($langSeg.'/about-us') }}" class="text-dark">About</a></li>
        <li ><a href="{{ url($langSeg.'/projects') }}" class="text-dark">Projects</a></li>
        <li ><a href="{{ url($langSeg.'/communities') }}" class="text-dark">Communities</a></li>
        <li ><a href="{{ url($langSeg.'/invest-in-dubai') }}" class="text-dark">Invest in Dubai</a></li>
        <li ><a href="{{ url($langSeg.'/constructions') }}" class="text-dark">Construction</a></li>
        <li ><a href="{{ url($langSeg.'/news') }}" class="text-dark">News</a></li>
        <li ><a href="{{ url($langSeg.'/contact') }}" class="text-dark">Contact</a></li>
      </ul>
    
  </nav>
  
  
</div>
<div class="lg:flex-grow">
  <!-- Content Goes Here -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#mobile-menu-button').click(function() {
      $('ul').toggleClass('hidden');
    });
  });
</script>