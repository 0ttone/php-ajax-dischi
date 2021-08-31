<?php
  //questa funzione verrà riportata nella cartella 'api'
  //permette di stampare il json dell array database attraverso
  // il comando json_encode(argomento)
  //la dichiarazione header che lo precede dichiara al client
  //in lettura che contiene solo json
  //in genere non va MAI preceduto da una riga echo

  //costruiamo la funzione

  function printJson($array) {
        header('Content-Type: application/json');
        echo json_encode($array);
  }



?>