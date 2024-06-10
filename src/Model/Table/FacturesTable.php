<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Factures Model
 *
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 * @property \App\Model\Table\PaiementsTable&\Cake\ORM\Association\BelongsTo $Paiements
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\FactavoirsTable&\Cake\ORM\Association\HasMany $Factavoirs
 *
 * @method \App\Model\Entity\Facture newEmptyEntity()
 * @method \App\Model\Entity\Facture newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Facture[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Facture get($primaryKey, $options = [])
 * @method \App\Model\Entity\Facture findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Facture patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Facture[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Facture|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Facture saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Facture[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Facture[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Facture[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Facture[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FacturesTable extends Table
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

        $this->setTable('factures');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->belongsTo('Depots', [
            'foreignKey' => 'depot_id',
        ]);
        $this->belongsTo('Paiements', [
            'foreignKey' => 'paiement_id',
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Factavoirs', [
            'foreignKey' => 'facture_id',
        ]);
        $this->belongsTo('Fournisseurs', [
            'foreignKey' => 'fournisseur_id',
            'joinType' => 'INNER',
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
            ->integer('livraison_id')
            ->allowEmptyString('livraison_id');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 255)
            ->allowEmptyString('numero');

        $validator
            ->dateTime('date')
            ->allowEmptyDateTime('date');

        $validator
            ->integer('fournisseur_id')
            ->requirePresence('fournisseur_id', 'create')
            ->notEmptyString('fournisseur_id')
            ->add('fournisseur_id', 'existsIn', [
                'rule' => ['existsIn', 'Fournisseurs'],
                'message' => 'Fournisseur must exist'
            ]);

        return $validator;
        $validator
            ->integer('pointdevente_id')
            ->allowEmptyString('pointdevente_id');

        $validator
            ->integer('depot_id')
            ->allowEmptyString('depot_id');

        $validator
            ->integer('cartecarburant_id')
            ->allowEmptyString('cartecarburant_id');

        $validator
            ->integer('materieltransport_id')
            ->allowEmptyString('materieltransport_id');

        $validator
            ->integer('chauffeur')
            ->allowEmptyString('chauffeur');

        $validator
            ->integer('convoyeur')
            ->allowEmptyString('convoyeur');

        $validator
            ->integer('valide')
            ->notEmptyString('valide');

        $validator
            ->decimal('remise')
            ->allowEmptyString('remise');

        $validator
            ->decimal('tva')
            ->allowEmptyString('tva');

        $validator
            ->decimal('fodec')
            ->allowEmptyString('fodec');

        $validator
            ->decimal('ttc')
            ->allowEmptyString('ttc');

        $validator
            ->decimal('ht')
            ->allowEmptyString('ht');

        $validator
            ->integer('adresselivraisonfournisseur_id')
            ->allowEmptyString('adresselivraisonfournisseur_id');

        $validator
            ->integer('kilometragedepart')
            ->allowEmptyString('kilometragedepart');

        $validator
            ->integer('kilometragearrive')
            ->allowEmptyString('kilometragearrive');

        $validator
            ->decimal('Montant_Regler')
            ->allowEmptyString('Montant_Regler');

        $validator
            ->integer('tauxchange')
            ->allowEmptyString('tauxchange');

        $validator
            ->decimal('totaldevise')
            ->allowEmptyString('totaldevise');

        $validator
            ->integer('importation_id')
            ->allowEmptyString('importation_id');

        $validator
            ->integer('typef')
            ->allowEmptyString('typef');

        $validator
            ->integer('devise_id')
            ->allowEmptyString('devise_id');

        $validator
            ->integer('paiement_id')
            ->allowEmptyString('paiement_id');

        $validator
            ->integer('caissee_id')
            ->allowEmptyString('caissee_id');

        $validator
            ->integer('dossierimportation_id')
            ->allowEmptyString('dossierimportation_id');

        $validator
            ->integer('typefacture_id')
            ->allowEmptyString('typefacture_id');

        $validator
            ->integer('typefac')
            ->allowEmptyString('typefac');

        $validator
            ->integer('client_id')
            ->allowEmptyString('client_id');

        $validator
            ->integer('projet_id')
            ->allowEmptyString('projet_id');

        $validator
            ->integer('etatgroup')
            ->notEmptyString('etatgroup');

        $validator
            ->integer('groupage_id')
            ->allowEmptyString('groupage_id');

        $validator
            ->integer('conteneur_id')
            ->allowEmptyString('conteneur_id');

        $validator
            ->integer('tvaOnOff')
            ->allowEmptyString('tvaOnOff');

        $validator
            ->integer('incoterm_id')
            ->allowEmptyString('incoterm_id');

        $validator
            ->scalar('location_incoterms')
            ->maxLength('location_incoterms', 255)
            ->allowEmptyString('location_incoterms');

        $validator
            ->integer('options_incotermtotalpdf')
            ->allowEmptyString('options_incotermtotalpdf');

        $validator
            ->scalar('options_istotaltransportdetaille')
            ->allowEmptyString('options_istotaltransportdetaille');

        $validator
            ->scalar('options_indicationenpdf')
            ->maxLength('options_indicationenpdf', 255)
            ->allowEmptyString('options_indicationenpdf');
            $validator
            ->integer('fournisseur_id')  // Ensure this field is validated
            ->allowEmptyString('fournisseur_id');

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
        $rules->add($rules->existsIn('pointdevente_id', 'Pointdeventes'), ['errorField' => 'pointdevente_id']);
        $rules->add($rules->existsIn('depot_id', 'Depots'), ['errorField' => 'depot_id']);
        $rules->add($rules->existsIn('paiement_id', 'Paiements'), ['errorField' => 'paiement_id']);
        $rules->add($rules->existsIn('client_id', 'Clients'), ['errorField' => 'client_id']);
        $rules->add($rules->existsIn('fournisseur_id', 'Fournisseurs'), ['errorField' => 'fournisseur_id']);  // Add this rule


        return $rules;
    }
}
