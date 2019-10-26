<?php

	class M_crud extends CI_Model {

		const TABLE	= '';

		public function __construct()
		{
			parent::__construct();
		}

		public function findByUserName($table, $userName)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where('client_user_name', $userName);
			$query = $this->db->get();
			return $query->row();
		}

		public function save($table,$data)
		{
			$this->db->insert($table, $data);
		}

		public function findAll($table, $where = array(), $orderBy = 'id', $serialized = 'asc')
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($where);
			$this->db->order_by($orderBy, $serialized);
			$query = $this->db->get();
			return $query->result();
		}

		public function findDetailsForMarchentBooking($merchant_id)
		 {
		 	$where = array('merchant_id' => $merchant_id);

            $list				    = $this->findAll('booking', $where, 'tracking_id', 'desc');
            foreach($list as $model)
            {               
                // for payment Details
            	$booking_id		= $model->id;
            	$where = array('booking_id' => $booking_id);
                $payment_details	= $this->M_crud->findById('payment_status', $where);
                $model->payment_details = $payment_details;
            }
            return $list;
        }

		public function findAllDetailsForBooking()
		 {
		 	$where = array('status !=' => NULL);
            $list				    = $this->findAll('booking', $where, 'tracking_id', 'desc');
            foreach($list as $model)
            {
            	$merchant_id		= $model->merchant_id;
            	$where = array('id' => $merchant_id);
                $merchant_details	= $this->M_crud->findById('registerform', $where);
                $model->merchant_details = $merchant_details;

                // for payment Details
            	$booking_id		= $model->id;
            	$where = array('booking_id' => $booking_id);
                $payment_details	= $this->M_crud->findById('payment_status', $where);
                $model->payment_details = $payment_details;
            }
            return $list;
        }

		public function findAllDetails($table)
		 {
            $list				    = $this->findAll($table);
            foreach($list as $model)
            {
            	$merchant_id		= $model->merchant_id;
            	$where = array('id' => $merchant_id);
                $merchant_details	= $this->M_crud->findById('registerform', $where);

                $model->merchant_details = $merchant_details;
            }
            return $list;
        }


		// public function findAllByAll2()
		// {
		// 	$this->db->select('promo_code.*, registerform.full_name');
		// 	$this->db->from(self::TABLE);
		// 	// tabel name, joining condition, left/right/inner/selt. for inner no need to write
		// 	$this->db->join('archives_cat_manage', 'archives_cat_manage.id = archives_sub_cat.cat_id', 'left	');
		// 	$this->db->order_by("id", "asc");
		// 	$query = $this->db->get();
		// 	return $query->result();
		// }
		
		public function findAllDetails2($table, $where)
		 {
            $list				    = $this->findById($table, $where);
        	echo $merchant_id		= $list->merchant_id;
      
        	$where = array('id' => $merchant_id);
            $merchant_details	= $this->M_crud->findById('registerform', $where);
           
            return $list;
        }


		public function findAllLimit($table, $where, $orderBy, $serialized, $limit)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($where);
			$this->db->order_by($orderBy, $serialized);
			$this->db->limit($limit, 0);
			$query = $this->db->get();
			return $query->result();
		}

		public function findAllLimitGroupBy($table, $where, $orderBy, $serialized, $limit, $groupBy)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($where);
			$this->db->order_by($orderBy, $serialized);
			$this->db->group_by($groupBy);
			$this->db->limit($limit, 0);
			$query = $this->db->get();
			return $query->result();
		}


		public function findABasicInfo($table, $orderBy)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->order_by($orderBy, 'desc');
			$this->db->limit(1, 0);
			$query = $this->db->get();
			return $query->row();
		}

		public function findById($table,$where)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($where);
			$query = $this->db->get();
			return $query->row();
		}


		public function findMax($table,$where, $fieldName)
		{
			$this->db->select_max($fieldName);
			$this->db->where($where);
			$result = $this->db->get($table);
			return $result->row();
		}


		public function findAllForPagination($table, $where, $orderBy, $serialized, $onset, $limit)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($where);
			$this->db->order_by($orderBy, $serialized);
			$this->db->limit($limit, $onset);
			$query = $this->db->get();
			return $query->result();
		}


		public function countAllList($table, $where)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($where);
			return $this->db->count_all_results();
		}


		public function findLastInsert($table, $where)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($where);
			return $this->db->insert_id();
		}

		public function findTotal($table, $where)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($where);
			$query = $this->db->get();
			return $query->num_rows();
		}


		public function findAllGroupBy($table, $where, $groupBy, $orderBy, $serialized)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($where);
			$this->db->group_by($groupBy);
			$this->db->order_by($orderBy, $serialized);
			$query = $this->db->get();
			return $query->result();
		}

		public function findByOnlyfromToDate($table, $fromDate, $toDate)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where('payment_date <=', $toDate);
			$this->db->where('payment_date >=', $fromDate);
			$this->db->order_by('invoice_no', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function findByfromToDate($table, $merchant_id, $fromDate, $toDate)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where('merchant_id', $merchant_id);
			$this->db->where('booking_date <=', $toDate);
			$this->db->where('booking_date >=', $fromDate);
			$this->db->order_by('tracking_id', 'desc');
			$query = $this->db->get();
			return $query->result();
		}
		
		public function findDetailsForfromToDate($table, $merchant_id, $fromDate, $toDate)
		 {
		 	$table = $table;
		 	$fromDate = $fromDate;
		 	$toDate = $toDate;
		 	$merchant_id = $merchant_id;
            $list				    = $this->findByfromToDate($table, $merchant_id, $fromDate, $toDate);
            foreach($list as $model)
            {               
                // for payment Details
            	$booking_id		= $model->id;
            	$where = array('booking_id' => $booking_id);
                $payment_details	= $this->M_crud->findById('payment_status', $where);
                $model->payment_details = $payment_details;
            }
            return $list;
        }

		public function calCulateSum($table, $where, $sumField)
		  {
		   $this->db->select_sum($sumField);
		   $this->db->from($table);
		   $this->db->where($where);
		   $query = $this->db->get();
		   return $query->row()->$sumField;
		  }



		public function findAllCheckedCashWhereIn($idList)
		{
			$this->db->select('*');
			$this->db->from('booking');
			$this->db->where_in('booking.id', $idList);
			$this->db->order_by('id', 'asc');
			$query = $this->db->get();
			return $query->result();
		}

		public function findAllCheckedCash($idList)
		 {
		 	$idList = $idList;		 	
            $list				    = $this->findAllCheckedCashWhereIn($idList);
            foreach($list as $model)
            {               
                // for payment Details
            	$booking_id		= $model->id;
            	$where = array('booking_id' => $booking_id);
                $payment_details	= $this->M_crud->findById('payment_status', $where);
                $model->payment_details = $payment_details;
            }
            return $list;
        }

        public function findAllCheckedCash2($table, $where)
		 {
		 	$table = $table;		 	
		 	$where = $where;		 	
            $list				    = $this->findById($table, $where);
            foreach($list as $model)
            {               
                // for payment Details
            	$booking_id		= $model->id;
            	$where = array('booking_id' => $booking_id);
                $payment_details	= $this->M_crud->findById('payment_status', $where);
                $model->payment_details = $payment_details;
            }
            return $list;
        }

		public function update($table,$data, $id)
		{
			$this->db->update($table, $data, array('id' => $id));
		}

		public function destroy($table,$id)
		{
			$this->db->delete($table, array('id' => $id));
		}
	}
?>
