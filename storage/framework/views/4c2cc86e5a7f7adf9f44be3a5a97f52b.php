<?php $__env->startSection('content'); ?>
    <!-- Page header -->
    <div class="page-header d-print-none ">
        <div class="container-xl ">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Barang
                    </div>
                    <h2 class="page-title">
                        Create Barang
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
                        <form action="<?php echo e(route('barang.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="card-header">
                                <a href="<?php echo e(route('barang.index')); ?>" class="btn btn-icon">
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
                                            <label class="form-label required">Nama Barang</label>
                                            <input type="text" name="nama_barang" value="<?php echo e(old('nama_barang')); ?>"
                                                class="form-control <?php $__errorArgs = ['nama_barang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="" autofocus>
                                            <?php $__errorArgs = ['nama_barang'];
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
                                        <div class="mb-3">
                                            <label class="form-label required">Kode Barang</label>
                                            <input type="text" name="kode" value="<?php echo e(old('kode')); ?>"
                                                class="form-control <?php $__errorArgs = ['kode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="">
                                            <?php $__errorArgs = ['kode'];
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
                                        <div class="mb-3">
                                            <label class="form-label required">Satuan</label>
                                            <select name="satuan_id"
                                                class="form-select <?php $__errorArgs = ['satuan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="satuan_id">
                                                <option value="">Pilih Satuan</option>
                                                <?php $__currentLoopData = $satuans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>" <?php if(old('satuan_id') == $item->id): echo 'selected'; endif; ?>>
                                                        <?php echo e($item->nama_satuan); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>
                                            <?php $__errorArgs = ['satuan_id'];
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

                                        <div class="mb-3">
                                            <label class="form-label required">Kategori</label>
                                            <select name="kategori_id[]"
                                                class="form-select <?php $__errorArgs = ['kategori_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="kategori_id" multiple>
                                                <option value="">Pilih Kategori</option>

                                                <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>" <?php if(in_array($item->id, old('kategori_id', []))): echo 'selected'; endif; ?>>
                                                        <?php echo e($item->nama_kategori); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>
                                            <?php $__errorArgs = ['kategori_id'];
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

                                        <div class="mb-3">
                                            <label class="form-label required">Harga</label>
                                            <input type="number" name="harga" value="<?php echo e(old('harga')); ?>"
                                                class="form-control <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="">
                                            <?php $__errorArgs = ['harga'];
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
                                        <div class="mb-3">
                                            <label class="form-label required">Stok</label>
                                            <input type="number" name="stok" value="<?php echo e(old('stok')); ?>"
                                                class="form-control <?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="">
                                            <?php $__errorArgs = ['stok'];
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
                                        <div class="mb-3">
                                            <label class="form-label required">Min Stok</label>
                                            <input type="number" name="min_stok" value="<?php echo e(old('min_stok')); ?>"
                                                class="form-control <?php $__errorArgs = ['min_stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="">
                                            <?php $__errorArgs = ['min_stok'];
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
                                        <div class="mb-3">
                                            <label class="form-label">Gambar</label>
                                            <input type="file" name="gambar" value="<?php echo e(old('gambar')); ?>" id="gambar"
                                                class="form-control <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <?php $__errorArgs = ['gambar'];
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
                                        <div class="mb-3">
                                            <label class="form-label">
                                                Keterangan
                                            </label>
                                            <textarea class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="keterangan" rows="4"
                                                placeholder=""><?php echo e(old('keterangan')); ?></textarea>
                                            <?php $__errorArgs = ['keterangan'];
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
                                <a href="<?php echo e(route('barang.index')); ?>" class="btn btn-outline-secondary w-25 ">Cancel</a>
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
    <!-- include jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <!-- include FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- include FilePond plugins -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>

    <!-- include FilePond jQuery adapter -->
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

    <script>
        $(function() {

            FilePond.registerPlugin(
                FilePondPluginFileValidateType,
                FilePondPluginImagePreview,
                FilePondPluginFileValidateSize
            );

            FilePond.setOptions({
                server: {
                    process: (fieldName, file, metadata, load, error, progress, abort, transfer,
                        options) => {
                        abort();
                    }
                }
            })

            // Turn input element into a pond
            const inputElement = document.querySelector('#gambar');
            const pond = FilePond.create(inputElement, {
                allowFileTypeValidation: true,
                maxFileSize: '3MB',
                allowImagePreview: true,
                allowFileSizeValidation: true,
                acceptedFileTypes: ['image/*'],
                server: {
                    process: '<?php echo e(route('filepond.store')); ?>',
                    revert: '<?php echo e(route('filepond.destroy')); ?>',
                    headers: {
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                    }
                }
            });


        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new TomSelect(document.getElementById('satuan_id'))
            new TomSelect(document.getElementById('kategori_id'))
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisfo-barang-masuk-dan-keluar-main\resources\views/pages/barang/create.blade.php ENDPATH**/ ?>