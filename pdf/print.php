<?php 
				define('FPDF_FONTPATH','font/');
				require('html_table.php');
				$pdf=new PDF();
				$pdf->AddPage('P');
				$pdf->SetFont('Arial','',9);		
		
				$current_y = $pdf->GetY();
				$current_x = $pdf->GetX();

				$cell_width = 45;
				$pdf->MultiCell($cell_width, 5, "BASIL ASSOCIATES, TAX PRACTITIONER, CITY ESTATE, M C ROAD, PERUMBABOOVR", 0, Alignment.LEFT, false);
				$pdf->SetXY($current_x + 400, $current_y);
				
				$cell_width = 100;
				$current_x = $pdf->GetX();
				//$pdf->MultiCell($cell_width,5, "PRO/REF", 1, Alignment.LEFT, false);
				//$pdf->Image('logo1.png',150,10,30,25);
				$pdf->SetXY($current_x + $cell_width, $current_y);
				$pdf->Ln(30);
				
				$cell_width = 50;
				$current_x = $pdf->GetX();
				$pdf->SetXY(100,50);
				//$pdf->SetFillColor(10, 50, 100);
				$pdf->MultiCell($cell_width,5, "INVOICE",1, Alignment.RIGHT, false);
				$pdf->SetXY($current_x + $cell_width, $current_y);


				//------------------------
				$pdf->Ln(30);
				$html .= '<table border="1" width="80%" align="center">
								<tr><td height="10" colspan="9"></td></tr>
								<tr>
									<td bgcolor="#CCCCCC" width="800" height="50" colspan="9"><b>Bill Details: '.$name.'</b></td>
								</tr>';
					$html .= '<tr>
									<td bgcolor="#FFFFFF" width="40" height="30"><b>#</b></td>
									<td bgcolor="#FFFFFF" width="110" height="30"><b>Entered Date</b></td>
									<td bgcolor="#FFFFFF" align="center" width="120" height="30"><b>Est. Uploaded</b></td>
									<td bgcolor="#FFFFFF" align="center" width="80" height="30"><b>Job No</b></td>
									<td bgcolor="#FFFFFF" align="center" width="170" height="30"><b>Customer</b></td>
									<td bgcolor="#FFFFFF" align="center" width="230" height="30"><b>Address</b></td>
									
								</tr>

								<tr>
									<td bgcolor="#FFFFFF" width="40" height="30"><b>#</b></td>
									<td bgcolor="#FFFFFF" width="110" height="30"><b>Entered Date</b></td>
									<td bgcolor="#FFFFFF" align="center" width="120" height="30"><b>Est. Uploaded</b></td>
									<td bgcolor="#FFFFFF" align="center" width="80" height="30"><b>Job No</b></td>
									<td bgcolor="#FFFFFF" align="center" width="170" height="30"><b>Customer</b></td>
									<td bgcolor="#FFFFFF" align="center" width="230" height="30"><b>Address</b></td>
									
								</tr>

								</table>';
				echo $html;
				exit;					
				$pdf->WriteHTML($html);
				$filename = time();
				unlink("pdf.pdf");
				$pdf->Output("".$filename.".pdf","F");	
				header("Location:".$filename.".pdf");			
				exit;

?>