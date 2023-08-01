<?php
class Forum_m extends CI_Model{


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	 public function create($data)
    {
    	$this->db->insert('forum', $data);
        return $this->db->insert_id();

    }

    function find($id)
    {
        return $this->db->where(array('id' => $id))->get('forum')->row();
     }

     function exists($id)
    {
          return $this->db->where( array('id' => $id))->count_all_results('forum') >0;
    }


    function count()
    {
        
        return $this->db->count_all_results('forum');
    }

    function update_attributes($id, $data)
    {
         return  $this->db->where('id', $id) ->update('forum', $data);
    }

    function delete($id)
    {
        return $this->db->delete('forum', array('id' => $id));
    }



    function discussions($month,$year)
    {
		 $this->db->order_by('created_on', 'desc');
        return $this->db->where(array('month' => $month,'year'=>$year))->get('forum')->result();
    }


     function get_replies($id)
    {
		 $this->db->order_by('created_on', 'desc');
        return $this->db->where(array('discussion_id' => $id))->get('forum_replies')->result();
     }


    function replies_count($id)
    {
        return $this->db->where(array('discussion_id' => $id))->count_all_results('forum_replies');
     }


     function create_code($table,$data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    function count_where($field_name,$id,$table)
    {
            return $this->db->where($field_name, $id)->count_all_results($table);
    }

    function posted_response($id)
    {
            $this->db->order_by('created_on','desc');
			return $this->db->where('reply_id', $id)->get('reply_responses')->result();
    }
		
	function count_response($id)
    {
        return $this->db->where('reply_id', $id)->count_all_results('reply_responses');
    }

    function check_views($id,$user)
    {
        return $this->db->where(array('post_id' => $id, 'user_id'=>$user))->get('forum_views')->row();

    }

    function create_views($data)
    {
        $this->db->insert('forum_views', $data);
        return $this->db->insert_id();

    }

    function paginate_all($limit, $page)
    {
        $offset = $limit * ( $page - 1) ;
        
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('forum', $limit, $offset);

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

