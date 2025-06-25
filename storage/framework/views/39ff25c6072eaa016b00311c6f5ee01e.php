<div>
    <!--[if BLOCK]><![endif]--><?php if($applicant->accountApplication->statuses->isNotEmpty()): ?>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $applicant->accountApplication->statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--[if BLOCK]><![endif]--><?php if(!$loop->first): ?>
                <div class="m-auto col-md-9">
                    <i class="fas fa-arrow-circle-up fa-2x"></i>  
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <div class="card">
                <div class="card-header bg-blue-600 text-white">
                    <h4 class="card-title capitalize"><?php echo e($item->name); ?></h4>
                </div>
                <!--[if BLOCK]><![endif]--><?php if($item->reason != null): ?>
                    <div class="card-body">
                        <p class="text-left"><?php echo e($item->reason); ?></p>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    <?php else: ?>
        <p class="text-center">No status History</p>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/application-history.blade.php ENDPATH**/ ?>