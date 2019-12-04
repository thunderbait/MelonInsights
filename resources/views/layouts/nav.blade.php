<!doctype html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>

    <body>
        <div class="container flex">
            <div class="nav_bar flex justify_space align_space flex_direction">
                @include('includes.navbar')
            </div>
            <div class="main item_grow">
                @yield('content')
            </div>
        </div>
    
        @section('scripts')
            @include('includes.scripts')
        @show
    </body>
</html>

