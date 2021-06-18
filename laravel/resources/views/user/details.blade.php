<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    
        <h1>User Details</h1>|                                      
        <a href="/home">Back</a>| 
        <a href="/logout">Logout </a>


    <table border="1">
        <tr>
            <td>ID</td>
            <td>{{$user['id']}}</td>
        </tr>
        <tr>
            <td>UserName</td>
            <td>{{$user['name']}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$user['email']}}</td>
        </tr>
    </table>
    
    
</body>
</html>