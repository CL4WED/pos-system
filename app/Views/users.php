<h1>User Accounts</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customer Accounts</a> |
<a href="/users">User Accounts</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
        <th>Role</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= esc($user['username']) ?></td>
            <td><?= esc($user['name']) ?></td>
            <td><?= esc($user['role']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>