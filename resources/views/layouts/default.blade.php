<!doctype html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>

    <body>
        <div class="container">
            <div id="main">
                @yield('content')
            </div>
        </div>
    
        @section('scripts')
            @include('includes.scripts')
        @show
    </body>
</html>

