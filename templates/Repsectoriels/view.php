<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Repsectoriel $repsectoriel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Repsectoriel'), ['action' => 'edit', $repsectoriel->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Repsectoriel'), ['action' => 'delete', $repsectoriel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $repsectoriel->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Repsectoriels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Repsectoriel'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="repsectoriels view content">
            <h3><?= h($repsectoriel->Responsable) ?></h3>
            <table>
                <tr>
                    <th><?= __('Responsable') ?></th>
                    <td><?= h($repsectoriel->Responsable) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($repsectoriel->Username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($repsectoriel->Password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($repsectoriel->Email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Voiture') ?></th>
                    <td><?= h($repsectoriel->Voiture) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categorie') ?></th>
                    <td><?= h($repsectoriel->Categorie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remplacant Id') ?></th>
                    <td><?= h($repsectoriel->Remplacant_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activity') ?></th>
                    <td><?= h($repsectoriel->Activity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Depotttt Id') ?></th>
                    <td><?= h($repsectoriel->depotttt_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($repsectoriel->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Telephone') ?></th>
                    <td><?= $this->Number->format($repsectoriel->Numero_telephone) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Commandegross') ?></h4>
                <?php if (!empty($repsectoriel->commandegross)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date Debut') ?></th>
                            <th><?= __('Date Din') ?></th>
                            <th><?= __('Repsommsects Id') ?></th>
                            <th><?= __('Repgros Id') ?></th>
                            <th><?= __('Repsectoriel Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($repsectoriel->commandegross as $commandegross) : ?>
                        <tr>
                            <td><?= h($commandegross->id) ?></td>
                            <td><?= h($commandegross->Date_debut) ?></td>
                            <td><?= h($commandegross->Date_din) ?></td>
                            <td><?= h($commandegross->repsommsects_id) ?></td>
                            <td><?= h($commandegross->repgros_id) ?></td>
                            <td><?= h($commandegross->repsectoriel_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Commandegross', 'action' => 'view', $commandegross->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Commandegross', 'action' => 'edit', $commandegross->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commandegross', 'action' => 'delete', $commandegross->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandegross->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Commandesects') ?></h4>
                <?php if (!empty($repsectoriel->commandesects)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date Debut') ?></th>
                            <th><?= __('Date Fin') ?></th>
                            <th><?= __('Repsommsects Id') ?></th>
                            <th><?= __('Repgros Id') ?></th>
                            <th><?= __('Repsectoriel Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($repsectoriel->commandesects as $commandesects) : ?>
                        <tr>
                            <td><?= h($commandesects->id) ?></td>
                            <td><?= h($commandesects->Date_debut) ?></td>
                            <td><?= h($commandesects->Date_fin) ?></td>
                            <td><?= h($commandesects->repsommsects_id) ?></td>
                            <td><?= h($commandesects->repgros_id) ?></td>
                            <td><?= h($commandesects->repsectoriel_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Commandesects', 'action' => 'view', $commandesects->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Commandesects', 'action' => 'edit', $commandesects->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commandesects', 'action' => 'delete', $commandesects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandesects->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Commentaires') ?></h4>
                <?php if (!empty($repsectoriel->commentaires)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Repgros Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Repsectoriel Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($repsectoriel->commentaires as $commentaires) : ?>
                        <tr>
                            <td><?= h($commentaires->id) ?></td>
                            <td><?= h($commentaires->Description) ?></td>
                            <td><?= h($commentaires->Repgros_id) ?></td>
                            <td><?= h($commentaires->Date) ?></td>
                            <td><?= h($commentaires->repsectoriel_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Commentaires', 'action' => 'view', $commentaires->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Commentaires', 'action' => 'edit', $commentaires->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commentaires', 'action' => 'delete', $commentaires->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaires->id)]) ?>
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
