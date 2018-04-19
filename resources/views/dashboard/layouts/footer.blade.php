</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{asset('assets/js/bootstrap-checkbox-radio-switch.js')}}"></script>

<!--  Charts Plugin -->
<script src="{{asset('assets/js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{asset('assets/js/light-bootstrap-dashboard.js')}}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src = '{{asset('assets/js/validator.js')}}'></script>
<!--DataTable-->
<script src = 'https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js' type = 'text/javascript'></script>
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js' type ='text/javascript'></script>
<script src ='https://cdn.datatables.net/1.10.15/js/dataTables.semanticui.min.js'></script>

<script>
	$(".main-panel").mCustomScrollbar({
		setWidth: 3%;
		setHeight: 30px;
	});
</script>
<script>
	$(document).ready(function() {
		$('#table1').DataTable();
	} );
</script>
</html>
