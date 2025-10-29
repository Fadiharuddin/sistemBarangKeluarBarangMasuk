<?php $__env->startSection('content'); ?>
    <!-- Page header -->
    <div class="page-header d-print-none ">
        <div class="container-xl ">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Satuan
                    </div>
                    <h2 class="page-title">
                        Create Satuan
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">

            <!-- Alert -->
            <?php if (isset($component)) { $__componentOriginal9d684e94d8294933a712f81f8101e557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d684e94d8294933a712f81f8101e557 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert-success','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d684e94d8294933a712f81f8101e557)): ?>
<?php $attributes = $__attributesOriginal9d684e94d8294933a712f81f8101e557; ?>
<?php unset($__attributesOriginal9d684e94d8294933a712f81f8101e557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d684e94d8294933a712f81f8101e557)): ?>
<?php $component = $__componentOriginal9d684e94d8294933a712f81f8101e557; ?>
<?php unset($__componentOriginal9d684e94d8294933a712f81f8101e557); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal9f8e81b29df95f108aa662b57c2bb9b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f8e81b29df95f108aa662b57c2bb9b3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert-error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f8e81b29df95f108aa662b57c2bb9b3)): ?>
<?php $attributes = $__attributesOriginal9f8e81b29df95f108aa662b57c2bb9b3; ?>
<?php unset($__attributesOriginal9f8e81b29df95f108aa662b57c2bb9b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f8e81b29df95f108aa662b57c2bb9b3)): ?>
<?php $component = $__componentOriginal9f8e81b29df95f108aa662b57c2bb9b3; ?>
<?php unset($__componentOriginal9f8e81b29df95f108aa662b57c2bb9b3); ?>
<?php endif; ?>

            <div class="row row-deck row-cards">

                <div class="col-12 col-lg-8">
                    <div class="card card-md">
                        <form action="<?php echo e(route('satuans.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="card-header">
                                <a href="<?php echo e(route('satuans.index')); ?>" class="btn btn-icon">
                                    <i class="ti ti-chevrons-left"></i>

                                </a>
                            </div>
                            <div class="card-stamp card-stamp-lg">
                                <div class="card-stamp-icon bg-primary">
                                    <i class="ti ti-fountain-filled"></i>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12">

                                        <div class="mb-3">
                                            <label class="form-label required">Nama Satuan</label>
                                            <input type="text" name="nama_satuan" value="<?php echo e(old('nama_satuan')); ?>"
                                                class="form-control <?php $__errorArgs = ['nama_satuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="" autofocus tabindex="1">
                                            <?php $__errorArgs = ['nama_satuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo e(route('satuans.index')); ?>" class="btn btn-outline-secondary w-25 ">Cancel</a>
                                <button type="submit" class="btn btn-primary ms-3 w-25 ">Save</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('custom_script'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisfo-barang-masuk-dan-keluar-main\resources\views/pages/satuans/create.blade.php ENDPATH**/ ?>