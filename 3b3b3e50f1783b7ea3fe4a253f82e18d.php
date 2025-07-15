<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Harga - IQ-LO Laundry</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/katalog-style.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <div class="container">
            <a href="#" class="logo">IQ-LO LAUNDRY</a>
            <nav>
                <ul>
                    <li><a href="<?php echo e(route ('landingPage')); ?>" class="<?php echo e(request()->routeIs('landingPage') ? 'active' : ''); ?>">Beranda</a></li>
                    <li><a href="<?php echo e(route ('katalogPage')); ?>" class="<?php echo e(request()->routeIs('katalogPage') ? 'active' : ''); ?>">Katalog Harga</a></li>
                    <li><a href="<?php echo e(route ('kontak_pemesananPage')); ?>" class="<?php echo e(request()->routeIs('kontak_pemesananPage') ? 'active' : ''); ?>">Kontak & Pemesanan</a></li>
                    <?php if(Auth::user()): ?>
                    <form action="<?php echo e(route ('logout')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <li><button type="submit" class="btn-logout">LogOut</button></li>
                    </form>
                    <?php else: ?>
                    <li><a href="<?php echo e(route('login')); ?>" class="btn-signin">Sign In</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <?php echo e($slot); ?>

    <?php echo $footer ?? ''; ?>

    <?php echo $javascript ?? ''; ?>

</body>

</html><?php /**PATH /Users/edysaputra/Documents/Data Ibad/The Net Ninja/PHP /LaundryProject/resources/views/components/layouts.blade.php ENDPATH**/ ?>