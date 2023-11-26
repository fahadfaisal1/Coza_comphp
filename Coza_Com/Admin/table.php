<!DOCTYPE html>
<html>
<head>
	<title>Beautiful Table</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			color: #333;
			font-family: Arial, sans-serif;
			font-size: 14px;
			text-align: left;
		}
		th {
			background-color: #4CAF50;
			color: #FFF;
			font-weight: bold;
			padding: 10px;
			text-align: left;
			vertical-align: middle;
		}
		td {
			padding: 10px;
			border: 1px solid #CCC;
			vertical-align: middle;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		tr:hover {
			background-color: #e0e0e0;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>John Doe</td>
				<td>johndoe@example.com</td>
				<td>1234567890</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Jane Smith</td>
				<td>janesmith@example.com</td>
				<td>0987654321</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Mark Johnson</td>
				<td>markjohnson@example.com</td>
				<td>9876543210</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Sarah Williams</td>
				<td>sarahwilliams@example.com</td>
				<td>0123456789</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
