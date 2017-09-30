 <?php 
include_once('connectDB.php');
session_start();
  if(isset($_POST['signup'])){
    $query = mysqli_query($con, "SELECT * FROM accounts where username = '".mysqli_real_escape_string($con, $_POST['uname'])."'") or die(mysqli_error($con));
    if(mysqli_num_rows($query) != 0){
      $_SESSION['error'] = "<b>Error</b> - That username already exist.";
      $_SESSION['uname'] = $_POST['uname'];
      $_SESSION['fname'] = $_POST['fname'];
      $_SESSION['lname'] = $_POST['lname'];
      header("Location: signup.php");
    }
    else{
    mysqli_query($con, "INSERT INTO accounts(username, password, fname, lname) VALUES(
    '".mysqli_real_escape_string($con, $_POST['uname'])."', '".mysqli_real_escape_string($con, password_hash($_POST['pass'], PASSWORD_DEFAULT))."'
    ,'".mysqli_real_escape_string($con, $_POST['fname'])."', '".mysqli_real_escape_string($con, $_POST['lname'])."')") or die(mysqli_error($con));
      $_SESSION['success'] = '<b>Success</b> Your account has been created.';
    header("Location: login.php");
      exit;
    }
  }
else
{
    header("Location: login.php");
}
  ?>