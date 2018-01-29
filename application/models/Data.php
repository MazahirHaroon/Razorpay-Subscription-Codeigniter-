<?PHP

class Data extends CI_Model {

    function __construct () {
        parent::__construct ();
    }
  // Customer Table ------------------------------
    function create_Customer ($cust) {
      $data = array(
          'cust_rp_id' => $cust['cust_rp_id'],
          'cust_name' => $cust['name'],
          'cust_email' => $cust['email'],
          'cust_sub_id' => '',
          'cust_plan_id' => $cust['plan_id']
      );
      $this->db->insert('customer', $data);
    }
      // Updating Customer Table with Sub_id------------------------------
    function update_sub_Customer ($cust) {
      $data = array(
           'cust_sub_id' => $cust['sub_id']
        );
      $this->db->where('cust_rp_id', $cust['cust_rp_id']);
      $this->db->update('customer', $data); 
    }
}
  