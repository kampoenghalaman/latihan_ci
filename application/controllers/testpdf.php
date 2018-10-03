<?php
Class Testpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('p','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'LP3I KARAWANG',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR MAHASISWA IC-04',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'',0,0);
        $pdf->Cell(20,6,'NIS',1,0);
        $pdf->Cell(85,6,'NAMA',1,0);
        $pdf->Cell(27,6,'ALAMAT',1,0);
        $pdf->Cell(25,6,'SEMESTER',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('kelas')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(20,6,'',0,0);
            $pdf->Cell(20,6,$row->nis,1,0);
            $pdf->Cell(85,6,$row->nama,1,0);
            $pdf->Cell(27,6,$row->alamat,1,0);
            $pdf->Cell(25,6,$row->semester,1,1); 
        }
        $pdf->Output();
    }

    function latihanalign(){
       #buat halaman
        $pdf = new FPDF('p','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
       #header
       //Pilih font Arial bold 15
       $pdf->SetFont('Arial','B',15);
       //Geser ke kanan
       $pdf->Cell(70);
       //Judul dalam bingkai
       $pdf->Cell(60,10,'Test Membuat Align',1,0,'C');
       //Ganti baris
       $pdf->Ln(20);

       //teks sebelah kiri
       $pdf->SetFont('Arial','',15);
       $pdf->Cell(60,10,'Latihan pertama',1,1,'L');
       $pdf->Cell(60,10,'Membuat teks',1,1,'L');
       $pdf->Cell(60,10,'Disebelah Kiri Halaman',1,1,'L');
       $pdf->Cell(60,10,'Dengan Teks Rata Kiri',1,1,'L');
       $pdf->Ln(20);

       //teks tengah
       $pdf->SetFont('courier','',15);
       $pdf->Cell(60);
       $pdf->Cell(80,10,'Latihan pertama',1,1,'C');
       $pdf->Cell(60);
       $pdf->Cell(80,10,'Membuat teks',1,1,'C');
       $pdf->Cell(60);
       $pdf->Cell(80,10,'Disebelah Kiri Halaman',1,1,'C');
       $pdf->Cell(60);
       $pdf->Cell(80,10,'Dengan Teks Rata Kiri',1,1,'C');
       $pdf->Ln(20);

       //teks sebelah kanan
       $pdf->SetFont('Times','',15);
       $pdf->Cell(130);
       $pdf->Cell(60,10,'Latihan pertama',1,1,'C');
       $pdf->Cell(130);
       $pdf->Cell(60,10,'Membuat teks',1,1,'C');
       $pdf->Cell(130);
       $pdf->Cell(60,10,'Disebelah Kiri Halaman',1,1,'C');
       $pdf->Cell(130);
       $pdf->Cell(60,10,'Dengan Teks Rata Kiri',1,1,'C');
       $pdf->Ln(20);

       #footer
       //Geser posisi ke 1,5 cm dari bawah
       $pdf->SetY(265);
       //Pilih font Arial italic 8
       $pdf->SetFont('Arial','I',8);
       //Tampilkan nomor halaman rata tengah
       $pdf->Cell(0,10,'Page '.$pdf->PageNo(),0,0,'C');

       $pdf->Output();
    }
}