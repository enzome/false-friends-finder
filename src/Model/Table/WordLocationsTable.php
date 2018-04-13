<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WordLocations Model
 *
 * @property \App\Model\Table\WordsTable|\Cake\ORM\Association\BelongsTo $Words
 *
 * @method \App\Model\Entity\WordLocation get($primaryKey, $options = [])
 * @method \App\Model\Entity\WordLocation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WordLocation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WordLocation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WordLocation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WordLocation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WordLocation findOrCreate($search, callable $callback = null, $options = [])
 */
class WordLocationsTable extends Table
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

        $this->setTable('word_locations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Words', [
            'foreignKey' => 'word_id'
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
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmpty('url');

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
        $rules->add($rules->existsIn(['word_id'], 'Words'));

        return $rules;
    }

    public function addAdditional($entity_id, $url) {
        $found = $this->findByWordIdAndUrl($entity_id, $url)->first();
        if ($found != null) {
            $found['count'] = $found['count'] + 1;
            $this->save($found);
            return 'incremented';
        } else {
            $additional = $this->patchEntity($this->newEntity(), ['word_id' => $entity_id, 'url' => $url, 'count' => 1]);
            if ($this->save($additional)) {
                return 'added new URL';
            } else {
                return 'error adding new';
            }
        }
    }

}
