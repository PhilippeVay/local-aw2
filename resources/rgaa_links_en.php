<?php
// Search all in ST2:
//		'(.*)' => '(.*)',
// Replace all:
//		'$2' => '$1',
// Then in AW2.2 file, search will be:
//		[-|: ] [0-9]+\.[0-9]+

function techsLine($line) {
	$baseUrl = 'http://www.w3.org/TR/WCAG20-TECHS/';
	$lineWithTechsLinks = preg_replace('/([A-Z]+[0-9]+)/', '<a href="'.$baseUrl.'$1.html">$1</a>', $line);
//return '<a href="#">'.$lineWithTechsLinks[0].'</a>'.$line[3]
	return $lineWithTechsLinks[0].$line[3];
	//return $lineWithTechsLinks;
}

function rgaaLine($line) {
	$lineWithRgaaLinks = preg_replace_callback('/([0-9]+\.[0-9]+)/', 'linkRgaa', $line[3]);

	return $line[1].' (in french)'.$line[2].$lineWithRgaaLinks.$line[4];
	//return 'test</strong> test</li>';
	//return 'test2</strong> '.$line[1].'</li>';
}

function linkRgaa($matches) {
	$rgaa = array(
	'1.1' => 'http://rgaa.net/1-1-Absence-de-cadres-non-titres.html',
	'1.2' => 'http://rgaa.net/Pertinence-des-titres-donnes-aux.html',
	'2.1' => 'http://rgaa.net/Presence-d-un-autre-moyen-que-la.html',
	'2.2' => 'http://rgaa.net/Presence-d-un-autre-moyen-que-la,4.html',
	'2.3' => 'http://rgaa.net/Presence-d-un-moyen-de.html',
	'2.4' => 'http://rgaa.net/Presence-d-un-moyen-de,6.html',
	'2.5' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du.html',
	'2.6' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du,8.html',
	'2.7' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du,9.html',
	'2.8' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du,10.html',
	'2.9' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du,11.html',
	'2.10' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du,12.html',
	'2.11' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du,13.html',
	'2.12' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du,14.html',
	'2.13' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du,15.html',
	'2.14' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du,16.html',
	'2.15' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du,17.html',
	'2.16' => 'http://rgaa.net/Valeur-du-rapport-de-contraste-du,18.html',
	'3.1' => 'http://rgaa.net/Possibilite-d-identifier-les.html',
	'3.2' => 'http://rgaa.net/Presence-d-information-prealable.html',
	'3.3' => 'http://rgaa.net/Positionnement-correct-des.html',
	'3.4' => 'http://rgaa.net/Regroupement-d-elements-de.html',
	'3.5' => 'http://rgaa.net/Absence-d-element-fieldset-sans.html',
	'3.6' => 'http://rgaa.net/Pertinence-du-contenu-de-l-element.html',
	'3.7' => 'http://rgaa.net/Regroupement-d-elements-option.html',
	'3.8' => 'http://rgaa.net/Presence-d-un-attribut-label-sur-l.html',
	'3.9' => 'http://rgaa.net/Pertinence-du-contenu-de-l.html',
	'3.10' => 'http://rgaa.net/Absence-d-element-de-formulaire.html',
	'3.11' => 'http://rgaa.net/Absence-d-element-de-formulaire,29.html',
	'3.12' => 'http://rgaa.net/Pertinence-des-etiquettes-d.html',
	'3.13' => 'http://rgaa.net/Presence-d-informations-ou-de.html',
	'3.14' => 'http://rgaa.net/Presence-de-mecanismes-permettant.html',
	'3.15' => 'http://rgaa.net/Presence-de-mecanismes-permettant,33.html',
	'3.16' => 'http://rgaa.net/Presence-d-une-page-d-aide-ou-d-un.html',
	'4.1' => 'http://rgaa.net/Presence-de-l-attribut-alt.html',
	'4.2' => 'http://rgaa.net/Pertinence-de-l-alternative.html',
	'4.3' => 'http://rgaa.net/Pertinence-de-l-alternative,37.html',
	'4.4' => 'http://rgaa.net/Pertinence-de-l-alternative,38.html',
	'4.5' => 'http://rgaa.net/Pertinence-de-l-alternative-vide.html',
	'4.6' => 'http://rgaa.net/Longueur-du-contenu-des.html',
	'4.7' => 'http://rgaa.net/Existence-d-une-description-longue.html',
	'4.8' => 'http://rgaa.net/Pertinence-de-la-description.html',
	'4.9' => 'http://rgaa.net/Presence-de-l-attribut-longdesc.html',
	'4.10' => 'http://rgaa.net/Presence-d-une-information-de.html',
	'4.11' => 'http://rgaa.net/Coherence-dans-l-identification.html',
	'5.1' => 'http://rgaa.net/Acces-a-une-information.html',
	'5.2' => 'http://rgaa.net/Presence-de-la-transcription.html',
	'5.3' => 'http://rgaa.net/Pertinence-de-la-transcription.html',
	'5.4' => 'http://rgaa.net/Presence-d-une-description-audio.html',
	'5.5' => 'http://rgaa.net/Pertinence-de-la-description-audio.html',
	'5.6' => 'http://rgaa.net/Possibilite-de-controler-l.html',
	'5.7' => 'http://rgaa.net/Presence-d-une-description-audio,52.html',
	'5.8' => 'http://rgaa.net/Presence-d-une-description-audio,53.html',
	'5.9' => 'http://rgaa.net/Presence-du-sous-titrage.html',
	'5.10' => 'http://rgaa.net/Pertinence-du-sous-titrage.html',
	'5.11' => 'http://rgaa.net/Presence-d-une-alternative-aux.html',
	'5.12' => 'http://rgaa.net/Presence-d-une-alternative-aux,57.html',
	'5.13' => 'http://rgaa.net/Absence-d-elements-provoquant-des.html',
	'5.14' => 'http://rgaa.net/Absence-de-code-javascript,59.html',
	'5.15' => 'http://rgaa.net/Absence-de-mise-en-forme.html',
	'5.16' => 'http://rgaa.net/Compatibilite-des-elements.html',
	'5.17' => 'http://rgaa.net/Absence-totale-de-changements.html',
	'5.18' => 'http://rgaa.net/Presence-du-sous-titrage,63.html',
	'5.19' => 'http://rgaa.net/Absence-de-l-element-blink.html',
	'5.20' => 'http://rgaa.net/Absence-d-elements-provoquant-des,65.html',
	'5.21' => 'http://rgaa.net/Absence-de-code-javascript,66.html',
	'5.22' => 'http://rgaa.net/Absence-de-mise-en-forme,67.html',
	'5.23' => 'http://rgaa.net/Absence-d-element-marquee.html',
	'5.24' => 'http://rgaa.net/Absence-d-elements-affichant-des.html',
	'5.25' => 'http://rgaa.net/Absence-de-code-javascript,70.html',
	'5.26' => 'http://rgaa.net/Absence-de-mise-en-forme,71.html',
	'5.27' => 'http://rgaa.net/Independance-du-peripherique-d.html',
	'5.28' => 'http://rgaa.net/Presence-d-une-alternative-aux,73.html',
	'5.29' => 'http://rgaa.net/Absence-d-elements-declenchant-la.html',
	'5.30' => 'http://rgaa.net/Absence-d-element-bgsound.html',
	'5.31' => 'http://rgaa.net/Presence-de-version-en-langue-des.html',
	'5.32' => 'http://rgaa.net/Pertinence-de-la-version-en-langue.html',
	'5.33' => 'http://rgaa.net/Niveau-sonore-de-la-piste-de.html',
	'5.34' => 'http://rgaa.net/Presence-d-un-mecanisme-pour.html',
	'6.1' => 'http://rgaa.net/Acces-aux-liens-textuels-doublant.html',
	'6.2' => 'http://rgaa.net/Presence-d-un-avertissement.html',
	'6.3' => 'http://rgaa.net/Presence-d-un-avertissement,82.html',
	'6.4' => 'http://rgaa.net/Presence-d-un-avertissement,83.html',
	'6.5' => 'http://rgaa.net/Absence-d-ouverture-de-nouvelles.html',
	'6.6' => 'http://rgaa.net/Absence-de-piege-lors-de-la.html',
	'6.7' => 'http://rgaa.net/Absence-d-element-meta-provoquant.html',
	'6.8' => 'http://rgaa.net/Absence-de-code-javascript.html',
	'6.9' => 'http://rgaa.net/Absence-d-elements-provoquant-un.html',
	'6.10' => 'http://rgaa.net/Absence-d-element-meta-provoquant,89.html',
	'6.11' => 'http://rgaa.net/Absence-de-code-javascript,90.html',
	'6.12' => 'http://rgaa.net/Absence-d-elements-provoquant-une.html',
	'6.13' => 'http://rgaa.net/Possibilite-d-identifier-la.html',
	'6.14' => 'http://rgaa.net/Possibilite-d-identifier-la,93.html',
	'6.15' => 'http://rgaa.net/Coherence-de-la-destination-ou-de.html',
	'6.16' => 'http://rgaa.net/Absence-de-liens-sans-intitule.html',
	'6.17' => 'http://rgaa.net/Presence-d-une-page-contenant-le.html',
	'6.18' => 'http://rgaa.net/Coherence-du-plan-du-site.html',
	'6.19' => 'http://rgaa.net/Presence-d-un-acces-a-la-page.html',
	'6.20' => 'http://rgaa.net/Presence-d-un-fil-d-ariane.html',
	'6.21' => 'http://rgaa.net/Presence-de-menus-ou-de-barres-de.html',
	'6.22' => 'http://rgaa.net/Coherence-de-la-position-des-menus.html',
	'6.23' => 'http://rgaa.net/Coherence-de-la-presentation-des.html',
	'6.24' => 'http://rgaa.net/Navigation-au-clavier-dans-un.html',
	'6.25' => 'http://rgaa.net/Presence-d-un-avertissement,104.html',
	'6.26' => 'http://rgaa.net/Presence-des-informations-de.html',
	'6.27' => 'http://rgaa.net/Presence-des-informations-de-poids.html',
	'6.28' => 'http://rgaa.net/Presence-des-informations-de,107.html',
	'6.29' => 'http://rgaa.net/Presence-de-regroupement-pour-les.html',
	'6.30' => 'http://rgaa.net/Presence-d-un-balisage-permettant.html',
	'6.31' => 'http://rgaa.net/Presence-de-liens-d-evitement-ou-d.html',
	'6.32' => 'http://rgaa.net/Coherence-des-liens-d-evitement-ou.html',
	'6.33' => 'http://rgaa.net/Ordre-des-liens-d-evitement-ou-d.html',
	'6.34' => 'http://rgaa.net/Presence-d-un-moteur-de-recherche.html',
	'6.35' => 'http://rgaa.net/Possibilite-de-naviguer-facilement.html',
	'6.36' => 'http://rgaa.net/Presence-d-une-indication-de-la.html',
	'7.1' => 'http://rgaa.net/Absence-de-generation-de-contenus.html',
	'7.2' => 'http://rgaa.net/Absence-d-alteration-de-la.html',
	'7.3' => 'http://rgaa.net/Lisibilite-des-informations.html',
	'7.4' => 'http://rgaa.net/Absence-d-espaces-utilises-pour.html',
	'7.5' => 'http://rgaa.net/Absence-de-definition-d-une.html',
	'7.6' => 'http://rgaa.net/Possibilite-de-remplacer-les.html',
	'7.7' => 'http://rgaa.net/Possibilite-de-remplacer-les,122.html',
	'7.8' => 'http://rgaa.net/Absence-d-attributs-ou-d-elements.html',
	'7.9' => 'http://rgaa.net/Absence-d-elements-HTML-utilises-a.html',
	'7.10' => 'http://rgaa.net/Maintien-de-la-distinction.html',
	'7.11' => 'http://rgaa.net/Absence-de-suppression-de-l-effet.html',
	'7.12' => 'http://rgaa.net/Absence-de-justification-du-texte.html',
	'7.13' => 'http://rgaa.net/Lisibilite-du-document-en-cas-d.html',
	'7.14' => 'http://rgaa.net/Absence-d-unites-absolues-ou-de.html',
	'7.15' => 'http://rgaa.net/Absence-d-apparition-de-barre-de.html',
	'7.16' => 'http://rgaa.net/Largeur-des-blocs-de-textes.html',
	'7.17' => 'http://rgaa.net/Valeur-de-l-espace-entre-les.html',
	'7.18' => 'http://rgaa.net/Restitution-correcte-dans-les.html',
	'8.1' => 'http://rgaa.net/Mise-a-jour-des-alternatives-aux.html',
	'8.2' => 'http://rgaa.net/Universalite-du-gestionnaire-d.html',
	'8.3' => 'http://rgaa.net/Universalite-des-gestionnaires-d.html',
	'8.4' => 'http://rgaa.net/Possibilite-de-desactiver-toute.html',
	'8.5' => 'http://rgaa.net/Absence-de-changements-de-contexte.html',
	'8.6' => 'http://rgaa.net/Ordre-d-acces-au-clavier-aux.html',
	'8.7' => 'http://rgaa.net/Utilisation-correcte-du-role-des.html',
	'8.8' => 'http://rgaa.net/Presence-d-une-alternative-au-code.html',
	'8.9' => 'http://rgaa.net/Absence-de-suppression-du-focus.html',
	'8.10' => 'http://rgaa.net/Absence-de-limite-de-temps-pour.html',
	'8.11' => 'http://rgaa.net/Absence-de-perte-d-informations.html',
	'8.12' => 'http://rgaa.net/Presence-d-une-alternative-au-code,145.html',
	'8.13' => 'http://rgaa.net/Accessibilite-des-contenus.html',
	'9.1' => 'http://rgaa.net/Presence-de-la-declaration-d.html',
	'9.2' => 'http://rgaa.net/Conformite-de-la-position-de-la.html',
	'9.3' => 'http://rgaa.net/Conformite-syntaxique-de-la.html',
	'9.4' => 'http://rgaa.net/Validite-du-code-HTML-XHTML-au.html',
	'9.5' => 'http://rgaa.net/Absence-de-composants-obsoletes.html',
	'9.6' => 'http://rgaa.net/Presence-d-un-titre-dans-la-page.html',
	'9.7' => 'http://rgaa.net/Pertinence-du-titre-de-la-page.html',
	'9.8' => 'http://rgaa.net/Presence-d-une-langue-de.html',
	'10.1' => 'http://rgaa.net/Presence-d-au-moins-un-titre-de.html',
	'10.2' => 'http://rgaa.net/Pertinence-du-contenu-des-titres.html',
	'10.3' => 'http://rgaa.net/Absence-d-interruption-dans-la.html',
	'10.4' => 'http://rgaa.net/Presence-d-une-hierarchie-de.html',
	'10.5' => 'http://rgaa.net/Absence-de-simulation-visuelle-de.html',
	'10.6' => 'http://rgaa.net/Utilisation-systematique-de-listes.html',
	'10.7' => 'http://rgaa.net/Balisage-correct-des-listes-de.html',
	'10.8' => 'http://rgaa.net/Balisage-correct-des-citations.html',
	'10.9' => 'http://rgaa.net/Balisage-correct-des-abreviations.html',
	'10.10' => 'http://rgaa.net/Balisage-correct-des-acronymes.html',
	'10.11' => 'http://rgaa.net/Pertinence-de-la-version-non.html',
	'10.12' => 'http://rgaa.net/Pertinence-de-la-version-complete.html',
	'10.13' => 'http://rgaa.net/Accessibilite-des-documents.html',
	'11.1' => 'http://rgaa.net/Presence-des-balises-th-pour.html',
	'11.2' => 'http://rgaa.net/Presence-d-une-relation-entre-les.html',
	'11.3' => 'http://rgaa.net/Presence-d-une-relation-entre-les,170.html',
	'11.4' => 'http://rgaa.net/Absence-des-elements-propres-aux.html',
	'11.5' => 'http://rgaa.net/Absence-de-tableaux-de-donnees-ou.html',
	'11.6' => 'http://rgaa.net/Linearisation-correcte-des.html',
	'11.7' => 'http://rgaa.net/Presence-d-un-titre-pour-les.html',
	'11.8' => 'http://rgaa.net/Presence-d-un-resume-pour-les.html',
	'11.9' => 'http://rgaa.net/Pertinence-du-titre-du-tableau-de.html',
	'11.10' => 'http://rgaa.net/Pertinence-du-resume-du-tableau-de.html',
	'12.1' => 'http://rgaa.net/Presence-de-l-indication-des.html',
	'12.2' => 'http://rgaa.net/Presence-de-l-indication-des,179.html',
	'12.3' => 'http://rgaa.net/Equivalence-de-l-information-mise.html',
	'12.4' => 'http://rgaa.net/Presence-de-liens-ou-de.html',
	'12.5' => 'http://rgaa.net/Absence-de-syntaxes-cryptiques-par.html',
	'12.6' => 'http://rgaa.net/Presence-d-informations-sur-les.html',
	'12.7' => 'http://rgaa.net/Presence-d-un-moyen-de,184.html',
	'12.8' => 'http://rgaa.net/Presence-d-un-autre-moyen-que-la,185.html',
	'12.9' => 'http://rgaa.net/Presence-d-un-autre-moyen-que-la,186.html',
	'12.10' => 'http://rgaa.net/Utilisation-d-un-style-de.html'
);

	//return $matches[1];
	return '<a href="'.$rgaa[$matches[1]].'" lang="fr" hreflang="fr">'.$matches[1].'</a>';
}

// HTML code really beginning with body opening tag because of JS escaped characters not kept by PHP treatment... (do not copy head element, it lacks 2 script elements)
$from = <<<AWW


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!--

	This website is powered by Contao Open Source CMS :: Licensed under GNU/LGPL
	Copyright ©2005-2013 by Leo Feyer :: Extensions are copyright of their respective owners
	Visit the project website at http://www.contao.org for more information

//-->
<base href="http://accessiweb.org/"></base>
<title>AccessiWeb - AccessiWeb 2.2 English Version     </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<link rel="stylesheet" href="system/contao.css" type="text/css" media="screen" />
<!--[if lte IE 7]><link rel="stylesheet" href="system/iefixes.css" type="text/css" media="screen" /><![endif]-->
<link rel="stylesheet" href="tl_files/tinymce.css?1325838107" type="text/css" media="screen" />
<link href="system/print.css" rel="stylesheet" type="text/css" media="print" title="style par defaut"/>
<link rel="icon" type="image/png" href="tl_files/css/favicon.png" />
<script type="text/javascript" src="plugins/mootools/mootools-core.js?1.2.5"></script>
<script type="text/javascript" src="plugins/mootools/mootools-more.js?1.2.5.1"></script>
<link rel="alternate" href="actualites.xml" type="application/rss+xml" title="Actualit&eacute;s AccessiWeb" />
<link rel="alternate" href="formations.xml" type="application/rss+xml" title="Formations" />

</head>

<body id="top" class="referentiel">
<div id="deco1">
<div id="deco2">
<div id="wrapper">

<div id="header">
<div class="inside">

<a href="index.php/accueil.html"><span lang="fr">Retour au site AccessiWeb</span></a>
<h1><span lang="fr">Référentiel AccessiWeb 2.2</span></h1> 
</div>
</div>

<div id="container">
		
	
	<div id="main">
		<div class="inside">
			
<!-- indexer::stop -->
<div class="mod_customnav block">
<ul class="level_1">

<li class="centpourcent first"><a href="index.php/accessiweb_2.2_liste_generale.html"  class="centpourcent first"><span lang="fr">AccessiWeb 2.2 - Liste Générale</span></a></li>


<li class="centpourcent"><a href="index.php/accessiweb_2.2_liste_deployee.html"  class="centpourcent"><span lang="fr">AccessiWeb 2.2 - Liste Déployée</span></a></li>


<li class="centpourcent"><a href="index.php/glossaire_referentiel_2.2.html"  class="centpourcent"><span lang="fr">Glossaire du référentiel AccessiWeb 2.2</span></a></li>


<li class="centpourcent"><a href="index.php/errata_referentiel_accessiweb_2.2.html"  class="centpourcent"><span lang="fr">Errata du référentiel AccessiWeb 2.2</span></a></li>


<li class="centpourcent"><a href="index.php/changement_referentiel_accessiweb2.2.html"  class="centpourcent"><span lang="fr">Changement Référentiel AccessiWeb 2.2</span></a></li>


<li><a href="index.php/accessiweb-22-english-version.html" ><span lang="en">AccessiWeb 2.2 English Version</span></a></li>


<li class="last"><a href="index.php/glossary-76.html"  class="last"><span lang="en">Glossary</span></a></li>

</ul>
 


</div>
<!-- indexer::continue -->

<div class="mod_article block" id="accessiweb-22-english-version">

<h2 class="ce_headline">AccessiWeb 2.2 - English Version</h2>

<div id="navMenu" class="thematique">
			<h2>Table of Contents</h2>
			<ul>
				<li><a href="index.php/accessiweb-22-english-version.html#images">Images</a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#cadres">Frames</a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#couleurs">Colours </a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#multimedia">Multimedia</a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#tableaux">Tables</a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#liens">Links</a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#script">Scripts</a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#elements">Mandatory elements</a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#structure">Structuration of information </a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#presentation">Presentation of information</a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#formulaire">Forms</a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#navigation">Navigation</a></li>
				<li><a href="index.php/accessiweb-22-english-version.html#consultation">Consultation</a></li>
			</ul>
		</div>
