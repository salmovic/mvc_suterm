<?php
/**
* Funciones para convertir un tipo de dato numerico a cadena de texto
* Para su mayor coprension.
*/
function grupoOrganico( $go ) {
	switch ( $go ) {
		case 1: return "I";break;
		case 2: return "II";break;
		case 3: return "II";break;
		case 4: return "IV";break;
		case 5: return "V";break;
		case 6: return "VI";break;
		case 7: return "VII";break;
		case 8: return "VIII";break;
		case 9: return "IX";break;
		case 10: return "X";break;
		case 11: return "XI";break;
		case 12: return "XII";break;
		case 13: return "XIII";break;
		case 14: return "XIV";break;
		case 15: return "XV";break;
		case 16: return "XVI";break;
		default:
		return "NONE";break;
	}
}
function nivelDesempenio( $n ) {
	switch ( $n ) {
			case 1: return "UNO";	break;
			case 2: return "DOS";	break;
			case 3: return "TRES";	break;
			case 4: return "CUATRO";	break;
			case 5: return "CINCO";	break;
			case 6: return "SEIS";	break;
			case 7: return "SIETE";	break;
			case 8: return "OCHO";	break;
			case 9: return "NUEVE";	break;
			case 10: return "DIEZ";	break;
			case 11: return "ONCE";	break;
			case 12: return "DOCE";	break;
			case 13: return "TRECE";	break;
		default:
			return "NONE";	break;
	}
}
function estatus( $i ) {
	switch ( $i ) {
		case 0: return "APTITUD";	break;
		case 1: return "BASE"; break;
		default: return "";	break;
	}	
}
?>
