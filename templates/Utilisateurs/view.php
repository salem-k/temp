<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilisateur $utilisateur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Utilisateur'), ['action' => 'edit', $utilisateur->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Utilisateur'), ['action' => 'delete', $utilisateur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateur->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Utilisateurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Utilisateur'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="utilisateurs view content">
            <h3><?= h($utilisateur->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Personnel') ?></th>
                    <td><?= $utilisateur->has('personnel') ? $this->Html->link($utilisateur->personnel->id, ['controller' => 'Personnels', 'action' => 'view', $utilisateur->personnel->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($utilisateur->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Login') ?></th>
                    <td><?= h($utilisateur->login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $utilisateur->has('pointdevente') ? $this->Html->link($utilisateur->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $utilisateur->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $utilisateur->has('depot') ? $this->Html->link($utilisateur->depot->name, ['controller' => 'Depots', 'action' => 'view', $utilisateur->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($utilisateur->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stocknegatif') ?></th>
                    <td><?= $utilisateur->stocknegatif === null ? '' : $this->Number->format($utilisateur->stocknegatif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifdevis') ?></th>
                    <td><?= $utilisateur->notifdevis === null ? '' : $this->Number->format($utilisateur->notifdevis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifcaisse') ?></th>
                    <td><?= $utilisateur->notifcaisse === null ? '' : $this->Number->format($utilisateur->notifcaisse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifbsstock') ?></th>
                    <td><?= $utilisateur->notifbsstock === null ? '' : $this->Number->format($utilisateur->notifbsstock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifaffaire') ?></th>
                    <td><?= $utilisateur->notifaffaire === null ? '' : $this->Number->format($utilisateur->notifaffaire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifvisite') ?></th>
                    <td><?= $utilisateur->notifvisite === null ? '' : $this->Number->format($utilisateur->notifvisite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifpmp') ?></th>
                    <td><?= $utilisateur->modifpmp === null ? '' : $this->Number->format($utilisateur->modifpmp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifartdevis') ?></th>
                    <td><?= $utilisateur->notifartdevis === null ? '' : $this->Number->format($utilisateur->notifartdevis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imp Val Inventaire') ?></th>
                    <td><?= $utilisateur->imp_val_inventaire === null ? '' : $this->Number->format($utilisateur->imp_val_inventaire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imp Val Bonecart') ?></th>
                    <td><?= $utilisateur->imp_val_bonecart === null ? '' : $this->Number->format($utilisateur->imp_val_bonecart) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trans Vers Prod') ?></th>
                    <td><?= $utilisateur->trans_vers_prod === null ? '' : $this->Number->format($utilisateur->trans_vers_prod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Factureclient') ?></th>
                    <td><?= $utilisateur->factureclient === null ? '' : $this->Number->format($utilisateur->factureclient) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifcommandeclient') ?></th>
                    <td><?= $utilisateur->notifcommandeclient === null ? '' : $this->Number->format($utilisateur->notifcommandeclient) ?></td>
                </tr>
                <tr>
                    <th><?= __('MajNumero') ?></th>
                    <td><?= $utilisateur->MajNumero === null ? '' : $this->Number->format($utilisateur->MajNumero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commercial') ?></th>
                    <td><?= $utilisateur->commercial === null ? '' : $this->Number->format($utilisateur->commercial) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Factureavoirs') ?></h4>
                <?php if (!empty($utilisateur->factureavoirs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Utilisateur Id') ?></th>
                            <th><?= __('Factureclient Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Remise') ?></th>
                            <th><?= __('Tva') ?></th>
                            <th><?= __('Fodec') ?></th>
                            <th><?= __('Tauxtva') ?></th>
                            <th><?= __('Tauxfodec') ?></th>
                            <th><?= __('Totalht') ?></th>
                            <th><?= __('Totalttc') ?></th>
                            <th><?= __('Totalttc Anc') ?></th>
                            <th><?= __('Montant Regle') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Numeroconca') ?></th>
                            <th><?= __('Typefacture Id') ?></th>
                            <th><?= __('Etat') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Exercice Id') ?></th>
                            <th><?= __('Des') ?></th>
                            <th><?= __('Source') ?></th>
                            <th><?= __('Timbre Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Adressclient') ?></th>
                            <th><?= __('Matriculefiscaleclient') ?></th>
                            <th><?= __('Telclient') ?></th>
                            <th><?= __('Typeclient Id') ?></th>
                            <th><?= __('Numeropieceintegre') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Ttc1') ?></th>
                            <th><?= __('Tva1') ?></th>
                            <th><?= __('Fodec1') ?></th>
                            <th><?= __('Rem') ?></th>
                            <th><?= __('Totalht1') ?></th>
                            <th><?= __('Totaltva1') ?></th>
                            <th><?= __('Totalttc1') ?></th>
                            <th><?= __('Totalrem') ?></th>
                            <th><?= __('Adressecl') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($utilisateur->factureavoirs as $factureavoirs) : ?>
                        <tr>
                            <td><?= h($factureavoirs->id) ?></td>
                            <td><?= h($factureavoirs->client_id) ?></td>
                            <td><?= h($factureavoirs->utilisateur_id) ?></td>
                            <td><?= h($factureavoirs->factureclient_id) ?></td>
                            <td><?= h($factureavoirs->date) ?></td>
                            <td><?= h($factureavoirs->remise) ?></td>
                            <td><?= h($factureavoirs->tva) ?></td>
                            <td><?= h($factureavoirs->fodec) ?></td>
                            <td><?= h($factureavoirs->tauxtva) ?></td>
                            <td><?= h($factureavoirs->tauxfodec) ?></td>
                            <td><?= h($factureavoirs->totalht) ?></td>
                            <td><?= h($factureavoirs->totalttc) ?></td>
                            <td><?= h($factureavoirs->totalttc_anc) ?></td>
                            <td><?= h($factureavoirs->montant_regle) ?></td>
                            <td><?= h($factureavoirs->numero) ?></td>
                            <td><?= h($factureavoirs->numeroconca) ?></td>
                            <td><?= h($factureavoirs->typefacture_id) ?></td>
                            <td><?= h($factureavoirs->etat) ?></td>
                            <td><?= h($factureavoirs->pointdevente_id) ?></td>
                            <td><?= h($factureavoirs->exercice_id) ?></td>
                            <td><?= h($factureavoirs->des) ?></td>
                            <td><?= h($factureavoirs->source) ?></td>
                            <td><?= h($factureavoirs->timbre_id) ?></td>
                            <td><?= h($factureavoirs->name) ?></td>
                            <td><?= h($factureavoirs->adressclient) ?></td>
                            <td><?= h($factureavoirs->matriculefiscaleclient) ?></td>
                            <td><?= h($factureavoirs->telclient) ?></td>
                            <td><?= h($factureavoirs->typeclient_id) ?></td>
                            <td><?= h($factureavoirs->numeropieceintegre) ?></td>
                            <td><?= h($factureavoirs->depot_id) ?></td>
                            <td><?= h($factureavoirs->ttc1) ?></td>
                            <td><?= h($factureavoirs->tva1) ?></td>
                            <td><?= h($factureavoirs->fodec1) ?></td>
                            <td><?= h($factureavoirs->rem) ?></td>
                            <td><?= h($factureavoirs->totalht1) ?></td>
                            <td><?= h($factureavoirs->totaltva1) ?></td>
                            <td><?= h($factureavoirs->totalttc1) ?></td>
                            <td><?= h($factureavoirs->totalrem) ?></td>
                            <td><?= h($factureavoirs->adressecl) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Factureavoirs', 'action' => 'view', $factureavoirs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Factureavoirs', 'action' => 'edit', $factureavoirs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Factureavoirs', 'action' => 'delete', $factureavoirs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factureavoirs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($utilisateur->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Personnel Id') ?></th>
                            <th><?= __('Utilisateur Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Login') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Stocknegatif') ?></th>
                            <th><?= __('Notifdevis') ?></th>
                            <th><?= __('Notifcaisse') ?></th>
                            <th><?= __('Notifbsstock') ?></th>
                            <th><?= __('Notifaffaire') ?></th>
                            <th><?= __('Notifvisite') ?></th>
                            <th><?= __('Modifpmp') ?></th>
                            <th><?= __('Notifartdevis') ?></th>
                            <th><?= __('Imp Val Inventaire') ?></th>
                            <th><?= __('Imp Val Bonecart') ?></th>
                            <th><?= __('Trans Vers Prod') ?></th>
                            <th><?= __('Factureclient') ?></th>
                            <th><?= __('Notifcommandeclient') ?></th>
                            <th><?= __('MajNumero') ?></th>
                            <th><?= __('Poste') ?></th>
                            <th><?= __('Mail') ?></th>
                            <th><?= __('Validation') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($utilisateur->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->personnel_id) ?></td>
                            <td><?= h($users->utilisateur_id) ?></td>
                            <td><?= h($users->name) ?></td>
                            <td><?= h($users->login) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->pointdevente_id) ?></td>
                            <td><?= h($users->depot_id) ?></td>
                            <td><?= h($users->stocknegatif) ?></td>
                            <td><?= h($users->notifdevis) ?></td>
                            <td><?= h($users->notifcaisse) ?></td>
                            <td><?= h($users->notifbsstock) ?></td>
                            <td><?= h($users->notifaffaire) ?></td>
                            <td><?= h($users->notifvisite) ?></td>
                            <td><?= h($users->modifpmp) ?></td>
                            <td><?= h($users->notifartdevis) ?></td>
                            <td><?= h($users->imp_val_inventaire) ?></td>
                            <td><?= h($users->imp_val_bonecart) ?></td>
                            <td><?= h($users->trans_vers_prod) ?></td>
                            <td><?= h($users->factureclient) ?></td>
                            <td><?= h($users->notifcommandeclient) ?></td>
                            <td><?= h($users->MajNumero) ?></td>
                            <td><?= h($users->poste) ?></td>
                            <td><?= h($users->mail) ?></td>
                            <td><?= h($users->validation) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Utilisateurmenus') ?></h4>
                <?php if (!empty($utilisateur->utilisateurmenus)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Utilisateur Id') ?></th>
                            <th><?= __('Menu Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($utilisateur->utilisateurmenus as $utilisateurmenus) : ?>
                        <tr>
                            <td><?= h($utilisateurmenus->id) ?></td>
                            <td><?= h($utilisateurmenus->utilisateur_id) ?></td>
                            <td><?= h($utilisateurmenus->menu_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Utilisateurmenus', 'action' => 'view', $utilisateurmenus->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Utilisateurmenus', 'action' => 'edit', $utilisateurmenus->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Utilisateurmenus', 'action' => 'delete', $utilisateurmenus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateurmenus->id)]) ?>
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
