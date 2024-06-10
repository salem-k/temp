<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salari $salari
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Salari'), ['action' => 'edit', $salari->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Salari'), ['action' => 'delete', $salari->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salari->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Salaris'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Salari'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="salaris view content">
            <h3><?= h($salari->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($salari->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($salari->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Fournisseurs') ?></h4>
                <?php if (!empty($salari->fournisseurs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Typefournisseur Id') ?></th>
                            <th><?= __('Typelocalisation Id') ?></th>
                            <th><?= __('Compte Comptable') ?></th>
                            <th><?= __('Ville Id') ?></th>
                            <th><?= __('Codepostal') ?></th>
                            <th><?= __('Region Id') ?></th>
                            <th><?= __('Pay Id') ?></th>
                            <th><?= __('Activite') ?></th>
                            <th><?= __('Secteur') ?></th>
                            <th><?= __('Tel') ?></th>
                            <th><?= __('Fax') ?></th>
                            <th><?= __('Mail') ?></th>
                            <th><?= __('Site') ?></th>
                            <th><?= __('Paiement Id') ?></th>
                            <th><?= __('Devise Id') ?></th>
                            <th><?= __('Typeutilisateur Id') ?></th>
                            <th><?= __('Exo') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Adresse') ?></th>
                            <th><?= __('Gouvernorat Id') ?></th>
                            <th><?= __('Delegation Id') ?></th>
                            <th><?= __('Localite Id') ?></th>
                            <th><?= __('Typetier Id') ?></th>
                            <th><?= __('Typeentite Id') ?></th>
                            <th><?= __('Villes') ?></th>
                            <th><?= __('Prospect Id') ?></th>
                            <th><?= __('Codecl') ?></th>
                            <th><?= __('Fournisseur') ?></th>
                            <th><?= __('Nomalternatif') ?></th>
                            <th><?= __('RC') ?></th>
                            <th><?= __('Codedouane') ?></th>
                            <th><?= __('Matricule Fiscale') ?></th>
                            <th><?= __('BAN') ?></th>
                            <th><?= __('AjusterTVA') ?></th>
                            <th><?= __('NumTVA') ?></th>
                            <th><?= __('Salari Id') ?></th>
                            <th><?= __('Capital') ?></th>
                            <th><?= __('Incoterm Id') ?></th>
                            <th><?= __('Port') ?></th>
                            <th><?= __('Tags') ?></th>
                            <th><?= __('Commercial') ?></th>
                            <th><?= __('Logo') ?></th>
                            <th><?= __('Datemodification') ?></th>
                            <th><?= __('Categorie Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($salari->fournisseurs as $fournisseurs) : ?>
                        <tr>
                            <td><?= h($fournisseurs->id) ?></td>
                            <td><?= h($fournisseurs->name) ?></td>
                            <td><?= h($fournisseurs->typefournisseur_id) ?></td>
                            <td><?= h($fournisseurs->typelocalisation_id) ?></td>
                            <td><?= h($fournisseurs->compte_comptable) ?></td>
                            <td><?= h($fournisseurs->ville_id) ?></td>
                            <td><?= h($fournisseurs->codepostal) ?></td>
                            <td><?= h($fournisseurs->region_id) ?></td>
                            <td><?= h($fournisseurs->pay_id) ?></td>
                            <td><?= h($fournisseurs->activite) ?></td>
                            <td><?= h($fournisseurs->secteur) ?></td>
                            <td><?= h($fournisseurs->tel) ?></td>
                            <td><?= h($fournisseurs->fax) ?></td>
                            <td><?= h($fournisseurs->mail) ?></td>
                            <td><?= h($fournisseurs->site) ?></td>
                            <td><?= h($fournisseurs->paiement_id) ?></td>
                            <td><?= h($fournisseurs->devise_id) ?></td>
                            <td><?= h($fournisseurs->typeutilisateur_id) ?></td>
                            <td><?= h($fournisseurs->exo) ?></td>
                            <td><?= h($fournisseurs->code) ?></td>
                            <td><?= h($fournisseurs->adresse) ?></td>
                            <td><?= h($fournisseurs->gouvernorat_id) ?></td>
                            <td><?= h($fournisseurs->delegation_id) ?></td>
                            <td><?= h($fournisseurs->localite_id) ?></td>
                            <td><?= h($fournisseurs->typetier_id) ?></td>
                            <td><?= h($fournisseurs->typeentite_id) ?></td>
                            <td><?= h($fournisseurs->villes) ?></td>
                            <td><?= h($fournisseurs->prospect_id) ?></td>
                            <td><?= h($fournisseurs->codecl) ?></td>
                            <td><?= h($fournisseurs->fournisseur) ?></td>
                            <td><?= h($fournisseurs->nomalternatif) ?></td>
                            <td><?= h($fournisseurs->RC) ?></td>
                            <td><?= h($fournisseurs->codedouane) ?></td>
                            <td><?= h($fournisseurs->matricule_fiscale) ?></td>
                            <td><?= h($fournisseurs->BAN) ?></td>
                            <td><?= h($fournisseurs->ajusterTVA) ?></td>
                            <td><?= h($fournisseurs->numTVA) ?></td>
                            <td><?= h($fournisseurs->salari_id) ?></td>
                            <td><?= h($fournisseurs->capital) ?></td>
                            <td><?= h($fournisseurs->incoterm_id) ?></td>
                            <td><?= h($fournisseurs->port) ?></td>
                            <td><?= h($fournisseurs->tags) ?></td>
                            <td><?= h($fournisseurs->commercial) ?></td>
                            <td><?= h($fournisseurs->logo) ?></td>
                            <td><?= h($fournisseurs->datemodification) ?></td>
                            <td><?= h($fournisseurs->categorie_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Fournisseurs', 'action' => 'view', $fournisseurs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Fournisseurs', 'action' => 'edit', $fournisseurs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fournisseurs', 'action' => 'delete', $fournisseurs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fournisseurs->id)]) ?>
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
