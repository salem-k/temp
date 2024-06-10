<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pointdeventes Model
 *
 * @property \App\Model\Table\BondetransfertsTable&\Cake\ORM\Association\HasMany $Bondetransferts
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\HasMany $Factures
 * @property \App\Model\Table\PersonnelsTable&\Cake\ORM\Association\HasMany $Personnels
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\UtilisateursTable&\Cake\ORM\Association\HasMany $Utilisateurs
 *
 * @method \App\Model\Entity\Pointdevente newEmptyEntity()
 * @method \App\Model\Entity\Pointdevente newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pointdevente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pointdevente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pointdevente findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pointdevente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pointdevente[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pointdevente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pointdevente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pointdevente[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointdevente[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointdevente[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointdevente[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PointdeventesTable extends Table
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

        $this->setTable('pointdeventes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Bondetransferts', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->hasMany('Factures', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->hasMany('Personnels', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->hasMany('Utilisateurs', [
            'foreignKey' => 'pointdevente_id',
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
            ->scalar('code')
            ->maxLength('code', 255)
            ->allowEmptyString('code');

        $validator
            ->scalar('name')
            ->maxLength('name', 200)
            ->allowEmptyString('name');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 300)
            ->allowEmptyString('adresse');

        $validator
            ->integer('ville_id')
            ->allowEmptyString('ville_id');

        $validator
            ->scalar('matriclefiscale')
            ->maxLength('matriclefiscale', 255)
            ->allowEmptyString('matriclefiscale');

        return $validator;
    }
}
