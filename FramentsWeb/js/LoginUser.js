	function accederlogin(){
		var emailLogin = $('#emailLogin').val();
		var validLogin = $('#validLogin').val();
		var passLogin = $('#passLogin').val();
		if(emailLogin.trim() === ''){
			Swal.fire(
      {
      html: '<p style="color:red;">Correo obligatorio <i class="fa fa-envelope" aria-hidden="true"></i></p>',
      backdrop: true,
      maxlength: 1,
      toast: true,//alert mas peque
      popup: 'swal2-show',
  backdrop: 'swal2-backdrop-show',
  icon: 'swal2-icon-show',
  confirmButton: false,
  cancelButton: false,
  timer: 3000,
  timerProgressBar: true,
  showConfirmButton: false,
      position: 'top-end',didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }}
      );
		}else if(passLogin.trim() === ''){
			Swal.fire(
      {
      html: '<p style="color:red;">Contrasena obligatoria <i class="fa fa-key" aria-hidden="true"></i></p>',
      backdrop: true,
      maxlength: 1,
      toast: true,//alert mas peque
      popup: 'swal2-show',
  backdrop: 'swal2-backdrop-show',
  icon: 'swal2-icon-show',
  confirmButton: false,
  cancelButton: false,
  timer: 3000,
  timerProgressBar: true,
  showConfirmButton: false,
      position: 'top-end',didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }}
      );
		}else if(validLogin.trim() === ''){
			alert("error format email");
		}else if(validLogin != "incorrecto" && validLogin != "válido"){
			Swal.fire(
      {
      html: '<p style="color:red;">el correo debe de tener un formato valido<i class="fa fa-times"></i></p>',
      backdrop: true,
      maxlength: 1,
      toast: true,//alert mas peque
      popup: 'swal2-show',
  backdrop: 'swal2-backdrop-show',
  icon: 'swal2-icon-show',
  confirmButton: false,
  cancelButton: false,
  timer: 3000,
  timerProgressBar: true,
  showConfirmButton: false,
      position: 'top-end',didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }}
      );
		}else if(validLogin === "incorrecto"){
			Swal.fire(
      {
      html: '<p style="color:red;">formato Del Correo incorrecto <i class="fa fa-times"></i></p>',
      backdrop: true,
      maxlength: 1,
      toast: true,//alert mas peque
      popup: 'swal2-show',
  backdrop: 'swal2-backdrop-show',
  icon: 'swal2-icon-show',
  confirmButton: false,
  cancelButton: false,
  timer: 3000,
  timerProgressBar: true,
  showConfirmButton: false,
      position: 'top-end',didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }}
      );
		}else if(validLogin === "válido"){
			// alert("valido");
			var email = emailLogin;
			$.get('http://localhost:8080/validEmailS',{email:email},
      function(data) {
      if(data === 'yes'){
        // validar pass
        // alert("si hay email");
        $.post('http://localhost/front-end/FramentsWeb/php/validLoginAcess.php', 
        {email:email, passLogin:passLogin},
                      function(data){
                      if(data == 'No'){
                        Swal.fire(
      {
      html: '<p style="color:red;">Error la Contrasena No es correcta <i class="fa fa-times"></i></p>',
      backdrop: true,
      maxlength: 1,
      toast: true,//alert mas peque
      popup: 'swal2-show',
  backdrop: 'swal2-backdrop-show',
  icon: 'swal2-icon-show',
  confirmButton: false,
  cancelButton: false,
  timer: 3000,
  timerProgressBar: true,
  showConfirmButton: false,
      position: 'top-end',didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }}
      );
                        $('#passLogin').val('');

                      }else{
                      	// valid profile
                      		$.get('http://localhost:8080/obtenerProfileLogin', {email:email}, function(jsonIDUser) {
                      			if(jsonIDUser){
                      				var idProfile = jsonIDUser;
                      				  $.post('http://localhost:8080/ProfileUser', {idProfile:idProfile},
										             function(data) {
										             	//valid url location profile
										                   alert(data);
										                   if(data === 'CLIENTE'){
										                   	window.location = "SystemProyect/indexClientes.php";
                      	window.history.replaceState({},'','user.html');
										                   }else if(data != 'CLIENTE'){
										                   	alert("pagina el mantenimiento");
										                   	window.location = 'http://localhost/front-end/SystemProyect/salir.php';
										                   }
										            });
                      			}else{
                      				alert("no hay id");
                      				window.location = 'http://localhost/front-end/SystemProyect/salir.php';
                      			}
                      		});
                      		
                        // alert(data)
                      }
                    });
        // end valid pass
      }else if(data === 'no'){
      	Swal.fire(
      {
      html: '<p style="color:red;">el correo no existe registrado <i class="fa fa-times"></i></p>',
      backdrop: true,
      maxlength: 1,
      toast: true,//alert mas peque
      popup: 'swal2-show',
  backdrop: 'swal2-backdrop-show',
  icon: 'swal2-icon-show',
  confirmButton: false,
  cancelButton: false,
  timer: 3000,
  timerProgressBar: true,
  showConfirmButton: false,
      position: 'top-end',didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }}
      );
      }
    }).catch(
    function accederlogin(){
    	Swal.fire(
      {
      html: '<p style="color:red;">Lo siento el servidor esta en mantenimiento <i class="fa fa-times"></i></p>',
      backdrop: true,
      maxlength: 1,
      toast: true,//alert mas peque
      popup: 'swal2-show',
  backdrop: 'swal2-backdrop-show',
  icon: 'swal2-icon-show',
  confirmButton: false,
  cancelButton: false,
  timer: 3000,
  timerProgressBar: true,
  showConfirmButton: false,
      position: 'top-end',didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }}
      );
    }
    );




// trabajar oline

			// $.get('http://192.168.75.175:8080/validEmailS',{email:email},
   //    function(data) {
   //    if(data === 'yes'){
   //      // validar pass
   //      // alert("si hay email");
   //      $.post('http://192.168.75.175/front-end/FramentsWeb/php/validLoginAcess.php', 
   //      {email:email, passLogin:passLogin}, 
   //                    function(data){
   //                    if(data == 'No'){
   //                      alert('Contrasena no incorrect')
   //                      $('#passLogin').val('');
   //                    }else{
   //                    	window.location = "SystemProyect/index.php";
   //                    	window.history.replaceState({},'','user.html');
   //                      // alert(data)
   //                    }
   //                  });
   //      // end valid pass
   //    }else if(data === 'no'){
   //    	alert("sorry email no exist");
   //    }
   //  }).catch(
   //  function accederlogin(){
   //  	alert("lo siento el servicio no esta disponible x el momento");
   //  }
   //  );










    // end valid email
		}
	}

