
<?php
class M_documents extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_documents()
	{
		$this->db->from('document');
		$this->db->order_by('id_document', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function set_documents($id, $data)
	{
		//set ,nama_alat,pabrik,kapasistas,lokasi,no_seri,no_perijinan,expired_date
		//by id_document
		$this->db->where('id_document', $id);
		return $this->db->update('document', $data);
	}

	public function add_multiple_documents($batchData)
	{
		//insert multiple data to database using json string

		$this->db->insert_batch('document', $batchData);

		// $this->db->insert_batch('document', $data);
		// $this->db->set($data);
		// $this->db->insert_batch('document', $data);
	}

	public function add_documents($data)
	{
		//set ,nama_alat,pabrik,kapasistas,lokasi,no_seri,no_perijinan,expired_date
		//by id_document
		return $this->db->insert('document', $data);
	}

	public function delete_documents($id)
	{
		//set ,nama_alat,pabrik,kapasistas,lokasi,no_seri,no_perijinan,expired_date
		//by id_document
		$this->db->where('id_document', $id);
		return $this->db->delete('document');
	}
	public function flip_status($id)
	{
		//flip status if active then processing and vice versa
		$this->db->where('id_document', $id);
		$this->db->select('status');
		$query = $this->db->get('document');
		$result = $query->result_array();
		$status = $result[0]['status'];
		if ($status == 'active') {
			$status = 'processing';
		} else {
			$status = 'active';
		}
		$this->db->where('id_document', $id);
		$this->db->set('status', $status);
		return $this->db->update('document');
	}
	public function setFilenameBy($id, $filename)
	{
		$this->db->where('id_document', $id);
		$this->db->set('filename', $filename);
		return $this->db->update('document');
	}
	public function produceExpiredDocumentSample()
	{
		//insert sample data with expired_date is 90 days from now
		$expired_date = date('Y-m-d', strtotime('+90 days'));
		$data = array(
			'nama_alat' => 'Sample Alat',
			'pabrik_pembuat' => 'Sample Pabrik',
			'kapasitas' => 'Sample Kapasistas',
			'lokasi' => 'Sample Lokasi',
			'no_seri' => 'Sample No Seri',
			'no_perijinan' => 'Sample No Perijinan',
			'expired_date' => $expired_date,
			'status' => 'active',
			'filename' => 'sample.pdf'
		);
		return $this->db->insert('document', $data);
	}
	public function getDocumentsForReminders()
	{
		$this->db->from('document');
		$this->db->where('status', 'active');
		$this->db->where('expired_date =', date('Y-m-d', strtotime('+90 days')));
		$this->db->order_by('id_document', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
}
