<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jqgrid extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('dosen_jqgrid_model');
		$this->load->database();
	}

	function index()
	{
    		$this->load->view('jqgrid/home');
	}
 
	function tampil_data(){
		$hal = isset($_POST['page'])?$_POST['page']:1; 
		$batas = isset($_POST['rows'])?$_POST['rows']:10;
		$sidx = isset($_POST['sidx'])?$_POST['sidx']:'nama_dosen';
	 
		if(!$sidx) $sidx =1;
		$q = $this->dosen_jqgrid_model->tampil_dosen_semua();
	 
		$hitung = count($q);
	 
		if( $hitung > 0 ) {
		    $total_hal = ceil($hitung/$batas);
		} else {
		    $total_hal = 0;
		}
	 
		if ($hal > $total_hal) $hal=$total_hal;
	 
		$start = $batas*$hal - $batas;
		$start = ($start<0)?0:$start;
	 
		$data->page = $hal;
		$data->total = $total_hal;
		$data->records = $hitung;
		$i=0;
		foreach($q->result() as $row) {
		    $data->rows[$i]['id']=$row->kode_dosen;
		    $data->rows[$i]['cell']=array($i+1,$row->kode_dosen,$row->NIDN,$row->nama_dosen);
		    $i++;
		}
		echo json_encode($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
