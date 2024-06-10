<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Taches Model
 *
 * @property \App\Model\Table\PersonnelsTable&\Cake\ORM\Association\BelongsTo $Personnels
 *
 * @method \App\Model\Entity\Tach newEmptyEntity()
 * @method \App\Model\Entity\Tach newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tach[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tach get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tach findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tach patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tach[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tach|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tach saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tach[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tach[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tach[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tach[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TachesTable extends Table
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

        $this->setTable('taches');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Personnels', [
            'foreignKey' => 'personnel_id',
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
            ->scalar('ref')
            ->maxLength('ref', 100)
            ->allowEmptyString('ref');

        $validator
            ->scalar('libelle')
            ->maxLength('libelle', 100)
            ->allowEmptyString('libelle');

        $validator
            ->integer('projet_id')
            ->allowEmptyString('projet_id');

        $validator
            ->dateTime('dated')
            ->allowEmptyDateTime('dated');

        $validator
            ->dateTime('datefin')
            ->allowEmptyDateTime('datefin');

        $validator
            ->scalar('duree')
            ->maxLength('duree', 50)
            ->allowEmptyString('duree');

        $validator
            ->integer('progression_id')
            ->allowEmptyString('progression_id');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        $validator
            ->scalar('contact')
            ->maxLength('contact', 255)
            ->allowEmptyString('contact');

        $validator
            ->scalar('dureem')
            ->maxLength('dureem', 255)
            ->allowEmptyString('dureem');

        $validator
            ->integer('personnel_id')
            ->allowEmptyString('personnel_id');

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
        $rules->add($rules->existsIn('personnel_id', 'Personnels'), ['errorField' => 'personnel_id']);

        return $rules;
    }
}
