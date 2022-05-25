
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/w3.css" type="text/css">
    <title>Admin Member</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="index.php">Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="btn btn-primary" href="inscription.php"><i class="fa fa-user-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">User List</div>
                        <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <!-- <th>Image</th> -->
                                <th>Name</th>
                                <th>E-Mail</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                      
                        <tfoot>
                            <tr>
                            <th>ID</th>
                            <!-- <th>Image</th> -->
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Actions</th>
                            </tr>
                        </tfoot>
                        <?php
                            //connection bdd
                            include("config.php");
                            $ins = $base->prepare("SELECT * FROM `inscription`");
                            $ins->execute();

                            while($result=$ins->fetch()){
                                // echo $result['nom_proprietaire'];
                        ?>
                        <tbody>
                           
                            <tr>
                            <td><?php echo $result['id'] ?></td>
                            <!-- <td><img src="<?php //echo $upload_dir.$row['image'] ?>" height="40"></td> -->
                            <td><?php echo $result['name'] ?></td>
                            <td><?php echo $result['email'] ?></td>
                            <td class="text-center">
                                <a href="show.php?id=<?php echo $result['id'] ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                <a href="edit.php?id=<?php echo $result['id'] ?>" class="btn btn-info"><i class="fa fa-user-edit"></i></a>
                                <a href="delete_account.php?id=<?php echo $result['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i></a>
                            </td>
                            </tr>
                            <?php
                                    //}
                                }
                            ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <script src="js/bootstrap.min.js" charset="utf-8"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
</body>
</html>