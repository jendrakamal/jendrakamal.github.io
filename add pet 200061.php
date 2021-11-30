<!DOCTYPE html>
<html>
<head>
	
	<title>Jendra Petclinic</title>
</head>
<body>
  <h1>Jendra pet clinic</h1><hr>
  <h3>From Add Pet</h3>
  <form method="post" action="create_pet_200061.php">
  	<table>
  		<tr>
  			<td>Name</td>
  			<td>
  				<input type="text" name="pet_name_200061" required>
  			</td>
  		</tr>
  		<tr>
  			<td>Type</td>
  			<td><select name="pet_type_200061" required>
  				<option value="">Choose</option>
  				<option value="Cat">Cat</option>
  				<option value="Dog">Dog</option>
  				<option value="Reftil">Reftil</option>
  				<option value="Bird">Bird</option>
  				<option value="Rodent">Rodent</option>
  			</select> </td>
  		</tr>
  		<tr>
  			<td>Gender</td>
  			<td>
  				<input type="radio" name="pet_gender_200061" value="Male"required>male
  				<input type="radio" name="pet_gender_200061" value="Female"required>Female
  			</td>
  		</tr>
  		<tr>
  			<td>Age</td>
  			<td><input type="number" name="pet_age_200061"required>
  			</td>
  		</tr>
  		<tr>
  			<td>Owner</td>
  			<td><input type="text" name="pet_owner_200061"required>
  			</td>
  		</tr>
  		<tr>
  			<td>Addres</td>
  			<td><textarea  name="pet_addres_200061"required></textarea>
  			</td>
  		</tr>
  		<tr>
  			<td>Phone</td>
  			<td><input type="text" name="pet_phone_200061"required>
  			</td>
  		</tr>
  		<tr>
  			<td></td>
  			<td>
  				<input type="submit" name="save" value="save">
  				<input type="reset" name="reset" value="reset">

  			</td>
  		</tr>
  	</table>
  </form>
</body>
</html>