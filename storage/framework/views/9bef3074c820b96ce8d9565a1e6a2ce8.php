<div class="my-3">
    <h3 class="text-center font-bold md:text-xl capitalize"><?php echo e($title ?? ''); ?></h3>
    <div class="md:flex justify-evenly my-4 text-xs md:text-base">
        <p>Total obtainable marks in each subject: <?php echo e($totalMarksAttainableInEachSubject); ?></p>
        <p>Total Marks attainable across all subjects: <?php echo e($totalMarksAttainableInEachSubject * $subjects->count()); ?></p>
    </div>
    <?php
        $heads = $subjects->pluck('name');
    ?>
    
    <div class="overflow-scroll beautify-scrollbar text-center">
        <table class="w-full" id="mark-tabulation">
            <thead class="">
                <th class="border p-4">Class Position</th>
                <th class="border p-4">Name</th>
                <th class="border p-4">Admission Number</th>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $heads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $head): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th class="hide-on-print border p-4"><?php echo e($head); ?></th>   
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <th class="border p-4">Total Marks</th>
                <th class="border p-4">Percentage (%)</th>
                <th class="border p-4">Grade</th>
            </thead>
             <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tabulatedRecords->sortByDesc('total'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabulatedRecord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="border p-4"><?php echo e($loop->iteration); ?></td>
                <td class="border p-4"><?php echo e($tabulatedRecord['student_name']); ?></td>
                <td class="border p-4"><?php echo e($tabulatedRecord['admission_number']); ?></td>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tabulatedRecord['student_marks']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="hide-on-print border p-4"><?php echo e($item); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <td class="border p-4"><?php echo e($tabulatedRecord['total']); ?></td>
                <td class="border p-4"><?php echo e($tabulatedRecord['percent']); ?></td>
                <td class="border p-4"><?php echo e($tabulatedRecord['grade']); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </table>
    </div>
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/mark-tabulation.blade.php ENDPATH**/ ?>