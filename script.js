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