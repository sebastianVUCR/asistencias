<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CoursesGroups Controller
 *
 * @property \App\Model\Table\CoursesGroupsTable $CoursesGroups
 *
 * @method \App\Model\Entity\CoursesGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursesGroupsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $coursesGroups = $this->paginate($this->CoursesGroups);

        $this->set(compact('coursesGroups'));
    }

    /**
     * View method
     *
     * @param string|null $id Courses Group id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coursesGroup = $this->CoursesGroups->get($id, [       'contain' => []        ]);

        $this->set('coursesGroup', $coursesGroup);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coursesGroup = $this->CoursesGroups->newEntity();
        if ($this->request->is('post')) {
            $coursesGroup = $this->CoursesGroups->patchEntity($coursesGroup, $this->request->getData());
            if ($this->CoursesGroups->save($coursesGroup)) {
                $this->Flash->success(__('The courses group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The courses group could not be saved. Please, try again.'));
        }
        $this->set(compact('coursesGroup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Courses Group id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coursesGroup = $this->CoursesGroups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coursesGroup = $this->CoursesGroups->patchEntity($coursesGroup, $this->request->getData());
            if ($this->CoursesGroups->save($coursesGroup)) {
                $this->Flash->success(__('The courses group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The courses group could not be saved. Please, try again.'));
        }
        $this->set(compact('coursesGroup'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Courses Group id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coursesGroup = $this->CoursesGroups->get($id);
        if ($this->CoursesGroups->delete($coursesGroup)) {
            $this->Flash->success(__('The courses group has been deleted.'));
        } else {
            $this->Flash->error(__('The courses group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
