<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminassets/js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminassets/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminassets/js/adminlte.min.js')}}"></script>

<script>
	$(function(){
		$('.nav a').filter(function(){return this.href==location.href}).parent().addClass('activee').siblings().removeClass('activee')
		$('.nav a').click(function(){
			$(this).addClass(' activee').siblings().removeClass(' activee')	
		})
	});


</script>



@yield('customscripts')