<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        if($this->session->userdata('status') != "login_user"){
            redirect(base_url("home/login"));
        }else{
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Image('assets/img/bg-img/gedung.png',69,5,25,25,);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(270,7,'Daftar reservasi',0,1,'C');
        $pdf->Cell(270,7,'Gedung Balai Sarita',0,1,'C');

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(270,7,'Jl.A.H Nasution No.1005 Kelurahan Caibiru - Ujungkulon',0,1,'C');

        $pdf->SetFont('Arial','B',12);
        // $pdf->Cell(190,7,'Laporan Transaksi Zakat',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,5,'',0,1,);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(40,6,'Nama',1,0,'C');
        $pdf->Cell(50,6,'Email',1,0,'C');
        $pdf->Cell(40,6,'Telepon',1,0,'C');
        $pdf->Cell(40,6,'Jenis Gedung',1,0,'C');
        $pdf->Cell(30,6,'Waktu Sewa',1,0,'C');
        $pdf->Cell(30,6,'Lama Sewa',1,0,'C');
        $pdf->Cell(37,6,'Keterangan',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $booking = $this->db->get('reservasi')->result();
        $no=1;
        foreach ($booking as $row){
            $pdf->Cell(10,6,$no,1,0,'C');
            $pdf->Cell(40,6,$row->nama,1,0);
            $pdf->Cell(50,6,$row->email,1,0);
            $pdf->Cell(40,6,$row->telp,1,0);
            $pdf->Cell(40,6,$row->jenisgedung,1,0);
            $pdf->Cell(30,6,$row->waktusewa,1,0); 
            $pdf->Cell(30,6,$row->lamasewa,1,0);
            $pdf->Cell(37,6,$row->message,1,1);
            $no++;
        }
        $pdf->Output();
    }
  }
}