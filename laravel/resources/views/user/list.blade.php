    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User List</title>
    </head>
    <body>
            <h3>User List</h3>

            <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Action</td>
                    </tr>
            @foreach ($userList as $users) 
                    
                    <tr>
                        <td>{{$users['id']}}</td>
                        <td>{{$users['name']}}</td>
                        <td>{{$users['email']}}</td>
                        
                        <td>
                        <a href="/user/details/{{$users['id']}}">Details</a>
                        <a href="/user/edit/{id}">Edit</a>
                        <a href="/user/delete/{id}">Delete</a>
                        </td>
                    </tr>

            @endforeach   
            </table>
        
    </body>
    </html>