<!doctype html>
<?php 
session_start();
include_once('connectDB.php');
if(!isset($_SESSION['login'])){
	$_SESSION['error'] = '<b>Error</b> - Please login to continue';
	header("Location: login.php");
}
$title = 'About';
$color = "green";
$active = array_fill(0,8,''); $active[6]='active';
include_once('sidepanel.php');
?>
<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class ='card'>
					<div class="content">
						<img src="assets/img/about/alido.jpg" class ='img-responsive img-circle pull-left' width ='200' height ='200' style ='padding:2%'>
						<div class ='content=heading'><h4 class="title">Denisse Joyce Alido</h4>
							<p class ='category'>"Quote"</p>
						</div>
						<div class ='content'><p>Currently a third year BS Computer Science student and is involved with two organizations on her field. Key area is often in documenting</p>
						</div>
						<div style ='clear:both'>
							<div class ='content'>
								<hr>
								<div class="footer">
									<div class="legend">
										<i class="fa fa-facebook"></i> Facebook
										<i class="fa fa-twitter"></i> Twitter
										<i class="fa fa-instagram"></i> Instagram
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class ='card'>
					<div class="content">
						<img src="assets/img/about/bulatao.jpg" class ='img-responsive img-circle pull-left' width ='200' height ='200' style ='padding:2%'>
						<div class ='content-heading'><h4 class="title">Chrystyn Gabrielle Bulatao</h4>
							<p class ='category'>"Quote"</p>
						</div>
						<!-- Fill up -->
						<div class ='content'><p>Cg is your typical girl. She likes to read books, watch movies, and listen to music. Learning and expanding her knowledge are things that she is passionate about. </p>
						</div>
						<div style ='clear:both'>
							<div class ='content'>
								<hr>
								<div class="footer">
									<div class="legend">
										<i class="fa fa-facebook"></i> Facebook
										<i class="fa fa-twitter"></i> Twitter
										<i class="fa fa-instagram"></i> Instagram
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class ='card'>
					<div class="content">
						<img src="assets/img/about/punzalan.jpg" class ='img-responsive img-circle pull-left' width ='200' height ='200' style ='padding:2%'>
						<div class ='content-heading'><h4 class="title">Jeremiah Punzalan</h4>
							<p class ='category'>"Quote"</p>
						</div>
						<!-- Fill up -->
						<div class ='content'><p>An 18 year old 3rd year student studying Bachelor Science in Computer Science(BSCS) in University of the East. Programming and learning more about programming is his passion.</p>
						</div>
						<div style ='clear:both'>
							<div class ='content'>
								<hr>
								<div class="footer">
									<div class="legend">
										<i class="fa fa-facebook"></i> Facebook
										<i class="fa fa-twitter"></i> Twitter
										<i class="fa fa-instagram"></i> Instagram
									</div>


								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<div class ='card'>
					<div class="content">
						<img src="assets/img/about/vargas.jpg" class ='img-responsive img-circle pull-left' width ='200' height ='200' style ='padding:2%'>
						<div class ='content-heading'><h4 class="title">Christian Joseph Vargas</h4>
							<p class ='category'>"Quote"</p>
						</div>
						<!-- Fill up -->
						<div class ='content'><p>The quick brown fox jumps over the lazy dogs.
							The quick brown fox jumps over the lazy dogs.
							The quick brown fox jumps over the lazy dogs.The quick brown fox jumps over the lazy dogs.The quick brown fox jumps over the lazy dogs.The quick brown fox jumps over the lazy dogs.The quick brown fox jumps over the lazy dogs.The quick brown fox jumps over the lazy dogs.</p>
						</div>
						<div style ='clear:both'>
							<div class ='content'>
								<hr>
								<div class="footer">
									<div class="legend">
										<i class="fa fa-facebook"></i> Facebook
										<i class="fa fa-twitter"></i> Twitter
										<i class="fa fa-instagram"></i> Instagram
									</div>


								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- End Main Content -->
<?php include_once('footer.php');
?>

