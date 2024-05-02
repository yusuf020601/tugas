<h2>Menu List</h2>
<div style="margin-bottom: 20px;">
    <button style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;">
        <a href="<?php echo site_url('menu/create'); ?>" style="text-decoration: none; color: white;">Add New Menu</a> 
    </button>
</div>
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <?php foreach ($menu as $menu_item): ?>
    <tr>
        <td><?php echo $menu_item['name']; ?></td>
        <td><?php echo $menu_item['price']; ?></td>
        <td>
            <a href="<?php echo site_url('menu/edit/'.$menu_item['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('menu/delete/'.$menu_item['id']); ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }
</style>