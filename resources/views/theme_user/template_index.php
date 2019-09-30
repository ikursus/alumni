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
            <tr>
                <td>1</td>
                <td>ALI</td>
                <td>ali@gmail.com</td>
                <td>012345689</td>
                <td>
                    <a href="/users/1">VIEW</a>
                    <a href="/users/1/edit">EDIT</a>                    
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>
