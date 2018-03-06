$hora = "02:13:00";
list($horas, $minutos, $segundos) = explode(':', $hora);
// $hora_en_segundos = ($horas * 3600 ) + ($minutos * 60 ) + $segundos;
$hora_en_segundos = ($horas * 60) + $minutos;
echo $hora_en_segundos;