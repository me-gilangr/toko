<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Toko Onlen - Halaman Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('backend') }}/other/ionicons/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
	<link href="{{ asset('backend') }}/other/google-font/source-sans-pro.css" rel="stylesheet">
	<!-- Toastr -->
	<link rel="stylesheet" href="{{ asset('backend') }}/plugins/toastr/toastr.min.css">

  <!-- Custom -->
  <link rel="stylesheet" href="{{ asset('backend') }}/custom/neon.css">
  

	<style>
		.flat {
			border-radius: 0px;
		}
		
		.card-flat {
			border-radius: 0px;
		}
	</style>

	@yield('css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('backend.layouts.header')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-info sidebar-no-expand">
    <!-- Brand Logo -->
    <a href="{{ asset('backend') }}/index3.html" class="brand-link navbar-info">
      <img src="{{ asset('') }}images/logo.jpg"
					alt="The Logo"
					class="brand-image img-circle elevation-3"
					style="opacity: .8; margin-left: 0px;">
      <span class="brand-text font-weight-light">Toko Onlen</span>
    </a>
		@include('backend.layouts.sidebar')
  </aside>

  <div class="content-wrapper"> 
		
    <section class="content-header p-2">
      <div class="container-fluid">
				@yield('content-header')
        {{-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Advanced Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div> --}}
      </div>
		</section>
		
    <section class="content">
			<div class="container-fluid">
				<div class="row">
					@yield('content')
				</div>
			</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
	
	@include('backend.layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="{{ asset('backend') }}/plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="{{ asset('backend') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('backend') }}/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend') }}/dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });

  })
</script>

<!-- Toastr -->
<script src="{{ asset('backend') }}/plugins/toastr/toastr.min.js"></script>
<script>
	toastr.options = {
		"closeButton": true,
		"debug": false,
		"newestOnTop": true,
		"progressBar": true,
		"positionClass": "toast-top-right",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	};
</script>

<script>
	function toastError(message) {
		toastr.error(message, "Peringatan");
	}
	
	function toastSuccess(message) {
		toastr.success(message, "Berhasil");
	}
	
	function toastWarning(message) {
		toastr.warning(message, "Perhatian");
	}
</script>

@if (session('success'))
<script>
	toastr.success("{{ session('success') }}", "Berhasil");
</script>
@endif

@if (session('error'))
<script>
	toastr.error("{{ session('error') }}", "Peringatan");
</script>
@endif

@if (session('warning'))
<script>
	toastr.warning("{{ session('warning') }}", "Perhatian");
</script>
@endif

@if (session('info'))
<script>
	toastr.info("{{ session('info') }}", "Info");
</script>
@endif


@yield('script')

</body>
</html>
