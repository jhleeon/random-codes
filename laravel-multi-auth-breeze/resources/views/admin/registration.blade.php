<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rregistration</title>
</head>
<body>
    
    <form action="{{ route('admin-registration') }}" method="post">
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
    
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
    
        <div>
            <label for="">Password</label>
            <input type="text" name="password">
        </div>

        <div>
            <button type="submit">submit</button>
        </div>
    </form>
 

</body>
</html>