<html>
<head>

<title>Datatable Demo1 | Nightdecoder.com</title>

<link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
	$('#employee-grid').dataTable( {
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": "data_table_json.php"
	} );
} );
</script>
<style>
	div.container {
	margin: 0 auto;
	max-width:760px;
	}
</style>
</head>
<body>
	<div class="container">
		<table id="employee-grid"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
						<thead>
							<tr>
								<th>Employee name</th>
								<th>Salary</th>
								<th>Age</th>
							</tr>
						</thead>
		</table>
	</div>
</body>
</html>
<!-- <script type="text/javascript" language="javascript" >
			$(document).ready(function() {
				var dataTable = $('#employee-grid').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"data_tableddd.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".employee-grid-error").html("");
							$("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#employee-grid_processing").css("display","none");
							
						}
					}
				} );
			} );
</script> -->

