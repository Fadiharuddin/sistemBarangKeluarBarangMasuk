<div class="row">
    <div class="col-12 col-lg-8">
        <div class="card card-md">
            
            
            <div class="card-header d-flex justify-content-between">
                <span>Item</span>
                <div wire:loading>
                    <div class="spinner-border spinner-border-sm text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $inputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row align-items-center">
                        

                        <div class="col-4">
                            <label class="form-label required">Barang</label>
                            <select class="form-select" aria-label="Default select example"
                                wire:model.defer="inputs.<?php echo e($key); ?>.barang_id"
                                wire:change="change(<?php echo e($key); ?>)" id="inputs.<?php echo e($key); ?>.barang_id">
                                <option selected>Pilih Barang</option>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_barang); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                            </select>

                        </div>
                        <div class="col-2">
                            <label class="form-label">Harga</label>
                            <input type="text" name="harga" wire:model.defer="inputs.<?php echo e($key); ?>.harga"
                                id="inputs.<?php echo e($key); ?>.harga"
                                class="form-control <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="" readonly>
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['inputs.' . $key . '.harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <div class="col-2">
                            <label class="form-label">qty</label>
                            <input type="number" min="1" wire:model.defer="inputs.<?php echo e($key); ?>.qty"
                                wire:change="change(<?php echo e($key); ?>)" id="inputs.<?php echo e($key); ?>.qty"
                                class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="">

                        </div>
                        <div class="col-3">
                            <label class="form-label">Total Harga</label>
                            <input type="text" wire:model.defer="inputs.<?php echo e($key); ?>.total_harga"
                                id="inputs.<?php echo e($key); ?>.total_harga"
                                class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="" readonly>
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['inputs.' . $key . '.total_harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <div class="col">
                            <a href="#" class="text-danger link-underline link-underline-opacity-0"
                                wire:click="removeInput(<?php echo e($key); ?>)">
                                <i class="ti ti-trash-x icon"></i>
                            </a>
                        </div>



                        
                    </div>
                    <div class="mb-3">
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['inputs.' . $key . '.barang_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger error"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['inputs.' . $key . '.qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger error"><?php echo e($message); ?>, Stok Saat ini <?php echo e($inputs[$key]['stok']); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                <div class="row mt-4">
                    <div class="d-grid">
                        <button class="btn btn-outline-secondary btn-block" wire:click="addInput">Add Item</button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <span class="me-4">Total</span>
                <br>
                <span class="h3 me-4"><?php echo e(number_format($grandTotal)); ?></span>
            </div>

            
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card card-md sticky">
            <form action="<?php echo e(route('kategori.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-header">
                    Transaksi Info
                </div>
                <div class="card-stamp card-stamp-lg">
                    <div class="card-stamp-icon bg-primary">
                        <i class="ti ti-clipboard-text"></i>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="no_transaksi"
                                        wire:model.defer="noTransaksi" placeholder="name@example.com" readonly>
                                    <label for="no_transaksi">No. Transaksi</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="tgl_transaksi"
                                        wire:model.defer="tglMasuk" placeholder="name@example.com">
                                    <label for="tgl_transaksi">Tanggal Transaksi</label>
                                </div>

                                <div class="form-floating">

                                    <select class="form-select <?php $__errorArgs = ['pemasokId'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="pemasokId"
                                        aria-label="Floating label select example" wire:model.defer="pemasokId">
                                        <option selected>Pilih Pemasok</option>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->pemasoks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_pemasok); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </select>
                                    <label for="pemasokId">Pemasok</label>
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['pemasokId'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-primary " wire:click.prevent="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\sisfo-barang-masuk-dan-keluar-main\resources\views/livewire/barang-masuk-create.blade.php ENDPATH**/ ?>