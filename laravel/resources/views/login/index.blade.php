<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <center>
    <form method="post">
    <!-- @csrf -->
    {{csrf_field()}}
    <!-- <input type="hidden" name=>"_token" value=>"{{csrf_token()}}"> -->
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="uname" value="{{old('uname')}}"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="{{old('password')}}"></td>
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

    <br>
    
    @foreach($errors->all() as $err)
        {{$err}}<br>
    @endforeach    
    
    
    <a href="/register">Register</a>

    </center>

    
    
</body>
</html>