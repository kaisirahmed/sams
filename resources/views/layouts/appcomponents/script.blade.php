<script src="{{ asset('assets/plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	
<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<!-- <script src="{{ asset('assets/plugins/morris/raphael.min.js') }}"></script>
<script src="{{ asset('assets/plugins/morris/morris.js') }}"></script> -->
<script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
<script src="{{ asset('assets/js/dashboard-v2.min.js') }}"></script>
<script src="{{ asset('assets/js/apps.min.js') }}"></script>

<!-- ================== BEGIN DATATABLES JS ================== -->
<script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
<script>

	$(function() {
		
		$(document).ready(function () {
			$(".selectpickerDepartments").select2();
			$(".selectpickerNationality").select2();
			
			$('#dob').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true
			}); 
			
			$('#employmentDate').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true
			}); 
			$("#timepickercheckin").datetimepicker({format:"HH:mm A"});
			$("#timepickercheckout").datetimepicker({format:"HH:mm A"});

			$("#datepicker-inline").datepicker({todayHighlight:!0})

			$(".input-daterange").datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true
			});
			$(".filter-daterange").datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true
			});
		});
		 
	})


	function confirmDelete(Id) { 
		swal({
		title: "Are you sure to delete?",
		text: "",
		type: "warning",
		showCancelButton: true,
		cancelButtonText: "No",
		confirmButtonColor: "#1ed49c",
		confirmButtonText: "Yes",
		closeOnConfirm: false
		},
		function(isConfirm){
			if (isConfirm) {
				document.getElementById('delete-form-'+Id).submit();

				swal({
					title: "Processing..",
					showConfirmButton: false,
					showCancelButton: false,
				});
			}
		});
	}
        
    </script>
<!-- ================== BEGIN DATATABLES BUTTONS JS ================== -->
<script src="{{ asset('assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/js/table-manage-buttons.demo.min.js') }}"></script>
<!-- ================== BEGIN DATATABLES BUTTONS JS ================== -->
<!-- <script src="{{ asset('assets/js/table-manage-responsive.demo.min.js') }}"></script> -->
<script src="{{ asset('assets/js/apps.min.js') }}"></script>
<!-- ================== END DATATABLES JS ================== -->