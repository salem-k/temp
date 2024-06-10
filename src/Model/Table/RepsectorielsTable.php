<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Repsectoriels Model
 *
 * @property \App\Model\Table\CommandegrossTable&\Cake\ORM\Association\HasMany $Commandegross
 * @property \App\Model\Table\CommandesectsTable&\Cake\ORM\Association\HasMany $Commandesects
 * @property \App\Model\Table\CommentairesTable&\Cake\ORM\Association\HasMany $Commentaires
 *
 * @method \App\Model\Entity\Repsectoriel newEmptyEntity()
 * @method \App\Model\Entity\Repsectoriel newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Repsectoriel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Repsectoriel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Repsectoriel findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Repsectoriel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Repsectoriel[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Repsectoriel|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Repsectoriel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Repsectoriel[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Repsectoriel[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Repsectoriel[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Repsectoriel[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RepsectorielsTable extends Table
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

        $this->setTable('repsectoriels');
        $this->setDisplayField('Responsable');
        $this->setPrimaryKey('id');

        $this->hasMany('Commandegross', [
            'foreignKey' => 'repsectoriel_id',
        ]);
        $this->hasMany('Commandesects', [
            'foreignKey' => 'repsectoriel_id',
        ]);
        $this->hasMany('Commentaires', [
            'foreignKey' => 'repsectoriel_id',
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
            ->integer('Numero_telephone')
            ->requirePresence('Numero_telephone', 'create')
            ->notEmptyString('Numero_telephone');

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
            ->scalar('Remplacant_id')
            ->maxLength('Remplacant_id', 120)
            ->requirePresence('Remplacant_id', 'create')
            ->notEmptyString('Remplacant_id');

        $validator
            ->scalar('Activity')
            ->maxLength('Activity', 120)
            ->requirePresence('Activity', 'create')
            ->notEmptyString('Activity');

        $validator
            ->scalar('depotttt_id')
            ->maxLength('depotttt_id', 120)
            ->requirePresence('depotttt_id', 'create')
            ->notEmptyString('depotttt_id');

        return $validator;
    }
}
