<h1>Customer Accounts</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customer Accounts</a> |
<a href="/users">User Accounts</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= esc($customer['name']) ?></td>
            <td><?= esc($customer['email']) ?></td>
            <td><?= esc($customer['phone']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>