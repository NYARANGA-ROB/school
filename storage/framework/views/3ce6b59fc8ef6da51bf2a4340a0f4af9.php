<div>
    <?php if (isset($component)) { $__componentOriginal5c29929acf227acd7c5fa56a39e71fcc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c29929acf227acd7c5fa56a39e71fcc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.loading-spinner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('loading-spinner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c29929acf227acd7c5fa56a39e71fcc)): ?>
<?php $attributes = $__attributesOriginal5c29929acf227acd7c5fa56a39e71fcc; ?>
<?php unset($__attributesOriginal5c29929acf227acd7c5fa56a39e71fcc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c29929acf227acd7c5fa56a39e71fcc)): ?>
<?php $component = $__componentOriginal5c29929acf227acd7c5fa56a39e71fcc; ?>
<?php unset($__componentOriginal5c29929acf227acd7c5fa56a39e71fcc); ?>
<?php endif; ?>
    <div class="flex flex-col md:flex-row gap-4 items-center">
        <div class="flex gap-4 items-center overflow-scroll beautify-scrollbar">
            <label for="datatable-search-<?php echo e($uniqueId); ?>">Search</label>
            <input id="datatable-search-<?php echo e($uniqueId); ?>" type="search" wire:model.live.sebounce.500ms="search" class="border-gray-500 dark:bg-inherit border rounded px-4 py-1 md:py-2">
        </div>
        <select class="bg-white dark:bg-gray-800 px-4 py-2 border border-gray-500 rounded" wire:model.live="perPage">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = [5,10,20,25,100]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item); ?>" class="bg-inherit"><?php echo e($item); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </select>
    </div>
    <div class="overflow-x-scroll beautify-scrollbar" >
        <table class="border w-full my-4 table-auto">
            <thead class="border text-center bg-gray-900 dark:bg-white dark:bg-opacity-20 text-white">
                <th class="p-4">S/N</th>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--[if BLOCK]><![endif]--><?php if(!isset($column['can']) || auth()->user()->can($column['can'])): ?>
                        <th class="capitalize p-4 border whitespace-nowrap"><?php echo e(str_replace('_' , ' ', Str::snake( $column['name'] ??  $column['property']))); ?></th>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </thead>
            <tbody class="">
                <!--[if BLOCK]><![endif]--><?php if($collection->isNotEmpty()): ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border odd:bg-white even:bg-slate-100 dark:odd:bg-inherit dark:even:bg-white dark:even:bg-opacity-5">
                            <th class="border w-24"><?php echo e($collection->perPage() * ($collection->currentPage() - 1) + $loop->iteration); ?></th>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!--[if BLOCK]><![endif]--><?php if(!isset($column['can']) || auth()->user()->can($column['can'])): ?>
                                    <td class="p-4 border w-60 whitespace-nowrap">
                                        <?php 
                                            $model = $item;
                                            if (isset($column['relation'])) {
                                                $relations = explode('.',$column['relation']);
                                                foreach ($relations as $relation){
                                                    $model = $model->$relation;
                                                }
                                            }
                                            if (is_array($model)) {
                                                $model = collect($model);
                                            }
                                            
                                        ?>
                                        <p class="<?php echo e($column['class'] ?? null); ?>">
                                            <!--[if BLOCK]><![endif]--><?php if(array_key_exists('method', $column) && !empty($column['method'])): ?>
                                                <?php echo e(($model?->{$column['method']}())); ?>

                                            <?php elseif(array_key_exists('type', $column) && !empty($column['type'])): ?>
                                                <!--[if BLOCK]><![endif]--><?php if($column['type'] == 'delete'): ?>
                                                    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['title' => 'Confirm '.e($column['name']).'','backgroundColour' => 'bg-red-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Confirm '.e($column['name']).'','background-colour' => 'bg-red-600']); ?>
                                                        <div class="text-gray-700 text-center dark:text-white">
                                                            <i class="fa fa-trash text-7xl" aria-hidden="true"></i>
                                                            <p class="my-2">Are you sure you want to <?php echo e(Str::lower($column['name'])); ?> this resource</p>
                                                        </div>
                                                         <?php $__env->slot('footer', null, []); ?> 
                                                            <form action="<?php echo e(route($column['action'],array_merge(($column['pre-route-parameters'] ?? []),[$model->id], ($column['post-route-parameters'] ?? [])))); ?>" method="POST">
                                                                <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale67687e3e4e61f963b25a6bcf3983629 = $attributes; } ?>
