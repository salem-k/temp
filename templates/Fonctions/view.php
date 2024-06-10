<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fonction $fonction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Fonction'), ['action' => 'edit', $fonction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Fonction'), ['action' => 'delete', $fonction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fonction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Fonctions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Fonction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fonctions view content">
            <h3><?= h($fonction->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($fonction->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($fonction->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Personnels') ?></h4>
                <?php if (!empty($fonction->personnels)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nom') ?></th>
                            <th><?= __('Prenom') ?></th>
                            <th><?= __('Fonction Id') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Sexe Id') ?></th>
                            <th><?= __('Dateentre') ?></th>
                            <th><?= __('Situationfamiliale Id') ?></th>
                            <th><?= __('Nombreenfant') ?></th>
                            <th><?= __('Matriculecnss') ?></th>
                            <th><?= __('Age') ?></th>
                            <th><?= __('Chefdefamille') ?></th>
                            <th><?= __('Typecontrat Id') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Image') ?></th>
                            <th><?= __('Tel') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Salarie') ?></th>
                            <th><?= __('Responsable') ?></th>
                            <th><?= __('Report Validator') ?></th>
                            <th><?= __('Request Validator') ?></th>
                            <th><?= __('Adresse') ?></th>
                            <th><?= __('Codepostal') ?></th>
                            <th><?= __('Ville') ?></th>
                            <th><?= __('Pay Id') ?></th>
                            <th><?= __('Canton Id') ?></th>
                            <th><?= __('Telportable') ?></th>
                            <th><?= __('Fax') ?></th>
                            <th><?= __('Compte Comptable') ?></th>
                            <th><?= __('Tarif Horaire Moyen') ?></th>
                            <th><?= __('Tarif Journalier Moyen') ?></th>
                            <th><?= __('Salaire') ?></th>
                            <th><?= __('Heures De Travail') ?></th>
                            <th><?= __('Date Fin') ?></th>
                            <th><?= __('Datedenaissance') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Signature') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($fonction->personnels as $personnels) : ?>
                        <tr>
                            <td><?= h($personnels->id) ?></td>
                            <td><?= h($personnels->nom) ?></td>
                            <td><?= h($personnels->prenom) ?></td>
                            <td><?= h($personnels->fonction_id) ?></td>
                            <td><?= h($personnels->code) ?></td>
                            <td><?= h($personnels->sexe_id) ?></td>
                            <td><?= h($personnels->dateentre) ?></td>
                            <td><?= h($personnels->situationfamiliale_id) ?></td>
                            <td><?= h($personnels->nombreenfant) ?></td>
                            <td><?= h($personnels->matriculecnss) ?></td>
                            <td><?= h($personnels->age) ?></td>
                            <td><?= h($personnels->chefdefamille) ?></td>
                            <td><?= h($personnels->typecontrat_id) ?></td>
                            <td><?= h($personnels->pointdevente_id) ?></td>
                            <td><?= h($personnels->image) ?></td>
                            <td><?= h($personnels->tel) ?></td>
                            <td><?= h($personnels->email) ?></td>
                            <td><?= h($personnels->salarie) ?></td>
                            <td><?= h($personnels->responsable) ?></td>
                            <td><?= h($personnels->report_validator) ?></td>
                            <td><?= h($personnels->request_validator) ?></td>
                            <td><?= h($personnels->adresse) ?></td>
                            <td><?= h($personnels->codepostal) ?></td>
                            <td><?= h($personnels->ville) ?></td>
                            <td><?= h($personnels->pay_id) ?></td>
                            <td><?= h($personnels->canton_id) ?></td>
                            <td><?= h($personnels->telportable) ?></td>
                            <td><?= h($personnels->fax) ?></td>
                            <td><?= h($personnels->compte_comptable) ?></td>
                            <td><?= h($personnels->tarif_horaire_moyen) ?></td>
                            <td><?= h($personnels->tarif_journalier_moyen) ?></td>
                            <td><?= h($personnels->salaire) ?></td>
                            <td><?= h($personnels->heures_de_travail) ?></td>
                            <td><?= h($personnels->date_fin) ?></td>
                            <td><?= h($personnels->datedenaissance) ?></td>
                            <td><?= h($personnels->notes) ?></td>
                            <td><?= h($personnels->signature) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Personnels', 'action' => 'view', $personnels->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Personnels', 'action' => 'edit', $personnels->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Personnels', 'action' => 'delete', $personnels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personnels->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Representants') ?></h4>
                <?php if (!empty($fonction->representants)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Personnel Id') ?></th>
                            <th><?= __('Fonction Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($fonction->representants as $representants) : ?>
                        <tr>
                            <td><?= h($representants->id) ?></td>
                            <td><?= h($representants->Name) ?></td>
                            <td><?= h($representants->personnel_id) ?></td>
                            <td><?= h($representants->fonction_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Representants', 'action' => 'view', $representants->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Representants', 'action' => 'edit', $representants->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Representants', 'action' => 'delete', $representants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $representants->id)]) ?>
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