<div id="intro" class="fdOpaque">
                       <h2>AccessiWeb, a methodology to verify conformance to Web Content Accessibility Guidelines 2.0</h2>
                       <h3>Summary</h3>
                       <p>In the French context, AccessiWeb 2.2 facilitates the understanding and implementation of the WCAG 2.0.</p>
                       <h3>Why AccessiWeb?</h3>
                       <p>WCAG (Web Content Accessibility Guidelines) is the international standard of the W3C for Web Content accessibility. This standard has been officially recognised by the European Commission who recommends that they are adopted in all member states of the community. The French administration has been referring to WCAG since 1999.</p>
                       <p>Nevertheless, WCAG, like all technical standards, make it necessary to develop implementation methodologies which are adapted to the activities they are supposed to monitor: developing Web applications, content creation, interface design, graphical design, conformance assessment...</p>
                       <p>Since 2003, the BrailleNet association has created and published the AccessiWeb methodology in order to allow a unified approach for checking the conformance to WCAG of Web services. This methodology aims an operational approach based on thematically organised criteria and goals that are described in the AccessiWeb reference list (images, frames, colours, multimedia, tables, links, scripts, mandatory items, information structure, information layout, forms, navigation and consultation).</p>
                       <h3>Goals of AccessiWeb 2.2</h3>
                       <p>BrailleNet with a working group of specialised experts had three goals in mind while creating this new reference list:</p>
                       <ul>
                       <li>Goal 1: ensuring an operational understanding of WCAG 2:
                       <ul>
                       <li>A list of related tests, referring very precisely to Web technologies, such as HTML tags/attributes, CSS properties, JavaScript functions...</li>
                       </ul>
                       </li>
                       <li>Goal 2: allowing to check the conformance to WCAG 2:
                       <ul>
                       <li>The reference list AccessiWeb 2.2 gives a strict mapping between the AccessiWeb criteria and the guidelines and success criteria of the WCAG 2.</li>
                       <li>The reference list AccessiWeb 2.2 includes exactly the three conformance priority levels of WCAG 2.0: A or AccessiWeb Bronze, AA
or AccessiWeb silver and AAA or AccessiWeb Gold</li>
                       <li>The AccessiWeb 2.2 reference list leads to raise a series of unambiguous questions for which the answer enables to determine if conformance to WCAG 2.0 has been met or not</li>
                       </ul>
                       </li>
                       <li>Goal 3: providing a methodology for the AccessiWeb:
                       <ul>
                       <li>The AccessiWeb 2.2 reference list has been written in order to be used in a certification process about the conformance of a Web service to WCAG 2</li>
                       </ul>
                       </li>
                       </ul>
</div>
<div class="thematique" id="images">
			<h2>Images</h2>
			<ul class="navTheme">
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#cadres"><em>Frames </em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principle: perceivable.</p>
<h3>Guideline:</h3>
<p>Give each <a href="index.php/glossary-76.html#mImgInfo">image that conveys information</a> a relevant <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a> and a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> if necessary. Replace images of text with styled text when possible.</p>
</div>
<h3 id="crit-1-1">Criterion 1.1 [Bronze] Does each image have a <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a>?</h3>
<ul class="tests">
		<li id="test-1-1-1">Test 1.1.1: Does each image (img tag) have an alt attribute?</li>
		<li id="test-1-1-2">Test 1.1.2: Does each <a href="index.php/glossary-76.html#mZone">area</a> (area tag) of an <a href="index.php/glossary-76.html#mImgReactive">image map</a> have an alt attribute?</li>
		<li id="test-1-1-3">Test 1.1.3: Does each form button (input tag with the type="image" attribute) have an alt attribute?</li>
		<li id="test-1-1-4">Test 1.1.4: Does each <a href="index.php/glossary-76.html#mImgApplet">applet image</a> (applet tag) have an alt attribute?</li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H35 - H36 - H37 - H53 - H24 - F65</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 4.1</li>
 </ul>
<h3 id="crit-1-2">Criterion 1.2 [Bronze] For each <a href="index.php/glossary-76.html#mImgDeco">decorative image</a> with a <a href="index.php/glossary-76.html#mAltTexteImg">text alternative </a>, is this alternative empty?</h3>
<ul class="tests">
		<li id="test-1-2-1">Test 1.2.1: For each <a href="index.php/glossary-76.html#mImgDeco">decorative image</a> (img tag) with an alt attribute, is the content of this attribute empty (alt="")?</li>
    	<li id="test-1-2-2">Test 1.2.2: For each <a href="index.php/glossary-76.html#mZoneNonCliquable">non clickable area</a> (area tag without href attribute), that does not convey information, and that has an alt attribute, is the content of this attribute empty (alt="")?</li>
		<li id="test-1-2-3">Test 1.2.3: For each <a href="index.php/glossary-76.html#mImgApplet">applet image</a> (applet tag) that does not convey information and that has an alt attribute, is the content of this attribute empty (alt="")?</li>
		<li id="test-1-2-4">Test 1.2.4: For each <a href="index.php/glossary-76.html#mImgObj">object image </a> (object tag with the attribute type="image/...") that does not convey information, is the <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a> between &lt;object&gt; and &lt;/object&gt; empty?</li>
		<li id="test-1-2-5">Test 1.2.5: Does each embedded image (embed tag with type="image/..." attribute) that does not convey information, pass one of the conditions below?
				<ul class="ssTests">
					<li>The noembed element is not on the page</li>
					<li>The noembed element does not contain any image description</li>
				</ul>
		</li>
 </ul>
 <h4>Maping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H67 - G196 - F39 - F38</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 4.5</li>
 </ul>

<h3 id="crit-1-3">Criterion 1.3 [Bronze] For each <a href="index.php/glossary-76.html#mImgInfo">image that conveys information</a> with a <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a>, is this alternative relevant (except in <a href="index.php/glossary-76.html#cpCrit1-3" title="Special cases for criterion 1.3">special cases</a>)?</h3>
<ul class="tests">
 <li id="test-1-3-1">Test 1.3.1: For each <a href="index.php/glossary-76.html#mImgInfo">image that conveys information</a> (img tag) with an alt attribute, is the content of this attribute relevant (except in <a href="index.php/glossary-76.html#cpCrit1-3" title="Special cases for criterion 1.3">special cases</a>)?</li>
 <li id="test-1-3-2">Test 1.3.2: For each <a href="index.php/glossary-76.html#mZone">area</a> (area tag) of an <a href="index.php/glossary-76.html#mImgReactive">image map</a>, that conveys information and has an alt attribute, is the content of this attribute relevant (except in <a href="index.php/glossary-76.html#cpCrit1-3" title="Special cases for criterion 1.3">special cases</a>)?</li>
 <li id="test-1-3-3">Test 1.3.3: For each button that is associated with an image (input tag with the attribute type="image") that has an alt attribute, is the content of this attribute relevant (except in <a href="index.php/glossary-76.html#CP1-3" title="Special cases for criterion 1.3">special cases</a>)?</li>
 <li id="test-1-3-4">Test 1.3.4: For each <a href="index.php/glossary-76.html#mImgApplet">applet image </a> (applet tag) that conveys information and that has an alt attribute, is the content of this attribute relevant (except in <a href="index.php/glossary-76.html#cpCrit1-3" title="Special cases for criterion 1.3">special cases</a>)?</li>
 <li id="test-1-3-5">Test 1.3.5: For each <a href="index.php/glossary-76.html#mImgObj">object image </a> (object tag with the attribute type="image/...") that conveys information and with a <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a>, is the <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a> between &lt;object&gt; and &lt;/object&gt; relevant (except in <a href="index.php/glossary-76.html#cpCrit1-3" title="Special cases for criterion 1.3">special cases</a>)?</li>
 <li id="test-1-3-6">Test 1.3.6: For each embedded image (embed tag with the attribute type="image/...") that conveys information and with a <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a>, is the <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a> between &lt;noembed&gt; and &lt;/noembed&gt; relevant (except in <a href="index.php/glossary-76.html#cpCrit1-3" title="Special cases for criterion 1.3">special cases</a>)?</li>
 <li id="test-1-3-7">Test 1.3.7: For each <a href="index.php/glossary-76.html#mImgInfo">image that conveys information</a> and with a <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a>, is <a href="index.php/glossary-76.html#maltCC">the text alternative short and concise</a> (except in <a href="index.php/glossary-76.html#cpCrit1-3" title="Special cases for criterion 1.3">special cases</a>)?</li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G94 - G95 - F30 - F71 - G196</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 4.3 - 4.4 - 4.6</li>
 </ul>
<h3 id="crit-1-4">Criterion 1.4 [Bronze] For each image used as <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> or as <a href="index.php/glossary-76.html#mImgTest">test image</a>, with a <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a>, does this alternative allow to identify the kind and the purpose of the image?</h3>
<ul class="tests">
		<li id="test-1-4-1">Test 1.4.1: For each image (img tag) used as <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> or as <a href="index.php/glossary-76.html#mImgTest">test image</a>, with an alt attribute, does the content of this attribute allow to identify the kind and the purpose of the image?</li>
		<li id="test-1-4-2">Test 1.4.2: For each <a href="index.php/glossary-76.html#mZone">area</a> (area tag) of an <a href="index.php/glossary-76.html#mImgReactive">image map</a>, used as <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> or as <a href="index.php/glossary-76.html#mImgTest">test image</a>, and with an alt attribute, does the content of this attribute allow to identify the kind and the purpose of the image?</li>

		<li id="test-1-4-3">Test 1.4.3: For each image (applet tag) used as <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> or as <a href="index.php/glossary-76.html#mImgTest">test image</a>, with an alt attribute, does the content of this attribute allow to identify the kind and the purpose of the image?</li>
		<li id="test-1-4-4">Test 1.4.4: For each button associated with an image (input tag with the attribute type="image") used as <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> or as <a href="index.php/glossary-76.html#mImgTest">test image</a>, with an alt attribute, does the content of this attribute allow to identify the kind and the purpose of the image?</li>
		<li id="test-1-4-5">Test 1.4.5: For each <a href="index.php/glossary-76.html#mImgObj">object image</a> (object tag with the attribute type="image/...") used as <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> or as <a href="index.php/glossary-76.html#mImgTest">test image</a>, and with a <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a>, does the <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a> between &lt;object&gt; and &lt;/object&gt; allow to identify the kind and the purpose of the image?</li>
		<li id="test-1-4-6">Test 1.4.6: For each embedded image (embed tag with the attribute type="image/...") used as <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> or as <a href="index.php/glossary-76.html#mImgTest">test image</a> and with a <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a>, does the <a href="index.php/glossary-76.html#mAltTexteImg">text alternative</a> between &lt;noembed&gt; and &lt;/noembed&gt;  allow to identify the kind and the purpose of the image?</li>
 </ul>
 <h4>Mapping with  <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G143 - G100</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 4.10</li>
 </ul>
<h3 id="crit-1-5">Criterion 1.5 [Bronze] For each image used as <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a>, is a solution for alternative access to the content or to the purpose of the <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> available?</h3>
<ul class="tests">
		<li id="test-1-5-1">Test 1.5.1: Does each image (img, area, applet, object, embed tags) used as <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> pass one of the conditions below?
				<ul class="ssTests">
					<li>Another form of <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> at least non grafic is available</li>
					<li>Another solution to access the secured functionality of the <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> is available</li>
				</ul>
		</li>
		<li id="test-1-5-2"> Test 1.5.2: Does each button associated with an image (input tag with the attribute type="image") used as <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> pass one of the conditions below?

		<ul class="ssTests">
					<li>Another form of <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> at least non graphic, is available</li>
					<li>Another solution to access the secured functionality of the <a href="index.php/glossary-76.html#mcaptcha">CAPTCHA</a> is available</li>

					</ul>
					</li>
 </ul>
 <h4>Mapping with  <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G144</li>
	<li><strong><abbr>RGAA</abbr> test</strong>:  4.10</li>
 </ul>
<h3 id="crit-1-6">Criterion 1.6 [Bronze] Does each <a href="index.php/glossary-76.html#mImgInfo">image that conveys information</a> have a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> if necessary?</h3>
<ul class="tests">
<li id="test-1-6-1"> Test 1.6.1: Does each <a href="index.php/glossary-76.html#mImgInfo">image that conveys information</a> (img tag) that needs a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a>, pass one of the conditions below?
 <ul class="ssTests">
					<li> A longdesc attribute providing the <a href="index.php/glossary-76.html#mUrl">url</a> of a page that contains the <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a>is available</li>
  				<li> An alt attribute that contains the reference to a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> just next to the image is available</li>
					<li> There is an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> allowing to access to the content of the <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a></li>
</ul>
</li>
<li id="test-1-6-2"> Test 1.6.2: Does each object image that conveys information (object tag with the attribute type="image/..."), that requires a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a>, pass one of the conditions below?
  <ul class="ssTests">
					<li> Between &lt;object&gt; and &lt;/object&gt; there is a reference to a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> available on the page</li>
					<li>An <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (via a <a href="index.php/glossary-76.html#mUrl">url</a> or an anchor) allowing to access to the content of the <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> is available</li>
	</ul>
	</li>
<li id="test-1-6-3"> Test 1.6.3: Does each <a href="index.php/glossary-76.html#mImgApplet">applet image</a> that conveys information (applet tag), requiring a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a>, pass one of the conditions below?
  <ul class="ssTests">
					<li> An alt attribute containing the reference to a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> just next to the image is available</li>
  				<li> Between &lt;applet&gt; and &lt;/applet&gt; there is a reference to a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> available on the page</li>
					<li> An <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (via a <a href="index.php/glossary-76.html#mUrl">url</a> or an anchor) allowing to access to the content of the <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> is available</li>
	</ul>
	</li>
<li id="test-1-6-4"> Test 1.6.4: Does each embedded image that conveys information (embed tag), requiring a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a>, pass one of the conditions below?
  <ul class="ssTests">
					<li> Between &lt;noembed&gt; and &lt;/noembed&gt; there is a reference to a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> available on the page</li>
  				<li> An <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (via a <a href="index.php/glossary-76.html#mUrl">url</a> or an anchor) allowing to access to the content of the <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> is available</li>
	</ul>
	</li>
