<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>

<script>
    $(document).ready(function(){
        $("form").hide(); // Sembunyikan form terlebih dahulu
        $("form").fadeIn(2000); // Tampilkan form dengan efek fadeIn selama 2 detik
    });
</script>

<div class="center">
    <form action="<?php echo site_url('menu/store'); ?>" method="post" style="margin-top: 20px;">
        <label for="name" style="display: block; margin-bottom: 10px;">Name</label>
        <input type="text" name="name" required style="padding: 5px; width: 200px; border: 1px solid #ccc; border-radius: 3px;">
        <label for="price" style="display: block; margin-top: 10px; margin-bottom: 10px;">Price</label>
        <input type="number" name="price" required style="padding: 5px; width: 100px; border: 1px solid #ccc; border-radius: 3px;">
        <button type="submit" style="padding: 8px 15px; background-color: #007bff; color: #fff; border: none; border-radius: 3px; cursor: pointer;">Save</button>
    </form>
</div>