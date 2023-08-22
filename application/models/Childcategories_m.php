<?php
class Childcategories_m extends CI_Model{

   function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function create($data)
    {
    	$this->db->insert('childcategories', $data);
        return $this->db->insert_id();

    }

    function find($id)
    {
        return $this->db->where(array('id' => $id))->get('childcategories')->row();
     }
     function find_all($id)
    {
        return $this->db->where(array('subcategory' => $id))->get('childcategories')->result();
     }

     function exists($id)
    {
          return $this->db->where( array('id' => $id))->count_all_results('childcategories') >0;
    }


    function count()
    {
        
        return $this->db->count_all_results('childcategories');
    }

    function update_attributes($id, $data)
    {
         return  $this->db->where('id', $id) ->update('childcategories', $data);
    }

    function delete($id)
    {
        return $this->db->delete('childcategories', array('id' => $id));
    }

    function get_all()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('childcategories')->result();

    }

    function paginate_all($limit, $page)
    {
        $offset = $limit * ( $page - 1) ;
        
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('childcategories', $limit, $offset);

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
