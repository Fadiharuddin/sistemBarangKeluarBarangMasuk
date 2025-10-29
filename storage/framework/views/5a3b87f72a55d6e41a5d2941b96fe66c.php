<?php $__env->startSection('content'); ?>
    <!-- Page header -->
    <div class="page-header d-print-none ">
        <div class="container-xl ">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Laporan
                    </div>
                    <h2 class="page-title">
                        Barang Keluar
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-secondary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-report">
                            <i class="ti ti-filter icon"></i>
                            Filter
                        </a>
                        <a href="<?php echo e(route('barang-keluar.laporan.pdf', [
                            'from_date' => request()->query('from_date'),
                            'to_date' => request()->query('to_date'),
                        ])); ?>"
                            target="_blank" class="btn btn-primary d-none d-sm-inline-block">
                            <i class="ti ti-file-export icon"></i>
                            PDF
                        </a>
                        <a href="<?php echo e(route('barang-keluar.laporan.excel', [
                            'from_date' => request()->query('from_date'),
                            'to_date' => request()->query('to_date'),
                        ])); ?>"
                            target="_blank" class="btn btn-primary d-none d-sm-inline-block">
                            <i class="ti ti-table-export icon"></i>
                            Excel
                        </a>
                        <a href="<?php echo e(route('barang-keluar.create')); ?>" class="btn btn-primary d-sm-none btn-icon"
                            data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </a>
                    </div>
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

            <div class="row">
                <div class="col-12">
                    
                    <?php if(request()->query('from_date')): ?>
                        <div class="mb-3">
                            Filters
                            <span class="badge bg-cyan text-cyan-fg">Dari Tgl <?php echo e(request()->query('from_date')); ?></span>
                            <span class="badge bg-cyan text-cyan-fg">Sampai <?php echo e(request()->query('to_date')); ?></span>
                            <a class="ms-2 text-reset text-secondary" href="<?php echo e(route('barang-keluar.laporan')); ?>">Reset</a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Total : <?php echo e($barangKeluarDetails->count()); ?>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                    <tr>
                                        <th class="w-1">No</th>
                                        <th>Transaksi</th>
                                        <th>Barang</th>
                                        <th>Pelanggan</th>
                                        <th>Satuan</th>
                                        <th class="text-end">Harga</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-end">Total Harga</th>

                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $barangKeluarDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td class="text-secondary align-text-top" data-label="No">
                                                <?php echo e($loop->iteration); ?>

                                            </td>
                                            <td data-label="Barang">
                                                <div class="d-flex flex-column align-items-top">

                                                    <div class="font-weight-medium"><?php echo e($row->barangKeluar->tgl_keluar); ?>

                                                    </div>
                                                    <div class="text-secondary">
                                                        <a href="<?php echo e(route('barang-keluar.show', $row->barangKeluar->id)); ?>"
                                                            target="_blank"
                                                            class=""><?php echo e($row->barangKeluar->no_transaksi); ?></a>
                                                    </div>

                                                </div>
                                            </td>
                                            <td data-label="Barang">
                                                <div class="d-flex align-items-top">
                                                    <a data-fslightbox="gallery"
                                                        href="<?php echo e(asset('storage/' . $row->barang->gambar)); ?>">
                                                        <span class="avatar me-2"
                                                            style="background-image: url(<?php echo e(asset('storage/' . $row->barang->gambar)); ?>)"></span>

                                                    </a>
                                                    <div class="flex-fill">
                                                        <div class="font-weight-medium"><?php echo e($row->barang->nama_barang); ?>

                                                        </div>
                                                        <div class="text-secondary"><a href="#"
                                                                class="text-reset"><?php echo e($row->barang->kode); ?></a></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-text-top" data-label="Pelanggan">
                                                <?php echo e($row->barangKeluar->pelanggan->nama_pelanggan); ?>

                                            </td>
                                            <td class="align-text-top" data-label="Satuan">
                                                <?php echo e($row->barang->satuan->nama_satuan); ?>

                                            </td>
                                            <td class="align-text-top text-start text-lg-end" data-label="Harga">
                                                Rp. <?php echo e(number_format($row->harga)); ?>

                                            </td>


                                            <td class="align-text-top text-start text-lg-center" data-label="Stok">
                                                <?php echo e($row->qty); ?>

                                            </td>

                                            <td class="align-text-top text-start text-lg-end" data-label="Harga">
                                                Rp. <?php echo e(number_format($row->total_harga)); ?>

                                            </td>




                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="7" class="text-center">
                                                No data found.
                                            </td>
                                        </tr>
                                    <?php endif; ?>


                                </tbody>
                            </table>
                        </div>


                        
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="get">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Dari Tanggal</label>
                            <input type="date" class="form-control" name="from_date"
                                value="<?php echo e(old('from_date', request()->from_date)); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sampai Tanggal</label>
                            <input type="date" class="form-control" name="to_date"
                                value="<?php echo e(old('to_date', request()->to_date)); ?>">
                        </div>

                    </div>



                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-secondary ms-auto">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('custom_script'); ?>
    <script src="<?php echo e(asset('dist/libs/fslightbox/index.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sisfo-barang-masuk-dan-keluar-main\resources\views/pages/barang-keluar/laporan/index.blade.php ENDPATH**/ ?>