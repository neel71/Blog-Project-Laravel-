<!DOCTYPE html>
<html lang="en">
    @extends('include._head')
    <body>
        @include('include._nav')

        <div class="container">
             @include('include._message')
            @yield('content')
           @include('include._footer')

        </div>
         @include('include._javascript')
       @yield('scripts')
    </body>
</html>