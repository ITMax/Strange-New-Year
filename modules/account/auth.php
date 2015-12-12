<?php
	include("/header.php");
?>

<form class="auth_form">
	<input type="text" id="username" name="username" placeholder=" Username" /><font color="red">*</font><br />
	<input type="password" id="password" name="password" placeholder=" Password" /><font color="red">*</font><br />
	<input type="button" id="sub" value="Ok" />
</form>

<script type="text/javascript">
	$(document).ready(function(){
		$("#username").focus();

		$("#sub").click(function(){
			var v_username = $("#username").val();
			var v_password = $("#password").val();

			$.post('/account/auth_user', {
				username: v_username,
				password: v_password
			}).done(function(data){
				console.log(data);
				setTimeout(function(){
					redirect('/');
				}, 1000);
			});

		});

		$("#username").keypress(function(e){
			if(e.which == 13){
				if($("#username").val() != ""){
					$("#password").focus();
				}
			}
		});
		$("#password").keypress(function(e){
			if(e.which == 13){
				if($("#password").val() != ""){
					if($("#username").val() == ""){
						$("#username").focus();
					} else {
						var v_username = $("#username").val();
						var v_password = $("#password").val();

						$.post('/account/auth_user', {
							username: v_username,
							password: v_password
						}).done(function(data){
              console.log(data);							
							setTimeout(function(){
								redirect('/');
							}, 1000);
						});
					}
				}
			}
		});
	});
</script>
