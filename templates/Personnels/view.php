<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personnel $personnel
 */
?>
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h3><strong><?= h($personnel->nom) ?></strong></h3>
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($personnel->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prenom') ?></th>
                    <td><?= h($personnel->prenom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fonction') ?></th>
                    <td><?= $personnel->has('fonction') ? $this->Html->link($personnel->fonction->name, ['controller' => 'Fonctions', 'action' => 'view', $personnel->fonction->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($personnel->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sex') ?></th>
                    <td><?= $personnel->has('sex') ? $this->Html->link($personnel->sex->name, ['controller' => 'Sexes', 'action' => 'view', $personnel->sex->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Situationfamiliale') ?></th>
                    <td><?= $personnel->has('situationfamiliale') ? $this->Html->link($personnel->situationfamiliale->name, ['controller' => 'Situationfamiliales', 'action' => 'view', $personnel->situationfamiliale->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Matriculecnss') ?></th>
                    <td><?= h($personnel->matriculecnss) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chefdefamille') ?></th>
                    <td><?= h($personnel->chefdefamille) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typecontrat') ?></th>
                    <td><?= $personnel->has('typecontrat') ? $this->Html->link($personnel->typecontrat->name, ['controller' => 'Typecontrats', 'action' => 'view', $personnel->typecontrat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $personnel->has('pointdevente') ? $this->Html->link($personnel->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $personnel->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($personnel->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($personnel->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($personnel->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($personnel->adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ville') ?></th>
                    <td><?= h($personnel->ville) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay') ?></th>
                    <td><?= $personnel->has('pay') ? $this->Html->link($personnel->pay->name, ['controller' => 'Pays', 'action' => 'view', $personnel->pay->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Telportable') ?></th>
                    <td><?= h($personnel->telportable) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fax') ?></th>
                    <td><?= h($personnel->fax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Compte Comptable') ?></th>
                    <td><?= h($personnel->compte_comptable) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notes') ?></th>
                    <td><?= h($personnel->notes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Signature') ?></th>
                    <td><?= h($personnel->signature) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($personnel->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombreenfant') ?></th>
                    <td><?= $personnel->nombreenfant === null ? '' : $this->Number->format($personnel->nombreenfant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $personnel->age === null ? '' : $this->Number->format($personnel->age) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salarie') ?></th>
                    <td><?= $personnel->salarie === null ? '' : $this->Number->format($personnel->salarie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsable') ?></th>
                    <td><?= $personnel->responsable === null ? '' : $this->Number->format($personnel->responsable) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Validator') ?></th>
                    <td><?= $personnel->report_validator === null ? '' : $this->Number->format($personnel->report_validator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Request Validator') ?></th>
                    <td><?= $personnel->request_validator === null ? '' : $this->Number->format($personnel->request_validator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codepostal') ?></th>
                    <td><?= $personnel->codepostal === null ? '' : $this->Number->format($personnel->codepostal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Canton Id') ?></th>
                    <td><?= $personnel->canton_id === null ? '' : $this->Number->format($personnel->canton_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tarif Horaire Moyen') ?></th>
                    <td><?= $personnel->tarif_horaire_moyen === null ? '' : $this->Number->format($personnel->tarif_horaire_moyen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tarif Journalier Moyen') ?></th>
                    <td><?= $personnel->tarif_journalier_moyen === null ? '' : $this->Number->format($personnel->tarif_journalier_moyen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salaire') ?></th>
                    <td><?= $personnel->salaire === null ? '' : $this->Number->format($personnel->salaire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Heures De Travail') ?></th>
                    <td><?= $personnel->heures_de_travail === null ? '' : $this->Number->format($personnel->heures_de_travail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateentre') ?></th>
                    <td><?= h($personnel->dateentre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Fin') ?></th>
                    <td><?= h($personnel->date_fin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datedenaissance') ?></th>
                    <td><?= h($personnel->datedenaissance) ?></td>
                </tr>
            </table>

            </div>
        </div>
    </div>
</div>
