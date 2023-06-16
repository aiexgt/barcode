<?php

if (isset($_POST['cadena'])) {

    $cadena = $_POST['cadena'];

    include('./assets/src/barcode/autoload.php');

    $barcode = new \Com\Tecnick\Barcode\Barcode();
    $cadena = trim($cadena);
    $codigos = explode(',', $cadena, 100);
    
    $zip = new ZipArchive();

    $nameZip = 'barcode-' . date("dmYHms") . '.zip';
    $zip->open('./public/' . $nameZip, ZipArchive::CREATE);

    foreach ($codigos as $key => $value) {
        $bobj = $barcode->getBarcodeObj(
            "C39",             // Tipo de Barcode o Qr                    // Tipo de Barcode o Qr
            $value,          // Datos
            1000,                             // Width 
            266.67,                             // Height
            'black',                        // Color del codigo
            array(5, 5, 5, 5),      // Padding
        )->setBackgroundColor('white');

        $imageData = $bobj->getPngData(); // Obtenemos el resultado en formato PNG

        file_put_contents('./temp/' . $value . '.png', $imageData);
        $zip->addFile("./temp/" . $value . '.png', $value . '.png');
    }

    $zip->close();

    $files = glob('temp/*.png'); //obtenemos todos los nombres de los ficheros
    foreach ($files as $file) {
        if (is_file($file))
            unlink($file); //elimino el fichero
    }

    echo '1|'.$nameZip;
} else {
    echo '0|No se ha ingresado ningún código';
}
