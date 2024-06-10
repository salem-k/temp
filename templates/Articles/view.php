<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="articles view content">
            <h3><?= h($article->name) ?></h3>
          <section class="content">
            <div class="row">
              <div class="col-md-6">
                <div class="box">
                  <div class="box-header with-border">
                    <style>
                      /* Add spacing between table rows */
                      table {
                        border-collapse: separate;
                        border-spacing: 10px; /* Adjust as needed */
                      }
                    </style>
            <table>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($article->Code) ?></td>
                </tr>
                </tr>
                <tr>
                    <th><?= __('Dsignation') ?></th>
                    <td><?= h($article->Dsignation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($article->Description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tva') ?></th>
                    <td><?= $article->has('tva') ? $this->Html->link($article->tva->name, ['controller' => 'Tvas', 'action' => 'view', $article->tva->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Inventaire') ?></th>
                    <td><?= h($article->Date_Inventaire) ?></td>
                </tr>


                <tr>
                    <th><?= __('Typearticle') ?></th>
                    <td><?= $article->has('typearticle') ? $this->Html->link($article->typearticle->name, ['controller' => 'Typearticles', 'action' => 'view', $article->typearticle->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Codeabarre') ?></th>
                    <td><?= h($article->codeabarre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unite') ?></th>
                    <td><?= $article->has('unite') ? $this->Html->link($article->unite->name, ['controller' => 'Unites', 'action' => 'view', $article->unite->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Devise') ?></th>
                    <td><?= $article->has('devise') ? $this->Html->link($article->devise->name, ['controller' => 'Devises', 'action' => 'view', $article->devise->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Densite') ?></th>
                    <td><?= h($article->densite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reffourni') ?></th>
                    <td><?= h($article->Reffourni) ?></td>
                </tr>
                <tr>
                    <th><?= __('RefCO') ?></th>
                    <td><?= h($article->Refggb) ?></td>
                </tr>
                <tr>
                    <th><?= __('URL') ?></th>
                    <td><?= h($article->URL) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay') ?></th>
                    <td><?= $article->has('pay') ? $this->Html->link($article->pay->name, ['controller' => 'Pays', 'action' => 'view', $article->pay->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Longueur') ?></th>
                    <td><?= h($article->longueur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Largeur') ?></th>
                    <td><?= h($article->largeur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hauteur') ?></th>
                    <td><?= h($article->hauteur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Surface') ?></th>
                    <td><?= h($article->surface) ?></td>
                </tr>
                <tr>
                    <th><?= __('Volume') ?></th>
                    <td><?= h($article->volume) ?></td>
                </tr>
                <tr>
                    <th><?= __('Note') ?></th>
                    <td><?= h($article->note) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $article->has('category') ? $this->Html->link($article->category->name, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Souscategory') ?></th>
                    <td><?= $article->has('souscategory') ? $this->Html->link($article->souscategory->name, ['controller' => 'Souscategories', 'action' => 'view', $article->souscategory->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fournisseur') ?></th>
                    <td><?= $article->has('fournisseur') ? $this->Html->link($article->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $article->fournisseur->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dure') ?></th>
                    <td><?= h($article->dure) ?></td>
                </tr>


                <tr>
                    <th><?= __('Famille Id') ?></th>
                    <td><?= $article->famille_id === null ? '' : $this->Number->format($article->famille_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sousfamille1 Id') ?></th>
                    <td><?= $article->sousfamille1_id === null ? '' : $this->Number->format($article->sousfamille1_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantit Minimale') ?></th>
                    <td><?= $article->Quantit_Minimale === null ? '' : $this->Number->format($article->Quantit_Minimale) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantit Maximale') ?></th>
                    <td><?= $article->Quantit_Maximale === null ? '' : $this->Number->format($article->Quantit_Maximale) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantit Opt Commande') ?></th>
                    <td><?= $article->Quantit_Opt_Commande === null ? '' : $this->Number->format($article->Quantit_Opt_Commande) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix Moyen Pondr') ?></th>
                    <td><?= $article->Prix_Moyen_Pondr === null ? '' : $this->Number->format($article->Prix_Moyen_Pondr) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantit Command') ?></th>
                    <td><?= $article->Quantit_Command === null ? '' : $this->Number->format($article->Quantit_Command) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantit Reserv') ?></th>
                    <td><?= $article->Quantit_Reserv === null ? '' : $this->Number->format($article->Quantit_Reserv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantit Disponible') ?></th>
                    <td><?= $article->Quantit_Disponible === null ? '' : $this->Number->format($article->Quantit_Disponible) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantit Inventaire') ?></th>
                    <td><?= $article->Quantit_Inventaire === null ? '' : $this->Number->format($article->Quantit_Inventaire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantit LastInput') ?></th>
                    <td><?= $article->Quantit_LastInput === null ? '' : $this->Number->format($article->Quantit_LastInput) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix LastInput') ?></th>
                    <td><?= $article->Prix_LastInput === null ? '' : $this->Number->format($article->Prix_LastInput) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stockage') ?></th>
                    <td><?= $article->Stockage === null ? '' : $this->Number->format($article->Stockage) ?></td>
                </tr>

                <tr>
                    <th><?= __('PrixNom') ?></th>
                    <td><?= $article->PrixNom === null ? '' : $this->Number->format($article->PrixNom) ?></td>
                </tr>

                <tr>
                    <th><?= __('Poids') ?></th>
                    <td><?= $article->Poids === null ? '' : $this->Number->format($article->Poids) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombrepiece') ?></th>
                    <td><?= $article->nombrepiece === null ? '' : $this->Number->format($article->nombrepiece) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poidsbrut') ?></th>
                    <td><?= $article->poidsbrut === null ? '' : $this->Number->format($article->poidsbrut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prixttc') ?></th>
                    <td><?= $article->prixttc === null ? '' : $this->Number->format($article->prixttc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unitearticle Id') ?></th>
                    <td><?= $article->unitearticle_id === null ? '' : $this->Number->format($article->unitearticle_id) ?></td>
                </tr>

                <tr>
                    <th><?= __('Vente') ?></th>
                    <td><?= $article->vente === null ? '' : $this->Number->format($article->vente) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= $article->mobile === null ? '' : $this->Number->format($article->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lots') ?></th>
                    <td><?= $article->lots === null ? '' : $this->Number->format($article->lots) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codecomptablevente Id') ?></th>
                    <td><?= $article->codecomptablevente_id === null ? '' : $this->Number->format($article->codecomptablevente_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codecomptableexport Id') ?></th>
                    <td><?= $article->codecomptableexport_id === null ? '' : $this->Number->format($article->codecomptableexport_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codecomptableachat Id') ?></th>
                    <td><?= $article->codecomptableachat_id === null ? '' : $this->Number->format($article->codecomptableachat_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ancienprix') ?></th>
                    <td><?= $article->ancienprix === null ? '' : $this->Number->format($article->ancienprix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Meilleur Prix Achat') ?></th>
                    <td><?= $article->meilleur_prix_achat === null ? '' : $this->Number->format($article->meilleur_prix_achat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typearticle') ?></th>
                    <td><?= $article->typearticle === null ? '' : $this->Number->format($article->typearticle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datearticle') ?></th>
                    <td><?= h($article->datearticle) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Image') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($article->image)); ?>
                </blockquote>
            </div>

        </div>
    </div>
</div>
