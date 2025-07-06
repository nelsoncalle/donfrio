function compartirProducto(nombre, descripcion, precio, caracteristicas, nuestrostrbajos) {
    try {
        const emoji = {
            title: '📌',
            description: '📝',
            price: '💲',
            caracteristicas: 🚀,
            nuestrostrbajos: 🌐,
            
        };
        
        // Asegurar que el precio tenga 2 decimales
        const precioFormateado = typeof precio === 'number' ? precio.toFixed(2) : parseFloat(precio).toFixed(2);
        
        // Construir la URL del producto correctamente
        //const urlProducto = `${window.location.origin}/chiatec/servicios.php?id=${idProducto}`;
        
        // Construir el mensaje paso a paso
        let mensaje = `${emoji.title} *${nombre}*\n\n`;
        mensaje += `${emoji.description} *Descripción:* ${descripcion}\n\n`;
        mensaje += `${emoji.price} *Precio:* $${precioFormateado}\n\n`;
        mensaje += `${emoji.price} *Caracteristicas:* ${caracteristicas}\n\n`;
        mensaje += `${emoji.price} *Nuestros Trabajos:* ${nuestrostrbajos}\n\n`;
        
        
        
        // Codificar para URL
        const mensajeCodificado = encodeURIComponent(mensaje);
        const whatsappUrl = `https://api.whatsapp.com/send?text=${mensajeCodificado}`;
        
        // Abrir en nueva pestaña
        window.open(whatsappUrl, '_blank');
        
    } catch (error) {
        console.error('Error al compartir:', error);
        alert('Error al compartir. Por favor intente manualmente.');
    }
}