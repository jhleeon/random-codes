<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
</head>
<body>

    @if (session()->has('message'))
        <div>{{ session()->get('message') }}</div>      
    @endif

    <div>
        Admin Name: {{ Auth::guard('admin')->user()->name}}
        <br>
        Admin Email: {{ Auth::guard('admin')->user()->email}}
    </div>
    
    <div>Dashbaord</div>
    <div>
        <a href="{{ route('admin-logout') }}">Logout</a>
    </div>

</body>
</html>