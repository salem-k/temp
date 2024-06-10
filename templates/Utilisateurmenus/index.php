<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Utilisateurmenu> $utilisateurmenus
 */
?>
<div class="utilisateurmenus index content">
    <?= $this->Html->link(__('New Utilisateurmenu'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Utilisateurmenus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('utilisateur_id') ?></th>
                    <th><?= $this->Paginator->sort('menu_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($utilisateurmenus as $utilisateurmenu): ?>
                <tr>
                    <td><?= $this->Number->format($utilisateurmenu->id) ?></td>
                    <td><?= $utilisateurmenu->has('utilisateur') ? $this->Html->link($utilisateurmenu->utilisateur->name, ['controller' => 'Utilisateurs', 'action' => 'view', $utilisateurmenu->utilisateur->id]) : '' ?></td>
                    <td><?= $utilisateurmenu->has('menu') ? $this->Html->link($utilisateurmenu->menu->name, ['controller' => 'Menus', 'action' => 'view', $utilisateurmenu->menu->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $utilisateurmenu->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $utilisateurmenu->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $utilisateurmenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateurmenu->id)]) ?>
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
