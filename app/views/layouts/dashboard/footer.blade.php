<div class="navbar navbar-default navbar-fixed-bottom footer" style="background-color: #284033">
	<center style="padding-top:10px">&copy &nbsp ROBOTIC LLC. </center>
</div>

 <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->



{{HTML::script('assets/js/jquery.js')}}
{{HTML::script('assets/js/jquery-ui.min.js')}}
{{HTML::script('assets/js/jquery.datetimepicker.js')}}
{{HTML::script('assets/js/bootstrap.min.js')}}


<!-- jQuery 2.2.3 -->
{{HTML::script('plugins/jQuery/jquery-2.2.3.min.js')}}

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
{{HTML::script('bootstrap/js/bootstrap.min.js')}}
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
{{HTML::script('plugins/morris/morris.min.js')}}
<!-- Sparkline -->
{{HTML::script("plugins/sparkline/jquery.sparkline.min.js")}}
<!-- jvectormap -->
{{HTML::script("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}
{{HTML::script("plugins/jvectormap/jquery-jvectormap-world-mill-en.j")}}
<!-- jQuery Knob Chart -->
{{HTML::script("plugins/knob/jquery.knob.js")}}
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
{{HTML::script("plugins/daterangepicker/daterangepicker.js")}}
<!-- datepicker -->
{{HTML::script("plugins/datepicker/bootstrap-datepicker.js")}}
<!-- Bootstrap WYSIHTML5 -->
{{HTML::script("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}
<!-- Slimscroll -->
{{HTML::script("plugins/slimScroll/jquery.slimscroll.min.js")}}
<!-- FastClick -->
{{HTML::script("plugins/fastclick/fastclick.js")}}
<!-- AdminLTE App -->
{{HTML::script("dist/js/app.min.js")}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{HTML::script("dist/js/pages/dashboard.js")}}
<!-- AdminLTE for demo purposes -->
{{HTML::script("dist/js/demo.js")}}

<script>
	$( "#datepicker" ).datepicker({inline: true,
		format:'d/m/Y'});


	$('#datetimepicker1').datetimepicker({
	datepicker:false,
	format:'H:i',
	step:5});
</script>