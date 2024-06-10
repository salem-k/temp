<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reglements Model
 *
 * @property \App\Model\Table\FournisseursTable&\Cake\ORM\Association\BelongsTo $Fournisseurs
 * @property \App\Model\Table\UtilisateursTable&\Cake\ORM\Association\BelongsTo $Utilisateurs
 * @property \App\Model\Table\DevisesTable&\Cake\ORM\Association\BelongsTo $Devises
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 *
 * @method \App\Model\Entity\Reglement newEmptyEntity()
 * @method \App\Model\Entity\Reglement newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Reglement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reglement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Reglement findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Reglement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Reglement[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reglement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reglement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reglement[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reglement[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reglement[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reglement[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ReglementsTable extends Table
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

        $this->setTable('reglements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Fournisseurs', [
            'foreignKey' => 'fournisseur_id',
        ]);
        $this->belongsTo('Utilisateurs', [
            'foreignKey' => 'utilisateur_id',
        ]);
        $this->belongsTo('Devises', [
            'foreignKey' => 'devise_id',
        ]);
        $this->belongsTo('Pointdeventes', [
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
            ->scalar('numeroconca')
            ->maxLength('numeroconca', 255)
            ->allowEmptyString('numeroconca');

        $validator
            ->integer('fournisseur_id')
            ->allowEmptyString('fournisseur_id');

        $validator
            ->date('Date')
            ->allowEmptyDate('Date');

        $validator
            ->decimal('Montant')
            ->allowEmptyString('Montant');

        $validator
            ->integer('importation_id')
            ->allowEmptyString('importation_id');

        $validator
            ->decimal('montantdevise')
            ->allowEmptyString('montantdevise');

        $validator
            ->integer('libre')
            ->allowEmptyString('libre');

        $validator
            ->integer('utilisateur_id')
            ->allowEmptyString('utilisateur_id');

        $validator
            ->integer('exercice_id')
            ->allowEmptyString('exercice_id');

        $validator
            ->scalar('designation')
            ->maxLength('designation', 255)
            ->allowEmptyString('designation');

        $validator
            ->integer('impaye')
            ->allowEmptyString('impaye');

        $validator
            ->decimal('differance')
            ->allowEmptyString('differance');

        $validator
            ->scalar('numeropieceintegre')
            ->maxLength('numeropieceintegre', 255)
            ->allowEmptyString('numeropieceintegre');

        $validator
            ->numeric('RG_NO')
            ->allowEmptyString('RG_NO');

        $validator
            ->integer('devise_id')
            ->allowEmptyString('devise_id');

        $validator
            ->decimal('taux')
            ->allowEmptyString('taux');

        $validator
            ->integer('pointdevente_id')
            ->allowEmptyString('pointdevente_id');

        $validator
            ->integer('projet_id')
            ->allowEmptyString('projet_id');

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
        $rules->add($rules->existsIn('fournisseur_id', 'Fournisseurs'), ['errorField' => 'fournisseur_id']);
        $rules->add($rules->existsIn('utilisateur_id', 'Utilisateurs'), ['errorField' => 'utilisateur_id']);
        $rules->add($rules->existsIn('devise_id', 'Devises'), ['errorField' => 'devise_id']);
        $rules->add($rules->existsIn('pointdevente_id', 'Pointdeventes'), ['errorField' => 'pointdevente_id']);

        return $rules;
    }
}
