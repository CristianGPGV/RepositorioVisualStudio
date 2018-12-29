<!DOCTYPE html>
//Borrado lo anterior nueva línea generada en Visual Studio.
//Modifico el fichero de nuevo

//NUeva línea para el último punto
<html>
    <head>
        <meta charset="UTF-8">
        <title>cristian</title>
    </head>
    <body>
        <?php
//Defino dos variables con mi nombre y apellidos
        $n = 'Cristian';
        $a = 'Gonzalez';

//Visualizo el texto con echo y print, por ejemplo en mi caso (deben de aparecer las comillas del ejemplo
// mi nombre es "Manuel" y mi apellido es "Romero"
//1)con echo pasando varios argumentos (separadados por coma)
        echo "1.Mi nombre es \"$n\"", " y mi apellido es \"$a\"<br><br>";

//2)con print
        print "2.Mi nombre es \"$n\" y mi apellido es \"$a\"<br><br>";

//3,4 y 5)Explica en el fichero diferencias entre echo y print y semejanzas.
        echo '3.echo es más fácil de usar.     Pueden pasarse (en la versión sin paréntesis) varios argumentos.    echo es más rápido que print.   echo es tipo void, no hay valor devuelto y no puede ser utilizado en expresiones <br><br>';
        echo '4.print no es tán sencillo en su uso.    Sólo puede pasarse un argumento.     print es más lento que echo.    print devuelve un valor int que según la documentación siempre es 1, por lo que puede ser utilizado en expresiones.<br><br>';
        echo '5.Ambas son construcciones que permiten la salida de caracteres en PHP.  <br><br>';
//6) Indica Por qué puedes pasar los argumentos sin usar paréntesis
        echo '6.Ninguna de las dos son en realidad funciones, por lo que pueden ir sin paréntesis.<br><br>';

        /* 7) Sintaxis heredoc, */
//Asigna a una variable llamada informe un texto de cinco líneas,
        $informe = <<<FIN
    uno.    Primera línea-DWES
    dos.    Segunda línea-DWES
    tres.   Tercera línea-DWES
    cuatro. Cuarta  línea-DWES
    cinco.  Quinta  línea-DWES
FIN;
//la etiqueta de finalización es FIN
//Posteriormente visualizas el texto
// El contenido de 'informe' es:
        echo '7.El contenido del informe es:</br>';
// aquí aparecer el contenido del informe
        echo "<pre>$informe</pre>";
// debe de respetarse el número de 5 líneas asignadas previamente";
//Tener cuidado con que la etiqueta no lleve en esa línea ningún otro carácter (espacios en blanco o tabulacones)


        /* PROBANDO VARIABLES (del 8 al 19) */
//Crea una variable y asígnale un valor
        $b = 7;
        echo '8.  $b=' . $b . ',Valor de la variable $v -' . $b . '-<br>';
//visualiza el valor de la variable y el tipo que eś
        echo '9.  Tipo de la variable es ' . gettype($b) . '.<br>';
//Cambia la variable a los siguientes tipos :boolean, float, string y null,  y visualizar su valor y tipo 
        $b = true;
        echo '10. $v=true Valor de la variable -' . $b . '-<br>';
        echo '11. Tipo de la variable es ' . gettype($b) . '.<br>';

        $b = 1.2727;
        echo '12. $v=' . $b . ' Valor de la variable -' . $b . '-<br>';
        echo '15. Tipo de la variable es ' . gettype($b) . '.<br>';

        $b = 'cadena';
        echo '14. $v=' . $b . ' Valor de la variable -' . $b . '-<br>';
        echo '15. Tipo de la variable es ' . gettype($b) . '.<br>';

        $b = null;
        echo '16. $v=' . $b . ' Valor de la variable -' . $b . '-<br>';
        echo '17. Tipo de la variable es ' . gettype($b) . '.<br>';


