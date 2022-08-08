function blockSpecialCharLogin(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }

        // validar email
        document.getElementById('emailLogin').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('validLogin');
        
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      // valido.innerText = "válido";
      $('#validLogin').val("válido");
    } else {
      // valido.innerText = "incorrecto";
       $('#validLogin').val("incorrecto");
    }
});
                                                function mostrarContrasena(){
                              var tipo = document.getElementById("passLogin");
                              if(tipo.type == "password"){
                                  tipo.type = "text";
                              }else{
                                  tipo.type = "password";
                              }
                          }
