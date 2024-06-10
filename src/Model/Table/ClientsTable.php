<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property \App\Model\Table\CommercialsTable&\Cake\ORM\Association\BelongsTo $Commercials
 * @property \App\Model\Table\GouvernoratsTable&\Cake\ORM\Association\BelongsTo $Gouvernorats
 * @property \App\Model\Table\PaiementsTable&\Cake\ORM\Association\BelongsTo $Paiements
 * @property \App\Model\Table\TypeclientsTable&\Cake\ORM\Association\BelongsTo $Typeclients
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\LocalitesTable&\Cake\ORM\Association\BelongsTo $Localites
 * @property \App\Model\Table\DelegationsTable&\Cake\ORM\Association\BelongsTo $Delegations
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\PaysTable&\Cake\ORM\Association\BelongsTo $Pays
 * @property \App\Model\Table\DevisesTable&\Cake\ORM\Association\BelongsTo $Devises
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\HasMany $Clients
 * @property \App\Model\Table\CommandeclientsTable&\Cake\ORM\Association\HasMany $Commandeclients
 * @property \App\Model\Table\CommandesTable&\Cake\ORM\Association\HasMany $Commandes
 * @property \App\Model\Table\FactremisesTable&\Cake\ORM\Association\HasMany $Factremises
 * @property \App\Model\Table\FactureavoirsTable&\Cake\ORM\Association\HasMany $Factureavoirs
 * @property \App\Model\Table\FactureclientsTable&\Cake\ORM\Association\HasMany $Factureclients
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\HasMany $Factures
 * @property \App\Model\Table\ReglementclientsTable&\Cake\ORM\Association\HasMany $Reglementclients
 * @property \App\Model\Table\TagsTable&\Cake\ORM\Association\HasMany $Tags
 *
 * @method \App\Model\Entity\Client newEmptyEntity()
 * @method \App\Model\Entity\Client newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClientsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('clients');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Commercials', [
            'foreignKey' => 'commercial_id',
        ]);
        $this->belongsTo('Gouvernorats', [
            'foreignKey' => 'gouvernorat_id',
        ]);
        $this->belongsTo('Paiements', [
            'foreignKey' => 'paiement_id',
        ]);
        $this->belongsTo('Typeclients', [
            'foreignKey' => 'typeclient_id',
        ]);
        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->belongsTo('Localites', [
            'foreignKey' => 'localite_id',
        ]);
        $this->belongsTo('Delegations', [
            'foreignKey' => 'delegation_id',
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->belongsTo('Pays', [
            'foreignKey' => 'pay_id',
        ]);
        $this->belongsTo('Devises', [
            'foreignKey' => 'devise_id',
        ]);
        $this->hasMany('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Commandeclients', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Commandes', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Factremises', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Factureavoirs', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Factureclients', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Factures', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Reglementclients', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Tags', [
            'foreignKey' => 'client_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->numeric('Code_Socit')
            ->allowEmptyString('Code_Socit');

        $validator
            ->scalar('Code')
            ->maxLength('Code', 100)
            ->allowEmptyString('Code');

        $validator
            ->scalar('Raison_Sociale')
            ->maxLength('Raison_Sociale', 100)
            ->allowEmptyString('Raison_Sociale');

        $validator
            ->scalar('Contact')
            ->maxLength('Contact', 100)
            ->allowEmptyString('Contact');

        $validator
            ->numeric('commercial_id')
            ->allowEmptyString('commercial_id');

        $validator
            ->scalar('Code_Ville')
            ->maxLength('Code_Ville', 100)
            ->allowEmptyString('Code_Ville');

        $validator
            ->scalar('Adresse')
            ->maxLength('Adresse', 100)
            ->allowEmptyString('Adresse');

        $validator
            ->numeric('Cp')
            ->allowEmptyString('Cp');

        $validator
            ->numeric('Code_Pays')
            ->allowEmptyString('Code_Pays');

        $validator
            ->scalar('Code_VilleL')
            ->maxLength('Code_VilleL', 100)
            ->allowEmptyString('Code_VilleL');

        $validator
            ->scalar('AdresseL')
            ->maxLength('AdresseL', 100)
            ->allowEmptyString('AdresseL');

        $validator
            ->numeric('CpL')
            ->allowEmptyString('CpL');

        $validator
            ->numeric('Code_PaysL')
            ->allowEmptyString('Code_PaysL');

        $validator
            ->scalar('Tel')
            ->allowEmptyString('Tel');

        $validator
            ->scalar('Tel1')
            ->maxLength('Tel1', 100)
            ->allowEmptyString('Tel1');

        $validator
            ->scalar('Tel2')
            ->maxLength('Tel2', 100)
            ->allowEmptyString('Tel2');

        $validator
            ->scalar('Fax')
            ->maxLength('Fax', 100)
            ->allowEmptyString('Fax');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 100)
            ->allowEmptyString('Email');

        $validator
            ->scalar('Code_Monnaie')
            ->maxLength('Code_Monnaie', 100)
            ->allowEmptyString('Code_Monnaie');

        $validator
            ->scalar('Code_ModePayement')
            ->maxLength('Code_ModePayement', 100)
            ->allowEmptyString('Code_ModePayement');

        $validator
            ->scalar('Code_DelaiPayement')
            ->maxLength('Code_DelaiPayement', 100)
            ->allowEmptyString('Code_DelaiPayement');

        $validator
            ->numeric('Mode_Facturation')
            ->allowEmptyString('Mode_Facturation');

        $validator
            ->numeric('Priode')
            ->allowEmptyString('Priode');

        $validator
            ->numeric('Montant_Facturation')
            ->allowEmptyString('Montant_Facturation');

        $validator
            ->numeric('Quota')
            ->allowEmptyString('Quota');

        $validator
            ->scalar('Autorisation_Livraison')
            ->maxLength('Autorisation_Livraison', 100)
            ->allowEmptyString('Autorisation_Livraison');

        $validator
            ->scalar('BL_Tarifi')
            ->maxLength('BL_Tarifi', 100)
            ->allowEmptyString('BL_Tarifi');

        $validator
            ->scalar('Majoration')
            ->maxLength('Majoration', 100)
            ->allowEmptyString('Majoration');

        $validator
            ->scalar('Matricule_Fiscale')
            ->maxLength('Matricule_Fiscale', 100)
            ->allowEmptyString('Matricule_Fiscale');

        $validator
            ->scalar('R_TVA')
            ->maxLength('R_TVA', 100)
            ->allowEmptyString('R_TVA');

        $validator
            ->scalar('Timbre')
            ->maxLength('Timbre', 100)
            ->allowEmptyString('Timbre');

        $validator
            ->scalar('Fodec')
            ->maxLength('Fodec', 100)
            ->allowEmptyString('Fodec');

        $validator
            ->numeric('Taux_Escompte')
            ->allowEmptyString('Taux_Escompte');

        $validator
            ->scalar('Resident')
            ->maxLength('Resident', 100)
            ->allowEmptyString('Resident');

        $validator
            ->scalar('Facture')
            ->maxLength('Facture', 100)
            ->allowEmptyString('Facture');

        $validator
            ->scalar('Rib')
            ->maxLength('Rib', 100)
            ->allowEmptyString('Rib');

        $validator
            ->scalar('Rib1')
            ->maxLength('Rib1', 100)
            ->allowEmptyString('Rib1');

        $validator
            ->scalar('Code_Secteur')
            ->maxLength('Code_Secteur', 100)
            ->allowEmptyString('Code_Secteur');

        $validator
            ->scalar('piece')
            ->maxLength('piece', 100)
            ->allowEmptyString('piece');

        $validator
            ->scalar('promotion')
            ->maxLength('promotion', 100)
            ->allowEmptyString('promotion');

        $validator
            ->scalar('promotion1')
            ->maxLength('promotion1', 100)
            ->allowEmptyString('promotion1');

        $validator
            ->scalar('Descadf')
            ->maxLength('Descadf', 100)
            ->allowEmptyString('Descadf');

        $validator
            ->scalar('Descadl')
            ->maxLength('Descadl', 100)
            ->allowEmptyString('Descadl');

        $validator
            ->numeric('txMaj')
            ->allowEmptyString('txMaj');

        $validator
            ->scalar('promotion2')
            ->maxLength('promotion2', 100)
            ->allowEmptyString('promotion2');

        $validator
            ->scalar('code_gouv')
            ->maxLength('code_gouv', 100)
            ->allowEmptyString('code_gouv');

        $validator
            ->integer('gouvernorat_id')
            ->allowEmptyString('gouvernorat_id');

        $validator
            ->scalar('pr')
            ->maxLength('pr', 100)
            ->allowEmptyString('pr');

        $validator
            ->numeric('Edit')
            ->allowEmptyString('Edit');

        $validator
            ->scalar('BLC')
            ->maxLength('BLC', 100)
            ->allowEmptyString('BLC');

        $validator
            ->scalar('ECOLEF')
            ->maxLength('ECOLEF', 100)
            ->allowEmptyString('ECOLEF');

        $validator
            ->scalar('TPE')
            ->maxLength('TPE', 100)
            ->allowEmptyString('TPE');

        $validator
            ->scalar('UserAdd')
            ->maxLength('UserAdd', 100)
            ->allowEmptyString('UserAdd');

        $validator
            ->scalar('DateAdd')
            ->maxLength('DateAdd', 100)
            ->allowEmptyString('DateAdd');

        $validator
            ->scalar('UserUpdate')
            ->maxLength('UserUpdate', 100)
            ->allowEmptyString('UserUpdate');

        $validator
            ->scalar('DateUpdate')
            ->maxLength('DateUpdate', 100)
            ->allowEmptyString('DateUpdate');

        $validator
            ->integer('inserted')
            ->allowEmptyString('inserted');

        $validator
            ->integer('typeutilisateur_id')
            ->allowEmptyString('typeutilisateur_id');

        $validator
            ->integer('typeexoneration_id')
            ->allowEmptyString('typeexoneration_id');

        $validator
            ->integer('paiement_id')
            ->allowEmptyString('paiement_id');

        $validator
            ->integer('typeclient_id')
            ->allowEmptyString('typeclient_id');

        $validator
            ->integer('pointdevente_id')
            ->allowEmptyString('pointdevente_id');

        $validator
            ->integer('remise')
            ->allowEmptyString('remise');

        $validator
            ->scalar('etat')
            ->maxLength('etat', 255)
            ->allowEmptyString('etat');

        $validator
            ->scalar('observation')
            ->allowEmptyString('observation');

        $validator
            ->scalar('adresse1')
            ->maxLength('adresse1', 255)
            ->allowEmptyString('adresse1');

        $validator
            ->scalar('nouveau_client')
            ->maxLength('nouveau_client', 255)
            ->allowEmptyString('nouveau_client');

        $validator
            ->date('date_ajout')
            ->allowEmptyDate('date_ajout');

        $validator
            ->integer('compte_comptable')
            ->allowEmptyString('compte_comptable');

        $validator
            ->integer('bureauposte')
            ->allowEmptyString('bureauposte');

        $validator
            ->integer('nbr_jours')
            ->allowEmptyString('nbr_jours');

        $validator
            ->integer('localite_id')
            ->allowEmptyString('localite_id');

        $validator
            ->integer('delegation_id')
            ->allowEmptyString('delegation_id');

        $validator
            ->integer('client_id')
            ->allowEmptyString('client_id');

        $validator
            ->boolean('finmois')
            ->allowEmptyString('finmois');

        $validator
            ->scalar('prix')
            ->maxLength('prix', 255)
            ->allowEmptyString('prix');

        $validator
            ->integer('pay_id')
            ->allowEmptyString('pay_id');

        $validator
            ->integer('typeescompte')
            ->allowEmptyString('typeescompte');

        $validator
            ->integer('typeremise')
            ->allowEmptyString('typeremise');

        $validator
            ->numeric('escompte')
            ->allowEmptyString('escompte');

        $validator
            ->integer('bl')
            ->allowEmptyString('bl');

        $validator
            ->numeric('plafontheorique')
            ->allowEmptyString('plafontheorique');

        $validator
            ->scalar('compteclient')
            ->maxLength('compteclient', 255)
            ->allowEmptyString('compteclient');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 255)
            ->allowEmptyString('nom');

        $validator
            ->integer('client')
            ->allowEmptyString('client');

        $validator
            ->integer('fournisseur')
            ->allowEmptyString('fournisseur');

        $validator
            ->integer('salaris')
            ->allowEmptyString('salaris');

        $validator
            ->integer('typetiers')
            ->allowEmptyString('typetiers');

        $validator
            ->integer('incoterms')
            ->allowEmptyString('incoterms');

        $validator
            ->scalar('port')
            ->maxLength('port', 255)
            ->allowEmptyString('port');

        $validator
            ->integer('affecter')
            ->allowEmptyString('affecter');

        $validator
            ->scalar('logo')
            ->maxLength('logo', 255)
            ->allowEmptyString('logo');

        $validator
            ->integer('devise_id')
            ->allowEmptyString('devise_id');

        $validator
            ->scalar('tags')
            ->maxLength('tags', 255)
            ->allowEmptyString('tags');

        $validator
            ->scalar('codefr')
            ->maxLength('codefr', 255)
            ->allowEmptyString('codefr');

        $validator
            ->scalar('codeclient')
            ->maxLength('codeclient', 255)
            ->allowEmptyString('codeclient');

        $validator
            ->scalar('RC')
            ->maxLength('RC', 255)
            ->allowEmptyString('RC');

        $validator
            ->scalar('codedouane')
            ->maxLength('codedouane', 255)
            ->allowEmptyString('codedouane');

        $validator
            ->scalar('BAN')
            ->maxLength('BAN', 255)
            ->allowEmptyString('BAN');

        $validator
            ->scalar('Capital')
            ->maxLength('Capital', 255)
            ->allowEmptyString('Capital');

        $validator
            ->scalar('numerotva')
            ->maxLength('numerotva', 255)
            ->allowEmptyString('numerotva');

        $validator
            ->scalar('typeentite')
            ->maxLength('typeentite', 225)
            ->allowEmptyString('typeentite');

        $validator
            ->dateTime('datemodification')
            ->allowEmptyDateTime('datemodification');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('commercial_id', 'Commercials'), ['errorField' => 'commercial_id']);
        $rules->add($rules->existsIn('gouvernorat_id', 'Gouvernorats'), ['errorField' => 'gouvernorat_id']);
        $rules->add($rules->existsIn('paiement_id', 'Paiements'), ['errorField' => 'paiement_id']);
        $rules->add($rules->existsIn('typeclient_id', 'Typeclients'), ['errorField' => 'typeclient_id']);
        $rules->add($rules->existsIn('pointdevente_id', 'Pointdeventes'), ['errorField' => 'pointdevente_id']);
        $rules->add($rules->existsIn('localite_id', 'Localites'), ['errorField' => 'localite_id']);
        $rules->add($rules->existsIn('delegation_id', 'Delegations'), ['errorField' => 'delegation_id']);
        $rules->add($rules->existsIn('client_id', 'Clients'), ['errorField' => 'client_id']);
        $rules->add($rules->existsIn('pay_id', 'Pays'), ['errorField' => 'pay_id']);
        $rules->add($rules->existsIn('devise_id', 'Devises'), ['errorField' => 'devise_id']);

        return $rules;
    }
}
