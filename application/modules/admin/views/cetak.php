<!DOCTYPE html>
<html>
<head>
	<title>CETAK SK Promosi Pegawai</title>
	<style type="text/css" media="print">
		body{
			font-family: "Times New Roman";
			font-size: 20pt;
		}
	</style>
	<script type="text/javascript">
		function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
	</script>
</head>
<body style="margin-left:100px; font-size:12pt; margin-left:100px;">
<div id="print">
<table>
<tr>
<td width="95" rowspan="4"><img src="<?=base_url()?>assets/img/logo.jpg"/ class="img-rounded" style="width:80px; height:80px" /></td>
</tr>
<tr>
    <td width="311">PT. PLN (PERSERO)</td>
    <td width="94">&nbsp;</td>
    <td width="210">&nbsp;</td>
    <td width="101">&nbsp;</td>
    <td width="192">&nbsp;</td>
    <td width="82">&nbsp;</td>
    <td width="73">&nbsp;</td>
</tr>
<tr>
    <td height="29">DISTRIBUSI JAKARTA RAYA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
    <td>AREA PONDOK GEDE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
    <td colspan="8">Jl. Jatimakmur No. 150, Pondok Gede - Bekasi</td>
</tr>
<tr>
    <td>Telp No </td>
    <td>(021)848 8385 - 848 8386</td>
    <td>Kotak Pos</td>
    <td>17413</td>
    <td>Call Center</td>
    <td>(kode area) 123</td>
    <td>Facebook</td>
    <td>pln123</td>
</tr>
<tr>
    <td>Facsimle</td>
    <td>(021)848 8388</td>
    <td>Website</td>
    <td>www.pln.co.id/disjaya</td>
    <td>E-mail</td>
    <td>pln123@pln.co.id</td>
    <td>Twitter</td>
    <td>@pln_123</td>
</tr>
<tr>
    <td colspan="8"><b>==================================================================================================================================</b></td>		
</tr>
<tr>
    <td height="45">No</td>
    <td>....../SDM.07.01/APDG/2016 - R</td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="3">Jakarta, <?=date('d/m/Y')?></td>
</tr>
<tr>
    <td height="45">Lamp</td>
    <td colspan="7">Ada</td>
</tr>
<tr>
  <td height="45">Perihal</td>
  <td>Usulan Promosi Pegawai</td>
  <td></td>
  <td></td>
  <td></td>
  <td colspan="3">Kepada Yth, </td>
</tr>
<tr>
  <td height="45">&nbsp;</td>
  <td>&nbsp;</td>
  <td></td>
  <td></td>
  <td></td>
  <td colspan="3">PT. PLN (PERSERO) DISJAYA </td>
</tr>
<tr>
  <td height="45">&nbsp;</td>
  <td>&nbsp;</td>
  <td></td>
  <td></td>
  <td></td>
  <td colspan="3">Jl. M.I.R. Rais No. 1 </td>
</tr>
<tr>
  <td height="45">&nbsp;</td>
  <td>&nbsp;</td>
  <td></td>
  <td></td>
  <td></td>
  <td colspan="3">Jakarta Pusat</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td></td>
  <td></td>
  <td></td>
  <td colspan="3"></td>
</tr>
<tr>
  <td height="45">&nbsp;</td>
  <td>Up. Manajer SDMO </td>
  <td></td>
  <td></td>
  <td></td>
  <td colspan="3"></td>
</tr>
<tr>
  <td height="45">&nbsp;</td>
  <td colspan="7">Kami menyampaikan usulan promosi pegawai dari Area Pondok Gede sebagai berikut :</td>
</tr>
<?php foreach ($cetak_sk_pegawai as $r):?>
<tr>
  <td height="34">&nbsp;</td>
  <td colspan="7">Nip : <?=$r->nip?></td>
</tr>
<tr>
  <td height="34">&nbsp;</td>
  <td colspan="7">Nama : <?=$r->nama?></td>
</tr>
<tr>
  <td height="34">&nbsp;</td>
  <td colspan="7">Jabatan Yang Diusulkan : <?=$r->nama_jabatan?></td>
</tr>
<?php endforeach; ?>
<tr>
    <td height="34">&nbsp;</td>
    <td colspan="7">Demikian surat usulan ini kami perbuat. Atas perhatiannya kami ucapkan terima kasih. </td>
</tr>
<tr>
    <td height="45"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="3">MANAJER</td>
</tr>
<tr>
    <td height="25"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="3"></td>
</tr>
<tr>
  <td height="45"></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td colspan="3">HERI WIBOWO </td>
</tr>
</table>
</div>
<button onclick="printContent('print')">Print</button>
</body>
</html>