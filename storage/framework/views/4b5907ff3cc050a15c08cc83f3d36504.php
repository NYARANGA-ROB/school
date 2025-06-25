<div class="card">
    <div class="card-header">
        <h2 class="card-title">Parents list</h2>
    </div>
    <div class="card-body">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\User::class,'uniqueId' => 'parents-list-table','filters' => [['name' => 'role', 'arguments' => ['parent']], ['name' => 'inSchool'], ['name' => 'orderBy' , 'arguments' => ['name']]],'columns' => [
            ['property' => 'name'] , 
            ['property' => 'email'] ,
            ['property' => 'gender'] ,
            ['property' => 'locked', 'name' => 'Locked' , 'type' => 'boolean-switch', 'action' => 'user.lock-account', 'field' => 'lock', 'true-statement' => 'Locked', 'false-statement' => 'Unlocked',  'can' => 'lock user'],
            ['type' => 'dropdown', 'name' => 'actions','links' => [
                ['href' => 'parents.edit', 'text' => 'Manage Profile', 'icon' => 'fas fa-pen',],
                ['href' => 'parents.show', 'text' => 'View', 'icon' => 'fas fa-eye',  ],
                ['href' => 'parents.assign-student', 'text' => 'Assign students', 'icon' => 'fas fa fa-users'],
            ]],
            ['type' => 'delete', 'name' => 'Delete', 'action' => 'parents.destroy',]
         ]
        ]);

$__html = app('livewire')->mount($__name, $__params, 'lw-996313186-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/list-parents-table.blade.php ENDPATH**/ ?>