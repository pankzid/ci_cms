<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migrate extends Admin_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->library('migration');

    if ( ! $this->migration->current())
    {
      show_error($this->migration->error_string());
    }
    else
    {
      echo "Table pages created successfully!";
    }
  }

}

/* End of file migrate.php */
/* Location: ./application/controllers/migrate.php */

