function compartirProducto(nombre, descripcion, precio, caracteristicas, nuestrosTrabajos) {
    try {
        // Verificar parámetros
        console.log('Parámetros recibidos:', {nombre, descripcion, precio, caracteristicas, nuestrosTrabajos});
        
        const emoji = {
            title: '📌',
            description: '📝',
            price: '💲',
            features: '🚀',
            works: '🌐'
        };
        
        // Formatear precio
        let precioFormateado = precio;
        if (typeof precio === 'string') {
            precioFormateado = parseFloat(precio.replace(/[^\d.]/g, '')).toFixed(2);
        } else if (typeof precio === 'number') {
            precioFormateado = precio.toFixed(2);
        }
        
        // Construir mensaje
        let mensaje = [
            `${emoji.title} *${nombre.trim()}*`,
            `${emoji.description} *Descripción:* ${descripcion.trim()}`,
            `${emoji.price} *Precio:* $${precioFormateado}`,
            `${emoji.features} *Características:* ${caracteristicas.trim()}`,
            `${emoji.works} *Nuestros Trabajos:* ${nuestrosTrabajos.trim()}`
        ].join('\n\n');
        
        // Codificar y abrir WhatsApp
        const mensajeCodificado = encodeURIComponent(mensaje);
        window.open(`https://wa.me/?text=${mensajeCodificado}`, '_blank');
        
    } catch (error) {
        console.error('Error al compartir:', error);
        alert('Error al compartir: ' + error.message);
    }
}