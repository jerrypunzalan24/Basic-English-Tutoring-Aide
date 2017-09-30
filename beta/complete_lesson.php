<?php
include_once('connectDB.php');
$currentDay = date("Y-m-d H:i:s");
$query = mysqli_query($con, "SELECT * FROM complete_lesson WHERE user_id = {$_GET['id']} AND lesson_id = {$_GET['lessonId']}") or die(mysqli_error($con));
$currentScore = 0;
$completed = ($_GET['score'] == 4)? 1 : 0;
if(mysqli_num_rows($query) == 0){
	mysqli_query($con, "INSERT INTO complete_lesson(user_id, lesson_id, completed, score) VALUES({$_GET['id']}, {$_GET['lessonId']}, {$completed}, {$_GET['score']})") or die(mysqli_error($con));
	?>
<?php
}
else{
	$fetchCurrentScore = mysqli_query($con, "SELECT * FROM complete_lesson WHERE user_id = {$_GET['id']} AND lesson_id = {$_GET['lessonId']}") or die(mysqli_error($con));
	while($row = mysqli_fetch_assoc($fetchCurrentScore)){
		$currentScore = $row['score'];
		
		if($currentScore < $_GET['score']){
			mysqli_query($con, "UPDATE complete_lesson SET score = {$_GET['score']}, completed = {$completed}, date_modified = '{$currentDay}' WHERE user_id = {$_GET['id']} AND lesson_id = {$_GET['lessonId']}") or die(mysqli_error($con));
		}
	}
}
?>
<script>
window.close();
</script>
