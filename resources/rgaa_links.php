<?php
// Search all in ST2:
//		'(.*)' => '(.*)',
// Replace all:
//		'$2' => '$1',
// Then in AW2.2 file, search will be:
//		[-|: ] [0-9]+\.[0-9]+
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

	return $matches[1].'<a href="'.$rgaa[$matches[2]].'">'.$matches[2].'</a>';
}

// HTML code really beginning with body opening tag because of JS escaped characters not kept by PHP treatment... (do not copy head element, it lacks 2 script elements)
$from = <<<AWW
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<!--

	This website is powered by Contao Open Source CMS :: Licensed under GNU/LGPL
	Copyright ©2005-2013 by Leo Feyer :: Extensions are copyright of their respective owners
	Visit the project website at http://www.contao.org for more information

//-->
<base href="http://accessiweb.org/"></base>
<title>AccessiWeb - AccessiWeb 2.2 - Liste Générale     </title>
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

<body id="top" class="referentiel centpourcent">
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

<div class="mod_article block" id="accessiweb-22-liste-generale">

<h2 class="ce_headline">AccessiWeb 2.2 - Liste Générale</h2>

		<div id="navMenu" class="thematique">
			<h2>Sommaire</h2>
			<ul>
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#intro">AccessiWeb, méthode de vérification de conformité</a></li>
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#images">Images</a></li>

				<li><a href="index.php/accessiweb_2.2_liste_generale.html#cadres">Cadres</a></li>

				<li><a href="index.php/accessiweb_2.2_liste_generale.html#couleurs">Couleurs</a></li>

				<li><a href="index.php/accessiweb_2.2_liste_generale.html#multimedia">Multimédia</a></li>
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#tableaux">Tableaux</a></li>
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#liens">Liens</a></li>

				<li><a href="index.php/accessiweb_2.2_liste_generale.html#script">Scripts</a></li>
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#elements">Éléments Obligatoires</a></li>

				<li><a href="index.php/accessiweb_2.2_liste_generale.html#structure">Structuration de l'information</a></li>

				<li><a href="index.php/accessiweb_2.2_liste_generale.html#presentation">Présentation de l'information</a></li>
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#formulaire">Formulaires</a></li>

				<li><a href="index.php/accessiweb_2.2_liste_generale.html#navigation">Navigation</a></li>
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#consultation">Consultation</a></li>
			</ul>

		</div>
		   <div id="annexe" class="thematique">
		<h2>Annexes</h2>
		<ul>

		<li> Liste des critères Documents Bureautiques en téléchargement :
		 <ul>
		  <li><a title="Liste des critères Documents Bureautiques en téléchargement - OpenOffice - 56 Ko" href="./tl_files/annexes_referentiels/liste-criteres-documents-bureautiques-telechargement-AW20.odt"> OpenOffice 56 <abbr title="Kilo Octet">Ko</abbr></a></li>
		  <li><a title="Liste des critères Documents Bureautiques en téléchargement - Word - 130 Ko" href="./tl_files/annexes_referentiels/liste-criteres-documents-bureautiques-telechargement-AW20.doc"> Word 56 Ko</a></li>
		 </ul>
		</li>

		<li> Méthodologies de tests AccessiWeb 2 :
		 <ul>
		  <li><a title="Méthodologies de tests AccessiWeb 2 - OpenOffice - 112 Ko" href="./tl_files/annexes_referentiels/methodologies-de-test-AccessiWeb2.odt"> OpenOffice 112 <abbr title="Kilo Octet">Ko</abbr></a></li>
		  <li><a title="Méthodologies de tests AccessiWeb 2 - Word - 692 Ko" href="./tl_files/annexes_referentiels/methodologies-de-test-AccessiWeb2.doc"> Word 692 Ko</a></li>
		 </ul>
		</li>


		<li> Présentation de la labellisation AccessiWeb :
		 <ul>
		  <li><a title="Présentation de la labellisation AccessiWeb - OpenOffice - 94 Ko" href="./tl_files/annexes_referentiels/Presentation_de_la_labellisation_AccessiWeb22.odt"> OpenOffice 94 Ko</a></li>
		  <li><a title="Présentation de la labellisation AccessiWeb - Word - 176 Ko" href="./tl_files/annexes_referentiels/Presentation_de_la_labellisation_AccessiWeb22.doc"> Word 176 Ko</a></li>
		 </ul>
		</li>

		<li> Déclaration de conformité partielle :
		 <ul>
			<li><a title="Déclaration de conformité partielle - OpenOffice - 74 Ko" href="./tl_files/annexes_referentiels/Declaration-de-conformite-partielle22.odt"> OpenOffice 74 Ko</a></li>
		  <li><a title="Déclaration de conformité partielle - Word - 128 Ko" href="./tl_files/annexes_referentiels/Declaration-de-conformite-partielle22.doc"> Word 128 Ko</a></li>
		 </ul>
		</li>
		<li> Déclaration d'environnement maitrisé :
		 <ul>

			<li><a title="Déclaration d'environnement maitrisé - OpenOffice - 71 Ko" href="./tl_files/annexes_referentiels/Declaration-environnement-maitrise.odt"> OpenOffice 71 Ko</a></li>
		  <li><a title="Déclaration d'environnement maitrisé - Word - 113 Ko" href="./tl_files/annexes_referentiels/Declaration-environnement-maitrise.doc"> Word 115 Ko</a></li>
		 </ul>
		</li>
		</ul>
		</div>
		<div class="thematique" id="images">

			<h2>Images</h2>
			<ul class="navTheme">
				<li class="bas"><a href="index.php/accessiweb_2.2_liste_generale.html#cadres"><em>Cadres</em></a></li>
			</ul>
			<div class="introCrit">

<p>Principe <abbr>WCAG</abbr> : perceptible.</p>

<h3>Recommandation :</h3>
<p>Donner à chaque <a href="index.php/glossaire_referentiel_2.2.html#mImgInfo">image porteuse d'information</a> une <a href="index.php/glossaire_referentiel_2.2.html#mAltTexteImg">alternative textuelle</a> pertinente et une <a href="index.php/glossaire_referentiel_2.2.html#mDescDetaillee">description détaillée</a> si nécessaire. Remplacer les images textes par du texte stylé lorsque  c’est possible.</p>

</div>

<h3 id="crit-1-1">Critère 1.1 [Bronze] Chaque image a-t-elle une <a href="index.php/glossaire_referentiel_2.2.html#mAltTexteImg">alternative textuelle</a> ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H35.html" hreflang="en">H35</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H36.html" hreflang="en">H36</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H37.html" hreflang="en">H37</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H53.html" hreflang="en">H53</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H24.html" hreflang="en">H24</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F65.html" hreflang="en">F65</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 4.1</li>
 </ul>

