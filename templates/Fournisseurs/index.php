<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Fournisseur> $fournisseurs
 */
?>
<div class="fournisseurs index content">
    <?= $this->Html->link(__('New Fournisseur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Fournisseurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('typefournisseur_id') ?></th>
                    <th><?= $this->Paginator->sort('typelocalisation_id') ?></th>
                    <th><?= $this->Paginator->sort('compte_comptable') ?></th>
                    <th><?= $this->Paginator->sort('ville_id') ?></th>
                    <th><?= $this->Paginator->sort('codepostal') ?></th>
                    <th><?= $this->Paginator->sort('region_id') ?></th>
                    <th><?= $this->Paginator->sort('pay_id') ?></th>
                    <th><?= $this->Paginator->sort('activite') ?></th>
                    <th><?= $this->Paginator->sort('secteur') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('fax') ?></th>
                    <th><?= $this->Paginator->sort('mail') ?></th>
                    <th><?= $this->Paginator->sort('site') ?></th>
                    <th><?= $this->Paginator->sort('paiement_id') ?></th>
                    <th><?= $this->Paginator->sort('devise_id') ?></th>
                    <th><?= $this->Paginator->sort('typeutilisateur_id') ?></th>
                    <th><?= $this->Paginator->sort('exo') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('adresse') ?></th>
                    <th><?= $this->Paginator->sort('gouvernorat_id') ?></th>
                    <th><?= $this->Paginator->sort('delegation_id') ?></th>
                    <th><?= $this->Paginator->sort('localite_id') ?></th>
                    <th><?= $this->Paginator->sort('typetier_id') ?></th>
                    <th><?= $this->Paginator->sort('typeentite_id') ?></th>
                    <th><?= $this->Paginator->sort('villes') ?></th>
                    <th><?= $this->Paginator->sort('prospect_id') ?></th>
                    <th><?= $this->Paginator->sort('codecl') ?></th>
                    <th><?= $this->Paginator->sort('fournisseur') ?></th>
                    <th><?= $this->Paginator->sort('nomalternatif') ?></th>
                    <th><?= $this->Paginator->sort('RC') ?></th>
                    <th><?= $this->Paginator->sort('codedouane') ?></th>
                    <th><?= $this->Paginator->sort('matricule_fiscale') ?></th>
                    <th><?= $this->Paginator->sort('BAN') ?></th>
                    <th><?= $this->Paginator->sort('ajusterTVA') ?></th>
                    <th><?= $this->Paginator->sort('numTVA') ?></th>
                    <th><?= $this->Paginator->sort('salari_id') ?></th>
                    <th><?= $this->Paginator->sort('capital') ?></th>
                    <th><?= $this->Paginator->sort('incoterm_id') ?></th>
                    <th><?= $this->Paginator->sort('port') ?></th>
                    <th><?= $this->Paginator->sort('tags') ?></th>
                    <th><?= $this->Paginator->sort('commercial') ?></th>
                    <th><?= $this->Paginator->sort('logo') ?></th>
                    <th><?= $this->Paginator->sort('datemodification') ?></th>
                    <th><?= $this->Paginator->sort('categorie_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fournisseurs as $fournisseur): ?>
                <tr>
                    <td><?= $this->Number->format($fournisseur->id) ?></td>
                    <td><?= h($fournisseur->name) ?></td>
                    <td><?= $fournisseur->typefournisseur_id === null ? '' : $this->Number->format($fournisseur->typefournisseur_id) ?></td>
                    <td><?= $fournisseur->typelocalisation_id === null ? '' : $this->Number->format($fournisseur->typelocalisation_id) ?></td>
                    <td><?= h($fournisseur->compte_comptable) ?></td>
                    <td><?= $fournisseur->has('ville') ? $this->Html->link($fournisseur->ville->name, ['controller' => 'Villes', 'action' => 'view', $fournisseur->ville->id]) : '' ?></td>
                    <td><?= h($fournisseur->codepostal) ?></td>
                    <td><?= $fournisseur->region_id === null ? '' : $this->Number->format($fournisseur->region_id) ?></td>
                    <td><?= $fournisseur->has('pay') ? $this->Html->link($fournisseur->pay->name, ['controller' => 'Pays', 'action' => 'view', $fournisseur->pay->id]) : '' ?></td>
                    <td><?= h($fournisseur->activite) ?></td>
                    <td><?= h($fournisseur->secteur) ?></td>
                    <td><?= h($fournisseur->tel) ?></td>
                    <td><?= h($fournisseur->fax) ?></td>
                    <td><?= h($fournisseur->mail) ?></td>
                    <td><?= h($fournisseur->site) ?></td>
                    <td><?= $fournisseur->has('paiement') ? $this->Html->link($fournisseur->paiement->id, ['controller' => 'Paiements', 'action' => 'view', $fournisseur->paiement->id]) : '' ?></td>
                    <td><?= $fournisseur->devise_id === null ? '' : $this->Number->format($fournisseur->devise_id) ?></td>
                    <td><?= $fournisseur->typeutilisateur_id === null ? '' : $this->Number->format($fournisseur->typeutilisateur_id) ?></td>
                    <td><?= $fournisseur->exo === null ? '' : $this->Number->format($fournisseur->exo) ?></td>
                    <td><?= h($fournisseur->code) ?></td>
                    <td><?= h($fournisseur->adresse) ?></td>
                    <td><?= $fournisseur->gouvernorat_id === null ? '' : $this->Number->format($fournisseur->gouvernorat_id) ?></td>
                    <td><?= $fournisseur->has('delegation') ? $this->Html->link($fournisseur->delegation->name, ['controller' => 'Delegations', 'action' => 'view', $fournisseur->delegation->id]) : '' ?></td>
                    <td><?= $fournisseur->has('localite') ? $this->Html->link($fournisseur->localite->name, ['controller' => 'Localites', 'action' => 'view', $fournisseur->localite->id]) : '' ?></td>
                    <td><?= $fournisseur->typetier_id === null ? '' : $this->Number->format($fournisseur->typetier_id) ?></td>
                    <td><?= $fournisseur->typeentite_id === null ? '' : $this->Number->format($fournisseur->typeentite_id) ?></td>
                    <td><?= h($fournisseur->villes) ?></td>
                    <td><?= $fournisseur->prospect_id === null ? '' : $this->Number->format($fournisseur->prospect_id) ?></td>
                    <td><?= h($fournisseur->codecl) ?></td>
                    <td><?= h($fournisseur->fournisseur) ?></td>
                    <td><?= h($fournisseur->nomalternatif) ?></td>
                    <td><?= h($fournisseur->RC) ?></td>
                    <td><?= h($fournisseur->codedouane) ?></td>
                    <td><?= h($fournisseur->matricule_fiscale) ?></td>
                    <td><?= h($fournisseur->BAN) ?></td>
                    <td><?= h($fournisseur->ajusterTVA) ?></td>
                    <td><?= h($fournisseur->numTVA) ?></td>
                    <td><?= $fournisseur->salari_id === null ? '' : $this->Number->format($fournisseur->salari_id) ?></td>
                    <td><?= h($fournisseur->capital) ?></td>
                    <td><?= $fournisseur->incoterm_id === null ? '' : $this->Number->format($fournisseur->incoterm_id) ?></td>
                    <td><?= h($fournisseur->port) ?></td>
                    <td><?= h($fournisseur->tags) ?></td>
                    <td><?= h($fournisseur->commercial) ?></td>
                    <td><?= h($fournisseur->logo) ?></td>
                    <td><?= h($fournisseur->datemodification) ?></td>
                    <td><?= $fournisseur->has('category') ? $this->Html->link($fournisseur->category->Description, ['controller' => 'Categories', 'action' => 'view', $fournisseur->category->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $fournisseur->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fournisseur->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fournisseur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fournisseur->id)]) ?>
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
