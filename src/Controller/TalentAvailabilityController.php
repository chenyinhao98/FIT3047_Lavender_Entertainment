<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TalentAvailability Controller
 *
 * @property \App\Model\Table\TalentAvailabilityTable $TalentAvailability
 * @method \App\Model\Entity\TalentAvailability[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TalentAvailabilityController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Talents'],
        ];
        $talentAvailability = $this->paginate($this->TalentAvailability);

        $this->set(compact('talentAvailability'));
    }

    /**
     * View method
     *
     * @param string|null $id Talent Availability id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $talentAvailability = $this->TalentAvailability->get($id, [
            'contain' => ['Talents'],
        ]);

        $this->set(compact('talentAvailability'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $talentAvailability = $this->TalentAvailability->newEmptyEntity();
        if ($this->request->is('post')) {
            $talentAvailability = $this->TalentAvailability->patchEntity($talentAvailability, $this->request->getData());
            if ($this->TalentAvailability->save($talentAvailability)) {
                $this->Flash->success(__('The talent availability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The talent availability could not be saved. Please, try again.'));
        }
        $talents = $this->TalentAvailability->Talents->find('list', ['limit' => 200]);
        $this->set(compact('talentAvailability', 'talents'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Talent Availability id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $talentAvailability = $this->TalentAvailability->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $talentAvailability = $this->TalentAvailability->patchEntity($talentAvailability, $this->request->getData());
            if ($this->TalentAvailability->save($talentAvailability)) {
                $this->Flash->success(__('The talent availability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The talent availability could not be saved. Please, try again.'));
        }
        $talents = $this->TalentAvailability->Talents->find('list', ['limit' => 200]);
        $this->set(compact('talentAvailability', 'talents'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Talent Availability id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $talentAvailability = $this->TalentAvailability->get($id);
        if ($this->TalentAvailability->delete($talentAvailability)) {
            $this->Flash->success(__('The talent availability has been deleted.'));
        } else {
            $this->Flash->error(__('The talent availability could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
