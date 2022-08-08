        function saveData(){
            var name = $('#name').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var repassword = $('#repassword').val();
            var profile = $('#profile').val();
            var valid = $('#valid').val();
            if(name.trim()  === ''){
                Swal.fire(
            {
            html: '<p style="color:red;">Nombre obligatorio <i class="fa fa-times"></i></p>',
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
                return false;
            }else if(lastname.trim() === ''){
                Swal.fire(
            {
            html: '<p style="color:red;">Apellidos obligatorio <i class="fa fa-times"></i></p>',
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
            }else if(email.trim() === ''){
                Swal.fire(
            {
            html: '<p style="color:red;">Correo obligatorio <i class="fa fa-times"></i></p>',
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
            }else if(password.trim() === ''){
               Swal.fire(
            {
            html: '<p style="color:red;">contrasena obligatoria<i class="fa fa-times"></i></p>',
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
            }else if(repassword.trim() === ''){
                Swal.fire(
            {
            html: '<p style="color:red;">Repiticion de la Contrasena obligatorio<i class="fa fa-times"></i></p>',
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
            }else if(profile == "0") {
               Swal.fire(
            {
            html: '<p style="color:red;">Seleccione un perfil valido <i class="fa fa-times"></i></p>',
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
            }else if(valid == "válido"){
                if(password != repassword){
                    Swal.fire(
            {
            html: '<p style="color:red;">Las Contrasenas no coiciden <i class="fa fa-times"></i></p>',
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
                }else{
                    $.get('http://localhost:8080/validEmailS',{email:email}, function(data) {
                var cadenadata = String(data);
                    if(cadenadata != "yes"){
                        $.get('http://localhost:8080/saveUser', 
                            {name:name,lastname:lastname,
                                email:email,
                                password:password,profile:profile},
                         function(register) {
                            if(register = 'register'){

                                Swal.fire(
            {
            html: '<p style="color:green;">Usuario Registrado <i class="fa fa-user-plus" aria-hidden="true"></i></p>',
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

                            }else{
                                alert("algo esta mal");
                            }
                        });
                    }else if(cadenadata == 'yes'){
                        Swal.fire(
            {
            html: '<p style="color:red;">El correo ya existe Registrado <i class="fa fa-times"></i></p>',
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
    function error(){
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
    );;
                }
            }else if(valid == "incorrecto"){
                Swal.fire(
            {
            html: '<p style="color:red;">el Formato del correo no es valido<i class="fa fa-times"></i></p>',
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
        }