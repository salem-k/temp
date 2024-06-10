<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Replivreures Model
 *
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 *
 * @method \App\Model\Entity\Replivreure newEmptyEntity()
 * @method \App\Model\Entity\Replivreure newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Replivreure[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Replivreure get($primaryKey, $options = [])
 * @method \App\Model\Entity\Replivreure findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Replivreure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Replivreure[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Replivreure|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Replivreure saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Replivreure[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Replivreure[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Replivreure[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Replivreure[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ReplivreuresTable extends Table
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

        $this->setTable('replivreures');
        $this->setDisplayField('Responsable');
        $this->setPrimaryKey('id');

        $this->belongsTo('Depots', [
            'foreignKey' => 'Depot_id',
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
            ->scalar('Responsable')
            ->maxLength('Responsable', 120)
            ->requirePresence('Responsable', 'create')
            ->notEmptyString('Responsable');

        $validator
            ->scalar('Adresse')
            ->maxLength('Adresse', 120)
            ->requirePresence('Adresse', 'create')
            ->notEmptyString('Adresse');

        $validator
            ->scalar('Username')
            ->maxLength('Username', 120)
            ->requirePresence('Username', 'create')
            ->notEmptyString('Username');

        $validator
            ->scalar('Password')
            ->maxLength('Password', 120)
            ->requirePresence('Password', 'create')
            ->notEmptyString('Password');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 120)
            ->requirePresence('Email', 'create')
            ->notEmptyString('Email');

        $validator
            ->scalar('Voiture')
            ->maxLength('Voiture', 120)
            ->requirePresence('Voiture', 'create')
            ->notEmptyString('Voiture');

        $validator
            ->scalar('Categorie')
            ->maxLength('Categorie', 120)
            ->requirePresence('Categorie', 'create')
            ->notEmptyString('Categorie');

        $validator
            ->integer('Telephone')
            ->requirePresence('Telephone', 'create')
            ->notEmptyString('Telephone');

        $validator
            ->scalar('Depot_id')
            ->maxLength('Depot_id', 120)
            ->notEmptyString('Depot_id');

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
        $rules->add($rules->existsIn('Depot_id', 'Depots'), ['errorField' => 'Depot_id']);

        return $rules;
    }
}
