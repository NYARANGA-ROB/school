<div class="<?php echo e($groupClass); ?> my-2 flex flex-col"  x-data="{'oldValue' : '<?php echo e(old($name) ?? null); ?>'}">
    <!--[if BLOCK]><![endif]--><?php if(isset($label)): ?> 
    <label for="<?php echo e($id); ?>" class="my-3 font-semibold text-gray-700 dark:text-gray-50"><?php echo e($label); ?></label>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if(!$attributes->has('multiple')): ?>
        <select name="<?php echo e($name); ?>" id="<?php echo e($id); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["$class p-2 border border-gray-400 focus:border-blue-500 bg-inherit dark:bg-gray-800", 'border-red-500' => $errors->has($name)]); ?>" <?php echo e($attributes); ?> <?php if(old($name) != null): ?> x-model="oldValue" <?php endif; ?> x-init="oldValue !== '' && $dispatch('change', oldValue)">
            <?php echo e($slot); ?>

        </select>
    <?php else: ?>
        <div>
            <select class="hidden" id="<?php echo e($id); ?>">
                <?php echo e($slot); ?>

            </select>
    
            <div x-data="dropdown()" x-init="loadOptions()" class="">
                <div  x-data="{ allSelected : selected }">
                    <template x-for="selected in allSelected ">
                        <input type="hidden" name="<?php echo e($name); ?>" :value="options[selected].value">
                    </template>
                </div>
                    <div class="flex flex-col items-center relative w-full">
                        <div x-on:click="open" class="w-full">
                            <div class="my-2 p-1 flex border border-gray-400 focus:border-blue-500 bg-white dark:bg-gray-800 rounded">
                                
                                <div class="flex flex-auto flex-wrap">
                                    <template x-for="(option,index) in selected" :key="options[option].value">
                                        <div class="flex justify-center items-center m-1 font-medium py-1 px-2  rounded-full text-inherit bg-inherit border border-gray-400 ">
                                            <div class="text-xs font-normal leading-none max-w-full flex-initial x-model="options[option]" x-text="options[option].text"></div>
                                            <div class="flex flex-auto flex-row-reverse">
                                                <button x-on:click="remove(index,option)">
                                                    <i class="fa fa-x mx-2 "></i>
                                                </button>
                                            </div>
                                        </div>
                                    </template>
                                    
                                    <div x-show="selected.length  == 0" class="flex-1">
                                        <input disabled placeholder="<?php echo e($attributes->get('placeholder') ?? "Select Options"); ?>"
                                        class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800" :value="selectedValues()">
                                    </div>
                                </div>
                            <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-400 svelte-1l8159u">
                                <button type="button" x-show="isOpen() === true" x-on:click="open" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </button>
                                <button type="button" x-show="isOpen() === false" @click="close" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div x-show.transition.origin.top="isOpen()" class="absolute shadow top-100 bg-white dark:bg-gray-800 z-30 w-full rounded border max-h-60 overflow-y-scroll beautify-scrollbar" x-on:click.away="close">
                            <div class="flex flex-col w-full">
                                <template x-for="(option,index) in options" :key="index">
                                    <div>
                                        <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-500 hover:text-white bg-opacity-25" @click="select(index,$event)">
                                            <div :class="(option.selected) ? 'bg-blue-300 dark:bg-blue-600' : ''" class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                <div class="w-full items-center flex">
                                                    <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-700 my-2"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

    <script>
        function dropdown() {
            return {
                options: [],
                selected: [],
                show: false,
                open() { this.show = true },
                close() { this.show = false },
                isOpen() { return this.show === true },
                select(index, event) {
                if (!this.options[index].selected) {
                    this.options[index].selected = true;
                    this.options[index].element = event.target;
                    this.selected.push(index);

                } else {
                    this.selected.splice(this.selected.lastIndexOf(index), 1);
                    this.options[index].selected = false
                }
                },
                remove(index, option) {
                    this.options[option].selected = false;
                    this.selected.splice(index, 1);
                },
                loadOptions() {
                    const options = document.getElementById("<?php echo e($id); ?>").options;
                    for (let i = 0; i < options.length; i++) {
                        this.options.push({
                            value: options[i].value,
                            text: options[i].innerText,
                            selected: options[i].getAttribute('selected') != null  ? true && this.selected.push(i)  : false
                        });
                    }
                },
                selectedValues(){
                    return this.selected.map((option)=>{
                        return this.options[option].value;
                    })
                }
            }
        }
    </script>
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/select.blade.php ENDPATH**/ ?>