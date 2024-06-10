<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pfinals Model
 *
 * @property \App\Model\Table\SouscategoriesTable&\Cake\ORM\Association\BelongsTo $Souscategories
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\Pfinal newEmptyEntity()
 * @method \App\Model\Entity\Pfinal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pfinal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pfinal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pfinal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pfinal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pfinal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pfinal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pfinal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pfinal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pfinal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pfinal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pfinal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PfinalsTable extends Table
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

        $this->setTable('pfinals');
        $this->setDisplayField('Description');
        $this->setPrimaryKey('id');

        $this->belongsTo('Souscategories', [
            'foreignKey' => 'souscategorie_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'categories_id',
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
            ->scalar('Description')
            ->maxLength('Description', 50)
            ->requirePresence('Description', 'create')
            ->notEmptyString('Description');

        $validator
            ->numeric('Prix')
            ->requirePresence('Prix', 'create')
            ->notEmptyString('Prix');

        $validator
            ->integer('PrixSEC')
            ->requirePresence('PrixSEC', 'create')
            ->notEmptyString('PrixSEC');

        $validator
            ->integer('PrixGROS')
            ->requirePresence('PrixGROS', 'create')
            ->notEmptyString('PrixGROS');

        $validator
            ->scalar('PHOTO')
            ->maxLength('PHOTO', 120)
            ->requirePresence('PHOTO', 'create')
            ->notEmptyString('PHOTO');

        $validator
            ->boolean('Gratuit')
            ->requirePresence('Gratuit', 'create')
            ->notEmptyString('Gratuit');

        $validator
            ->scalar('souscategorie_id')
            ->maxLength('souscategorie_id', 50)
            ->notEmptyString('souscategorie_id');

        $validator
            ->scalar('categories_id')
            ->maxLength('categories_id', 50)
            ->notEmptyString('categories_id');

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
        $rules->add($rules->existsIn('souscategorie_id', 'Souscategories'), ['errorField' => 'souscategorie_id']);
        $rules->add($rules->existsIn('categories_id', 'Categories'), ['errorField' => 'categories_id']);

        return $rules;
    }
}
