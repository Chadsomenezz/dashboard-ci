<div class="container">

	<table class="table">
		<thead>
			<tr>
				<th><abbr title="ID">Id</abbr></th>
				<th>First Name</th>
				<th><abbr title="Email">Email</abbr></th>
				<th><abbr title="Password">Password</abbr></th>
				<th><abbr title="Admin Status">Admin Status</abbr></th>
			</tr>
		</thead>

		<tbody>

		<?php foreach ($results as $result): ?>
			<tr>
				<td><?=$result->id;?></td>
				<td><?=$result->first_name;?></td>
				<td><?=$result->email;?></td>
				<td><?=$result->password;?></td>
				<td><?=$result->is_admin;?></td>
			</tr>
		<?php endforeach; ?>

		</tbody>

		<tfoot>
			<tr>
				<th><abbr title="ID">Id</abbr></th>
				<th>First Name</th>
				<th><abbr title="Email">Email</abbr></th>
				<th><abbr title="Password">Password</abbr></th>
				<th><abbr title="Admin Status">Admin Status</abbr></th>
			</tr>
		</tfoot>

	</table>

</div>



