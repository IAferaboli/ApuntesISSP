<?php

require('header.php');

$descargo = new PDF();

$descargo->AliasNbPages();
$descargo->AddPage();
$descargo->SetFont('Times','', 12);
$descargo->SetY(35);
$descargo->Cell(40,10, utf8_decode('¡Hola, Mundo!'));

$descargo->Output();