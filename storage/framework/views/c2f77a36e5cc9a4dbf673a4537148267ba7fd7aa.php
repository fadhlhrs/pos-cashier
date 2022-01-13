<!doctype html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconfonts/ionicons/css/ionicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconfonts/typicons/src/font/typicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/css/vendor.bundle.base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/css/vendor.bundle.addons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/shared/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/demo_1/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/main/style.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('icons/favicon.png')); ?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main role="main " class="container">
        <?php echo $__env->make('layouts/welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts/scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\pos-cashier\resources\views/base.blade.php ENDPATH**/ ?>