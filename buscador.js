const productos = [
    { nombre: "Zapatos", descripcion: "Zapatos deportivos", precio: 50 },
    { nombre: "Camiseta", descripcion: "Camiseta de algodón", precio: 20 },
  ];
  
  function buscarProducto() {
    const consulta = document.getElementById("search").value.toLowerCase();
    const resultados = productos.filter(producto =>
      producto.nombre.toLowerCase().includes(consulta) ||
      producto.descripcion.toLowerCase().includes(consulta)
    );
  
    console.log(resultados); // Aquí puedes mostrar los resultados en la web
  }
  