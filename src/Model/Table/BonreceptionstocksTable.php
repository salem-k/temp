<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bonreceptionstocks Model
 *
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 * @property \App\Model\Table\PersonnelsTable&\Cake\ORM\Association\BelongsTo $Personnels
 * @property \App\Model\Table\BondetransfertsTable&\Cake\ORM\Association\HasMany $Bondetransferts
 *
 * @method \App\Model\Entity\Bonreceptionstock newEmptyEntity()
 * @method \App\Model\Entity\Bonreceptionstock newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Bonreceptionstock[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bonreceptionstock get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bonreceptionstock findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Bonreceptionstock patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bonreceptionstock[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bonreceptionstock|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bonreceptionstock saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bonreceptionstock[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bonreceptionstock[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bonreceptionstock[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bonreceptionstock[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BonreceptionstocksTable extends Table
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

        $this->setTable('bonreceptionstocks');
        $this->setDisplayField('numero');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Depots', [
            'foreignKey' => 'depot_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Personnels', [
            'foreignKey' => 'personnel_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Bondetransferts', [
            'foreignKey' => 'bonreceptionstock_id',
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
            ->maxLength('numero', 255)
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('pointdevente_id')
            ->notEmptyString('pointdevente_id');

        $validator
            ->integer('depot_id')
            ->notEmptyString('depot_id');

        $validator
            ->integer('materieltransport_id')
            ->requirePresence('materieltransport_id', 'create')
            ->notEmptyString('materieltransport_id');

        $validator
            ->integer('cartecarburant_id')
            ->requirePresence('cartecarburant_id', 'create')
            ->notEmptyString('cartecarburant_id');

        $validator
            ->integer('personnel_id')
            ->notEmptyString('personnel_id');

        $validator
            ->integer('conffaieur_id')
            ->requirePresence('conffaieur_id', 'create')
            ->notEmptyString('conffaieur_id');

        $validator
            ->integer('chauffeur_id')
            ->requirePresence('chauffeur_id', 'create')
            ->notEmptyString('chauffeur_id');

        $validator
            ->numeric('kilometragedepart')
            ->requirePresence('kilometragedepart', 'create')
            ->notEmptyString('kilometragedepart');

        $validator
            ->numeric('kilometragearrive')
            ->requirePresence('kilometragearrive', 'create')
            ->notEmptyString('kilometragearrive');

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
        $rules->add($rules->existsIn('personnel_id', 'Personnels'), ['errorField' => 'personnel_id']);

        return $rules;
    }
}
