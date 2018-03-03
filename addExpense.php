<!DOCTYPE html>
<html>
<head>
	<title>Add Expense</title>
</head>
<body>



	<form method = "post" action = "selectExpense.php">
   
 	 <input type="text" name="firstname" placeholder="Enter $ Amount Here" >
  <br>
   <select>
   <option disabled>Choose Expense</option>
  <option >Food</option>
  <option >Rent</option>
  <option >Miscellaneous</option>
</select>
  <br>
<select>
   <option disabled>Choose Month</option>
  <option >January</option>
  <option >February</option>
  <option >March</option>
  <option >April</option>
  <option >May</option>
  <option >June</option>
  <option >July</option>
  <option >August</option>
  <option >September</option>
  <option >October</option>
  <option >November</option>
  <option >December</option>
</select>
  <br>
  <input type="submit" value="Submit">
	</form> 

</body>
</html>