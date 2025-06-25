<div>
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'admin|super-admin')): ?>
    <div class="card">
        <div class="card-body">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('read school')): ?>
                <h2 class="font-bold text-center text-2xl my-2 ">Multi schools</h2>
                <div>
                    <?php if (isset($component)) { $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $attributes; } ?>
<?php $component = App\View\Components\InfoBox::resolve(['title' => $schools,'text' => 'Schools','icon' => 'fas fa-school text-dark','colour' => 'bg-red-600','textColour' => 'text-white','url' => route('schools.index'),'urlText' => 'View schools'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InfoBox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $attributes = $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $component = $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage school settings')): ?>
                <h4 class="font-bold text-center text-2xl my-4">School data</h4>
            <?php endif; ?>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('read class group')): ?>
                    <?php if (isset($component)) { $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $attributes; } ?>
<?php $component = App\View\Components\InfoBox::resolve(['title' => ''.e($classGroups).'','text' => 'Class groups','colour' => 'bg-orange-600','textColour' => 'text-white','url' => ''.e(route('class-groups.index')).'','urlText' => 'View class groups'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InfoBox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $attributes = $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $component = $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('read class')): ?>
                    <?php if (isset($component)) { $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $attributes; } ?>
<?php $component = App\View\Components\InfoBox::resolve(['title' => ''.e($classes).'','text' => 'Classes','url' => ''.e(route('classes.index')).'','urlText' => 'View classes','colour' => 'bg-green-500','textColour' => 'text-white'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InfoBox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $attributes = $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $component = $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('read section')): ?>
                    <?php if (isset($component)) { $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $attributes; } ?>
<?php $component = App\View\Components\InfoBox::resolve(['title' => ''.e($sections).'','text' => 'Sections','url' => ''.e(route('sections.index')).'','urlText' => 'View sections','colour' => 'bg-lime-600','textColour' => 'text-white'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InfoBox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $attributes = $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $component = $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('read student')): ?>
                    <?php if (isset($component)) { $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $attributes; } ?>
<?php $component = App\View\Components\InfoBox::resolve(['title' => ''.e($students).'','text' => 'Students (active)','icon' => ' text-dark','url' => ''.e(route('students.index')).'','urlText' => 'View students','colour' => 'bg-blue-700','textColour' => 'text-white'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InfoBox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['theme' => 'yellow']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $attributes = $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $component = $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('read teacher')): ?>
                    <?php if (isset($component)) { $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $attributes; } ?>
<?php $component = App\View\Components\InfoBox::resolve(['title' => ''.e($teachers).'','text' => 'Teachers','icon' => ' text-dark','url' => ''.e(route('teachers.index')).'','urlText' => 'View teachers','colour' => 'bg-indigo-700','textColour' => 'text-white'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InfoBox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['theme' => 'orange']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $attributes = $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $component = $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('read subject')): ?>
                    <?php if (isset($component)) { $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7 = $attributes; } ?>
<?php $component = App\View\Components\InfoBox::resolve(['title' => ''.e($parents).'','text' => 'Parents','icon' => ' text-dark','url' => ''.e(route('parents.index')).'','urlText' => 'View Parents','colour' => 'bg-violet-700','textColour' => 'text-white'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InfoBox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['theme' => 'purple']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $attributes = $__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__attributesOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7)): ?>
<?php $component = $__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7; ?>
<?php unset($__componentOriginal4461e1b0e3ec88b9a030b6fb9ce324d7); ?>
<?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/dashboard-data-cards.blade.php ENDPATH**/ ?>