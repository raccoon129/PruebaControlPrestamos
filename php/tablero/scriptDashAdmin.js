// Función para alternar el modo oscuro
function toggleDarkMode() {
    const body = document.body;
    body.style.backgroundColor = body.style.backgroundColor === 'rgb(52, 58, 64)' ? '#f4f4f4' : '#343a40';
    body.style.transition = 'background-color 0.3s';
}

// CARGAR LOS MODULOS
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.menu li a').forEach(function(menuItem) {
        menuItem.addEventListener('click', function(e) {
            e.preventDefault(); // Prevenir el comportamiento de navegación predeterminado

            const modulo = this.getAttribute('href').substring(1); // Elimina el símbolo '#' para obtener el nombre del módulo
            cargarModulo(`${modulo}.html`); // Asume que el nombre del módulo coincide con el archivo HTML
        });
    });
});

function cargarModulo(urlModulo) {
    const contentArea = document.getElementById('contenidoPrincipal'); // Asegúrate de que el ID corresponda al del área de contenido
    fetch(urlModulo)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.text();
        })
        .then(html => {
            contentArea.innerHTML = html;
        })
        .catch(error => {
            console.error('Error al cargar el módulo:', error);
            contentArea.innerHTML = '<p>Error al cargar el contenido. Por favor, inténtelo de nuevo más tarde.</p>';
        });
}
