<?php

$salut = "Salut tout le monde !";

function content_call () {
    echo "Je vien de la function";
}

class my_class {

    public $varone;
    public $vartwo;

    public function __construct($varone, $vartwo) {
        $this->varone = $varone;
        $this->vartwo = $vartwo;
    }
}

?>
