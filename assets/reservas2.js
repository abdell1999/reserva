function vaciar(){
    rellenableLunes = document.getElementById("rellenableLunes");
    rellenableMartes = document.getElementById("rellenableMartes");
    rellenableMiercoles = document.getElementById("rellenableMiercoles");
    rellenableJueves = document.getElementById("rellenableJueves");
    rellenableViernes = document.getElementById("rellenableViernes");




    rellenableLunes.style.display = "none";
    rellenableMartes.style.display = "none";
    rellenableMiercoles.style.display = "none";
    rellenableJueves.style.display = "none";
    rellenableViernes.style.display = "none";
}

function seleccionarDiaSemana(){

    reserva1 = document.getElementById("fecha").value;
    reserva = new Date(reserva1);
    rellenableLunes = document.getElementById("rellenableLunes");
    rellenableMartes = document.getElementById("rellenableMartes");
    rellenableMiercoles = document.getElementById("rellenableMiercoles");
    rellenableJueves = document.getElementById("rellenableJueves");
    rellenableViernes = document.getElementById("rellenableViernes");
    
//jjjj
    
    switch (reserva.getDay()) {
        case 1:
            vaciar();
          diaSemana = "Lunes";
          rellenableLunes.style.display = "block";

          


          break;
        case 2:
            vaciar();
            diaSemana = "Martes";
            rellenableMartes.style.display = "block";
            
            
          break;
       
        case 3:
            vaciar();
            diaSemana = "Miercoles";
            rellenableMiercoles.style.display = "block";
          break;
          case 4:
            vaciar();
            diaSemana = "Jueves";
            rellenableJueves.style.display = "block";
          break;
          case 5:
            vaciar();
            diaSemana = "Viernes";
            rellenableViernes.style.display = "block";
          break;
        default:
            vaciar();
          alert("Seleccione un día entre semana");
          break;
      }



}