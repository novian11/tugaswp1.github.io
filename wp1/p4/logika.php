<!DOCTYPE html>
<html>
<head>
	<title> Operator Logika</title>
<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/css/bootstrap.min.css">

</head>
<body>
	<h1>logika AND</h1>
</body>
	<table class= "table table-hover">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>TRUE</td>
				<td>TRUE</td>
				<td><?= TRue && TRUE ?></td>
			</tr>
		</tbody>

		</thead>

		<tbody>
			<tr>
				<td>FALSE</td>
				<td>FALSE</td>
				<td><?= FALSE && FALSE ?></td>
			</tr>
		</tbody>
	</table>
</body>

<h1>logika OR</h1>
</body>
	<table class= "table table-hover">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>FALSE</td>
				<td>TRUE</td>
				<td><?= FALSE || TRUE ?></td>
			</tr>
		</tbody>

		</thead>

		<tbody>
			<tr>
				<td>FALSE</td>
				<td>FALSE</td>
				<td><?= FALSE || FALSE ?></td>
			</tr>
		</tbody>
	</table>