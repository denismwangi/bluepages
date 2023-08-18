<?php
class Subcategories_m extends CI_Model{

   function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function create($data)
    {
    	$this->db->insert('subcategories', $data);
        return $this->db->insert_id();

    }

    function find($id)
    {
        return $this->db->where(array('id' => $id))->get('subcategories')->row();
     }
     function find_all($id)
    {
        return $this->db->where(array('category' => $id))->get('subcategories')->result();
     }

     function exists($id)
    {
          return $this->db->where( array('id' => $id))->count_all_results('subcategories') >0;
    }


    function count()
    {
        
        return $this->db->count_all_results('subcategories');
    }

    function update_attributes($id, $data)
    {
         return  $this->db->where('id', $id) ->update('subcategories', $data);
    }

    function delete($id)
    {
        return $this->db->delete('subcategories', array('id' => $id));
    }

    function get_all()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('subcategories')->result();

    }

    function paginate_all($limit, $page)
    {
        $offset = $limit * ( $page - 1) ;
        
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('subcategories', $limit, $offset);

        $result = array();

        foreach ($query->result() as $row)
        {
            $result[] = $row;
        }

        if ($result)
        {
                return $result;
        }
        else
        {
                return FALSE;
        }
    }

}
