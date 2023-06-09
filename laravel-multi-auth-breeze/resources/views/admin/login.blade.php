<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>
<body>
    <div>
        @if (session()->has('message'))
            <div>
                <strong>{{ session()->get('message')}}</strong>
            </div>
        @endif
        <form action="{{ route('admin-login') }}" method="POST">
            @csrf
            <div style="margin-bottom:5px">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            
            <div style="margin-bottom:5px">
                <label for="">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div style="margin-bottom:5px">
                <button type="submit">Log In</button>
            </div>
        </form>
    </div>
</body>
</html>