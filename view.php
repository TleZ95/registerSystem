<!doctype html>
<html>

<head>
	<title>Register System</title>
	<?php
	require( "Factor/BootstrapCSSLink.php" );
	require('conn.php');
$id = $_GET['c_id'];
	$sql ="SELECT * FROM `name` WHERE c_id = '".$id."' ";
	$query = mysqli_query($connection, $sql);
	$result = mysqli_fetch_array($query);
	
	$sql1 ="SELECT * FROM `address` WHERE c_id = '".$id."' ";
	$query1 = mysqli_query($connection, $sql1);
	$result1 = mysqli_fetch_array($query1);

	$sql2 ="SELECT * FROM `add2` WHERE c_id = '".$id."' ";
	$query2 = mysqli_query($connection, $sql2);
	$result2 = mysqli_fetch_array($query2);

	$sql3 ="SELECT * FROM `history` WHERE c_id = '".$id."' ";
	$query3 = mysqli_query($connection, $sql3);
	$result3 = mysqli_fetch_array($query3);
	?>
</head>

<?php
require( "Factor/NavBar.php" );
?>

<body>
	<div class="container">
		<div class="card card-out">
			<div class="card-body card-body-in">
				<h4 style="margin: 0px">ดูรายละเอียดของศิษย์เก่า</h4>
				<div class="dropdown-divider"></div>
				<h5>ข้อมูลส่วนตัวของศิษย์เก่า</h5>
				<div align="center">
					<form method="" action="">
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-3" style="margin-bottom: 0">คำนำหน้า
								<input class="form-control" type="text" placeholder="คำนำหน้า" maxlength="" name="" value="<?php echo $result['mr']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-9" style="margin-bottom: 0">ชื่อ-นามสกุล (ภาษาไทย)
								<input class="form-control" type="text" placeholder="ชื่อ-นามสกุล (ภาษาไทย)" maxlength="" name="" value="<?php echo $result['fname']; ?>" readonly/>
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-3" style="margin-bottom: 0">คำนำหน้า
								<input class="form-control" type="text" placeholder="คำนำหน้า" maxlength="" name="" value="<?php echo $result['mre']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-9" style="margin-bottom: 0">ชื่อ-นามสกุล (ภาษาอังกฤษ)
								<input class="form-control" type="text" placeholder="ชื่อ-นามสกุล (ภาษาอังกฤษ)" maxlength="" name="" value="<?php echo $result['ename']; ?>" readonly/>
							</div>
						</div>
						<p style="max-width: 600px; font-size: 18px" align="left">หมายเลขบัตรประจำตัวประชาชน 13 หลัก
							<input class="form-control" type="number" placeholder="หมายเลขบัตรประจำตัวประชาชน" maxlength="" name="" value="<?php echo $result['id']; ?>" readonly/>
						</p>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">วันเกิด
								<input class="form-control" type="date" placeholder="วันเกิด" maxlength="" name="" value="<?php echo $result['date']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">ตำแหน่งงาน
								<input class="form-control" type="text" placeholder="ตำแหน่งงาน" maxlength="" name="" value="<?php echo $result['job']; ?>" readonly/>
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-3" style="margin-bottom: 0">เชื้อชาติ
								<input class="form-control" type="text" placeholder="เชื้อชาติ" maxlength="" name="" value="<?php echo $result['nation']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-3" style="margin-bottom: 0">สัญชาติ
								<input class="form-control" type="text" placeholder="สัญชาติ" maxlength="" name="" value="<?php echo $result['nation2']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-3" style="margin-bottom: 0">ศาสนา
								<input class="form-control" type="text" placeholder="ศาสนา" maxlength="" name="" value="<?php echo $result['religion']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-3" style="margin-bottom: 0">กรุ๊ปเลือด
								<input class="form-control" type="text" placeholder="กรุ๊ปเลือด" maxlength="" name="" value="<?php echo $result['blood']; ?>" readonly/>
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">อีเมล
								<input class="form-control" type="email" placeholder="อีเมล" maxlength="" name="" value="<?php echo $result['email']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">หมายเลขโทรศัพท์
								<input class="form-control" type="number" placeholder="หมายเลขโทรศัพท์" maxlength="" name="" value="<?php echo $result['tel']; ?>" readonly/>
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">Facebook
								<input class="form-control" type="text" placeholder="Facebook" maxlength="" name="" value="<?php echo $result['face']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">Line ID
								<input class="form-control" type="text" placeholder="Line ID" maxlength="" name="" value="<?php echo $result['line']; ?>" readonly/>
							</div>
						</div>
						
						<div class="dropdown-divider"></div>
						<h5 align="left">ที่อยู่ที่สามารถติดต่อได้</h5>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-4" style="margin-bottom: 0">บ้านเลขที่
								<input class="form-control" type="number" placeholder="บ้านเลขที่" maxlength="" name="" value="<?php echo $result1['homen']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">หมู่
								<input class="form-control" type="number" placeholder="หมู่" maxlength="" name="" value="<?php echo $result1['mo']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">ซอย
								<input class="form-control" type="text" placeholder="ซอย" maxlength="" name="" value="<?php echo $result1['song']; ?>" readonly/>
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-4" style="margin-bottom: 0">ถนน
								<input class="form-control" type="text" placeholder="ถนน" maxlength="" name="" value="<?php echo $result1['road']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">ตำบล/แขวง
								<input class="form-control" type="text" placeholder="ตำบล/แขวง" maxlength="" name="" value="<?php echo $result1['tampon']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">อำเภอ/เขต
								<input class="form-control" type="text" placeholder="อำเภอ/เขต" maxlength="" name="" value="<?php echo $result1['ampor']; ?>" readonly/>
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">จังหวัด
								<input class="form-control" type="text" placeholder="จังหวัด" maxlength="" name="" value="<?php echo $result1['provice']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">รหัสไปรษณีย์
								<input class="form-control" type="number" placeholder="รหัสไปรษณีย์" maxlength="" name="" value="<?php echo $result1['codezip']; ?>" readonly/>
							</div>
						</div>
						
						<div class="dropdown-divider"></div>
						<h5 align="left">ที่อยู่ที่ทำงาน</h5>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-4" style="margin-bottom: 0">บ้านเลขที่
								<input class="form-control" type="number" placeholder="บ้านเลขที่" maxlength="" name="" value="<?php echo $result2['home2']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">หมู่
								<input class="form-control" type="number" placeholder="หมู่" maxlength="" name="" value="<?php echo $result2['mo2']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">ซอย
								<input class="form-control" type="text" placeholder="ซอย" maxlength="" name="" value="<?php echo $result2['song2']; ?>" readonly/>
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-4" style="margin-bottom: 0">ถนน
								<input class="form-control" type="text" placeholder="ถนน" maxlength="" name="" value="<?php echo $result2['road2']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">ตำบล/แขวง
								<input class="form-control" type="text" placeholder="ตำบล/แขวง" maxlength="" name="" value="<?php echo $result2['tampon2']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">อำเภอ/เขต
								<input class="form-control" type="text" placeholder="อำเภอ/เขต" maxlength="" name="" value="<?php echo $result2['ampor2']; ?>" readonly/>
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">จังหวัด
								<input class="form-control" type="text" placeholder="จังหวัด" maxlength="" name="" value="<?php echo $result2['provice2']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">รหัสไปรษณีย์
								<input class="form-control" type="number" placeholder="รหัสไปรษณีย์" maxlength="" name="" value="<?php echo $result2['zip']; ?>" readonly/>
							</div>
						</div>
						<p style="max-width: 600px; font-size: 18px" align="left">หมายเลขโทรศัพท์ที่ทำงาน
							<input class="form-control" type="number" placeholder="หมายเลขโทรศัพท์ที่ทำงาน" maxlength="" name="" value="<?php echo $result['phone_h']; ?>" readonly/>
						</p>
						
						<div class="dropdown-divider"></div>
						<h5 align="left">ประวัติการศึกษา</h5>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">รหัสนักศึกษา
								<input class="form-control" type="number" placeholder="รหัสนักศึกษา" maxlength="" name="<?php echo $result3['s_id']; ?>" value="" readonly/>
							</div>
							<div class="form-group col-sm-3" style="margin-bottom: 0">หมู่เรียน
								<input class="form-control" type="text" placeholder="หมู่เรียน" maxlength="" name="" value="<?php echo $result3['section']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-3" style="margin-bottom: 0">เกรดเฉลี่ย
								<input class="form-control" type="number" placeholder="เกรดเฉลี่ย" maxlength="" name="" value="<?php echo $result3['grade']; ?>" readonly/>
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">ปีการศึกษาที่เข้าศึกษา
								<input class="form-control" type="number" placeholder="ปีการศึกษาที่เข้าศึกษา" maxlength="" name="" value="<?php echo $result3['regis_year']; ?>" readonly/>
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">ปีการศึกษาที่สำเร็จการศึกษา
								<input class="form-control" type="number" placeholder="ปีการศึกษาที่สำเร็จการศึกษา" maxlength="" name="" value="<?php echo $result3['sus_year']; ?>" readonly/>
							</div>
						</div>
						
						<div class="dropdown-divider"></div>
						<a href="alumni_information.php"><button type="button" class="btn btn-danger">ปิด</button></a>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</body>

</html>