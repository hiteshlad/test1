<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Date Functions</title>
</head>

<body>
<?php
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo "Today's Date : ".date("U")." ==> ".date("d/m/Y h:i:s A");
?>
<hr />
<form action="<?php echo $PHP_SELF; ?>" method="post">
<table>
<tr>
	<td>DD:</td>
	<td>
		<select name="DD" >
			<?php 
			for($i=1;$i<31;$i++)
			{
				if($i == $_POST['DD'])
				{
					echo "<option selected=\"selected\" value=\"".$i."\">".$i."</option>";
				}
				else
				{
					echo "<option value=\"".$i."\">".$i."</option>";
				}
			}//for($i=1;$i<31;$i++)
			?>
		</select>
	</td>
	<td>MM:</td>
	<td>
		<select name="MM" >
			<?php 
			for($i=1;$i<13;$i++)
			{
				if($i == $_POST['MM'])
				{
					echo "<option selected=\"selected\" value=\"".$i."\">".$i."</option>";
				}
				else
				{
					echo "<option value=\"".$i."\">".$i."</option>";
				}
			}//for($i=1;$i<13;$i++)
			?>
		</select>
	</td>
	<td>YYYY:</td>
	<td>
		<select name="YYYY" >
			<?php 
			for($i=date("Y")+5;$i>1970;$i--)
			{
				if($i == $_POST['YYYY'])
				{
					echo "<option selected=\"selected\" value=\"".$i."\">".$i."</option>";
				}
				else
				{
					echo "<option value=\"".$i."\">".$i."</option>";
				}
			}//for($i=date("Y");$i>1970;$i--)
			?>
		</select>
	</td>
	<td>HH:</td>
	<td>
		<select name="HH" >
			<?php 
			for($i=0;$i<23;$i++)
			{
				if($i == $_POST['HH'])
				{
					echo "<option selected=\"selected\" value=\"".$i."\">".$i."</option>";
				}
				else
				{
					echo "<option value=\"".$i."\">".$i."</option>";
				}
			}//for($i=1;$i<31;$i++)
			?>
		</select>
	</td>
	<td>MN:</td>
	<td>
		<select name="MN" >
			<?php 
			for($i=0;$i<59;$i++)
			{
				if($i == $_POST['MN'])
				{
					echo "<option selected=\"selected\" value=\"".$i."\">".$i."</option>";
				}
				else
				{
					echo "<option value=\"".$i."\">".$i."</option>";
				}
			}//for($i=1;$i<31;$i++)
			?>
		</select>
	</td>
	<td>SS:</td>
	<td>
		<select name="SS" >
			<?php 
			for($i=0;$i<59;$i++)
			{
				if($i == $_POST['SS'])
				{
					echo "<option selected=\"selected\" value=\"".$i."\">".$i."</option>";
				}
				else
				{
					echo "<option value=\"".$i."\">".$i."</option>";
				}
			}//for($i=1;$i<31;$i++)
			?>
		</select>
	</td>
	<td>
	<?php
	if($_POST['DD'] != NULL && $_POST['MM'] != NULL && $_POST['YYYY'] != NULL)
	{
		echo $_POST['DD']."/".$_POST['MM']."/".$_POST['YYYY']." ".$_POST['HH'].":".$_POST['MN'].":".$_POST['SS']." => ".mktime($_POST['HH'],$_POST['MN'],$_POST['SS'],$_POST['MM'],$_POST['DD'],$_POST['YYYY']);	
			
	}//if($_POST['DD'] != NULL && $_POST['MM'] != NULL && $_POST['YYYY'] != NULL)
	?>
	</td>
	<td>
		<input type="submit" value="Submit"  />
	</td>
</tr>
</table>
</form>
<hr />
<form action="<?php echo $PHP_SELF; ?>" method="post">
<table>
<tr>
	<td>Unix TimeStamp :</td>
	<td>
		<input type="text" name="UnixTime" value="<?php echo $_POST['UnixTime']; ?>"  />
	</td>
	<td><input type="submit" value="Submit"  /></td>
	<td>
		<?php
		if(trim($_POST['UnixTime']) != NULL)
		{
			echo $_POST['UnixTime']." => ".date("d/m/Y h:i:s A",trim($_POST['UnixTime']));
		}//if(trim($UnixTime) != NULL) 
		?>
	</td>
</tr>
</table>
</form>
<hr />
<?php
$ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
echo $ip;
?>
</body>
</html>
