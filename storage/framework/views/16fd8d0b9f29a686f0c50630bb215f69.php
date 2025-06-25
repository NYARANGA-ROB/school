<?php $__env->startSection('title', __("Edit $school->name")); ?>

<?php $__env->startSection('page_heading',  __("Edit $school->name")); ?>

<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('edit-school-form', ['school' => $school]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2745084096-0', $__slots ?? [], get_defined_vars());

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
    ['href'=> route('schools.index'), 'text'=> 'Schools'],
    ['href'=> route('schools.edit', $school->id), 'text'=> 'Settings' , 'active']
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/pages/school/edit.blade.php ENDPATH**/ ?>