<?php
declare(strict_types=1);

function reponse_oui_non (string $phrase): bool
{
	while (true)
	{
		$response = (string)readline($phrase . "- o - n: ");
		if ($response === 'o') 
		{
			return true;		
		} elseif ($response === 'n')
		{
			return false;		
		}
	}
}

function function_crenau (string $phrase = "Veuillez entrer un crenau 1 : "): array
{
	echo $phrase;
	while (true)
	{
		$ouverture = (int)readline("Heure d'ouverture : ");
		if ($ouverture >= 8 && $ouverture <= 23)
		{
			break;
		}
	}
	while (true)
	{
		$fermeture = (int)readline("Heure de fermeture: ");
		if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture)
		{
			break;
		}
	}
	return [$ouverture, $fermeture];

}

function demander_lescrenaux (string $phrase = "veuillez entrer un crenau 2 : "): array
{
	$crenaux = [];
	$continuer = true;
	while ($continuer)
	{
		$crenaux[] = function_crenau();
		$continuer = reponse_oui_non("Voulez-vous continuer ? : ");
	}
	return $crenaux;
}

$cren = demander_lescrenaux("Veuillez entrer votre crenau 3 : ");
var_dump($cren);
?>


