<?php $__env->startSection('title', __('Dashboard')); ?>

<?php $__env->startSection('page_heading', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('set school')): ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('set-school');

$__html = app('livewire')->mount($__name, $__params, 'lw-2214707372-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php endif; ?>

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('dashboard-data-cards');

$__html = app('livewire')->mount($__name, $__params, 'lw-2214707372-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('set-academic-year');

$__html = app('livewire')->mount($__name, $__params, 'lw-2214707372-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

<?php if(auth()->user()->hasRole('student')): ?>
    <a href="<?php echo e(route('students.print-profile',auth()->user()->id)); ?>" aria-label="Download Profile">
        <div class="card bg-purple-500 dark:bg-purple-600 text-white md:text-2xl">
            <div class="card-body flex gap-4 items-center justify-center">
                <i class="fa fa-download" aria-hidden="true"></i>
                <p class="font-bold">Download Profile</p>
            </div>
        </div>
    </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('read notice')): ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('list-notices-table');

$__html = app('livewire')->mount($__name, $__params, 'lw-2214707372-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php endif; ?>

<?php if(auth()->user()->hasRole('applicant')): ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('application-history', ['applicant' => auth()->user()]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2214707372-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('read applicant')): ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('list-account-applications-table');

$__html = app('livewire')->mount($__name, $__params, 'lw-2214707372-5', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard', 'active'],
]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/dashboard.blade.php ENDPATH**/ ?>