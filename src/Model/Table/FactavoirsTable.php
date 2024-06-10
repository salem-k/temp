<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Factavoirs Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\BelongsTo $Factures
 *
 * @method \App\Model\Entity\Factavoir newEmptyEntity()
 * @method \App\Model\Entity\Factavoir newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Factavoir[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Factavoir get($primaryKey, $options = [])
 * @method \App\Model\Entity\Factavoir findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Factavoir patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Factavoir[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Factavoir|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Factavoir saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Factavoir[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Factavoir[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Factavoir[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Factavoir[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FactavoirsTable extends Table
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

        $this->setTable('factavoirs');
        $this->setDisplayField('client_id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Factures', [
            'foreignKey' => 'facture_id',
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
            ->date('Date_debut')
            ->requirePresence('Date_debut', 'create')
            ->notEmptyDate('Date_debut');

        $validator
            ->date('Date_fin')
            ->requirePresence('Date_fin', 'create')
            ->notEmptyDate('Date_fin');

        $validator
            ->scalar('client_id')
            ->maxLength('client_id', 120)
            ->notEmptyString('client_id');

        $validator
            ->scalar('facture_id')
            ->maxLength('facture_id', 120)
            ->notEmptyString('facture_id');

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
        $rules->add($rules->existsIn('facture_id', 'Factures'), ['errorField' => 'facture_id']);

        return $rules;
    }
}
