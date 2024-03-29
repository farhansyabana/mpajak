<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prs_reklame extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        belum_login();
        cek_level();
        $this->load->model(['wp_m','prs_reklame_m','tipe_wp_m','pws_reklame_m']);
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = "Reklame";
		$post=$this->input->post(null, TRUE);
		$awal = $this->input->post('tgl_awal');
		$akhir = $this->input->post('tgl_akhir');	
		if(isset($_POST['cetak'])){
			$data['row'] = $this->prs_reklame_m->cetak($awal,$akhir)->result();
			$data['awal'] = $awal;
			$data['akhir'] = $akhir;
			$html = $this->load->view('pemeriksaan/reklame/rekap_raklame', $data, TRUE);
			$this->fungsi->PdfGenerator($html,'Rekap Pemeriksaan Raklame','A4','landscape');
		}
		$data['row'] = $this->pws_reklame_m->get_sudah();
		$this->template->load('template','pemeriksaan/reklame/prs_raklame_data', $data);
    }

	public function laporan()
	{
		$data['title'] = "Reklame";
		$post=$this->input->post(null, TRUE);
		$awal = $this->input->post('tgl_awal');
		$akhir = $this->input->post('tgl_akhir');	
		if(isset($_POST['cetak'])){
			$data['row'] = $this->prs_reklame_m->cetak($awal,$akhir)->result();
			$data['awal'] = $awal;
			$data['akhir'] = $akhir;
			$html = $this->load->view('pemeriksaan/reklame/rekap_reklame', $data, TRUE);
			$this->fungsi->PdfGenerator($html,'Rekap Pemeriksaan reklame','A4','landscape');
		}
		$data['row'] = $this->pws_reklame_m->get_sudah();
		$this->template->load('template','pemeriksaan/reklame/laporanReklame', $data);
    }

	public function add()
	{	

		$post=$this->input->post(null, TRUE);
		$pws = $this->pws_reklame_m->get_belum()->result();

		
		$data = array(
			'pws' 	 => $pws,
		);

		$this->template->load('template','pemeriksaan/hiburan/prs_hiburan_add', $data);

		if(isset($_POST['submit'])){
			$this->prs_reklame_m->add($post);
			$this->pws_reklame_m->up_jumlah($post);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('success','Data Berhasil Disimpan');
			}
			redirect('prs_hiburan');
		}
	}

	public function cek($id)
	{		
		$prs2 = $this->prs_reklame_m->get($id)->row();
		$prs = $this->prs_reklame_m->get($id)->result();

		$data = array(
			'prs' 	 => $prs,
			'prs2'	 => $prs2
		);
		$this->template->load('template','pemeriksaan/reklame/data_raklame', $data);
	}

	public function edit($id)
	{
		$post=$this->input->post(null, TRUE);
		$prs = $this->prs_reklame_m->get_id($id)->row();

		$data = array(
			'prs' 	 => $prs,
		);
		$this->template->load('template','pemeriksaan/hiburan/prs_hiburan_edit', $data);

		if(isset($_POST['submit'])){
			$this->prs_reklame_m->edit($post);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('success','Data Berhasil Diubah');
			}
			redirect('prs_hiburan/cek/'.$prs->no_pws);
		}
	}

	public function del($id)
	{
		$this->prs_reklame_m->del($id);
		$this->pws_reklame_m->del_jumlah($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success','Data Berhasil Dihapus');
		}
		redirect('prs_hiburan');
	}

	function hasil($id){
		
		$data['row'] = $this->prs_reklame_m->get($id);
		$html = $this->load->view('pemeriksaan/hiburan/hasil_hiburan', $data, TRUE);
		$this->fungsi->PdfGenerator($html,'pemeriksaan.hiburan-'.$id,'A4','landscape');
	}
}