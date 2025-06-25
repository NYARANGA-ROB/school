<div class="<?php echo e($class); ?> <?php echo e($colour); ?> <?php echo e($textColour); ?> shadow rounded">
    <div class="p-2 md:p-3 text-center md:text-left md:flex gap-4 items-center justify-between border-b">
        <div>
            <h3 class="text-4xl md:text-5xl my-3 font-bold"><?php echo e($title); ?></h3>
            <p class="text-xl my-3"><?php echo e($text); ?></p>
        </div>
        <i class="<?php echo e($icon); ?> m-4 text-center text-7xl hidden md:block" aria-hidden="true"></i>
    </div>
    <!--[if BLOCK]><![endif]--><?php if(isset($url)): ?>
        <div class="w-full bg-black bg-opacity-30 flex items-center justify-center">
            <a href="<?php echo e($url); ?>" class="w-full py-2 md:py-3 text-center"><?php echo e($urlText ?? 'View'); ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/info-box.blade.php ENDPATH**/ ?>