<h2 style="color: #333; font-family: Arial, sans-serif;">Edit Menu</h2>
<form action="<?php echo site_url('menu/update/'.$menu['id']); ?>" method="post">
    <label for="name" style="display: block; margin-bottom: 10px;">Name</label>
    <input type="text" name="name" value="<?php echo $menu['name']; ?>" required style="padding: 5px; border: 1px solid #ccc; border-radius: 3px;">
    <label for="price" style="display: block; margin-bottom: 10px;">Price</label>
    <input type="number" name="price" value="<?php echo $menu['price']; ?>" required style="padding: 5px; border: 1px solid #ccc; border-radius: 3px;">
    <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 3px; cursor: pointer;">Update</button>
</form>