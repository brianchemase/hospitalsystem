
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Hospital name</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

        <!-- Datatables CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
                @include('reception.inc.header')
			<!-- /Header -->
			
			<!-- Sidebar -->
                @include('reception.inc.sidebar')
            
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <!-- Page Wrapper -->
            <div class="page-wrapper">
                @yield('content')
            
			<!-- /Page Wrapper -->

                <!-- Footer -->
                @include('reception.inc.footer')
				
				<!-- /Footer -->


            </div>
			<!-- /Page Wrapper -->


			
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
		
		<!-- Chart JS -->
		<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
		<script src="{{ asset('ssets/plugins/apexchart/chart-data.js') }}"></script>

        <!-- Datatables JS -->
		<script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script  src="{{ asset('assets/js/script.js') }}"></script>
		
    </body>
</html>