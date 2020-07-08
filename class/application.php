<?php 

class Application {

    //put your code here
    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'db_tggonline';
        $con = mysqli_connect($host_name, $user_name, $password);
        if ($con) {
            $db_select = mysqli_select_db($con, $db_name);
            if ($db_select) {
                return $con;
            } else {
                die('Database no selected' . mysqli_error($con));
            }
        } else {
            die('Database connction fail' . mysqli_error($con));
        }
    }

   public function admin_login_check($data) {
        $con=$this->__construct();
       // $password = md5($data['password']);
        $sql = "SELECT * FROM tbl_admin WHERE admin_email='$data[admin_email]' AND admin_password='$data[admin_password]' AND p_status=0 ";
        if (mysqli_query($con, $sql)) {
            $query_result = mysqli_query($con, $sql);
            $admin_info = mysqli_fetch_assoc($query_result);
            if ($admin_info) {
                session_start();
                $_SESSION['admin_id'] = $admin_info['admin_id'];
                $_SESSION['admin_name'] = $admin_info['admin_name'];

                header('Location: admin_master.php');
            } else {
                $message = 'Please use valid email address & password';
                return $message;
            }
        } else {
            die('Query problem' . mysqli_error($con));
        }
    }
    public function save_student_info($data){
    	$con=$this->__construct();
    	$sql="INSERT INTO tbl_students (s_name, s_gender, s_dob, s_telephone, s_email, s_address) VALUES ('$data[s_name]', '$data[s_gender]', '$data[s_dob]','$data[s_telephone]', '$data[s_email]','$data[s_address]' )";                                          
        if( mysqli_query($con, $sql) ) {   
        	$message='Student info saved successfully'; 
            return $message;
        } else {
            die('Query problem'.  mysqli_error($con) );
        }

    }

    public function send_email(){

  $con=$this->__construct();
        $sql="SELECT * FROM tbl_students ORDER BY s_id DESC LIMIT 1";
        if(mysqli_query($con, $sql)) {
           $query_result=mysqli_query($con, $sql); 
           $student_info = mysqli_fetch_assoc($query_result);
           $sname = $student_info['s_name'];
           $semail = $student_info['s_email'];
           $stelephone = $student_info['s_telephone'];
           $saddress = $student_info['s_address'];
           
$to      = 'takeuchi@tgg.tokyo','maria.khaleda.mk@gmail.com';
$subject = 'New Student Entry';
$message = 'A student just got registered in TGG Cloud Classroom!'. "\n". 'Here are the Details:'. "\n".
              ' Name: ' . $sname  ."\n"
              .' Email Address: ' . $semail ."\n"
              .' Mobile Number: ' . $stelephone ."\n"
              .' Address: ' . $saddress;
$headers = 'From: mariaeastasia@egmail.com';

if(mail($to, $subject, $message, $headers)) {
    //echo 'Email sent successfully!';
} else {
    die('Failure: Email was not sent!');
}
       
    

         
        } else {
            die('Query problem'.mysqli_error($con) );
        }

}

  public function select_all_student_info() {
        $con=$this->__construct();
        $sql="SELECT * FROM tbl_students WHERE d_status=0 ";
        if(mysqli_query($con, $sql)) {
           $query_result=mysqli_query($con, $sql); 
           return $query_result;
        } else {
            die('Query problem'.mysqli_error($con) );
        }
    } 

     public function delete_student_info($data) {
        $con=$this->__construct();
        $sql="UPDATE tbl_students SET d_status = 1 WHERE s_id='$data' ";
        if(mysqli_query($con, $sql)) {
           $_SESSION['message']="Student deleted successfully !";
           //no need to call header because delete it same page
        } else {
            die('Query problem'.mysqli_error($con) );
        }
    }
}
