<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_penilaian_kinerja extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		if ($this->session->userdata('level_user') != 'Asman')
		{
			redirect('auth/users');
		}
		$this->load->model('nilai_pegawai_model','nilai_pegawai');
	}

	public function index($tahun = NULL)
	{
		$data = $this->nilai_pegawai->detail_nilai_pegawai($tahun);
		$total = $this->nilai_pegawai->num_row_nilai_pegawai($tahun); // banyaknya num rows berdasarkan tahun
		// echo json_encode($data);
		// echo count($data);

		$hasil = 0;
		for($i=1; $i<=$total; $i++)
		{
			foreach ($data as $r) 
			{
				if($r->id_nilai_pegawai == $i)
				{
					$evaluasi = $r->bobot * $r->bobot_nilai;
					$hasil += $evaluasi;
				}
			}
			if($hasil !=0 )
			{	
			echo $hasil;
			echo '<br>';
			}
			$hasil = 0; // reset hasil
		}
		
		// foreach($data as $r)
		// {
		// 	$evaluasi[] = $r; 
		// }
			
		// echo "<pre>";
		// print_r($evaluasi);
	}
}

/* End of file Hasil_penilaian_kinerja.php */
/* Location: ./application/modules/asman/controllers/Hasil_penilaian_kinerja.php */