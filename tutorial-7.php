<?php
include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->AddFont('AppleGaramond-BoldItalic');
$pdf->AddFont('AppleGaramond-Italic');
$pdf->AddFont('AppleGaramond-LightItalic');

$pdf->AddPage();
$pdf->SetFont('AppleGaramond-Italic','',35);
$pdf->Write(10,'"Gon, You Are Light. But Sometimes You Shine So Brightly, I Must Look Away. Even So, Is It Still Okay If I Stay At Your Side?"');
$pdf->Ln(13);
$pdf->SetFont('AppleGaramond-Italic','',15);
$pdf->Write(10,'- Killua Zoldyck');
$pdf->Ln(35);

$pdf->SetFont('AppleGaramond-LightItalic','',35);
$pdf->Write(10,'"I Do Not Fear Death. I Fear Only That My Rage Will Fade Over Time."');
$pdf->Ln(13);
$pdf->SetFont('AppleGaramond-LightItalic','',15);
$pdf->Write(10,'- Kurapika Kurta');
$pdf->Ln(35);

$pdf->SetFont('AppleGaramond-BoldItalic','',35);
$pdf->Write(10,'"You Should Enjoy The Little Detours To The Fullest. Because Thats Where Youll Find Things More Important Than What You Want."');
$pdf->Ln(13);
$pdf->SetFont('AppleGaramond-BoldItalic','',15);
$pdf->Write(10,'- Ging Freecss');

$pdf->Output('D', 'tutorial-7.pdf');

// Run php vendor/fpdf/fpdf/src/Fpdf/makefont/makefont.php fonts/AppleGaramond-LightItalic.ttf
// Move the generated files to the font folder (vendor/fpdf/fpdf/src/Fpdf/font/)