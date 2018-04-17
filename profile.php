<!doctype html>
<?php
session_start();
include_once('connectDB.php');
if(!isset($_SESSION['login'])){
	$_SESSION['error'] = '<b>Error</b> - Please login to continue';
	header("Location: login.php");
}
if($_SESSION['admin']){
	$_SESSION['error'] = '<b>Error</b> - Access denied';
	header("Location: index.php");
}
$title = 'Profile';
$color = 'purple';
$active = array_fill(0,8,''); $active[1]='active';
include_once('sidepanel.php');
?>
<style>
	.lead{
		font-size: 1.00em;
	}
</style>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4" style = 'margin-top:30px'>
				<div class="card card-user">
					<div class="image">
						<img src="assets/img/default-cover.png" >
					</div>
					<div class="content">
						<div class="author">
							<a href="#">
								<img class="avatar border-gray" src="data:image/jpeg;base64, <?php echo $_SESSION['image'];?>" height = '512' width = '512'alt="..."/>
								<h4 class="title"><?php echo $_SESSION['fname'] . " " . $_SESSION['lname'];?><br />
									<small><?php echo $_SESSION['uname'];?></small>
								</h4>
							</a>
						</div>
						<p class="description text-center">
							<?php echo $_SESSION['about'];?><br>
						</p>
					</div>
					<hr>
					<div class="text-center">
						<button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
						<button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
						<button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
					</div>
				</div>
			</div>
			<div class ='col-md-8' style ='margin-top: 0px; max-height:400px'>
				<div class ='card' style ='max-height:400px;'>
					<h4 class ='header'>Your Progress</h4>
					<?php $fetch_progress = mysqli_query($con, "SELECT * FROM complete_lesson INNER JOIN lessons ON complete_lesson.lesson_id = lessons.lesson_no WHERE user_id = {$_SESSION['id']}") or die(mysqli_error($con));?>
					<div style = 'max-height:330px; overflow-y:scroll'>
						<table class="table table-hover ">
							<thead>
								<th>Lesson Name</th>
								<th>Score</th>
								<th>Status</th>
								<th>Game</th>
								<th>Date Completed</th>

							</thead>

							<?php
							while($row = mysqli_fetch_assoc($fetch_progress)){
							?>
							<tbody>
								<?php 
								$date = date("F d, Y H:i:s", strtotime($row['date_modified']));
								$per = $row['score']/4 * 100;
								echo "<td><p class ='lead' >{$row['lesson_name']}<p></td>";
								echo "<td><p class = 'lead' >{$row['score']} ({$per}%)</p></td>";
								echo "<td>".(($row['completed'] == 1) ? "<p class ='lead' style = 'color:green'>Complete</p>" :"<p class ='lead' style  ='color:red'>Incomplete</p>")."</td>";
								echo "<td><p class ='lead'>{$row['game_type']}</p></td>";
								echo "<td><p class ='lead' >".(($row['date_modified'] == '0000-00-00 00:00:00')? "-" : $date)."</p></td>";
								?>
							</tbody>
							<?php
							}
							?>

						</table>
					</div>
				</div>
			</div>
			<div  class ='col-md-12'>
				<div class ='card'>
					<h3 class ='header'><b>Status</b></h3>

					<div class ='row'>
						<div class ='col-md-12'>

							<div class ='content'>

								<?php $fetch_completed = mysqli_query($con, "SELECT * FROM complete_lesson WHERE user_id = {$_SESSION['id']} AND completed = 1");
								?>
								<p class ='lead' style = 'font-size: 1.25em'>Lesson Completed</p>
								<div class ='progress'>
									<?php 
									$fetch_lessons = mysqli_query($con, "SELECT * FROM lessons");
									$get_per = (mysqli_num_rows($fetch_completed) / mysqli_num_rows($fetch_lessons)) * 100; 
									?>
									<div class ='progress-bar' role = 'progressbar' style ='width:<?php echo $get_per; ?>%; height: 100px' aria-valuenow='25' aria-valuemin = '0' aria-valuemax = '100'><?php echo "(".mysqli_num_rows($fetch_completed)."/".mysqli_num_rows($fetch_lessons).") ". number_format($get_per, 2);?>%</div>

								</div>

							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php');?>