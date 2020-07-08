<?php
    
    if(isset($_GET['p_status'])) {
        $s_id=$_GET['s_id'];
       if($_GET['p_status'] == 'delete'){
            $obj_app->delete_student_info($s_id);
        }
        }
    
    $query_result=$obj_app->select_all_student_info();
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="admin_master.php">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Manage Student</a>
    </li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
           
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h3>
                <?php
                if (isset($message)) {
                    echo $message;
                    unset($message);
                }
                ?>
            </h3>
            <h3>
                <?php
                    if(isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                ?>
            </h3>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">

                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Student DOB</th>
                        <th>Student Email</th>
                        <th>Student Contact</th>
                        <th>Student Address</th>
                       
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php while ($student_info = mysqli_fetch_assoc($query_result)) { ?>
                        <tr>
                            <td align="center"><?php echo $student_info['s_id'] ?></td>
                            <td><?php echo $student_info['s_name'] ?></td>
                            <td><?php echo $student_info['s_dob'] ?></td>
                            <td><?php echo $student_info['s_email'] ?></td>
                            <td><?php echo $student_info['s_telephone'] ?></td>
                            <td><?php echo $student_info['s_address'] ?></td>
                           
                            <td class="center">
                               
                                
                                <a class="btn btn-danger" href="?p_status=delete&s_id=<?php echo $student_info['s_id'] ?>" title="delete" onclick="return check_delete();">Delete
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                            </td>
                        </tr>
                    <?php } ?>


                </tbody>

            </table>            
        </div>
    </div><!--/span-->
</div>