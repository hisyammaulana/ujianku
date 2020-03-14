
<!doctype html>
<html lang="en">
   @include('layouts.partials._head')
   <body>

      <div id="loading">
         <div id="loading-center">
            <div class="loader">
               <div class="cube">
                  <div class="sides">
                     <div class="top"></div>
                     <div class="right"></div>
                     <div class="bottom"></div>
                     <div class="left"></div>
                     <div class="front"></div>
                     <div class="back"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="wrapper">


         @include('layouts.partials._sidebar')


         @include('layouts.partials._navbar')


         <div id="content-page" class="content-page">
            @yield('content')
         </div>
      </div>


      @include('layouts.partials._footer')


      @include('layouts.partials._script')
   </body>
</html>
