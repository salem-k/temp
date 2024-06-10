<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unite $unite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Unite'), ['action' => 'edit', $unite->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Unite'), ['action' => 'delete', $unite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unite->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Unites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Unite'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="unites view content">
            <h3><?= h($unite->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($unite->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('TypeU') ?></th>
                    <td><?= h($unite->typeU) ?></td>
                </tr>
                <tr>
                    <th><?= __('Formule') ?></th>
                    <td><?= h($unite->formule) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($unite->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($unite->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Articles') ?></h4>
                <?php if (!empty($unite->articles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Code Socit') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Dsignation') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Famille Id') ?></th>
                            <th><?= __('Sousfamille1 Id') ?></th>
                            <th><?= __('Tva Id') ?></th>
                            <th><?= __('Quantit Minimale') ?></th>
                            <th><?= __('Quantit Maximale') ?></th>
                            <th><?= __('Quantit Opt Commande') ?></th>
                            <th><?= __('Prix Moyen Pondr') ?></th>
                            <th><?= __('Quantit Command') ?></th>
                            <th><?= __('Quantit Reserv') ?></th>
                            <th><?= __('Quantit Disponible') ?></th>
                            <th><?= __('Quantit Inventaire') ?></th>
                            <th><?= __('Date Inventaire') ?></th>
                            <th><?= __('Quantit LastInput') ?></th>
                            <th><?= __('Prix LastInput') ?></th>
                            <th><?= __('Date LastInput') ?></th>
                            <th><?= __('Stockage') ?></th>
                            <th><?= __('ArtM') ?></th>
                            <th><?= __('PrixGamme') ?></th>
                            <th><?= __('AtGamme') ?></th>
                            <th><?= __('PrixNom') ?></th>
                            <th><?= __('QTR') ?></th>
                            <th><?= __('QTRSRT') ?></th>
                            <th><?= __('PXNOM2008') ?></th>
                            <th><?= __('PXGAMME2008') ?></th>
                            <th><?= __('Unite') ?></th>
                            <th><?= __('PHT') ?></th>
                            <th><?= __('Poids') ?></th>
                            <th><?= __('GRM') ?></th>
                            <th><?= __('TPP') ?></th>
                            <th><?= __('FRM') ?></th>
                            <th><?= __('CodeM') ?></th>
                            <th><?= __('ST') ?></th>
                            <th><?= __('QTMAG') ?></th>
                            <th><?= __('PTTC') ?></th>
                            <th><?= __('Quantit Disponible02') ?></th>
                            <th><?= __('Quantit Disponible03') ?></th>
                            <th><?= __('CodeEcolef') ?></th>
                            <th><?= __('PRIXEcolef') ?></th>
                            <th><?= __('POIDSECOLEF') ?></th>
                            <th><?= __('CodeTPE') ?></th>
                            <th><?= __('UserAdd') ?></th>
                            <th><?= __('DateAdd') ?></th>
                            <th><?= __('UserUpdate') ?></th>
                            <th><?= __('DateUpdate') ?></th>
                            <th><?= __('PrixMP') ?></th>
                            <th><?= __('PrixV') ?></th>
                            <th><?= __('PrixVM') ?></th>
                            <th><?= __('PrixEN') ?></th>
                            <th><?= __('TauxCharge') ?></th>
                            <th><?= __('CoutRevient') ?></th>
                            <th><?= __('Image') ?></th>
                            <th><?= __('Etat') ?></th>
                            <th><?= __('Inserted') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th><?= __('Ordre') ?></th>
                            <th><?= __('Typearticle Id') ?></th>
                            <th><?= __('Fodec') ?></th>
                            <th><?= __('Remise') ?></th>
                            <th><?= __('Nombrepiece') ?></th>
                            <th><?= __('Codeabarre') ?></th>
                            <th><?= __('Poidsbrut') ?></th>
                            <th><?= __('Prixttc') ?></th>
                            <th><?= __('Unitearticle Id') ?></th>
                            <th><?= __('Nbpiecepalette') ?></th>
                            <th><?= __('Contenance') ?></th>
                            <th><?= __('Unite Id') ?></th>
                            <th><?= __('Sousfamille2 Id') ?></th>
                            <th><?= __('Nbpoint') ?></th>
                            <th><?= __('Coefficient') ?></th>
                            <th><?= __('Nbjour') ?></th>
                            <th><?= __('Famillerotation Id') ?></th>
                            <th><?= __('Vente') ?></th>
                            <th><?= __('Devise Id') ?></th>
                            <th><?= __('Densite') ?></th>
                            <th><?= __('Mobile') ?></th>
                            <th><?= __('Reffourni') ?></th>
                            <th><?= __('Refggb') ?></th>
                            <th><?= __('Lots') ?></th>
                            <th><?= __('URL') ?></th>
                            <th><?= __('Pay Id') ?></th>
                            <th><?= __('Longueur') ?></th>
                            <th><?= __('Largeur') ?></th>
                            <th><?= __('Hauteur') ?></th>
                            <th><?= __('Surface') ?></th>
                            <th><?= __('Volume') ?></th>
                            <th><?= __('Note') ?></th>
                            <th><?= __('Categorie Id') ?></th>
                            <th><?= __('Souscategorie Id') ?></th>
                            <th><?= __('Codecomptablevente Id') ?></th>
                            <th><?= __('Codecomptableexport Id') ?></th>
                            <th><?= __('Codecomptableachat Id') ?></th>
                            <th><?= __('Datearticle') ?></th>
                            <th><?= __('Ancienprix') ?></th>
                            <th><?= __('Meilleur Prix Achat') ?></th>
                            <th><?= __('Fournisseur Id') ?></th>
                            <th><?= __('Typearticle') ?></th>
                            <th><?= __('Dure') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($unite->articles as $articles) : ?>
                        <tr>
                            <td><?= h($articles->id) ?></td>
                            <td><?= h($articles->Code_Socit) ?></td>
                            <td><?= h($articles->Code) ?></td>
                            <td><?= h($articles->Dsignation) ?></td>
                            <td><?= h($articles->Description) ?></td>
                            <td><?= h($articles->famille_id) ?></td>
                            <td><?= h($articles->sousfamille1_id) ?></td>
                            <td><?= h($articles->tva_id) ?></td>
                            <td><?= h($articles->Quantit_Minimale) ?></td>
                            <td><?= h($articles->Quantit_Maximale) ?></td>
                            <td><?= h($articles->Quantit_Opt_Commande) ?></td>
                            <td><?= h($articles->Prix_Moyen_Pondr) ?></td>
                            <td><?= h($articles->Quantit_Command) ?></td>
                            <td><?= h($articles->Quantit_Reserv) ?></td>
                            <td><?= h($articles->Quantit_Disponible) ?></td>
                            <td><?= h($articles->Quantit_Inventaire) ?></td>
                            <td><?= h($articles->Date_Inventaire) ?></td>
                            <td><?= h($articles->Quantit_LastInput) ?></td>
                            <td><?= h($articles->Prix_LastInput) ?></td>
                            <td><?= h($articles->Date_LastInput) ?></td>
                            <td><?= h($articles->Stockage) ?></td>
                            <td><?= h($articles->artM) ?></td>
                            <td><?= h($articles->PrixGamme) ?></td>
                            <td><?= h($articles->AtGamme) ?></td>
                            <td><?= h($articles->PrixNom) ?></td>
                            <td><?= h($articles->QTR) ?></td>
                            <td><?= h($articles->QTRSRT) ?></td>
                            <td><?= h($articles->PXNOM2008) ?></td>
                            <td><?= h($articles->PXGAMME2008) ?></td>
                            <td><?= h($articles->Unite) ?></td>
                            <td><?= h($articles->PHT) ?></td>
                            <td><?= h($articles->Poids) ?></td>
                            <td><?= h($articles->GRM) ?></td>
                            <td><?= h($articles->TPP) ?></td>
                            <td><?= h($articles->FRM) ?></td>
                            <td><?= h($articles->CodeM) ?></td>
                            <td><?= h($articles->ST) ?></td>
                            <td><?= h($articles->QTMAG) ?></td>
                            <td><?= h($articles->PTTC) ?></td>
                            <td><?= h($articles->Quantit_Disponible02) ?></td>
                            <td><?= h($articles->Quantit_Disponible03) ?></td>
                            <td><?= h($articles->CodeEcolef) ?></td>
                            <td><?= h($articles->PRIXEcolef) ?></td>
                            <td><?= h($articles->POIDSECOLEF) ?></td>
                            <td><?= h($articles->CodeTPE) ?></td>
                            <td><?= h($articles->UserAdd) ?></td>
                            <td><?= h($articles->DateAdd) ?></td>
                            <td><?= h($articles->UserUpdate) ?></td>
                            <td><?= h($articles->DateUpdate) ?></td>
                            <td><?= h($articles->PrixMP) ?></td>
                            <td><?= h($articles->PrixV) ?></td>
                            <td><?= h($articles->PrixVM) ?></td>
                            <td><?= h($articles->PrixEN) ?></td>
                            <td><?= h($articles->TauxCharge) ?></td>
                            <td><?= h($articles->CoutRevient) ?></td>
                            <td><?= h($articles->image) ?></td>
                            <td><?= h($articles->etat) ?></td>
                            <td><?= h($articles->inserted) ?></td>
                            <td><?= h($articles->updated) ?></td>
                            <td><?= h($articles->ordre) ?></td>
                            <td><?= h($articles->typearticle_id) ?></td>
                            <td><?= h($articles->fodec) ?></td>
                            <td><?= h($articles->remise) ?></td>
                            <td><?= h($articles->nombrepiece) ?></td>
                            <td><?= h($articles->codeabarre) ?></td>
                            <td><?= h($articles->poidsbrut) ?></td>
                            <td><?= h($articles->prixttc) ?></td>
                            <td><?= h($articles->unitearticle_id) ?></td>
                            <td><?= h($articles->nbpiecepalette) ?></td>
                            <td><?= h($articles->contenance) ?></td>
                            <td><?= h($articles->unite_id) ?></td>
                            <td><?= h($articles->sousfamille2_id) ?></td>
                            <td><?= h($articles->nbpoint) ?></td>
                            <td><?= h($articles->coefficient) ?></td>
                            <td><?= h($articles->nbjour) ?></td>
                            <td><?= h($articles->famillerotation_id) ?></td>
                            <td><?= h($articles->vente) ?></td>
                            <td><?= h($articles->devise_id) ?></td>
                            <td><?= h($articles->densite) ?></td>
                            <td><?= h($articles->mobile) ?></td>
                            <td><?= h($articles->Reffourni) ?></td>
                            <td><?= h($articles->Refggb) ?></td>
                            <td><?= h($articles->lots) ?></td>
                            <td><?= h($articles->URL) ?></td>
                            <td><?= h($articles->pay_id) ?></td>
                            <td><?= h($articles->longueur) ?></td>
                            <td><?= h($articles->largeur) ?></td>
                            <td><?= h($articles->hauteur) ?></td>
                            <td><?= h($articles->surface) ?></td>
                            <td><?= h($articles->volume) ?></td>
                            <td><?= h($articles->note) ?></td>
                            <td><?= h($articles->categorie_id) ?></td>
                            <td><?= h($articles->souscategorie_id) ?></td>
                            <td><?= h($articles->codecomptablevente_id) ?></td>
                            <td><?= h($articles->codecomptableexport_id) ?></td>
                            <td><?= h($articles->codecomptableachat_id) ?></td>
                            <td><?= h($articles->datearticle) ?></td>
                            <td><?= h($articles->ancienprix) ?></td>
                            <td><?= h($articles->meilleur_prix_achat) ?></td>
                            <td><?= h($articles->fournisseur_id) ?></td>
                            <td><?= h($articles->typearticle) ?></td>
                            <td><?= h($articles->dure) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
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
