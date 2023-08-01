<?php
class Countries_m extends CI_Model{

   function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }



    public function create($data)
    {
    	$this->db->insert('countries', $data);
        return $this->db->insert_id();

    }

    function find($id)
    {
        return $this->db->where(array('id' => $id))->get('countries')->row();
     }

     function exists($id)
    {
          return $this->db->where( array('id' => $id))->count_all_results('countries') >0;
    }


    function count()
    {
        
        return $this->db->count_all_results('countries');
    }

    function update_attributes($id, $data)
    {
         return  $this->db->where('id', $id) ->update('countries', $data);
    }

    function delete($id)
    {
        return $this->db->delete('countries', array('id' => $id));
    }

    function get_all()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('countries')->result();

    }

    function paginate_all($limit, $page)
    {
        $offset = $limit * ( $page - 1) ;
        
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('countries', $limit, $offset);

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
