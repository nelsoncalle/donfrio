const sql = require('mssql');

const config = {
    // user: 'donfrio',
    // password: 'nelson',
    server: 'DESKTOP-V1VA7C6', // o el nombre/IP de tu servidor
    database: 'Donfrio',
    options: {
        encrypt: true,
        trustServerCertificate: true
    }
};





// Función para conectar con la base de datos
async function conectarDB() {
    try {
        await sql.connect(config);
        console.log('✅ Conectado a SQL Server correctamente');
    } catch (error) {
        console.error('❌ Error en la conexión:', error);
    }
}

module.exports = { conectarDB, sql };
