<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>E-Safety Barata</title>
    <link rel="icon" type="image/x-icon" href="assets/logo_safety.png">

    <link rel="stylesheet" href="<?php echo e(url ('css/style.css')); ?>">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@500;600;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row g-0 h-100">
            <div class="col-lg-6 brand text-white">
                <div class="text-center mt-5">
                    <h1><b>E-SAFETY BARATA</b></h1>
                    <h5>Advancement Through Technology</h5>
                    <img src="<?php echo e(url ('assets/log_gambar.png')); ?>" width="80%" class="img-fluid mx-auto d-block mt-5" />
                </div>
            </div>
            <div class="col-lg-6 login-form">
                <div class="card mt-5 mx-auto border-light">
                    <h2 class="text-center mt-5">K3LH LOGIN</h2>
                    <div class="container g-3 mt-5">
                        <form>
                            <div class="form-group">
                                <label>Username</label>
                                <div class="field-input rounded">
                                    <input type="text" id="formEmail" class="form-control" placeholder="Username" required="required" />
                                    <span><i class="fas fa-user-check"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="field-input rounded">
                                    <input type="password" id="formPassword" class="form-control" placeholder="Password" />
                                    <span><i class="fas fa-eye"></i></i></span>
                                </div>
                            </div>
                            <a href="petugas_index.php" class="log-button">
                                <button class="btn text-light mt-3" type="button">Login</button>
                            </a>
                        </form>
                        <b>
                            <p class="text-center mt-5">Develop by</p>
                            <p class="text-center">Intern Tim 2 - PT Barata Indonesia 2022</p>
                        </b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH D:\contoh\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>