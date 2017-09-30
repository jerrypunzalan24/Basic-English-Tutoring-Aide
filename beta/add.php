<?php 
  include_once('connectDB.php');
  session_start();  
?>
<?php
if(!isset($_SESSION['login']) || !$_SESSION['admin']){
   $_SESSION['error'] = '<b>Error</b> - Please login to continue';
        header("Location: login.php");
}
$title = 'Add account';
$color = 'blue';
$active = array_fill(0,8,''); $active[7]='active';
include_once('sidepanel.php');
?>
  
        <div class="content">                                
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Account</h4>
                            </div>
                            <div class="content">
                                <form method="post" data-toggle = 'validator'>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php
                                                $username = '';
                                                $password = '';
                                                $fname = '';
                                                $lname = '';
                                                $formerror = '';
                                                if(isset($_POST['btnAdd']))
                                                {
                                                    $username = $_POST['uname'];
                                                    $password = $_POST['password'];
                                                    $fname = $_POST['fname'];
                                                    $lname = $_POST['lname'];
                                                    $admin = (isset($_POST['admin']))? 1 : 0;
                                                    $query = mysqli_query($con, "SELECT * FROM accounts where username = '".mysqli_real_escape_string($con, $_POST['uname'])."'") or die(mysqli_error($con));
                                                    if(mysqli_num_rows($query) == 0)
                                                    {
                                                        $sql = "INSERT INTO accounts
                                                                (admin, username, password, fname, lname)
                                                                VALUES
                                                                ($admin, '".mysqli_real_escape_string($con, $username)."', '".mysqli_real_escape_string($con, password_hash($password, PASSWORD_DEFAULT))."', '".mysqli_real_escape_string($con, $fname)."', '".mysqli_real_escape_string($con, $lname)."')";
                                                        @mysqli_query($con, $sql);
                                                        if(mysqli_error($con))
                                                            $_SESSION['error'] = '<b>Error</b> - Unable to add account.';
                                                        else
                                                        {
                                                            $URL = ($_SESSION['admin']) ? "accounts_admin.php" :"index.php";
                                                            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                                                            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';                                 
                                                        }
                                                    }
                                                    else
                                                    {
                                                        $_SESSION['error'] = '<b>Error</b> - Username already exist.';
                                                        $password = '';
                                                    }
                                                }
                                                if(isset($_SESSION['error']))
                                                {
                                                    showNotif('alert-danger', $_SESSION['error']);
                                                }
                                                unset($_SESSION['error']);
                                            ?>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name = "uname" pattern = '\S{6,}' data-error = "Must contain 6 characters" class="form-control" placeholder="Username" value='<?php echo $username; ?>' REQUIRED/>
                                               <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name = "password" pattern = '\S{6,}' data-error = 'Must contain 6 characters' class="form-control" placeholder="Password" required value='<?php echo $password; ?>'>
                                                 <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name = "fname" class="form-control" pattern = '^[^\s]+[\w\s]+[\w]*$' placeholder="First Name" required data-error = 'Must be valid and not empty' value='<?php echo $fname; ?>'>
                                                 <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name = "lname" class="form-control" pattern = '^[^\s]+[\w\s]+[\w]*$' data-error = 'Must be valid and not empty' placeholder="Last Name" required value='<?php echo $lname; ?>'>
                                                 <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Admin Account?</label>
                                                <input type="checkbox" name = "admin" class="form-control" id=admin value=1>
                                                 <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name = "btnAdd" class="btn btn-info btn-fill pull-right">Add Account</button>
                                    <div class="clearfix"></div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <style>
        input[type="checkbox"]
        {
            vertical-align:middle;
            width: 30px;
            height: 30px;
        }
    </style>
   <?php include_once('footer.php');?>
    
<script>
$('#').validator();
</script>