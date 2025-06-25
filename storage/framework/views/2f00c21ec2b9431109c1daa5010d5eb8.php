<?php $__env->startSection('title',    __('Aademic Year Result Tabulation')); ?>

<?php $__env->startSection('page_heading',  __('Aademic Year Result Tabulation')); ?>

<?php $__env->startSection('content', ); ?>
<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('academic-year-result-tabulation');

$__html = app('livewire')->mount($__name, $__params, 'lw-2219997546-0', $__slots ?? [], get_defined_vars());

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
    ['href'=> route('exams.index'), 'text'=> 'exams'],
    ['href'=> route('exams.academic-year-result-tabulation'), 'text'=> 'Academic Year Result tabulation', 'active'],
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/pages/exam/academic-year-result-tabulation.blade.php ENDPATH**/ ?>