<li id="test-1-6-5"> Test 1.6.5: Does each image form button (input tag with the attribute type="image", requiring a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a>, pass one of the conditions below?
  <ul class="ssTests">
					<li> An alt attribute containing the reference to a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> just next to the image is available</li>
  				<li> An <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (via a <a href="index.php/glossary-76.html#mUrl">url</a> or an anchor) allowing to access to the content of the <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> is available</li>
	</ul>
	</li>
 </ul>
 <h4>Mapping with  <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G92 - G74 - G73 - H45</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 4.7 - 4.9</li>
 </ul>
<h3 id="crit-1-7">Criterion 1.7 [Bronze] For each <a href="index.php/glossary-76.html#mImgInfo">image that conveys information</a> with a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a>, is this description relevant?</h3>
<ul class="tests">
		<li id="test-1-7-1">Test 1.7.1: Does each <a href="index.php/glossary-76.html#mImgInfo">image that conveys information</a> (img tag or input as image) with a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> pass one of the conditions below?
   <ul class="ssTests">
					<li> The <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> via the url referred by the longdesc attribute is relevant</li>
          <li> the <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> on the page and identified in the alt attribute is relevant</li>
          <li> The <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> is relevant</li>
</ul>
</li>

<li id="test-1-7-2"> Test 1.7.2: Does each <a href="index.php/glossary-76.html#mImgObj">object image</a> (object tag with the attribute type="image/...") with a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> pass one of the conditions below?
  <ul class="ssTests">
					<li> The <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> available on the page and indicated between &lt;object&gt; and &lt;/object&gt;, is relevant</li>
          <li> The <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> is relevant</li>
	</ul>
</li>
<li id="test-1-7-3"> Test 1.7.3: Does each embedded image (embed tag with the attribute type="image/...") with a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> pass one of the conditions below?
  <ul class="ssTests">
					<li> the <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> available on the page and indicated between &lt;noembed&gt; and &lt;/noembed&gt; is relevant</li>
          <li> The <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> is relevant</li>
	 </ul>
</li>
 <li id="test-1-7-4">Test 1.7.4: Does each <a href="index.php/glossary-76.html#mImgApplet">applet image</a> (applet tag) with a <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> pass one of the conditions below?
   <ul class="ssTests">
					<li> The <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> that is available on the page and indicated between &lt;applet&gt; and &lt;/applet&gt; is relevant</li>
   				<li> The <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> that is available on the page and indicated in the alt attribute is relevant</li>
  				<li> The <a href="index.php/glossary-76.html#mDescDetaillee">detailed description</a> is accessible via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> and is relevant</li>
	</ul>
</li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  F67</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 4.8</li>
 </ul>
<h3 id="crit-1-8">Criterion 1.8 [Silver] When an alternate mechanism is missing, each <a href="index.php/glossary-76.html#mImgText">image of text</a> must be replaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a>, if possible. Does this rule have been followed (<a href="index.php/glossary-76.html#cpCrit1-8"
title="Special cases for criterion 1.8">except in special cases</a>)?</h3>
<ul class="tests">
<li id="test-1-8-1"> Test 1.8.1: When an <a href="index.php/glossary-76.html#mMecaRempl">alternate mechanism</a> is missing, each <a href="index.php/glossary-76.html#mImgText">image of text</a> (img tag) must be replaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a>, if possible. Does this rule have been followed (<a href="index.php/glossary-76.html#cpCrit1-8"
title="Special cases for criterion 1.8">except in special cases</a>)?</li>
<li id="test-1-8-2"> Test 1.8.2: For each <a href="index.php/glossary-76.html#mImgReactive">image map</a> (img tag or object with the usemap attribute), when an <a href="index.php/glossary-76.html#mMecaRempl">alternate mechanism</a> is missing, each <a href="index.php/glossary-76.html#mZoneTexte">text area</a> (area tag) must be replaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a> if possible. Does this rule have been followed (<a href="index.php/glossary-76.html#cpCrit1-8"
title="Special cases for criterion 1.8">except in special cases</a>)?</li>
<li id="test-1-8-3"> Test 1.8.3: For each form tag, when an <a href="index.php/glossary-76.html#mMecaRempl">alternate mechanism</a> is missing, each button "image of text" (input tag with the attribute type="image") must be replaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a>, if possible. Does this rule have been followed (<a href="index.php/glossary-76.html#cpCrit1-8"
title="Special cases for criterion 1.8">except in special cases</a>)?</li>
<li id="test-1-8-4"> Test 1.8.4: When an <a href="index.php/glossary-76.html#mMecaRempl">alternate mechanism</a> is missing, each <a href="index.php/glossary-76.html#mImgTextApplet">applet image of text</a> (applet tag) must be replaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text </a> if possible. Does this rule have been followed (<a href="index.php/glossary-76.html#cpCrit1-8"
title="Special cases for criterion 1.8">except in special cases</a>)?</li>
<li id="test-1-8-5"> Test1.8.5: When an <a href="index.php/glossary-76.html#mMecaRempl">alternate mechanism</a> is missing, each <a href="index.php/glossary-76.html#mImgTextObj">object image of text</a> (object tag with the attribute type="image/...") must be replaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text </a> if possible. Does this rule have been followed (<a href="index.php/glossary-76.html#cpCrit1-8"
title="Special cases for criterion 1.8">except in special cases</a>)?</li>
<li id="test-1-8-6"> Test 1.8.6: When an <a href="index.php/glossary-76.html#mMecaRempl">alternate mechanism</a> is missing, each embedded image of text (embed tag with the attribute type="image/...") must be rreplaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a> if possible. Does this rule have been followed (<a href="index.php/glossary-76.html#cpCrit1-8"
title="Special cases for criterion 1.8">except in special cases</a>)?</li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.5</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G140 - C22 - C30</li>
	<li><strong><abbr>RGAA</abbr> test</strong>:  7.6</li>
 </ul>
<h3 id="crit-1-9">Criterion 1.9 [Gold] Each <a href="index.php/glossary-76.html#mImgText">image of text</a> must be rreplaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a>. Does this rule have been followed (<a 
href="index.php/glossary-76.html#cpCrit19-" title="Special cases for criterion 1.9">except in special cases</a>)?</h3>
<ul class="tests">
<li id="test-1-9-1"> Test1.9.1: Each <a href="index.php/glossary-76.html#mImgText">image of text</a> (img tag) must be rreplaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a> if possible. Does this rule have been followed (<a 
href="index.php/glossary-76.html#cpCrit19-" title="Special cases for criterion 1.9">except in special cases</a>)?</li>
<li id="test-1-9-2"> Test 1.9.2: For each <a href="index.php/glossary-76.html#mImgReactive">image map</a> (img tag or object with the usemap attribute), each <a href="index.php/glossary-76.html#mZoneTexte">text area</a> (area tag) must be rreplaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a> if possible. Does this rule have been followed (<a 
href="index.php/glossary-76.html#cpCrit19-" title="Special cases for criterion 1.9">except in special cases</a>)?</li>
<li id="test-1-9-3"> Test 1.9.3: For each form tag, each button "image of text" (input tag with the attribute type="image") must be rreplaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a> if possible. Does this rule have been followed (<a 
href="index.php/glossary-76.html#cpCrit19-" title="Special cases for criterion 1.9">except in special cases</a>)?</li>
<li id="test-1-9-4"> Test 1.9.4: Each <a href="index.php/glossary-76.html#mImgTextApplet">text image applet</a> (applet tag) must be rreplaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a> if possible. Does this rule have been followed (<a 
href="index.php/glossary-76.html#cpCrit19-" title="Special cases for criterion 1.9">except in special cases</a>)?</li>
<li id="test-1-9-5"> Test 1.9.5: Each <a href="index.php/glossary-76.html#mImgTextObj">text image object</a> (object tag with the attribute type="image/...") must be rreplaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a> if possible. Does this rule have been followed (<a 
href="index.php/glossary-76.html#cpCrit19-" title="Special cases for criterion 1.9">except in special cases</a>)?</li>
<li id="test-1-9-6"> Test 1.9.6: Each embedded image of text (embed tag with the attribute type="image/...") must be replaced with <a href="index.php/glossary-76.html#mTexteStyle">styled text</a>. Does this rule have been followed (<a 
href="index.php/glossary-76.html#cpCrit19-" title="Special cases for criterion 1.9">except in special cases</a>)?</li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.9</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G140 - C22 - C30</li>
	<li><strong><abbr>RGAA</abbr> test</strong>:  7.7</li>
 </ul>			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
<div class="thematique" id="cadres">
			<h2>Frames </h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#images"><em>Images</em></a></li>
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#couleurs"><em>Colours</em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principle: robust.</p>
<h3>Guideline:</h3>
<p>Provide each <a href="index.php/glossary-76.html#mCadre">frame</a> and each <a href="index.php/glossary-76.html#mCadreEnLigne">iframe</a> with a relevant title.</p>
</div>
<h3 id="crit-2-1">Criterion 2.1 [Bronze] Does each <a href="index.php/glossary-76.html#mCadre">frame</a> and each <a href="index.php/glossary-76.html#mCadreEnLigne">iframe</a> have a <a href="index.php/glossary-76.html#mTitreCadre">frame title</a>?</h3>
<ul class="tests">
		<li id="test-2-1-1">Test 2.1.1: Does each <a href="index.php/glossary-76.html#mCadre">frame</a> (frame tag) have a title attribute?</li>
<li id="test-2-1-2">Test 2.1.2: Does each <a href="index.php/glossary-76.html#mCadreEnLigne">iframe</a> (iframe tag) have a title attribute?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0</strong> success criterion:  4.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  H64</li>
	<li><strong><abbr>RGAA</abbr> test</strong>:  1.1</li>
 </ul>
<h3 id="crit-2-2">Criterion 2.2 [Bronze] For each <a href="index.php/glossary-76.html#mCadre">frame</a> and each <a href="index.php/glossary-76.html#mCadreEnLigne">iframe</a> with a frame title, is this <a href="index.php/glossary-76.html#mTitreCadre">frame title</a> relevant?</h3>
<ul class="tests">
		<li id="test-2-2-1"> Test 2.2.1: For each <a href="index.php/glossary-76.html#mCadre">frame</a> (frame tag) with a title attribute, is the content of this attribute relevant?</li>
		<li id="test-2-2-2"> Test 2.2.2: For each <a href="index.php/glossary-76.html#mCadreEnLigne">iframe</a> (iframe tag) with a title attribute, is the content of this attribute relevant?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  4.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  H64</li>
	<li><strong><abbr>RGAA</abbr> test</strong>:  1.2</li>
 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
<div class="thematique" id="couleurs">
			<h2>Colours</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#cadres"><em>Frames </em></a></li>
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#multimedia"><em>Multimedia</em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principle: perceivable.</p>
<h3>Guideline:</h3>
<p>Do not provide <a href="index.php/glossary-76.html#mInfoCouleur">information</a> only with colour and use colour contrasts that are high enough.</p>
</div>
<h3 id="crit-3-1">Criterion 3.1 [Bronze] On each Web page, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been followed?</h3>
<ul class="tests">
		<li id="test-3-1-1"> Test 3.1.1: For each word or for each group of words where colour is used to convey <a href="index.php/glossary-76.html#mInfoCouleur">information</a>, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been followed?</li>
		<li id="test-3-1-2"> Test 3.1.2: For each colour indication provided by a text, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been followed?</li>
		<li id="test-3-1-3"> Test 3.1.3: For each image in the source code <a href="index.php/glossary-76.html#mInfoDonneeCouleur">that conveys information</a>, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been followed?</li>
		<li id="test-3-1-4"> Test 3.1.4: For each <a href="index.php/glossary-76.html#mPropCouleur">CSS property that specifies a colour</a> and that conveys <a href="index.php/glossary-76.html#mInfoCouleur">information</a>, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> must not be provided only by colour. Does this rule have been followed?</li>
		<li id="test-3-1-5"> Test 3.1.5: For each <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> that conveys <a href="index.php/glossary-76.html#mInfoCouleur">information</a>, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been followed?</li>
		<li id="test-3-1-6"> Test 3.1.6: For each <a href="index.php/glossary-76.html#mMediaNoTemp">time-based media</a> that conveys <a href="index.php/glossary-76.html#mInfoCouleur">information</a>, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been followed?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>:  1.4.1 - 1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G14 - G122 - G182 - G111 - G138</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>:  2.1 - 2.2 - 2.3 - 2.4</li>
 </ul>
<h3 id="crit-3-2">Criterion 3.2 [Bronze] On each Web page, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been implemented in a <a href="index.php/glossary-76.html#mPertinence">relevant</a> way?</h3>
<ul class="tests">
<li id="test-3-2-1"> Test 3.2.1: For each <a href="index.php/glossary-76.html#mInfoCouleur">information</a> conveyed by colour for a word or a group of words, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been implemented in a <a href="index.php/glossary-76.html#mPertinence">relevant</a> way?</li>
<li id="test-3-2-2"> Test 3.2.2: For each <a href="index.php/glossary-76.html#mInfoCouleur">information</a> conveyed by colour and specified by a word or a group of words, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been implemented in a <a href="index.php/glossary-76.html#mPertinence">relevant</a> way?</li>
<li id="test-3-2-3"> Test 3.2.3: For each image <a href="index.php/glossary-76.html#mInfoDonneeCouleur">that conveys information</a>, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been implemented in a <a href="index.php/glossary-76.html#mPertinence">relevant</a> way?</li>
<li id="test-3-2-4"> Test 3.2.4: For each CSS element background property that conveys <a href="index.php/glossary-76.html#mInfoCouleur">information</a>, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been implemented in a <a href="index.php/glossary-76.html#mPertinence">relevant</a> way?</li>
<li id="test-3-2-5"> Test 3.2.5: For each <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> that conveys <a href="index.php/glossary-76.html#mInfoCouleur">information</a>, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been implemented in a <a href="index.php/glossary-76.html#mPertinence">relevant</a> way?</li>
<li id="test-3-2-6"> Test 3.2.6: For each <a href="index.php/glossary-76.html#mMediaNoTemp">non time-based media</a> that conveys <a href="index.php/glossary-76.html#mInfoCouleur">information</a>, <a href="index.php/glossary-76.html#mInfoCouleur">information</a> does not have to be provided only by colour. Does this rule have been implemented in a <a href="index.php/glossary-76.html#mPertinence">relevant</a> way?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F13</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: -</li>
 </ul>
<h3 id="crit-3-3">Criterion 3.3 [Silver] On each Web page, is the <a href="index.php/glossary-76.html#mContraste">contrast</a> between text colour and the colour of text background high enough (<a href="index.php/glossary-76.html#cpCrit3-" title="Special cases for criterion 3.3">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-3-3-1"> Test 3.3.1: On each Web page, <a href="index.php/glossary-76.html#mTailleCaractère"><strong>until 150%</strong> of the default font size</a> (or 1.5em), do text and image of text without bolding pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit3-" title="Special cases for criterion 3.3">except in special cases</a>)?
 <ul class="ssTests">
 		 			<li> The contrast ratio between text and its background is at least 4.5:1</li>
					<li> a mechanism allows the user to display text with a contrast ratio of at least 4.5:1</li>
</ul>
</li>
<li id="test-3-3-2"> Test 3.3.2: On each Web page, <a href="index.php/glossary-76.html#mTailleCaractère"><strong>until 120%</strong> of the default font size</a> (or 1.2em), does bold text and image of text pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit3-" title="Special cases for criterion 3.3">except in special cases</a>)?
  <ul class="ssTests">
					<li> The contrast ratio between text and its background is at least 4.5:1</li>
<li>a mechanism allows the user to display text with a contrast ratio of at least 4.5:1</li>
</ul>
</li>
<li id="test-3-3-3">Test 3.3.3: On each Web page, <a href="index.php/glossary-76.html#mTailleCaractère"><strong>from 150%</strong> of the default font size</a> (or 1.5em), do text and image of text without bolding pass one of the conditions below(<a href="index.php/glossary-76.html#cpCrit3-" title="Special cases for criterion 3.3">except in special cases</a>)?
 <ul class="ssTests">
					<li> the contrast ratio between text and its background is at least 3:1</li>
  <li>a mechanism allows the user to display text with a contrast ratio of at least 3:1</li>
	</ul>
	</li>
<li id="test-3-3-4"> Test 3.3.4: On each Web page, <a href="index.php/glossary-76.html#mTailleCaractère"><strong>from 120%</strong> of the default font size</a> (or 1.2em), do bold text and image of text pass one of the conditions below(<a href="index.php/glossary-76.html#cpCrit3-" title="Special cases for criterion 3.3">except in special cases</a>)?
 <ul class="ssTests">
					<li> The contrast ratio between text and its background is at least 3:1</li>
 <li> a mechanism allows the user to display text with a contrast ratio of at least 3:1</li>
 </ul>
 </li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  1.4.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G18 - G174 - G145 - F83</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 2.5 - 2.6 - 2.7 - 2.8 - 2.9 - 2.10</li>
 </ul>
<h3 id="crit-3-4">Criterion 3.4 [Gold] On each Web page, is the <a href="index.php/glossary-76.html#mContraste">contrast</a> between text colour and the colour of its background enhanced (<a href="index.php/glossary-76.html#cpCrit3-" title="Special cases for criterion 3.4">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-3-4-1"> Test 3.4.1: On each Web page, <strong>until 150%</strong> of the <a href="index.php/glossary-76.html#mTaillePolice">default font size</a> (or 1.5em), do text and image of text without bolding pass one of the conditions below(<a href="index.php/glossary-76.html#cpCrit3-" title="Special cases for criterion 3.4">except in special cases</a>)?
 <ul class="ssTests">
 		 			<li> the contrast ratio between text and its background is at least 7:1</li>
					<li> a mechanism allows the user to display text with a contrast ratio of at least 7:1</li>
</ul>
</li>
<li id="test-3-4-2"> Test 3.4.2: On each Web page, <strong>until 120%</strong> of the <a href="index.php/glossary-76.html#mTaillePolice">default font size</a> (or 1.2em), do bold text and image of text pass one of the conditions below(<a href="index.php/glossary-76.html#cpCrit3-" title="Special cases for criterion 3.4">except in special cases</a>)?
  <ul class="ssTests">
					<li> the contrast ratio between text and its background is at least 7:1</li>
<li>a mechanism allows the user to display text with a contrast ratio of at least 7:1</li>
</ul>
</li>
<li id="test-3-4-3">Test 3.4.3: On each Web page, <strong>from 150%</strong> of the <a href="index.php/glossary-76.html#mTaillePolice">default font size</a> (or 1.5em), do text and image of text without bolding pass one of the conditions below(<a href="index.php/glossary-76.html#cpCrit3-" title="Special cases for criterion 3.4">except in special cases</a>)?
 <ul class="ssTests">
					<li> the contrast ratio between text and its background is at least 4,5:1</li>
  <li>a mechanism allows the user to display text with a contrast ratio of at least 4,5:1</li>
	</ul>
	</li>
<li id="test-3-4-4"> Test 3.4.4: On each Web page, <strong>from 120%</strong> of the <a href="index.php/glossary-76.html#mTaillePolice">default font size</a> (or 1.2em), do bold text and image of text pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit3-" title="Special cases for criterion 3.4">except in special cases</a>)?
 <ul class="ssTests">
					<li> the contrast ratio between text and its background is at least 4,5:1</li>
 <li> a mechanism allows the user to display text with a contrast ratio of at least 4,5:1</li>
 </ul>
 </li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  1.4.6</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G17 - G18 - G174 - F83</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>:  2.11 - 2.12 - 2.13 - 2.14 - 2.15 - 2.16</li>
 </ul>			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
<div class="thematique" id="multimedia">
			<h2>Multimedia</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#couleurs"><em>Colours</em></a></li>
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#tableaux"><em>Tables</em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principles: perceivable, operable, robust.</p>
<h3>Guideline:</h3>
<p>If necessary, provide each time-based media with relevant <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a>, <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> and synchronised audio description.
Provide each non time-based media with a relevant text alternative.
Make possible the <a href="index.php/glossary-76.html#mControleConsult">viewing control</a> of each time-based and non time-based media with the keyboard and ensure that they are supported with assistive technologies.</p></div>
<h3 id="crit-4-1">Criterion 4.1 [Bronze] Does each prerecorded <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> have a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> or an audio description if necessary (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.1">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-4-1-1"> Test 4.1.1: Does each prerecorded audio-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below if necessary (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.1">except in special cases</a>)?
		<ul class="ssTests">
		<li>There is a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that is accessible via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
<li>There is an adjacent <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that can be clearly identified</li>
</ul>
</li>
<li id="test-4-1-2"> Test 4.1.2: Does each prerecorded video-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.1">except in special cases</a>)?
 <ul class="ssTests">
		<li>There is a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that is accessible via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
<li>There is an adjacent <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that can be clearly identified</li>
<li> A synchronised  <a href="index.php/glossary-76.html#mAudioDesc">audio description</a> is available</li>
          <li> There is an alternative version with a synchronised audio description that is accessible via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
<li> There is an alternative audio-only version that is accessible
via an <a href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
	</ul>
	</li>
<li id="test-4-1-3">Test 4.1.3: Does each prerecorded synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.1">except in special cases</a>)?
  <ul class="ssTests">
		<li>There is a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that is accessible via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
<li>There is an adjacent <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that can be clearly identified</li>
<li> A synchronised  <a href="index.php/glossary-76.html#mAudioDesc">audio description</a> is available</li>
          <li> There is an alternative version with a synchronised audio description that is accessible via an <a href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
</ul>
</li>
<li id="test-4-1-4">Test 4.1.4: Does each prerecorded <a
href="index.php/glossary-76.html#mMediaTemp">time-based media
 </a> that is embedded via &lt;object&gt; or &lt;embed&gt;
 and that requires a <a
href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> pass one of the conditions below (<a
href="index.php/glossary-76.html#cpCrit4-"
 title="Special cases for criterion 4.1">except in special cases</a>)?
				<ul class="ssTests">
				 <li>A reference to the <a
href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> via a link or an anchor is available between &lt;object&gt; and &lt;/object&gt;</li>
	<li>A reference to the <a
href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> via a link or an anchor is available between &lt;noembed&gt; and &lt;/noembed&gt;</li>
</ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.2.1 - 1.2.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G58 - G69 - G78 - G158 - G159 - G173 - G8 - G166 - SM6 - SM7</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 5.2 - 5.4</li>
 </ul>
<h3 id="crit-4-2">Criterion 4.2 [Bronze] For each prerecorded <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> or a synchronised audio description, are these relevant (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.2">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-4-2-1">Test 4.2.1: For each prerecorded audio-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a>, is this transcript relevant (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.2">except in special cases</a>)?
</li>
<li id="test-4-2-2">Test 4.2.2: Does each prerecorded video-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.2">except in special cases</a>)?
<ul class="ssTests">
					<li>The <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> is relevant</li>
          <li>The synchronised <a href="index.php/glossary-76.html#mAudioDesc">audio description</a> is relevant</li>
 					<li>The synchronised <a href="index.php/glossary-76.html#mAudioDesc">audio description</a> of the alternative version is relevant</li>
	</ul>
	</li>
<li id="test-4-2-3"> Test 4.2.3: Does each prerecorded synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.2">except in special cases</a>)?
  <ul class="ssTests">
		  <li>The <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> is relevant</li>
          <li>The synchronised <a href="index.php/glossary-76.html#mAudioDesc">audio description</a> is relevant</li>
          <li>The synchronised <a href="index.php/glossary-76.html#mAudioDesc">audio description</a> of the alternative version is relevant</li>
	</ul>
	</li>
	</ul>
	<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.2.1 - 1.2.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  F30 - F67 - SM6 - SM7</li>
	<li><strong><abbr>RGAA</abbr> test</strong>:  5.3</li>
 </ul>
<h3 id="crit-4-3">Criterion 4.3 [Bronze] Does each prerecorded synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> have <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> if necessary (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.3">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-4-3-1">Test 4.3.1: Does each prerecorded synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.3">except in special cases</a>)?
		<ul class="ssTests">
			<li>The synchronised <a
href="index.php/glossary-76.html#mMediaTemp">time-based media</a> has <a
href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a></li>
						<li>there is an alternative version with <a
href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> that is accessible via an <a
href="index.php/glossary-76.html#mLienAdj">
adjacent link</a> (an url or an anchor)</li>
				</ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.2.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G93 - G87 - SM11 - SM12 - F74 - F75</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.9</li>
 </ul>
<h3 id="crit-4-4">Criterion 4.4 [Bronze] For each prerecorded synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a>, are these captions relevant?</h3>
<ul class="tests">
		<li id="test-4-4-1"> Test 4.4.1: For each prerecorded synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a>, are these captions relevant?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  1.2.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F8 - F74 - F75 - SM11 - SM12</li>
	<li><strong><abbr>RGAA</abbr> test</strong> : 5.10</li>
 </ul>
<h3 id="crit-4-5">Criterion 4.5 [Silver] does each live <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> have <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> or a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> if necessary (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.5">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-4-5-1"> Test 4.5.1: Does each live audio-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.5">except in special cases</a>)?
 <ul class="ssTests">
					<li> <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> are available</li>
          <li> There is a version with <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> that is accessible via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
          <li> there is a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that is accessible via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
<li>There is an adjacent <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that can be clearly identified</li>
	</ul>
	</li>

<li id="test-4-5-2"> Test 4.5.2: Does each synchronised live <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.5">except in special cases</a>)?
 <ul class="ssTests">
					<li> <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> are available</li>
          <li> There is a version with <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> that is accessible via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
          <li> there is a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that is accessible via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
<li>There is an adjacent <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that can be clearly identified</li>
</ul>
</li>
<li id="test-4-5-3">Test 4.5.3: Does each synchronised or audio-only <a
href="index.php/glossary-76.html#mMediaTemp">time-based media
 </a> that is embedded via &lt;object&gt; or &lt;embed&gt;
 and that requires a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> pass one of the conditions below (<a
href="index.php/glossary-76.html#cpCrit4-"
 title="Special cases for criterion 4.5">except in special cases</a>)?
				<ul class="ssTests">
				 <li>A reference to the <a
href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> via a link or an anchor is available between &lt;object&gt; and &lt;/object&gt;</li>
	<li>A reference to the <a
href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> via a link or an anchor is available between &lt;noembed&gt; and &lt;/noembed&gt;</li>
</ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.2.4 - 1.2.9</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G9 - G150 - G151 - G157 - SM11 - SM12</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.18</li>
 </ul>
<h3 id="crit-4-6">Criterion 4.6 [Silver] For each live <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> or with a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a>, are these relevant?</h3>
<ul class="tests">
		<li id="test-4-6-1"> Test 4.6.1: Does each audio-only live <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below?
  <ul class="ssTests">
					<li> The <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> are relevant</li>
 					<li> The <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> of the alternative version are relevant</li>
  				<li> The <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> is relevant</li>
	</ul></li>
<li id="test-4-6-2"> Test 4.6.2: Does each synchronised live <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below?
 <ul class="ssTests">
  <li> The <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> are relevant</li>
  <li> The <a href="index.php/glossary-76.html#mSsTitreSynchro">synchronised captions</a> of the alternative version are relevant</li>
  <li> The <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> is relevant</li>
	</ul>
	</li>
	</ul>
	<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.2.4 - 1.2.9</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  F8</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.10</li>
 </ul>
<h3 id="crit-4-7">Criterion 4.7 [Silver] Does each prerecorded <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> have a synchronised <a href="index.php/glossary-76.html#mAudioDesc">audio description</a> if necessary (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.7">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-4-7-1"> Test 4.7.1 : Does each video-only prerecorded <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below, if necessary (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.7">except in special cases</a>?
   		<ul class="ssTests">
   			<li>A synchronised <a href="index.php/glossary-76.html#mAudioDesc">audio description</a> is available</li>
   			 <li>an alternative version  with a synchronised <a href="index.php/glossary-76.html#mAudioDesc">audio description</a> is available</li>
		</ul></li>
		<li id="test-4-7-2"> Test 4.7.2 : Does each prerecorded synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.7">except in special cases</a>)?
   		<ul class="ssTests">
   			<li>A track for the synchronised <a href="index.php/glossary-76.html#mAudioDesc">audio description</a> is available</li>
   			 <li>An alternative version with a synchronised <a href="index.php/glossary-76.html#mAudioDesc">audio description</a> is available</li>
		</ul></li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.2.5</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G8 - G78 - G173 - SM1 - SM2 - SM6 - SM7</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.8</li>
 </ul>
<h3 id="crit-4-8">Criterion 4.8 [Silver] For each prerecorded <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a synchronised audio description, is this audio description relevant?</h3>
<ul class="tests">
		<li id="test-4-8-1"> Test 4.8.1: For each prerecorded video-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a synchronised <a href="index.php/glossary-76.html#mAudioDesc">audio description</a>, is this audio description relevant?</li>
		<li id="test-4-8-2"> Test 4.8.2: For each synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a synchronised <a href="index.php/glossary-76.html#mAudioDesc">audio description</a>, is this audio description relevant?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.2.5</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: SM1 - SM2 - SM6 - SM7</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.5</li>
 </ul>
<h3 id="crit-4-9">Criterion 4.9 [Gold] Does each prerecorded <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> have a sign language interpretation (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.9">except in special cases</a>)  if necessary?</h3>
<ul class="tests">
		<li id="test-4-9-1"> Test 4.9.1: Does each prerecorded audio-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> have a sign language interpretation if necessary, that is adapted to the media language (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.9">except in special cases</a>)?</li>
    <li id="test-4-9-2"> Test 4.9.2: Does each prerecorded synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> have a sign language interpretation, if necessary, that is adapted to the media language (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.9">except in special cases</a>)?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.2.6</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G54 - G81 - SM13 - SM14 </li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.31</li>
 </ul>
<h3 id="crit-4-10">Criterion 4.10 [Gold] For each prerecorded <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a sign language interpretation is this interpretation relevant?</h3>
<ul class="tests">
<li id="test-4-10-1"> Test 4.10.1: For each prerecorded audio-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a sign language interpretation , is this interpretation relevant?
</li>
		<li id="test-4-10-2"> Test 4.10.2: For each prerecorded synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a sign language interpretation, is this interpretation relevant?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.2.6</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:   -</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.32</li>
 </ul>
<h3 id="crit-4-11">Criterion 4.11 [Gold] Does each prerecorded <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> have a synchronised <a href="index.php/glossary-76.html#mAudioDescE">extended audio description</a> if necessary (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.11">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-4-11-1"> Test 4.11.1: Does each prerecorded synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below, if necessary? (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.11">except in special cases</a>)
 <ul class="ssTests">
	<li> A synchronised <a href="index.php/glossary-76.html#mAudioDescE">extended audio description</a> is available</li>
  <li> An alternative version with a synchronised <a href="index.php/glossary-76.html#mAudioDescE">extended audio description</a> is available</li>
  </ul>
	</li>
<li id="test-4-11-2"> Test 4.11.2: Does each prerecorded video-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below, if necessary? (<a href="index.php/glossary-76.html#cpCrit4-" title="Special cases for criterion 4.11">except in special cases</a>)
  <ul class="ssTests">
	<li> A synchronised <a href="index.php/glossary-76.html#mAudioDescE">extended audio description</a> is available</li>
  <li> An alternative version with a synchronised <a href="index.php/glossary-76.html#mAudioDescE">extended audio description</a> is available</li>
	</ul>
	</li>
	</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.2.7</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G8 - SM1 - SM2</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.7</li>
 </ul>
<h3 id="crit-4-12">Criterion 4.12 [Gold] For each prerecorded <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a synchronised extended audio description, is this audio description relevant?</h3>
<ul class="tests">
<li id="test-4-12-1"> Test 4.12.1: For each prerecorded synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a synchronised <a href="index.php/glossary-76.html#mAudioDescE">extended audio description</a>, is this audio description relevant?</li>
<li id="test-4-12-2"> Test 4.12.2: For each prerecorded video-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a synchronised <a href="index.php/glossary-76.html#mAudioDescE">extended audio description</a>, is this audio description relevant?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.2.7</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G8 - SM1 - SM2</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.7</li>
 </ul>
<h3 id="crit-4-13">Criterion 4.13 [Gold] Does each synchronised or video-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> have a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> <a
href="index.php/glossary-76.html#cpCrit4-"
 title="Special cases for criterion 4.13">(except in special cases</a>)?</h3>
<ul class="tests">
<li id="test-4-13-1"> Test 4.13.1: Does each synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below,  if necessary <a
href="index.php/glossary-76.html#cpCrit4-"
 title="Special cases for criterion 4.13">(except in special cases</a>)?
<ul class="ssTests">
<li>There is a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that is accessible via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
<li>There is an adjacent <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that can be clearly identified</li>
</ul>
</li>
<li id="test-4-13-2"> Test 4.13.2: Does each video-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below, if necessary <a
href="index.php/glossary-76.html#cpCrit4-"
 title="Special cases for criterion 4.13">(except in special cases</a>)?
<ul class="ssTests">
<li>There is a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that is accessible via an <a href="index.php/glossary-76.html#mLienAdj">adjacent link</a> (an url or an anchor)</li>
<li>There is an adjacent <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> that can be clearly identified</li>
</ul>
</li>
<li id="test-4-13-3">Test 4.13.3: Does each synchronised or video-only <a
		href="index.php/glossary-76.html#mMediaTemp">time-based media
		 </a> that is embedded via &lt;object&gt; or &lt;embed&gt;
		 and that requires a <a
href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> pass one of the conditions below (<a
		href="index.php/glossary-76.html#cpCrit4-"
		 title="Special cases for criterion 4.13">except in special cases</a>)?
						<ul class="ssTests">
						 <li>A reference to the <a
		href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> via a link or an anchor is available between &lt;object&gt; and &lt;/object&gt;</li>
<li>A reference to the <a
		href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a> via a link or an anchor is available between &lt;noembed&gt; and &lt;/noembed&gt;</li>
		</ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.2.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G69 - G159</li>
	<li><strong><abbr>RGAA</abbr> test</strong>:  -</li>
 </ul>
<h3 id="crit-4-14">Criterion 4.14 [Gold] For each synchronised or video-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a>, is this text transcript relevant?</h3>
<ul class="tests">
		<li id="test-4-14-1"> Test 4.14.1: For each video-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a>, is this text transcript relevant?</li>
		<li id="test-4-14-2"> Test 4.14.2: For each synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> with a <a href="index.php/glossary-76.html#mTranscriptTextuel">text transcript</a>, is this text transcript relevant?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.2.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F74</li>
	<li><strong><abbr>RGAA</abbr> test</strong>:  -</li>
 </ul>
<h3 id="crit-4-15">Criterion 4.15 [Bronze] Can each <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> be clearly identified (<a href="index.php/glossary-76.html#cpCrit4-15" title="Special cases for criterion 4.15">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-4-15-1"> Test 4.15.1: Does each audio-only, video-only or synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-15" title="Special cases for criterion 4.15">except in special cases</a>)?
  <ul class="ssTests">
  <li> The alternative content of the object tag contains a summarised content description</li>
  <li> The content of the noembed element contains a summarised content description </li>
  <li> The adjacent textual content helps to clearly identify the time-based media</li>
</ul>
</li>
		<li id="test-4-15-2"> Test 4.15.2: Does each live audio-only, live video-only or live synchronised <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-15" title="Special cases for criterion 4.15">except in special cases</a>)?
 <ul class="ssTests">
  <li> the alternative content of the object tags contains a summarised content description </li>
  <li> The content of the noembed element contains a summarised content description</li>
  <li>The adjacent text content helps to clearly identify the time-based media</li>
	</ul>
	</li>
	</ul>
	 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G68 - G100</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.1</li>
 </ul>
<h3 id="crit-4-16">Criterion 4.16 [Bronze] Does each <a href="index.php/glossary-76.html#mMediaNoTemp">non time-based media</a> have an alternative (<a href="index.php/glossary-76.html#cpCrit4-16" title="Special cases for criterion 4.16">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-4-16-1">Test 4.16.1: Does each <a href="index.php/glossary-76.html#mMediaNoTemp">non time-based media</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-16" title="Special cases for criterion 4.16">except in special cases</a>)?
  <ul class="ssTests">
  <li> The object tag contains an alternative</li>
  <li> The applet tag contains an alternative</li>
  <li> The noembed tag contains an alternative</li>
  <li> An <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a>, that can be clearly identified contains a page  (<a href="index.php/glossary-76.html#mUrl">url</a>) containing an alternative</li>
  <li> An <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a>, that can be clearly identified, allows to access to an alternative on the page</li>
</ul>
</li>
<li id="test-4-16-2">Test 4.16.2: Does each <a href="index.php/glossary-76.html#mMediaNoTemp">non time-based media</a> that is associated with an alternative pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-16" title="Special cases for criterion 4.16">except in special cases</a>)?
 <ul class="ssTests">
  <li> The page to which the <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> refers is accessible</li>
  <li> The alternative on the page to which the <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> refers is accessible.</li>
	</ul>
	</li>
	</ul>
	<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H27 - H35 - H53 - H46</li>
	<li><strong><abbr>RGAA</abbr> tests</strong> : 5.11 - 5.12</li>
 </ul>
<h3 id="crit-4-17">Criterion 4.17 [Bronze]
For each <a href="index.php/glossary-76.html#mMediaNoTemp">non time-based media</a> with an alternative, is this alternative relevant?</h3>
<ul class="tests">
		<li id="test-4-17-1"> Test 4.17.1: Does each <a href="index.php/glossary-76.html#mMediaNoTemp">non time-based media</a> with an alternative pass one of the conditions below?
 <ul class="ssTests">
  <li> the content of the object tag alows to access to the same content and to similar functionalities</li>
  <li> The content of the applet tag allows to access to the same content and to similar functionalities</li>
  <li> The content of the noembed tag allows to access to the same content and to similar functionalities</li>
  <li> The content of the alternative specified via an <a
href="index.php/glossary-76.html#mLienAdj">adjacent link</a> allows to access to the same content and to similar functionalities</li>
</ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F30</li>
	<li><strong><abbr>RGAA</abbr> test</strong>:  12.3</li>
 </ul>
<h3 id="crit-4-18">Criterion 4.18 [Bronze] Can each sound that is launched automatically be controlled by the user?</h3>
<ul class="tests">
		<li id="test-4-18-1"> Test 4.18.1: Does each audio sequence that is played automatically via an object, applet, embed tag, a javascript code or bgsound property pass one of the conditions below?
    <ul class="ssTests">
					<li> The audio sequence lasts less than or equal to 3 seconds</li>
          <li> The audio sequence can be stopped by an action initiated by the user</li>
          <li> The volume of the audio sequence can be controlled by the user independently from the system volume control.</li>
    </ul>
		</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G60 - G170 - G171 - F23</li>
	<li><strong><abbr>RGAA</abbr> tests</strong> : 5.29 - 5.30</li>
 </ul>
<h3 id="crit-4-19">Criterion 4.19 [Gold] For each prerecorded audio-only <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a>, are the dialogues audible enough (<a href="index.php/glossary-76.html#cpCrit4-19" title="Special cases for criterion 4.19">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-4-19-1"> Test 4.19.1: Does each audio <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> that is prerecorded and played via an Object, Applet, Embed tag or that is provided for download pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-19" title="Special cases for criterion 4.19">except in special cases</a>)?
  <ul class="ssTests">
					<li> The background sounds can be turned off</li>
          <li> The dialogue track(s) are 20 decibels higher than the background sounds.</li>
            <li>An alternative version in which the backgroun sounds can be turned off is available</li>
				 <li>An alternative version in which the dialogue track(s) are 20 decibels higher than the background sounds is available.</li>
	</ul>
	</li>
	</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.7</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G56</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.33</li>
 </ul>
<h3 id="crit-4-20">Criterion 4.20 [Bronze] Can each <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> be <a href="index.php/glossary-76.html#mControleClavSour">controlled by keyboard and mouse</a>?</h3>
<ul class="tests">
   <li id="test-4-20-1"> Test 4.20.1: Does each <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> have the <a href="index.php/glossary-76.html#mFonctionControle">control features</a> to be viewed, if necessary?</li>
   <li id="test-4-20-2"> Test 4.20.2: For each time-based media, is each functionality accessible by the keyboard and by the mouse?</li>
   <li id="test-4-20-3"> Test 4.20.3: For each time-based media, can each functionality be activated by the keyboard and by the mouse?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.2.3 - 1.2.5 - 2.1.1 - 2.1.2 - 4.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G135 - G10 - G71 - G90 - G4</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 5.6 - 5.27</li>
 </ul>
<h3 id="crit-4-21">Criterion 4.21 [Bronze] Can each <a href="index.php/glossary-76.html#mMediaNoTemp">non time-based media</a> be controlled by the keyboard and by the mouse?</h3>
<ul class="tests">
		<li id="test-4-21-1"> Test 4.21.1: For each <a href="index.php/glossary-76.html#mMediaNoTemp">non time-based media</a>, is each functionality accessible by the keyboard and by the mouse?</li>
		<li id="test-4-21-2"> Test 4.21.2: For each <a href="index.php/glossary-76.html#mMediaNoTemp">non time-based media</a>, can each functionality be activated by the keyboard and by the mouse?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 2.1.1 - 2.1.2 - 4.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G135 - G10 - G90 - G4</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.27</li>
 </ul>
<h3 id="crit-4-22">Criterion 4.22 [Bronze] Is each <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> and each non time-based media supported by assistive technologies (<a href="index.php/glossary-76.html#cpCrit4-22" title="Special cases for criterion 4.22">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-4-22-1"> Test 4.22.1: Does each <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a> and each non time-based media that is inserted via a Object, Applet or Embed tag pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit4-22" title="Special cases for criterion 4.22">except in special cases</a>)?
   <ul class="ssTests">
		  <li> The name, role, value, setting and status changes of the interface components are accessible to assistive technologies via an accessibility API </li>
          <li> An alternative that is <a href="index.php/glossary-76.html#mCompAccess">supported by an accessibility API</a> allows to access to the same functionalities</li>
	 </ul>
	 </li>
	 </ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 4.1.2 - 2.1.1 - 2.1.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G10 - G90 - G135 - F15 - F54</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 5.16 - 5.28</li>
 </ul>			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
<div class="thematique" id="tableaux">
			<h2>Tables</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#multimedia"><em>Multimedia</em></a></li>
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#liens"><em>Links</em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principle: perceivable.</p>
<h3>Guideline:</h3>
<p>Provide each <a href="index.php/glossary-76.html#mTabDonnee">data table</a>, with a relevant <a href="index.php/glossary-76.html#mResumeTab">summary</a> and a <a href="index.php/glossary-76.html#mTitreTab">title</a>, clearly identify header cells, use a relevant mechanism to associate data cells with header cells. Ensure that each layout table is correctly linearised.</p>
</div>

<h3 id="crit-5-1">Criterion 5.1 [Bronze] Does each <a href="index.php/glossary-76.html#mTabDonnee">data table</a> have a <a href="index.php/glossary-76.html#mResumeTab">summary</a>?</h3>
<ul class="tests">
		<li id="test-5-1-1">Test 5.1.1: Does each <a href="index.php/glossary-76.html#mTabDonnee">data table</a> (table tag) have a summary attribute?
    </li>
</ul>
<h4>mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0
success criterion</strong>: 1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  H73</li>
	<li><strong><abbr>RGAA</abbr> test</strong>:  11.8</li>
 </ul>
<h3 id="crit-5-2">Criterion 5.2 [Bronze] For each <a href="index.php/glossary-76.html#mTableau">table</a> with a <a href="index.php/glossary-76.html#mResumeTab">summary</a>, is this summary relevant?</h3>
<ul class="tests">
		<li id="test-5-2-1"> Test 5.2.1: For each <a href="index.php/glossary-76.html#mTabDonnee">data table</a> (table tag) with a summary attribute, is the content of this attribute relevant?</li>
    <li id="test-5-2-2"> Test 5.2.2: For each <a href="index.php/glossary-76.html#mTabMiseForme">layout table</a> (table tag) with a summary attribute, is the content of this attribute empty (summary="")?</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H73</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 11.10</li>
 </ul>
<h3 id="crit-5-3">Criterion 5.3 [Bronze] For each <a href="index.php/glossary-76.html#mTabMiseForme">layout table</a>, is the linearised content still understandable?</h3>
<ul class="tests">
		<li id="test-5-3-1"> Test 5.3.1: For each <a href="index.php/glossary-76.html#mTabMiseForme">layout table</a>, is the linearised content still understandable?</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.3.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F49</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 11.6</li>
 </ul>
<h3 id="crit-5-4">Criterion 5.4 [Bronze] Does each <a href="index.php/glossary-76.html#mTabDonnee">data table</a> have a <a href="index.php/glossary-76.html#mTitreTab">title</a>?</h3>
<ul class="tests">
		<li id="test-5-4-1"> Test 5.4.1: Does each <a href="index.php/glossary-76.html#mTabDonnee">data table</a> (table tag) have a caption tag?</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H39</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 11.7</li>
 </ul>
<h3 id="crit-5-5">Criterion 5.5  [Bronze] For each <a href="index.php/glossary-76.html#mTabDonnee">data table</a> with a <a href="index.php/glossary-76.html#mTitreTab">title</a>, is this title relevant?</h3>
<ul class="tests">
		<li id="test-5-5-1"> Test 5.5.1: For each <a href="index.php/glossary-76.html#mTabDonnee">data table</a> (table tag) with a caption tag, does the content of this tag provide the <a href="index.php/glossary-76.html#mTitreTab">title</a> of the table?
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H39</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 11.9</li>
 </ul>

<h3 id="crit-5-6">Criterion 5.6  [Bronze] For each <a href="index.php/glossary-76.html#mTabDonnee">data table</a>, are each <a href="index.php/glossary-76.html#mEnteteTab">column header</a> and each <a href="index.php/glossary-76.html#mEnteteTab">row header</a> correctly identified?</h3>
<ul class="tests">
		<li id="test-5-6-1"> Test 5.6.1: For each <a href="index.php/glossary-76.html#mTabDonnee">data table</a> (table tag), does each <a href="index.php/glossary-76.html#mEnteteTab">column header</a> have a th tag?</li>
		<li id="test-5-6-2"> Test 5.6.2: For each <a href="index.php/glossary-76.html#mTabDonnee">data table</a> (table tag), does each <a href="index.php/glossary-76.html#mEnteteTab">row header</a> have a th tag?</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H51</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 11.1</li>
 </ul>
<h3 id="crit-5-7">Criterion 5.7  [Bronze] For each <a href="index.php/glossary-76.html#mTabDonnee">data table</a>, is the appropriate technique allowing to associate each cell with its headers used?</h3>
<ul class="tests">
    <li id="test-5-7-1"> Test 5.7.1: Does each header (th tag) applied to the whole row or to the whole column have a unique id attribute or a scope attribute?</li>
		<li id="test-5-7-2"> Test 5.7.2: Does each header (th tag) applied to the whole row or the whole column and having a scope attribute pass one of the conditions below?
  <ul class="ssTests">
          <li> The header has a scope attribute with the "row" value for row headers</li>
          <li> The header has a scope attribute with the "col" value for column headers</li>
	</ul>
	</li>
	<li id="test-5-7-3"> Test 5.7.3: Does each header (th) tag that is not applied to the whole column pass the conditions below?
 <ul class="ssTests">
					<li> The header does not have a scope attribute</li>
          <li> The header has a unique id attribute</li>
</ul>
</li>
<li id="test-5-7-4"> Test 5.7.4: Does each cell (td or th tag) associated with one or several headers with an id attribute pass the conditions below?
<ul class="ssTests">
					<li> The cell has a headers attribute</li>
          <li> The headers attribute has the list of the values of the headers associated with the cell.</li>
</ul>
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H63  - H43</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 11.2 - 11.3</li>
 </ul>

<h3 id="crit-5-8">Criterion 5.8  [Bronze] Each <a href="index.php/glossary-76.html#mTabMiseForme">layout table</a> does not have to use elements for data tables. Does this rule have been followed?</h3>
<ul class="tests">
		<li id="test-5-8-1">Test 5.8.1: Does each <a href="index.php/glossary-76.html#mTabMiseForme">layout table</a> (table tag) pass the conditions below?
    <ul class="ssTests">
					<li> The <a href="index.php/glossary-76.html#mTabMiseForme">layout table</a> (table tag) does not have any caption, th, thead, tfoot tags</li>
          <li> The cells of the <a href="index.php/glossary-76.html#mTabMiseForme">layout table</a> (td tag) have no scope, headers, colgroup, axis attributes.</li>
		</ul>
		</li>
	</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  F46</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 11.4</li>
 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
<div class="thematique" id="liens">
			<h2>Links</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#tableaux"><em>Tables</em></a></li>
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#script"><em>Scrips</em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principle: perceivable, operable, understandable.</p>
<h3>Guideline:</h3>
<p>Provide explicit link text, in particular, with context information, and use the <a href="index.php/glossary-76.html#mTitreLien">link title</a> as little as possible.
Add links or a navigation form to the areas of a server-side image map.</p>
</div>
<h3 id="crit-6-1">Criterion 6.1  [Bronze] Is each <a href="index.php/glossary-76.html#mLien">link</a> explicit (except in  <a href="index.php/glossary-76.html#cpCrit6-" title="Special cases for criterion 6.1">special cases</a>)?</h3>
<ul class="tests">
		<li id="test-6-1-1"> Test 6.1.1: Does each <a href="index.php/glossary-76.html#mContexteLien">link context</a> pass one of the conditions below (except in <a href="index.php/glossary-76.html#cpCrit6-" title="Special cases for criterion 6.1">special cases</a>)?

		<ul class="ssTests">
		<li>The <a href="glossaire.html#mIntituleLien">link text</a> alone allows to understand the link purpose and target</li>
  	<li>The <a href="glossaire.html#mContexteLien">link context</a> allows to understand the link purpose and target</li>
	</ul>
			</li>
		<li id="test-6-1-2"> Test 6.1.2: Does each <a href="index.php/glossary-76.html#mLienImage">image link</a> (content of the alt attribute or text between &lt;object&gt; and &lt;/object&gt;) pass one of the conditions below (except in <a href="index.php/glossary-76.html#cpCrit6-" title="Special cases for criterion 6.1">special cases</a>)?
		<ul class="ssTests">
		<li>The <a href="glossaire.html#mIntituleLien">link text</a> alone allows to understand the link purpose and target</li>
  	<li>The <a href="glossaire.html#mContexteLien">link context</a> allows to understand the link purpose and target</li>
	</ul>
	</li>
		<li id="test-6-1-3"> Test 6.1.3: Does each link such as <a href="index.php/glossary-76.html#mZoneCliquable">clickable area</a> (content of the alt attribute of an area tag) pass one of the conditions below (except in <a href="index.php/glossary-76.html#cpCrit6-" title="Special cases for criterion 6.1">special cases</a>)?
		<ul class="ssTests">
		<li>The <a href="glossaire.html#mIntituleLien">link text</a> alone allows to understand the link purpose and target</li>
  	<li>The <a href="glossaire.html#mContexteLien">link context</a> allows to understand the link purpose and target</li>
	</ul>
	</li>
		<li id="test-6-1-4"> Test 6.1.4: Does each <a href="index.php/glossary-76.html#mLienComposite">combined link</a> pass one of the conditions below (except in <a href="index.php/glossary-76.html#cpCrit6-" title="Special cases for criterion 6.1">special cases</a>)?
 <ul class="ssTests">
		<li>The <a href="glossaire.html#mIntituleLien">link text</a> alone allows to understand the link purpose and target</li>
  	<li>The <a href="glossaire.html#mContexteLien">link context</a> allows to understand the link purpose and target</li>
	</ul>
	</li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.1.1 -  2.4.4 - 2.4.9</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H78 - H79 - H80 - H81 - H30 - F89 - G91 - G53 - F63</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 4.2 - 6.13 - 6.16</li>
 </ul>
<h3 id="crit-6-2">Criterion 6.2 [Bronze] For each <a href="index.php/glossary-76.html#mLien">link</a> with a <a href="index.php/glossary-76.html#mTitreLien">link title</a>, is this title relevant?</h3>
<ul class="tests">
		<li id="test-6-2-1"> Test 6.2.1: For each <a href="index.php/glossary-76.html#mLienTexte">text link</a> with a <a href="index.php/glossary-76.html#mTitreLien">link title</a> (title attribute), is the content of this attribute relevant? </li>
		<li id="test-6-2-2"> Test 6.2.2: For each <a href="index.php/glossary-76.html#mLienImage">image link</a> with a <a href="index.php/glossary-76.html#mTitreLien">link title</a> (title attribute), is the content of this attribute relevant? </li>
		<li id="test-6-2-3"> Test 6.2.3: For each <a href="index.php/glossary-76.html#mZoneCliquable">clickable area</a> (area tag) with a <a href="index.php/glossary-76.html#mTitreLien">link title</a> (title attribute), is the content of this attribute relevant? </li>
		<li id="test-6-2-4"> Test 6.2.4: For each <a href="index.php/glossary-76.html#mLienComposite">combined link</a> with a <a href="index.php/glossary-76.html#mTitreLien">link title</a> (title attribute), is the content of this attribute relevant?
 </li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.4.4</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H33</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.13</li>
 </ul>
<h3 id="crit-6-3">Criterion 6.3 [Gold] Is each <a href="index.php/glossary-76.html#mIntituleLien">link text</a> alone <a href="index.php/glossary-76.html#mLienHorsContexte">explicit out of context</a> (<a href="index.php/glossary-76.html#cpCrit6-" title="Special cases for criterion 6.3">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-6-3-1"> Test 6.3.1: Does each <a href="index.php/glossary-76.html#mLienTexte">text link</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit6-" title="Special cases for criterion 6.3">except in special cases</a>)?
		<ul class="ssTests">
<li>The link text is explicit out of its context</li>
  				<li>A mechanism allows the user to get an explicit link text  out of its context</li>
  				<li>The content of the link title (title attribute) is explicit out of its context</li>
	</ul>
	</li>
		<li id="test-6-3-2"> Test 6.3.2: Is each text for an <a href="index.php/glossary-76.html#mLienImage">image link</a> (content of the alt attribute or content between &lt;object&gt;&lt;/object&gt;) <a href="index.php/glossary-76.html#mLienHorsContexte">explicit out of context</a> (<a href="index.php/glossary-76.html#cpCrit6-" title="Special cases for criterion 6.3">except in special cases</a>)? </li>
		<li id="test-6-3-3"> Test 6.3.3: Is each <a href="index.php/glossary-76.html#mIntituleLien">link text</a> such as a <a href="index.php/glossary-76.html#mZoneCliquable">clickable area</a> (content of the alt attribute of an area tag) <a href="index.php/glossary-76.html#mLienHorsContexte">explicit out of context</a> (<a href="index.php/glossary-76.html#cpCrit6-" title="Special cases for criterion 6.3">except in special cases</a>)? </li>
		<li id="test-6-3-4"> Test 6.3.4: Is each <a href="index.php/glossary-76.html#mLienComposite">combined link</a> (content of the text and of the alt attribute) <a href="index.php/glossary-76.html#mLienHorsContexte">explicit out of context</a> (<a href="index.php/glossary-76.html#cpCrit6-" title="Special cases for criterion 6.3">except in special cases</a>)? </li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.4.9</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G91 - G189 - H33 - SCR30</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.14</li>
 </ul>
<h3 id="crit-6-4">Criterion 6.4 [Bronze] Does each <a href="index.php/glossary-76.html#mLienIdentique">identical link</a> have the same purpose and target?</h3>
<ul class="tests">
		<li id="test-6-4-1"> Test 6.4.1: Does each <a href="index.php/glossary-76.html#mLienIdentique">identical link</a> of type text have the same purpose and target?</li>
		<li id="test-6-4-2"> Test 6.4.2: Does each <a href="index.php/glossary-76.html#mLienIdentique">identical link</a> of type image have the same purpose and target?</li>
		<li id="test-6-4-3"> Test 6.4.3: Does each <a href="index.php/glossary-76.html#mLienIdentique">identical link</a> of type <a href="index.php/glossary-76.html#mZoneCliquable">clickable area</a> have the same purpose and target?</li>
		<li id="test-6-4-4"> Test 6.4.4: Does each <a href="index.php/glossary-76.html#mLienIdentique">identical link</a> of type combined link have the same purpose and target?</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteri</strong>: 2.4.4 - 3.2.4</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G91 - G197 - H30 - H33</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.15</li>
 </ul>
<h3 id="crit-6-5">Criterion 6.5 [Bronze] Is each <a href="index.php/glossary-76.html#mZoneCliquable">clickable area</a> of a server-side <a href="index.php/glossary-76.html#mImgReactive">image map</a> doubled with a link on the page?</h3>
<ul class="tests">
		<li id="test-6-5-1">Test 6.5.1: Does each server-side <a href="index.php/glossary-76.html#mImgReactive">image map</a> (img tag or input tag as image with the ismap attribute) pass one of the conditions below?
   <ul class="ssTests">
					<li> The <a href="index.php/glossary-76.html#mZoneCliquable">clickable area</a> is doubled with a link</li>
  				<li> The <a href="index.php/glossary-76.html#mZoneCliquable">area</a> is doubled with a navigation form</li>
	</ul>
	</li>
<li id="test-6-5-2"> Test 6.5.2: Does each server-side <a href="index.php/glossary-76.html#mImgReactive">image map</a> (img tag or input tag as image with the ismap attribute) pass one of the conditions below?
<ul class="ssTests">
					<li> The link that doubles the <a href="index.php/glossary-76.html#mZoneCliquable">clickable area</a> allows to access to the same function and the same target as the <a href="index.php/glossary-76.html#mZoneCliquable">clickable area</a></li>
  				<li> the form submission allows to access the same purpose and the same target as the <a href="index.php/glossary-76.html#mZoneCliquable">clickable area</a>.
  </li>
	</ul>
	</li>
<li id="test-6-5-3"> Test 6.5.3: Does each server-side <a href="index.php/glossary-76.html#mImgReactive">image map</a> (img tag or input tag as image with the ismap attribute) pass one of the conditions below?
<ul class="ssTests">
					<li> The <a href="index.php/glossary-76.html#mImgReactive">image map</a> is immediately followed, in the source code by the list of links redundant to the areas</li>
 					<li> The <a href="index.php/glossary-76.html#mImgReactive">image map</a> is immediately followed, in the source code by a navigation form redundant with the areas
 </li>
 </ul>
 </li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.1.1 - 2.1.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F54</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.1</li>
 </ul>

<h3 id="crit-6-6">Criterion 6.6 [Bronze] On each Web page, does each <a href="index.php/glossary-76.html#mLien">link</a>, except in  <a href="index.php/glossary-76.html#mAncreNom">named anchors</a>, have a <a href="glossaire.html#mIntituleLien">text</a>?</h3>
<ul class="tests">
		<li id="test-6-6-1"> Test 6.6.1 On each Web page, does each link (a tag), except in  <a href="index.php/glossary-76.html#mAncreNom">named anchors</a>, have a text between &lt;a&gt; an &lt;/a&gt;?
    </li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.1.1 - 2.4.4 - 2.4.9</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G91 - H30</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.16</li>
 </ul>

			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
<div class="thematique" id="script">
			<h2>Scripts</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#liens"><em>Links</em></a></li>
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#elements"><em>Mandatory elements</em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principles: perceivable, operable, understandable, robust.</p>
<h3>Guideline:</h3>
<p>Provide, if necessary, each <a href="index.php/glossary-76.html#mScript">script</a> with a relevant <a href="index.php/glossary-76.html#mAltScript">alternative</a>. Make it possible that each <a href="index.php/glossary-76.html#mScript">script</a> code can be controlled at least by keyboard and mouse and ensure that it is supported by assistive technologies.</p>
</div>
<h3 id="crit-7-1">Criterion 7.1 [Bronze] Does each <a href="index.php/glossary-76.html#mScript">script</a> have an <a href="index.php/glossary-76.html#mAltScript">alternative</a> if necessary (<a href="index.php/glossary-76.html#cpCrit7-1" title="Special cases for criterion 7.1">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-7-1-1">Test 7.1.1: Does each <a href="index.php/glossary-76.html#mScript">script</a> pass, if necessary, one of the conditions below (<a href="index.php/glossary-76.html#cpCrit7-1" title="Special cases for criterion 7.1">except in special cases</a>)?
     <ul class="ssTests">
		 		 <li> An <a href="index.php/glossary-76.html#mAltScript">alternative</a> is available between &lt;noscript&gt; and &lt;/noscript&gt;</li>
    		 <li> An <a href="index.php/glossary-76.html#mAltScript">alternative</a> is directly available on the page when javascript is disabled</li>
    		 <li> A link allows to access to an <a href="index.php/glossary-76.html#mAltScript">alternative</a> version of the page</li>
    		 <li> An <a href="index.php/glossary-76.html#mAltScript">alternative</a> is available via a server-side script language</li>
		</ul>
		</li>
<li id="test-7-1-2"> Test 7.1.2 Does each <a href="index.php/glossary-76.html#mScript">script</a> that initiates the opening of a new window have an <a href="index.php/glossary-76.html#mAltScript">alternative</a>?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 4.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F19</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 8.12</li>
 </ul>
<h3 id="crit-7-2">Criterion 7.2 [Bronze] For each <a href="index.php/glossary-76.html#mScript">script</a> with an <a href="index.php/glossary-76.html#mAltScript">alternative</a>, is this <a href="index.php/glossary-76.html#mAltScript">alternative</a> relevant?</h3>
<ul class="tests">
		<li id="test-7-2-1"> Test 7.2.1: Does each <a href="index.php/glossary-76.html#mScript">script</a> that begins with the script tag and that has an <a href="index.php/glossary-76.html#mAltScript">alternative</a> pass one of the conditions below?
  <ul class="ssTests">
			<li> The <a href="index.php/glossary-76.html#mAltScript">alternative</a> between &lt;noscript&gt; and &lt;/noscript&gt; allows to access similar content and functionalities</li>
 	        <li> When javascript is disabled, the displayed page allows to access similar content and functionalities</li>
  	      	<li> The <a href="index.php/glossary-76.html#mAltScript">alternative</a> page allows to access similar content and functionalities</li>
	        <li> The server-side script language allows to access similar content and functionalities</li>
	</ul>
	</li>
<li id="test-7-2-2"> Test 7.2.2: Does each non text element that is updated by a <a href="index.php/glossary-76.html#mScript">script</a> (in the page, a frame or an iframe) and that has an <a href="index.php/glossary-76.html#mAltScript">alternative</a> pass the conditions below?
 <ul class="ssTests">
					<li> The <a href="index.php/glossary-76.html#mAltScript">alternative</a> of the non text element is updated</li>
          <li> The updated <a href="index.php/glossary-76.html#mAltScript">alternative</a> is relevant</li>
</ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 4.1.2 - 1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F19 - F20</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 8.1 - 8.12</li>
 </ul>
<h3 id="crit-7-3">Criterion 7.3 [Bronze] Can each <a href="index.php/glossary-76.html#mScript">script</a> be <a href="index.php/glossary-76.html#mControleClavSour">controlled by keyboard and mouse</a> (<a href="index.php/glossary-76.html#cpCrit7-3" title="Special cases for criterion 7.3">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-7-3-1"> Test 7.3.1: Does each element with an event handler controlled by a <a href="index.php/glossary-76.html#mScript">script</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit7-3" title="Special cases for criterion 7.3">except in special cases</a>)?
   <ul class="ssTests">
		  <li> The element is <a href="index.php/glossary-76.html#mAAClavierSouris">accessible with keyboard and mouse</a></li>
          <li> An element that is <a href="index.php/glossary-76.html#mAAClavierSouris">accessible with keyboard and mouse</a> allowing to perform the same action is available on the page</li>
</ul>
</li>
		 <li id="test-7-3-2"> Test 7.3.2: Does each element with an event handler controlled by a <a href="index.php/glossary-76.html#mScript">script</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit7-3" title="Special cases for criterion 7.3">except in special cases</a>)?
   <ul class="ssTests">
		  <li> The element can be <a href="index.php/glossary-76.html#mAAClavierSouris">activated by keyboard and mouse</a></li>
          <li> An element that can be <a href="index.php/glossary-76.html#mAAClavierSouris">activated by keyboard and mouse</a> allowing to perform the same action is available on the page</li>
    </ul>
</li>
		 <li id="test-7-3-3"> Test 7.3.3: A <a href="index.php/glossary-76.html#mScript">script</a> must not remove focus from an element that receives it. Does this rule have been followed (<a href="index.php/glossary-76.html#cpCrit7-3" title="Special cases for criterion 7.3">except in special cases</a>)?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.3.1 - 2.1.1 - 2.1.3 - 2.4.7</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: SCR2 - SCR20 - SCR29 - SCR35 - G90 - F42 - F54 - F55</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 8.2 - 8.3 - 8.7 - 8.8 - 8.9</li>
 </ul>
<h3 id="crit-7-4">Criterion 7.4 [Bronze] Does each <a href="index.php/glossary-76.html#mScript">script</a> support assistive technologies, if necessary?</h3>
<ul class="tests">
		<li id="test-7-4-1"> Test 7.4.1: Does each <a href="index.php/glossary-76.html#mScript">script</a> generating or controlling an interface component pass one of the conditions below, if necessary?
 <ul class="ssTests">
					<li> The name, role, value, settings and status changes are accessible to assistive technologies via an accessibility API </li>
          <li> An accessible interface component allowing to access the same functionalities is available on the page</li>
          <li> An accessible <a href="index.php/glossary-76.html#mAltScript">alternative</a> allows to access the same functionalities.</li>
</ul>
</li>
		<li id="test-7-4-2"> Test 7.4.2: Does each functionality for content insertion controlled by a <a href="index.php/glossary-76.html#mScript">script</a>, use, if possible, properties and methods that conform to the DOM (Document Object Model) specification?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 4.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: SCR21 - F59</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 8.13</li>
 </ul>
<h3 id="crit-7-5">Criterion 7.5 [Bronze] For each <a href="index.php/glossary-76.html#mScript">script</a> that initiates a <a href="index.php/glossary-76.html#mChangContexte">change of context</a>, is the user warned or can he control it?</h3>
<ul class="tests">
		<li id="test-7-5-1"> Test 7.5.1: Does each <a href="index.php/glossary-76.html#mScript">script</a> initiating a <a href="index.php/glossary-76.html#mChangContexte">change of context</a> pass one of the conditions below?
   <ul class="ssTests">
					<li> The user is warned by a text about the <a href="index.php/glossary-76.html#mScript">script</a> action and the kind of change before it is activated</li>
  				<li> The <a href="index.php/glossary-76.html#mChangContexte">change of context</a> is initiated by an explicit button (input of type submit or button) </li>
   				<li> The <a href="index.php/glossary-76.html#mChangContexte">change of context</a> is initiated by an explicit link</li>
	 </ul></li>
	 </ul>
	 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 3.2.1 - 3.2.2 - 3.2.5</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F9 - F22 - F36 - F37 - F41 - F76 - G13 - G76 - G80 - G107 - H32 - H84 - SCR19</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 8.5</li>
 </ul>


<h3 id="crit-7-6">Criterion 7.6 [Gold] Can each <a href="index.php/glossary-76.html#mScript">script</a> causing an unrequested <a href="index.php/glossary-76.html#mAlerte">alert</a> be controlled by the user (except in <a href="index.php/glossary-76.html#cpCrit7-6" title="Special cases for criterion 7.6">special cases</a>)?</h3>
<ul class="tests">
		<li id="test-7-6-1">Test 7.6.1: Can each <a href="index.php/glossary-76.html#mScript">script</a> causing an unrequested <a href="index.php/glossary-76.html#mAlerte">alert</a> be controlled by the user (except in <a href="index.php/glossary-76.html#cpCrit7-6" title="Special cases for criterion 7.6">special cases</a>)?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.2.4</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: SCR14</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 8.4</li>
 </ul>

			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
<div class="thematique" id="elements">
			<h2>Mandatory elements</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#script"><em>Scripts</em></a></li>
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#structure"><em>Structuration of information</em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principles: perceivable, operable, understandable, robust.</p>
<h3>Guideline:</h3>
<p>Check that each Web page has a valid source code according to the <a href="index.php/glossary-76.html#mDTD">document type</a>, a relevant title and a <a href="index.php/glossary-76.html#mLangueDefaut"> default human language</a> specification. Check that tags are not used for presentation only, that changes in human language and changes in the direction of reading order are specified.</p>
</div>
<h3 id="crit-8-1">Criterion 8.1 [Bronze] Is each Web page defined by a <a href="index.php/glossary-76.html#mDTD">document type</a>?</h3>
<ul class="tests">
		<li id="test-8-1-1"> Test 8.1.1: For each Web page, is the <a href="index.php/glossary-76.html#mDTD">document type</a> (doctype tag) available?</li>
		<li id="test-8-1-2"> Test 8.1.2: For each Web page is the <a href="index.php/glossary-76.html#mDTD">document type</a> (doctype tag) valid?</li>
		<li id="test-8-1-3"> Test 8.1.3: For each  Web page with a <a href="index.php/glossary-76.html#mDTD">document type</a> declaration, is this declaration located before the HTML tag in the source code?</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 4.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G134</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 9.1 - 9.2 - 9.3</li>
 </ul>
<h3 id="crit-8-2">Criterion 8.2 [Bronze] For each  Web page, is the source code <a
href="index.php/glossary-76.html#mCodeValide">valid</a> according to the specified <a href="index.php/glossary-76.html#mDTD">document type</a>?</h3>
<ul class="tests">
		<li id="test-8-2-1"> Test 8.2.1: For each  <a href="index.php/glossary-76.html#mDTD">document type</a> declaration, does the page source code pass the conditions below?
 <ul class="ssTests">
					<li> Tags follow the writing rules</li>
  				<li> Tag nesting is conform</li>
 					<li> Tag opening and closing are conform</li>
					<li> Attributes follow the writing rules</li>
 					<li> The attribute values follow the writing rules</li>
 </ul>
 </li>
 	  <li id="test-8.2.2"> Test 8.2.2: For each <a href="index.php/glossary-76.html#mDTD">document type</a> declaration, the page source code does not have to use obsolete elements. Does this rule have been followed?
 </li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 4.1.1 - 4.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G134 - G192 - H74 - H75 - H88 - F70 - F77</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 9.4 - 9.5</li>
 </ul>
<h3 id="crit-8-3">Criterion 8.3 [Bronze] On each Web page, is the <a href="index.php/glossary-76.html#mLangueDefaut"> default human language</a> available?</h3>
<ul class="tests">
		<li id="test-8-3-1"> Test 8.3.1: For each Web page, does the <a href="index.php/glossary-76.html#mLangueDefaut"> default human language</a> specification pass one of the conditions below?
<ul class="ssTests">
					<li> The page human language specification (lang and/or xml:lang attribute) is provided for the Html element</li>
          <li> The page human language specification (lang and/or xml:lang attribute) is provided for each text element or on one of the parent elements</li>
	 </ul>
	 </li>
	 </ul>
	 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H57</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 9.8</li>
 </ul>
<h3 id="crit-8-4">Criterion 8.4 [Bronze] For each Web page with a <a href="index.php/glossary-76.html#mLangueDefaut"> default human language</a>, is the <a href="index.php/glossary-76.html#mCodeLangue">
language code</a> relevant?</h3>
<ul class="tests">
		<li id="test-8-4-1"> Test 8.4.1: For each  Web page with a <a href="index.php/glossary-76.html#mLangueDefaut"> default human language</a>, does the <a href="index.php/glossary-76.html#mCodeLangue">
language code</a> pass the conditions below?
<ul class="ssTests">
					<li> The <a href="index.php/glossary-76.html#mCodeLangue">language code</a> is valid</li>
          <li> The <a href="index.php/glossary-76.html#mCodeLangue">language code</a> is relevant</li>
</ul>
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  H57</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 9.8</li>
 </ul>
<h3 id="crit-8-5">Criterion 8.5 [Bronze] Does each Web page have a <a href="index.php/glossary-76.html#mTitrePage">page title</a>?</h3>
<ul class="tests">
		<li id="test-8-5-1"> Test8.5.1: Does each Web page have a <a href="index.php/glossary-76.html#mTitrePage">page title</a> (title tag)?</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.4.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G88 - H25</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 9.6</li>
 </ul>
<h3 id="crit-8-6">Criterion 8.6 [Bronze] For each Web page with a <a href="index.php/glossary-76.html#mTitrePage">page title</a>, is this title relevant?</h3>
<ul class="tests">
		<li id="test-8-6-1"> Test 8.6.1: For each  Web page with a <a href="index.php/glossary-76.html#mTitrePage">page title</a> (title tag), is the content of this tag relevant?
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.4.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F25</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 9.7</li>
 </ul>
<h3 id="crit-8-7">Criterion 8.7 [Silver] On each  Web page, is each language change specified in the source code (<a href="index.php/glossary-76.html#cpCrit8-7" title="Special cases for criterion 8.7">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-8-7-1"> Test 8.7.1: On each Web page, does each text that is written in a language differing from the <a href="index.php/glossary-76.html#mLangueDefaut"> default human language</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit8-7" title="Special cases for criterion 8.7">except in special cases</a>)?
<ul class="ssTests">
					<li> The language specification is provided on the element that contains the text</li>
 					<li> The language specification is provided on one of the parent elements</li>
 </ul>
 </li>
 </ul>
	 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H58</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 12.1 - 12.2</li>
 </ul>
<h3 id="crit-8-8">Criterion 8.8 [Silver] On each Web page, is each language change relevant?</h3>
<ul class="tests">
		<li id="test-8-8-1"> Test8.8.1: On each Web page, is each language change (lang and/or xml:lang attribute) valid?</li>
		<li id="test-8-8-2"> Test 8.8.2: On each  Web page, is each language change (lang and/or xml:lang attribute) relevant?</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H58</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 12.1 - 12.2</li>
 </ul>
<h3 id="crit-8-9">Criterion 8.9 [Bronze] On each Web page, tags must not be used <a href="index.php/glossary-76.html#mUniquPres">only for layout</a>. Does this rule have been followed?</h3>
<ul class="tests">
		<li id="test-8-9-1"> Test 8.9.1: On each Web page tags must not be used (except div, span and table) <a href="index.php/glossary-76.html#mUniquPres">only for layout</a>. Does this rule have been followed?
    </li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G115 - F43</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 7.9</li>
 </ul>
<h3 id="crit-8-10">Criterion 8.10 [Bronze] On each Web page, are changes in <a href="index.php/glossary-76.html#mSensLecture">reading direction</a> identified?</h3>
<ul class="tests">
		<li id="test-8-10-1"> Test 8.10.1: On each  Web page, does each text for which the reading direction is different from the default <a href="index.php/glossary-76.html#mSensLecture">reading direction</a> pass the conditions below?
  <ul class="ssTests">
					<li> the text is included in an element with a dir attribute</li>
          <li> The value of the dir attribute is conform (rtl or ltr)</li>
          <li> The value of the dir attribute is relevant</li>
	</ul>
	</li>
	</ul>
	 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.3.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H56</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: -</li>
 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
<div class="thematique" id="structure">
			<h2>Structuration of information</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#elements"><em>Mandatory elements</em></a></li>
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#presentation"><em>Presentation of information </em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principles: perceivable, operable, understandable.</p>
<h3>Guideline:</h3>
<p>Use <a href="index.php/glossary-76.html#mTitre">headings</a>, lists, abbreviations and quotes to structure information. </p>
</div>
<h3 id="crit-9-1">Criterion 9.1 [Bronze]
On each Web page, is information structured by the appropriate use of <a href="index.php/glossary-76.html#mTitre">headings</a>?</h3>
<ul class="tests">
		<li id="test-9-1-1"> Test 9.1.1: Is there a level 1 <a href="index.php/glossary-76.html#mTitre">heading</a> (h1 tag) on each Web page?</li>
		<li id="test-9-1-2"> Test 9.1.2: On each Web page, is the hierarchy between the <a href="index.php/glossary-76.html#mTitre">headings</a> (h tags) relevant?</li>
		<li id="test-9-1-3"> Test 9.1.3: On each Web page, is each <a href="index.php/glossary-76.html#mTitre">heading</a> (h tag) that is necessary to structure information available?</li>
		<li id="test-9-1-4"> Test 9.1.4: On each Web page, is each <a href="index.php/glossary-76.html#mTitre">heading</a> (h tag) relevant?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.3.1 - 2.4.1 - 2.4.6 - 2.4.10</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H69 - G130 - H42 - G141</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 10.1 - 10.2 - 10.3 - 10.4</li>
 </ul>
<h3 id="crit-9-2">Criterion 9.2 [Bronze] On each Web page, is each <a href="index.php/glossary-76.html#mListes">list</a> structured with the appropriate tags?</h3>
<ul class="tests">
		<li id="test-9-2-1"> Test 9.2.1: On each Web page, does information grouped in unordered <a href="index.php/glossary-76.html#mListes">lists</a> use the ul and li tags?</li>
		<li id="test-9-2-2"> Test 9.2.2: On each Web page, does information grouped in ordered <a href="index.php/glossary-76.html#mListes">lists</a> use the ol and li tags?</li>
		<li id="test-9-2-3"> Test 9.2.3: On each Web page, does information grouped in definition <a href="index.php/glossary-76.html#mListes">lists</a> use the dl and dt/dd tags?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H40 - H48 - F2</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 10.5 - 10.6 - 10.7</li>
 </ul>
<h3 id="crit-9-3">Criterion 9.3 [Gold] On each Web page, does the first occurence of each <a href="index.php/glossary-76.html#mAbbr">abbreviation</a> helps to know its meaning?</h3>
<ul class="tests">
		<li id="test-9-3-1"> Test 9.3.1: On each Web page, does the first occurence of each <a href="index.php/glossary-76.html#mAcro">acronym</a> pass one of the conditions below?
<ul class="ssTests">
				 <li> The <a href="index.php/glossary-76.html#mAcro">acronym</a> is provided with its meaning as an adjacent link</li>
         <li> The <a href="index.php/glossary-76.html#mAcro">acronym</a> is implemented via a link referring to a page or a location on the page allowing to know its meaning</li>
         <li> The <a href="index.php/glossary-76.html#mAcro">acronym</a> is included in a link with a title attribute allowing to know its meaning</li>
         <li> The meaning of the <a href="index.php/glossary-76.html#mAcro">acronym</a> is available in a glossary on the site</li>
         <li> The <a href="index.php/glossary-76.html#mAcro">acronym</a> is implemented via an acronym tag with a title allowing to know its meaning</li>
</ul>
</li>
		 <li id="test-9-3-2"> Test 9.3.2: On each Web page, does the first occurence of each <a href="index.php/glossary-76.html#mAbbr">abbreviation</a> pass one of the conditions below?
<ul class="ssTests">
					<li> The <a href="index.php/glossary-76.html#mAbbr">abbreviation</a>  is provided with its meaning as an adjacent link</li>
          <li> The <a href="index.php/glossary-76.html#mAbbr">abbreviation</a>  is implemented via a link referring to a page or a location on the page allowing to know its meaning</li>
          <li> The <a href="index.php/glossary-76.html#mAbbr">abbreviation</a>  is included in a link with a title attribute allowing to know its meaning</li>
          <li> The meaning of the <a href="index.php/glossary-76.html#mAbbr">abbreviation</a>  is available in a glossary on the site</li>
          <li> The <a href="index.php/glossary-76.html#mAbbr">abbreviation</a>  is implemented via an abbr tag with a title allowing to know its meaning</li>
</ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.1.4</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G55 - G70 - G97 - G102 - H28 - H60</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 10.9 - 10.10</li>
 </ul>
<h3 id="crit-9-4">Criterion 9.4 [Gold] On each Web page, is the meaning of each <a href="index.php/glossary-76.html#mAbbr">abbreviation</a> relevant?</h3>
<ul class="tests">
		<li id="test-9-4-1"> Test 9.4.1: On each Web page, is the meaning of each <a href="index.php/glossary-76.html#mAcro">acronym</a> relevant?</li>
		<li id="test-9-4-2"> Test 9.4.2: On each Web page, is the meaning of each <a href="index.php/glossary-76.html#mAbbr">abbreviation</a> relevant?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.1.4</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G55 - G70 - G97 - H28 - H60</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 10.11 - 10.12</li>
 </ul>
<h3 id="crit-9-5">Criterion 9.5 [Bronze] On each Web page, is each quote identified properly?</h3>
<ul class="tests">
		<li id="test-9-5-1"> Test 9.5.1: On each Web page, does each short quote use a q tag?</li>
    <li id="test-9-5-2"> Test 9.5.2: On each Web page, does each <a href="index.php/glossary-76.html#mBlocCite">quotation block</a> use a blockquote tag?</li>
	 </ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H49 - F2</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 10.8</li>
 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
<div class="thematique" id="presentation">
			<h2>Presentation of information </h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#structure"><em>Structuration of information</em></a></li>
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#formulaire"><em>Forms</em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principles: perceivable, operable, robust.</p>
<h3>Guideline:</h3>
<p>Use <a href="index.php/glossary-76.html#mFeuilleStyle">style sheets</a> to control information presentation. Check for the effect of font size increasing on readability. Ensure that links can be correctly identified, that focus is specified, that line spacing is suffiscient, and give the user the ability to control text justification. Ensure that hidden texts are rendered properly and that information is not provided only by an element's shape or location.</p>
</div>
<h3 id="crit-10-1">Criterion 10.1 [Bronze] In the <a href="index.php/glossary-76.html#mSiteWeb">Web site</a>, are <a href="index.php/glossary-76.html#mFeuilleStyle">style sheets</a> used to control <a href="index.php/glossary-76.html#mPresInfo">information presentation</a>?</h3>
<ul class="tests">
		<li id="test-10-1-1"> Test 10.1.1: On each Web page, tags serving for <a href="index.php/glossary-76.html#mPresInfo">information presentation</a> must not be available in the page source code. Does this rule have been followed?</li>
		<li id="test-10-1-2"> Test 10.1.2: On each Web page, attributes serving for <a href="index.php/glossary-76.html#mPresInfo">information presentation</a> must not be available in the page source code. Does this rule have been followed?</li>
		<li id="test-10-1-3"> Test 10.1.3: On each Web page, does the use of spaces pass the conditions below?
 <ul class="ssTests">
					<li> Spaces are not used to separate the letters of a word</li>
  				<li> Spaces are not use to simulate tables</li>
  				<li> Spaces are not used to simulate text columns</li>
	</ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.3.1 - 1.3.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G140 - F32 - F33 - F34 - C6 - C8 - C22 - F48</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 7.8 - 7.4 - 11.5</li>
 </ul>
<h3 id="crit-10-2">Criterion 10.2 [Bronze] On each Web page, is <a href="http://www.braillenet.org/accessibilite/referentiel-aw21/glossaire.php#mContVisible">visible content</a> still available when <a href="index.php/glossary-76.html#mFeuilleStyle">style sheets</a> or images are disabled?</h3>
<ul class="tests">
		<li id="test-10-2-1"> Test 10.2.1: On each Web page, is information still available when <a href="index.php/glossary-76.html#mFeuilleStyle">style sheets</a> are disabled?</li>
		<li id="test-10.2-2"> Test 10.2.2: On each Web page, is information still visible when images are disabled?</li>
		<li id="test-10-2-3"> Test 10.2.3: On each Web page, is information still visible when colours are disabled?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.1.1 - 1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F3 - F87</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 7.1 - 7.3</li>
 </ul>
<h3 id="crit-10-3">Criterion 10.3 [Bronze] On each Web page, is information still <a href="index.php/glossary-76.html#mCoherentODL">understandable</a> when <a href="index.php/glossary-76.html#mFeuilleStyle">style sheets</a> are disabled?</h3>
<ul class="tests">
		<li id="test-10-3-1">Test 10.3.1: On each Web page, is information still <a href="index.php/glossary-76.html#mCoherentODL">understandable</a> when <a href="index.php/glossary-76.html#mFeuilleStyle">style sheets</a> are disabled?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.3.2 - 2.4.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F1 - G59</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 7.2</li>
 </ul>
<h3 id="crit-10-4">Criterion 10.4 [Silver] On each Web page, is text still readable when <a href="index.php/glossary-76.html#mTailleCaractere">character size</a> is increased until at least 200%?</h3>
<ul class="tests">
		<li id="test-10-4-1"> Test 10.4.1: In the <a href="index.php/glossary-76.html#mFeuilleStyle">style sheets</a> of the <a href="index.php/glossary-76.html#mSiteWeb">Web site</a>, non relative units (pt, pc, mm, cm, in) must not be used for media types screen, tv, handheld, projection. Does this rule have been followed?</li>
		<li id="test-10-4-2"> Test 10.4.2: In the <a href="index.php/glossary-76.html#mFeuilleStyle">style sheets</a> of the <a href="index.php/glossary-76.html#mSiteWeb">Web site</a>, do font sizes only use relative units?</li>
		<li id="test-10-4-3"> Test 10.4.3: On each Web page, the increasing of the <a href="index.php/glossary-76.html#mTailleCaractere">character size</a> until at least 200%, does not have to cause loss of information. Does this rule have been followed?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.4</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F80 - F69 - C14 - G179</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 7.13 - 7.14</li>
 </ul>
<h3 id="crit-10-5">Criterion 10.5 [Silver] On each Web page, are CSS declarations for colours for element background and fonts used properly?</h3>
<ul class="tests">
		<li id="test-10-5-1"> Test 10.5.1: On each Web page, is each CSS declaration for font colours (color), of an element that may contain text , accompanied by background colour declaration (background, background-color), at least, inherited from a parent?</li>
		<li id="test-10-5-2"> Test 10.5.2: On each Web page, is each declaration for background colour (background, background-color), of an element that may contain text, accompanied by a font colour declaration (color) at least, inherited from a parent?</li>
		<li id="test-10-5-3"> Test 10.5.3: On each Web page, is each use of an image to create a background colour for an element that may contain text , via CSS (background, background-image), accompanied by a background colour declaration (background, background-color), at least, that is inherited from a parent?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.4.3 - 1.4.6 - 1.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  F24</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 7.5</li>
 </ul>
<h3 id="crit-10-6">Criterion 10.6 [Bronze] On each Web page, is each <a href="index.php/glossary-76.html#mLienNature">link, whose kind is not obvious</a>, visible in relation with the surrounding text?</h3>
<ul class="tests">
		<li id="test-10-6-1"> Test 10.6.1: On each Web page, does each <a href="index.php/glossary-76.html#mLienTexte">text link</a> that is indicated only by colour and whose kind is not obvious have a contrast ratio that is greater than or equal to 3:1 in relation with the surrounding text?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:   G183 - F73</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 7.10</li>
 </ul>
<h3 id="crit-10-7">Criterion 10.7 [Bronze] On each Web page, is the <a href="index.php/glossary-76.html#mPriseFocus">focus </a> visible for each element that receives focus?</h3>
<ul class="tests">
		<li id="test-10-7-1">Test 10.7.1: For each element that receives focus, the browser visual indication must not be removed (CSS property outline, outline-color, outline-width, outline-style). Does this rule have been followed? </li>
		 <li id="test-10-7-2"> Test 10.7.2: For each element that receives focus the browser visual indication must not be deteriorated (CSS property outline-color). Does this rule have been followed?</li>
<li id="test-10.7.3"> Test 10.7.3: Does each link inside of a text that is conveyed by colour alone follow the conditions below?
<ul class="ssTests">
<li>A visual cue other than colour allows to specify the <a
href="index.php/glossary-76.html#mPriseFocus">focus </a> with keyboard.</li>
<li>A visual cue other than colour allows to indicate link mouseover.</li>
</ul>
</li>
	</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.4.1 - 2.4.7</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:   G183 - F73 - F78 - G165 - C15 - G195 - SCR31</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 7.10 - 7.11</li>
 </ul>
<h3 id="crit-10-8">Criterion 10.8 [Gold]
On each Web page, can the choice of text background and font colour be controlled by the user?</h3>
<ul class="tests">
		<li id="test-10-8-1"> Test 10.8.1: For each block of text inside of an HTML element, can background colour be controlled by the user?</li>
		<li id="test-10-8-2"> Test 10.8.2: For each block of text inside of an HTML element, can font colour be controlled by the user?</li>
		<li id="test-10-8-3"> Test 10.8.3: For each block of text inside of an object, applet or embed element, can background colour be controlled by the user?</li>
		<li id="test-10-8-4"> Test 10.8.4: For each block of text inside of an object, applet or embed element, can font colour be controlled by the user?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:   G156 - G175</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.34</li>
 </ul>
<h3 id="crit-10-9">Criterion 10.9 [Gold] for each Web page, text must not be justified. Does this rule have been followed?</h3>
<ul class="tests">
		<li id="test-10-9-1"> Test 10.9.1: Does each Web page pass one of the conditions below?
			<ul class="ssTests">
								<li>Text is not justified</li>
			 					<li>A mechanism allows the user to remove justification of text</li>
	</ul>
		</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:   F88 - G172</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 7.12</li>
 </ul>
<h3 id="crit-10-10">Criterion 10.10 [Gold]
For each Web page, on a full-screen window and with a font size of 200%, is each block of text still readable without the use of horizontal scrolling?</h3>
<ul class="tests">
		<li id="test-10-10-1"> Test 10.10.1: On each Web page, does increasing of <a href="index.php/glossary-76.html#mTailleCaractere">character size</a> to 200% pass one of the conditions below?
<ul class="ssTests">
					<li> In a full-screen window, the use of horizontal scrolling is not necessary to read a block of text</li>
 					<li> A mechanism allows to make the use of horizontal scrolling useless to read a block of text on a full-screen window</li>
	</ul>
	</li>
	</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:   C26 - C24</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 7.15</li>
 </ul>
<h3 id="crit-10-11">Criterion 10.11 [Gold] For each Web page, do blocks of text have a width that is less than or equal to 80 characters (<a href="index.php/glossary-76.html#cpCrit10-11" title="Special cases for criterion 10.11">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-10-11-1"> Test 10.11.1: For each Web page, does each block of text pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit10-11" title="Special cases for criterion 10.11">except in special cases</a>)?
 <ul class="ssTests">
					<li> Each block of text has a width that is less than or equal to 80 characters</li>
  				<li> The user can reduce the width of each block of text to 80 characters when resizing his browser window</li>
	</ul>
	</li>
	</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H87 - C20</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 7.16</li>
 </ul>
<h3 id="crit-10-12">Criterion 10.12 [Gold] For each Web page, is line and paragraph spacing sufficient?</h3>
<ul class="tests">
		<li id="test-10-12-1"> Test 10.12.1: For each Web page, does each block of text pass one of the conditions below?
  <ul class="ssTests">
					<li> The value of the line spacing is at least equal to 1.5 times the text size</li>
          <li> A mechanism allows to increase the value of the line spacing to at least 1.5 times the text size</li>
	</ul>
	</li>
	  <li id="test-10-12-2"> Test 10.12.2: For each Web page, does each block of text pass one of the conditions below?
 <ul class="ssTests">
					<li> The value of spacing between two paragraphs is equal to at least 1.5 times the value of the line spacing</li>
          <li>A mechanism allows to increase the value of the spacing between two paragraphs to at least 1.5 times the value of the line spacing</li>
</ul>
</li>
</ul>
	<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G188 - C21</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 7.17</li>
 </ul>
<h3 id="crit-10-13">Criterion 10.13 [Bronze] For each Web page, are <a href="glossaire.html#mTexteCache">hiddent texts</a> rendered properly by assistive technologies?</h3>
<ul class="tests">
		<li id="test-10-13-1">Test 10.13.1: On each Web page, does each <a href="glossaire.html#mTexteCache">hidden text</a> pass one of the conditions below?
    <ul class="ssTests">
					<li>The text is not intended to be rendered by assistive technologies</li>
  				<li> The text is made visible on user action on the element itself or on an element before the <a href="glossaire.html#mTexteCache">hidden text</a></li>
	</ul>
	</li>
	</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 4.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: -</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 7.18</li>
 </ul>
<h3 id="crit-10-14">Criterion 10.14 [Bronze] On each Web page, information must not be provided by its shape, size or location alone. Does this rule have been followed?</h3>
 <ul class="tests">
 		<li id="test-10-14-1"> Test 10.14.1: On each Web page, for each text or set of text, information must not be provided by its shape, size or location alone. Does this rule have been followed?</li>
 		<li id="test-10-14-2"> Test 10.14.2: On each Web page, for each image or set of images, information must not be provided by its shape, size or location alone. Does this rule have been followed?</li>
 		<li id="test-10-14-3"> Test 10.14.3: On each Web page, for each <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a>, information must not be provided by its shape, size or location alone. Does this rule have been followed?</li>
 		<li id="test-10-14-4"> Test 10.14.4: On each Web page, for each <a href="index.php/glossary-76.html#mMediaNoTemp">non time-based media</a>, information must not be provided by its shape, size or location alone. Does this rule have been followed?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.4.1 - 1.3.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G96 - G111 - F14 - F26</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 12.7 - 12.8 - 12.9</li>
 </ul>
<h3 id="crit-10-15">Criterion 10.15 [Bronze] On each Web page, information must not be provided by its shape, size or location alone. Does this rule have been implemented in a relevant way?</h3>
<ul class="tests">
		<li id="test-10-15-1"> Test 10.15.1: On each Web page, for each text or set of text, information must not be provided by its shape, size or location alone. Does this rule have been implemented in a relevant way?</li>
		<li id="test-10-15-2"> Test 10.15.2: On each Web page, for each image or set of images, information must not be provided by its shape, size or location alone. Does this rule have been implemented in a relevant way?</li>
		<li id="test-10-15-3"> Test 10.15.3: On each Web page, for each <a href="index.php/glossary-76.html#mMediaTemp">time-based media</a>, information must not be provided by its shape, size or location alone. Does this rule have been implemented in a relevant way?</li>
		<li id="test-10-15-4"> Test 10.15.4: On each Web page, for each <a href="index.php/glossary-76.html#mMediaNoTemp">non time-based media</a>, information must not be provided by its shape, size or location alone. Does this rule have been implemented in a relevant way?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.4.1 - 1.3.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G96 - G111 - F14 - F26</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 12.7 - 12.8 - 12.9</li>
 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
		
<div class="thematique" id="formulaire">
			<h2>Forms</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#presentation"><em>Presentation of information </em></a></li>
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#navigation"><em>Navigation</em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principles: perceivable, operable, understandable, robust.</p>
<h3>Guideline:</h3>
<p>For each form, associate each control with its text, group controls in similar blocks of information, structure selection lists in a consistent way, give each <a href="index.php/glossary-76.html#mBtnForm">button</a> an explicit text. Check that input help is available, ensure that the <a href="index.php/glossary-76.html#mControleSaisie">input control</a> is accessible and that the user can control financial, legal or personal data.</p>
</div>
<h3 id="crit-11-1">Criterion 11.1 [Bronze]
Does each <a href="index.php/glossary-76.html#mChpSaisie">form field</a> have a <a href="index.php/glossary-76.html#mEtiquette">label</a>?</h3>
<ul class="tests">
		<li id="test-11-1-1"> Test 11.1.1: Does each <a href="index.php/glossary-76.html#mChpSaisie">form field</a> (input tag of type text, password, checkbox, radio, file, or textarea and select tags), pass one of the conditions below?
  <ul class="ssTests">
		  <li> The form field has a title attribute</li>
          <li> A <a href="index.php/glossary-76.html#mEtiquette">label</a> (label tag) is associated with the form field</li>
	</ul></li>
 		<li id="test-11-1-2">Test 11.1.2: Does each <a href="index.php/glossary-76.html#mChpSaisie">form field</a> (input tag of type text, password, checkbox, radio, file, or textarea and select tags), that is associated with a label (label tag), pass the conditions below?
 <ul class="ssTests">
		  <li> The <a href="index.php/glossary-76.html#mChpSaisie">form field</a> has an id attribute</li>
          <li> The value of the id attribute is unique</li>
 </ul></li>
 		<li id="test-11-1-3">Test 11.1.3: Does each label (label tag) that is associated with a <a href="index.php/glossary-76.html#mChpSaisie">form field</a> (input tag of type text, password, checkbox, radio, file, or textarea and select tag) pass the conditions below?
<ul class="ssTests">
					<li> The label tag has a for attribute</li>
 					<li> The value of the for attribute is equal to the value of the id attribute of the associated form field</li>
 </ul>
 </li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.1.1 - 1.3.1 - 2.4.6 - 3.3.2 - 4.1.2 </li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H44 - H65 - G82 - G131  - F17 - F82  - F86</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 3.11 - 3.10</li>
 </ul>
<h3 id="crit-11-2">Criterion 11.2 [Bronze]
Is each label that is associated with a <a href="index.php/glossary-76.html#mChpSaisie">form field</a> relevant?</h3>
<ul class="tests">
		<li id="test-11-2-1"> Test 11.2.1: Does each <a href="index.php/glossary-76.html#mEtiquette">label</a> (label tag) allow to know the exact function of the <a href="index.php/glossary-76.html#mChpSaisie">form field</a> (input tag of type text, password, checkbox, radio, file, or textarea and select tag) with which it is associated?</li>
		<li id="test-11-2-2"> Test 11.2.2: Does each title attribute allow to know the exact function of the <a href="index.php/glossary-76.html#mChpSaisie">form field</a> (input tag of type text, password, checkbox, radio, file, or textarea and select tags) with which it is associated?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.1.1 - 2.4.6 - 3.3.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H44 - H65 - G182 - G131</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 3.12</li>
 </ul>
<h3 id="crit-11-3">Criterion 11.3 [Silver] In each form, is each <a href="index.php/glossary-76.html#mEtiquette">label</a> related with a form field with the same function and that is repeated several times on the same page or in a set of pages consistent?</h3>
<ul class="tests">
		<li id="test-11-3-1">Test 11.3.1: Is each <a href="index.php/glossary-76.html#mEtiquette">label</a> related with a form field with the same function and that is repeated several times on a same Web page consistent?</li>
		<li id="test-11-3-2">Test 11.3.2: Is each <a href="index.php/glossary-76.html#mEtiquette">label</a> related with a form field with the same function and that is repeated several times in a set of pages consistent?</li>
	</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.2.4</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F31</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 4.11</li>
 </ul>
<h3 id="crit-11-4">Criterion 11.4 [Bronze] In each form, are each control <a href="index.php/glossary-76.html#mEtiquette">label</a> and its related control positioned next to each other?</h3>
<ul class="tests">
		<li id="test-11-4-1"> Test 11.4.1: In each form, are each control <a href="index.php/glossary-76.html#mEtiquette">label</a> and its related control positioned next to each other?</li>
	</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.3.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G162</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 3.3</li>
 </ul>
<h3 id="crit-11-5">Criterion 11.5 [Bronze] In each form, is <a href="index.php/glossary-76.html#mInfoMNature">same nature information</a> grouped together, if necessary?</h3>
<ul class="tests">
		<li id="test-11-5-1">Test 11.5.1: In each form, is <a href="index.php/glossary-76.html#mInfoMNature">same nature information</a> grouped together via a fieldset tag, if necessary?
    </li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.3.1 - 3.3.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H71</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 3.4</li>
 </ul>
<h3 id="crit-11-6">Criterion 11.6 [Bronze] In each form, does each form field grouping have a legend?</h3>
<ul class="tests">
		<li id="test-11-6-1"> Test 11.6.1: Is each form field grouping (fieldset tag) followed by a legend (legend tag) in the source code?
    </li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.3.1 - 3.3.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H71</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 3.5</li>
 </ul>
<h3 id="crit-11-7">Criterion 11.7 [Bronze] In each form, is each legend related with a form field grouping relevant?</h3>
<ul class="tests">
		<li id="test-11-7-1"> Test 11.7.1: In each form, is each legend (legend tag) related with a form field grouping (fieldset tag) relevant?
    </li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.3.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H71</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 3.6</li>
 </ul>
<h3 id="crit-11-8">Criterion 11.8 [Bronze] In each form, is each <a href="index.php/glossary-76.html#mListeChoix">selection list</a> structured in a relevant way?</h3>
<ul class="tests">
	<li id="test-11-8-1"> Test 11.8.1: In each form, are for each <a href="index.php/glossary-76.html#mListeChoix">selection list</a> (select tag) items grouped together with an optgroup tag, if necessary?</li>
	<li id="test-11-8-2"> Test 11.8.2: In each <a href="index.php/glossary-76.html#mListeChoix">selection list</a> (select tag), does each list item grouping (optgroup tag) have a label attribute?</li>
	<li id="test-11-8-3"> Test 11.8.3: For each list item grouping (optgroup tag) with a label attribute, is the content of the label attribute relevant?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 1.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H85</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 3.7 - 3.8 - 3.9</li>
 </ul>
<h3 id="crit-11-9">Criterion 11.9 [Bronze] In each form, is the text of each <a href="index.php/glossary-76.html#mBtnForm">button</a> relevant?</h3>
<ul class="tests">
		<li id="test-11-9-1">Test 11.9.1: In each form, does the text of each <a href="index.php/glossary-76.html#mBtnForm">button</a> pass one of the conditions below?
 <ul class="ssTests">
		  <li> The content of the value attribute of the form buttons of type submit, reset or button is relevant</li>
          <li> The content of the &lt;button&gt; tag is relevant</li>
          <li> The content of the title attribute is relevant</li>
</ul>
</li></ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 4.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H91</li>
	<li><strong><abbr>RGAA</abbr> tests</strong> : 6.13 - 6.14</li>
 </ul>
<h3 id="crit-11-10">Criterion 11.10 [Bronze] In each form, is the <a href="index.php/glossary-76.html#mControleSaisie">input control</a> used in a relevant way?</h3>
<ul class="tests">
		<li id="test-11-10-1"> Test 11.10.1: For each form, are mandatory fields indicated in a relevant way?</li>
    <li id="test-11-10-2"> Test 11.10.2: For each form, are input errors indicated in a relevant way?</li>
    		<li id="test-11-10-3"> Test 11.10.3: For each form, is for each mandatory field the <a href="index.php/glossary-76.html#mTypeDonnes">data and/Or format type</a> specified, if necessary?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 3.3.1 - 3.3.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G83 - G84 - G85 - G89 -  G184 - H44 - SCR18 - SCR32</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 3.1 - 3.2</li>
 </ul>
<h3 id="crit-11-11">Criterion 11.11 [Silver] In each form, is <a href="index.php/glossary-76.html#mControleSaisie">input control</a> accompanied, if possible, with suggestions that facilitate the correction of input errors?</h3>
<ul class="tests">
		<li id="test-11-11-1"> Test 11.11.1: For each form, for each input error, are each <a href="index.php/glossary-76.html#mTypeDonnes">data types and formats</a> suggested, if necessary?</li>
		<li id="test-11-11-2"> Test 11.11.2: For each form, for each input error, are examples for expected values suggested, when possible?
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.3.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G84 - G85 - G177</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 3.13</li>
 </ul>
<h3 id="crit-11-12">Criterion 11.12 [Silver] For each form, can financial, legal or personal data be changed, updated or recovered by the user?</h3>
<ul class="tests">
		<li id="test-11-12-1"> Test 11.12.1: For each form, does the input of financial, legal or personal data pass one of the conditions below?
   <ul class="ssTests">
					<li> The user can change or cancel data and actions on this data after it has been entered</li>
  				<li> The user can check and correct data before form submission</li>
   				<li> An explicit confirmation mechanism, via a form field or an additional step, is available</li>
</ul>
</li>
		 <li id="test-11-12-2">Test 11.12.2: For each form, does the deletion of financial, legal or personal data pass one of the conditions below?
  <ul class="ssTests">
					<li> A mechanism allows to recover data that have been deleted by the user</li>
  				<li> An explicit mechanism confirming deletion, via a form field or an additional step, is available
</li>
	</ul></li></ul>
	<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.3.4</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G98 - G99 - G155 - G164 - G168</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 3.14</li>
 </ul>
<h3 id="crit-11-13">Criterion 11.13 [Gold]
For each form, can all data be changed, updated or recovered by the user?</h3>
<ul class="tests">
		<li id="test-11-13-1"> Test 11.13.1: For each form, does data input pass one of the conditions below?
  <ul class="ssTests">
					<li> The user can change or cancel data and actions on this data after it has been entered</li>
  				<li> The user can check and correct data before form submission</li>
  				<li> An explicit confirmation mechanism, via a form field or an additional step, is available
</li>
</ul>
</li>
		 <li id="test-11-13-2"> Test 11.13.2: For each form, does data deletion pass one of the conditions below?
 <ul class="ssTests">
					<li> A mechanism allows to recover data that has been deleted by the user</li>
          <li> An explicit mechanism confirming deletion, via a form field or an additional step, is available
</li></ul>
	</li>
	</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.3.6</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G98 - G99 - G155 - G164- G168</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 3.15</li>
 </ul>
<h3 id="crit-11-14">Criterion 11.14 [Gold] For each form, is input assistance available?</h3>
<ul class="tests">
		<li id="test-11-14-1"> Test 11.14.1: Does each form pass one of the conditions below?
 <ul class="ssTests">
				<li> There is a link to a help page</li>
<li>Indications before the form are available</li>
<li>Indications before form fields are available</li>
<li>an assistant is available</li>
 </ul>
 </li>
 <li id="test-11-14-2">Test 11.14.2: Does each field of type text pass one of the conditions below, if necessary?
 <ul class="ssTests">
 <li> A spell checking tool is available</li>
 <li>typing suggestions are available </li>
 </ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.3.5</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G71 - G193 - G194 - G184 - G89 - F81</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 3.16</li>
 </ul>
<h3 id="crit-11-15">Criterion 11.15 [Gold] For each form, is each input assistance relevant?</h3>
<ul class="tests">
		<li id="test-11-15-1"> Test 11.15.1: For each form, is each input assistance relevant?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion </strong>: 3.3.5</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G71 - G193 - G194 - G184 - G89 - F81</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 3.16</li>
 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
<div class="thematique" id="navigation">
			<h2>Navigation</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#formulaire"><em>Forms</em></a></li>
				<li class="bas"><a href="index.php/accessiweb-22-english-version.html#consultation"><em>Consultation</em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principles: operable, understandable.</p>
<h3>Guideline:</h3>
<p>Facilitate navigation in a <a href="index.php/glossary-76.html#mEnsemblePages">set of pages</a> through at least two different navigation systems (<a href="index.php/glossary-76.html#mMenuNav">navigation menu</a>, site map or <a href="index.php/glossary-76.html#mMoteurRecherche">search engine</a>), breadcrumb trail and the specification of the active page in the navigation menu. Identify groups of important links and the content area, and provide the ability to avoid them through internal navigation links. Ensure that tabbing order is consistent and that the page does not contain keyboard trap.</p>
</div>
<h3 id="crit-12-1">Criterion 12.1 [Silver] Does each <a href="index.php/glossary-76.html#mEnsemblePages">set of pages</a> have at least two different <a href="index.php/glossary-76.html#mSysNav">navigation systems</a> (<a href="index.php/glossary-76.html#cpCrit12-1" title="Special cases for criterion 12.1">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-12-1-1"> Test 12.1.1: Does each <a href="index.php/glossary-76.html#mEnsemblePages">set of pages</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit12-1" title="Special cases for criterion 12.1">except in special cases</a>)?
  <ul class="ssTests">
					<li> A <a href="index.php/glossary-76.html#mMenuNav">navigation menu</a> and a site map are available</li>
  				<li>  A <a href="index.php/glossary-76.html#mMenuNav">navigation menu</a> and a <a href="index.php/glossary-76.html#mMoteurRecherche">search function</a> are available</li>
  				<li> A <a href="index.php/glossary-76.html#mMoteurRecherche">search function</a> and a site map are available</li>
	</ul>
	</li>
	</ul>
	<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 2.4.5 - 2.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H59 - G63 - G64 - G161</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 6.17 - 6.21 - 6.34</li>
 </ul>
<h3 id="crit-12-2">Criterion 12.2 [Silver] On each <a href="index.php/glossary-76.html#mEnsemblePages">set of pages</a>, are the menu or the <a href="index.php/glossary-76.html#mBarreNav">navigation bars</a> always located at the same place (<a href="index.php/glossary-76.html#cpCrit12-" title="Special cases for criterion 12.2">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-12-2-1"> Test 12.2.1: On each <a href="index.php/glossary-76.html#mEnsemblePages">set of pages</a>, does each page with a <a href="index.php/glossary-76.html#mMenuNav">navigation menu</a> pass the conditions below (<a href="index.php/glossary-76.html#cpCrit12-" title="Special cases for criterion 12.2">except in special cases</a>)?
   <ul class="ssTests">
		  <li> The <a href="index.php/glossary-76.html#mMenuNav">navigation menu</a> is always located at the same place in the presentation</li>
          <li> The <a href="index.php/glossary-76.html#mMenuNav">navigation menu</a> is always presented in the same relative order in the source code.</li>
	</ul>
	</li>
<li id="test-12-2-2">Test 12.2.2 Does each <a href="index.php/glossary-76.html#mBarreNav">navigation bar</a> that is repeated in a set of pages pass the conditions below (<a href="index.php/glossary-76.html#cpCrit12-" title="Special cases for criterion 12.2">except in special cases</a>)?
   <ul class="ssTests">
		  <li> The <a href="index.php/glossary-76.html#mBarreNav">navigation bar</a> is always located at the same place in the presentation	</li>
   	      <li> The <a href="index.php/glossary-76.html#mBarreNav">navigation bar</a> is always presented in the same relative order in the source code.</li>
	 </ul>
	 </li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.2.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G61 - F66</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.22</li>
 </ul>
<h3 id="crit-12-3">Criterion 12.3 [Silver] On each <a href="index.php/glossary-76.html#mEnsemblePages">set of pages</a>, do the menu and the navigation bars have a consistent presentation (<a href="index.php/glossary-76.html#cpCrit12-" title="Special cases for criterion 12.3">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-12-3-1"> Test 12.3.1: On each <a href="index.php/glossary-76.html#mEnsemblePages">set of pages</a>, does the main <a href="index.php/glossary-76.html#mMenuNav">navigation menu</a> have a consistent presentation (<a href="index.php/glossary-76.html#cpCrit12-" title="Special cases for criterion 12.3">except in special cases</a>)?</li>
		<li id="test-12-3-2"> Test 12.3.2: On each <a href="index.php/glossary-76.html#mEnsemblePages">set of pages</a>, do repeated navigation bars have a consistent presentation (<a href="index.php/glossary-76.html#cpCrit12-" title="Special cases for criterion 12.3">except in special cases</a>)?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.2.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G61</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.23</li>
 </ul>
<h3 id="crit-12-4">Criterion 12.4 [Silver] Is the <a href="index.php/glossary-76.html#mPlanSite">"site map" page</a> relevant?</h3>
<ul class="tests">
		<li id="test-12-4-1"> Test 12.4.1: Does the <a href="index.php/glossary-76.html#mPlanSite">"site map" page </a> represent the site general architecture?</li>
		<li id="test-12-4-2"> Test 12.4.2: Are the links of the site map functional?</li>
		<li id="test-12-4-3"> Test 12.4.3: Do the links of the site map refer to the pages that are specified by the text?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 2.4.5 - 2.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G63</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.18</li>
 </ul>
<h3 id="crit-12-5">Criterion 12.5 [Silver] In each set of pages, is the <a href="index.php/glossary-76.html#mPlanSite">"site map" page</a> accessible in an identical way?</h3>
<ul class="tests">
		<li id="test-12-5-1"> Test 12.5.1: In each set of pages, is the <a href="index.php/glossary-76.html#mPlanSite">"site map" page</a> accessible from an identical functionality?</li>
		<li id="test-12-5-2"> Test 12.5.2: In each set of pages, is the functionality leading to the <a href="index.php/glossary-76.html#mPlanSite">"site map" page </a> located at the same place in the presentation?</li>
		<li id="test-12-5-3"> Test 12.5.3: In each set of pages, is the functionality leading to the <a href="index.php/glossary-76.html#mPlanSite">"site map" page </a> always presented in the same relative order in the source code?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 2.4.5 - 2.4.8 - 3.2.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G61 - G63</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.19</li>
 </ul>
<h3 id="crit-12-6">Criterion 12.6 [Silver] In each set of pages, is the <a href="index.php/glossary-76.html#mMoteurRecherche">search function</a> accessible in an identical way?</h3>
<ul class="tests">
		<li id="test-12-6-1"> Test 12.6.1: In each set of pages, is the <a href="index.php/glossary-76.html#mMoteurRecherche">search function</a> accessible with an identical functionality?</li>
		<li id="test-12-6-2"> Test 12.6.2: In each set of pages, is the functionality leading to the <a href="index.php/glossary-76.html#mMoteurRecherche">search function</a> located at the same place in the presentation?</li>
		<li id="test-12-6-3"> Test 12.6.3: In each set of pages, is the functionality leading to the <a href="index.php/glossary-76.html#mMoteurRecherche">search function</a> always presented in the same relative order in the source code?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.2.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G61 - F66</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: -</li>
 </ul>
<h3 id="crit-12-7">Criterion 12.7 [Silver] On each page within a <a href="index.php/glossary-76.html#mCollecPage">collection of pages</a>, are links facilitating navigation available?</h3>
<ul class="tests">
		<li id="test-12-7-1">Test 12.7.1: Does each page within a <a href="index.php/glossary-76.html#mCollecPage">collection of pages</a>, pass the conditions below?
<ul class="ssTests">
<li>A link alloows to access to the next page</li>
<li>A link allows to access to the previous page</li>
<li><a
href="index.php/glossary-76.html#mAccColl">links
 allow to access to each page</a> of the <a
href="index.php/glossary-76.html#mCollecPage">collection
 of pages</a></li>
</ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 2.4.5 - 2.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G63 - G125 - G126 - G127 - G185</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.35</li>
 </ul>
<h3 id="crit-12-8">Criterion 12.8 [Gold] On each Web page, is a breadcrumb trail available?</h3>
<ul class="tests">
		<li id="test-12-8-1">Test 12.8.1: On each web page, is a breadcrumb trail available?</li></ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G65</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.20</li>
 </ul>
<h3 id="crit-12-9">Criterion 12.9 [Gold] On each Web page, is the breadcrumb trail relevant?</h3>
<ul class="tests">
		<li id="test-12-9-1"> Test 12.9.1: On each Web page, does the breadcrumb trail represents the page position in the site structure?
    </li>
		</ul>
		<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G65</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.20</li>
 </ul>
<h3 id="crit-12-10">Criterion 12.10 [Bronze] On each Web page, are groups of important links (menu, navigation bar...) and the content area identified?</h3>
<ul class="tests">
		<li id="test-12-10-1">Test 12.10.1: On each Web page, is each group of important links implemented in a common element?</li>
    <li id="test-12-10-2">Test 12.10.2: On each Web page, does each group of important links pass one of the conditions below?
  <ul class="ssTests">
					<li> The element that structures the group of important links has an Id attribute</li>
          <li> The element that structures the group of important links is immediately preceeded, in the source code, with a named anchor</li>
          <li> the first link in the group is immediately preceeded, in the source code, with a named anchor</li>
  </ul></li>
<li id="test-12-10-3"> Test 12.10.3: On each Web page, does the content area pass one of the conditions below?
 <ul class="ssTests">
					<li> The content area has an Id attribute</li>
  				<li> The content area is immediately preceeded, in the source code, with a named anchor</li>
  				<li> the first element of the content area is immediately preceeded, in the source code, with a named anchor</li>
	</ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.4.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H50</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 6.29 - 6.30</li>
 </ul>
<h3 id="crit-12-11">Criterion 12.11 [Bronze] On each Web page, are <a href="index.php/glossary-76.html#mLienEvitement">bypass or quick access links</a> to groups of important links and to the content area available?</h3>
<ul class="tests">
		<li id="test-12-11-1"> Test 12.11.1: On each Web page, does a link allow to bypass each identified group of important links or to access it?</li>
    <li id="test-12-11-2"> Test 12.11.2: On each Web page, does a link allow to bypass the identified content area or to access it?</li>
    <li id="test-12-11-3"> Test 12.11.3: On each Web page, does each <a href="index.php/glossary-76.html#mLienEvitement">bypass or quick access link</a> work?</li>
    <li id="test-12-11-4"> Test 12.11.4: On each set of pages, do <a href="index.php/glossary-76.html#mLienEvitement">bypass or quick access links</a> pass the conditions below?
  <ul class="ssTests">
					<li> Each link is located at the same place in the presentation</li>
          <li> Each link is always presented in the same relative order in the source code</li>
	</ul>	</li>	</ul>		<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 2.4.1 - 2.4.3 - 3.2.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G1 - G59 - G123 - G124 - F44 - F66</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 6.31 - 6.32 - 6.33</li>
 </ul>
<h3 id="crit-12-12">Criterion 12.12 [gold] On each Web page, is the current viewed page specified in the <a href="index.php/glossary-76.html#mMenuNav">navigation menu</a>?</h3>
<ul class="tests">
		<li id="test-12-12-1">Test 12.12.1: On each Web page, is the current viewed page specified in the <a href="index.php/glossary-76.html#mMenuNav">navigation menu</a>?</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.4.8</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G128</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.36</li>
 </ul>

<h3 id="crit-12-13">Criterion 12.13 [Bronze] On each Web page, is <a
href="index.php/glossary-76.html#mOrdTab">tabbing order</a> <a href="index.php/glossary-76.html#mCoherentODL">consistent</a>?</h3>
<ul class="tests">
		<li id="test-12-13-1"> Test 12.13.1: On each Web page, is the tabbing order through the content <a href="index.php/glossary-76.html#mCoherentODL">consistent</a> ?</li>
		<li id="test-12-13-2"> Test 12.13.2: For each <a href="index.php/glossary-76.html#mScript">script</a> that updates or inserts content, does tabbing order remain <a href="index.php/glossary-76.html#mCoherentODL">consistent</a>?</li>
</ul><h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  2.4.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G59 - H4 - F44  - SCR26 - SCR27 - SCR37 - C27</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.24 - 8.6</li>
 </ul>
<h3 id="crit-12-14">Criterion 12.14 [Bronze] On each Web page, navigation must not contain keyboard trap. Does this rule have been followed?</h3>
<ul class="tests">
		<li id="test-12-14-1">Test 12.14.1: On each Web page, does each element that receives focus pass one of the conditions below?
  <ul class="ssTests">
					<li> It is possible to reach the next or previous element that can receive focus with the tab key</li>
          <li> The user is informed about a functional mechanism allowing to reach the next or previous element that can receive focus with the keyboard</li>
	 </ul></li>
  </ul>
	<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.1.1 - 2.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  H91 - G21 - F10</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.6</li>
 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
<div class="thematique" id="consultation">
			<h2>Consultation</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb-22-english-version.html#navigation"><em>Navigation</em></a></li>
			</ul>
			<div class="introCrit">
<p><abbr>WCAG</abbr> principles: perceivable, operable, understandable, robust.</p>
<h3>Guideline:</h3>
<p>Check that the user can control the refresh processes, sudden changes in luminance, openings of new windows and moving or blinking content.
Specify when a content opens in a new window and provide information regarding viewing of files to download. Do not make the completion of a task rely upon a time limit except if it is essential and ensure that entered data is retrieved after an authenticated session has expired. Ensure that unusual phrases and jargon are made explicit. Provide accessible versions or make documents to download accessible.</p>
</div>
<h3 id="crit-13-1">Criterion 13.1 [Bronze] For each Web page, can the user control each time limit that modifies content (<a href="index.php/glossary-76.html#cpCrit13-1" title="Special cases for criterion 13.1">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-13-1-1"> Test 13.1.1: For each Web page, does each <a href="index.php/glossary-76.html#mProcedeRafraichissement">refresh process</a> or <a href="index.php/glossary-76.html#mRedirectAuto">automatic redirect</a> (code, script, object tag, applet tag, meta tag) pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit13-1" title="Special cases for criterion 13.1">except in special cases</a>)?
 <ul class="ssTests">
					<li> The user can stop or restart refresh</li>
 					<li> The user can increase the time limit between two refreshs to at least ten times</li>
 					<li> The user is warned about the imminence of the refresh and has at least 20 seconds time to increase the time limit before the next refresh</li>
				<li> The time limit between two refreshs is at least twenty hours</li>
</ul>
</li>
		 <li id="test-13-1-2"> Test 13.1.2: For each Web page, is each redirect process initiated via the meta tag immediate (<a href="index.php/glossary-76.html#cpCrit13-1" title="Special cases for criterion 13.1">except in special cases</a>)?</li>
		 <li id="test-13-1-3"> Test 13.1.3: For each Web page, does each redirect process initiated via a <a href="index.php/glossary-76.html#mScript">script</a> pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit13-1" title="Special cases for criterion 13.1">except in special cases</a>)?
 <ul class="ssTests">
					<li> the user can stop or restart the redirect</li>
 					<li> the user can increase the time limit to at least ten times before redirection</li>
  				<li> The user is warned about the imminence of the redirection and has at least twenty seconds to increase the time limit before the next redirection</li>
  				<li> The time limit before the redirection is at least twenty hours</li>
		</ul>
		</li>
<li id="test-13-1-4">Test 13.1.4: For each Web page,  does each server-side redirect process pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit13-1" title="Special cases for criterion 13.1">except in special cases</a>)?
<ul class="ssTests">
					<li> The user can stop or restart the redirection</li>
 					<li> The user can increase the time limit before the redirection to at least ten times</li>
  				<li> The user is warned about the imminence of the redirection and has at least twenty seconds to increase the time limit before the next redirection</li>
  				<li> Time limit before redirection is at least twenty hours</li>
</ul>
</li>
<li id="test-13-1-5">Test 13.1.5: For each Web page, does each process restricting a session time pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit13-1" title="Special cases for criterion 13.1">except in special cases</a>)?
<ul class="ssTests">
					<li>The user can suppress time limit</li>
 					<li>The user can increase time limit</li>
  				<li>Time limit before the session expires is at least twenty hours.</li>
</ul>
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 2.1.2 - 2.2.1 - 2.2.4 - 3.2.5</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: F40 - F41 - F61 - F58 - G76 - H76 - SVR1- SCR1 - SCR36 - G133 - G180 - G75 - G110</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 6.7 - 6.8 - 6.9 - 6.10 - 6.11 - 6.12</li>
 </ul>
<h3 id="crit-13-2">Criterion 13.2 [Bronze]
On each Web page, is the user warned each time a new window opens?</h3>
<ul class="tests">
		<li id="test-13-2-1"> Test 13.2.1: On each Web page, for each new window opening launched via a link (target="_blank" attribute) or a javascript command, is the user warned?</li>
		<li id="test-13-2-2"> Test 13.2.2: On each Web page, for each window opening launched via an object, applet or embed tag, is the user warned?</li>
		<li id="test-13-2-3"> Test 13.2.3: On each Web page, for each window opening launched via a form control, is the user warned?
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 2.4.4 - 3.2.5</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  H33 - H83 - F22 - SCR24</li>
	<li><strong><abbr>RGAA</abbr> tests</strong> : 6.2 - 6.3 - 6.4 - 6.25</li>
 </ul>
<h3 id="crit-13-3">Criterion 13.3 [Bronze] On each Web page, the opening of a new window must not be launched without user action. Does this rule have been followed?</h3>
<ul class="tests">
		<li id="test-13-3-1"> Test 13.3.1: On each Web page, the opening of a new window must not be launched without user action. Does this rule have been followed?
    </li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 3.2.1 - 3.2.5</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G107 - F22 - F52 - F55 - F60</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 6.5</li>
 </ul>
<h3 id="crit-13-4">Criterion 13.4 [Gold] On each Web page, it is not allowed that a task require a time limit to be completed, except if it occurs in real time or if this time limit is essential. Does this rule have been followed?</h3>
<ul class="tests">
		<li id="test-13-4-1"> Test 13.4.1: On each Web page, does each task with a time limit pass one of the conditions below?
	<ul class="ssTests">
				<li> The task occurs in real time</li>
 				<li> The task requires a time limit that is essential for the task to occur successfully</li>
	</ul>
	</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  2.2.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G5</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 8.10</li>
 </ul>
<h3 id="crit-13-5">Criterion 13.5 [Gold] On each Web page, when an authenticated session is interrupted, is the data entered by the user retrieved after re-authenticating?</h3>
<ul class="tests">
		<li id="test-13-5-1">Test 13.5.1: On each Web page, when an authenticated session is interrupted, is the data entered by the user retrieved after re-authenticating?
     </li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  2.2.5</li>	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G105 - G181 - F12</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 8.11</li>
 </ul>
<h3 id="crit-13-6">Criterion 13.6 [Bronze] On each Web page, is for each file to download information available regarding its viewing (<a href="glossaire.html#cpCrit13-6" title="Special cases for criterion 13.6">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-13-6-1"> Test 13.6.1: On each Web page, does each file to download via a link or a form have information about its format (<a href="glossaire.html#cpCrit13-6" title="Special cases for criterion 13.6">except in special cases</a>)?</li>
		<li id="test-13-6-2"> Test 13.6.2: On each Web page, does each file to download via a link or a form have information about its weight (<a href="glossaire.html#cpCrit13-6" title="Special cases for criterion 13.6">except in special cases</a>)?</li>
		<li id="test-13-6-3"> Test 13.6.3: On each Web page, does each file to download via a link or a form have information about its human language if necessary (<a href="glossaire.html#cpCrit13-6" title="Special cases for criterion 13.6">except in special cases</a>)?
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  2.4.4</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  H33</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 6.26 - 6.27 - 6.28</li>
 </ul>
<h3 id="crit-13-7">Criterion 13.7 [Bronze] On each Web page, does each electronic <a href="index.php/glossary-76.html#mVaccessible">document to download</a> have an accessible version if necessary (<a href="index.php/glossary-76.html#cpCrit13-7" title="Special cases for criterion 13.7">except in special cases</a>)?</h3>
<ul class="tests">
		<li id="test-13-7-1"> Test 13.7.1: On each Web page, does each downloading functionality for an electronic document pass one of the conditions below (<a href="index.php/glossary-76.html#cpCrit13-7" title="Special cases for criterion 13.7">except in special cases</a>)?
<ul class="ssTests">
			<li> The <a href="index.php/glossary-76.html#mVaccessible">document to download</a> is accessibility-supported</li>
          <li> An alternative accessibility-supported version of the <a href="index.php/glossary-76.html#mVaccessible">document to download</a> is available</li>
          <li> An alternative version of the <a href="index.php/glossary-76.html#mVaccessible">document to download</a> is available in HTML format</li>
</ul>
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.1.1 - 1.3.2 - 1.3.1 - 2.4.1 - 2.4.3 - 3.1.1 - 4.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>:  G10 - G135 - F15</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 10.13</li>
 </ul>
<h3 id="crit-13-8">Criterion 13.8 [Bronze] For each electronic document with an accessible version, does this version provide the same information?</h3>
<ul class="tests">
		<li id="test-13-8-1">Test 13.8.1: Does each electronic document with an accessible version pass one of the conditions below?
 <ul class="ssTests">
					<li> The accessibility-supported version provides the same information</li>
          <li> The alternative version in HTML format is relevant and provides the same information</li>
	</ul></li>
	</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>:  1.1.1 - 1.3.2 - 1.3.1 - 2.4.1 - 2.4.3 - 3.1.1 - 4.1.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G10 - G135 - F15</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 10.13</li>
 </ul>
<h3 id="crit-13-9">Criterion 13.9 [Gold] On each Web page, are unusual phrases, idioms or jargon made explicit?</h3>
<ul class="tests">
		<li id="test-13-9-1">Test 13.9.1: On each Web page, does each phrase used in an unusual or restricted way,
each idiom or jargon pass one of the conditions below?
<ul class="ssTests">
					<li> A definition is available in the context right next to the phrase and is specified by the dfn tag</li>
					<li> A definition is available via a definition list</li>
					<li> A definition is available on the page</li>
					<li>The phrase is contained in a link  allowing to access to the definition.</li>
</ul>
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.1.3</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G55 - G101 - G112 - H54</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 12.4</li>
 </ul>
<h3 id="crit-13-10">Criterion 13.10 [Gold] On each Web page, for each
phrase used in an unusual or restricted way, each idiom or jargon with a definition, is this definition relevant?</h3>
 <ul class="tests">
 		<li id="test-13-10-1">Test 13.10.1: On each Web page, for each phrase used in an unusual or restricted way, idiom or jargon with a definition, does this definition pass one of the conditions below?
 <ul class="ssTests">
 					<li> The content of the associated definition is relevant</li>
  					<li> The content of the dd tag of the definition list is relevant</li>
  					<li> The definition provided by the adjacent context is relevant.</li>
 </ul>
 </li>
 </ul>
  <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
<ul class="correspondance">
 	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: <a
 href="http://www.w3.org/Translations/WCAG20-fr/#meaning-idioms">3.1.3</a></li>
<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: <a href="http://www.w3.org/TR/WCAG-TECHS/G55.html">G55</a> - <a
 href="http://www.w3.org/TR/WCAG-TECHS/G101.html">G101</a> -
  <a href="http://www.w3.org/TR/WCAG-TECHS/G112.html">G112</a>
  - <a href="http://www.w3.org/TR/WCAG-TECHS/H54.html">H54</a></li>
 	<li><strong><abbr>RGAA</abbr> test</strong>: 12.4</li>
  </ul>

<h3 id="crit-13-11">Criterion 13.11 [Bronze] On each Web page, does each cryptical content (ascii art, emoticon, cryptical syntax) have an alternative?</h3>
<ul class="tests">
		<li id="test-13-11-1"> Test 13.11.1: On each Web page, does each cryptical content (ascii art, emoticon, cryptical syntax) pass one of the conditions below?
 <ul class="ssTests">
					<li> A title attribute is available</li>
          <li> A definition is provided by the adjacent context</li>
</ul>
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>:  1.1.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: H86 - F71 - F72</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 12.5</li>
</ul>
<h3 id="crit-13-12">Criterion 13.12 [Bronze] On each Web page, for each cryptical content (ascii art, emoticon, cryptical syntax) with an alternative, is this alternative relevant?</h3>
<ul class="tests">
		<li id="test-13-12-1"> Test 13.12.1: On each Web page, does each cryptical content (ascii art, emoticon, cryptical syntax) pass one of the conditions below?
 <ul class="ssTests">
<li> the content of the title attribute is relevant</li>
<li> the definition provided by the adjacent context is relevant</li>
</ul>
</li>
</ul>
<h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: <a
href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>
<li><strong><abbr>WCAG</abbr>
 2.0 sufficient technique(s) and/or failure(s)</strong>: <a href="http://www.w3.org/TR/WCAG-TECHS/H86.html"
>H86</a> - <a
href="http://www.w3.org/TR/WCAG-TECHS/F71.html" >F71</a> - <a
 href="http://www.w3.org/TR/WCAG-TECHS/F72.html" >F72</a></li>
<li><strong><abbr>RGAA</abbr> test</strong>: 12.5</li>
</ul>
<h3 id="crit-13-13">Criterion 13.13 [Gold] On each Web page, for each word whose meaning cannot be understood without knowing the pronunciation, is this pronunciation specified?</h3>
<ul class="tests">
		<li id="test-13-13-1">Test 13.13.1: On each Web page, does each word whose meaning cannot be understood without knowing the pronunciation, pass one of the conditions below?
 <ul class="ssTests">
					<li> The specification of the phonetic pronunciation is available in an adjacent way</li>
          <li> The specification of the phonetic pronunciation is accessible via a link</li>
</ul></li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.1.6</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G62 - G120 - G121</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 12.6</li>
 </ul>
<h3 id="crit-13-14">Criterion 13.14 [Gold] On each Web page, does each text that requires a reading ability more advanced than the lower secondary education level have an alternative version?</h3>
<ul class="tests">
		<li id="test-13-14-1"> Test 13.14.1: On each Web page, does each text that requires a reading ability more advanced than the lower secondary education level (except for proper name and title) pass one of the conditions below?
     <ul class="ssTests">
					<li> An illustration or graphic symbols that are adapted to the reading level of the lower secondary education level are available</li>
  				<li> A version in French sign language is available</li>
 					<li> A spoken version of the text is available</li>
 					<li> A summary that is adapted to the reading level of the lower secondary education level is available.</li>
 </ul>
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 3.1.5</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G79 - G86 - G103 - G160 - G153</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 12.10</li>
 </ul>
<h3 id="crit-13-15">Criterion 13.15 [Bronze] On each Web page, are <a href="index.php/glossary-76.html#mChangeLumi">sudden changes in luminance or flashing effects</a> used accurately?</h3>
<ul class="tests">
		<li id="test-13-15-1">Test 13.15.1: On each Web page, does each animated image (img tag or object tag) causing a suddent change in luminance or a flashing effect pass one of the conditions below?
  <ul class="ssTests">
<li> The effect frequency is less than three in one second</li>
          <li> The added up total area of effects is less than or equal to 21 824 pixels</li>
	</ul>
	</li>
		<li id="test-13-15-2:"> Test 13.15.2: On each Web page, does each <a href="index.php/glossary-76.html#mScript">script</a>  causing a sudden change in luminance or a flashing effect pass one of the conditions below?
 <ul class="ssTests">
					<li> The effect frequency is less than 3 in one second</li>
  				<li> The added up total area of the effects is less than or equal to 21 824 pixels</li>
	</ul>
	</li>
	<li id="test-13-15-3"> Test 13.15.3: On each Web page, does each CSS layout causing a sudden change in luminance or a flashing effect pass one of the conditions below?
  <ul class="ssTests">
					<li> The effect frequency is less than 3 in one second</li>
          <li>The added up total area of the effects is less than or equal to 21 824 pixels</li>
	</ul>
	</li>
<li id="test-13-15-4"> Test 13.15.4: On each Web page, does each java applet causing a sudden change in luminance or a flashing effect pass one of the conditions below?
 <ul class="ssTests">
					<li> The effect frequency is less than 3 in one second</li>
          <li> The added up total area of the effects is less than or equal to 21 824 pixels</li>
 </ul>
 </li>
 </ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.3.1</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G15 - G19 - G176</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 5.13 - 5.14 - 5.15</li>
 </ul>
<h3 id="crit-13-16">Criterion 13.16 [Gold] On each Web page, do the <a href="index.php/glossary-76.html#mChangeLumi">sudden changes in luminance or flashing effects</a> have a frequency less than or equal to 3 in one second?</h3>
<ul class="tests">
		<li id="test-13-16-1">Test 13.16.1: On each Web page, does each sudden change in luminance or a flashing effect caused by an animated image (img tag or object tag) have a frequency less than or equal to 3 in one second?</li>
		<li id="test-13-16-2"> Test 13.16.2: On each Web page, does each sudden change in luminance or a flashing effect caused by a <a href="index.php/glossary-76.html#mScript">script</a> have a frequency less than or equal to 3 in one second?</li>
		<li id="test-13-16-3"> Test 13.16.3: On each Web page, does each sudden change in luminance or a flashing effect caused by CSS layout have a frequency less than or equal to 3 in one second?</li>
		<li id="test-13-16-4"> Test 13.16.4: On each Web page, does each sudden change in luminance or a flashing effect caused by a java applet have a frequency less than or equal to 3 in one second?</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criterion</strong>: 2.3.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G19</li>
	<li><strong><abbr>RGAA</abbr> test</strong>: 5.17</li>
 </ul>
<h3 id="crit-13-17">Criterion 13.17 [Bronze] On each Web page, can each moving or blinking content be <a href="index.php/glossary-76.html#mControleMov">controlled by the user</a>?</h3>
<ul class="tests">
		<li id="test-13-17-1">Test 13.17.1: On each Web page, does each moving content that starts automatically, pass one of the conditions below?
 <ul class="ssTests">
					<li> The movement length is less than or equal to 5 seconds</li>
  				<li> The user can stop and restart movement</li>
   				<li> The user can display and hide the moving content</li>
   				<li> The user can display the whole information without movement.</li>
</ul>
</li>
<li id="test-13-17-2"> Test 13.17.2: On each Web page, does each blinking content that starts automatically, pass one of the conditions below?
  <ul class="ssTests">
					<li> The blinking length is less than or equal to 5 seconds</li>
   				<li> The user can stop and restart blinking</li>
   				<li> The user can display and hide blinking content</li>
   				<li> The user can display the whole information without blinking</li>
	 </ul>
</li>
</ul>
 <h4>Mapping with <abbr>WCAG</abbr> 2.0 and <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong><abbr>WCAG</abbr> 2.0 success criteria</strong>: 1.2.4 - 1.2.9 - 2.2.1 - 2.2.2</li>
	<li><strong><abbr>WCAG</abbr> 2.0 sufficient technique(s) and/or failure(s)</strong>: G9 - G11 - G152 - G186 - G187 - G151 - G157 - G191 - SM11 - SM12 - F47 - F50 - F4 - F7 - F16 - SCR22 - SCR36</li>
	<li><strong><abbr>RGAA</abbr> tests</strong>: 5.19 - 5.20 - 5.21 - 5.22 - 5.23 - 5.24 - 5.25 - 5.26</li>
 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb-22-english-version.html#wrapper"><em>Top of page</em></a></li>
			</ul>
		</div>
</div>
 
		</div>
			 
	<div class="clear"></div>
	</div>
<div class="clear"></div>
</div>


<!-- indexer::stop -->
<img src="http://accessiweb.org/cron.php" alt="" class="invisible" />
<!-- indexer::continue -->

</div>

</div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
   
</body>
</html>
AWW;

$withRgaaLinks = preg_replace_callback('#(RGAA<\/abbr> test[s]?)(<\/strong>:)(.*)(</li>)#', 'rgaaLine', $from);

// "failure(s)</strong>: H67 - G196 - F39 - F38</li> <li><strong><abbr>RGAA"
$withTechsLinks = preg_replace_callback('#(failure\(s\)<\/strong>:)(.*)(</li>)#', 'techsLine', $withRgaaLinks);


echo $withTechsLinks;