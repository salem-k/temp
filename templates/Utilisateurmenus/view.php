<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilisateurmenu $utilisateurmenu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Utilisateurmenu'), ['action' => 'edit', $utilisateurmenu->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Utilisateurmenu'), ['action' => 'delete', $utilisateurmenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateurmenu->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Utilisateurmenus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Utilisateurmenu'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="utilisateurmenus view content">
            <h3><?= h($utilisateurmenu->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Utilisateur') ?></th>
                    <td><?= $utilisateurmenu->has('utilisateur') ? $this->Html->link($utilisateurmenu->utilisateur->name, ['controller' => 'Utilisateurs', 'action' => 'view', $utilisateurmenu->utilisateur->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Menu') ?></th>
                    <td><?= $utilisateurmenu->has('menu') ? $this->Html->link($utilisateurmenu->menu->name, ['controller' => 'Menus', 'action' => 'view', $utilisateurmenu->menu->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($utilisateurmenu->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Liens') ?></h4>
                <?php if (!empty($utilisateurmenu->liens)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Utilisateurmenu Id') ?></th>
                            <th><?= __('Lien') ?></th>
                            <th><?= __('Ajout') ?></th>
                            <th><?= __('Modif') ?></th>
                            <th><?= __('Supp') ?></th>
                            <th><?= __('Imprimer') ?></th>
                            <th><?= __('Valide') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($utilisateurmenu->liens as $liens) : ?>
                        <tr>
                            <td><?= h($liens->id) ?></td>
                            <td><?= h($liens->utilisateurmenu_id) ?></td>
                            <td><?= h($liens->lien) ?></td>
                            <td><?= h($liens->ajout) ?></td>
                            <td><?= h($liens->modif) ?></td>
                            <td><?= h($liens->supp) ?></td>
                            <td><?= h($liens->imprimer) ?></td>
                            <td><?= h($liens->valide) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Liens', 'action' => 'view', $liens->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Liens', 'action' => 'edit', $liens->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Liens', 'action' => 'delete', $liens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $liens->id)]) ?>
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
