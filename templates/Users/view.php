<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Personnel') ?></th>
                    <td><?= $user->has('personnel') ? $this->Html->link($user->personnel->id, ['controller' => 'Personnels', 'action' => 'view', $user->personnel->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Utilisateur') ?></th>
                    <td><?= $user->has('utilisateur') ? $this->Html->link($user->utilisateur->name, ['controller' => 'Utilisateurs', 'action' => 'view', $user->utilisateur->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Login') ?></th>
                    <td><?= h($user->login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $user->has('pointdevente') ? $this->Html->link($user->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $user->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $user->has('depot') ? $this->Html->link($user->depot->name, ['controller' => 'Depots', 'action' => 'view', $user->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Poste') ?></th>
                    <td><?= h($user->poste) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stocknegatif') ?></th>
                    <td><?= $user->stocknegatif === null ? '' : $this->Number->format($user->stocknegatif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifdevis') ?></th>
                    <td><?= $user->notifdevis === null ? '' : $this->Number->format($user->notifdevis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifcaisse') ?></th>
                    <td><?= $user->notifcaisse === null ? '' : $this->Number->format($user->notifcaisse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifbsstock') ?></th>
                    <td><?= $user->notifbsstock === null ? '' : $this->Number->format($user->notifbsstock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifaffaire') ?></th>
                    <td><?= $user->notifaffaire === null ? '' : $this->Number->format($user->notifaffaire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifvisite') ?></th>
                    <td><?= $user->notifvisite === null ? '' : $this->Number->format($user->notifvisite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifpmp') ?></th>
                    <td><?= $user->modifpmp === null ? '' : $this->Number->format($user->modifpmp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifartdevis') ?></th>
                    <td><?= $user->notifartdevis === null ? '' : $this->Number->format($user->notifartdevis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imp Val Inventaire') ?></th>
                    <td><?= $user->imp_val_inventaire === null ? '' : $this->Number->format($user->imp_val_inventaire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imp Val Bonecart') ?></th>
                    <td><?= $user->imp_val_bonecart === null ? '' : $this->Number->format($user->imp_val_bonecart) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trans Vers Prod') ?></th>
                    <td><?= $user->trans_vers_prod === null ? '' : $this->Number->format($user->trans_vers_prod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Factureclient') ?></th>
                    <td><?= $user->factureclient === null ? '' : $this->Number->format($user->factureclient) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifcommandeclient') ?></th>
                    <td><?= $user->notifcommandeclient === null ? '' : $this->Number->format($user->notifcommandeclient) ?></td>
                </tr>
                <tr>
                    <th><?= __('MajNumero') ?></th>
                    <td><?= $user->MajNumero === null ? '' : $this->Number->format($user->MajNumero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mail') ?></th>
                    <td><?= $user->mail === null ? '' : $this->Number->format($user->mail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validation') ?></th>
                    <td><?= $user->validation === null ? '' : $this->Number->format($user->validation) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Notes') ?></h4>
                <?php if (!empty($user->notes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Notepub') ?></th>
                            <th><?= __('Noteprive') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->notes as $notes) : ?>
                        <tr>
                            <td><?= h($notes->id) ?></td>
                            <td><?= h($notes->notepub) ?></td>
                            <td><?= h($notes->noteprive) ?></td>
                            <td><?= h($notes->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Notes', 'action' => 'view', $notes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Notes', 'action' => 'edit', $notes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notes', 'action' => 'delete', $notes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notes->id)]) ?>
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
