$toleranciamin = 30;
$fecha = '16:20:00';
$date = new DateTime("0000-00-0 .$fecha.");
$date->modify('0 hours');
$date->modify(''.-$toleranciamin.' minute');
$date->modify('0 second');
$horaTolerancia = $date->format('H:i:s');
echo "Hora tolerancia es : " . $horaTolerancia;

