<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prs_reklame_m extends CI_Model {

    public function get($id=null)
      {
        $this->db->select('prs_reklame.*, wp.*, pws_reklame.*, tipe_wp.*');
        $this->db->from('prs_reklame');
        $this->db->join('pws_reklame', 'prs_reklame.no_pws = pws_reklame.no_pws');
        $this->db->join('wp', 'prs_reklame.npwpd = wp.npwpd');
        $this->db->join('tipe_wp', 'prs_reklame.tipe_id = tipe_wp.tipe_id');
        if($id != null){
            $this->db->where('prs_reklame.no_pws', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_id($id=null)
    {
        $this->db->select('prs_reklame.*, wp.*, pws_reklame.*, tipe_wp.*');
        $this->db->from('prs_reklame');
        $this->db->join('pws_reklame', 'prs_reklame.no_pws = pws_reklame.no_pws');
        $this->db->join('wp', 'prs_reklame.npwpd = wp.npwpd');
        $this->db->join('tipe_wp', 'prs_reklame.tipe_id = tipe_wp.tipe_id');
        if($id != null){
            $this->db->where('prs_reklame.id_htl', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        for ($h=1;$h<=6;$h++)
        {
            $vars=$post['osptpd'.$h];
            $varp=$post['oprs'.$h];
            $periode=$post['periode'.$h];
            $pajak=$post['pajak'];
            $okur=$vars-$varp;
            $pkur=($okur*$pajak)/100;
            $total=$pkur+$denda;
            $skrg=date_create();
            $prks=date_create($periode);
            $per=date_diff($skrg,$prks);
            $beda=$per->m;
            $denda=$beda*(2/100)*$pkur;
            $params = [
                'no_pws' => $post['no_pws'],
                'npwpd' => $post['npwpd'],
                'tipe_id' => $post['tipe_id'],
                'periode' => $periode,
                'omset_sptpd' => $vars,
                'omset_periksa' => $varp,
                'omset_kurang' => $okur,
                'pajak_kurang' => $pkur,
                'denda' => $denda,
                'total' => $total,
                'dibuat' => date('Y-m-d')
            ];
            $this->db->insert('prs_reklame', $params);
        }
    }

    public function edit($post)
    {
        $periode=$post['periode'];
        $vars=$post['omset_sptpd'];
        $varp=$post['omset_periksa'];
        $pajak=$post['pajak'];
        $okur=$vars-$varp;
        $pkur=$okur*($pajak/100);
        $skrg=date_create();
        $prks=date_create($periode);
        $per=date_diff($skrg,$prks);
        $beda=$per->m;
        $denda=$beda*(2/100)*$pkur;
        $total=$pkur+$denda;
        $params = [
            'periode' => $periode,
            'omset_sptpd' => $vars,
            'omset_periksa' => $varp,
            'omset_kurang' => $okur,
            'pajak_kurang' => $pkur,
            'denda' => $denda,
            'total' => $total,
            'dibuat' => date('Y-m-d')
        ];
        $this->db->where('id_htl', $post['id_htl']);
        $this->db->update('prs_reklame', $params);
    }

    public function del($id)
	{
		$this->db->where('no_pws', $id);
		$this->db->delete('prs_reklame');
	}

    public function cetak($awal,$akhir)
    {
        $this->db->select('prs_reklame.*, wp.*, pws_reklame.*, tipe_wp.*');
        $this->db->from('prs_reklame');
        $this->db->join('pws_reklame', 'prs_reklame.no_pws = pws_reklame.no_pws');
        $this->db->join('wp', 'prs_reklame.npwpd = wp.npwpd');
        $this->db->join('tipe_wp', 'prs_reklame.tipe_id = tipe_wp.tipe_id');
        if($awal&&$akhir != null)
        {
            $this->db->where('tgl_pws BETWEEN "'. date('Y-m-d', strtotime($awal)). '" and "'. date('Y-m-d', strtotime($akhir)).'"');
        }
        $query = $this->db->get();
        return $query;
    }
}