          

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADMIN <small>Subheading</small>
                        </h1>
                     <?php 

                        //$user = new User;// create user object or instantiation of class User
                        
                        $user_result = User::find_all_users();
                        while($row = mysqli_fetch_array($user_result)){
                            //print_r($row);
                            echo $row["username"]. "<br />";
                        }

                        

                      ?>




                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>