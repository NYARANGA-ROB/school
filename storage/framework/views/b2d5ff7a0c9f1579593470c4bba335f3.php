<div class="card">
    <div class="card-header">
        <h4 class="card-title">Exam list for semester <?php echo e(auth()->user()->school->semester->name); ?> </h4>
    </div>
    <div class="card-body">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['uniqueId' => 'list-exams-table','model' => App\Models\Exam::class,'filters' => [
            ['name' => 'where' , 'arguments' => ['semester_id' , auth()->user()->School->semester->id]]
        ],'columns' => [
            ['property' => 'name'],
            ['property' => 'start_date'],
            ['property' => 'stop_date'],
            ['property' => 'active', 'type' => 'boolean-switch', 'action' => 'exams.set-active-status', 'field' => 'status', 'true-statement' => 'Active', 'false-statement' => 'Inactive',  'can' => 'update exam'],
            ['property' => 'publish_result','type' => 'boolean-switch', 'action' => 'exams.set-publish-result-status', 'field' => 'status', 'true-statement' => 'Published', 'false-statement' => 'Not published',  'can' => 'update exam'],
            ['name' => 'Actions', 'type' => 'dropdown' , 'links' => [
                ['href' => 'exams.edit', 'text' => 'edit', 'icon' => 'fas fa-cog', 'can' => 'update exam'],
                ['href' => 'exam-slots.index', 'text' => 'Manage/View exam slots', 'icon' => 'fas fa-cog',  'can' => 'read exam slot'],
                ['href' => 'exam-slots.create', 'text' => 'Create exam slots', 'Create exam slot', 'icon' => 'fas fa-key',  'can' => 'create exam slot'],
            ]],
            ['type' => 'delete', 'name' => 'Delete', 'action' => 'exams.destroy', 'can' => 'delete exam']
        ]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3029746359-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/list-exams-table.blade.php ENDPATH**/ ?>