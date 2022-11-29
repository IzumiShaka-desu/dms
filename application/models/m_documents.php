<!-- create document models with table name document -->
<!-- create document controller with index, add, import, view, create, edit, delete -->
<!-- document have id_document,nama_alat,pabrik,kapasistas,lokasi,no_seri,no_perijinan,expired_date -->

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
}
