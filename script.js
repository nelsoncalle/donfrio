// Reemplaza todo tu script.js con esto:
document.getElementById('searchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const searchTerm = document.getElementById('search').value.trim();
    if(searchTerm) {
        // Envía el formulario normalmente (recargará la página con los resultados)
        this.submit();
    }
});

function buscarPorCategoria(categoria) {
    document.getElementById('search').value = categoria;
    document.getElementById('searchForm').submit();
}


// Agrega esto al final de tu página (antes de </body>)
document.querySelectorAll('a[target="_blank"]').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Previene el bloqueo
        window.open(this.href, '_blank');
    });
});