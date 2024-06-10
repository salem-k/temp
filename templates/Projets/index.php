<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Projet> $projets
 */
?>
<div class="projets index content">
    <?= $this->Html->link(__('New Projet'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Projets') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('libelle') ?></th>
                    <th><?= $this->Paginator->sort('datefin') ?></th>
                    <th><?= $this->Paginator->sort('visibilite') ?></th>
                    <th><?= $this->Paginator->sort('probabilite') ?></th>
                    <th><?= $this->Paginator->sort('montant') ?></th>
                    <th><?= $this->Paginator->sort('budget') ?></th>
                    <th><?= $this->Paginator->sort('opportunite_id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('commercial_id') ?></th>
                    <th><?= $this->Paginator->sort('personnel_id') ?></th>
                    <th><?= $this->Paginator->sort('valide') ?></th>
                    <th><?= $this->Paginator->sort('devise_id') ?></th>
                    <th><?= $this->Paginator->sort('banque_id') ?></th>
                    <th><?= $this->Paginator->sort('suivre_opportunite') ?></th>
                    <th><?= $this->Paginator->sort('suivre_tache') ?></th>
                    <th><?= $this->Paginator->sort('facturer_temps_passe') ?></th>
                    <th><?= $this->Paginator->sort('datemodification') ?></th>
                    <th><?= $this->Paginator->sort('etatTache') ?></th>
                    <th><?= $this->Paginator->sort('tagcategorie_id') ?></th>
                    <th><?= $this->Paginator->sort('lien') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projets as $projet): ?>
                <tr>
                    <td><?= $this->Number->format($projet->id) ?></td>
                    <td><?= $projet->has('client') ? $this->Html->link($projet->client->id, ['controller' => 'Clients', 'action' => 'view', $projet->client->id]) : '' ?></td>
                    <td><?= h($projet->date) ?></td>
                    <td><?= h($projet->name) ?></td>
                    <td><?= h($projet->libelle) ?></td>
                    <td><?= h($projet->datefin) ?></td>
                    <td><?= h($projet->visibilite) ?></td>
                    <td><?= h($projet->probabilite) ?></td>
                    <td><?= h($projet->montant) ?></td>
                    <td><?= h($projet->budget) ?></td>
                    <td><?= $projet->opportunite_id === null ? '' : $this->Number->format($projet->opportunite_id) ?></td>
                    <td><?= h($projet->description) ?></td>
                    <td><?= $projet->has('commercial') ? $this->Html->link($projet->commercial->name, ['controller' => 'Commercials', 'action' => 'view', $projet->commercial->id]) : '' ?></td>
                    <td><?= $projet->has('personnel') ? $this->Html->link($projet->personnel->id, ['controller' => 'Personnels', 'action' => 'view', $projet->personnel->id]) : '' ?></td>
                    <td><?= $projet->valide === null ? '' : $this->Number->format($projet->valide) ?></td>
                    <td><?= $projet->has('devise') ? $this->Html->link($projet->devise->name, ['controller' => 'Devises', 'action' => 'view', $projet->devise->id]) : '' ?></td>
                    <td><?= $projet->has('banque') ? $this->Html->link($projet->banque->name, ['controller' => 'Banques', 'action' => 'view', $projet->banque->id]) : '' ?></td>
                    <td><?= $projet->suivre_opportunite === null ? '' : $this->Number->format($projet->suivre_opportunite) ?></td>
                    <td><?= $projet->suivre_tache === null ? '' : $this->Number->format($projet->suivre_tache) ?></td>
                    <td><?= $projet->facturer_temps_passe === null ? '' : $this->Number->format($projet->facturer_temps_passe) ?></td>
                    <td><?= h($projet->datemodification) ?></td>
                    <td><?= $projet->etatTache === null ? '' : $this->Number->format($projet->etatTache) ?></td>
                    <td><?= $projet->tagcategorie_id === null ? '' : $this->Number->format($projet->tagcategorie_id) ?></td>
                    <td><?= h($projet->lien) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $projet->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projet->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projet->id)]) ?>
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
