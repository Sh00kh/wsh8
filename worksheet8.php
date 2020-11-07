<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Generate Report</title>
</head>

<body>
	<form method="GET" action=""   id="f"  >      
Student name: <input type="text" name="sn" id="sn" >
		<?php if(isset($_GET['submit'])){if(empty($_GET['sn'])){echo "Please Enter The Name! ";}}?><br> 
Student ID: <input type="text" name="si" id="si"> 
		<?php if(isset($_GET['submit'])){if(empty($_GET['si'])){echo "Please Enter The ID! ";}}?><br>
Quiz 1 Mark: <input type="number" name="q1" id="q1"  placeholder="0" min="0" max="5" >
		<?php if(isset($_GET['submit'])){if(empty($_GET['q1'])){echo "Please Enter Quiz 1 Mark! ";}}?><br>
Quiz 2 Mark: <input type="number" name="q2" id="q2" placeholder="0" min="0" max="5"  minlength="10" >
		<?php if(isset($_GET['submit'])){if(empty($_GET['q2'])){echo "Please Enter Quiz 2 Mark! ";}}?><br>
Assignment Mark: <input type="number" name="am" id="am" placeholder="0" min="0" > 
		<?php if(isset($_GET['submit'])){if(empty($_GET['am'])){echo "Please Enter Assignment Mark! ";}}?><br>
Midterm Mark: <input type="number" name="mm" id="mm" placeholder="0" min="0">
		<?php if(isset($_GET['submit'])){if(empty($_GET['mm'])){echo "Please Enter Midterm Mark! ";}}?><br>
Project Mark: <input type="number" name="pm" id="pm" placeholder="0" min="0">
		<?php if(isset($_GET['submit'])){if(empty($_GET['pm'])){echo "Please Enter Project Mark! ";}}?><br>
Final Exam Mark: <input type="number" name="fm" id="fm" placeholder="0" min="0">
		<?php if(isset($_GET['submit'])){if(empty($_GET['fm'])){echo "Please Enter Final Mark! ";}}?><br>
    <input type= "submit"  value="Generate Report" name="submit" class="g" >
    <input type="reset" value="Reset" name="Reset" class="r"><br>
		<br>
		<?php if(isset($_GET['submit'])){ ?>

		This the report of (<?php echo $_GET['sn'] ?>) student with ID(<?php echo $_GET['si'] ?>)
		<table border="1"> 
		<thead>
			<tr>
			<th> Quiz 1 </th>
			<th> Quiz 2 </th>
			<th> Assignment </th>
			<th> Midterm </th>
			<th> Project </th>
			<th> Final Exam </th>
			<th> Total </th>
			</tr>
		</thead>
		<tbody>
			<tr> 
			<td> <?php echo $_GET['q1'] ?> </td>
			<td> <?php echo $_GET['q2'] ?> </td>
			<td> <?php echo $_GET['am'] ?> </td>
			<td> <?php echo $_GET['mm'] ?> </td>
			<td> <?php echo $_GET['pm'] ?> </td>
			<td> <?php echo $_GET['fm'] ?> </td>
			<td> <?php echo $_GET['q1']+$_GET['q2']+$_GET['am']+$_GET['mm']+$_GET['pm']+$_GET['fm'] ?> </td>
			</tr>
		</tbody>
	</table>
		
		

</form>
	<?php } ?>
</body>
</html>