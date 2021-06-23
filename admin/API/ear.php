<?php require_once('API/connect.php')
?>
<?php 

	$sqll = "SELECT  * from bill ";
	if (mysqli_query($conn, $sqll))
	{
		echo "";
	}
	else
	{
		echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
	}
	$result = mysqli_query($conn, $sqll);
	$Total = 0;
	$Totals = 0;
	$number= 0;
	$count = '';
	if (mysqli_num_rows($result) > 0)
	{
	// output data of each row
	while($row = mysqli_fetch_array($result))
	{
		$Total += $row["Amout"];
		$Totals += $row["Total_Money"];
		$count .= $row["Total_Money"];
	}
	}
	$sqsll = "SELECT  * from product ";
	if (mysqli_query($conn, $sqsll))
	{
		echo "";
	}
	else
	{
		echo "Error: " . $sqsll . "<br>" . mysqli_error($conn);
	}
	$result = mysqli_query($conn, $sqsll);
	$number= 0;
	$count = '';

	if (mysqli_num_rows($result) > 0)
	{
	// output data of each row
	while($row = mysqli_fetch_array($result))
	{
		$count .= $row["Pro_ID"] ."," ;
	}	
	}
	$cc = explode("," , $count);
	$numder = max($cc);

	$sll = "SELECT  * from bill ";
	if (mysqli_query($conn, $sll))
	{
		echo "";
	}
	else
	{
		echo "Error: " . $sll . "<br>" . mysqli_error($conn);
	}
	$result = mysqli_query($conn, $sll);
	$number=array();
	if (mysqli_num_rows($result) > 0)
	{
		// output data of each row
	while($row = mysqli_fetch_assoc($result))
	{
	$number[]=$row['Total_Money'];
	}
	}
	else
	{
	echo "0 results";
	}
	$number_formated= "[".implode(",",$number)."]";
//////////////////////////
	$sq = 'SELECT * from product';
	if (mysqli_query($conn, $sq)) {
	echo "";
	} else {
	echo "Error: " . $sq . "<br>" . mysqli_error($conn);
	}
	$count=1;
	$result = mysqli_query($conn, $sq);

	
?>