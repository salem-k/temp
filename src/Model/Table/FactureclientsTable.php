<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Factureclients Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 * @property \App\Model\Table\CommandeclientsTable&\Cake\ORM\Association\BelongsTo $Commandeclients
 * @property \App\Model\Table\FactureavoirsTable&\Cake\ORM\Association\HasMany $Factureavoirs
 *
 * @method \App\Model\Entity\Factureclient newEmptyEntity()
 * @method \App\Model\Entity\Factureclient newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Factureclient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Factureclient get($primaryKey, $options = [])
 * @method \App\Model\Entity\Factureclient findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Factureclient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Factureclient[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Factureclient|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Factureclient saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Factureclient[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Factureclient[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Factureclient[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Factureclient[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FactureclientsTable extends Table
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

        $this->setTable('factureclients');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->belongsTo('Depots', [
            'foreignKey' => 'depot_id',
        ]);
        $this->belongsTo('Commandeclients', [
            'foreignKey' => 'commandeclient_id',
        ]);
        $this->hasMany('Factureavoirs', [
            'foreignKey' => 'factureclient_id',
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
            ->scalar('numero')
            ->maxLength('numero', 50)
            ->allowEmptyString('numero');

        $validator
            ->dateTime('date')
            ->allowEmptyDateTime('date');

        $validator
            ->integer('client_id')
            ->allowEmptyString('client_id');

        $validator
            ->integer('pointdevente_id')
            ->allowEmptyString('pointdevente_id');

        $validator
            ->integer('depot_id')
            ->allowEmptyString('depot_id');

        $validator
            ->integer('materieltransport_id')
            ->allowEmptyString('materieltransport_id');

        $validator
            ->integer('cartecarburant_id')
            ->allowEmptyString('cartecarburant_id');

        $validator
            ->integer('chauffeur_id')
            ->allowEmptyString('chauffeur_id');

        $validator
            ->integer('convoyeur_id')
            ->allowEmptyString('convoyeur_id');

        $validator
            ->decimal('totalht')
            ->allowEmptyString('totalht');

        $validator
            ->decimal('totalremise')
            ->allowEmptyString('totalremise');

        $validator
            ->decimal('totalfodec')
            ->allowEmptyString('totalfodec');

        $validator
            ->decimal('totaltva')
            ->allowEmptyString('totaltva');

        $validator
            ->decimal('totalttc')
            ->allowEmptyString('totalttc');

        $validator
            ->numeric('kilometragearrive')
            ->allowEmptyString('kilometragearrive');

        $validator
            ->numeric('kilometragedepart')
            ->allowEmptyString('kilometragedepart');

        $validator
            ->integer('adresselivraisonclient_id')
            ->allowEmptyString('adresselivraisonclient_id');

        $validator
            ->scalar('payementcomptant')
            ->maxLength('payementcomptant', 255)
            ->allowEmptyString('payementcomptant');

        $validator
            ->decimal('tpe')
            ->allowEmptyString('tpe');

        $validator
            ->integer('poste')
            ->allowEmptyString('poste');

        $validator
            ->integer('bonlivraison_id')
            ->allowEmptyString('bonlivraison_id');

        $validator
            ->scalar('escompte')
            ->maxLength('escompte', 11)
            ->allowEmptyString('escompte');

        $validator
            ->decimal('Montant_Regler')
            ->allowEmptyString('Montant_Regler');

        $validator
            ->integer('commandeclient_id')
            ->allowEmptyString('commandeclient_id');

        $validator
            ->integer('projet_id')
            ->allowEmptyString('projet_id');

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
            ->integer('options_istotaltransportdetaille')
            ->allowEmptyString('options_istotaltransportdetaille');

        $validator
            ->scalar('options_indicationenpdf')
            ->allowEmptyString('options_indicationenpdf');

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
        $rules->add($rules->existsIn('client_id', 'Clients'), ['errorField' => 'client_id']);
        $rules->add($rules->existsIn('pointdevente_id', 'Pointdeventes'), ['errorField' => 'pointdevente_id']);
        $rules->add($rules->existsIn('depot_id', 'Depots'), ['errorField' => 'depot_id']);
        $rules->add($rules->existsIn('commandeclient_id', 'Commandeclients'), ['errorField' => 'commandeclient_id']);

        return $rules;
    }
}
