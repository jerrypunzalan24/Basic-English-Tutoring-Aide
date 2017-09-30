<?php
include_once('connectDB.php');
$title = 'Add account';
$color = 'orange';
$active = array_fill(0,8,''); 
$active[0]='active';
include_once('sidepanel.php');
if(!$_SESSION['admin'] || !$_SESSION['login'])
	header("Location: index.php");
if(!isset($_GET['id']))
	header("Location: index.php");
$query = mysqli_query($con, "SELECT * FROM lessons WHERE id = {$_GET['id']}");
if(mysqli_num_rows($query) == 0){
	$_SESSION['error'] = '<b>Error</b> - Lesson id not found';
	header("Location: lessons.php");
}
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
$lessonName = '';
$gameType = '';
$lessonNumber = 0;
while($row = mysqli_fetch_assoc($query)){
	$lessonNumber = $row['lesson_no'];
	$lessonName = $row['lesson_name'];
	$gameType = $row['game_type'];
}
?>
<div class ='content'>
	<div class ='card'>
		<div class ='content'>
			<form method ='post'>
				<div class ='form-group'>
					<label>Lesson Number</label>
					<input type ='text' class ='form-control' name = 'lessonNumber' pattern = '[0-9]+' placeholder = 'Lesson Number' value ='<?php echo $lessonNumber; ?>' REQUIRED/>
				</div>
				<div class ='form-group'>
					<label>Lesson Name</label>
					<input type ='text' class ='form-control' name = 'lessonName' placeholder = 'Lesson Name' value ='<?php echo $lessonName; ?>' REQUIRED/>
				</div>
				<div class ='form-group'>
					<label>Game Type</label>
					<input type ='text' class ='form-control' name ='gameType' placeholder = 'Game Type' value = '<?php echo $gameType; ?>' REQUIRED/>
				</div>
				<div class ='form-group'>
					<div class = 'col-md-4'>
						<input type ='submit' class ='btn btn-primary btn-fill pull-left' name = 'submit' value = 'Edit Lesson'>
					</div>
				</div>
				<div class ='clearfix'></div>
			</form>
			<?php 
			if(isset($_POST['submit'])){
				$lessonNumber = mysqli_real_escape_string($con, $_POST['lessonNumber']);
				$lessonName = mysqli_real_escape_string($con, $_POST['lessonName']);
				$gameType = mysqli_real_escape_string($con, $_POST['gameType']);
				$query = mysqli_query($con, "SELECT * FROM lessons WHERE lesson_no = '{$lessonNumber}'");
				$origLesson = 0;
				while($row = mysqli_fetch_assoc($query))
					$origLesson = $row['lesson_no'];
				if(mysqli_num_rows($query) >= 1 && $lessonNumber != $origLesson)
					$_SESSION['error'] = 'Lesson ID already exists';
				else{
					mysqli_query($con, "UPDATE lessons SET lesson_no = {$lessonNumber}, lesson_name = '{$lessonName}', game_type ='{$gameType}' WHERE id = {$_GET['id']}");
					$_SESSION['success'] = '<b>Success</b> - Lesson has been updated';
					$URL = "lessons.php";
					echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
					echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';    
				}
			}
			?>
		</div>
	</div>
</div>
<?php

include_once('footer.php');
?>