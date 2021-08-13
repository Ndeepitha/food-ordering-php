1 HTML CODE:

<html>
<head>
<title>PHP</title>
</head>
<body bgcolor="Wheat">
<marquee bgcolor="DarkSalmon"><h2 style=color:DarkOliveGreen;"><b>WELCOME TO FABULOUS HOTEL</b></h2></marquee>
<h3 style=color:DarkViolet;"><b>FOOD ORDERING SYSTEM</b></h3>
<form action="11.php" method="post">
<font color="Crimson">
Name:<input type="text" name="name"><br><br>
email:<input type="text" name="email"><br><br>
Address:<br>
<textarea rows="3" cols="30" name="address" id="address"></textarea><br>
Mobile:<input type="text" name="mobile"><br><br>
veg:<select name="veg">
    <option value="meals">meals</option>
    <option value="idly">idly</option>
    <option value="Dosa">Dosa</option>
    <option value="pongal">pongal</option>
    <option value="chappathi">chappathi</option>
    <option value="poori">poori</option>
    <option value="none">none</option>
    </select><br><br>
Non_veg:<select name="non_veg">
    <option value="Chicken Biriyani">Chicken Biriyani</option>
    <option value="Mutton Biriyani">Mutton Biriyani</option>
    <option value="prawn Biriyani">prawn Biriyani</option>
    <option value="Crab Biriyani">crab Biriyani</option>
    <option value="parotta">parotta</option>
    <option value="Chicken Fried rice">Chicken Fried rice</option>
<option value="none">none</option>
    </select><br><br>
Veg_Quantity:<input type="text" name="veg_quantity"><br><br>
Non-Veg_Quantity:<input type="text" name="non_veg_quantity"><br><br>
Delivering_Type:<br><input type="radio" name="delivering_type" value="fast">Fast<br>
       <input type="radio" name="delivering_type" value="superfast">superfast<br><br>
Feedback:<br>
<textarea rows="3" cols="30" name="feedback" id="address"></textarea><br><br>
<input type="submit" name="submit" value="ORDER NOW">
</form>
</body>
</html>

3.2 PHP CODE:

<?php
mysql_connect("localhost","root","") or die ("not connected");
mysql_select_db("fabu")or die("no db found");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$veg=$_POST['veg'];
$non_veg=$_POST['non_veg'];
$veg_quantity=$_POST['veg_quantity'];
$non_veg_quantity=$_POST['non_veg_quantity'];
$delivering_type=$_POST['delivering_type'];
$feedback=$_POST['feedback'];
$query="insert into foo(name,email,address,mobile,veg,non_veg,veg_quantity,non_veg_quantity,delivering_type,feedback)values('$name','$email','$address','$mobile','$veg','$non_veg','$veg_quantity','$non_veg_quantity','$delivering_type','$feedback')";
if(mysql_query($query))
{
echo "<h2>THANK YOU FOR ORDERING.....!!!!!</h2>";
echo "<h2>YOUR FOOD WILL REACH YOU SOONNNNN!!!.....</h2>";
}
}
?>
