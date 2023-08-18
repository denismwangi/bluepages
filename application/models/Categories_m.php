<?php
class Categories_m extends CI_Model{

   function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function create($data)
    {
    	$this->db->insert('categories', $data);
        return $this->db->insert_id();

    }

    function find($id)
    {
        return $this->db->where(array('id' => $id))->get('categories')->row();
     }

     function exists($id)
    {
          return $this->db->where( array('id' => $id))->count_all_results('categories') >0;
    }


    function count()
    {
        
        return $this->db->count_all_results('categories');
    }

    function update_attributes($id, $data)
    {
         return  $this->db->where('id', $id) ->update('categories', $data);
    }

    function delete($id)
    {
        return $this->db->delete('categories', array('id' => $id));
    }

    function get_all()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('categories')->result();

    }

    function paginate_all($limit, $page)
    {
        $offset = $limit * ( $page - 1) ;
        
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('categories', $limit, $offset);

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
