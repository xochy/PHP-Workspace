<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Switch con default</title>
</head>
<body>
<p>
  <?php
switch ($dia){
	
	case "lunes":
	$texto = "¡Feliz día de la Luna!";
	break;
	
	case "martes":
	$texto = "¡Feliz día de Marte!";
	break;

	case "miércoles":
	$texto = "¡Feliz día de Mercurio!";
	break;
	
	case "jueves":
	$texto = "¡Feliz día de Júpiter!";
	break;

	case "viernes":
	$texto = "¡Feliz día de Venus!";
	break;

	case "sábado":
	$texto = "¡Feliz día de Saturno!";
	break;

	case "domingo":
	$texto = "¡Feliz día del Sol!";
	break;
	
	default:
	$texto = "¡Feliz día fuera de calendario!";
	break;
}

print ($texto);

?>
</p>
</body>
</html>