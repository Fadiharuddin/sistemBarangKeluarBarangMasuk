<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Barang Masuk</title>
</head>

<body>

    <h4>PT. CONTOH SAJA</h4>
    <p>Jl. Lembah Bening No 111</p>
    <p>Pluta City - Jupiter</p>
    <p>Phone Number : 01212234234</p>

    <p></p>
    <p>Laporan Barang Masuk</p>
    <p>Periode :
        <?php echo e(\Carbon\Carbon::parse(request()->from_date)->format('d M Y')); ?>

        s/d
        <?php echo e(\Carbon\Carbon::parse(request()->to_date)->format('d M Y')); ?>

    </p>
    <p>Total : <?php echo e($barangMasukDetails->count()); ?></p>
    

    <table>
        <thead>
            <tr>
                <th style="text-align:center; border: 1px solid black">No</th>
                <th style="text-align:center; border: 1px solid black">No. Transaksi</th>
                <th style="text-align:center; border: 1px solid black">Tanggal Transaksi</th>
                <th style="text-align:center; border: 1px solid black">Pemasok</th>
                <th style="text-align:center; border: 1px solid black">Kode Barang</th>
                <th style="text-align:center; border: 1px solid black">Nama Barang</th>
                <th style="text-align:center; border: 1px solid black">Satuan</th>
                <th style="text-align:center; border: 1px solid black">Harga</th>
                <th style="text-align:center; border: 1px solid black">Jumlah</th>
                <th style="text-align:center; border: 1px solid black">Total Harga</th>

            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $barangMasukDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td style="text-align:center; border: 1px solid black"><?php echo e($loop->iteration); ?></td>
                    <td style="text-align:center; border: 1px solid black"><?php echo e($row->barangMasuk->no_transaksi); ?></td>
                    <td style="text-align:center; border: 1px solid black">
                        <?php echo e(\Carbon\Carbon::parse($row->barangMasuk->tgl_masuk)->format('d M Y')); ?>

                    </td>
                    <td style="text-align:left; border: 1px solid black">
                        <?php echo e(optional($row->barangMasuk)->pemasok->nama_pemasok); ?>

                    </td>
                    <td style="text-align:left; border: 1px solid black"><?php echo e($row->barang->kode); ?></td>
                    <td style="text-align:left; border: 1px solid black"><?php echo e($row->barang->nama_barang); ?></td>
                    <td style="text-align:center; border: 1px solid black"><?php echo e($row->barang->satuan->nama_satuan); ?></td>
                    <td style="text-align:right; border: 1px solid black"><?php echo e(number_format($row->harga)); ?>

                    <td style="text-align:center; border: 1px solid black"><?php echo e($row->qty); ?></td>
                    <td style="text-align:right; border: 1px solid black"><?php echo e($row->total_harga); ?></td>

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
<?php /**PATH C:\xampp\htdocs\sisfo-barang-masuk-dan-keluar-main\resources\views/pages/barang-masuk/laporan/excel.blade.php ENDPATH**/ ?>