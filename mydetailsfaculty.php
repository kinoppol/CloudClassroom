<?php
session_start();

if ( $_SESSION[ "fidx" ] == "" || $_SESSION[ "fidx" ] == NULL ) {
	header( 'Location:facultylogin' );
}

$userid = $_SESSION[ "fidx" ];
$fname = $_SESSION[ "fname" ];
?>
<?php include('fhead.php');  ?>
<div class="container">
	<div class="row">
		<div class="col-md-5">

			<h3> ยินดีต้อนรับผู้สอน : <a href="welcomefaculty.php"><span style="color:#FF0004"> <?php echo $fname; ?></span></a></h3>
			<?php
			include( 'database.php' );
			$varid = $_REQUEST[ 'myfid' ];
			//selecting data from faculty table
			$sql = "select * from  facutlytable where FID='$varid'";
			$result = mysqli_query( $connect, $sql );
			//loop below will print details of faculty
			while ( $row = mysqli_fetch_array( $result ) ) {
				?>
			<fieldset>
				<legend>ข้อมูลของฉัน</legend>
				<form action="" method="POST" name="update">
					<table class="table table-hover">

						<tr>
							<td><strong>ID : </strong>
							</td>
							<td>
								<?php echo $row['FID']; ?>
							</td>

						</tr>
						<tr>
							<td><strong>ชื่อ :</strong> </td>
							<td>
								<?php echo $row['FName']; ?>
							</td>
						</tr>
						</tr>
						<tr>
							<td><strong>สกุล :</strong> </td>
							<td>
								<?PHP echo $row['FaName'];?>
							</td>
						</tr>
						<tr>
							<td><strong>ที่อยู่ : </strong>
							</td>
							<td>
								<?PHP echo $row['Addrs'];?> </td>
						</tr>
						<tr>
							<td><strong>เพศ :</strong>
							</td>
							<td>
								<?PHP echo $row['Gender'];?>
							</td>
						</tr>
						<tr>
							<td><strong>วันเกิด :</strong>
							</td>
							<td>
								<?PHP echo $row['JDate'];?>
							</td>
						</tr>
						<tr>
							<td><strong>เมือง : </strong>
							</td>
							<td>
								<?PHP echo $row['City'];?>
							</td>
						</tr>
						<tr>
							<td><strong>หมายเลขโทรศัพท์ :</strong>
							</td>
							<td>
								<?PHP echo $row['PhNo'];?> </td>
						</tr>
						<tr>
							<td><strong>รหัสผ่าน :</strong> </td>
							<td>
								<?PHP echo $row['Pass'];?>
							</td>
						</tr>
						<tr>
							<td><a href="updatedetailsfromfaculty.php?myfid=<?php echo $row['FID']; ?>"><input type="button" Value="Edit" class="btn btn-info btn-sm"></a></td>
							
						</tr>
					</table>
				</form>
			</fieldset>
			<?php
			}
			?>
		</div>
	</div>
	<?php include('allfoot.php'); ?>