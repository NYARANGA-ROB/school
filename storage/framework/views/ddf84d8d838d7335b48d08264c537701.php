<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(["$groupClass flex flex-col my-2"]); ?>">
    <label for="<?php echo e($id); ?>"  class="<?php echo \Illuminate\Support\Arr::toCssClasses(["$labelClass font-semibold my-3"]); ?>"><?php echo e($label); ?></label>
    <textarea id="<?php echo e($id); ?>" name="<?php echo e($name); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["$class border border-gray-500 p-2 rounded dark:bg-transparent", 'border-red-500' => $errors->has($name)]); ?>" <?php echo e($attributes); ?>><?php echo e(old($name) ?? ($slot != null ? $slot : '')); ?></textarea>
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-700 dark:text-red-500 my-2"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/textarea.blade.php ENDPATH**/ ?>