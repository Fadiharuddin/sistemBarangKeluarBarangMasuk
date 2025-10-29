<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Laravel Inventory</title>
    <!-- CSS files -->
    <!-- Filepond stylesheet -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link href="<?php echo e(asset('dist/css/tabler.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('dist/css/tabler-flags.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('dist/css/tabler-payments.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('dist/css/tabler-vendors.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('dist/css/demo.min.css')); ?>" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="<?php echo e(asset('dist/js/demo-theme.min.js')); ?>"></script>
    <div class="page">
        <!-- Sidebar -->
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Navbar -->
        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page wrapper -->
        <div class="page-wrapper">

            <?php echo $__env->yieldContent('content'); ?>

            <!-- Footer -->
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>

    <!-- Libs JS -->
    <script src="<?php echo e(asset('dist/libs/tom-select/dist/js/tom-select.base.min.js')); ?>" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    <!-- Tabler Core -->
    <script src="<?php echo e(asset('dist/js/tabler.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('dist/js/demo.min.js')); ?>" defer></script>

    <?php echo $__env->yieldPushContent('custom_script'); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\sisfo-barang-masuk-dan-keluar-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>