//Prueba a ver el valor y tipo de una variable no definida previamente
        $x;
        echo '18. $x variable no creada previamente valor -' . $x . '-<br>';
        echo '19.Tipo de la variable no creada es ' . gettype($x) . ' .<br><br>';

        /* 20)Visualiza el código ascii del valor 64 al 122 en carácter usando la función ascii  .. puedes usar la función printf o  bien char() .. */
        echo '20. Código ascii del valor 64 al 122.<br>';

        $a = chr(64);
        for ($i = 64; $i <= 122; $i++) {
            $a = chr($i);
            echo "&nbsp&nbsp $i.=$a &nbsp&nbsp";
        }

        echo '</br><br>';
//21)Visualiza el contenido de la función time() y explica su valor

        echo '21.Valor de la función time()' . time() . '<br>';
        echo 'Es el número de segundos trasncurridos desde el 1 de Enero de 1970 hasta la fecha y hora actual.<br><br>';


//22)Obtén la fecha actual y visualiza su valor con formato dia-mes-año en número usa la función date() para ello


        echo "22.Fecha actual: ." . date('d-m-y') . "<br><br>";


//23,24,y 25)Obtener los días, luego horas y luego minutos transcurridos desde el 1/1/1970 (round() o floor() para redondear
        $dias = round((time() / 60 / 60 / 24));
        echo "23.Días transcurridos desde el 1/1/1970 " . $dias . " días.<br><br>";
        $horas = round((time() / 60 / 60));
        echo "24.Horas transcurridos desde el 1/1/1970 " . $horas . " horas. <br><br>";
        $minutos = round((time() / 60));
        echo "25.Minutos transcurridos desde el 1/1/1970 " . $minutos . " minutos. <br><br>";

//Usando la función setlocale(...) y strftime(...)
//Puede ser que tengas que habilitar el idioma en el sistema con locale-gen
//26)  Obtén la fecha actual con formato por ejemplo domingo, 28 de octubre de 2018
        setlocale(LC_TIME, "es_ES");
        echo "26.Fecha con formato personalizado en español: " . strftime("%A,%d de %B de %Y") . "<br><br>";

//27)  Ahora con formato en inglés  Sunday, 28 October 2018
        setlocale(LC_TIME, "en_GB");
        echo "27.Fecha con formato personalizado en inglés: " . strftime("%A,%d de %B de %Y") . " <br><br>";

//28) y con formato en francés  dimanche, 28 octobre 2018
        setlocale(LC_TIME, "fr_FR");
        echo "28.Fecha con formato personalizado en francés: " . strftime("%A,%d de %B de %Y") . " <br><br>";

// 29-30)Asigna a una variable la fecha de tu cumpleaños
// Realiza una operación y obtén tu edad en años, meses y días (valor entero).
// tienes 23 años, 10 meses y 4 días
        $d = 14;
        $m = 02;
        $y = 1986;
        $cumpleaños = "$m/$d/$y";
        $cumpleañoss = "$d/$m/$y";
        echo "29.Fecha de mi cumpleaños:" . $cumpleañoss . "  <br><br>";
        $ahora = date('d-m-y');
        $ahora2 = time();
        $date = strtotime($cumpleaños);
        $edad = ($ahora2 - $date);
        $años = floor(($edad) / (60 * 60 * 24 * 365.25));
        $meses = date("m", $edad);
        $dia = date("d", $edad);


        echo "30.Fecha de nacimiento: " . $cumpleañoss . ", la fecha actual es: " . $ahora . " por lo tanto, tienes: " . $años . " años, " . $meses . " meses y " . $dia . " días.<br><br>";

//31-32)Asigna a una variable una fecha de 30/10/1969 (mira las funciones strtotime() o bien mktime() para ello
        $di = 30;
        $me = 10;
        $ye = 1969;
        $f_na = "$di/$me/$ye";
        $f_naci = "$me/$di/$ye";

// // Obtén su edad en años, en meses y luego en días siempre redondeando
        $date1 = strtotime($f_naci);
        $edad1 = ($ahora2 - $date1);
