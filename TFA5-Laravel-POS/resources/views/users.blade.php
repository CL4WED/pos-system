<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>
    <x-navigation />

    <h1>User Accounts</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Role</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['username'] }}</td>
                <td>{{ $user['role'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>