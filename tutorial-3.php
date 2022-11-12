<?php
include "vendor/autoload.php";

use Fpdf\Fpdf;

class PDF extends Fpdf
{
    function __construct()
    {
        parent::__construct('L');
    }

    function Header()
    {
        global $title;

        // Arial bold 15
        $this->SetFont('Arial','B', 15);
        // Calculate width of title and position
        $w = $this->GetStringWidth($title)+6;
        $this->SetX((210-$w)/2);
        // Colors of frame, background and text
        $this->SetDrawColor(102, 7, 8);
        $this->SetFillColor(211, 211, 211);
        $this->SetTextColor(102, 7, 8);
        // Thickness of frame (1 mm)
        $this->SetLineWidth(0.2);
        // Title
        $this->Cell($w,9,$title,1,1,'C',true);
        // Line break
        $this->Ln(10);
    }

    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Text color in gray
        $this->SetTextColor(128);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    }

    function ChapterTitle($num, $label)
    {
        // Arial 12
        $this->SetFont('Arial','', 16);
        // Background color
        $this->SetFillColor(177, 167, 166);
        // Title
        $this->Cell(0,6,"Chapter $num: $label",0,1,'L',true);
        // Line break
        $this->Ln(4);
    }

    function ChapterBody($file)
    {
        // Read text file
        $txt = file_get_contents($file);
        // Times 12
        $this->SetFont('Times','',12);
        // Output justified text
        $this->MultiCell(0,5,$txt);
        // Line break
        $this->Ln();
        // Mention in italics
        $this->SetFont('','I');
        $this->Cell(0,5,'(end of excerpt)');
    }

    function PrintChapter($num, $title, $file)
    {
        $this->AddPage();
        $this->ChapterTitle($num,$title);
        $this->ChapterBody($file);
    }
}

$pdf = new PDF();
$title = 'HARRY POTTER';
$pdf->SetTitle($title);
$pdf->SetAuthor('J.K. Rowling');
$pdf->PrintChapter(1,'Harry Potter 1 - Sorcerers Stone','chapter-1.txt');
$pdf->PrintChapter(2,'Harry Potter 2 - Chamber of Secrets','chapter-2.txt');
$pdf->PrintChapter(3,'Harry Potter 3 - The Prisoner of Azkaban','chapter-3.txt');
$pdf->PrintChapter(4,'Harry Potter 4 - The Goblet of Fire','chapter-4.txt');
$pdf->PrintChapter(5,'Harry Potter 5 - Order of the Phoenix','chapter-5.txt');
$pdf->PrintChapter(6,'Harry Potter 6 - The Half Blood Prince','chapter-6.txt');
$pdf->PrintChapter(7,'Harry Potter 7 - Deathly Hollows','chapter-7.txt');
$pdf->Output();