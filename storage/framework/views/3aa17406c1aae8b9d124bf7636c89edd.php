<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="shortcut icon" href="<?php echo e(asset(config('app.favicon'))); ?>" type="image/x-icon">
        <title>
            <?php echo $__env->yieldContent('title', config('app.name', 'Skuul')); ?>
        </title>

        <!-- Styles -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

        
        <!--Shortcut icon-->
        <link rel="shortcut icon" href="favicons/favicon.ico" type="image/x-icon">
    </head>
    <body class="bg-gray-100">
        <?php echo $__env->yieldContent('body'); ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('display-status', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-941801167-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </body>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</html><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/layouts/guest.blade.php ENDPATH**/ ?>