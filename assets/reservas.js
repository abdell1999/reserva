function seleccionarDia(){

    reserva1 = document.getElementById("reserva").value;
    reserva = new Date(reserva1);
    rellenableLunes = document.getElementById("rellenableLunes");


    
    switch (reserva.getDay()) {
        case 1:
          diaSemana = "Lunes";
          rellenableLunes.style.display = "block";

          


          break;
        case 2:
            diaSemana = "Martes";
          break;
       
        case 3:
            diaSemana = "Miercoles";
          break;
          case 4:
            diaSemana = "Jueves";
          break;
          case 5:
            diaSemana = "Viernes";
          break;
        default:
          alert("Seleccione un día entre semana");
          break;
      }



}