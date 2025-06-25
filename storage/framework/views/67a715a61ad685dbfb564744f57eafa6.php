<?php $__env->startSection('title',  __('Assign teachers to subjects')); ?>

<?php $__env->startSection('page_heading',   __('Assign teachers to subjects')); ?>

<?php $__env->startSection('content' ); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('assign-teacher-to-subjects');

$__html = app('livewire')->mount($__name, $__params, 'lw-1006637443-0', $__slots ?? [], get_defined_vars());

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
    ['href'=> route('subjects.index'), 'text'=> 'subjects'],
    ['href'=> route('subjects.assign-teacher'), 'text'=> 'Assign teacher', 'active'],
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/pages/subject/assign-teacher.blade.php ENDPATH**/ ?>