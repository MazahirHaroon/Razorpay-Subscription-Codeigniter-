<?PHP

class Notice extends CI_Model
{
    function __construct ()
	{
        // Call the Model constructor
        parent::__construct ();
		$this->load->library ('email');
    }

	function sendEmail($emailData)
	{
		$config['protocol'] = 'sendmail';
        $config['mailtype'] = 'html';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

		$this->email->initialize ($config);

	$this->email->initialize ($config);
  // log_message('info',print_r($emailData,TRUE));

		$this->email->set_newline("\r\n");
		$this->email->from($emailData['from']);
		$this->email->to($emailData['to']);
		$this->email->subject($emailData['subject']);
		$this->email->message($emailData['message']);
    $this->email->send();
    // log_message('info','$temp '.$temp);

		if ($this->email->send())
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}

?>
