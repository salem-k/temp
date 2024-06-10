<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Facture $facture
 */
?>
<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
            <strong><h3><?= h($facture->id) ?></strong></h3>
              <style>
                /* Add spacing between table rows */
                table {
                  border-collapse: separate;
                  border-spacing: 10px; /* Adjust as needed */
                }
              </style>
            <table>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($facture->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $facture->has('pointdevente') ? $this->Html->link($facture->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $facture->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $facture->has('depot') ? $this->Html->link($facture->depot->nom, ['controller' => 'Depots', 'action' => 'view', $facture->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Paiement') ?></th>
                    <td><?= $facture->has('paiement') ? $this->Html->link($facture->paiement->id, ['controller' => 'Paiements', 'action' => 'view', $facture->paiement->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $facture->has('client') ? $this->Html->link($facture->client->nom, ['controller' => 'Clients', 'action' => 'view', $facture->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Location Incoterms') ?></th>
                    <td><?= h($facture->location_incoterms) ?></td>
                </tr>
                <tr>
                    <th><?= __('Options Indicationenpdf') ?></th>
                    <td><?= h($facture->options_indicationenpdf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($facture->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Livraison Id') ?></th>
                    <td><?= $facture->livraison_id === null ? '' : $this->Number->format($facture->livraison_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fournisseur Id') ?></th>
                    <td><?= $facture->fournisseur_id === null ? '' : $this->Number->format($facture->fournisseur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cartecarburant Id') ?></th>
                    <td><?= $facture->cartecarburant_id === null ? '' : $this->Number->format($facture->cartecarburant_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Materieltransport Id') ?></th>
                    <td><?= $facture->materieltransport_id === null ? '' : $this->Number->format($facture->materieltransport_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chauffeur') ?></th>
                    <td><?= $facture->chauffeur === null ? '' : $this->Number->format($facture->chauffeur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Convoyeur') ?></th>
                    <td><?= $facture->convoyeur === null ? '' : $this->Number->format($facture->convoyeur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valide') ?></th>
                    <td><?= $this->Number->format($facture->valide) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remise') ?></th>
                    <td><?= $facture->remise === null ? '' : $this->Number->format($facture->remise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tva') ?></th>
                    <td><?= $facture->tva === null ? '' : $this->Number->format($facture->tva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fodec') ?></th>
                    <td><?= $facture->fodec === null ? '' : $this->Number->format($facture->fodec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ttc') ?></th>
                    <td><?= $facture->ttc === null ? '' : $this->Number->format($facture->ttc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ht') ?></th>
                    <td><?= $facture->ht === null ? '' : $this->Number->format($facture->ht) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresselivraisonfournisseur Id') ?></th>
                    <td><?= $facture->adresselivraisonfournisseur_id === null ? '' : $this->Number->format($facture->adresselivraisonfournisseur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometragedepart') ?></th>
                    <td><?= $facture->kilometragedepart === null ? '' : $this->Number->format($facture->kilometragedepart) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometragearrive') ?></th>
                    <td><?= $facture->kilometragearrive === null ? '' : $this->Number->format($facture->kilometragearrive) ?></td>
                </tr>
                <tr>
                    <th><?= __('Montant Regler') ?></th>
                    <td><?= $facture->Montant_Regler === null ? '' : $this->Number->format($facture->Montant_Regler) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tauxchange') ?></th>
                    <td><?= $facture->tauxchange === null ? '' : $this->Number->format($facture->tauxchange) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totaldevise') ?></th>
                    <td><?= $facture->totaldevise === null ? '' : $this->Number->format($facture->totaldevise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importation Id') ?></th>
                    <td><?= $facture->importation_id === null ? '' : $this->Number->format($facture->importation_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typef') ?></th>
                    <td><?= $facture->typef === null ? '' : $this->Number->format($facture->typef) ?></td>
                </tr>
                <tr>
                    <th><?= __('Devise Id') ?></th>
                    <td><?= $facture->devise_id === null ? '' : $this->Number->format($facture->devise_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Caissee Id') ?></th>
                    <td><?= $facture->caissee_id === null ? '' : $this->Number->format($facture->caissee_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dossierimportation Id') ?></th>
                    <td><?= $facture->dossierimportation_id === null ? '' : $this->Number->format($facture->dossierimportation_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typefacture Id') ?></th>
                    <td><?= $facture->typefacture_id === null ? '' : $this->Number->format($facture->typefacture_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typefac') ?></th>
                    <td><?= $facture->typefac === null ? '' : $this->Number->format($facture->typefac) ?></td>
                </tr>
                <tr>
                    <th><?= __('Projet Id') ?></th>
                    <td><?= $facture->projet_id === null ? '' : $this->Number->format($facture->projet_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Etatgroup') ?></th>
                    <td><?= $this->Number->format($facture->etatgroup) ?></td>
                </tr>
                <tr>
                    <th><?= __('Groupage Id') ?></th>
                    <td><?= $facture->groupage_id === null ? '' : $this->Number->format($facture->groupage_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conteneur Id') ?></th>
                    <td><?= $facture->conteneur_id === null ? '' : $this->Number->format($facture->conteneur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('TvaOnOff') ?></th>
                    <td><?= $facture->tvaOnOff === null ? '' : $this->Number->format($facture->tvaOnOff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Incoterm Id') ?></th>
                    <td><?= $facture->incoterm_id === null ? '' : $this->Number->format($facture->incoterm_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Options Incotermtotalpdf') ?></th>
                    <td><?= $facture->options_incotermtotalpdf === null ? '' : $this->Number->format($facture->options_incotermtotalpdf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($facture->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Options Istotaltransportdetaille') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($facture->options_istotaltransportdetaille)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Factavoirs') ?></h4>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date Debut') ?></th>
                            <th><?= __('Date Fin') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Facture Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($facture->factavoirs as $factureavoirs) : ?>
                        <tr>
                            <td><?= h(factureavoirs->id) ?></td>
                            <td><?= h(factureavoirs->Date_debut) ?></td>
                            <td><?= h(factureavoirs->Date_fin) ?></td>
                            <td><?= h(factureavoirs->client_id) ?></td>
                            <td><?= h(factureavoirs->facture_id) ?></td>

                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
