<!doctype html>
<html lang="en">

  <head>
      @include('partials._head')
  </head>
  
  <body>
      
    @include('partials._nav')
      <br>

      <div class="container align-items-center">
          @include('partials._messages')
          @yield('content')

          @include('partials._footer') 
      </div><!--end of main container-->

    @include('partials._javascript')
        
    @yield('scripts')
  
  </body>

</html>