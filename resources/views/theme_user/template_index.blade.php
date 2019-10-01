<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senarai Users</title>
</head>
<body>
    <h1>Senarai Users</h1>

    <p>
        <a href="/users/add">Tambah User</a>
    </p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($senaraiUsers as $user)
        
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['phone'] }}</td>
                <td>
                    <a href="/users/{{ $user['id'] }}">VIEW</a>
                    <a href="/users/{{ $user['id'] }}/edit">EDIT</a>                    
                </td>
            </tr>
                   
        @endforeach
        </tbody>
    </table>

</body>
</html>
