<?php


class Primary_model extends CI_Model {
    // ------- get row
	public function getRow($tb, $cond=0, $db='db') {
		if ($cond==0) {
			if($data=$this->$db->get($tb)->row()) {
				return $data;
			}
			else {
				return false;
			}
		}
		elseif(is_array($cond)) {
			if($data = $this->$db->get_where($tb, $cond)) {
				return $data->row();
			}
			else {
				return false;
			}
		}
		else {
			if($data=$this->$db->get_where($tb,array('id'=>$cond))) {
				return $data->row();
			}
			else {
				return false;
			}
		}
	}

	// ------- get id basedata
	public function getListData($tb, $cond=0, $db='db') {
		if ($cond==0) {
			if($data=$this->$db->get($tb)->result()) {
				return $data;
			}
			else {
				return false;
			}
		}
		elseif(is_array($cond)) {
			if($data = $this->$db->get_where($tb, $cond)) {
				return $data->result();
			}
			else {
				return false;
			}
		}
		else {
			if($data=$this->$db->get_where($tb,array('id'=>$cond))) {
				return $data->result();
			}
			else {
				return false;
			}
		}
	}

	// ------ get data
	function getData($tb, $data=0, $order=null, $order_by=null, $limit=null, $start=null, $db='db', $count=0) {
		if ($order!=null) {
			if ($order_by!=null) {
				$this->$db->order_by($order_by,$order);
			}
			else {
				$this->$db->order_by('id',$order);
			}
		}
		if ($limit!=null) {
			$this->$db->limit($limit, $start);
		}
		if ($data==0 or $data==null) {
			return $this->$db->get($tb)->result();
		}
		if($count==1) {
			return $this->$db->get_where($tb,$data)->num_rows();
		}
		return $this->$db->get_where($tb,$data)->result();
	}

}
?>