<?php $component = App\View\Components\Button::resolve(['class' => 'bg-red-600','icon' => 'fa fa-trash'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                                                    Continue with <?php echo e(Str::lower($column['name'])); ?>

                                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $attributes = $__attributesOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__attributesOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $component = $__componentOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__componentOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
                                                                <?php echo method_field('delete'); ?>
                                                                <?php echo csrf_field(); ?>
                                                            </form>
                                                         <?php $__env->endSlot(); ?>
                                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
                                                <?php elseif($column['type'] == 'dropdown'): ?>
                                                    <?php if (isset($component)) { $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $column['links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <!--[if BLOCK]><![endif]--><?php if(!isset($link['can']) || auth()->user()->can($link['can'])): ?>
                                                                <a href="<?php echo e(route($link['href'],array_merge(($link['pre-route-parameters'] ?? []),[$model->id], ($link['post-route-parameters'] ?? [])))); ?>" class="flex capitalize items-center justify-start gap-2 py-3 px-6 hover:bg-white hover:bg-opacity-20 "><i class="<?php echo e($link['icon'] ?? ''); ?>" aria-hidden="true"></i><?php echo e($link['text']); ?></a>
                                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $attributes = $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $component = $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
                                                <?php elseif($column['type'] == 'boolean-switch'): ?>
                                                <form action="<?php echo e(route($column['action'], $model->id)); ?>" method="POST" x-data>
                                                    <?php echo csrf_field(); ?>
                                                    <?php if (isset($component)) { $__componentOriginal592735d30e1926fbb04ff9e089d1fccf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal592735d30e1926fbb04ff9e089d1fccf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.toggle','data' => ['name' => $column['field'],'checked' => $model?->{$column['property'] ?? $column['name']}  == true,'labelCheckedText' => $column['true-statement'] ?? 'yes','labelUncheckedText' => $column['false-statement']?? 'no','@Change' => '$nextTick(() => $el.form.submit())']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column['field']),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model?->{$column['property'] ?? $column['name']}  == true),'label-checked-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column['true-statement'] ?? 'yes'),'label-unchecked-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column['false-statement']?? 'no'),'@Change' => '$nextTick(() => $el.form.submit())']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal592735d30e1926fbb04ff9e089d1fccf)): ?>
<?php $attributes = $__attributesOriginal592735d30e1926fbb04ff9e089d1fccf; ?>
<?php unset($__attributesOriginal592735d30e1926fbb04ff9e089d1fccf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal592735d30e1926fbb04ff9e089d1fccf)): ?>
<?php $component = $__componentOriginal592735d30e1926fbb04ff9e089d1fccf; ?>
<?php unset($__componentOriginal592735d30e1926fbb04ff9e089d1fccf); ?>
<?php endif; ?>
                                                </form>
                                                <?php elseif($column['type'] == 'image'): ?>
                                                    <div class="flex justify-center">
                                                        <img class="<?php echo e($column['img-class'] ?? " h-14 w-1/2 rounded-full"); ?>" loading="lazy" src="<?php echo e(($model?->{$column['property'] ?? $column['name']})); ?>" alt="">
                                                    </div>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            <?php else: ?>
                                                <?php
                                                    $property = ($model?->{$column['property'] ?? $column['name']})
                                                ?>
                                                <!--[if BLOCK]><![endif]--><?php if($property instanceof \Carbon\Carbon): ?>
                                                    <?php echo e($property->format('Y/m/d')); ?>

                                                <?php elseif($property instanceof \Brick\Money\Money): ?>
                                                    <?php echo e($property->formatTo(app()->getLocale())); ?>

                                                <?php else: ?>
                                                    <?php echo e($property); ?>

                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </p>
                                    </td>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <?php else: ?>
                    <tr>
                        <td class="p-4 capitalize text-center" colspan="100%">No data to Show</td>
                    </tr>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>
    </div>
    <div class="my-3">
        <?php echo e($collection->links()); ?>

    </div>
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/datatable.blade.php ENDPATH**/ ?>