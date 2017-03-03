<?php
/**
 *
 */
class Projects extends CI_Controller
{

  function index(){
    $this->load->model('projects_model');
    $data['records'] = $this->projects_model->getAll();
    $this->load->view('project_view', $data);
  }

  function addProject(){
    $this->load->view('project_add.php');
  }

  // function addProjectPhp(){
  //   $this->load->view('project_add.php');
  // }

  function create()
  {
    $data = array(
        'name' => $this->input->post('name'),
        'description' => $this->input->post('description')
    );

    $this->projects_model->addRecord($data);
    $this->index();
  }

  function delete()
  {
    $this->projects_model->deleteRecord();
    $this->index();
  }

  function update()
  {
    $id = $this->input->post('uneditedId');
    $data = array(
      'name' => $this->input->post('editedName'),
      'description' => $this->input->post('editedDescription')
    );
    $this->projects_model->updateRecord($id, $data);
    $this->index();
  }
}
