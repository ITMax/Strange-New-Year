<div class="container">
      <div class="fblock login">
          <h1>LOG IN</h1>
          <form action="" class="form f1">
              <h3>Username</h3><br />
              <input type="text" id="username" /><br />
              <h3>Password</h3><br />
              <input type="password" id="password" />
          </form>
          <button id="sub1">LOG IN</button>
      </div>
      <div class="fblock signup">
          <h1>SIGN UP</h1>
          <form action="" class="form f2">
              <h3>Name</h3><br />
              <input type="text" id="name" /><br />
              <h3>Username</h3><br />
              <input type="text" id="username" /><br />
              <h3>Email</h3><br />
              <input type="text" id="email" /><br />
              <h3>Password</h3><br />
              <input type="password" id="password" /><br />
              <h3>Repeat Password</h3><br />
              <input type="password" id="repassword" />
          </form>
          <button id="sub2">SIGN UP</button>
      </div>
  </div>

  <script type="text/javascript">
  $(document).ready(function(){
    $(".login #username").focus();

    $("#sub1").click(function(){
      var v_username = $(".login #username").val();
      var v_password = $(".login #password").val();

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

    $(".login #username").keypress(function(e){
      if(e.which == 13){
        if($(".login #username").val() != ""){
          $(".login #password").focus();
        }
      }
    });
    $(".login #password").keypress(function(e){
      if(e.which == 13){
        if($(".login #password").val() != ""){
          if($(".login #username").val() == ""){
            $(".login #username").focus();
          } else {
            var v_username = $(".login #username").val();
            var v_password = $(".login #password").val();

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

    $('#sub2').click(function(){
			var v_name = $('.signup #name').val();
			var v_username = $('.signup #username').val();
			var v_email = $('.signup #email').val();
			var v_password = $('.signup #password').val();
			var v_repassword = $('.signup #repassword').val();

			$.post('/account/save_user', {
				name: v_name,
				username: v_username,
				email: v_email,
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
