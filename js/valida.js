function validarForm(){

    var expRegNombre=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    var expRegApellidos=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    var expRegOcupacion=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;

       var nombres = document.getElementById("nombre");
       var apellidos = document.getElementById("apellido");
       var ocupaciones = document.getElementById("ocupacion");
       
       if(!apellidos.value)
       {
        alert("El campo apellidos es requerido");
        apellidos.focus();
        return false;
       }
       if(!expRegApellidos.exec(apellidos.value))
       {
         alert("El campo apellidos admite letras y espacios.")
         apellidos.focus();
         return false;
       }

       if(!nombres.value)
       {
        alert("El campo nombre es requerido");
        nombres.focus();
        return false;
       }
       if (!expRegNombre.exec(nombres.value))
       {
          alert("El campo nombre admite letras y espacios.")
          nombres.focus();
          return false;
       }

       if(!ocupaciones.value)
       {
        alert("El campo ocupacion es requerido");
        ocupaciones.focus();
        return false;
       }
       if(!expRegOcupacion.exec(ocupaciones.value))
       {
         alert("El campo ocupacion admite letras y espacios.")
         ocupaciones.focus();
         return false;
       }
  
       return true;
    }
  
    window.onload = function()
    { 
      var formulario = document.getElementById("form-id");
      formulario.onsubmit = validarForm;
    }