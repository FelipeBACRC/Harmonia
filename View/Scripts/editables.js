$(document).ready(function () {
    if (window.registroExitoso) {
        $('#registroExitosoModal').modal('show');
    }
});

 $(document).ready(function () {
        $('#tablaUsuarios').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
            },
            responsive: true
        });
 });
