<!DOCTYPE html>
<html>
<head>
	<title>pet Clinic Jendra</title>
</head>
<body>
	<h1>Doctor</h1>
	<h3>Form Add Doctor</h3>
	<form method="post" action="create_doctor_200061.php">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="doctor_name_200061" required></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="doctor_gender_200061" value="Male" required> Male 
					<input type="radio" name="doctor_gender_200061" value="Female" required> Female 
			</td>
			</tr>
		<tr>
				<td>Addreas</td>
				<td><textarea name="doctor_address_200061" required></textarea></td>
			</tr>	
			<tr>
				<td>Phone</td>
				<td><input type="text" name="doctor_phone_200061" required></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="save" value="SAVE">
					<input type="reset" name="reset" value="RESET">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>