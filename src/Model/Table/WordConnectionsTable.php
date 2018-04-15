<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WordConnections Model
 *
 * @property \App\Model\Table\WordsTable|\Cake\ORM\Association\BelongsTo $Words
 * @property \App\Model\Table\WordsTable|\Cake\ORM\Association\BelongsTo $Words
 * @property \App\Model\Table\ClassificationsTable|\Cake\ORM\Association\BelongsTo $Classifications
 *
 * @method \App\Model\Entity\WordConnection get($primaryKey, $options = [])
 * @method \App\Model\Entity\WordConnection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WordConnection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WordConnection|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WordConnection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WordConnection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WordConnection findOrCreate($search, callable $callback = null, $options = [])
 */
class WordConnectionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('word_connections');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('FromWords', [
            'className' => 'Words',
            'foreignKey' => 'from_id'
        ]);
        $this->belongsTo('ToWords', [
            'className' => 'Words',
            'foreignKey' => 'to_id'
        ]);
        $this->belongsTo('Words', [
            'foreignKey' => 'to_id'
        ]);
        $this->belongsTo('Classifications', [
            'foreignKey' => 'classification_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmpty('description')
            ->allowEmpty('to_translation')
            ->allowEmpty('from_translation');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['from_id'], 'Words'));
        $rules->add($rules->existsIn(['to_id'], 'Words'));
        $rules->add($rules->existsIn(['classification_id'], 'Classifications'));

        return $rules;
    }
}
