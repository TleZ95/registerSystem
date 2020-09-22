<!doctype html>
<html>

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
				<h4 style="margin: 0px">ระบบลงทะเบียนสมาคมศิษย์เก่า</h4>
				<div class="dropdown-divider"></div>
				<h5>ข้อมูลส่วนตัวของศิษย์เก่า</h5>
				<div align="center">
					<form method="POST" action="insert.php">
						<div class="form-row" style="max-width: 610px; font-size: 18px;" align="left">
							<div class="form-group col-sm-3" style="margin-bottom: 0">คำนำหน้า
								<div class="form-group">
									<select class="form-control" name="mr">
										<option>นาย</option>
										<option>นาง</option>
										<option>นางสาว</option>
									</select>
								</div>
							</div>
							<div class="form-group col-sm-9" style="margin-bottom: 0">ชื่อ-นามสกุล (ภาษาไทย)
								<input class="form-control" type="text" placeholder="ชื่อ-นามสกุล (ภาษาไทย)" maxlength="" name="fname" value="" required />
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px;" align="left">
							<div class="form-group col-sm-3" style="margin-bottom: 0">คำนำหน้า
								<div class="form-group">
									<select class="form-control" name="mre">
										<option>Mr.</option>
										<option>Mrs.</option>
										<option>Miss.</option>
										<option>Ms.</option>
									</select>
								</div>
							</div>
							<div class="form-group col-sm-9" style="margin-bottom: 0">ชื่อ-นามสกุล (ภาษาอังกฤษ)
								<input class="form-control" type="text" placeholder="ชื่อ-นามสกุล (ภาษาอังกฤษ)" maxlength="" name="ename" value="" required />
							</div>
						</div>
						<p style="max-width: 600px; font-size: 18px" align="left">หมายเลขบัตรประจำตัวประชาชน 13 หลัก
							<input class="form-control" type="number" placeholder="หมายเลขบัตรประจำตัวประชาชน" maxlength="" name="id" value="" required />
						</p>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">วันเกิด
								<input class="form-control" type="date" placeholder="วันเกิด" maxlength="" name="date" value="" required />
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">ตำแหน่งงาน
								<input class="form-control" type="text" placeholder="ตำแหน่งงาน" maxlength="" name="job" value="" required />
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-3" style="margin-bottom: 0">เชื้อชาติ
								<input class="form-control" type="text" placeholder="เชื้อชาติ" maxlength="" name="nation" value="" required />
							</div>
							<div class="form-group col-sm-3" style="margin-bottom: 0">สัญชาติ
								<input class="form-control" type="text" placeholder="สัญชาติ" maxlength="" name="nation2" value="" required />
							</div>
							<div class="form-group col-sm-3" style="margin-bottom: 0">ศาสนา
								<input class="form-control" type="text" placeholder="ศาสนา" maxlength="" name="re" value="" required />
							</div>
							<div class="form-group col-sm-3" style="margin-bottom: 0">กรุ๊ปเลือด
								<input class="form-control" type="text" placeholder="กรุ๊ปเลือด" maxlength="" name="blood" value="" required />
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">อีเมล
								<input class="form-control" type="email" placeholder="อีเมล" maxlength="" name="email" value="" required />
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">หมายเลขโทรศัพท์
								<input class="form-control" type="number" placeholder="หมายเลขโทรศัพท์" maxlength="" name="tel" value="" required />
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">Facebook
								<input class="form-control" type="text" placeholder="Facebook" maxlength="" name="face" value="" required />
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">Line ID
								<input class="form-control" type="text" placeholder="Line ID" maxlength="" name="line" value="" required />
							</div>
						</div>

						<div class="dropdown-divider"></div>
						<h5 align="left">ที่อยู่ที่สามารถติดต่อได้</h5>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-4" style="margin-bottom: 0">บ้านเลขที่
								<input class="form-control" type="number" placeholder="บ้านเลขที่" maxlength="" name="homea" value="" required />
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">หมู่
								<input class="form-control" type="number" placeholder="หมู่" maxlength="" name="mou" value="" required />
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">ซอย
								<input class="form-control" type="text" placeholder="ซอย" maxlength="" name="song" value="" required />
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-4" style="margin-bottom: 0">ถนน
								<input class="form-control" type="text" placeholder="ถนน" maxlength="" name="road" value="" required />
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">ตำบล/แขวง
								<input class="form-control" type="text" placeholder="ตำบล/แขวง" maxlength="" name="tampon" value="" required />
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">อำเภอ/เขต
								<input class="form-control" type="text" placeholder="อำเภอ/เขต" maxlength="" name="ampor" value="" required />
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">จังหวัด
								<input class="form-control" type="text" placeholder="จังหวัด" maxlength="" name="prov" value="" required />
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">รหัสไปรษณีย์
								<input class="form-control" type="number" placeholder="รหัสไปรษณีย์" maxlength="" name="zipcode" value="" required />
							</div>
						</div>

						<div class="dropdown-divider"></div>
						<h5 align="left">ที่อยู่ที่ทำงาน</h5>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-4" style="margin-bottom: 0">บ้านเลขที่
								<input class="form-control" type="number" placeholder="บ้านเลขที่" maxlength="" name="h2" value="" required />
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">หมู่
								<input class="form-control" type="number" placeholder="หมู่" maxlength="" name="m2" value="" required />
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">ซอย
								<input class="form-control" type="text" placeholder="ซอย" maxlength="" name="s2" value="" required />
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-4" style="margin-bottom: 0">ถนน
								<input class="form-control" type="text" placeholder="ถนน" maxlength="" name="road2" value="" required />
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">ตำบล/แขวง
								<input class="form-control" type="text" placeholder="ตำบล/แขวง" maxlength="" name="t2" value="" required />
							</div>
							<div class="form-group col-sm-4" style="margin-bottom: 0">อำเภอ/เขต
								<input class="form-control" type="text" placeholder="อำเภอ/เขต" maxlength="" name="a2" value="" required />
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">จังหวัด
								<input class="form-control" type="text" placeholder="จังหวัด" maxlength="" name="prov2" value="" required />
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">รหัสไปรษณีย์
								<input class="form-control" type="number" placeholder="รหัสไปรษณีย์" maxlength="" name="zip2" value="" required />
							</div>
						</div>
						<p style="max-width: 600px; font-size: 18px" align="left">หมายเลขโทรศัพท์ที่ทำงาน
							<input class="form-control" type="number" placeholder="หมายเลขโทรศัพท์ที่ทำงาน" maxlength="" name="phone" value="" required />
						</p>

						<div class="dropdown-divider"></div>
						<h5 align="left">ประวัติการศึกษา</h5>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">รหัสนักศึกษา
								<input class="form-control" type="number" placeholder="รหัสนักศึกษา" maxlength="" name="sid" value="" required />
							</div>
							<div class="form-group col-sm-3" style="margin-bottom: 0">หมู่เรียน
								<input class="form-control" type="text" placeholder="หมู่เรียน" maxlength="" name="sec" value="" required />
							</div>
							<div class="form-group col-sm-3" style="margin-bottom: 0">เกรดเฉลี่ย
								<input class="form-control" type="number" placeholder="เกรดเฉลี่ย" maxlength="" name="grade" value="" required />
							</div>
						</div>
						<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
							<div class="form-group col-sm-6" style="margin-bottom: 0">ปีการศึกษาที่เข้าศึกษา
								<input class="form-control" type="number" placeholder="ปีการศึกษาที่เข้าศึกษา" maxlength="" name="ry" value="" required />
							</div>
							<div class="form-group col-sm-6" style="margin-bottom: 0">ปีการศึกษาที่สำเร็จการศึกษา
								<input class="form-control" type="number" placeholder="ปีการศึกษาที่สำเร็จการศึกษา" maxlength="" name="sy" value="" required />
							</div>
						</div>

						<div class="dropdown-divider"></div>
						<div class="form-group" style="margin-top: 10px; margin-bottom: 10">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="confirm_register" required>
								<label class="custom-control-label css-require" for="confirm_register">ข้าพเจ้าขอยืนยันว่าข้อมูลทั้งหมดที่ได้กรอกในแบบฟอร์มนี้เป็นความจริงทุกประการ</label>
							</div>
						</div>

						<a href="confirm_register.php"><button type="submit" class="btn btn-primary">บันทึก</button></a>
						<a href="index.php"><button type="button" class="btn btn-secondary">ยกเลิก</button></a>
					</form>
				</div>

			</div>
		</div>
	</div>
</body>

</html>