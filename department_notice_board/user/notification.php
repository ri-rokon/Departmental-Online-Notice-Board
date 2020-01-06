<?php 
$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."' ORDER BY Date DESC ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'><center>NO ANY NOTICE FOR YOU</center></h2>";
}
else
{
?>
<!DOCTYPE html>
<head>
<title>view notice</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div id="body">
	<table width="80%" border="1">
    <tr>
    <td><b>subject</b></td>
    <td><b>Date</b></td>
    <td><b>Notice</b></td>
    </tr>
    <?php
	while($row=mysqli_fetch_array($q))
	{
		?>
        <tr>
        <td><?php echo $row['subject'] ?></td>
        <td><?php echo $row['Date'] ?></td>
        <td><a href="../admin/images/<?php echo $row['subject'] ?>/<?php echo $row['Description'] ?>" target="_blank">View notice</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>

<?php }?>