<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Menu'), ['action' => 'edit', $menu->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Menu'), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Menus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Menu'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="menus view content">
            <h3><?= h($menu->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($menu->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($menu->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Utilisateurmenus') ?></h4>
                <?php if (!empty($menu->utilisateurmenus)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Utilisateur Id') ?></th>
                            <th><?= __('Menu Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($menu->utilisateurmenus as $utilisateurmenus) : ?>
                        <tr>
                            <td><?= h($utilisateurmenus->id) ?></td>
                            <td><?= h($utilisateurmenus->utilisateur_id) ?></td>
                            <td><?= h($utilisateurmenus->menu_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Utilisateurmenus', 'action' => 'view', $utilisateurmenus->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Utilisateurmenus', 'action' => 'edit', $utilisateurmenus->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Utilisateurmenus', 'action' => 'delete', $utilisateurmenus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateurmenus->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
