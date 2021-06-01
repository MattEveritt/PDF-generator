/**** Matt html to pdf with dompdf and download start****/
$templateProcessor->saveAs('temp.docx');

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;
use Dompdf\Dompdf;

//Converting temp.docx to temp.html
$phpWord = \PhpOffice\PhpWord\IOFactory::load('temp.docx');
$htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
$htmlWriter->save('temp.html');

//Automatic editing temp.html styling and content before pdf conversion
include "html_edits/$product_id.php";

//Converting temp.html to protection.pdf
Settings::setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);
Settings::setPdfRendererPath('.');

$phpWord = IOFactory::load('temp.html', 'HTML');
$phpWord->save('temp.pdf', 'PDF');

$title = get_field( "template_name" );
$title = str_replace('.docx','.pdf', $title);
header('Content-Type: application/pdf');
header("Content-disposition: attachment;filename= $title");
readfile('temp.pdf');
/**** Matt html to pdf with dompdf and download end****/







/**** Matt html to pdf with tcpdf and download start****
$templateProcessor->saveAs('temp.docx');

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;

$phpWord = \PhpOffice\PhpWord\IOFactory::load('temp.docx');
$htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
$htmlWriter->save('temp.html');

// Set PDF renderer.
// Make sure you have `tecnickcom/tcpdf` in your composer dependencies.
Settings::setPdfRendererName(Settings::PDF_RENDERER_TCPDF);
// Path to directory with tcpdf.php file.
// Rigth now `TCPDF` writer is depreacted. Consider to use `DomPDF` or `MPDF` instead.
Settings::setPdfRendererPath('vendor/tecnickcom/tcpdf');

$phpWord = IOFactory::load('temp.html', 'HTML');
$phpWord->save('protection.pdf', 'PDF');

header('Content-Type: application/pdf');
header('Content-disposition: attachment;filename=protection.pdf');
readfile('protection.pdf');
**** Matt html to pdf with tcpdf and download end****/




/**** Matt docx to pdf and download start****
Settings::setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);
Settings::setPdfRendererPath('.');

$templateProcessor->saveAs('temp.docx');
$temp = \PhpOffice\PhpWord\IOFactory::load('temp.docx');
$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($temp , 'PDF');
$xmlWriter->save('protection.pdf', TRUE);
header('Content-Type: application/pdf');
header('Content-disposition: attachment;filename=protection.pdf');
readfile('protection.pdf');
**** Matt docx to pdf and download end****/





/**** Matt docx to pdf with gears and download start****
$templateProcessor->saveAs('temp.docx');
$document = new Gears\Pdf('temp.docx');
$document->converter = function()
{
	return new Gears\Pdf\Docx\Converter\Unoconv();
};
$document->saveAs('temp.pdf');
header('Content-Type: application/pdf');
header('Content-disposition: attachment;filename=protection.pdf');
readfile('temp.pdf');
**** Matt docx to pdf with gears and download end****/





/**** Matt docx to pdf with dompdf and download ****

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;
use Dompdf\Dompdf;

//$templateProcessor = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
$templateProcessor->saveAs('temp.docx');

//$templateProcessor->saveAs('temp.html');
// Make sure you have `dompdf/dompdf` in your composer dependencies.
Settings::setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);
// Any writable directory here. It will be ignored.
Settings::setPdfRendererPath('.');

$phpWord = IOFactory::load('temp.docx', 'Word2007');
$phpWord->save('protection.pdf', 'PDF');

header('Content-Type: application/pdf');
header('Content-disposition: attachment;filename=protection.pdf');
readfile('protection.pdf');

**** Matt docx to pdf with dompdf and download end ****/





/**** Matt docx to pdf with tcpdf library and download start ****
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;

//$templateProcessor = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
$templateProcessor->saveAs('temp.docx');

// Set PDF renderer.
// Make sure you have `tecnickcom/tcpdf` in your composer dependencies.
Settings::setPdfRendererName(Settings::PDF_RENDERER_TCPDF);
// Path to directory with tcpdf.php file.
// Rigth now `TCPDF` writer is depreacted. Consider to use `DomPDF` or `MPDF` instead.
Settings::setPdfRendererPath('vendor/tecnickcom/tcpdf');

$phpWord = IOFactory::load('temp.docx', 'Word2007');
$phpWord->save('protection.pdf', 'PDF');

header('Content-Type: application/pdf');
header('Content-disposition: attachment;filename=protection.pdf');
readfile('protection.pdf');
**** Matt docx to pdf with tcpdf library and download end ****/