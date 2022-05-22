<?php
function generateRow()
{
	$contents = '';
	include_once('../config.php');
	$sql = "SELECT * FROM studentdisplay";

	$query = mysqli_query($connection, $sql);
	while ($row = mysqli_fetch_assoc($query)) {
		$contents .= "
			<tr>
				<td>" . $row['id'] . "</td>
				<td>" . $row['firstname'] . "</td>
				<td>" . $row['secondname'] . "</td>
				<td>" . $row['lastname'] . "</td>
				<td>" . $row['phone'] . "</td>
				<td>" . $row['gender'] . "</td>
				<td>" . $row['dob'] . "</td>
				<td>" . $row['dept_name'] . "</td>
			</tr>
			";
	}

	return $contents;
}

require_once('../tcpdf/tcpdf.php');
$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle("List of Students");
$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont('helvetica');
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(TRUE, 10);
$pdf->SetFont('helvetica', '', 11);
$pdf->AddPage();
$content = '';
$content .= '
      	<h2 align="center">Generated PDF using TCPDF</h2>
      	<h4>List Of Students</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="4%">ID</th>
				<th width="15%">First Name</th>
				<th width="15%">Second Name</th>
				<th width="15%">Last Name</th> 
				<th width="15%">Phone</th>
				<th width="8%">Gender</th>
				<th width="15%">Date of Birth</th>
				<th width="15%">Department</th> 
           </tr>  
      ';
$content .= generateRow();
$content .= '</table>';
$pdf->writeHTML($content);
$pdf->Output('students.pdf', 'I');