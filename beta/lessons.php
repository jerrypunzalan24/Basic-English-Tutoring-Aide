<!doctype html>
<?php
session_start();
include_once('connectDB.php');

if(!isset($_SESSION['login'])){
	$_SESSION['error'] = '<b>Error</b> - Please login to continue';
	header("Location: login.php");
}
$title = 'Lesson';
$color= 'orange';
$active = array_fill(0,8,''); $active[3]='active';
include_once('sidepanel.php');
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
?>
<?php if($_SESSION['admin']){ ?>
<link href = '//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css' rel ='stylesheet'/>
<link href = 'https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css' rel = 'stylesheet'/>
<link href ='https://cdn.datatables.net/1.10.15/css/dataTables.semanticui.min.css' rel = 'stylesheet'/>
<?php }?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Basic English Lessons</h4>
					</div>
					<div class="content table-responsive table-full-width" <?php if($_SESSION['admin']) { echo "style ='padding-left:50px'"; }?>>
						<?php
						function showModal($message, $idName, $location){
							echo "<div class=\"modal\" id=\"{$idName}\" tabindex=\"1\" role=\"dialog\">";
							echo "<div class=\"modal-dialog\">";
							//<!-- Modal content-->
							echo "<div class=\"modal-content\" id=\"{$idName}\">";
							echo "<div class=\"modal-header\">";
							echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
							echo "<h4 class=\"modal-title\">Confirm Delete</h4>";
							echo "</div>";

							echo "<div class=\"modal-body\">";
							echo $message;
							echo "</div>";

							echo "<div class=\"modal-footer\">";
							echo "<form method = 'POST' action ='{$location}'>";
							echo "<input type = 'submit' name = 'submit' value ='Yes'class=\"btn btn-danger\"/>
                                              </form>";
							echo "<a href=\"#\" data-dismiss=\"modal\" class=\"btn btn-info\" onclick=\"$(\"#{$idName}\").modal(\"hide\");\">No</a>";
							echo "</div>";
							echo "</div>";

							echo "</div>";
							echo "</div>";
						}
						?>
						<?php if($_SESSION['admin']){?>
						<a href='add_lesson.php' class='btn btn-info btn-fill pull-right'>Add Lesson</a>
						<?php } ?>
						<?php if($_SESSION['admin']){
	echo "<table class=\"table-hover table-striped ui celled table\" id = 'lessonTable'>";
}
						else{ echo "<table class=\"table table-hover table-striped\">";}?>

						<thead>
							<th>Lesson Number</th>
							<th>Name</th>
							<?php if(!$_SESSION['admin']){?>
							<th>Score</th>
							<th>Status</th>
							<?php }?>
							<th>Game Type</th>
							<?php 
							if($_SESSION['admin']){
							?>
							<th>Action</th>
							<?php
							}
							?>
						</thead>
						<tbody>
							<?php
							$query = mysqli_query($con, "SELECT * FROM lessons");
							while ($row = mysqli_fetch_array($query))
							{
								echo '<tr>';
								if(!$_SESSION['admin']){
									$userScore = 0;
									echo '<td>' . $row['lesson_no'] . '</td>';
									echo '<td>' . $row['lesson_name'] . '</td>';
									$fetchComplete = mysqli_query($con, "SELECT * FROM complete_lesson WHERE lesson_id = {$row['lesson_no']} AND user_id = {$_SESSION['id']}") or die(mysqli_error($con));
									if(mysqli_num_rows($fetchComplete) != 0){
										while($row1 = mysqli_fetch_assoc($fetchComplete))
											$userScore = $row1['score'];
									}
									echo "<td>{$userScore}/4</td>";
									echo '<td>' . (($userScore == 4)? "Complete" :"Incomplete"). '</td>';
									echo '<td>' . $row['game_type'] . '</td>';
								}
								else{
									$edit = "edit_lesson.php?id=".$row['id'];
									$delete = "delete_lesson.php?id=".$row['id'];
									echo "<td>{$row['lesson_no']}</td>";
									echo "<td>{$row['lesson_name']}</td>";
									echo "<td>{$row['game_type']}</td>";
									echo "<td><button class ='btn btn-primary btn-fill' onclick = \"window.location.href='{$edit}'\">
                                                <span class ='glyphicon glyphicon-wrench'></span>
                                                Edit
                                                </button>&nbsp&nbsp&nbsp
                                                <a href=\"#\" class ='btn btn-danger btn-fill' onclick=\"$('#dialog_{$row['id']}').modal('show');\" role=\"button\" class=\"btn-show-modal\" title=\"Delete?\">
                                                <span class ='glyphicon glyphicon-remove'></span>Delete</a></td>";
									showModal("<p>Are you sure you want to delete this record?</p>", "dialog_{$row['id']}", $delete);

								}
								echo '</tr>';
							}


							?>
						</tbody>
						</table>

				</div>
			</div>
		</div>

	</div>
</div>
</div>

<?php include_once('footer.php');?>