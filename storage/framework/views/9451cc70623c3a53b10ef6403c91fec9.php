<div class="card">
    <div class="card-header">
        <h4 class="card-title">Applicants</h4>
    </div>
    <div class="card-body">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\User::class,'filters' => [
            ['name' => 'inSchool'],
            ['name' => 'rejectedApplicants'],
        ],'columns' => [
            ['property' => 'name'],
            ['property' => 'locked', 'name' => 'Locked' , 'type' => 'boolean-switch', 'action' => 'user.lock-account', 'field' => 'lock', 'true-statement' => 'Locked', 'false-statement' => 'Unlocked',  'can' => 'lock user'],
            ['type' => 'dropdown', 'name' => 'actions','links' => [
                ['href' => 'account-applications.edit', 'text' => 'Edit profile', 'icon' => 'fas fa-cog'],
                ['href' => 'account-applications.show', 'text' => 'View profile', 'icon' => 'fas fa-eye'],
                ['href' => 'account-applications.change-status', 'text' => 'Change Status ( make decision )', 'icon' => 'fas fa-balance-scale'],
                ]],
                ['type' => 'delete', 'name' => 'Delete', 'action' => 'account-applications.destroy']
        ]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-605776859-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
</div>

<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/list-rejected-account-applications-table.blade.php ENDPATH**/ ?>