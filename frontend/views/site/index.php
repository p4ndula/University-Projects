<?php


$servername = "sql166.main-hosting.eu";
$username = "u129228360_macsl";
$password = "0soNlg9xplNc";
$dbname = "u129228360_lms";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql="SELECT * FROM jobs  WHERE `job_status`='Pending';";

$result = $conn->query( $sql );
$rws=mysqli_num_rows($result);

$sql2="SELECT * FROM jobs  WHERE `job_status`='In Progress';";

$result2 = $conn->query( $sql2 );
$rws1=mysqli_num_rows($result2);

$sql3="SELECT * FROM `service` WHERE `service_job_status` = 'Scheduled';";

$result3 = $conn->query( $sql3 );
$rws2=mysqli_num_rows($result3);



/* @var $this yii\web\View */

$this->title = 'Welcome to TechWhiz App';
?>
<div class="site-index">
 <a href="/jobs/">
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-red">
            <div class="inner">
              <?php echo "<center><font face='Calibri'><h2>Pending Jobs</h2></font><br>".
              "<font size='90'>".$rws."</font></center> "; ?>
            </div>
        </div>
    </div></a>


  <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-yellow">
            <div class="inner">
              <center> <h2>In Progress Jobs</h2><br>
               <?php echo"<font size='80'>".$rws1."</font></center>"; ?>
            </div>
        </div>
    </div>



     <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-blue">
            <div class="inner">
              <center> <h2>Service Jobs</h2><br>
                <?php echo"<font size='80'>".$rws2."</font></center>"; ?>
            </div>
        </div>
    </div>
</div>
