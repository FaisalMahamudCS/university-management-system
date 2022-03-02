<?php
include "navadmin.php";
include "connection.php";
?>
    
    <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Admin Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="admin_details.php">Admin Details</a></li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                

                <div class="row">
                    
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Admins</h4>
                                <h6 class="card-subtitle">Below is list of all admins</h6>
                                <a href="add_admin.php" class="btn btn-success">Add New Admin</a>
                                
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                                <th>Admin Email</th>
                                                <th>Admin Password</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                                $i = 1;
                                                $get_admin_data = "select * from admintbl order by 1 desc";
                                                $run_admin_data = mysqli_query($conn,$get_admin_data);
                                                while($row_admin_data = mysqli_fetch_array($run_admin_data))
                                                {


                                             ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><a href="delete_admin.php?admin_id=<?php echo $row_admin_data['id']; ?>"><span class="label label-danger">Delete</span></a></td>
                                                <td><a href="edit_admin.php?admin_id=<?php echo $row_admin_data['id']; ?>"><span class="label label-primary">Edit</span></a></td>
                                                <td><?php echo $row_admin_data['email']; ?></td>
                                                <td><?php echo $row_admin_data['password']; ?></td>
                                         <?php $i++;  } ?>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    
                </div>
</div>

                


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            
        </div>
        <!-- End Page wrapper  -->
    </div>
                </div>

                </div>
 
   
   </div>
 </div>
   
  </div>




    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
