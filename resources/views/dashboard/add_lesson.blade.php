<?php
include_once('connectDB.php');
$title = 'Add account';
$color = 'orange';
$active = array_fill(0,8,''); 
$active[0]='active';
include_once('sidepanel.php');
if(!$_SESSION['admin'] || !$_SESSION['login'])
	header("Location: index.php");
if(isset($_SESSION['error']))
{
    showNotif("alert-danger", $_SESSION['error']);
    unset($_SESSION['error']);
}
if(isset($_SESSION['success']))
{
    showNotif("alert-success", $_SESSION['success']);
    unset($_SESSION['success']);
}
$lessonNumber = 0;
$lessonName = '';
$gameType = '';
?>

<div class ='content'>
	<div class ='card'>
		<div class ='content'>
			<form method ='post'>
					<div class ='form-group'>
					<label>Lesson Number</label>
					<input type ='text' class ='form-control' pattern = '[0-9]+' name = 'lessonName' placeholder = 'Lesson Name' value ='<?php echo $lessonNumber; ?>' REQUIRED/>
				</div>
				<div class ='form-group'>
					<label>Lesson Name</label>
					<input type ='text' class ='form-control' name = 'lessonName' placeholder = 'Lesson Name' value ='<?php echo $lessonName; ?>' REQUIRED/>
				</div>
				<div class ='form-group'>
					<label>Game Type</label>
					<input type ='text' class ='form-control' name ='gameType' placeholder = 'Game Type' value ='<?php echo $gameType;?>'REQUIRED/>
				</div>
				<div class ='form-group'>
					<div class = 'col-md-4'>
						<input type ='submit' class ='btn btn-primary btn-fill pull-left' name = 'submit' value = 'Add Lesson'>
					</div>
				</div>
				<div class ='clearfix'></div>
			</form>
			<?php 
			if(isset($_POST['submit'])){
				$lessonNumber = mysqli_real_escape_string($con, $_POST['lessonNumber']);
				$lessonName = mysqli_real_escape_string($con, $_POST['lessonName']);
				$gameType = mysqli_real_escape_string($con, $_POST['gameType']);
				mysqli_query($con, "INSERT into lessons(lesson_no, lesson_name, game_type) VALUES({$lessonNumber}'{$lessonName}','{$gameType}')") or die(mysqli_error($con));
				$_SESSION['success'] = '<b>Success</b> - Lesson has been added';
				$URL = "lessons.php";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';    
			}
			?>
		</div>
	</div>
</div>
<?php

include_once('footer.php');
?>