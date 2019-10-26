<?php

	class M_visitor_counter extends CI_Model {

		const TABLE	= 'visitor_counter';

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
			$this->db->order_by("id", "desc");
			$query = $this->db->get();
			return $query->row();
		}

		public function findById($id)
		{
			$this->db->select('*');
			$this->db->from(self::TABLE);
			$this->db->where('id', $id);
			$query = $this->db->get();
			return $query->row();
		}

        public function findByAbout($where)
		{
			$this->db->select('*');
			$this->db->from(self::TABLE);
			$this->db->where($where);
      $this->db->order_by("id", "desc");
			$query = $this->db->get();
			return $query->row();
		}
		 public function findByProduct($where)
		{
			$this->db->select('*');
			$this->db->from(self::TABLE);
			$this->db->where($where);
      $this->db->order_by("id", "desc");
			$query = $this->db->get();
			return $query->result();
		}


		public function countAll(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where($where);
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}
		public function countByJan(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('1'));
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}
		public function countByFeb(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('2'));
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}public function countByMarch(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('3'));
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}public function countByApp(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('4'));
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}public function countByMay(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('5'));
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}public function countByJun(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('6'));
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}public function countByJul(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('7'));
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}
		public function countByAug(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('8'));
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}public function countBySep(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('9'));
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}public function countByOct(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('10'));
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}public function countByNov(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('11'));
			$query = $this->db->count_all_results(); //get total row from databse by count_all_results()
			return $query;
		}public function countByDec(Array $where = array())
		{
			$this->db->from(self::TABLE);
			$this->db->where('month(date)', date('12'));
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
