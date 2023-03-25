<?php
declare(strict_types=1);

function reponse_oui_non (string $phrase): bool
{
	while (true)
	{
		$response = (string)readline($phrase . " o - n : ");
		if ($response === 'o')
		{
			return true;
		} elseif ($response === 'n')
		{
			return false;
		}
	}
}

function second_function (string $phrase = "Veuillez entrer une heure : "): array
{
	echo $phrase;
	while (true)
	{
		$ouverture = (int)readline("Entrer l'heure d'ouverture : ");
		if ($ouverture >= 8 && $ouverture <= 18)
		{
			break;		
		}
	}
	while (true)
	{
		$fermeture = (int)readline("Entrer une heure de fermeture : ");
		if ($fermeture >= 0 && $fermeture <= 18 && $fermeture > $ouverture)
		{
			break;		
		}
	}
	return [$ouverture, $fermeture];
}

function appel_premierefunc (string $phrase = "On passe le string"): array
{
	$crenaux = [];
	$continue = true;
	while ($continue) 
	{
		$crenaux[] = second_function();
		$continue = reponse_oui_non("Voulez-vous continuer");	
	}
	return $crenaux;
}

$appel = appel_premierefunc("un string qqcq");
var_dump($appel);
var_dump($appel[0][0], $appel[0][1]);
var_dump($appel[1][0], $appel[1][1]);
echo "heure d'ouverture " . $appel[0][0] . "h\n heure de fermeture " . $appel[0][1] . "h \n"; 
echo "heure d'ouverture (apm)" . $appel[1][0] . "h\n heure de fermeture (apm) " . $appel[1][1] . "h \n";

?>
