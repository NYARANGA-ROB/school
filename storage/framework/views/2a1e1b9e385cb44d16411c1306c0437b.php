<?php $__env->startSection('title',  __('Parents')); ?>

<?php $__env->startSection('page_heading',   __('Parents')); ?>

<?php $__env->startSection('content', ); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('list-parents-table');

$__html = app('livewire')->mount($__name, $__params, 'lw-487265595-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('parents.index'), 'text'=> 'Parents', 'active'],
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/pages/parent/index.blade.php ENDPATH**/ ?>