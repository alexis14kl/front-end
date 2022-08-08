        function saveData(){
            var name = $('#name').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var repassword = $('#repassword').val();
            var profile = $('#profile').val();
            var valid = $('#valid').val();
            if(name.trim()  === ''){
                alert("nombre esta vacio" );
                return false;
            }else if(lastname.trim() === ''){
                alert("lastname vacio");
            }else if(email.trim() === ''){
                alert("correo vacio");
            }else if(password.trim() === ''){
                alert("pass vacio");
            }else if(repassword.trim() === ''){
                alert('res vacio');
            }else if(profile == "0") {
                alert("seleccione un perfil valido x el sistema" + profile);
            }else if(valid == "válido"){
                if(password != repassword){
                    alert("las contrasenas no son =");
                }else{
                    $.get('http://localhost:8080/validEmailS',{email:email}, function(data) {
                var cadenadata = String(data);
                    if(cadenadata != "yes"){
                        $.get('http://localhost:8080/saveUser', 
                            {name:name,lastname:lastname,
                                email:email,
                                password:password,profile:profile},
                         function(register) {
                            alert(register);
                        });
                    }else if(cadenadata == 'yes'){
                        alert("el correo ya existe Rwgistrado intenta con otro");
                    }
         }).catch(
    function error(){
        alert("lo siento el servicio no esta disponible x el momento");
    }
    );;
                }
            }else if(valid == "incorrecto"){
                alert("email incorrecto format");
            }
        }