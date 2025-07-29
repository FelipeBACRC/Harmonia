$(document).ready(function () {
    $('#tablaAsistencia').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
        },
        "paging": true,
        "searching": true,
        "info": false,
        "ordering": true,
        "columnDefs": [
            { "orderable": false, "targets": 3 }
        ]
    });
});