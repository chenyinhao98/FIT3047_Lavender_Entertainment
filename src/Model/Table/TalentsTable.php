<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Talents Model
 *
 * @method \App\Model\Entity\Talent newEmptyEntity()
 * @method \App\Model\Entity\Talent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Talent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Talent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Talent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Talent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Talent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Talent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Talent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Talent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Talent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Talent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Talent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TalentsTable extends Table
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

        $this->setTable('talents');
        $this->setDisplayField('talentID');
        $this->setPrimaryKey('talentID');
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
            ->integer('talentID')
            ->allowEmptyString('talentID', null, 'create');

        $validator
            ->scalar('talentCategory')
            ->maxLength('talentCategory', 64)
            ->requirePresence('talentCategory', 'create')
            ->notEmptyString('talentCategory');

        $validator
            ->scalar('talentName')
            ->maxLength('talentName', 256)
            ->requirePresence('talentName', 'create')
            ->notEmptyString('talentName');

        $validator
            ->scalar('talentPreferred')
            ->maxLength('talentPreferred', 256)
            ->requirePresence('talentPreferred', 'create')
            ->notEmptyString('talentPreferred');

        $validator
            ->scalar('talentAddress')
            ->maxLength('talentAddress', 256)
            ->requirePresence('talentAddress', 'create')
            ->notEmptyString('talentAddress');

        $validator
            ->numeric('talentTravelRadius')
            ->requirePresence('talentTravelRadius', 'create')
            ->notEmptyString('talentTravelRadius');

        $validator
            ->scalar('talentPPH')
            ->maxLength('talentPPH', 256)
            ->requirePresence('talentPPH', 'create')
            ->notEmptyString('talentPPH');

        $validator
            ->numeric('talentMinHour')
            ->requirePresence('talentMinHour', 'create')
            ->notEmptyString('talentMinHour');

        $validator
            ->scalar('talentContactName')
            ->maxLength('talentContactName', 64)
            ->requirePresence('talentContactName', 'create')
            ->notEmptyString('talentContactName');

        $validator
            ->scalar('talentContactNumber')
            ->maxLength('talentContactNumber', 256)
            ->requirePresence('talentContactNumber', 'create')
            ->notEmptyString('talentContactNumber');

        $validator
            ->scalar('talentContactEmail')
            ->maxLength('talentContactEmail', 256)
            ->requirePresence('talentContactEmail', 'create')
            ->notEmptyString('talentContactEmail');

        return $validator;
    }
}
