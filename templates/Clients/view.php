<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>

<div class="row">

  <div class="column-responsive column-80">
    <div class="articles view content">
      <strong> <h3><?= h($client->id) ?></strong></h3>
      <section class="content">
        <div class="row">
          <div class="col-md-10">
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
                    <td><?= h($client->Code) ?></td>
                </tr>

                <tr>
                    <th><?= __('Contact') ?></th>
                    <td><?= h($client->Contact) ?></td>
                </tr>


                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($client->Adresse) ?></td>
                </tr>


                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($client->Email) ?></td>
                </tr>

                <tr>
                    <th><?= __('Facture') ?></th>
                    <td><?= h($client->Facture) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rib') ?></th>
                    <td><?= h($client->Rib) ?></td>
                </tr>


                <tr>
                    <th><?= __('Piece') ?></th>
                    <td><?= h($client->piece) ?></td>
                </tr>

                <tr>
                    <th><?= __('Gouvernorat') ?></th>
                    <td><?= $client->has('gouvernorat') ? $this->Html->link($client->gouvernorat->name, ['controller' => 'Gouvernorats', 'action' => 'view', $client->gouvernorat->id]) : '' ?></td>
                </tr>

                <tr>
                    <th><?= __('Typeclient') ?></th>
                    <td><?= $client->has('typeclient') ? $this->Html->link($client->typeclient->type, ['controller' => 'Typeclients', 'action' => 'view', $client->typeclient->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $client->has('pointdevente') ? $this->Html->link($client->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $client->pointdevente->id]) : '' ?></td>
                </tr>

                <tr>
                    <th><?= __('Localite') ?></th>
                    <td><?= $client->has('localite') ? $this->Html->link($client->localite->name, ['controller' => 'Localites', 'action' => 'view', $client->localite->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Delegation') ?></th>
                    <td><?= $client->has('delegation') ? $this->Html->link($client->delegation->name, ['controller' => 'Delegations', 'action' => 'view', $client->delegation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= h($client->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay') ?></th>
                    <td><?= $client->has('pay') ? $this->Html->link($client->pay->name, ['controller' => 'Pays', 'action' => 'view', $client->pay->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Compteclient') ?></th>
                    <td><?= h($client->compteclient) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($client->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Port') ?></th>
                    <td><?= h($client->port) ?></td>
                </tr>

                <tr>
                    <th><?= __('Devise') ?></th>
                    <td><?= $client->has('devise') ? $this->Html->link($client->devise->name, ['controller' => 'Devises', 'action' => 'view', $client->devise->id]) : '' ?></td>
                </tr>


            </table>
            <div class="text">
                <strong><?= __('Tel') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->Tel)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Observation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->observation)); ?>
                </blockquote>
            </div>

            <div class="related">
                <strong><h4><?= __('Related Commandeclients') ?></strong></h4>
                <?php if (!empty($client->commandeclients)) : ?>
                <div class="table-responsive">
                  <div class="row">
                    <div class="col-md-10">
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
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Facture Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->commandeclients as $commandeclients) : ?>
                        <tr>
                            <td><?= h($commandeclients->code) ?></td>
                            <td><?= h($commandeclients->client_id) ?></td>
                            <td><?= h($commandeclients->date) ?></td>
                            <td><?= h($commandeclients->pointdevente_id) ?></td>
                            <td><?= h($commandeclients->depot_id) ?></td>

                            <td><?= h($commandeclients->facture_id) ?></td>

                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Commandeclients', 'action' => 'view', $commandeclients->id]) ?>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <STRONG><h4><?= __('Related Commandes') ?></STRONG></h4>
                <?php if (!empty($client->commandes)) : ?>
                <div class="table-responsive">
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
                            <th><?= __('Ref') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Num Tab') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Remise') ?></th>
                            <th><?= __('Total') ?></th>

                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->commandes as $commandes) : ?>
                        <tr>
                            <td><?= h($commandes->id) ?></td>
                            <td><?= h($commandes->date) ?></td>
                            <td><?= h($commandes->numero) ?></td>
                            <td><?= h($commandes->client_id) ?></td>
                            <td><?= h($commandes->remise) ?></td>
                            <td><?= h($commandes->total) ?></td>

                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Commandes', 'action' => 'view', $commandes->id]) ?>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
              <strong><h4><?= __('Related Factremises') ?></strong></h4>
                <?php if (!empty($client->factremises)) : ?>
                <div class="table-responsive">
                  <div class="table-responsive">
                    <div class="row">
                      <div class="col-md-10">
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
                            <th><?= __('Client') ?></th>
                            <th><?= __('Reduction') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Commentaire') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->factremises as $factremises) : ?>
                        <tr>
                            <td><?= h($factremises->client_id) ?></td>
                            <td><?= h($factremises->Reduction) ?></td>
                            <td><?= h($factremises->Date) ?></td>
                            <td><?= h($factremises->Commentaire) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Factremises', 'action' => 'view', $factremises->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Factremises', 'action' => 'edit', $factremises->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Factremises', 'action' => 'delete', $factremises->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factremises->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
              <strong> <h4><?= __('Related Factureavoirs') ?></strong></h4>
                <?php if (!empty($client->factureavoirs)) : ?>
                <div class="table-responsive">
                  <div class="table-responsive">
                    <div class="row">
                      <div class="col-md-10">
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
                            <th><?= __('Client') ?></th>
                            <th><?= __('Montant Regle') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Typefacture Id') ?></th>
                            <th><?= __('Etat') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->factureavoirs as $factureavoirs) : ?>
                        <tr>
                            <td><?= h($factureavoirs->client_id) ?></td>
                            <td><?= h($factureavoirs->montant_regle) ?></td>
                            <td><?= h($factureavoirs->numero) ?></td>

                            <td><?= h($factureavoirs->typefacture_id) ?></td>
                            <td><?= h($factureavoirs->etat) ?></td>
                            <td><?= h($factureavoirs->pointdevente_id) ?></td>

                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Factureavoirs', 'action' => 'view', $factureavoirs->id]) ?>
                           </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
              <strong>  <h4><?= __('Related Factureclients') ?></strong></h4>
                <?php if (!empty($client->factureclients)) : ?>
                <div class="table-responsive">
                  <div class="table-responsive">
                    <div class="row">
                      <div class="col-md-10">
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
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Client') ?></th>

                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->factureclients as $factureclients) : ?>
                        <tr>
                            <td><?= h($factureclients->numero) ?></td>
                            <td><?= h($factureclients->date) ?></td>
                            <td><?= h($factureclients->client_id) ?></td>

                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Factureclients', 'action' => 'view', $factureclients->id]) ?>
                           </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
              <strong><h4><?= __('Related Factures') ?></strong></h4>
                <?php if (!empty($client->factures)) : ?>
                <div class="table-responsive">
                  <div class="table-responsive">
                    <div class="row">
                      <div class="col-md-10">
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
                            <th><?= __('Id') ?></th>
                            <th><?= __('Livraison Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Fournisseur Id') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Cartecarburant Id') ?></th>
                            <th><?= __('Materieltransport Id') ?></th>
                            <th><?= __('Chauffeur') ?></th>
                            <th><?= __('Convoyeur') ?></th>
                            <th><?= __('Valide') ?></th>
                            <th><?= __('Remise') ?></th>
                            <th><?= __('Tva') ?></th>
                            <th><?= __('Fodec') ?></th>
                            <th><?= __('Ttc') ?></th>
                            <th><?= __('Ht') ?></th>
                            <th><?= __('Adresselivraisonfournisseur Id') ?></th>
                            <th><?= __('Kilometragedepart') ?></th>
                            <th><?= __('Kilometragearrive') ?></th>
                            <th><?= __('Montant Regler') ?></th>
                            <th><?= __('Tauxchange') ?></th>
                            <th><?= __('Totaldevise') ?></th>
                            <th><?= __('Importation Id') ?></th>
                            <th><?= __('Typef') ?></th>
                            <th><?= __('Devise Id') ?></th>
                            <th><?= __('Paiement Id') ?></th>
                            <th><?= __('Caissee Id') ?></th>
                            <th><?= __('Dossierimportation Id') ?></th>
                            <th><?= __('Typefacture Id') ?></th>
                            <th><?= __('Typefac') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Projet Id') ?></th>
                            <th><?= __('Etatgroup') ?></th>
                            <th><?= __('Groupage Id') ?></th>
                            <th><?= __('Conteneur Id') ?></th>
                            <th><?= __('TvaOnOff') ?></th>
                            <th><?= __('Incoterm Id') ?></th>
                            <th><?= __('Location Incoterms') ?></th>
                            <th><?= __('Options Incotermtotalpdf') ?></th>
                            <th><?= __('Options Istotaltransportdetaille') ?></th>
                            <th><?= __('Options Indicationenpdf') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->factures as $factures) : ?>
                        <tr>
                            <td><?= h($factures->id) ?></td>
                            <td><?= h($factures->livraison_id) ?></td>
                            <td><?= h($factures->numero) ?></td>
                            <td><?= h($factures->date) ?></td>
                            <td><?= h($factures->fournisseur_id) ?></td>
                            <td><?= h($factures->pointdevente_id) ?></td>
                            <td><?= h($factures->depot_id) ?></td>
                            <td><?= h($factures->cartecarburant_id) ?></td>
                            <td><?= h($factures->materieltransport_id) ?></td>
                            <td><?= h($factures->chauffeur) ?></td>
                            <td><?= h($factures->convoyeur) ?></td>
                            <td><?= h($factures->valide) ?></td>
                            <td><?= h($factures->remise) ?></td>
                            <td><?= h($factures->tva) ?></td>
                            <td><?= h($factures->fodec) ?></td>
                            <td><?= h($factures->ttc) ?></td>
                            <td><?= h($factures->ht) ?></td>
                            <td><?= h($factures->adresselivraisonfournisseur_id) ?></td>
                            <td><?= h($factures->kilometragedepart) ?></td>
                            <td><?= h($factures->kilometragearrive) ?></td>
                            <td><?= h($factures->Montant_Regler) ?></td>
                            <td><?= h($factures->tauxchange) ?></td>
                            <td><?= h($factures->totaldevise) ?></td>
                            <td><?= h($factures->importation_id) ?></td>
                            <td><?= h($factures->typef) ?></td>
                            <td><?= h($factures->devise_id) ?></td>
                            <td><?= h($factures->paiement_id) ?></td>
                            <td><?= h($factures->caissee_id) ?></td>
                            <td><?= h($factures->dossierimportation_id) ?></td>
                            <td><?= h($factures->typefacture_id) ?></td>
                            <td><?= h($factures->typefac) ?></td>
                            <td><?= h($factures->client_id) ?></td>
                            <td><?= h($factures->projet_id) ?></td>
                            <td><?= h($factures->etatgroup) ?></td>
                            <td><?= h($factures->groupage_id) ?></td>
                            <td><?= h($factures->conteneur_id) ?></td>
                            <td><?= h($factures->tvaOnOff) ?></td>
                            <td><?= h($factures->incoterm_id) ?></td>
                            <td><?= h($factures->location_incoterms) ?></td>
                            <td><?= h($factures->options_incotermtotalpdf) ?></td>
                            <td><?= h($factures->options_istotaltransportdetaille) ?></td>
                            <td><?= h($factures->options_indicationenpdf) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Factures', 'action' => 'view', $factures->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Factures', 'action' => 'edit', $factures->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Factures', 'action' => 'delete', $factures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factures->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
              <strong><h4><?= __('Related Reglementclients') ?></strong></h4>
                <?php if (!empty($client->reglementclients)) : ?>
                <div class="table-responsive">
                  <div class="table-responsive">
                    <div class="row">
                      <div class="col-md-10">
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
                            <th><?= __('Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Montant') ?></th>
                            <th><?= __('Montantaffecte') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Numeroconca') ?></th>
                            <th><?= __('SR') ?></th>
                            <th><?= __('NB') ?></th>
                            <th><?= __('NumNB') ?></th>
                            <th><?= __('Client') ?></th>
                            <th><?= __('Mg') ?></th>
                            <th><?= __('Exercice Id') ?></th>
                            <th><?= __('Utilisateur Id') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Affectation Id') ?></th>
                            <th><?= __('Emi') ?></th>
                            <th><?= __('Numeropieceintegre') ?></th>
                            <th><?= __('Group Id') ?></th>
                            <th><?= __('Differance') ?></th>
                            <th><?= __('Observation') ?></th>
                            <th><?= __('Projet Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->reglementclients as $reglementclients) : ?>
                        <tr>
                            <td><?= h($reglementclients->id) ?></td>
                            <td><?= h($reglementclients->client_id) ?></td>
                            <td><?= h($reglementclients->Date) ?></td>
                            <td><?= h($reglementclients->Montant) ?></td>
                            <td><?= h($reglementclients->montantaffecte) ?></td>
                            <td><?= h($reglementclients->pointdevente_id) ?></td>
                            <td><?= h($reglementclients->numero) ?></td>
                            <td><?= h($reglementclients->numeroconca) ?></td>
                            <td><?= h($reglementclients->SR) ?></td>
                            <td><?= h($reglementclients->NB) ?></td>
                            <td><?= h($reglementclients->NumNB) ?></td>
                            <td><?= h($reglementclients->client) ?></td>
                            <td><?= h($reglementclients->mg) ?></td>
                            <td><?= h($reglementclients->exercice_id) ?></td>
                            <td><?= h($reglementclients->utilisateur_id) ?></td>
                            <td><?= h($reglementclients->type) ?></td>
                            <td><?= h($reglementclients->affectation_id) ?></td>
                            <td><?= h($reglementclients->emi) ?></td>
                            <td><?= h($reglementclients->numeropieceintegre) ?></td>
                            <td><?= h($reglementclients->group_id) ?></td>
                            <td><?= h($reglementclients->differance) ?></td>
                            <td><?= h($reglementclients->observation) ?></td>
                            <td><?= h($reglementclients->projet_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reglementclients', 'action' => 'view', $reglementclients->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reglementclients', 'action' => 'edit', $reglementclients->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reglementclients', 'action' => 'delete', $reglementclients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reglementclients->id)]) ?>
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
</div>
