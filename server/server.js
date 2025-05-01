const express = require('express');
const cors = require('cors');
const { conectarDB, sql } = require('./db');

const app = express();
app.use(cors());

conectarDB(); // Llama la función para conectarse a la base de datos

// Endpoint para obtener productos desde la base de datos
app.get('/productos', async (req, res) => {
    try {
        const result = await sql.query('SELECT * FROM Productos'); // Ajusta según tu tabla
        res.json(result.recordset); // Envía los datos como JSON
    } catch (error) {
        res.status(500).send(error.message);
    }
});

// Iniciar el servidor
app.listen(3000, () => console.log('🚀 Servidor corriendo en http://localhost:3000'));
