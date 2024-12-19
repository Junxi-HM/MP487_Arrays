<!DOCTYPE html>
<html>
<body>
    
    <?php

    //Ejercicio 1
    echo"<h2>Ejercicio 1</h2>";
    $array = array("Nombre"=>"Sara", "Apellido"=>"Martínez", "Edad"=>23,"Ciudad"=>"Barcelona"); //Create an associative array
    $i=1;
    foreach ($array as $key => $value) { //Print the key and the value from array
        echo "Dato $i º : $value <br>";  //Show only the value
        $i++;
    }

    //Ejercicio 2
    echo"<h2>Ejercicio 2</h2>";
    foreach ($array as $key => $value) { //Show the key and the value
        echo "$key : $value <br>";       
    } 
    
    //Ejercicio 3
    echo"<h2>Ejercicio 3</h2>";
    $array['Edad']=24;                   //Change the value of the key 'Edad'
    $i=1;
    foreach ($array as $value) {         
        echo "Dato $i º : $value <br>";
        $i++;
    }
    
    //Ejercicio 4
    echo"<h2>Ejercicio 4</h2>";
    unset($array['Ciudad']);             //Delete existing array items
    var_dump($array);             //Dumps information of the variables from array
    
    
    //Ejercicio 5
    echo"<h2>Ejercicio 5</h2>";
    $letters = "a,b,c,d,e,f";            //Create the string
    $letters = explode(",",$letters); //Split the string into an array named "letters" using the separator ","
    for ($i=count($letters)-1; $i >=0 ; $i--) {   //Sort in descending order
        echo"letter " .$i ."º:" .$letters[$i] ."<br>";
    }

    //Ejercicio 6
    echo"<h2>Ejercicio 6</h2>";
    $notas = array("Miguel"=>5,"Luis"=>7, "Marta"=>10, "Isabel"=>8, "Aitor"=>4, "Pepe" =>1); //Create an associative array
    arsort($notas);               //Sort an associative array in descending order, according to the value
    echo"Notas de los estudiantes: ";
    foreach ($notas as $key => $value) {
    echo"$key: $value ";
    }

    //Ejercicio 7
    echo"<h2>Ejercicio 7</h2>";
    $media=0;
    foreach ($notas as $key => $value) {
        $media +=$value;                 //calculate total grade
    }
    $media = $media/count($notas);
    echo"Media de las notas: ".round($media, 2);
    echo"<br>Alumnos con nota por encima de la media: ";
    foreach ($notas as $key => $value) {
        if($value>$media){
            echo"<br>$key";
        }
    }

    //Ejercicio 8
    echo"<h2>Ejercicio 8</h2>";
    $notaAlta = 0;
    $mejorAlu = "";
    foreach ($notas as $key => $value) {
        if($notaAlta < $value){
            $notaAlta = $value;
            $mejorAlu = $key;
        }
    }
    echo "La nota más alta es $notaAlta y el mejor alumno es $mejorAlu";
    ?>

</body>
</html> 