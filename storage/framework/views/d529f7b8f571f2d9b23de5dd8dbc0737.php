<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <style>
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="centered">
        <div id="app"></div>
        
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    </div>
</body>
</html>
<?php /**PATH S:\laravel\VA\laravel10-vue3-main\resources\views/app.blade.php ENDPATH**/ ?>