<!DOCTYPE html>
<html lang="en">
    <head>
        @yield('styles')
    </head>
    <body>
        <div style="text-align: center; ">
            <h1 style="padding-top: 2%; color: #229dd0"> Dinner with a Doctor</h1>
        </div>
        <div style="width: 100%; height: 1px; background-color: #229dd0"></div><br/>
        <div style="margin-top: 20px">
            <div style="background-color: #def5ff; margin: auto; padding: 20px; width: 80%; border-top: 4px solid #17C4BB;">
                @yield('content')
            </div>
        </div>
    </body>
</html>
