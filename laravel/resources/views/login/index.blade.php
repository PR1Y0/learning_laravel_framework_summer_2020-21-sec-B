<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    
    <form method="post">
    <!-- @csrf -->
    {{csrf_field()}}
    <!-- <input type="hidden" name=>"_token" value=>"{{csrf_token()}}"> -->
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="uname"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
                <td></td>
                <td><input type="submit" value="submit"></td>
        </tr>
    </table>
    </form>
    @if(session('msg'))
    <div class="alert alert-success">
     {{session('msg')}}
    </div>
    @endif
    
    <a href="/register">Register</a>
    
</body>
</html>