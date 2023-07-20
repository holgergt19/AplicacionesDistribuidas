const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const mysql = require('mysql2');

const app = express();
const port = 3000;

app.use(bodyParser.json());
app.use(cors());

// Configura la conexión a la base de datos
const db = mysql.createConnection({
    host: '127.0.0.1',
    user: 'root',
    port: '3306',
    password: '',
    database: 'entrega',
});

// Ruta para contar clientes
app.post('/contar-cliente', (req, res) => {
    const { nombre, email } = req.body;

    // Insertar el cliente en la base de datos
    const sql = 'INSERT INTO clientes (nombre, email) VALUES (?, ?)';
    db.query(sql, [nombre, email], (err, result) => {
        if (err) {
            console.error('Error al insertar el cliente:', err);
            res.status(500).json({ error: 'Error al insertar el cliente' });
        } else {
            console.log('Cliente insertado correctamente:', result);
            res.json({ message: 'Cliente insertado correctamente' });
        }
    });
});

// Ruta para obtener el contador de clientes
app.get('/contador-clientes', (req, res) => {
    // Obtener el contador de clientes desde la base de datos
    const sql = 'SELECT COUNT(*) as count FROM clientes';
    db.query(sql, (err, result) => {
        if (err) {
            console.error('Error al obtener el contador de clientes:', err);
            res.status(500).json({ error: 'Error al obtener el contador de clientes' });
        } else {
            const count = result[0].count;
            console.log('Contador de clientes:', count);
            res.json({ count });
        }
    });
});

// Inicia el servidor
app.listen(port, () => {
    console.log(`Servidor Express escuchando en http://localhost:${port}`);
});
