<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Stok Barang</title>
</head>

<body>

    <h4>PT. CONTOH SAJA</h4>
    <p>Jl. Lembah Bening No 111</p>
    <p>Pluta City - Jupiter</p>
    <p>Phone Number : 01212234234</p>

    <p></p>
    <p>Laporan Stok Barang</p>
    
    <p>Total : <?php echo e($barangs->count()); ?></p>
    

    <table>
        <thead>
            <tr>
                <th style="text-align:center; border: 1px solid black">No</th>
                <th style="text-align:center; border: 1px solid black">Kode Barang</th>
                <th style="text-align:center; border: 1px solid black">Nama Barang</th>
                <th style="text-align:center; border: 1px solid black">Stok</th>
                <th style="text-align:center; border: 1px solid black">Masuk</th>
                <th style="text-align:center; border: 1px solid black">Keluar</th>

            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td style="text-align:center; border: 1px solid black"><?php echo e($loop->iteration); ?></td>
                    <td style="text-align:left; border: 1px solid black"><?php echo e($row->kode); ?></td>
                    <td style="text-align:left; border: 1px solid black"><?php echo e($row->nama_barang); ?></td>
                    <td style="text-align:center; border: 1px solid black"><?php echo e($row->stok); ?></td>
                    <td style="text-align:center; border: 1px solid black"><?php echo e($row->totalBarangMasuk); ?></td>
                    <td style="text-align:center; border: 1px solid black"><?php echo e($row->totalBarangKeluar); ?></td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td>No Data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\sisfo-barang-masuk-dan-keluar-main\resources\views/pages/barang/laporan/excel.blade.php ENDPATH**/ ?>