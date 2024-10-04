<!doctype html>
<html lang="en">
    @include('includes.header')
   <body>
      <!--wrapper-->
      <div class="wrapper">
            @include('includes.menu')
            @include('includes.body_header')

            @yield('page-wrapper')

            @include('includes.body_footer')

            @include('includes.modal')
      </div>
      <!--end wrapper-->

      @include('includes.footer')
   </body>
</html>
