<?php include('allhead.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<!-- Stdeunt login page -->
			<fieldset>
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>&nbsp;  ผู้เรียนเข้าสู่ระบบ</h3>
				</legend>
				<form name="studentlogin" action="loginlinkstudent" method="POST">
					<div class="control-group form-group">
						<div class="controls">
							<label>อีเมล :</label>
							<input type="text" class="form-control" name="sid" required>
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>รหัสผ่าน :</label>
							<input type="password" class="form-control" name="pass" required>
							<p class="help-block"></p>
						</div>
					</div>
					<center>
						<button type="submit" name="login" class="btn btn-primary">เข้าสู่ระบบ</button>
						<button type="reset" class="btn btn-primary" style="
background-color: #E52727;
border-color: #D21B1B;">ล้างข้อมูล</button>
					</center>
			</fieldset>
			</form>
		</div>
	</div>
	<?php include('allfoot.php'); ?>