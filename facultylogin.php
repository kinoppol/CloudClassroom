<?php include('allhead.php'); ?> 
 </nav>
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<fieldset>
				<!-- Faculty login page -->
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>&nbsp;  ผู้สอนเข้าสู่ระบบ</h3>
				</legend>
				<form name="facultylogin" action="loginlinkfaculty" method="POST">
					<div class="control-group form-group">
						<div class="controls">
							<label>ชื่อผู้ใช้ :</label>
							<input type="text" class="form-control" name="fid" required data-validation-required-message="Please enter your Faculty Id.">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>รหัสผ่าน :</label>
							<input type="password" class="form-control" name="pass" required data-validation-required-message="Please enter your password.">
							<p class="help-block"></p>
						</div>
					</div>
					<center>
						<button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
						<button type="reset" class="btn btn-primary" style="
    background-color: #E52727;
    border-color: #D21B1B;">ล้างข้อมูล</button>
					</center>
			</fieldset>
			</form>
		</div>
	</div>
	<?php include('allfoot.php'); ?>