<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id' => null,
    'name' => null,
    'labelCheckedText' => null,
    'labelUncheckedText' => null,
    'groupClass' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id' => null,
    'name' => null,
    'labelCheckedText' => null,
    'labelUncheckedText' => null,
    'groupClass' => null,
]); ?>
<?php foreach (array_filter(([
    'id' => null,
    'name' => null,
    'labelCheckedText' => null,
    'labelUncheckedText' => null,
    'groupClass' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="<?php echo e($groupClass); ?>">
    <label class=" inline-flex items-center cursor-pointer" x-data="{'checked' : '<?php echo e($attributes->has('checked') && $attributes->get('checked') != false ? true : false); ?>' ?? false, 'labelText' : null}" x-modelable="checked" <?php if($attributes->has('x-model')): ?> x-model="<?php echo e($attributes->get('x-model')); ?>" <?php endif; ?> x-effect="checked == true ? labelText =  '<?php echo e($labelCheckedText); ?>' : labelText =  '<?php echo e($labelUncheckedText); ?>'">
        <div class="relative">
        <input type="hidden" name="<?php echo e($name); ?>" :value="checked == true ? '1' : '0'">
        <input type="checkbox" class="sr-only peer" <?php echo e($attributes); ?> id="<?php echo e($id); ?>" x-model="checked"/>
            <div class="w-11 h-6 bg-gray-300 dark:bg-gray-500 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
        </div>
        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-50" x-text="labelText"></span>
    </label>  
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/toggle.blade.php ENDPATH**/ ?>