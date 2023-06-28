function validation(event) {
    event.preventDefault(); // Detener el comportamiento predeterminado del formulario

    var N, E, P, B, A;
    N = document.getElementById('Name').value;
    E = document.getElementById('Email').value;
    P = document.getElementById('Phone').value;
    B = document.getElementById('BookingDate').value;
    A = document.getElementById('Address').value;

    if (N.trim() === '' || E.trim() === '' || P.trim() === '' || B.trim() === '' || A.trim() === '') {
        alert("Por favor, completa todos los campos.");
    } else {
        // Crear un objeto de datos a enviar al servidor
        var data = {
            name: N,
            email: E,
            phone: P,
            bookingDate: B,
            address: A
        };

        // Realizar la solicitud AJAX
        $.ajax({
            url: "conexion.php", // Ruta al archivo PHP en tu servidor
            type: "POST",
            data: data,
            success: function(response) {
                // Manipular la respuesta del servidor
                alert("Tu registro se envió correctamente.");
            },
            error: function(xhr, status, error) {
                // Manejar errores de la solicitud
                console.error(error);
                alert("Ocurrió un error al enviar el registro.");
            }
        });
    }
}

