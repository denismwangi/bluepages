<?php
class Users_m extends CI_Model{

   function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }



    public function create($data)
    {
    	$this->db->insert('users', $data);
        return $this->db->insert_id();

    }

    function find($id)
    {
        return $this->db->where(array('id' => $id))->get('users')->row();
     }

     function exists($id)
    {
          return $this->db->where( array('id' => $id))->count_all_results('users') >0;
    }

    function user_data($data)
    {
       

        return $this->db->where(array('email' => $data))->get('users')->row();

		 
    }


    function count()
    {
        
        return $this->db->count_all_results('users');
    }

    function update_attributes($id, $data)
    {
         return  $this->db->where('id', $id) ->update('users', $data);
    }

    function delete($id)
    {
        return $this->db->delete('users', array('id' => $id));
    }

    function paginate_all($limit, $page)
    {
        $offset = $limit * ( $page - 1) ;
        
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('users', $limit, $offset);

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