// tienes xx años
        $años1 = floor(($edad1) / (60 * 60 * 24 * 365.25));
// tienes xx meses
        $meses1 = date("m", $edad1);
// tienes xx días
        $dia1 = date("d", $edad1);
        echo "31.Fecha " . $f_na . "<br><br>";
        echo "32.Fecha de nacimiento: " . $f_na . " la fecha actual es: " . $ahora . " tienes " . $años1 . " años, " . $meses1 . " meses y " . $dia1 . " días<br><br>";

//33-36). Usa la función getdate(...) y visualiza con la función print_r(.) el valor que retorna, comenta el resultado.
        echo '33.';
        print_r(getdate());

        echo "<br><br>34.La función getdate()nos da un array con la información sobre la fecha y la hora actual.<br><br>";
        $texto = <<<FIN
seconds 	Representacion numérica de los segundos 0 a 59
minutes 	Representacion numérica de los minutos 	0 a 59
hours           Representacion numérica de las horas 	0 a 23
mday            Representacion numérica del día del mes 1 a 31
wday            Representacion numérica del día de la semana 	0 (para Domingo) hasta 6 (para Sábado)
mon             Representacion numérica de un mes 	1 hasta 12
year            Representacion numérica completa de una año, 4 dígitos 	Ejemplos: 1999 o 2003
yday            Representacion numérica del día del año 0 hasta 365
weekday 	Representación textual completa del día de la semana 	Sunday hasta Saturday
month           Representación textual completa de un mes, como January o March 	January hasta December
FIN;
        echo "<pre>$texto</pre><br>";
////. Si escribo getdate(1) podrías explicar el contenido del array que nos retorna
        echo '35.';
        print_r(getdate(1));
        echo "<br>La función getdate(1)nos da un array con la información sobre la fecha y la hora del 1 de Enero de 1970.<br><br>";
//. Obtener la edad de una persona nacida el 1/1/1969

        $di = 01;
        $me = 01;
        $ye = 1969;
        $f_ni = "$me/$di/$ye";
        $dat1 = strtotime($f_ni);
        $eda1 = ($ahora2 - $dat1);

        $ao1 = floor(($eda1) / (60 * 60 * 24 * 365.25));

        echo "36.Una persona nacida el 1/1/1969 tiene " . $ao1 . " años.<br><br>";

