/*
╔═════════════════════════╗ 
║{7=+A(L8Wc)pnsQ4:startJs ║ 
╚═════════════════════════╝
*/
//====================================Login
function modalOlvideCon(){
    $('#modalOlvPs').modal('show');
}

//====================================Cargos
var cargosOption = {
    valueNames: [ 'nombre', 'estado' ],
    page: 5,
    pagination: true
};
var cargosList = new List('cargos-list', cargosOption);
