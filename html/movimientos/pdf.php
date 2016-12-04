<?php
$mov = $movimientos->getMovimiento( FOLIO-1 );
$emp = $movimientos->getEmpleadoSol( $mov->rpe_solicitante );
$d = $delegado->getDelegadosById( $mov->id_delegado );
$delegado = $movimientos->getEmpleadoSol( $d[0]->rpe_delegado );
$folio=$mov->no_folio;
$fechaactual= strtoupper($mov->fecha);
$nombre = $emp[0]->nombre;
$rpe = $emp[0]->rpe;
$categoria = $emp[0]->categoria;
$noplaza = $emp[0]->no_plaza;
$areaadscrita=$emp[0]->area_adscrita;
$grupo = $emp[0]->grupo;
$unidad = $emp[0]->unidad;
$fechain = $mov->fechain;
$fechafin = $mov->fechafin;
// checked
 $perSg="";
 $vac="";
 $faltaInj="";
 $perCg="";
 $comSin="";
 $incap="";
 $comCap="";
 $turAd="";
switch ( $mov->id_tipo_permiso ) {
	case '1': $perSg="checked=''"; break;
	case '2': $vac="checked=''"; break;
	case '3': $faltaInj="checked=''"; break;
	case '4': $perCg="checked=''"; break;
	case '5': $comSin="checked=''";	break;
	case '6': $incap="checked=''"; break;
	case '7': $comCap="checked=''";	break;
	case '8': $turAd="checked=''"; break;
}
$secSut = $mov->sec_suterm;
$delegado = $delegado[0]->nombre;
$jefeinm = $mov->jefe_inmediato;
$descripcion= $mov->observaciones;
$html = '
<html>
<head>
<style>
body {font-family: Arial;
	sans-serif;}
</style>
</head>
<body>

<htmlpageheader name="myheader">
<table width="100%">
<tr>
	<td width="20%"><img src="views/app/images/logo.png" whidth = 5; heigth=5></td>
	<td width="80%" style="text-align: center; font-size:10pt"><b>SINDICATO UNICO DE TRABAJADORES ELECTRICISTAS DE LA REPUBLICA MEXICANA C.T.P.A.L.M. SECCION No. 55 </b><br /></td>
	<td width="15%" style="text-align: right; font-size:9pt;">FOLIO: <span style="color:red">'.$folio.' </span><br/></td>
	</tr>
