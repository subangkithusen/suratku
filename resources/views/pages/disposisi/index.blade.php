@extends('layouts.app2')

@section('konten')
<div class="row">
	<div class="col-lg-12 col-12">
		 <div class="card" style="padding: 10px">

		 	<!-- open datdatable -->
		 	<table id="example" class="table table-striped table-bordered" style="width:100%">
		 		<thead>
		            <tr>
		                <th>Name</th>
		                <th>Position</th>
		                <th>Office</th>
		                <th>Age</th>
		                <th>Start date</th>
		                <th>Salary</th>
		            </tr>
       			 </thead>
       			 <tbody>
			            <tr>
			                <td>Tiger Nixon</td>
			                <td>System Architect</td>
			                <td>Edinburgh</td>
			                <td>61</td>
			                <td>2011/04/25</td>
			                <td>$320,800</td>
			            </tr>
			     </tbody>
		 	</table>



		 	<!-- end data table -->
				

		 </div>
	</div>	
</div>

@endsection
@section('js')

 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
 <script type="text/javascript">
 	$(document).ready(function() {
  		$('#example').DataTable();
	});
 </script>

@endsection