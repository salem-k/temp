<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Representants Model
 *
 * @property \App\Model\Table\PersonnelsTable&\Cake\ORM\Association\BelongsTo $Personnels
 * @property \App\Model\Table\FonctionsTable&\Cake\ORM\Association\BelongsTo $Fonctions
 *
 * @method \App\Model\Entity\Representant newEmptyEntity()
 * @method \App\Model\Entity\Representant newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Representant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Representant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Representant findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Representant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Representant[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Representant|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Representant saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Representant[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Representant[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Representant[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Representant[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RepresentantsTable extends Table
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

        $this->setTable('representants');
        $this->setDisplayField('Name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Personnels', [
            'foreignKey' => 'personnel_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Fonctions', [
            'foreignKey' => 'fonction_id',
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
            ->scalar('Name')
            ->maxLength('Name', 120)
            ->requirePresence('Name', 'create')
            ->notEmptyString('Name');

        $validator
            ->scalar('personnel_id')
            ->maxLength('personnel_id', 120)
            ->notEmptyString('personnel_id');

        $validator
            ->scalar('fonction_id')
            ->maxLength('fonction_id', 120)
            ->notEmptyString('fonction_id');

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
        $rules->add($rules->existsIn('fonction_id', 'Fonctions'), ['errorField' => 'fonction_id']);

        return $rules;
    }
}