</table>
</htmlpageheader>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #000000; font-size: 8pt; text-align: center; padding-top:2mm; ">
PAG. {PAGENO} DE {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on"/>
<br>
<table border="0" width="100%" cellspacing="0" bordercolor="black"
  cellpadding="0" style="font-size:8pt;">
		<tr>
			<th rowspan="2" align="right" align="right" width="35%"> CON MOTIVO DE: </th>
			<td rowspan="2" align="right" width="33%"> FECHA:</td>
			<td rowspan="2" style="border-bottom: 1px solid #000000; text-align: center;">'.$fechaactual.'</td>
		</tr>
  </table>
<br /> <br/>

<!--tipo de permiso-->
<form style="border: 0px solid black; font-weight:normal; font-size:8pt; text-align:justify;">
	<div align="justify">
		<input type="checkbox" value="ON" '.$perSg.'/> PERMISO S/GOCE &nbsp;
		<input type="checkbox" value="ON" '.$vac.'/> VACACIONES DIAS &nbsp;
		<input type="checkbox" value="ON" '.$faltaInj.'/> FALTA INJUSTIFICADA &nbsp;
		<input type="checkbox" value="ON" '.$perCg.'/> PERMISO C/GOCE
		<input type="checkbox" value="ON" '.$comSin.'/> COMISION SINDICAL &nbsp;
	</div>
	<br/>
	<div>
		<input type="checkbox" value="ON" '.$incap.'/> INCAPACIDAD &nbsp;
		<input type="checkbox" value="ON" '.$comCap.'/> COMISION "CAPACITACION" &nbsp;
		<input type="checkbox" value="ON" '.$turAd.' /> TURNO ADICIONAL
	</div>
</form>
<br /> <br />
<!--DATOS SOLICITANTE-->
<table border="0" width="100%" cellspacing="-1" bordercolor="black"
  cellpadding="0" style="font-size:8pt">
		<tr>
			<th align="left" width="50px" style="font-weight:normal;">DEL C.:</th>
			<th align="center" style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal">'.$nombre.'</th>
			<th align="center" width="50px" style="font-weight:normal;">R.P.E.</th>
			<th align="left" width="100px" align="center" style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal">'.$rpe.'</th>
		</tr>
</table> <br />

<table border="0" width="100%" cellspacing="-1" bordercolor="black"
  cellpadding="0" style="font-size:8pt">
		<tr>
			<th align="left" width="115px" style="font-weight:normal;">CON CATEGORIA DE:</th>
			<th align="center" width="285px" style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal">'.$categoria.'</th>
			<th align="center" width="60px" style="font-weight:normal;">PLAZA No.</th>
			<th align="left" width="70px" align="center" style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal">'.$noplaza.'</th>
			<th align="left" width="30px" align="center" style="font-weight:normal;">GRUPO:</th>
			<th align="center" style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal">'.$grupo.'</th>
			<th align="left" width="30px" align="center" style="font-weight:normal;">UNIDAD:</th>
			<th align="center" style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal">'.$unidad.'</th>
		</tr>
</table> <br />
<table border="0" width="100%" cellspacing="-1" bordercolor="black"
  cellpadding="0" style="font-size:8pt">
		<tr>
			<th align="left" width="135px" style="font-weight:normal;">ADSCRITO AL AREA DE:</th>
			<th align="center" style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal">'.$areaadscrita.'</th>
		</tr>
</table> <br />
<table border="0" width="100%" cellspacing="-1" bordercolor="black"
  cellpadding="0" style="font-size:8pt">
		<tr>
			<th align="left" width="328px" style="font-weight:normal;">ORGINA EL SIGUIENTE MOVIMIENTO ESCALAFONARIO DESDE:</th>
			<th align="center" style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal">'.$fechain.'</th>
			<th align="center" width="40px" style="font-weight:normal;">HASTA:</th>
			<th align="center" style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal">'.$fechafin.'</th>
		</tr>
</table>
<br /> <br />
<!-- Tabla movimiento -->
<table border="1" width="100%" cellspacing="0" bordercolor="black"
  cellpadding="1">
	<thead>
		<tr>
			<th rowspan="2" whidth="50%" style="font-size:8pt">RPE</th>
			<th rowspan="2" style="font-size:8pt">NOMBRE</th>
			<th rowspan="2" style="font-size:8pt">CATEG. ACTUAL</th>
			<th rowspan="2" style="font-size:8pt">CATEG. PROPUESTA</th>
			<th rowspan="2" style="font-size:8pt">PLAZA No.</th>
			<th colspan="2" style="font-size:8pt">PERIODO PROPUESTO</th>
		</tr>
		<tr>
			<th style="font-size:8pt">DEL</th>
			<th style="font-size:8pt">AL</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th colspan="3" whidth="5%" style="font-size:8pt">PROPONE</th>
			<th colspan="2" style="font-size:8pt">ELABORO</th>
			<th colspan="2" style="font-size:8pt">AUTORIZO</th>
		</tr>
		<tr>
			<td colspan="3" style="font-size:7pt; text-align:center; padding-top:7mm;">
				<p style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal;">'.$secSut.'</p>
				<p style="font-size:6pt; font-weight:bold;">SECRETARIO DE TRABAJO SECCION 55 SUTERM</p>
			</td>
			<td colspan="2" style="font-size:7pt; text-align:center; padding-top:7mm;">
				<p style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal">'.$delegado.'</p>
				<p style="font-size:6pt; font-weight:bold; ">DELEGADO DEPARTAMENTAL NOMBRE, R.P.E., FIRMA</p>
			</td>
			<td colspan="2" style="font-size:7pt; text-align:center; padding-top:7mm;">
				<p style="border-bottom: 1px solid #000000; text-align: center; font-weight:normal">'.$jefeinm.'</p>
				<p style="font-size:6pt; font-weight:bold;">JEFE INMEDIATO SUPERIOR NOMBRE, R.P.E., FIRMA</p>
			</td>
		</tr>
	</tfoot>
	<tbody>';
	$allSust = $movimientos->getSustitutos( FOLIO-1 );
	foreach ($allSust as $dts){
		$html.='
		<tr>
			<td style="font-size:8pt; text-align:center">'.$dts->rpe.'</td>
			<td style="font-size:8pt; text-align:center">'.$dts->nombre.'</td>
			<td style="font-size:8pt; text-align:center">'.$dts->cat_actual.'</td>
			<td style="font-size:8pt; text-align:center">'.$dts->cat_propuesta.'</td>
			<td style="font-size:8pt; text-align:center">'.$dts->no_plaza.'</td>
			<td style="font-size:8pt; text-align:center">'.$dts->fecha_inicio.'</th>
			<td style="font-size:8pt; text-align:center">'.$dts->fecha_fin.'</th>
		</tr>
		';
		}
		$html.='
	</tbody>
</table>
<br />

<p style="font-size:8pt">OBSERVACIONES</p>
<textarea name="authors" rows="5" cols="100" wrap="virtual" style="font-size:8pt">
	'.$descripcion.'
</textarea>

</body>
</html>
';

//$mpdf=new mPDF('c',' ','','',20,15,48,25,10,10);
 $mpdf=new mPDF('c',' ','','',20,20,25,25,10,10);
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("SUTERM");
$mpdf->SetAuthor("Acme Trading Co.");
 $mpdf->SetWatermarkText("CTPALM");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'Arial';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');

$mpdf->WriteHTML($html);


$mpdf->Output(); exit;

exit;

?>
