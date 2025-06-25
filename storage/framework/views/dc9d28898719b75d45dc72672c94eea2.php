
<div class="card">
    <div class="card-header">
        <h4 class="card-title"><?php echo e($timetable->name); ?></h4>
    </div>
    <div class="card-body">
        <!--[if BLOCK]><![endif]--><?php if($showDescription == true): ?>  
            <!--[if BLOCK]><![endif]--><?php if(isset($timetable->description)): ?>
                <p><?php echo e($timetable->description); ?></p>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <div class="overflow-scroll beautify-scrollbar ">
            <table class="border w-full my-4 table-auto"> 
                <thead>
                    <tr> 
                        <th class="text-center p-4 w-60 whitespace-nowrap">
                            <p >Time slots <span style="font-family: Dejavu Sans, sans-serif;"><br>&rarr;</span><br>Weekdays <span style="font-family: Dejavu Sans, sans-serif;">&darr;</span> </p>
                        </th>
                        
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $timeSlots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeSlot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th scope="col" class="border p-4 w-60 whitespace-nowrap">
                            <p class="text-center ">
                                <?php echo e($timeSlot->start_time); ?>

                                <br> - <br> 
                                <?php echo e($timeSlot->stop_time); ?></p>
                        </th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tr>
                </thead>
                
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $weekdays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $weekday): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr> 
                        <td scope="col" class="p-4 border"><p class=""><strong><?php echo e($weekday->name); ?></strong></p></td>
                        
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $timeSlots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeSlot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td class="p-4 border w-60"
                            <?php if($disableEmitCellInformationDetail == false): ?>
                                wire:click="emitCellInformationDetail(<?php echo e($timeSlot->id); ?>, <?php echo e($weekday->id); ?>)" wire:loading.class="prevent-click pointer-events-none"    
                            <?php endif; ?>>
                                <p class="print-small-text whitespace-nowrap">
                                    <?php
                                        $pivot = $timeSlot->weekdays->find($weekday->id)?->timetableRecord;
                                    ?>
                                    <!--[if BLOCK]><![endif]--><?php if(!is_null($pivot) && $pivot->timetable_recordable_type == "App\Models\Subject"): ?>
                                        <?php echo e($subjects->find($pivot->timetable_recordable_id)?->name); ?>

                                    <?php elseif(!is_null($pivot) && $pivot->timetable_recordable_type ==  "App\Models\CustomItem"): ?>
                                        <?php echo e($customItems->find($pivot->timetable_recordable_id)?->name); ?>

                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </p>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </table>
        </div>
    </div>
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/show-timetable.blade.php ENDPATH**/ ?>