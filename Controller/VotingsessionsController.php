<?php

class VotingsessionsController extends AppController {
    public $helper = array('Html', 'Form');

    public function index() {
        $this->set('votingsessions', $this->Votingsession->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid votingsession'));
        }

        $votingsession = $this->Votingsession->findById($id);
        if (!$votingsession) {
            throw new NotFoundException(__('Invalid votingsession'));
        }
        $this->set('votingsession', $votingsession);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Votingsession->create();
            if ($this->Votingsession->save($this->request->data)) {
                $this->Session->setFlash(__('Your votingsession has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your votingsession.'));
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid votingsession'));
        }

        $votingsession = $this->Votingsession->findById($id);
        if (!$votingsession) {
            throw new NotFoundException(__('Invalid votingsession'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Votingsession->id = $id;
            if ($this->Votingsession->save($this->request->data)) {
                $this->Session->setFlash(__('Your Votingsession has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your votingsession.'));
        }

        if (!$this->request->data) {
            $this->request->data = $votingsession;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Votingsession->delete($id)) {
            $this->Session->setFlash(
                __('The votingsession with id: %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }
}
