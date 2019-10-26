<?php

	class M_user extends CI_Model {

		const TABLE	= 'user';

		public function __construct()
		{
			parent::__construct();
		}

		public function save($data)
		{
			$this->db->insert(self::TABLE, $data);
		}

		public function findAll()
		{
			$this->db->select('*');
			$this->db->from(self::TABLE);
			$this->db->order_by("id", "asc");
			$query = $this->db->get();
			return $query->result();
		}
		public function findAllByAll()
			{
				$this->db->select('user.*, location.city');
				$this->db->from(self::TABLE);
				// tabel name, joining condition, left/right/inner/selt. for inner no need to write
				$this->db->join('location', 'location.id = user.city', 'left	');
				$this->db->order_by("id", "desc");
				$query = $this->db->get();
				return $query->result();
			}

		public function findByUserName($userName)
		{
			$this->db->select('*');
			$this->db->from(self::TABLE);
			$this->db->where('email', $userName);
			$query = $this->db->get();
			return $query->row();
		}

		public function findByUserId($id)
		{
			$this->db->select('*');
			$this->db->from(self::TABLE);
			$this->db->where('id', $id);
			$query = $this->db->get();
			return $query->row();
		}

		public function findByManager($whare)
		{
			$this->db->select('*');
			$this->db->from(self::TABLE);
			$this->db->where($whare);
			$query = $this->db->get();
			return $query->result();
		}

		public function countFranchise($franchiseArr)
		{
			$this->db->from(self::TABLE);
			//$array = array('id !=' => '64', 'permission' => '0')
			$this->db->where($franchiseArr);
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}
		public function countManager($managerArr)
		{
			$this->db->from(self::TABLE);
			//$array = array('id !=' => '64', 'permission' => '0')
			$this->db->where($managerArr);
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}

		public function update($data, $id)
		{
			$this->db->update(self::TABLE, $data, array('id' => $id));
		}

		public function destroy($id)
		{
			$this->db->delete(self::TABLE, array('id' => $id));
		}

	}
?>
