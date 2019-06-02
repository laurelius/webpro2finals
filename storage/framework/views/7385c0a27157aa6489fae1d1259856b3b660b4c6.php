<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(config('app.name', 'FGOFORUM')); ?></title>
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>
</html>
<?php /**PATH D:\XAMPP\htdocs\fgoforum\resources\views/layouts/app.blade.php ENDPATH**/ ?>