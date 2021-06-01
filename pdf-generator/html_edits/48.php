<?php
$html_file = 'temp.html';
$html = file_get_contents($html_file);
$html = str_replace('&amp;amp;','&',$html);
$html = str_replace('&amp;#039;',"'",$html);
$html = str_replace('reasons: </span></p>','reasons: </span></p>
<p style="margin-top: 0; margin-bottom: 0;"><span style="font-family: \'Arial\'; font-size: 9.5pt;">&nbsp;&nbsp;&nbsp;&nbsp;•	The premium is fixed for the term of the plan and will not increase unless the cover is increased.</span></p>
<p style="margin-top: 0; margin-bottom: 0;"><span style="font-family: \'Arial\'; font-size: 9.5pt;">&nbsp;&nbsp;&nbsp;&nbsp;•	Quality of Service</span></p>
<p style="margin-top: 0; margin-bottom: 0;"><span style="font-family: \'Arial\'; font-size: 9.5pt;">&nbsp;&nbsp;&nbsp;&nbsp;•	Payment of claims history</span></p>
<p style="margin-top: 0; margin-bottom: 0;"><span style="font-family: \'Arial\'; font-size: 9.5pt;">&nbsp;&nbsp;&nbsp;&nbsp;•	Guaranteed Insurability Option(Convertible Term)</span></p>
<p style="margin-top: 0; margin-bottom: 0;"><span style="font-family: \'Arial\'; font-size: 9.5pt;">&nbsp;&nbsp;&nbsp;&nbsp;•	The conversion option allows you to convert to another policy without the requirement for any further medical evidence prior to the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end of the term.</span></p>
<p style="margin-top: 0; margin-bottom: 0;"><span style="font-family: \'Arial\'; font-size: 9.5pt;">&nbsp;&nbsp;&nbsp;&nbsp;•	Price Pledge available</span></p>
<p style="margin-top: 0; margin-bottom: 0;"><span style="font-family: \'Arial\'; font-size: 9.5pt;">&nbsp;&nbsp;&nbsp;&nbsp;•	Additional Free Benefit – Medical 2nd Opinion - Best Doctors®:</span></p>
',$html);
$html = str_replace('center; margin-bottom: 0pt;"','center; margin-top: 0pt; margin-bottom: 0pt;"',$html);
$html = str_replace('style="margin-bottom: 0pt;"','style="margin-top: 0pt; margin-bottom: 0pt;"',$html);
$html = str_replace('justify; margin-bottom: 0pt;"','justify; margin-top: 0pt; margin-bottom: 0pt;"',$html);
$html = str_replace('<p>&nbsp;</p>', '', $html);
$html = str_replace('Signature:</span></p>', 'Signature:</span></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', $html);
$html = str_replace('applicable)</span></p>', 'applicable)</span></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', $html);
$html = str_replace('</body>', '<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p style="text-align: center; margin-top: 0; margin-bottom: 0;"><span style="font-family: \'Arial\'; font-size: 8pt;">Walfrid Private, 1 Parkway House, Western Parkway Business Park, Ballymount, Dublin 12.</span></p>
<p style="text-align: center; margin-top: 0; margin-bottom: 0;"><span style="font-family: \'Arial\'; font-size: 8pt;">Tel: 01 458 4327   Email: info@walfridprivate.ie</span></p>
<p style="text-align: center; margin-top: 0; margin-bottom: 0;"><span style="font-family: \'Arial\'; font-size: 8pt;">&nbsp;&nbsp;&nbsp;&nbsp;Directors: Richard Collins, Edward Collins. Company Registration 502574 Walfrid Private is regulated by the Central Bank of Ireland</span></p>
<p>&nbsp;</p>
<table><tr></tr></table></body>', $html);
file_put_contents($html_file,$html);
?>