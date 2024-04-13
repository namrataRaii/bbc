<?php
// class PaginationModel extends CI_Model
// {

//     public function get_items($limit, $offset, $table)
//     {

//         $this->db->select('*');
//         $this->db->from($table);
//         $this->db->where('status', 'Published');
//         $this->db->order_by('id', 'desc'); // Add order_by here
//         $this->db->limit($limit, $offset);
//         $query = $this->db->get();
//         return $query->result();
//     }
//     public function count_items($table)
//     {

//         $this->db->from($table);
//         $this->db->where('status', 'Published');
//         $this->db->order_by('id', 'desc'); // Add order_by here
//         return $this->db->count_all_results();
//     }

// }
