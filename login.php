<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title> login Form </title>
</head>

<body style="background:#CCC">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card bg-dark mt-5">
                        <div class="card-title bg-primary text-white mt-5">
                            <h3 class="text-center py-3">Hostel Management System</h3>
                        </div>

                        <?php
                            if(@$_GET['Empty']==true) 
                            {
                         ?>

                        <div class="alert-light text-danger py-3"> <?php echo $_GET['Empty'] ?> </div>

                        <?php
                            }
                        ?>
                        
                        <?php
                            if(@$_GET['Invalid']==true) 
                            {
                         ?>

                        <div class="alert-light text-danger py-3"> <?php echo $_GET['Invalid'] ?> </div>

                        <?php
                            }
                        ?>
                                               

                        <div class="card-body">

                        <form action="process.php" method="post">
                        <input type="text" name="uname" placeholder="username" class="form-control mb-3" >
                        <input type="password" name="upass" placeholder="password" class="form-control mb-3">
                        <button class="btn btn-success" name="login"> Login </button>
                        </form>

                        </div>
                    </div>            
                </div>
            </div>  
        </div>
</body>
</html>

