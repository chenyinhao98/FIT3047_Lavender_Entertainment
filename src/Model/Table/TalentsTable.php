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

        $this->belongsToMany('Events', [
            'foreignKey' => 'talent_id',
            'targetForeignKey' => 'event_id',
            'joinTable' => 'events_talents',
        ]);
        $this->belongsToMany('EventTypes', [
            'foreignKey' => 'talent_id',
            'targetForeignKey' => 'event_type_id',
            'joinTable' => 'talents_event_types',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('talent_type')
            ->maxLength('talent_type', 64)
            ->requirePresence('talent_type', 'create')
            ->notEmptyString('talent_type');

        $validator
            ->scalar('talent_name')
            ->maxLength('talent_name', 256)
            ->requirePresence('talent_name', 'create')
            ->notEmptyString('talent_name');

        $validator
            ->scalar('talent_address')
            ->maxLength('talent_address', 256)
            ->requirePresence('talent_address', 'create')
            ->notEmptyString('talent_address');

        $validator
            ->numeric('talent_travel_radius')
            ->requirePresence('talent_travel_radius', 'create')
            ->notEmptyString('talent_travel_radius');

        $validator
            ->numeric('talent_payrate')
            ->requirePresence('talent_payrate', 'create')
            ->notEmptyString('talent_payrate');

        $validator
            ->numeric('talent_min_hour')
            ->requirePresence('talent_min_hour', 'create')
            ->notEmptyString('talent_min_hour');

        $validator
            ->scalar('talent_contact_name')
            ->maxLength('talent_contact_name', 64)
            ->requirePresence('talent_contact_name', 'create')
            ->notEmptyString('talent_contact_name');

        $validator
            ->scalar('talent_contact_number')
            ->maxLength('talent_contact_number', 256)
            ->requirePresence('talent_contact_number', 'create')
            ->notEmptyString('talent_contact_number');

        $validator
            ->scalar('talent_email')
            ->maxLength('talent_email', 256)
            ->requirePresence('talent_email', 'create')
            ->notEmptyString('talent_email');

        return $validator;
    }
}
