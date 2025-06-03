function compartirProducto(nombre, descripcion, precio, imagen1, imagen2, video, idProducto) {
    try {
        const emoji = {
            title: '📌',
            description: '📝',
            price: '💲',
            image: '🖼️',
            video: '🎥',
            link: '🔗'
        };
        
        // Asegurar que el precio tenga 2 decimales
        const precioFormateado = typeof precio === 'number' ? precio.toFixed(2) : parseFloat(precio).toFixed(2);
        
        // Construir la URL del producto correctamente
        const urlProducto = `${window.location.origin}/donfrio-1/producto.php?id=${idProducto}`;
        
        // Construir el mensaje paso a paso
        let mensaje = `${emoji.title} *${nombre}*\n\n`;
        mensaje += `${emoji.description} *Descripción:* ${descripcion}\n\n`;
        mensaje += `${emoji.price} *Precio:* $${precioFormateado}\n\n`;
        
        if (imagen1) mensaje += `${emoji.image} *Imagen 1:* ${imagen1}\n`;
        if (imagen2) mensaje += `${emoji.image} *Imagen 2:* ${imagen2}\n`;
        if (video) mensaje += `${emoji.video} *Video:* ${video}\n\n`;
        
        mensaje += `${emoji.link} *Ver producto:* ${urlProducto}`;
        
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