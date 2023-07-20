

<h1>Número de clientes registrados: <?= $count ?></h1>

<?php if (!empty($cliente)): ?>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <!-- Agrega más columnas según las propiedades de tu modelo Cliente -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cliente as $cliente): ?>
                <tr>
                    <td><?= h($cliente->nombre) ?></td>
                    <td><?= h($cliente->email) ?></td>
                    <!-- Agrega más columnas según las propiedades de tu modelo Cliente -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No hay clientes registrados.</p>
<?php endif; ?>

<?= $this->Html->link('Volver a la lista de clientes', ['controller' => 'Cliente', 'action' => 'index'], ['class' => 'button']) ?>