//37-64)Explica el siguiente código observando el resultado que se produce fuente obtenido en parte de http://php.net/manual/es/function.strtotime.php

        echo "<hr>";

        echo "37.strtotime(\"now\")= " . strtotime("now"), "<br><br/>";

        echo "38.Significado de strtotime(\"now\") es el número de segundos transcurridos desde el 1 de Enero del 1970 00:00:00 UTC) hasta ahora porque \"now\" indica el tiempo actual,  <br><br>";

        echo "39.date(\"d-m-Y\", strtotime(\"now\") " . date('d-m-Y', strtotime("now")), "<br><br/>";

        echo "40.Significado de date(\"d-m-Y\", strtotime(\"now\")) el date() da formato a la fecha día-mes-año y strtotime nos devuelve el tiempo actual debido a la indicación \"now\".  <br><br>";

        echo "41.strtotime(\"27 September 1970\")\" " . strtotime("27 September 1970"), "<br><br/>";

        echo "42.Significado de strtotime(\"27 September 1970\") es el número de segundos transcurridos desde el 1 de Enero del 1970 00:00:00 UTC) hasta la fecha entre paréntesis el 27 de Septiembre de 1970 <br><br>";

        echo "43.date(\"d-m-Y\",strtotime(\"10 September 2000\"))" . date('d-m-Y', strtotime("10 September 2000")), "<br><br/>";

        echo "44.Significado de date(\"d-m-Y\",strtotime(\"10 September 2000\")) el date() da formato a la fecha día-mes-año y strtotime nos devuelve la fecha pasada por el parámetro con el formato anteriormente indicado.   <br><br>";

        echo "45.strtotime(\"+1 day\") " . strtotime("+1 day"), "<br><br/>";

        echo "46.Significado de strtotime(\"+1 day\") es el número de segundos transcurridos desde el 1 de Enero del 1970 00:00:00 UTC) hasta ahora más la suma en segundos de un día 86400.   <br><br>";

        echo "47.date(\"d-m-Y\",strtotime(\"+1 day\"))" . date('d-m-Y', strtotime("+1 day")), "<br><br/>";

        echo "48.Significado de date(\"d-m-Y\",strtotime(\"+1 day\")) el date() da formato a la fecha día-mes-año y strtotime nos devuelve la fecha actual más un día debido a que se indica +1day. <br><br>";

        echo "49.strtotime(\"+1 week\") " . strtotime("+1 week"), "<br><br/>";

        echo "50.Significado de strtotime(\"+1 week\") es el número de segundos transcurridos desde el 1 de Enero del 1970 00:00:00 UTC) hasta ahora más la suma en segundos de una semana 604800 <br><br>";

        echo "51.date(\"d-m-Y\",strtotime(\"+1 week\")) " . date('d-m-Y', strtotime("+1 week")), "<br><br/>";

        echo "52.Significado de date(\"d-m-Y\",strtotime(\"+1 week\")) el date() da formato a la fecha día-mes-año y strtotime nos devuelve la fecha actual más una semana debido a que se indica +1week<br><br>";

        echo "53.strtotime(\"+1 week 2 days 4 hours 2 seconds\") " . strtotime("+1 week 2 days 4 hours 2 seconds"), "<br><br/>";

        echo "54.Significado de strtotime(\"+1 week 2 days 4 hours 2 seconds\") es el número de segundos transcurridos desde el 1 de Enero del 1970 00:00:00 UTC) hasta ahora más la suma en segundos del tiempo indicado una semana, dos días, 4 horas y dos segundos  <br><br>";

        echo "55.date(\"d-m-Y\",strtotime(\"+1 week 2 days 4 hours 2 seconds\")) " . date('d-m-Y', strtotime("+1 week 2 days 4 hours 2 seconds")), "<br><br/>";

        echo "56.Significado de date(\"d-m-Y\",strtotime(\"+1 week 2 days 4 hours 2 seconds\")) el date() da formato a la fecha día-mes-año y strtotime nos devuelve la fecha actual más una semana,dos días, 4 horas debido a que se indica +1week,2days,4 hours,2 seconds.<br><br>";

        echo "57.strtotime(\"next Thursday\") ".strtotime("next Thursday"), "<br><br/>";

        echo "58.Significado de strtotime(\"next Thursday\") es el número de segundos transcurridos desde el 1 de Enero del 1970 00:00:00 UTC) hasta ahora más la suma en segundos del tiempo indicado, en este caso el próximo jueves desde la fecha actual.<br><br>";

        echo "59.date(\"d-m-Y\",strtotime(\"next Thursday\"))".date('d-m-Y', strtotime("next Thursday")), "<br><br/>";

        echo "60.Significado de date(\"d-m-Y\",strtotime(\"next Thursday\")) el date() da formato a la fecha día-mes-año y strtotime nos devuelve la fecha en ese formato del próximo jueves a la fecha actual. <br><br>";

        echo "61.strtotime(\"last Monday\") ".strtotime("last Monday"), "<br><br/>";

        echo "62.Significado de strtotime(\"last Monday\")es el número de segundos transcurridos desde el 1 de Enero del 1970 00:00:00 UTC) hasta el último más cercano a la fecha actual. <br><br>";

        echo "63.date(\"d-m-Y\",strtotime(\"last Monday\")) " . date('d-m-Y', strtotime("last Monday")), "<br><br/>";

        echo "64.Significado de date(\"d-m-Y\",strtotime(\"last Monday\")) el date() da formato a la fecha día-mes-año y strtotime nos devuelve la fecha en ese formato del último Lunes a la fecha actual.<br><br>";

        echo "<hr>";
        ?>

    </body>
</html>
