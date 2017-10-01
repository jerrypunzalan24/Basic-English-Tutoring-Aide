<!doctype html>
<?php 
session_start();
include_once('connectDB.php');
if(!isset($_SESSION['login'])){
	$_SESSION['error'] = '<b>Error</b> - Please login to continue';
	header("Location: login.php");
}
$title = 'Documentation';
$color = 'blue';
$active = array_fill(0,8,''); $active[5]='active';
include_once('sidepanel.php');
?>
<style>
	.row-eq-height{
		display:flex;
	}
	.card-footer{
		position:absolute;
		bottom:0;
	}
</style>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h3 class="title"><b>Game Engine</b></h3>
						<hr>
					</div>
					<div class="content " style = 'padding-top:0px'>
						<h3 class ='header'><b>Monogatari</b></h3>
						<hr/>
						<div class ='content'>
							<p style = 'text-align:justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Built to bring Visual Novels to the modern web and take them to the next level, making it easy for anyone to create and distribute Visual Novels in a simple way so that anyone can enjoy them on pretty much anywhere, create games with features that no one has ever imagined... it is time for Visual Novels to Evolve."</p>
							<p>Documentation: <a href = 'https://monogatari.io/documentation/'>https://monogatari.io/documentation/</a> </p>
						</div>
					</div>
					<div class="content " style = 'padding-top:0px'>
						<h3 class ='header'><b>Unity</b></h3>
						<hr/>
						<div class ='content'>
							<p style = 'text-align:justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Unity is a cross-platform game engine developed by Unity Technologies, which is primarily used to develop video games and simulations for computers, consoles and mobile devices. First announced only for OS X, at Apple's Worldwide Developers Conference in 2005, it has since been extended to target 27 platforms."</p>
							<p>Documentation: <a href = 'https://unity3d.com/learn/documentation'>https://unity3d.com/learn/documentation</a> </p>
						</div>
					</div>
				</div>
				<div class ='card'>

					<h3 class ='header'><b>Acknowledgement</b></h3>
					<hr/>
					<div class ='content'>
						<p style = 'text-align:justify'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Special thanks to Mr. Braile Magcalas for letting me use his music for my game. You can check his soundcloud account right here. <a href = 'https://soundcloud.com/seven-shrimps'>https://soundcloud.com/seven-shrimps</a> and <a href = 'https://soundcloud.com/brailemcwaine/tracks'>https://soundcloud.com/brailemcwaine/tracks</a></p>
						</p>
					<p>And also for Sonya's artwork for henrik: <a href = 'http://cloudnovel.net/Sonya'>http://cloudnovel.net/Sonya</a></p>
				</div>

			</div>
		</div>
	</div>
	<div class ='row row-eq-height'>
		<!-- Alido -->
		<div class ='col-md-6' >
			<div class ='card' style ='height:90%'>
				<div class="content " style ='position:relative; height:100%;'>
					<img src="assets/img/about/alido.jpg" class ='img-responsive img-circle pull-left' width ='200' height ='200' style ='padding:2%'>
					<div class ='content=heading'><h4 class="title">Denisse Joyce Alido</h4>
						<p class ='category'>"Quote"</p>
					</div>
					<div class ='content'><p style ='text-align:justify'>Currently a third year BS Computer Science student and is involved with two organizations on her field. Key area is often in documenting. </p>
					</div>
					<div style ='clear:both'>
						<div class ='card-footer content'>
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
		<!--Bulatao-->
		<div class ='col-md-6' >
			<div class ='card' style ='height:90%'>
				<div class="content">
					<img src="assets/img/about/bulatao.jpg" class ='img-responsive img-circle pull-left' width ='200' height ='200' style ='padding:2%'>
					<div class ='content-heading'><h4 class="title">Chrystyn Gabrielle Bulatao</h4>
						<p class ='category'>"Quote"</p>
					</div>
					<!-- Fill up -->
					<div class ='content'><p style ='text-align:justify'>Cg is your typical girl. She likes to read books, watch movies, and listen to music. Learning and expanding her knowledge are things that she is passionate about. </p>
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
	<div class ='row row-eq-height'>
		<!-- Punzalan -->
		<div class ='col-md-6' >
			<div class ='card' style ='height:90%'>
				<div class="content" style ='position:relative; height:100%;'>
					<img src="assets/img/about/punzalan.jpg" class ='img-responsive img-circle pull-left' width ='200' height ='200' style ='padding:2%'>
					<div class ='content-heading'><h4 class="title">Jeremiah Punzalan</h4>
						<p class ='category'>"Quote"</p>
					</div>
					<!-- Fill up -->
					<div class ='content'><p style ='text-align:justify'>An 18 year old 3rd year student studying Bachelor Science in Computer Science(BSCS) in University of the East. </p>
					</div>
					<div style ='clear:both'>
						<div class ='card-footer content'>
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
		<!--Vargas-->
		<div class ='col-md-6' >
			<div class ='card' style ='height:90%'>
				<div class="content"  >
					<img src="assets/img/about/vargas.jpg" class ='img-responsive img-circle pull-left' width ='200' height ='200' style ='padding:2%'>
					<div class ='content-heading'><h4 class="title">Christian Joseph Vargas</h4>
						<p class ='category'>"Quote"</p>
					</div>
					<!-- Fill up -->
					<div class ='content'><p style ='text-align:justify'>
						</p>
					</div>
					<div style ='clear:both'>
						<div class ='content'>
							<hr>
							<div class="footer" >
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

<?php include_once('footer.php');?>
