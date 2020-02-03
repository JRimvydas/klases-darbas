<?php 

$target = 'Ketvirtadienis';
$targetUp =strtoupper($target);

switch ($targetUp) {
	case 'Pirmadienis':
		print 'Pirmadienis';
		break;
	case 'Antradienis':
		print 'Antradienis';
		break;
	case 'Treciadienis':
		print 'Treciadienis';
		break;
	case 'KETVIRTADIENIS':
		print 'Mazasis penktadienis';
		break;
	case 'Penktadienis':
		print 'Savaitgalio pradzia';
		break;	
	case 'Sestadienis':
		print 'Sestadienis';
		break;	
	case 'Sekmadienis':
		print 'Sekmadienis';
		break;	
	default:
		print 'Nera tokios savaites dienos';
		break;
}


 ?>