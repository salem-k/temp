<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Commandes Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\CommercialsTable&\Cake\ORM\Association\BelongsTo $Commercials
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 * @property \App\Model\Table\DetailsTable&\Cake\ORM\Association\HasMany $Details
 *
 * @method \App\Model\Entity\Commande newEmptyEntity()
 * @method \App\Model\Entity\Commande newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Commande[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Commande get($primaryKey, $options = [])
 * @method \App\Model\Entity\Commande findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Commande patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Commande[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Commande|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commande saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commande[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commande[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commande[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commande[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CommandesTable extends Table
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

        $this->setTable('commandes');
        $this->setDisplayField('numero');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->belongsTo('Commercials', [
            'foreignKey' => 'commercial_id',
        ]);
        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->belongsTo('Depots', [
            'foreignKey' => 'depot_id',
        ]);
        $this->hasMany('Details', [
            'foreignKey' => 'commande_id',
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
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 255)
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->scalar('num_tab')
            ->maxLength('num_tab', 255)
            ->allowEmptyString('num_tab');

        $validator
            ->integer('client_id')
            ->allowEmptyString('client_id');

        $validator
            ->numeric('remise')
            ->allowEmptyString('remise');

        $validator
            ->decimal('total')
            ->notEmptyString('total');

        $validator
            ->decimal('totalttc')
            ->allowEmptyString('totalttc');

        $validator
            ->integer('commercial_id')
            ->allowEmptyString('commercial_id');

        $validator
            ->scalar('payementcomptant')
            ->maxLength('payementcomptant', 255)
            ->allowEmptyString('payementcomptant');

        $validator
            ->scalar('observation')
            ->allowEmptyString('observation');

        $validator
            ->integer('pointdevente_id')
            ->allowEmptyString('pointdevente_id');

        $validator
            ->integer('depot_id')
            ->allowEmptyString('depot_id');

        $validator
            ->decimal('fodec')
            ->requirePresence('fodec', 'create')
            ->notEmptyString('fodec');

        $validator
            ->decimal('tpe')
            ->requirePresence('tpe', 'create')
            ->notEmptyString('tpe');

        $validator
            ->scalar('escompte')
            ->maxLength('escompte', 255)
            ->requirePresence('escompte', 'create')
            ->notEmptyString('escompte');

        $validator
            ->decimal('tva')
            ->requirePresence('tva', 'create')
            ->notEmptyString('tva');

        $validator
            ->integer('etatliv')
            ->requirePresence('etatliv', 'create')
            ->notEmptyString('etatliv');

        $validator
            ->integer('valide')
            ->allowEmptyString('valide');

        $validator
            ->date('dateimp')
            ->allowEmptyDate('dateimp');

        $validator
            ->date('dateintfin')
            ->allowEmptyDate('dateintfin');

        $validator
            ->date('dateintdebut')
            ->allowEmptyDate('dateintdebut');

        $validator
            ->date('dateupdateclient')
            ->allowEmptyDate('dateupdateclient');

        $validator
            ->scalar('nouv_client')
            ->maxLength('nouv_client', 255)
            ->allowEmptyString('nouv_client');

        $validator
            ->decimal('brut')
            ->allowEmptyString('brut');

        $validator
            ->numeric('pallette')
            ->allowEmptyString('pallette');

        $validator
            ->numeric('Coeff')
            ->allowEmptyString('Coeff');

        $validator
            ->numeric('Poids')
            ->allowEmptyString('Poids');

        $validator
            ->integer('type')
            ->allowEmptyString('type');

        $validator
            ->integer('nbligne')
            ->allowEmptyString('nbligne');

        $validator
            ->integer('bl')
            ->allowEmptyString('bl');

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
        $rules->add($rules->existsIn('commercial_id', 'Commercials'), ['errorField' => 'commercial_id']);
        $rules->add($rules->existsIn('pointdevente_id', 'Pointdeventes'), ['errorField' => 'pointdevente_id']);
        $rules->add($rules->existsIn('depot_id', 'Depots'), ['errorField' => 'depot_id']);

        return $rules;
    }
}
