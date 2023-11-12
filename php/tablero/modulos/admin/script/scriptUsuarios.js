
document.addEventListener('DOMContentLoaded', function() {
    // Cuando el DOM esté completamente cargado, realiza la consulta de usuarios
    fetchUsuarios();

    // Función para realizar la consulta de usuarios y rellenar la tabla
    function fetchUsuarios() {
        fetch('getUsuarios.php')
        .then(response => response.json())
        .then(usuarios => {
            const tbody = document.getElementById('listaUsuarios');
            tbody.innerHTML = ''; // Limpiar el cuerpo de la tabla antes de rellenarla
            usuarios.forEach(usuario => {
                tbody.innerHTML += `
                    <tr>
                        <td>${usuario.nombre}</td>
                        <td>${usuario.rol}</td>
                        <td>
                            <button onclick="editarUsuario(${usuario.id})" class="btn btn-secondary btn-sm">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button onclick="eliminarUsuario(${usuario.id})" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `;
            });
        })
        .catch(error => {
            console.error('Error al cargar los usuarios:', error);
            // Manejar el error en la interfaz de usuario aquí
        });
    }

    // Funciones editarUsuario y eliminarUsuario aún por definir
    // ...
});

// Manejador del evento submit para el formulario de búsqueda
document.getElementById('formAgregarUsuario').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    // Aquí podrías añadir lógica para buscar un usuario en específico
    // ...
});