<h3 id="crit-1-2">Critère 1.2 [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mImgDeco">image de décoration</a> ayant une <a href="index.php/glossaire_referentiel_2.2.html#mAltTexteImg">alternative textuelle</a>, cette alternative est-elle vide ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H67.html" hreflang="en">H67</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G196.html" hreflang="en">G196</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F39.html" hreflang="en">F39</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F38.html" hreflang="en">F38</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  4.5</li>
 </ul>

<h3 id="crit-1-3">Critère 1.3 [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mImgInfo">image porteuse d'information</a> ayant une <a href="index.php/glossaire_referentiel_2.2.html#mAltTexteImg">alternative textuelle</a>, cette alternative est-elle pertinente (hors <a href="index.php/glossaire_referentiel_2.2.html#cpCrit1-3" title="Cas particuliers pour le critère 1.3">cas particuliers</a>) ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G94.html" hreflang="en">G94</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G95.html" hreflang="en">G95</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F30.html" hreflang="en">F30</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F71.html" hreflang="en">F71</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G196.html" hreflang="en">G196</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  4.3 - 4.4 - 4.6</li>
 </ul>

<h3 id="crit-1-4">Critère 1.4 [Bronze] Pour chaque image utilisée comme <a href="index.php/glossaire_referentiel_2.2.html#mcaptcha">CAPTCHA</a> ou comme <a href="index.php/glossaire_referentiel_2.2.html#mImgTest">image-test</a>, ayant une <a href="index.php/glossaire_referentiel_2.2.html#mAltTexteImg">alternative textuelle</a>, cette alternative permet-elle d'identifier la nature et la fonction de l'image ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G143.html" hreflang="en">G143</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G100.html" hreflang="en">G100</a></li>
	<li><strong>Test <abbr>RGAA</abbr></strong>  :  4.10</li>

 </ul>

<h3 id="crit-1-5">Critère 1.5 [Bronze] Pour chaque image utilisée comme <a href="index.php/glossaire_referentiel_2.2.html#mcaptcha">CAPTCHA</a>, une solution d'accès alternatif au contenu ou à la fonction du <a href="index.php/glossaire_referentiel_2.2.html#mcaptcha">CAPTCHA</a> est-elle présente ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G144.html" hreflang="en">G144</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  4.10</li>
 </ul>

<h3 id="crit-1-6">Critère 1.6 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mImgInfo">image porteuse d'information</a> a-t-elle, si nécessaire, une <a href="index.php/glossaire_referentiel_2.2.html#mDescDetaillee">description détaillée</a> ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G92.html" hreflang="en">G92</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G74.html" hreflang="en">G74</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G73.html" hreflang="en">G73</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H45.html" hreflang="en">H45</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  4.7 - 4.9</li>
 </ul>

<h3 id="crit-1-7">Critère 1.7 [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mImgInfo">image porteuse d'information</a> ayant une <a href="index.php/glossaire_referentiel_2.2.html#mDescDetaillee">description détaillée</a>, cette description est-elle pertinente ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F67.html" hreflang="en">F67</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  4.8</li>

 </ul>

<h3 id="crit-1-8">Critère 1.8 [Argent] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mImgText">image texte</a>, en l'absence d'un mécanisme de remplacement, doit si possible être remplacée par du <a href="index.php/glossaire_referentiel_2.2.html#mTexteStyle">texte stylé</a>. Cette règle est-elle respectée (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit1-8" title="Cas particuliers pour le critère 1.8">hors cas particuliers</a>) ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong> : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-text-presentation">1.4.5</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong> : <a href="http://www.w3.org/TR/WCAG-TECHS/G140.html" hreflang="en">G140</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C22.html" hreflang="en">C22</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C30.html" hreflang="en">C30</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  7.6</li>

 </ul>

<h3 id="crit-1-9">Critère 1.9 [Or] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mImgText">image texte</a> doit si possible être remplacée par du <a href="index.php/glossaire_referentiel_2.2.html#mTexteStyle">texte stylé</a>. Cette règle est-elle respectée (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit19-" title="Cas particuliers pour le critère 1.9">hors cas particuliers</a>) ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong> : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-text-images">1.4.9</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong> : <a href="http://www.w3.org/TR/WCAG-TECHS/G140.html" hreflang="en">G140</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C22.html" hreflang="en">C22</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C30.html" hreflang="en">C30</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  7.7</li>

 </ul>



			<ul class="hautdepage">
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>

			</ul>

		</div>
		<div class="thematique" id="cadres">
			<h2>Cadres</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb_2.2_liste_generale.html#images"><em>Images</em></a></li>
				<li class="bas"><a href="index.php/accessiweb_2.2_liste_generale.html#couleurs"><em>Couleurs</em></a></li>

			</ul>

			<div class="introCrit">
<p>Principe <abbr>WCAG</abbr> : robuste.</p>
<h3>Recommandation :</h3>
<p>Donner à chaque <a href="index.php/glossaire_referentiel_2.2.html#mCadre">cadre</a> et chaque <a href="index.php/glossaire_referentiel_2.2.html#mCadreEnLigne">cadre en ligne</a> un titre pertinent.</p>

</div>

<h3 id="crit-2-1">Critère 2.1 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mCadre">cadre</a> et chaque <a href="index.php/glossaire_referentiel_2.2.html#mCadreEnLigne">cadre en ligne</a> a-t-il un <a href="index.php/glossaire_referentiel_2.2.html#mTitreCadre">titre de cadre</a>  ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H64.html" hreflang="en">H64</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  1.1</li>
 </ul>

<h3 id="crit-2-2">Critère 2.2 [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mCadre">cadre</a> et chaque <a href="index.php/glossaire_referentiel_2.2.html#mCadreEnLigne">cadre en ligne</a> ayant un titre de cadre, ce <a href="index.php/glossaire_referentiel_2.2.html#mTitreCadre">titre de cadre</a> est-il pertinent ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H64.html" hreflang="en">H64</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  1.2</li>

 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>
			</ul>
		</div>
		<div class="thematique" id="couleurs">
			<h2>Couleurs</h2>

			<ul class="navTheme">

				<li class="haut"><a href="#cadres"><em>Cadres</em></a></li>
				<li class="bas"><a href="#multimedia"><em>Multimédia</em></a></li>
			</ul>
			<div class="introCrit">

<p>Principe <abbr>WCAG</abbr> : perceptible.</p>

<h3>Recommandation :</h3>

<p>Ne pas donner l'<a href="index.php/glossaire_referentiel_2.2.html#mInfoCouleur">information</a> uniquement par la couleur et utiliser des contrastes de couleurs suffisamment élevés.</p>
</div>

<h3 id="crit-3-1">Critère 3.1 [Bronze] Dans chaque page Web, l'<a href="index.php/glossaire_referentiel_2.2.html#mInfoCouleur">information</a> ne doit pas être donnée uniquement par la couleur. Cette règle est-elle respectée ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-without-color">1.4.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G14.html" hreflang="en">G14</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G122.html" hreflang="en">G122</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G182.html" hreflang="en">G182</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G111.html" hreflang="en">G111</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G138.html" hreflang="en">G138</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  2.1 - 2.2 - 2.3 - 2.4</li>
 </ul>

<h3 id="crit-3-2">Critère 3.2 [Bronze] Dans chaque page Web, l'<a href="index.php/glossaire_referentiel_2.2.html#mInfoCouleur">information</a> ne doit pas être donnée uniquement par la couleur. Cette règle est-elle implémentée de façon <a href="index.php/glossaire_referentiel_2.2.html#mPertinence">pertinente</a> ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-without-color">1.4.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F13.html" hreflang="en">F13</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  -</li>

 </ul>

<h3 id="crit-3-3">Critère 3.3 [Argent] Dans chaque page Web, le <a href="index.php/glossaire_referentiel_2.2.html#mContraste">contraste</a> entre la couleur du texte et la couleur de son arrière-plan est-il suffisamment élevé (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit3-" title="Cas particuliers pour le critère 3.3">hors cas particuliers</a>) ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-contrast">1.4.3</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G18.html" hreflang="en">G18</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G174.html" hreflang="en">G174</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G145.html" hreflang="en">G145</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F83.html" hreflang="en">F83</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  2.5 - 2.6 - 2.7 - 2.8 - 2.9 - 2.10</li>
 </ul>
<h3 id="crit-3-4">Critère 3.4 [Or] Dans chaque page Web, le <a href="index.php/glossaire_referentiel_2.2.html#mContraste">contraste</a> entre la couleur du texte et la couleur de son arrière-plan est-il amélioré (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit3-" title="Cas particuliers pour le critère 3.4">hors cas particuliers</a>) ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast7">1.4.6</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G17.html" hreflang="en">G17</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G18.html" hreflang="en">G18</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G174.html" hreflang="en">G174</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F83.html" hreflang="en">F83</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  2.11 - 2.12 - 2.13 - 2.14 - 2.15 - 2.16</li>
 </ul>

			<ul class="hautdepage">
				<li><a href="#wrapper"><em>Haut de page</em></a></li>
			</ul>

		</div>
		<div class="thematique" id="multimedia">
			<h2>Multimédia</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb_2.2_liste_generale.html#couleurs"><em>Couleurs</em></a></li>
				<li class="bas"><a href="index.php/accessiweb_2.2_liste_generale.html#tableaux"><em>Tableaux</em></a></li>

			</ul>
			<div class="introCrit">

<p>Principes <abbr>WCAG</abbr> : perceptible, utilisable, robuste.</p>
<h3>Recommandation :</h3>
<p>Donner si nécessaire à chaque media temporel une <a href="index.php/glossaire_referentiel_2.2.html#mTranscriptTextuel">transcription textuelle</a>, des <a href="index.php/glossaire_referentiel_2.2.html#mSsTitreSynchro">sous-titres synchronisés</a> et une audio-description synchronisée pertinents.
Donner à chaque média non-temporel une alternative textuelle pertinente.<br />

Rendre possible le  <a href="index.php/glossaire_referentiel_2.2.html#mControleConsult">contrôle de la consultation</a> de chaque media temporel et non-temporel au clavier et  s’assurer de leur compatibilité avec les technologies d’assistance.</p>

</div>

<h3 id="crit-4-1">Critère 4.1 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> pré-enregistré a-t-il, si nécessaire, une <a href="index.php/glossaire_referentiel_2.2.html#mTranscriptTextuel">transcription textuelle</a> ou une audio-description (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-" title="Cas particuliers pour le critère 4.1">hors cas particuliers</a>) ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-av-only-alt">1.2.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-audio-desc">1.2.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G58.html" hreflang="en">G58</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G69.html" hreflang="en">G69</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G78.html" hreflang="en">G78</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G158.html" hreflang="en">G158</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G159.html" hreflang="en">G159</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G173.html" hreflang="en">G173</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G8.html" hreflang="en">G8</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G166.html" hreflang="en">G166</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM6.html" hreflang="en">SM6</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM7.html" hreflang="en">SM7</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  5.2 - 5.4</li>
 </ul>

<h3 id="crit-4-2">Critère 4.2 [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> pré-enregistré ayant une <a href="index.php/glossaire_referentiel_2.2.html#mTranscriptTextuel">transcription textuelle</a> ou une audio-description synchronisée, celles-ci sont-elles pertinentes (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-" title="Cas particuliers pour le critère 4.2">hors cas particuliers</a>) ?</h3>

	<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-av-only-alt">1.2.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-audio-desc">1.2.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F30.html" hreflang="en">F30</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F67.html" hreflang="en">F67</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM6.html" hreflang="en">SM6</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM7.html" hreflang="en">SM7</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  5.3</li>
 </ul>
<h3 id="crit-4-3">Critère 4.3 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> synchronisé pré-enregistré a-t-il, si nécessaire, des <a href="index.php/glossaire_referentiel_2.2.html#mSsTitreSynchro">sous-titres synchronisés</a> (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-" title="Cas particuliers pour le critère 4.3">hors cas particuliers</a>) ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-captions">1.2.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G93.html" hreflang="en">G93</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G87.html" hreflang="en">G87</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM11.html" hreflang="en">SM11</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM12.html" hreflang="en">SM12</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F74.html" hreflang="en">F74</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F75.html" hreflang="en">F75</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.9</li>
 </ul>

<h3 id="crit-4-4">Critère 4.4 [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> synchronisé pré-enregistré ayant des <a href="index.php/glossaire_referentiel_2.2.html#mSsTitreSynchro">sous-titres synchronisés</a>, ces sous-titres sont-ils pertinents ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-captions">1.2.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F8.html" hreflang="en">F8</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F74.html" hreflang="en">F74</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F75.html" hreflang="en">F75</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM11.html" hreflang="en">SM11</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM12.html" hreflang="en">SM12</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.10</li>
 </ul>


<h3 id="crit-4-5">Critère 4.5 [Argent] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> en direct a-t-il, si nécessaire, des <a href="index.php/glossaire_referentiel_2.2.html#mSsTitreSynchro">sous-titres synchronisés</a> ou une <a href="index.php/glossaire_referentiel_2.2.html#mTranscriptTextuel">transcription textuelle</a> (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-" title="Cas particuliers pour le critère 4.5">hors cas particuliers</a>) ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-real-time-captions">1.2.4</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-live-audio-only">1.2.9</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G9.html" hreflang="en">G9</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G150.html" hreflang="en">G150</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G151.html" hreflang="en">G151</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G157.html" hreflang="en">G157</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM11.html" hreflang="en">SM11</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM12.html" hreflang="en">SM12</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.18</li>
 </ul>
<h3 id="crit-4-6">Critère 4.6 [Argent] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> en direct ayant des <a href="index.php/glossaire_referentiel_2.2.html#mSsTitreSynchro">sous-titres synchronisés</a> ou une <a href="index.php/glossaire_referentiel_2.2.html#mTranscriptTextuel">transcription textuelle</a>, ceux-ci sont-ils pertinents ?</h3>

	<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-real-time-captions">1.2.4</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-live-audio-only">1.2.9</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F8.html" hreflang="en">F8</a></li>
	<li><strong>Test <abbr>RGAA</abbr></strong>  :  5.10</li>
 </ul>

<h3 id="crit-4-7">Critère 4.7 [Argent] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> pré-enregistré a-t-il, si nécessaire, une <a href="index.php/glossaire_referentiel_2.2.html#mAudioDesc">audio-description</a> synchronisée (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-" title="Cas particuliers pour le critère 4.7">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-audio-desc-only">1.2.5</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G8.html" hreflang="en">G8</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G78.html" hreflang="en">G78</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G173.html" hreflang="en">G173</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM1.html" hreflang="en">SM1</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM2.html" hreflang="en">SM2</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM6.html" hreflang="en">SM6</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM7.html" hreflang="en">SM7</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.8</li>
 </ul>
<h3 id="crit-4-8">Critère 4.8 [Argent] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> pré-enregistré ayant une audio-description synchronisée, celle-ci est-elle pertinente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-audio-desc-only">1.2.5</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/SM1.html" hreflang="en">SM1</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM2.html" hreflang="en">SM2</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM6.html" hreflang="en">SM6</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM7.html" hreflang="en">SM7</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.5</li>
 </ul>


<h3 id="crit-4-9">Critère 4.9 [Or] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> pré-enregistré a-t-il, si nécessaire, une interprétation en langue des signes (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-" title="Cas particuliers pour le critère 4.9">hors cas particuliers</a>)  ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-sign">1.2.6</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G54.html" hreflang="en">G54</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G81.html" hreflang="en">G81</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM13.html" hreflang="en">SM13</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM14.html" hreflang="en">SM14</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.31</li>
 </ul>

<h3 id="crit-4-10">Critère 4.10 [Or] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> pré-enregistré ayant une interprétation en langue des signes, celle-ci est-elle pertinente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-sign">1.2.6</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : false - false</li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.32</li>
 </ul>

<h3 id="crit-4-11">Critère 4.11 [Or] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> pré-enregistré a-t-il, si nécessaire, une <a href="index.php/glossaire_referentiel_2.2.html#mAudioDescE">audio-description étendue</a> synchronisée (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-" title="Cas particuliers pour le critère 4.11">hors cas particuliers</a>)  ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-extended-ad">1.2.7</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G8.html" hreflang="en">G8</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM1.html" hreflang="en">SM1</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM2.html" hreflang="en">SM2</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.7</li>
 </ul>

<h3 id="crit-4-12">Critère 4.12 [Or] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> pré-enregistré ayant  une audio-description étendue synchronisée, celle-ci est-elle pertinente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-extended-ad">1.2.7</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G8.html" hreflang="en">G8</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM1.html" hreflang="en">SM1</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM2.html" hreflang="en">SM2</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.7</li>
 </ul>

<h3 id="crit-4-13">Critère 4.13 [Or] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> synchronisé ou seulement vidéo a-t-il, si nécessaire, une <a href="index.php/glossaire_referentiel_2.2.html#mTranscriptTextuel">transcription textuelle </a> <a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-" title="Cas particuliers pour le critère 4.13">(hors cas particuliers</a>) ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-text-doc">1.2.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G69.html" hreflang="en">G69</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G159.html" hreflang="en">G159</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  -</li>

 </ul>


<h3 id="crit-4-14">Critère 4.14 [Or] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> synchronisé ou seulement vidéo, ayant une  <a href="index.php/glossaire_referentiel_2.2.html#mTranscriptTextuel">transcription textuelle</a>, celle-ci est-elle pertinente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-text-doc">1.2.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F74.html" hreflang="en">F74</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  -</li>
 </ul>

<h3 id="crit-4-15">Critère 4.15 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> est-il clairement identifiable (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-15" title="Cas particuliers pour le critère 4.15">hors cas particuliers</a>) ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G68.html" hreflang="en">G68</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G100.html" hreflang="en">G100</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.1</li>

 </ul>

<h3 id="crit-4-16">Critère 4.16 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaNoTemp">média non temporel</a> a-t-il, si nécessaire, une alternative (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-16" title="Cas particuliers pour le critère 4.16">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H27.html" hreflang="en">H27</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H35.html" hreflang="en">H35</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H53.html" hreflang="en">H53</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H46.html" hreflang="en">H46</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  5.11 - 5.12</li>
 </ul>
<h3 id="crit-4-17">Critère 4.17 [Bronze]
Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaNoTemp">média non temporel</a> ayant une alternative, cette alternative est-elle pertinente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F30.html" hreflang="en">F30</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  12.3</li>
 </ul>

<h3 id="crit-4-18">Critère 4.18 [Bronze] Chaque son déclenché automatiquement est-il contrôlable par l'utilisateur ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-dis-audio">1.4.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G60.html" hreflang="en">G60</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G170.html" hreflang="en">G170</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G171.html" hreflang="en">G171</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F23.html" hreflang="en">F23</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.29 - 5.30</li>
 </ul>
<h3 id="crit-4-19">Critère 4.19 [Or] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> seulement audio pré-enregistré, les dialogues sont-ils suffisamment audibles (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-19" title="Cas particuliers pour le critère 4.19">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-noaudio">1.4.7</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G56.html" hreflang="en">G56</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.33</li>
 </ul>
<h3 id="crit-4-20">Critère 4.20 [Bronze] La consultation de chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> est-elle <a href="index.php/glossaire_referentiel_2.2.html#mControleClavSour">contrôlable par le clavier et la souris</a> ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-audio-desc">1.2.3</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-audio-desc-only">1.2.5</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-keyboard-operable">2.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-trapping">2.1.2</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G135.html" hreflang="en">G135</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G10.html" hreflang="en">G10</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G71.html" hreflang="en">G71</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G90.html" hreflang="en">G90</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G4.html" hreflang="en">G4</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  5.6 - 5.27</li>
 </ul>

<h3 id="crit-4-21">Critère 4.21 [Bronze] La consultation de chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaNoTemp">média non temporel</a> est-elle contrôlable par le clavier et la souris ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-keyboard-operable">2.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-trapping">2.1.2</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G135.html" hreflang="en">G135</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G10.html" hreflang="en">G10</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G90.html" hreflang="en">G90</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G4.html" hreflang="en">G4</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.27</li>
 </ul>

<h3 id="crit-4-22">Critère 4.22 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mMediaTemp">média temporel</a> et non temporel est-il compatible avec les technologies d'assistance (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit4-22" title="Cas particuliers pour le critère 4.22">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-keyboard-operable">2.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-all-funcs">2.1.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G10.html" hreflang="en">G10</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G90.html" hreflang="en">G90</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G135.html" hreflang="en">G135</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F15.html" hreflang="en">F15</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F54.html" hreflang="en">F54</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.16 - 5.28</li>
 </ul>



			<ul class="hautdepage">
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>

			</ul>

		</div>
		<div class="thematique" id="tableaux">
			<h2>Tableaux</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb_2.2_liste_generale.html#multimedia"><em>Multimédia</em></a></li>
				<li class="bas"><a href="index.php/accessiweb_2.2_liste_generale.html#liens"><em>Liens</em></a></li>

			</ul>

			<div class="introCrit">
<p>Principe <abbr>WCAG</abbr> : perceptible.</p>
<h3>Recommandation :</h3>
<p>Donner à chaque <a href="index.php/glossaire_referentiel_2.2.html#mTabDonnee">tableau de données</a>,  un <a href="index.php/glossaire_referentiel_2.2.html#mResumeTab">résumé</a> et un  <a href="index.php/glossaire_referentiel_2.2.html#mTitreTab">titre</a> pertinent, identifier clairement les cellules d'en-tête, utiliser un mécanisme pertinent pour lier les cellules de données aux cellules d’en-tête. Pour chaque tableau de mise en forme, veiller à sa bonne linéarisation.</p>

</div>

<h3 id="crit-5-1">Critère 5.1 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mTabDonnee">tableau de données</a> a-t-il un <a href="index.php/glossaire_referentiel_2.2.html#mResumeTab">résumé</a> ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H73.html" hreflang="en">H73</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  11.8</li>
 </ul>

<h3 id="crit-5-2">Critère 5.2 [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mTableau">tableau</a> ayant un <a href="index.php/glossaire_referentiel_2.2.html#mResumeTab">résumé</a>, celui-ci est-il pertinent ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H73.html" hreflang="en">H73</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  11.10</li>
 </ul>

<h3 id="crit-5-3">Critère 5.3 [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mTabMiseForme">tableau de mise en forme</a>, le contenu linéarisé reste-t-il compréhensible ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-sequence">1.3.2</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F49.html" hreflang="en">F49</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  11.6</li>

 </ul>

<h3 id="crit-5-4">Critère 5.4 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mTabDonnee">tableau de données</a> a-t-il un <a href="index.php/glossaire_referentiel_2.2.html#mTitreTab">titre</a> ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H39.html" hreflang="en">H39</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  11.7</li>

 </ul>

<h3 id="crit-5-5">Critère 5.5  [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mTabDonnee">tableau de données</a> ayant un <a href="index.php/glossaire_referentiel_2.2.html#mTitreTab">titre</a>, celui-ci est-il pertinent ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H39.html" hreflang="en">H39</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  11.9</li>
 </ul>

<h3 id="crit-5-6">Critère 5.6  [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mTabDonnee">tableau de données</a>, chaque <a href="index.php/glossaire_referentiel_2.2.html#mEnteteTab">en-tête de colonnes</a> et chaque <a href="index.php/glossaire_referentiel_2.2.html#mEnteteTab">en-tête de lignes</a> sont-ils correctement déclarés ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H51.html" hreflang="en">H51</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  11.1</li>

 </ul>

<h3 id="crit-5-7">Critère 5.7  [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mTabDonnee">tableau de données</a>, la technique appropriée permettant d'associer chaque cellule avec ses en-têtes est-elle utilisée ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H63.html" hreflang="en">H63</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H43.html" hreflang="en">H43</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  11.2 - 11.3</li>

 </ul>


<h3 id="crit-5-8">Critère 5.8  [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mTabMiseForme">tableau de mise en forme</a> ne doit pas utiliser d'éléments propres aux tableaux de données. Cette règle est-elle respectée ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F46.html" hreflang="en">F46</a></li>
	<li><strong>Test <abbr>RGAA</abbr></strong>  :  11.4</li>
 </ul>


			<ul class="hautdepage">

				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>
			</ul>
		</div>

		<div class="thematique" id="liens">
			<h2>Liens</h2>

			<ul class="navTheme">

				<li class="haut"><a href="index.php/accessiweb_2.2_liste_generale.html#tableaux"><em>Tableaux</em></a></li>

				<li class="bas"><a href="index.php/accessiweb_2.2_liste_generale.html#script"><em>Script</em></a></li>
			</ul>
			<div class="introCrit">
<p>Principes <abbr>WCAG</abbr> : perceptible, utilisable, compréhensible.</p>

<h3>Recommandation :</h3>

<p>Donner des intitulés de lien explicites, grâce à des informations de contexte notamment, et utiliser le <a href="index.php/glossaire_referentiel_2.2.html#mTitreLien">titre de lien</a> le moins possible.
Doubler avec des liens ou un formulaire de navigation les zones réactive d’une image cliquable côté serveur.</p>

</div>

<h3 id="crit-6-1">Critère 6.1  [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mLien">lien</a> est-il explicite (hors <a href="index.php/glossaire_referentiel_2.2.html#cpCrit6-" title="Cas particuliers pour le critère 6.1">cas particuliers</a>) ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-refs">2.4.4</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-link">2.4.9</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H78.html" hreflang="en">H78</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H79.html" hreflang="en">H79</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H80.html" hreflang="en">H80</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H81.html" hreflang="en">H81</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H30.html" hreflang="en">H30</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F89.html" hreflang="en">F89</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G91.html" hreflang="en">G91</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G53.html" hreflang="en">G53</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F63.html" hreflang="en">F63</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  4.2 - 6.13 - 6.16</li>
 </ul>

<h3 id="crit-6-2">Critère 6.2  [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mLien">lien</a> ayant un <a href="index.php/glossaire_referentiel_2.2.html#mTitreLien">titre de lien</a>, celui-ci est-il pertinent ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-refs">2.4.4</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H33.html" hreflang="en">H33</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  6.13</li>

 </ul>

<h3 id="crit-6-3">Critère 6.3 [Or] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mIntituleLien">intitulé de lien</a> seul est-il <a href="index.php/glossaire_referentiel_2.2.html#mLienHorsContexte">explicite hors contexte</a> (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit6-" title="Cas particuliers pour le critère 6.4">hors cas particuliers</a>) ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-link">2.4.9</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G91.html" hreflang="en">G91</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G189.html" hreflang="en">G189</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H33.html" hreflang="en">H33</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR30.html" hreflang="en">SCR30</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  6.14</li>
 </ul>

<h3 id="crit-6-4">Critère 6.4 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mLienIdentique">lien identique</a> a-t-il les mêmes fonction et destination ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-refs">2.4.4</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-consistent-functionality">3.2.4</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G91.html" hreflang="en">G91</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G197.html" hreflang="en">G197</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H30.html" hreflang="en">H30</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H33.html" hreflang="en">H33</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  6.15</li>

 </ul>

<h3 id="crit-6-5">Critère 6.5 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mZoneCliquable">zone cliquable</a> d'une <a href="index.php/glossaire_referentiel_2.2.html#mImgReactive">image réactive</a> côté serveur est-elle doublée d'un lien dans la page ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-keyboard-operable">2.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-all-funcs">2.1.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F54.html" hreflang="en">F54</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  6.1</li>

 </ul>

<h3 id="crit-6-6">Critère 6.6 [Bronze] Dans chaque page Web, chaque <a href="index.php/glossaire_referentiel_2.2.html#mLien">lien</a>, à l'exception des <a href="index.php/glossaire_referentiel_2.2.html#mAncreNom">ancres nommées</a>, a-t-il un <a href="index.php/glossaire_referentiel_2.2.html#mIntituleLien">intitulé</a> ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-refs">2.4.4</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-link">2.4.9</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G91.html" hreflang="en">G91</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H30.html" hreflang="en">H30</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  6.16</li>

 </ul>


			<ul class="hautdepage">
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>
			</ul>

		</div>
		<div class="thematique" id="script">
			<h2>Scripts</h2>

			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb_2.2_liste_generale.html#liens"><em>Liens</em></a></li>

				<li class="bas"><a href="index.php/accessiweb_2.2_liste_generale.html#elements"><em>Éléments Obligatoires</em></a></li>

			</ul>
			<div class="introCrit">
<p>Principes <abbr>WCAG</abbr> : perceptible, utilisable, compréhensible, robuste.</p>

<h3>Recommandation :</h3>
<p>Donner si nécessaire à chaque <a href="index.php/glossaire_referentiel_2.2.html#mScript">script</a> une <a href="index.php/glossaire_referentiel_2.2.html#mAltScript">alternative</a> pertinente. Rendre possible le contrôle de chaque code <a href="index.php/glossaire_referentiel_2.2.html#mScript">script</a> au moins par le clavier et la souris et s’assurer de leur compatibilité avec les technologies d’assistance.</p>

</div>

<h3 id="crit-7-1">Critère 7.1 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mScript">script</a> a-t-il, si nécessaire, une <a href="index.php/glossaire_referentiel_2.2.html#mAltScript">alternative</a> (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit7-1" title="Cas particuliers pour le critère 7.1">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F19.html" hreflang="en">F19</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  8.12</li>
 </ul>

<h3 id="crit-7-2">Critère 7.2 [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mScript">script</a> ayant une <a href="index.php/glossaire_referentiel_2.2.html#mAltScript">alternative</a>, cette <a href="index.php/glossaire_referentiel_2.2.html#mAltScript">alternative</a> est-elle pertinente ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F19.html" hreflang="en">F19</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F20.html" hreflang="en">F20</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  8.1 - 8.12</li>

 </ul>


<h3 id="crit-7-3">Critère 7.3 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mScript">script</a> est-il <a href="index.php/glossaire_referentiel_2.2.html#mControleClavSour">contrôlable par le clavier et la souris</a> (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit7-3" title="Cas particuliers pour le critère 7.3">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-keyboard-operable">2.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-all-funcs">2.1.3</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-focus-visible">2.4.7</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/SCR2.html" hreflang="en">SCR2</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR20.html" hreflang="en">SCR20</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR29.html" hreflang="en">SCR29</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR35.html" hreflang="en">SCR35</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G90.html" hreflang="en">G90</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F42.html" hreflang="en">F42</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F54.html" hreflang="en">F54</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F55.html" hreflang="en">F55</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  8.2 - 8.3 - 8.7 - 8.8 - 8.9</li>
 </ul>


<h3 id="crit-7-4">Critère 7.4 [Bronze] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mScript">script</a> est-il, si nécessaire, compatible avec les technologies d'assistance ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/SCR21.html" hreflang="en">SCR21</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F59.html" hreflang="en">F59</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  8.13</li>
 </ul>


<h3 id="crit-7-5">Critère 7.5 [Bronze] Pour chaque <a href="index.php/glossaire_referentiel_2.2.html#mScript">script</a> qui initie un <a href="index.php/glossaire_referentiel_2.2.html#mChangContexte">changement de contexte</a>, l'utilisateur est-il averti ou en a-t-il le contrôle ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-receive-focus">3.2.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-unpredictable-change">3.2.2</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-no-extreme-changes-context">3.2.5</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F9.html" hreflang="en">F9</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F22.html" hreflang="en">F22</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F36.html" hreflang="en">F36</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F37.html" hreflang="en">F37</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F41.html" hreflang="en">F41</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F76.html" hreflang="en">F76</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G13.html" hreflang="en">G13</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G76.html" hreflang="en">G76</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G80.html" hreflang="en">G80</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G107.html" hreflang="en">G107</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H32.html" hreflang="en">H32</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H84.html" hreflang="en">H84</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR19.html" hreflang="en">SCR19</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  8.5</li>
 </ul>

<h3 id="crit-7-6">Critère 7.6 [OR] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mScript">script</a> qui provoque une <a href="index.php/glossaire_referentiel_2.2.html#mAlerte">alerte</a> non sollicitée est-il contrôlable par l'utilisateur (hors <a href="index.php/glossaire_referentiel_2.2.html#cpCrit7-6" title="Cas particuliers pour le critère 7.6">cas particuliers</a>) ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#time-limits-postponed">2.2.4</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/SCR14.html" hreflang="en">SCR14</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  8.4</li>

 </ul>

			<ul class="hautdepage">

				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>
			</ul>
		</div>
		<div class="thematique" id="elements">

			<h2>Éléments Obligatoires</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb_2.2_liste_generale.html#script"><em>Script</em></a></li>

				<li class="bas"><a href="index.php/accessiweb_2.2_liste_generale.html#structure"><em>Structuration de l'information</em></a></li>
			</ul>
			<div class="introCrit">

<p>Principes <abbr>WCAG</abbr> : perceptible, utilisable, compréhensible, robuste.</p>
<h3>Recommandation :</h3>
<p>Vérifier que chaque page Web a un code source valide selon le <a href="index.php/glossaire_referentiel_2.2.html#mDTD">type de document</a>, un titre pertinent et une indication de <a href="index.php/glossaire_referentiel_2.2.html#mLangueDefaut"> langue par défaut</a>. Vérifier que les balises ne sont pas utilisés uniquement pour la présentation, que les changements de langues et  de direction de sens de lecture sont indiqués.</p>

</div>

<h3 id="crit-8-1">Critère 8.1 [Bronze] Chaque page Web est-elle définie par un <a href="index.php/glossaire_referentiel_2.2.html#mDTD">type de document</a> ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-parses">4.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G134.html" hreflang="en">G134</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  9.1 - 9.2 - 9.3</li>

 </ul>

<h3 id="crit-8-2">Critère 8.2 [Bronze] Pour chaque page Web, le code source est-il <a href="index.php/glossaire_referentiel_2.2.html#mCodeValide">valide</a> selon le <a href="index.php/glossaire_referentiel_2.2.html#mDTD">type de document</a> spécifié ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-parses">4.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G134.html" hreflang="en">G134</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G192.html" hreflang="en">G192</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H74.html" hreflang="en">H74</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H75.html" hreflang="en">H75</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H88.html" hreflang="en">H88</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F70.html" hreflang="en">F70</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F77.html" hreflang="en">F77</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  9.4 - 9.5</li>
 </ul>

<h3 id="crit-8-3">Critère 8.3 [Bronze] Dans chaque page Web, la <a href="index.php/glossaire_referentiel_2.2.html#mLangueDefaut"> langue par défaut</a> est-elle présente ?</h3>
	 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-doc-lang-id">3.1.1</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H57.html" hreflang="en">H57</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  9.8</li>
 </ul>

<h3 id="crit-8-4">Critère 8.4 [Bronze] Pour chaque page Web ayant une <a href="index.php/glossaire_referentiel_2.2.html#mLangueDefaut"> langue par défaut</a>, le  <a href="index.php/glossaire_referentiel_2.2.html#mCodeLangue">code de langue</a> est-il pertinent ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-doc-lang-id">3.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H57.html" hreflang="en">H57</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  9.8</li>
 </ul>

<h3 id="crit-8-5">Critère 8.5 [Bronze] Chaque page Web a-t-elle un <a href="index.php/glossaire_referentiel_2.2.html#mTitrePage">titre de page</a> ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-title">2.4.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G88.html" hreflang="en">G88</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H25.html" hreflang="en">H25</a></li>
	<li><strong>Test <abbr>RGAA</abbr></strong>  :  9.6</li>

 </ul>

<h3 id="crit-8-6">Critère 8.6 [Bronze] Pour chaque page Web ayant un <a href="index.php/glossaire_referentiel_2.2.html#mTitrePage">titre de page</a>, ce titre est-il pertinent ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-title">2.4.2</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F25.html" hreflang="en">F25</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  9.7</li>
 </ul>

<h3 id="crit-8-7">Critère 8.7 [Argent] Dans chaque page Web, chaque changement de langue est-il indiqué dans le code source (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit8-7" title="Cas particuliers pour le critère 8.7">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-other-lang-id">3.1.2</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H58.html" hreflang="en">H58</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  12.1 - 12.2</li>
 </ul>

<h3 id="crit-8-8">Critère 8.8 [Argent] Dans chaque page Web, chaque changement de langue est-il pertinent ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-other-lang-id">3.1.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H58.html" hreflang="en">H58</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  12.1 - 12.2</li>
 </ul>

<h3 id="crit-8-9">Critère 8.9 [Bronze] Dans chaque page Web, les balises ne doivent pas être utilisées <a href="index.php/glossaire_referentiel_2.2.html#mUniquPres">uniquement à des fins de présentation</a>. Cette règle est-elle respectée ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G115.html" hreflang="en">G115</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F43.html" hreflang="en">F43</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  7.9</li>
 </ul>

<h3 id="crit-8-10">Critère 8.10 [Bronze] Dans chaque page Web, les changements du <a href="index.php/glossaire_referentiel_2.2.html#mSensLecture">sens de lecture</a> sont-ils signalés ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-sequence">1.3.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H56.html" hreflang="en">H56</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  -</li>
 </ul>



			<ul class="hautdepage">
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>
			</ul>

		</div>
		<div class="thematique" id="structure">
			<h2>Structuration de l'information</h2>
			<ul class="navTheme">

				<li class="haut"><a href="index.php/accessiweb_2.2_liste_generale.html#elements"><em>Éléments Obligatoires</em></a></li>
				<li class="bas"><a href="index.php/accessiweb_2.2_liste_generale.html#presentation"><em>Présentation de l'information</em></a></li>

			</ul>
			<div class="introCrit">
<p>Principes <abbr>WCAG</abbr> : perceptible, utilisable, compréhensible.</p>
<h3>Recommandation :</h3>

<p>Utiliser des <a href="index.php/glossaire_referentiel_2.2.html#mTitre">titres</a>, des listes, des abréviations et des citations pour structurer l'information. </p>
</div>

<h3 id="crit-9-1">Critère 9.1 [Bronze]
Dans chaque page Web, l'information est-elle structurée par l'utilisation appropriée de <a href="index.php/glossaire_referentiel_2.2.html#mTitre">titres</a> ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-skip">2.4.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-descriptive">2.4.6</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-headings">2.4.10</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H69.html" hreflang="en">H69</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G130.html" hreflang="en">G130</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H42.html" hreflang="en">H42</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G141.html" hreflang="en">G141</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  10.1 - 10.2 - 10.3 - 10.4</li>
 </ul>

<h3 id="crit-9-2">Critère 9.2 [Bronze] Dans chaque page Web, chaque <a href="index.php/glossaire_referentiel_2.2.html#mListes">liste</a> est-elle structurée avec les balises appropriées ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H40.html" hreflang="en">H40</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H48.html" hreflang="en">H48</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F2.html" hreflang="en">F2</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  10.5 - 10.6 - 10.7</li>

 </ul>

<h3 id="crit-9-3">Critère 9.3 [OR] Dans chaque page Web, la première occurrence de chaque <a href="index.php/glossaire_referentiel_2.2.html#mAbbr">abréviation</a> permet-elle d'en connaître la signification ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-located">3.1.4</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G55.html" hreflang="en">G55</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G70.html" hreflang="en">G70</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G97.html" hreflang="en">G97</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G102.html" hreflang="en">G102</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H28.html" hreflang="en">H28</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H60.html" hreflang="en">H60</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  10.9 - 10.10</li>

 </ul>

<h3 id="crit-9-4">Critère 9.4 [OR] Dans chaque page Web, la signification de chaque <a href="index.php/glossaire_referentiel_2.2.html#mAbbr">abréviation</a> est-elle pertinente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-located">3.1.4</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G55.html" hreflang="en">G55</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G70.html" hreflang="en">G70</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G97.html" hreflang="en">G97</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H28.html" hreflang="en">H28</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H60.html" hreflang="en">H60</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  10.11 - 10.12</li>
 </ul>

<h3 id="crit-9-5">Critère 9.5 [Bronze] Dans chaque page Web, chaque citation est-elle correctement indiquée ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H49.html" hreflang="en">H49</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F2.html" hreflang="en">F2</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  :  10.8</li>

 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>
			</ul>

		</div>
		<div class="thematique" id="presentation">

			<h2>Présentation de l'information</h2>
			<ul class="navTheme">

				<li class="haut"><a href="index.php/accessiweb_2.2_liste_generale.html#structure"><em>Structuration de l'information</em></a></li>
				<li class="bas"><a href="index.php/accessiweb_2.2_liste_generale.html#formulaire"><em>Formulaire</em></a></li>

			</ul>
			<div class="introCrit">
<p>Principes <abbr>WCAG</abbr> : perceptible, utilisable, robuste.</p>

<h3>Recommandation :</h3>

<p>Utiliser des <a href="index.php/glossaire_referentiel_2.2.html#mFeuilleStyle">feuilles de styles</a> pour contrôler la présentation de l’information. Vérifier l’effet de l’agrandissement des tailles de caractère  sur la lisibilité. S’assurer que les liens sont correctement identifiables,  que la prise de focus est signalée, que l’interlignage est suffisant et donner le possibilité à l’utilisateur de contrôler la justification des textes. S’assurer que les textes cachés sont correctement restitués et que l’information n’est pas donnée uniquement par la forme ou la position d’un élément.</p>

</div>

<h3 id="crit-10-1">Critère 10.1 [Bronze] Dans le <a href="index.php/glossaire_referentiel_2.2.html#mSiteWeb">site Web</a>, des <a href="index.php/glossaire_referentiel_2.2.html#mFeuilleStyle">feuilles de styles</a> sont-elles utilisées pour contrôler la <a href="index.php/glossaire_referentiel_2.2.html#mPresInfo">présentation de l'information</a> ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-sequence">1.3.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G140.html" hreflang="en">G140</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F32.html" hreflang="en">F32</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F33.html" hreflang="en">F33</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F34.html" hreflang="en">F34</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C6.html" hreflang="en">C6</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C8.html" hreflang="en">C8</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C22.html" hreflang="en">C22</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F48.html" hreflang="en">F48</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.8 - 7.4 - 11.5</li>
 </ul>

<h3 id="crit-10-2">Critère 10.2 [Bronze] Dans chaque page Web, le <a href="index.php/glossaire_referentiel_2.2.html#mContVisible">contenu visible</a> reste-t-il présent lorsque les <a href="index.php/glossaire_referentiel_2.2.html#mFeuilleStyle">feuilles de styles</a> ou les images sont désactivées ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F3.html" hreflang="en">F3</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F87.html" hreflang="en">F87</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.1 - 7.3</li>

 </ul>


<h3 id="crit-10-3">Critère 10.3 [Bronze] Dans chaque page Web, l'information reste-t-elle <a href="index.php/glossaire_referentiel_2.2.html#mCoherentODL">compréhensible</a> lorsque les <a href="index.php/glossaire_referentiel_2.2.html#mFeuilleStyle">feuilles de styles</a> sont désactivées ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-sequence">1.3.2</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-focus-order">2.4.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F1.html" hreflang="en">F1</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G59.html" hreflang="en">G59</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.2</li>
 </ul>

<h3 id="crit-10-4">Critère 10.4 [Argent] Dans chaque page Web, le texte reste-t-il lisible lorsque la <a href="index.php/glossaire_referentiel_2.2.html#mTailleCaractere">taille des caractères</a> est augmentée jusqu'à 200%, au moins ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-scale">1.4.4</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F80.html" hreflang="en">F80</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F69.html" hreflang="en">F69</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C14.html" hreflang="en">C14</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G179.html" hreflang="en">G179</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.13 - 7.14</li>
 </ul>

<h3 id="crit-10-5">Critère 10.5 [Argent] Dans chaque page Web, les déclarations CSS de couleurs de fond d'élément et de police sont-elles correctement utilisées?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-contrast">1.4.3</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast7">1.4.6</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-visual-presentation">1.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F24.html" hreflang="en">F24</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.5</li>

 </ul>


<h3 id="crit-10-6">Critère 10.6 [Bronze] Dans chaque page Web, chaque <a href="index.php/glossaire_referentiel_2.2.html#mLienNature">lien dont la nature n'est pas évidente</a> est-il visible par rapport au texte environnant ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-without-color">1.4.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G183.html" hreflang="en">G183</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F73.html" hreflang="en">F73</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.10</li>
 </ul>

<h3 id="crit-10-7">Critère 10.7 [Bronze] Dans chaque page Web, pour chaque élément recevant le focus, la <a href="index.php/glossaire_referentiel_2.2.html#mPriseFocus">prise de focus</a> est-elle visible ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-without-color">1.4.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-focus-visible">2.4.7</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G183.html" hreflang="en">G183</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F73.html" hreflang="en">F73</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F78.html" hreflang="en">F78</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G165.html" hreflang="en">G165</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C15.html" hreflang="en">C15</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G195.html" hreflang="en">G195</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR31.html" hreflang="en">SCR31</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.10 - 7.11</li>
 </ul>

<h3 id="crit-10-8">Critère 10.8 [OR]
Dans chaque page Web, le choix de la couleur de fond et de police du texte est-il contrôlable par l'utilisateur ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-visual-presentation">1.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G156.html" hreflang="en">G156</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G175.html" hreflang="en">G175</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.34</li>
 </ul>


<h3 id="crit-10-9">Critère 10.9 [OR] Pour chaque page Web, le texte ne doit pas être justifié. Cette règle est-elle respectée ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-visual-presentation">1.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F88.html" hreflang="en">F88</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G172.html" hreflang="en">G172</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.12</li>
 </ul>

<h3 id="crit-10-10">Critère 10.10 [OR]
Pour chaque page Web, en affichage plein écran et avec une taille de police à 200%, chaque bloc de texte reste-t-il lisible sans l'utilisation de la barre de défilement horizontal ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-visual-presentation">1.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/C26.html" hreflang="en">C26</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C24.html" hreflang="en">C24</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.15</li>
 </ul>

<h3 id="crit-10-11">Critère 10.11 [OR] Pour chaque page Web, les blocs de texte ont-ils une largeur inférieure ou égale à 80 caractères (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit10-11" title="Cas particuliers pour le critère 10.11">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-visual-presentation">1.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H87.html" hreflang="en">H87</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C20.html" hreflang="en">C20</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.16</li>
 </ul>

<h3 id="crit-10-12">Critère 10.12 [OR] Pour chaque page Web, l'espace entre les lignes et les paragraphes est-il suffisant ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-visual-presentation">1.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G188.html" hreflang="en">G188</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C21.html" hreflang="en">C21</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.17</li>

 </ul>


<h3 id="crit-10-13">Critère 10.13 [Bronze] Pour chaque page Web, les <a href="index.php/glossaire_referentiel_2.2.html#mTexteCache">textes cachés</a> sont-ils correctement restitués par les technologies d'assistance ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : false - false</li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 7.18</li>

 </ul>


<h3 id="crit-10-14">Critère 10.14 [Bronze] Dans chaque page Web, l'information ne doit pas être donnée uniquement par la forme, taille ou position. Cette règle est-elle respectée ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-without-color">1.4.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-understanding">1.3.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G96.html" hreflang="en">G96</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G111.html" hreflang="en">G111</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F14.html" hreflang="en">F14</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F26.html" hreflang="en">F26</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 12.7 - 12.8 - 12.9</li>
 </ul>
<h3 id="crit-10-15">Critère 10.15 [Bronze] Dans chaque page Web, l'information ne doit pas être donnée par la forme, taille ou position uniquement. Cette règle est-elle implémentée de façon pertinente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#visual-audio-contrast-without-color">1.4.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-understanding">1.3.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G96.html" hreflang="en">G96</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G111.html" hreflang="en">G111</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F14.html" hreflang="en">F14</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F26.html" hreflang="en">F26</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 12.7 - 12.8 - 12.9</li>
 </ul>

			<ul class="hautdepage">
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>
			</ul>
		</div>
		<div class="thematique" id="formulaire">
			<h2>Formulaires</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb_2.2_liste_generale.html#presentation"><em>Présentation de l'information</em></a></li>

				<li class="bas"><a href="index.php/accessiweb_2.2_liste_generale.html#navigation"><em>Navigation</em></a></li>
			</ul>

			<div class="introCrit">

<p>Principes <abbr>WCAG</abbr> : perceptible, utilisable, compréhensible, robuste.</p>
<h3>Recommandation :</h3>
<p>Associer pour chaque formulaire chacun de ses champs à son intitulé, grouper les champs dans des blocs d'informations de même nature, structurer les listes de choix de manière pertinente, donner à chaque <a href="index.php/glossaire_referentiel_2.2.html#mBtnForm">bouton</a> un intitulé explicite. Vérifier la présence d’aide à la saisie, s’assurer  que le <a href="index.php/glossaire_referentiel_2.2.html#mControleSaisie">contrôle de saisie</a> est accessible et que l’utilisateur peut contrôler les données à caractère financier, juridique ou personnelles.</p>

</div>

<h3 id="crit-11-1">Critère 11.1 [Bronze]
Chaque <a href="index.php/glossaire_referentiel_2.2.html#mChpSaisie">champ de formulaire</a> a-t-il une <a href="index.php/glossaire_referentiel_2.2.html#mEtiquette">étiquette</a> ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-descriptive">2.4.6</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-cues">3.3.2</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H44.html" hreflang="en">H44</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H65.html" hreflang="en">H65</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G82.html" hreflang="en">G82</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G131.html" hreflang="en">G131</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F17.html" hreflang="en">F17</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F82.html" hreflang="en">F82</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F86.html" hreflang="en">F86</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.11 - 3.10</li>
 </ul>



<h3 id="crit-11-2">Critère 11.2 [Bronze]
Chaque étiquette associée à un <a href="index.php/glossaire_referentiel_2.2.html#mChpSaisie">champ de formulaire</a> est-elle pertinente ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-descriptive">2.4.6</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-cues">3.3.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H44.html" hreflang="en">H44</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H65.html" hreflang="en">H65</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G182.html" hreflang="en">G182</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G131.html" hreflang="en">G131</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.12</li>
 </ul>

<h3 id="crit-11-3">Critère 11.3 [Argent] Dans chaque formulaire, chaque <a href="index.php/glossaire_referentiel_2.2.html#mEtiquette">étiquette</a> associée à un champ de formulaire ayant la même fonction et répétée plusieurs fois dans une même page ou dans un ensemble de pages est-elle  cohérente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-consistent-functionality">3.2.4</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F31.html" hreflang="en">F31</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 4.11</li>
 </ul>


<h3 id="crit-11-4">Critère 11.4 [Bronze] Dans chaque formulaire, chaque <a href="index.php/glossaire_referentiel_2.2.html#mEtiquette">étiquette</a> de champ et son champ associé sont-ils accolés ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-cues">3.3.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G162.html" hreflang="en">G162</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.3</li>
 </ul>




<h3 id="crit-11-5">Critère 11.5 [Bronze] Dans chaque formulaire, les <a href="index.php/glossaire_referentiel_2.2.html#mInfoMNature">informations de même nature</a> sont-elles regroupées, si nécessaire ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-cues">3.3.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H71.html" hreflang="en">H71</a></li>
	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.4</li>
 </ul>


<h3 id="crit-11-6">Critère 11.6 [Bronze] Dans chaque formulaire, chaque regroupement de champs de formulaire a-t-il une légende ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-cues">3.3.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H71.html" hreflang="en">H71</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.5</li>

 </ul>


<h3 id="crit-11-7">Critère 11.7 [Bronze] Dans chaque formulaire, chaque légende associée à un groupement de champs de formulaire est-elle pertinente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-cues">3.3.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H71.html" hreflang="en">H71</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.6</li>

 </ul>


<h3 id="crit-11-8">Critère 11.8 [Bronze] Dans chaque formulaire, chaque <a href="index.php/glossaire_referentiel_2.2.html#mListeChoix">liste de choix</a> est-elle structurée de manière pertinente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H85.html" hreflang="en">H85</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.7 - 3.8 - 3.9</li>
 </ul>


<h3 id="crit-11-9">Critère 11.9 [Bronze] Dans chaque formulaire, l'intitulé de chaque <a href="index.php/glossaire_referentiel_2.2.html#mBtnForm">bouton</a> est-il pertinent ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H91.html" hreflang="en">H91</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.13 - 6.14</li>
 </ul>



<h3 id="crit-11-10">Critère 11.10 [Bronze] Dans chaque formulaire, le <a href="index.php/glossaire_referentiel_2.2.html#mControleSaisie">contrôle de saisie</a> est-il utilisé de manière pertinente ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-identified">3.3.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-cues">3.3.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G83.html" hreflang="en">G83</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G84.html" hreflang="en">G84</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G85.html" hreflang="en">G85</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G89.html" hreflang="en">G89</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G184.html" hreflang="en">G184</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H44.html" hreflang="en">H44</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR18.html" hreflang="en">SCR18</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR32.html" hreflang="en">SCR32</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.1 - 3.2</li>
 </ul>


<h3 id="crit-11-11">Critère 11.11 [Argent] Dans chaque formulaire, le <a href="index.php/glossaire_referentiel_2.2.html#mControleSaisie">contrôle de saisie</a> est-il accompagné, si possible, de suggestions facilitant la correction des erreurs de saisie ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-suggestions">3.3.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G84.html" hreflang="en">G84</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G85.html" hreflang="en">G85</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G177.html" hreflang="en">G177</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.13</li>
 </ul>

<h3 id="crit-11-12">Critère 11.12 [Argent] Pour chaque formulaire, les données à caractère financier, juridique ou personnel peuvent-elles être modifiées, mise à jour ou récupérées par l'utilisateur ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-reversible">3.3.4</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G98.html" hreflang="en">G98</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G99.html" hreflang="en">G99</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G155.html" hreflang="en">G155</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G164.html" hreflang="en">G164</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G168.html" hreflang="en">G168</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.14</li>
 </ul>

<h3 id="crit-11-13">Critère 11.13 [Or]
Pour chaque formulaire, toutes les données peuvent-elles être modifiées, mises à jour ou récupérées par l'utilisateur ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-reversible-all">3.3.6</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G98.html" hreflang="en">G98</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G99.html" hreflang="en">G99</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G155.html" hreflang="en">G155</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G164.html" hreflang="en">G164</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G168.html" hreflang="en">G168</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.15</li>
 </ul>

<h3 id="crit-11-14">Critère 11.14 [Or] Pour chaque formulaire, des aides à la saisie sont-elles présentes ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-context-help">3.3.5</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G71.html" hreflang="en">G71</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G193.html" hreflang="en">G193</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G194.html" hreflang="en">G194</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G184.html" hreflang="en">G184</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G89.html" hreflang="en">G89</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F81.html" hreflang="en">F81</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.16</li>
 </ul>


<h3 id="crit-11-15">Critère 11.15 [Or] Pour chaque formulaire, chaque aide à la saisie est-elle pertinente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#minimize-error-context-help">3.3.5</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G71.html" hreflang="en">G71</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G193.html" hreflang="en">G193</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G194.html" hreflang="en">G194</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G184.html" hreflang="en">G184</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G89.html" hreflang="en">G89</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F81.html" hreflang="en">F81</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 3.16</li>

 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>
			</ul>

		</div>
		<div class="thematique" id="navigation">
			<h2>Navigation</h2>
			<ul class="navTheme">

				<li class="haut"><a href="index.php/accessiweb_2.2_liste_generale.html#formulaire"><em>Formulaire</em></a></li>
				<li class="bas"><a href="index.php/accessiweb_2.2_liste_generale.html#consultation"><em>Consultation</em></a></li>

			</ul>
			<div class="introCrit">

<p>Principes <abbr>WCAG</abbr> : utilisable, compréhensible.</p>
<h3>Recommandation :</h3>

<p>Faciliter la navigation dans un <a href="index.php/glossaire_referentiel_2.2.html#mEnsemblePages">ensemble de pages</a> par au moins deux systèmes  de navigation différents (<a href="index.php/glossaire_referentiel_2.2.html#mMenuNav">menu de navigation</a>, plan du site ou <a href="index.php/glossaire_referentiel_2.2.html#mMoteurRecherche">moteur de recherche</a>), un fil d’ariane et l’indication de la page active dans le menu de navigation. Identifier les groupes de liens importants et la zone de contenu  et donner la possibilité de les éviter par des liens de navigation interne.  S’assurer que l’ordre de tabulation est cohérent et que la page ne comporte pas de piège au clavier.</p>

</div>

<h3 id="crit-12-1">Critère 12.1 [Argent] Chaque <a href="index.php/glossaire_referentiel_2.2.html#mEnsemblePages">ensemble de pages</a> dispose-t-il de deux <a href="index.php/glossaire_referentiel_2.2.html#mSysNav">systèmes de navigation</a> différents, au moins  (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit12-1" title="Cas particuliers pour le critère 12.1">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-mult-loc">2.4.5</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-location">2.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H59.html" hreflang="en">H59</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G63.html" hreflang="en">G63</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G64.html" hreflang="en">G64</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G161.html" hreflang="en">G161</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.17 - 6.21 - 6.34</li>
 </ul>

<h3 id="crit-12-2">Critère 12.2 [Argent] Dans chaque <a href="index.php/glossaire_referentiel_2.2.html#mEnsemblePages">ensemble de pages</a>, le menu ou les <a href="index.php/glossaire_referentiel_2.2.html#mBarreNav">barres de navigation</a> sont-ils toujours à la même place (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit12-" title="Cas particuliers pour le critère 12.2">hors cas particuliers</a>) ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-consistent-locations">3.2.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G61.html" hreflang="en">G61</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F66.html" hreflang="en">F66</a></li>
	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.22</li>

 </ul>


<h3 id="crit-12-3">Critère 12.3 [Argent] Dans chaque <a href="index.php/glossaire_referentiel_2.2.html#mEnsemblePages">ensemble de pages</a>, le menu et les barres de navigation ont-ils une présentation cohérente (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit12-" title="Cas particuliers pour le critère 12.3">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-consistent-locations">3.2.3</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G61.html" hreflang="en">G61</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.23</li>

 </ul>



<h3 id="crit-12-4">Critère 12.4 [Argent] La <a href="index.php/glossaire_referentiel_2.2.html#mPlanSite">page "plan du site"</a> est-elle pertinente ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-mult-loc">2.4.5</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-location">2.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G63.html" hreflang="en">G63</a></li>
	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.18</li>
 </ul>


<h3 id="crit-12-5">Critère 12.5 [Argent] Dans chaque ensemble de pages, la <a href="index.php/glossaire_referentiel_2.2.html#mPlanSite">page "plan du site"</a> est-elle atteignable de manière identique ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-mult-loc">2.4.5</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-location">2.4.8</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-consistent-locations">3.2.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G61.html" hreflang="en">G61</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G63.html" hreflang="en">G63</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.19</li>

 </ul>


<h3 id="crit-12-6">Critère 12.6 [Argent] Dans chaque ensemble de pages, le <a href="index.php/glossaire_referentiel_2.2.html#mMoteurRecherche">moteur de recherche</a> est-il atteignable de manière identique ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-consistent-locations">3.2.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G61.html" hreflang="en">G61</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F66.html" hreflang="en">F66</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : -</li>
 </ul>


<h3 id="crit-12-7">Critère 12.7 [Argent] Dans chaque page d'une <a href="index.php/glossaire_referentiel_2.2.html#mCollecPage">collection de pages</a>, des liens facilitant la navigation sont-ils présents ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-mult-loc">2.4.5</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-location">2.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G63.html" hreflang="en">G63</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G125.html" hreflang="en">G125</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G126.html" hreflang="en">G126</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G127.html" hreflang="en">G127</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G185.html" hreflang="en">G185</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.35</li>
 </ul>



<h3 id="crit-12-8">Critère 12.8 [Or] Dans chaque page web, un fil d'Ariane est-il présent ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-location">2.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G65.html" hreflang="en">G65</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.20</li>
 </ul>



<h3 id="crit-12-9">Critère 12.9 [Or] Dans chaque page Web, le fil d'Ariane est-il pertinent ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-location">2.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G65.html" hreflang="en">G65</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.20</li>
 </ul>



<h3 id="crit-12-10">Critère 12.10 [Bronze] Dans chaque page Web, les groupes de liens importants (menu, barre de navigation...) et la zone de contenu sont-ils identifiés ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-skip">2.4.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H50.html" hreflang="en">H50</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.29 - 6.30</li>
 </ul>


<h3 id="crit-12-11">Critère 12.11 [Bronze] Dans chaque page Web, des <a href="index.php/glossaire_referentiel_2.2.html#mLienEvitement">liens d'évitement ou d'accès rapide</a> aux groupes de liens importants et à la zone de contenu sont-ils présents ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-skip">2.4.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-focus-order">2.4.3</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-consistent-locations">3.2.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G1.html" hreflang="en">G1</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G59.html" hreflang="en">G59</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G123.html" hreflang="en">G123</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G124.html" hreflang="en">G124</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F44.html" hreflang="en">F44</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F66.html" hreflang="en">F66</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.31 - 6.32 - 6.33</li>
 </ul>




<h3 id="crit-12-12">Critère 12.12 [Or] Dans chaque page Web, la page en cours de consultation est-elle indiquée dans le <a href="index.php/glossaire_referentiel_2.2.html#mMenuNav">menu de navigation</a> ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-location">2.4.8</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G128.html" hreflang="en">G128</a></li>
	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.36</li>
 </ul>


<h3 id="crit-12-13">Critère 12.13 [Bronze] Dans chaque page Web, <a href="index.php/glossaire_referentiel_2.2.html#mOrdTab">l'ordre de tabulation</a> est-il <a href="index.php/glossaire_referentiel_2.2.html#mCoherentODL">cohérent</a> ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-focus-order">2.4.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G59.html" hreflang="en">G59</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H4.html" hreflang="en">H4</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F44.html" hreflang="en">F44</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR26.html" hreflang="en">SCR26</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR27.html" hreflang="en">SCR27</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR37.html" hreflang="en">SCR37</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/C27.html" hreflang="en">C27</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.24 - 8.6</li>
 </ul>



<h3 id="crit-12-14">Critère 12.14 [Bronze] Dans chaque page Web, la navigation ne doit pas contenir de piège au clavier. Cette règle est-elle respectée ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-keyboard-operable">2.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#keyboard-operation-trapping">2.1.2</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H91.html" hreflang="en">H91</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G21.html" hreflang="en">G21</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F10.html" hreflang="en">F10</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.6</li>
 </ul>


			<ul class="hautdepage">
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>
			</ul>

		</div>
		<div class="thematique" id="consultation">
			<h2>Consultation</h2>
			<ul class="navTheme">
				<li class="haut"><a href="index.php/accessiweb_2.2_liste_generale.html#navigation"><em>Navigation</em></a></li>
			</ul>

			<div class="introCrit">

<p>Principes <abbr>WCAG</abbr> : perceptible, utilisable, compréhensible, robuste.</p>

<h3>Recommandation :</h3>
<p>Vérifier que l’utilisateur a le contrôle des procédés de rafraichissement, des changements brusques de luminosité, des ouvertures de nouvelles fenêtre et des contenus en mouvement ou clignotant.<br />
Indiquer lorsqu’un contenu s’ouvre dans une nouvelle fenêtre et donner des informations relatives à la consultation des fichiers en téléchargement.  Ne pas faire dépendre l’accomplissement d’une tâche d’une limite de temps sauf si elle est essentielle et s’assurer que les données saisies sont récupérées après une interruption de session authentifiée.  S’assurer que les expressions inhabituelles et le jargon sont explicités. Proposer des versions accessibles ou rendre accessibles les documents en téléchargement.</p>
</div>

<h3 id="crit-13-1">Critère 13.1 [Bronze] Pour chaque page Web, l'utilisateur a-t-il le contrôle de chaque limite  de  temps modifiant le contenu (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit13-1" title="Cas particuliers pour le critère 13.1">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#time-limits-required-behaviors">2.2.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#time-limits-postponed">2.2.4</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-no-extreme-changes-context">3.2.5</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/F40.html" hreflang="en">F40</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F41.html" hreflang="en">F41</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F61.html" hreflang="en">F61</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F58.html" hreflang="en">F58</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G76.html" hreflang="en">G76</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H76.html" hreflang="en">H76</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SVR1.html" hreflang="en">SVR1</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR1.html" hreflang="en">SCR1</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR36.html" hreflang="en">SCR36</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G133.html" hreflang="en">G133</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G180.html" hreflang="en">G180</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G75.html" hreflang="en">G75</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G110.html" hreflang="en">G110</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.7 - 6.8 - 6.9 - 6.10 - 6.11 - 6.12</li>
 </ul>
<h3 id="crit-13-2">Critère 13.2 [Bronze]
Dans chaque page Web, pour chaque ouverture de nouvelle fenêtre, l'utilisateur est-il averti ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-refs">2.4.4</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-no-extreme-changes-context">3.2.5</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H33.html" hreflang="en">H33</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H83.html" hreflang="en">H83</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F22.html" hreflang="en">F22</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR24.html" hreflang="en">SCR24</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.2 - 6.3 - 6.4 - 6.25</li>
 </ul>
<h3 id="crit-13-3">Critère 13.3 [Bronze] Dans chaque page Web, l'ouverture d'une nouvelle fenêtre ne doit pas être déclenchée sans action de l'utilisateur. Cette règle est-elle respectée ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-receive-focus">3.2.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#consistent-behavior-no-extreme-changes-context">3.2.5</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G107.html" hreflang="en">G107</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F22.html" hreflang="en">F22</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F52.html" hreflang="en">F52</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F55.html" hreflang="en">F55</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F60.html" hreflang="en">F60</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.5</li>
 </ul>


<h3 id="crit-13-4">Critère 13.4 [Or] Dans chaque page Web, une tâche ne doit pas requérir de limite de temps pour être réalisée, sauf si elle se déroule en temps réel ou si cette limite de temps est essentielle. Cette règle est-elle respectée ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#time-limits-no-exceptions">2.2.3</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G5.html" hreflang="en">G5</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 8.10</li>
 </ul>



<h3 id="crit-13-5">Critère 13.5 [Or] Dans chaque page Web, lors d'une interruption de session authentifiée, les données saisies par l'utilisateur sont-elles récupérées après ré-authentification ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#time-limits-server-timeout">2.2.5</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G105.html" hreflang="en">G105</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G181.html" hreflang="en">G181</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F12.html" hreflang="en">F12</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 8.11</li>

 </ul>


<h3 id="crit-13-6">Critère 13.6 [Bronze] Dans chaque page Web, pour chaque fichier en téléchargement, des informations relatives à sa consultation sont-elles présentes (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit13-6" title="Cas particuliers pour le critère 13.6">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-refs">2.4.4</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H33.html" hreflang="en">H33</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 6.26 - 6.27 - 6.28</li>
 </ul>

<h3 id="crit-13-7">Critère 13.7 [Bronze] Dans chaque page Web, chaque document bureautique en téléchargement possède-t-il, si nécessaire, une <a href="index.php/glossaire_referentiel_2.2.html#mVaccessible">version accessible</a> (<a href="index.php/glossaire_referentiel_2.2.html#cpCrit13-7" title="Cas particuliers pour le critère 13.7">hors cas particuliers</a>) ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-sequence">1.3.2</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-skip">2.4.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-focus-order">2.4.3</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-doc-lang-id">3.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G10.html" hreflang="en">G10</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G135.html" hreflang="en">G135</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F15.html" hreflang="en">F15</a></li>
	<li><strong>Test <abbr>RGAA</abbr></strong>  : 10.13</li>

 </ul>

<h3 id="crit-13-8">Critère 13.8 [Bronze] Pour chaque document bureautique ayant une version accessible, cette version offre-t-elle la même information ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-sequence">1.3.2</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#content-structure-separation-programmatic">1.3.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-skip">2.4.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#navigation-mechanisms-focus-order">2.4.3</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-doc-lang-id">3.1.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#ensure-compat-rsv">4.1.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G10.html" hreflang="en">G10</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G135.html" hreflang="en">G135</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F15.html" hreflang="en">F15</a></li>
	<li><strong>Test <abbr>RGAA</abbr></strong>  : 10.13</li>

 </ul>


<h3 id="crit-13-9">Critère 13.9 [Or] Dans chaque page Web, les expressions inhabituelles, les expressions idiomatiques ou le jargon sont-ils explicités ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-idioms">3.1.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G55.html" hreflang="en">G55</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G101.html" hreflang="en">G101</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G112.html" hreflang="en">G112</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H54.html" hreflang="en">H54</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 12.4</li>
 </ul>
<h3 id="crit-13-10">Critère 13.10 [Or] Dans chaque page Web, pour chaque expression inhabituelle ou limitée, idiomatique ou de jargon ayant une définition, cette définition est-elle pertinente ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-idioms">3.1.3</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G55.html" hreflang="en">G55</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G101.html" hreflang="en">G101</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G112.html" hreflang="en">G112</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/H54.html" hreflang="en">H54</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 12.4</li>
 </ul>

<h3 id="crit-13-11">Critère 13.11 [Bronze] Dans chaque page Web, chaque contenu cryptique (art ascii, émoticon, syntaxe cryptique) a-t-il une alternative ?</h3>
 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H86.html" hreflang="en">H86</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F71.html" hreflang="en">F71</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F72.html" hreflang="en">F72</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 12.5</li>
 </ul>
<h3 id="crit-13-12">Critère 13.12 [Bronze] Dans chaque page Web, pour chaque contenu cryptique (art ascii, émoticon, syntaxe cryptique) ayant une alternative, cette alternative est-elle pertinente ?</h3>

 <h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#text-equiv-all">1.1.1</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/H86.html" hreflang="en">H86</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F71.html" hreflang="en">F71</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F72.html" hreflang="en">F72</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 12.5</li>
 </ul>

<h3 id="crit-13-13">Critère 13.13 [Or] Dans chaque page Web, pour chaque mot dont le sens ne peut être compris sans en connaître la prononciation, celle-ci est-elle indiquée ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-pronunciation">3.1.6</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G62.html" hreflang="en">G62</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G120.html" hreflang="en">G120</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G121.html" hreflang="en">G121</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 12.6</li>

 </ul>



<h3 id="crit-13-14">Critère 13.14 [Or] Dans chaque page Web, chaque texte qui nécessite un niveau de lecture plus avancé que le premier cycle de l'enseignement secondaire a-t-il une version alternative ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#meaning-supplements">3.1.5</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G79.html" hreflang="en">G79</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G86.html" hreflang="en">G86</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G103.html" hreflang="en">G103</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G160.html" hreflang="en">G160</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G153.html" hreflang="en">G153</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 12.10</li>
 </ul>

<h3 id="crit-13-15">Critère 13.15 [Bronze] Dans chaque page Web, les <a href="index.php/glossaire_referentiel_2.2.html#mChangeLumi">changements brusques de luminosité ou les effets de flash</a> sont-ils correctement utilisés ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#seizure-does-not-violate">2.3.1</a></li>
	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G15.html" hreflang="en">G15</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G19.html" hreflang="en">G19</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G176.html" hreflang="en">G176</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.13 - 5.14 - 5.15</li>
 </ul>





<h3 id="crit-13-16">Critère 13.16 [Or] Dans chaque page Web, les <a href="index.php/glossaire_referentiel_2.2.html#mChangeLumi">changements brusques de luminosité ou les effets de flash</a> ont-ils une fréquence inférieure ou égale à 3 par seconde ?</h3>

<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>
 <ul class="correspondance">
	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#seizure-three-times">2.3.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G19.html" hreflang="en">G19</a></li>
	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.17</li>
 </ul>



<h3 id="crit-13-17">Critère 13.17 [Bronze] Dans chaque page Web, chaque contenu en mouvement ou clignotant est-il <a href="index.php/glossaire_referentiel_2.2.html#mControleMov">contrôlable par l'utilisateur</a> ?</h3>
<h4>Correspondances <abbr>WCAG</abbr> 2.0 et <abbr>RGAA</abbr></h4>

 <ul class="correspondance">

	<li><strong>Critère(s) de succès <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-real-time-captions">1.2.4</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#media-equiv-live-audio-only">1.2.9</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#time-limits-required-behaviors">2.2.1</a> - <a href="http://www.w3.org/Translations/WCAG20-fr/#time-limits-pause">2.2.2</a></li>

	<li><strong>Technique(s) suffisante(s) et/ou échec(s) <abbr>WCAG</abbr> 2.0</strong>  : <a href="http://www.w3.org/TR/WCAG-TECHS/G9.html" hreflang="en">G9</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G11.html" hreflang="en">G11</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G152.html" hreflang="en">G152</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G186.html" hreflang="en">G186</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G187.html" hreflang="en">G187</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G151.html" hreflang="en">G151</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G157.html" hreflang="en">G157</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/G191.html" hreflang="en">G191</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM11.html" hreflang="en">SM11</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SM12.html" hreflang="en">SM12</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F47.html" hreflang="en">F47</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F50.html" hreflang="en">F50</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F4.html" hreflang="en">F4</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F7.html" hreflang="en">F7</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/F16.html" hreflang="en">F16</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR22.html" hreflang="en">SCR22</a> - <a href="http://www.w3.org/TR/WCAG-TECHS/SCR36.html" hreflang="en">SCR36</a></li>

	<li><strong>Test <abbr>RGAA</abbr></strong>  : 5.19 - 5.20 - 5.21 - 5.22 - 5.23 - 5.24 - 5.25 - 5.26</li>
 </ul>
			<ul class="hautdepage">
				<li><a href="index.php/accessiweb_2.2_liste_generale.html#wrapper"><em>Haut de page</em></a></li>
			</ul>
		</div>
		<div id="intro" class="fdOpaque">
			<h2>AccessiWeb, méthode de vérification de conformité</h2>

			<h3>Pourquoi AccessiWeb ?</h3>
<p>WCAG (<span lang="en">Web Content Accessibility Guidelines</span>) est la norme internationale du <abbr title="World Wide Web Consortium" lang="en">W3C</abbr> pour l'accessibilité des contenus du Web. Cette norme est reconnue officiellement par la Commission Européenne qui en recommande l’adoption dans tous les pays membres de la communauté. L’administration française s’y réfère depuis 1999.</p>

<p>Cependant, comme toute norme technique, les <abbr title="Web Content Accessibility Guidelines" lang="en">WCAG</abbr>  nécessitent des  méthodes d’application adaptées aux activités qu’elles sont supposées encadrer : développement d’applications Web, développement de contenus, conception de l’interface, conception graphique, certification de conformité...<br />

Dès 2003, l’association BrailleNet a créé et rendu publique la méthode AccessiWeb pour permettre une approche unifiée à la vérification de conformité aux WCAG des services Web. Cette méthode vise une approche opérationnelle sur la base de critères et d’objectifs thématiques formulés dans le référentiel AccessiWeb  (Images, Cadres, Couleurs, Multimédia, Tableaux, Liens, Scripts, Eléments obligatoires, Structuration de l’information, Présentation de l’information, Formulaires, Navigation et Consultation).<br />
En 2004, le référentiel AccessiWeb a été adopté par l’administration française dans sa version 1.0 comme document de référence pour la mise en conformité des sites de communication en ligne avec les recommandations internationales. Cette méthode a donc été largement diffusée et utilisée, en France comme dans le monde francophone.</p>

			<h3>Les évolutions d’AccessiWeb</h3>
<p>Comme toute méthode, AccessiWeb et son référentiel doivent être mis à jour pour répondre aux retours d’expérience, ainsi qu’à l’évolution générale des technologies et des normes.</p>
<p>Dès  2004,  BrailleNet a constitué un groupe de travail technique, le <a href="http://www.accessiweb.org/index.php/groupe-de-travail-accessibilite-web.html">Groupe de Travail AccessiWeb</a>, pour assurer notamment la surveillance et l’évolution du référentiel AccessiWeb, sur la base de son utilisation concrète par des professionnels. Le <abbr title="Groupe de Travail AccessiWeb">GTA</abbr>, qui compte aujourd’hui près de 460 membres, a fait évoluer le référentiel AccessiWeb de la version 1.0 à la version 1.1, publiée en juin 2008.<br />

En décembre 2008, à la publication par le <abbr title="World Wide Web Consortium" lang="en">W3C</abbr> de la version 2.0 des <abbr title="Web Content Accessibility Guidelines" lang="en">WCAG</abbr>, en remplacement de la version 1.0, BrailleNet a tout d’abord mis en place un comité francophone pour <a href="http://www.w3.org/Translations/WCAG20-fr/">la traduction des <abbr>WCAG</abbr> 2.0</a> auquel le <abbr title="Groupe de Travail AccessiWeb">GTA</abbr> a largement contribué (la traduction en français du document <abbr title="Web Content Accessibility Guidelines" lang="en">WCAG</abbr> 2.0 a été la première traduction officiellement validée par <abbr title="World Wide Web Consortium" lang="en">W3C</abbr>, en juin 2009).<br />

Puis, durant l’été 2009, en s’appuyant sur ce comité francophone, BrailleNet a constitué un groupe expert pour l’évolution du référentiel AccessiWeb de la version 1.1 à la version 2.0 jusqu'à la version 2.2.</p>


			<h3>Les quatre objectifs d’AccessiWeb 2.2</h3>


			<p>En réalisant ce nouveau référentiel BrailleNet et son groupe Expert Référent visaient quatre objectifs :</p>

			<ul class="puceorange">
				<li><strong>Objectif 1 : permettre une compréhension opérationnelle des <a href="http://www.w3.org/TR/WCAG20/">WCAG 2.0</a></strong>

				<ul>
					<li>Le référentiel AccessiWeb 2.2 conserve les 13 thématiques générales créées avec AccessiWeb 1.1 qui permettent d’organiser la vérification de conformité selon des objectifs clairement compréhensibles et de fournir un cadre méthodologique opérationnel pour l’application des WCAG 2.0.</li>
					<li>Pour chacune de ces thématiques, le référentiel AccessiWeb 2.2 propose :
					<ul>
						<li>une liste de critères formulés sans référence aux technologies du Web de façon à être compris par des lecteurs ayant des profils professionnels variés. Ces critères sont cependant précis et détaillés.</li>
						<li>une liste de tests associés, se référant très précisément aux technologies du Web, telles que  balises/attributs <abbr title="HyperText Markup Language">HTML</abbr>, propriétés <abbr title="Cascading Style Sheets">CSS</abbr>, fonctions JavaScript...</li>

					</ul>
					</li>
				</ul></li>
				<li><strong>Objectif 2 : permettre de vérifier la conformité aux WCAG 2.0</strong>
				<ul class="puceorange">
					<li>Le référentiel AccessiWeb 2.2 établit une correspondance stricte entre les critères AccessiWeb et les règles et critères de succès des WCAG 2.0.</li>
					<li>Le référentiel AccessiWeb 2.2 reprend exactement les trois niveaux de conformité WCAG 2.0 : A ou AccessiWeb Bronze (le plus bas), AA ou AccessiWeb Argent et AAA ou AccessiWeb Or (le plus élevé).</li>

					<li>Le référentiel AccessiWeb 2.2 conduit à examiner à une série de questions univoques dont la réponse permet de conclure à la conformité ou non aux WCAG 2.0</li>
				</ul>
				</li>
				<li><strong>Objectif 3 : être cohérent avec <a href="http://references.modernisation.gouv.fr/rgaa-accessibilite"><abbr title="Référentiel Général d'Accessibilité pour les Administrations">RGAA</abbr> 2.2</a></strong><br />
				La loi n°2005-102 du 11 février 2005, son décret n°2009-546 d'application et l’arrêté au  journal officiel publié le 29 octobre 2009, obligent les administrations françaises à se référer au Référentiel Général d’Accessibilité des Administrations ( RGAA, version V2.2 en date du 23/10/09) pour attester de la conformité de leurs services en ligne aux WCAG 2.0, selon les niveaux A et AA.
				<ul class="puceorange">

					<li>Le référentiel AccessiWeb 2.2 vise la cohérence maximale avec le RGAA 2.2.</li>

					<li>Comme le RGAA 2.2, le référentiel AccessiWeb 2.2 repose sur la traduction française des WCAG 2.0 réalisée par le comité francophone de traduction et agréée par le W3C le 25 juin 2009.</li>
					<li>Les thématiques AccessiWeb 2.2 sont similaires à celles de RGAA 2.2 qui s’en est inspiré.</li>
					<li>Le référentiel AccessiWeb 2.2 propose une table de correspondance avec le RGAA 2.2.</li>
					<li>Le référentiel AccessiWeb 2.2 conduit à examiner à une série de questions univoques dont la réponse permet de conclure à la conformité ou non au RGAA 2.2</li>

				</ul>

				</li>
				<li><strong>Objectif 4 : fournir une méthode pour la certification de conformité</strong>

				<ul class="puceorange" >
					<li>Le référentiel AccessiWeb 2.2 est formulé de façon à pouvoir être utilisé dans une procédure de certification de conformité d’un service Web aux WCAG 2.0</li>
					<li>Le référentiel AccessiWeb 2.2 est formulé de façon à pouvoir être utilisé dans une procédure de certification de conformité d’un service Web au RGAA 2.2</li>

				</ul>
				</li>

			</ul>

			<h3>Mode d'emploi</h3>

			<p>Le référentiel AccessiWeb 2.2 est composé de 13 thématiques composées chacune d'une série de critères. Chaque critère est constitué d'un numéro (par exemple "1.1"), d'un niveau AccessiWeb (Bronze, Argent ou Or) et d'un intitulé (par exemple : "Chaque image a-t-elle une alternative textuelle ?"). Chaque critère AccessiWeb est associé à un ou plusieurs tests composé d'un numéro (par exemple "Test 1.1.1") et d'un intitulé (par exemple "Chaque image (balise img) a-t-elle un attribut alt ?".</p>
			<p>Chaque critère AccessiWeb affiche une correspondance vers un ou plusieurs critères de succès des WCAG 2.0, vers une ou plusieurs techniques suffisantes des WCAG 2.0 et vers un ou plusieurs tests du RGAA. La validation d'un criètre AccessiWeb 2.2 permet de valider le ou les critères RGAA associés.</p>

			<h3>Appel à commentaires public</h3>

			<p>La première version du Référentiel AccessiWeb (version 2.0) a été soumise à <strong>appel à commentaires public</strong> pour une période de 15 jours, <strong>entre le 9 et le 26 novembre 2009 à midi</strong>.</p>


			<h3>Conditions d'utilisation</h3>

			<p><span lang="en">Copyright</span> © 2012 Association BrailleNet. Tous droits Réservés.</p>
<p><a href="http://www.braillenet.org">L'association BrailleNet</a> est le propriétaire du Référentiel AccessiWeb et de tous ses contenus. Vous pouvez utiliser ce document dans les conditions suivantes :</p>

<p><strong>Note</strong> : licence basée sur la <a href="http://www.w3.org/Consortium/Legal/2002/copyright-documents-20021231">licence des documents du <abbr title="World Wide
Web Consortium" lang="en">W3C</abbr></a>. Cette licence s'applique spécifiquement au Référentiel AccessiWeb. Notre licence autorise des extensions et des modifications du Référentiel AccessiWeb, tant que les références vers le document original sont données et des copies de cette licence sont fournies. Aucun des documents référencés dans ce document émanant du <abbr title="World Wide Web
Consortium" lang="en">W3C</abbr> ou de son initiative <abbr title="Web Accessibility Initiative" lang="en">WAI</abbr> ne sont sujets aux conditions de cette licence.</p>

<p>En utilisant et/ou copiant ce document (Référentiel AccessiWeb), ou le document depuis lequel cette citation est liée, vous (la personne qui utilise un document sous cette licence) déclarez avoir lu, compris et accepté de vous conformer aux termes et conditions suivants :</p>
<p>Permission de copier, et distribuer les contenus de ce document ou du document depuis lequel cette citation est liée, sous toute forme, pour toute cause et sans qu'aucune rémunération ou droit ne soit accordé à condition que vous incluiez les informations suivantes sur <strong>toutes</strong> les copies du document (ou les portions de celui-ci) que vous avez utilisées :</p>

<ul>
<li>le lien (Référentiel AccessiWeb avec l'<abbr title="Unified Resource Locator" lang="en">URL</abbr> suivante vers le document original : <a href="http://www.accessiweb.org/index.php/accessiweb_2.2_liste_generale.html">http://www.accessiweb.org/index.php/accessiweb_2.2_liste_generale.html</a>.</li>
<li>la notice de droit d'auteur pré-existante du document original ou, si elle n'existe pas, la notice (un lien hypertexte est préférable mais une représentation textuelle est permise) "<span lang="en">Copyright</span> © 2012 Association BrailleNet. Tous droits Réservés."
</li><li>le statut du document. </li></ul>
<p>Si l'espace est suffisant, l'inclusion du texte intégral de cette <strong>notice</strong> doit être faite. Nous demandons que la référence au nom de l'auteur (association BrailleNet) soit inscrite pour chaque logiciel, document, ou autre article ou produit que vous créerez à partir de l'implémentation des contenus de ce document ou de toute portion de celui-ci.</p>

<p>Cette licence autorise l'utilisation, la modification, et l'extension de ce document à toute organisation sans droits d'auteur, dans les conditions exprimées ci-dessus. Dans le cas de modifications en dehors de l'organisme de normalisation sélectionné ou de l'entité équivalente par le détenteur des droits, ni l'expression "Référentiel AccessiWeb" ni le sigle "AccessiWeb" ne peuvent être utilisés pour dénommer le travail effectué.</p>
<p><strong>Ce document est fourni "tel quel", et les détenteurs de droits d'auteurs n'assurent aucune garantie, explicite ou implicite, comprenant mais non limitée à des garanties propres aux règles commerciales, aux aptitudes pour un but particulier, non atteinte, ou à des règles de propriété; que les contenus de ce document sont appropriés pour toute cause ; ni que l'implémentation de tels contenus n'enfreindra pas de brevets, droits d'auteurs, marques ou tous autres droits faits pour des tiers.</strong></p>
<p><strong>Les détenteurs des droits ne seront pas responsables de tous dommages directs, indirects, spéciaux ou causés suite à l'utilisation de ce document ou de l'exécution ou l'implémentation des contenus de celui-ci.</strong></p>

<p>Les noms et les marques des détenteurs des droits ne doivent pas être utilisés pour faire la promotion ou la publicité concernant ce document ou ses contenus sans permission préalable spécifique écrite. Le titre au <span lang="en">copyright</span> de ce document restera toujours la propriété des détenteurs des droits.</p>

			<h3>Contact</h3>
			<p>Pour toute question sur l'utilisation de ces documents ou sur le Référentiel AccessiWeb 2.2, merci d'envoyer un courriel à <a title="envoyer un courriel à info@accessiweb.org" href="mailto:info@accessiweb.org">info@accessiweb.org</a>.</p>

			<h3>Remerciements</h3>
			<p>L'association BrailleNet remercie chaleureusement Jean-Pierre Villain de la société Qélios pour son total investissement et la qualité de son travail dans le cadre du Référentiel AccessiWeb 2.2.</p>

			<p>Enfin, comme lors de la précédente version du référentiel AccessiWeb, ce travail de mise à jour a été réalisé en concertation avec plusieurs <a href="http://www.accessiweb.org/index.php/experts_accessiWeb_en_evaluation.html">Experts AccessiWeb en Evaluation</a> ainsi que de professionnels de l’accessibilité numérique issus du monde francophone. Nous les remercions eux aussi pour leur réactivité et la qualité de leurs remarques :</p>
			<ul class="puceorange">

				<li>Armony Altinier (ACS Horizons), </li>
				<li>Aurélien Lévy (Témésis), </li>
				<li>Dominique Burger (INSERM - UPMC), </li>

				<li>Elie Sloïm (Temesis), </li>
				<li>Estelle Renaud (Jouve), </li>
				<li>Fernando Pinto da Silva (AVH), </li>

				<li>Franck Taillandier (Rectorat de l’académie de Toulouse), </li>

				<li>Frédéric Halna, </li>
				<li>Gilles Chagnon (UPMC), </li>

				<li>Jean-Marie d'Amour (Institut Nazareth et Louis-Braille), </li>
				<li>Laurent Denis (Témésis), </li>
				<li>Lionel Lemoine (Adobe), </li>
				<li>Magali Oualid (Ministères de l’éducation Nationale - Enseignement Supérieur et de la Recherche), </li>

				<li>Marc-Etienne Vargenau (Alcatel-Lucent France), </li>
				<li>Matthieu Faure (Open-S), </li>
				<li>Olivier Nourry (Qélios), </li>

				<li>Patrice Bourlon (Collectiweb), </li>
				<li>Philippe Béraud (Microsoft), </li>
				<li>Philippe Vayssière (Alsacréations), </li>

				
				<li>Pierre Reynaud (CG de la Réunion), </li>
				<li>Romain Gervois, </li>

				<li>Sébastien Delorme (Atalan), </li>
				<li>Sylvie Duchateau, (association BrailleNet)</li>
				<li>Tanguy Lohéac (Sanofi), </li>

				<li>Victor Brito, </li>

				<li>Vincent Aniort (APF).</li>
			</ul>
			<p>Nous tenons à remercier Philippe Vayssière (alsacreations.fr) pour son aide portant notamment sur l'ajout des identifiants sur les critères et les tests ainsi que les liens directs vers les Critères de Succès, Techniques Suffisantes et les Échecs WCAG 2.0.</p>
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

$withRgaaLinks = preg_replace_callback('/([-|: ] )([0-9]+\.[0-9]+)/', 'linkRgaa', $from);

echo $withRgaaLinks;