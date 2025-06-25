<?php $__env->startSection('title', __("View $timetable->name")); ?>

<?php $__env->startSection('page_heading', __("View $timetable->name") ); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('timetables.print',$timetable->id)); ?>" class="bg-blue-600 py-2 px-4 text-white rounded">Print Timetable</a>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('show-timetable', ['timetable' => $timetable]);

$__html = app('livewire')->mount($__name, $__params, 'lw-4207322031-0', $__slots ?? [], get_defined_vars());

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
    ['href'=> route('timetables.index'), 'text'=> 'timetables'],
    ['href'=> route('timetables.show', $timetable->id), 'text'=> "View $timetable->name", 'active'],
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/pages/timetable/show.blade.php ENDPATH**/ ?>