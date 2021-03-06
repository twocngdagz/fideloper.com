<div class="container">

	<h1>Users</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>email</th>
				<th>Created</th>
				<th>Last Updated</th>
			</tr>
		</thead>
		<tbody>
		@foreach( $users as $user )
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->created_at }}</td>
				<td>{{ $user->updated_at }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>

</div> <!-- /container -->