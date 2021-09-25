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
 * @property \App\Model\Table\TalentAvailabilityTable&\Cake\ORM\Association\HasMany $TalentAvailability
 * @property \App\Model\Table\TalentSuburbTable&\Cake\ORM\Association\HasMany $TalentSuburb
 * @property \App\Model\Table\EventTypesTable&\Cake\ORM\Association\BelongsToMany $EventTypes
 * @property \App\Model\Table\EventsTable&\Cake\ORM\Association\BelongsToMany $Events
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
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('TalentAvailability', [
            'foreignKey' => 'talent_id',
        ]);
        $this->hasMany('TalentSuburb', [
            'foreignKey' => 'talent_id',
        ]);
        $this->belongsToMany('EventTypes', [
            'foreignKey' => 'talent_id',
            'targetForeignKey' => 'event_type_id',
            'joinTable' => 'event_types_talents',
        ]);
        $this->belongsToMany('Events', [
            'foreignKey' => 'talent_id',
            'targetForeignKey' => 'event_id',
            'joinTable' => 'events_talents',
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
            ->numeric('talent_payrate')
            ->requirePresence('talent_payrate', 'create')
            ->notEmptyString('talent_payrate');

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

        $validator
            ->scalar('talent_photo')
            ->maxLength('talent_photo', 256)
            ->allowEmptyString('talent_photo');

        $validator
            ->scalar('talent_about_us')
            ->maxLength('talent_about_us', 512)
            ->allowEmptyString('talent_about_us');

        return $validator;
    }
}
