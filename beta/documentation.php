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
						<h4 class="title">Documentation</h4>
						<p class="category">Blah!</p>
					</div>
					<div class="content table-responsive table-full-width">
						<p class="content">
							&nbsp&nbsp&nbsp Lorem ipsum dolor sit amet, has ei eius consulatu referrentur, vis amet dicat ei, eos nulla mucius legimus an. Sensibus periculis quaerendum sea ne, ne senserit iracundia mei, sale docendi petentium cu pri. Perpetua mediocrem mediocritatem sed an, iudico offendit luptatum eu has. Mei an ullum insolens delicatissimi, mel falli animal incorrupte ex. Id per prompta fabellas, vitae epicuri pertinax eam eu, per mollis detracto suscipiantur no. Id has vitae nostro dicunt.

							Mea no elit atqui. Ei dicam moderatius mei. No quo malis falli malorum. Vix te duis efficiantur, melius alienum sed te. Quod philosophia ne mea, nostrum volutpat conceptam his eu, in wisi exerci animal nec. Per nibh omnes scribentur no.

							Has ad stet errem interesset. Sea et quod populo, errem appellantur ea qui, esse vocibus interpretaris eos no. Soleat equidem omittam mel cu. Te summo tincidunt complectitur usu.

							Ius integre lucilius te, dicta delicata cotidieque cum eu. Mel ad persius constituto persequeris. Quo ei enim equidem. Sit impedit eligendi partiendo no.

							No sit movet nobis, at nec ipsum iudicabit, ad debet feugiat voluptua pro. Duo te error doctus, te deleniti accusamus sed. Decore utroque contentiones vim eu. Utinam aliquid at nec. No has timeam iracundia euripidis, vel essent ponderum erroribus in, vocibus mandamus delicatissimi his ad.
						</p>
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
						<div class ='content'><p style ='text-align:justify'>The quick brown fox jumps over the lazy dogs.
							The quick brown fox jumps over the lazy dogs.
							The quick brown </p>
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
