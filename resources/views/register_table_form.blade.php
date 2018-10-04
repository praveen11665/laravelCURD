<div class="row">
	<div class="col-lg-11">
		<h3>User List</h3>			
	</div>
	<div class="col-lg-1">
		<a href="/formView" class="btn btn-primary pull-right"> + New</a>			
	</div>
</div><hr>
<table class="table table-bordered" id="myTable">
	<thead>
		<tr>
			<td>Name</td>
			<td>Mobile</td>
			<td>Email</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($tableData as $users)
		<tr>
			<td>{{$users['name']}}</td>
			<td>{{$users['mobile']}}</td>
			<td>{{$users['email']}}</td>
			<td>
				<a href="/formView/{{$users['id']}}" class="btn btn-warning">Update</a>
				<a href="/formView-delete/{{$users['id']}}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>