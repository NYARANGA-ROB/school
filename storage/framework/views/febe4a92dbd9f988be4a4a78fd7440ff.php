<?php $__env->startSection('title', __("Edit $applicant->name's application")); ?>

<?php $__env->startSection('page_heading', __("Edit $applicant->name's application")); ?>

<?php $__env->startSection('content'); ?>
<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('edit-account-application-form', ['applicant' => $applicant]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1791095310-0', $__slots ?? [], get_defined_vars());

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
	['href'=> route('account-applications.index'), 'text'=> 'Account applications' , ],
	['href'=> route('account-applications.edit', $applicant->id), 'text'=> "Edit ".$applicant->firstname()."'s application" , 'active']

]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/pages/account-application/edit.blade.php ENDPATH**/ ?>