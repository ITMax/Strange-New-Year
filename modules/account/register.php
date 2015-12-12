<?php
	include("/header.php");
?>

<form class="reg">
	<input type="text" id="name" name="name" placeholder="Name" /><font color="red">*</font><br />
	<input type="text" id="username" name="username" placeholder="Username" /><font color="red">*</font><br />
	<input type="text" id="email" name="email" placeholder="Email"  /><font color="red">*</font><br />
	<input type="password" id="password" name="password" placeholder="Password" /><font color="red">*</font><br />
	<input type="password" id="repassword" name="repassword" placeholder="Repassword"/><font color="red">*</font><br />

	<input type="button" id="sub" value="Ok"/><br />

</form>

<script type="text/javascript">
	$(document).ready(function(){
		$('#sub').click(function(){
			var v_name = $('#name').val();
			var v_lastname = $('#lastname').val();
			var v_username = $('#username').val();
			var v_email = $('#email').val();
			var v_phone = $('#phone').val();
			var v_password = $('#password').val();
			var v_repassword = $('#repassword').val();

			$.post('/account/save_user', {
				name: v_name,
				lastname: v_lastname,
				username: v_username,
				email: v_email,
				phone: v_phone,
				password: v_password,
				repassword: v_repassword
			}).done(function( data ){
				// alert(data);
        console.log(data);
				setTimeout(function(){
					redirect("/");
				}, 1000);
			});
		});

	});
</script>
