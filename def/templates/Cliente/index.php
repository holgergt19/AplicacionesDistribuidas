<?php


?>


<div style="background-color: #095;">
    <h1 class="centrado" ,font-weight='bold'>BARBERLINK</h1>
    <div class="cliente index content">

        <?= $this->Html->link(__('Nuevo Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <?= $this->Html->link('Contar clientes registrados', ['controller' => 'Cliente', 'action' => 'count'], ['class' => 'button']) ?>
        

        <h3><?= __('Cliente') ?></h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('clienteId') ?></th>
                        <th><?= $this->Paginator->sort('nombre') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('password') ?></th>
                        <th><?= $this->Paginator->sort('telefono') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>

                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach ($cliente as $cliente) : ?>
                        <tr>
                            <td><?= $this->Number->format($cliente->clienteId) ?></td>
                            <td><?= h($cliente->nombre) ?></td>
                            <td><?= h($cliente->email) ?></td>
                            <td><?= h($cliente->password) ?></td>
                            <td><?= h($cliente->telefono) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->clienteId]) ?>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>
</div>