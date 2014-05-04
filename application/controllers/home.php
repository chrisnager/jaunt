<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}
	public function places($id)
	{
		$data['id'] = $id;
		$data['place'] = $this->home_model->getPlace($id);
    $data['photo_references'] = array();
   
    // Get basic places data from API
    $this->load->library('places');
    foreach ($data['place'] as $row) {
      $data['reference'] = $row->reference;
    }
    $data['response'] = $this->places->getPlaceData($data['reference']);

    // Use places reference to get photo references
    foreach ($data['response']['result']['photos'] as $photo) {
      array_push($data['photo_references'], $photo['photo_reference']);
    }
		$this->load->view('templates/header');
		$this->load->view('places', $data);
		$this->load->view('templates/footer');
	}

	public function search()
	{
		$this->load->view('templates/header');
		$this->load->view('search');
		$this->load->view('templates/footer');
	}
	public function add() {

		$this->load->view('templates/header');
		$this->load->view('add');
		$this->load->view('templates/footer');		
	}


	public function permalink() {
		$this->load->view('templates/header');
		$this->load->view('permalink');
		$this->load->view('templates/footer');
	}

	public function jaunts($id) {
    $data['jaunt'] = $this->home_model->getJaunt($id);
    
		$this->load->view('templates/header');
		$this->load->view('jaunts', $data);
		$this->load->view('templates/footer');
	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
