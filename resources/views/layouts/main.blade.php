<html lang="en">

    @include('layouts.partials.head')

  <body>
   
   @include('layouts.partials.navbar')

<div class="container-fluid">
  <div class="row">
    
    @include('layouts.partials.sidenavbar')

    @yield('content')
  </div>
</div>

@include('layouts.partials.scripts')

</body>
</html>