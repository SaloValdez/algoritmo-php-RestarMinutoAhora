$hora = "09:24:38";
list($horas, $minutos, $segundos) = explode(':', $hora);
$hora_en_segundos = ($horas * 3600 ) + ($minutos * 60 ) + $segundos;
echo $hora_en_segundos;  