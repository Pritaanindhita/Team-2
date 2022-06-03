<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>E-Safety</title>
    <link rel="icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="<?php echo e(url ('css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css" />

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@500;600;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('headerbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php echo $__env->make('form_inspeksi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        $("#menu-2").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        $(".sub-btn").click(function() {
            $(this).next(".sub-menu").slideToggle();
            $(this).find(".dropdown").toggleClass('rotate');

        });
    </script>
</body>

</html><?php /**PATH D:\contoh\example-app\resources\views/petugas.blade.php ENDPATH**/ ?>