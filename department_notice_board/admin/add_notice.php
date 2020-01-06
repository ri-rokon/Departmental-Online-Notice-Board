<?php 
extract($_POST);
if(isset($save))
{

//image
$imageName=$_FILES['details']['name'];

foreach($user as $v)
		{
          $query="insert into notice values('','$v','$sub','$imageName',now())";
		  mysqli_query($conn,$query);
		}
//upload image

mkdir("images/$sub");
move_uploaded_file($_FILES['details']['tmp_name'],"images/$sub/".$_FILES['details']['name']);


$err="<font color='blue'> notice update successfully !!</font>";


}




?>

<h2>Add New Notice</h2>

		<form method="post" enctype="multipart/form-data">
		    <div id="body">
	<table width="100%" border="1">
    <tr style="text-align: center;">
    <td width="26%">Select Teacher </td>
    <td width="35%">Select Student</td>
    <td width="19%">select staff</td>
    </tr>
    </table>
    
</div>
			<table class="table table-bordered">
	
				
				<tr>
					<td>Enter Subject</td>
					<Td><input  type="text"  class="form-control" name="sub" required/></td>
				</tr>
				<tr>
					<td>Upload Notice </td>
					<Td><input class="form-control" type="file" name="details" required/></td>
				</tr>
				  
				 
				  <div class="row">
				   <div class="col-sm-4">
		           <select name="user[]" style='text-align:right;' multiple="multiple" class="form-control">
			       <?php 
	                  $sql=mysqli_query($conn,"select name,email from user where profession='teacher'");
	                  while($r=mysqli_fetch_array($sql))
	                  {
	 	                echo "<option value='".$r['email']."'>".$r['name']."</option>";
	                  }
			       ?>
		          </select>
		          </div>
				
		           <div class="col-sm-5">
		           <select name="user[]" style='text-align:right;' multiple="multiple" class="form-control">
			       						   

				   <?php 
	                  $sql=mysqli_query($conn,"select name,email,sess from user where profession='student'ORDER BY sess ASC");
	                  while($r=mysqli_fetch_array($sql))
	                  {

					  echo "<option value='".$r['email']."'>".$r['name']."&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
					  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  " .$r['sess']."</option>";
                             
	                  }
			       ?>
				  
		          </select>
		          </div>
				  
		           <div class="col-sm-3">
		           <select name="user[]" style='text-align:right;' multiple="multiple" class="form-control">
			       <?php 
	                  $sql=mysqli_query($conn,"select name,email from user where profession='staff'");
	                  while($r=mysqli_fetch_array($sql))
	                  {
	 	                echo "<option value='".$r['email']."'>".$r['name']."</option>";
	                  }
			       ?>
		          </select>
		          </div>
				  
				  
				  
		         
	              </div>
				 <Tr>
		<Td colspan="2" align="center"><?php echo @$err;?></Td>
	</Tr>

				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
				
				
			</table>
		</form>