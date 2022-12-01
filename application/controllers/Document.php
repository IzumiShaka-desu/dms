<?php
class Document extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_documents');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		// det documents data
		$data['documents'] = $this->m_documents->get_documents();
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
		// $this->load->view('index');
		// echo 'Hello World!';
	}
	public function imports()
	{
		// check if it's a post request
		// if this is a post request then get json data from ajax post
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			//get raw json data from ajax post
			$json = file_get_contents('php://input');
			//decode json data to array
			// $data = json_decode($json, true);

			// get json data from ajax post
			// $data = $this->input->post('data');
			// var_dump($data);
			// decode json data
			// $batchData = json_decode($data);
			// var_dump($batchData);
			// insert data to database
			$data = json_decode($json, true);
			$batchData = [];
			//load data to batch data

			for ($i = 0; $i < count($data); $i++) {
				$batchData[$i] = [
					'nama_alat' => isset($data[$i]['nama_alat']) ? $data[$i]['nama_alat'] : '',
					'pabrik_pembuat' =>  isset($data[$i]['pabrik_pembuat']) ? $data[$i]['pabrik_pembuat'] : '',
					'kapasitas' => isset($data[$i]['kapasitas']) ? $data[$i]['kapasitas'] : '',
					'lokasi' => isset($data[$i]['lokasi']) ? $data[$i]['lokasi'] : '',
					'no_seri' => isset($data[$i]['no_seri']) ? $data[$i]['no_seri'] : '',
					'no_perijinan' => isset($data[$i]['no_perijinan']) ? $data[$i]['no_perijinan'] : '',
					'expired_date' => isset($data[$i]['expired_date']) ? $data[$i]['expired_date'] : '',
					'status' => isset($data[$i]['status']) ? $data[$i]['status'] : '',
				];
			}
			// foreach ($data as $key => $value) {
			// 	$batchData[] = [
			// 		'nama_alat' => isset($value['nama_alat']) ? $value['nama_alat'] : "",
			// 		'pabrik_pembuat' => isset($value['pabrik_pembuat']) ? $value['pabrik_pembuat'] : "",
			// 		'kapasitas' => isset($value['kapasitas']) ? $value['kapasitas'] : "",
			// 		'lokasi' => isset($value['lokasi']) ? $value['lokasi'] : "",
			// 		'no_seri' => isset($value['no_seri']) ? $value['no_seri'] : "",
			// 		'no_perijinan' => isset($value['no_perijinan']) ? $value['no_perijinan'] : "",
			// 		'expired_date' => isset($value['expired_date']) ? $value['expired_date'] : "",
			// 	];
			// }
			$this->m_documents->add_multiple_documents($batchData);
			// return success message
			echo 'success';
			// var_dump($data);
			var_dump($batchData);
		} else {
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('imports',);
			$this->load->view('templates/footer');
		}
	}
	public function flip_status($id)
	{
		$this->m_documents->flip_status($id);
		echo "<script>window.location.href='" . base_url() . "';</script>";
	}
	public function add()
	{
		$data["is_add_documents"] = 'true';
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('add',);
		$this->load->view('templates/footer', $data);
	}
	public function upload($id)
	{
		// upload file then set file name to database using  setFilenameBy function on model
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
		$config['max_size'] = 10000;
		$config['max_width'] = 10240;
		$config['max_height'] = 7680;
		$this->load->library('upload', $config);
		// $this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			$error = array('error' => $this->upload->display_errors());
			//reload to root page
			echo $error['error'];
			echo "<script>alert('Upload gagal!');window.location.href='" . base_url() . "';</script>";
		} else {
			$data = array('upload_data' => $this->upload->data());
			// set file name to database
			$this->m_documents->setFilenameBy($id, $data['upload_data']['file_name']);
			//reload to root page
			echo "<script>alert('Upload berhasil!');window.location.href='" . base_url() . "';</script>";
		}
	}

	// public function view($slug = NULL) {
	// 	$data['document_item'] = $this->Document_model->get_documents($slug);
	// 	if (empty($data['document_item'])) {
	// 		show_404();
	// 	}
	// 	$data['title'] = $data['document_item']['title'];
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('document/view', $data);
	// 	$this->load->view('templates/footer');
	// }
	// public function create() {
	// 	$this->load->helper('form');
	// 	$this->load->library('form_validation');
	// 	$data['title'] = 'Create a document item';
	// 	$this->form_validation->set_rules('title', 'Title', 'required');
	// 	$this->form_validation->set_rules('text', 'Text', 'required');
	// 	if ($this->form_validation->run() === FALSE) {
	// 		$this->load->view('templates/header', $data);
	// 		$this->load->view('document/create');
	// 		$this->load->view('templates/footer');
	// 	} else {
	// 		$this->Document_model->set_documents();
	// 		$this->load->view('document/success');
	// 	}
	// }
}
