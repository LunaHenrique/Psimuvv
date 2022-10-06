function mostrarHorarios(){
    var containerHorarios = document.getElementById('agendar-horarios');
    var visivel = containerHorarios.style.display;

    if (visivel = 'none'){
        containerHorarios.style.display = 'block';
    } 
    else {
        containerHorarios.style.display = 'none';
    }
}