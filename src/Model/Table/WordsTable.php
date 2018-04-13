<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;

/**
 * Words Model
 *
 * @property \App\Model\Table\LanguagesTable|\Cake\ORM\Association\BelongsTo $Languages
 * @property \App\Model\Table\WordLocationsTable|\Cake\ORM\Association\HasMany $WordLocations
 *
 * @method \App\Model\Entity\Word get($primaryKey, $options = [])
 * @method \App\Model\Entity\Word newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Word[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Word|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Word patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Word[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Word findOrCreate($search, callable $callback = null, $options = [])
 */
class WordsTable extends Table
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

        $this->setTable('words');
        $this->setDisplayField('word');
        $this->setPrimaryKey('id');

        $this->belongsTo('Languages', [
            'foreignKey' => 'language_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('WordLocations', [
            'foreignKey' => 'word_id',
            'dependent' => true
        ]);
        $this->hasMany('FirstWordConnections', [
            'className' => 'WordConnections',
            'foreignKey' => 'to_id',
            'dependent' => true
        ]);
        $this->hasMany('SecondWordConnections', [
            'className' => 'WordConnections',
            'foreignKey' => 'from_id',
            'dependent' => true
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
            ->scalar('word')
            ->maxLength('word', 45)
            ->requirePresence('word', 'create')
            ->notEmpty('word');


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
        $rules->add($rules->existsIn(['language_id'], 'Languages'));
        $rules->add($rules->isUnique(['word', 'language_id']));
        return $rules;
    }

    public function findFriends() {
        $conn = ConnectionManager::get('default');
        $words = $conn->execute('SELECT id, word, flag, hidden FROM words GROUP BY word HAVING count(*) > 1 ORDER BY words.flag DESC');
        return $words;
    }

    public function flag($id) {
        $toFlag = $this->get($id);
        $toFlag->flag = true;
        $this->save($toFlag);
    }
    public function hide($id) {
        $toFlag = $this->get($id);
        $toFlag->hidden = true;
        $this->save($toFlag);
    }
}
