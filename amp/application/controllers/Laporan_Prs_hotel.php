<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Prs_hotel extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        belum_login();
        cek_level();
        $this->load->model(['wp_m','prs_hotel_m','tipe_wp_m','pws_hotel_m']);
		$this->load->library('form_validation');
	}

	public function index()
	{
		$post=$this->input->post(null, TRUE);
		$awal = $this->input->post('tgl_awal');
		$akhir = $this->input->post('tgl_akhir');	
		if(isset($_POST['cetak'])){
			$data['row'] = $this->prs_hotel_m->cetak($awal,$akhir)->result();
			$data['awal'] = $awal;
			$data['akhir'] = $akhir;
			$html = $this->load->view('laporan/hotel/rekap_hotel', $data, TRUE);
			$this->fungsi->PdfGenerator($html,'Rekap Pemeriksaan Hotel','A4','landscape');
		}
		$data['row'] = $this->pws_hotel_m->get_sudah();
		$this->template->load('template','laporan/hotel/l_prs_hotel_data', $data);
    }

	function cetak(){

		$post=$this->input->post(null, TRUE);

		if(isset($_POST['cetak'])){
			$data['row'] = $this->prs_hotel_m->cetak($awal,$akhir)->result();
			$data['awal'] = $awal;
			$data['akhir'] = $akhir;
			$html = $this->load->view('pemeriksaan/hotel/rekap_hotel', $data, TRUE);
			$this->fungsi->PdfGenerator($html,'Rekap Pemeriksaan Hotel','A4','landscape');
		}
	
		$html = $this->load->view('pemeriksaan/hotel/rekap_hotel', $data, TRUE);
		$this->fungsi->PdfGenerator($html,'Rekap Pemeriksaan Hotel','A4','landscape');
		
	}

}