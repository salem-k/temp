<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bonreceptionstock $bonreceptionstock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bonreceptionstock'), ['action' => 'edit', $bonreceptionstock->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bonreceptionstock'), ['action' => 'delete', $bonreceptionstock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bonreceptionstock->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bonreceptionstocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bonreceptionstock'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bonreceptionstocks view content">
            <h3><?= h($bonreceptionstock->numero) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($bonreceptionstock->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $bonreceptionstock->has('pointdevente') ? $this->Html->link($bonreceptionstock->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $bonreceptionstock->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $bonreceptionstock->has('depot') ? $this->Html->link($bonreceptionstock->depot->nom, ['controller' => 'Depots', 'action' => 'view', $bonreceptionstock->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Personnel') ?></th>
                    <td><?= $bonreceptionstock->has('personnel') ? $this->Html->link($bonreceptionstock->personnel->id, ['controller' => 'Personnels', 'action' => 'view', $bonreceptionstock->personnel->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bonreceptionstock->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Materieltransport Id') ?></th>
                    <td><?= $this->Number->format($bonreceptionstock->materieltransport_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cartecarburant Id') ?></th>
                    <td><?= $this->Number->format($bonreceptionstock->cartecarburant_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conffaieur Id') ?></th>
                    <td><?= $this->Number->format($bonreceptionstock->conffaieur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chauffeur Id') ?></th>
                    <td><?= $this->Number->format($bonreceptionstock->chauffeur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometragedepart') ?></th>
                    <td><?= $this->Number->format($bonreceptionstock->kilometragedepart) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometragearrive') ?></th>
                    <td><?= $this->Number->format($bonreceptionstock->kilometragearrive) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($bonreceptionstock->date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Bondetransferts') ?></h4>
                <?php if (!empty($bonreceptionstock->bondetransferts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depotarrive Id') ?></th>
                            <th><?= __('Depotsortie Id') ?></th>
                            <th><?= __('Cartecarburant Id') ?></th>
                            <th><?= __('Materieltransport Id') ?></th>
                            <th><?= __('Chauffeur Id') ?></th>
                            <th><?= __('Conffaieur Id') ?></th>
                            <th><?= __('Bonreceptionstock Id') ?></th>
                            <th><?= __('Kilometragedepart') ?></th>
                            <th><?= __('Kilometragearrive') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($bonreceptionstock->bondetransferts as $bondetransferts) : ?>
                        <tr>
                            <td><?= h($bondetransferts->id) ?></td>
                            <td><?= h($bondetransferts->numero) ?></td>
                            <td><?= h($bondetransferts->date) ?></td>
                            <td><?= h($bondetransferts->pointdevente_id) ?></td>
                            <td><?= h($bondetransferts->depotarrive_id) ?></td>
                            <td><?= h($bondetransferts->depotsortie_id) ?></td>
                            <td><?= h($bondetransferts->cartecarburant_id) ?></td>
                            <td><?= h($bondetransferts->materieltransport_id) ?></td>
                            <td><?= h($bondetransferts->chauffeur_id) ?></td>
                            <td><?= h($bondetransferts->conffaieur_id) ?></td>
                            <td><?= h($bondetransferts->bonreceptionstock_id) ?></td>
                            <td><?= h($bondetransferts->kilometragedepart) ?></td>
                            <td><?= h($bondetransferts->kilometragearrive) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Bondetransferts', 'action' => 'view', $bondetransferts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Bondetransferts', 'action' => 'edit', $bondetransferts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bondetransferts', 'action' => 'delete', $bondetransferts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bondetransferts->id)]) ?>
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
