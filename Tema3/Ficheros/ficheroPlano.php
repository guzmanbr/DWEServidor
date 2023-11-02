<?php
//Leer-----------------------
// echo "<h1>Leer fichero</h1>";
// // primero ver si existe
//     if (file_exists('fichero.txt')) {
//         echo "Existe";
//         echo "<br>";

//         //abrir, si hay problema al abrir mensaje error, sino lo lee
//         if(!$fp = fopen('fichero.txt','r')){
//             echo "Ha habido un problema al abrir el fichero";
//         }else {
//             $tamaño = filesize('fichero.txt');
//             $leido = fread($fp,$tamaño);
//             echo $leido;
//             fclose($fp);
//         }

        

//     }else{
//         echo "No existe";
//     }

// //Escribir con w -----------------------------
// echo "<h1>Ecribir fichero con w borra lo anterior</h1>";

//     if (file_exists('fichero.txt')) {
//         echo "Existe";
//         echo "<br>";

//         // W
//         if(!$fp = fopen('fichero.txt','w')){
//             echo "Ha habido un problema al abrir el fichero";
//         }else {
//             $texto = "Escribiendo...";
//             $longitud = strlen($texto);//longitud del texto
//             //si no ha ido bien da error, sudo chmod 777 fichero.txt, para poder escribir
//             //le paso la tuberia, el texto a escribir y la longitud de lo que voy a escribir
//             if (!fwrite($fp,$texto,$longitud)) {
//                echo "Error al escribir";
//             }else {
                
//             }
//             fclose($fp);
//         }

//     }else{
//         echo "No existe";
//     }

// //Escribir con a -------------------------------
// echo "<h1>Ecribir fichero con a escribe al final del fichero</h1>";

//     if (file_exists('fichero.txt')) {
//         echo "Existe";
//         echo "<br>";

//         // W
//         if(!$fp = fopen('fichero.txt','a')){
//             echo "Ha habido un problema al abrir el fichero";
//         }else {
//             $texto = "Escribiendo al final con la a...";
//             $longitud = strlen($texto);//longitud del texto
//             //si no ha ido bien da error, sudo chmod 777 fichero.txt, para poder escribir
//             //le paso la tuberia, el texto a escribir y la longitud de lo que voy a escribir
//             if (!fwrite($fp,$texto,$longitud)) {
//                echo "Error al escribir";
//             }else {
                
//             }
//             fclose($fp);
//         }

//     }else{
//         echo "No existe";
//     }

// //Escribir con c ------------------------------
// echo "<h1>Ecribir fichero con c sobrescribe</h1>";

//     if (file_exists('fichero.txt')) {
//         echo "Existe";
//         echo "<br>";

//         // W
//         if(!$fp = fopen('fichero.txt','c')){
//             echo "Ha habido un problema al abrir el fichero";
//         }else {
//             $texto = "Escribiendo con la c...";
//             $longitud = strlen($texto);//longitud del texto
//             //si no ha ido bien da error, sudo chmod 777 fichero.txt, para poder escribir
//             //le paso la tuberia, el texto a escribir y la longitud de lo que voy a escribir
//             if (!fwrite($fp,$texto,$longitud)) {
//                 echo "Error al escribir";
//             }else {
                
//             }
//             fclose($fp);
//         }

//     }else{
//         echo "No existe";
//     }


// //Escribir con c ------------------------------
// echo "<h1>Ecribir en el medio con c</h1>";

//     if (file_exists('fichero.txt')) {
//         echo "Existe";
//         echo "<br>";

//         // W
//         if(!$fp = fopen('fichero.txt','c')){
//             echo "Ha habido un problema al abrir el fichero";
//         }else {
//             $texto = "medio";
//             fseek($fp,28);//donde quiero que se escriba fseek()
//             $longitud = strlen($texto);//longitud del texto
//             if (!fwrite($fp,$texto,$longitud)) {
//                 echo "Error al escribir";
//             }else {
                
//             }
//             fclose($fp);
//         }

//     }else{
//         echo "No existe";
//     }



//Leer-----------------------
echo "<h1>Leer fichero por lineas</h1>";
// primero ver si existe
    if (file_exists('ficheroLineas.txt')) {
        echo "Existe";
        echo "<br>";

        //abrir, si hay problema al abrir mensaje error, sino lo lee
        if(!$fp = fopen('ficheroLineas.txt','r')){
            echo "Ha habido un problema al abrir el fichero";
        }else {
            //paso la tuberia y el tamaño que quiero leer, y lo guardo en la variable asi lee linea a linea
            while ($leido = fgets($fp,filesize('ficheroLineas.txt'))) {
                echo $leido." ftell ".ftell($fp)."<br>";
            }
            
            fclose($fp);
        }

        

    }else{
        echo "No existe";
    }

// //Escribir por lineas al final-----------------------
// echo "<h1>Escribir fichero por lineas al final 'a'</h1>";
// // primero ver si existe
//     if (file_exists('ficheroLineas.txt')) {
//         echo "Existe";
//         echo "<br>";

//         //abrir, si hay problema al abrir mensaje error, sino lo lee
//         if(!$fp = fopen('ficheroLineas.txt','a')){
//             echo "Ha habido un problema al abrir el fichero";
//         }else {
//             $texto = "\nMi nueva linea";
//             //paso la tuberia y el tamaño que quiero leer, y lo guardo en la variable asi lee linea a linea
//             if (!fwrite($fp,$texto,strlen($texto))) {
//                 echo "Error escribir";
//             }
//             fclose($fp);
//         }

        

//     }else{
//         echo "No existe";
//     }


//Escribir por lineas-----------------------
//cuando queremos modiicar  fichero secuencial
//creamos archivo temporal leer y modificar 
//borrar el anterior y renombrar al temporal con el nombre del anterior el anterior


echo "<h1>Escribir fichero por lineas en un sitio concreto</h1>";

    $tmp = tempnam('.',"tem.txt");

    if (file_exists('ficheroLineas.txt')) {
        echo "Existe";
        echo "<br>";
        //guardo en fp el fichero, y en ft el temporal con w para ir copiandolo
        if(!$fp = fopen('ficheroLineas.txt','r') || !$ft = fopen($tmp,'w')){
            echo "Ha habido un problema al abrir el fichero";
        }else {
            $texto = "Linea nueva\n";
            $contador = 1;
            //paso la tuberia y el tamaño que quiero leer, y lo guardo en la variable asi lee linea a linea
            while ($leido = fgets($fp,filesize('ficheroLineas.txt'))) {
                fputs($ft,$leido,strlen($leido));
                if ($contador == 1) {
                    fputs($ft,$texto,strlen($texto));
                    $contador++;
                }
            }
            
            fclose($fp);
            fclose($ft);
            unlink("ficheroLineas.txt");
            rename($tmp,"ficheroLineas.txt");
        }

        

    }else{
        echo "No existe";
    }





?>