<script type="text/javascript">
     
    $(function(){
 
		$("#data-table").DataTable({
			"responsive":true,
	        "deferRender": true,
            "ordering": true,
		  	dom: 'lBfrtip',
            "columnDefs": [{
                "visible": true,
                "targets": -1
            }],
        	buttons: [
            	{
                	extend: 'copyHtml5',
                	exportOptions: {
                        columns: [ ':visible' ]
                    }
                },
                {
                	extend: 'excelHtml5',
                	exportOptions: {
                        columns: [ ':visible' ]
                    }
                },
                {
                	extend: 'pdf',
                	exportOptions: {
                        columns: [ ':visible' ]
                    }
                },
                {
                	extend: 'print',
                    autoPrint: true,
                    customize: function (win) {
                        $(win.document.body).children("h1:first").remove();
                        $(win.document.body)
                            .css( 'font-size', '10pt' )
                            .prepend(
                                '<span align="center" style="font-size:15px;">{{ config("app.name") }}</span><br>'
                            );

                        $(win.document.body)
                            .css( 'font-size', '10pt' )
                            .append(
                                '<br><h6 align="center">Powered By: Shemrock South Park.</h6>'
                            );

                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    },
                	exportOptions: {
                        columns: [ ':visible' ]
                    }
                },
                'colvis'
        	],
        	"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],	
	    } );
	});
</script>

 