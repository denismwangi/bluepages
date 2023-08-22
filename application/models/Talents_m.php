<?php
class Talents_m extends CI_Model{

   function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function create($data)
    {
    	$this->db->insert('talents', $data);
        return $this->db->insert_id();

    }

    function find($id)
    {
        return $this->db->where(array('id' => $id))->get('talents')->row();
     }

     function exists($id)
    {
          return $this->db->where( array('id' => $id))->count_all_results('talents') >0;
    }


    function count()
    {
        
        return $this->db->count_all_results('talents');
    }

    function update_attributes($id, $data)
    {
         return  $this->db->where('id', $id) ->update('talents', $data);
    }

    function delete($id)
    {
        return $this->db->delete('talents', array('id' => $id));
    }

    function get_all()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('talents')->result();

    }

    function paginate_all($limit, $page)
    {
        $offset = $limit * ( $page - 1) ;
        
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('talents', $limit, $offset);

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
