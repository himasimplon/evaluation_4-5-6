

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    @include('includes.head')
    
</head>
<body>
    @section('header')
    
        @include('includes.header')
    @show
   
        
        <main>
        
            @yield('content')
                        
        </main>
   
    @include('includes.footer')

   
</body>
</html>