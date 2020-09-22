<!doctype html>
<html>
<?php

require('conn.php');

$sql = "SELECT * FROM `name`  ";
$result = mysqli_query($connection, $sql);

$sql2 = "SELECT * FROM `history`  ";
$result2 = mysqli_query($connection, $sql2);

// $se = $_POST['search'];
// if(isset($se)){
// 	$sql1 = "SELECT * FROM `name`  WHERE fname= '".$se."'";
// $query = mysqli_query($connection, $sql1);
// $result3 = mysqli_fetch_array($query);

// $sql4 = "SELECT * FROM `history` WHERE c_id = '".$result3['c_id']."' ";
// $result4 = mysqli_query($connection, $sql4);
// }
?>

<head>
	<title>Register System</title>
	<?php
	require("Factor/BootstrapCSSLink.php");
	?>
</head>

<?php
require("Factor/NavBar.php");
?>

<body>
	<div class="container">
		<div class="card card-out">
			<div class="card-body card-body-in">
				<h4 style="margin: 0px">ข้อมูลศิษย์เก่าทั้งหมด</h4>
				<div class="dropdown-divider"></div>
				<div align="center">
					<div style="max-width: 500px">
						<p style="max-width: 400px; font-size: 18px" align="center">
						<form method="POST" action="se.php">

							<div class="row">
								<div class="col-9">
									<input class="form-control" type="text" placeholder="ค้นหาโดยใช้ ชื่อ-นามสกุล" maxlength="" name="search" value="" />
								</div>
								<div class="col-3">
									<button type="submit" class="btn btn-block btn-primary">ค้นหา</button>
								</div>
							</div>
						</p>
					</div>
				</div>

				<table class="table">
					<thead>
						<tr>
							<th scope="col">รหัส</th>
							<th scope="col">ชื่อ-นามสกุล</th>
							<th scope="col">ปีการศึกษา</th>
							<th scope="col">ดูรายละเอียด</th>
							<th scope="col">ลบ</th>

						</tr>
					</thead>
					<?php
					while ($row = mysqli_fetch_array($result)) {

					?>
						<tbody>
							<tr>
								<th scope="row"><?php echo $row['c_id']; ?></th>
								<td> <?php echo $row['fname']; ?></td>
								<td><?php echo $row['rey']; ?></td>
								<td><a href="view.php?c_id=<?php echo $row['c_id']; ?>"><button type="button" class="btn btn-success">ดูรายละเอียด</button></a></td>
								<td><a href="delect.php?c_id=<?php echo $row['c_id']; ?>"><button type="button" class="btn btn-danger">ลบ</button></a></td>

							</tr>
						</tbody>
					<?php
					} ?>
				</table>

			</div>
		</div>
	</div>
</body>

</html>