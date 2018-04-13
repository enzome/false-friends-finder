<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LinkSuggestions Model
 *
 * @method \App\Model\Entity\LinkSuggestion get($primaryKey, $options = [])
 * @method \App\Model\Entity\LinkSuggestion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LinkSuggestion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LinkSuggestion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LinkSuggestion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LinkSuggestion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LinkSuggestion findOrCreate($search, callable $callback = null, $options = [])
 */
class LinkSuggestionsTable extends Table
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

        $this->setTable('link_suggestions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('link')
            ->maxLength('link', 45)
            ->allowEmpty('link')
            ->add('link', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('completed');

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
        $rules->add($rules->isUnique(['link']));

        return $rules;
    }
}
