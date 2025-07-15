<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Laundry</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/adminStyle.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <header class="main-header">
        <h1>Laundry Beranda Admin</h1>
    </header>


    <nav class="main-nav">
        <ul>
            <li><a href="<?php echo e(route('index')); ?>" class="<?php echo e(request()->routeIs('index') ? 'active' : ''); ?>">Beranda</a></li>
            <li><a href="<?php echo e(route('daftarPesanan')); ?>" class="<?php echo e(request()->routeIs('daftarPesanan') ? 'active' : ''); ?>">Daftar Pesanan</a></li>
            <li><a href="<?php echo e(route('recap')); ?>" class="<?php echo e(request()->routeIs('recap') ? 'active' : ''); ?>">Recap</a></li>
            <form action="<?php echo e(route ('logout')); ?>" method="post" class="main-nav">
                <?php echo csrf_field(); ?>
                <li><button type="submit" class="logout-btn">LogOut</button></li>
            </form>
        </ul>
    </nav>

    <?php echo e($slot); ?>


    <?php echo $javascript ?? ''; ?>


</body>

</html><?php /**PATH /Users/edysaputra/Documents/Data Ibad/The Net Ninja/PHP /LaundryProject/resources/views/components/adminLayouts.blade.php ENDPATH**/ ?>