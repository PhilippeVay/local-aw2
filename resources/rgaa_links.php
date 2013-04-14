<?php
// Search all in ST2:
//		'(.*)' => '(.*)',
// Replace all:
//		'$2' => '$1',

$rgaa = array(
'1.1' => '1-1-Absence-de-cadres-non-titres.html',
'1.2' => 'Pertinence-des-titres-donnes-aux.html',
'2.1' => 'Presence-d-un-autre-moyen-que-la.html',
'2.2' => 'Presence-d-un-autre-moyen-que-la,4.html',
'2.3' => 'Presence-d-un-moyen-de.html',
'2.4' => 'Presence-d-un-moyen-de,6.html',
'2.5' => 'Valeur-du-rapport-de-contraste-du.html',
'2.6' => 'Valeur-du-rapport-de-contraste-du,8.html',
'2.7' => 'Valeur-du-rapport-de-contraste-du,9.html',
'2.8' => 'Valeur-du-rapport-de-contraste-du,10.html',
'2.9' => 'Valeur-du-rapport-de-contraste-du,11.html',
'2.10' => 'Valeur-du-rapport-de-contraste-du,12.html',
'2.11' => 'Valeur-du-rapport-de-contraste-du,13.html',
'2.12' => 'Valeur-du-rapport-de-contraste-du,14.html',
'2.13' => 'Valeur-du-rapport-de-contraste-du,15.html',
'2.14' => 'Valeur-du-rapport-de-contraste-du,16.html',
'2.15' => 'Valeur-du-rapport-de-contraste-du,17.html',
'2.16' => 'Valeur-du-rapport-de-contraste-du,18.html',
'3.1' => 'Possibilite-d-identifier-les.html',
'3.2' => 'Presence-d-information-prealable.html',
'3.3' => 'Positionnement-correct-des.html',
'3.4' => 'Regroupement-d-elements-de.html',
'3.5' => 'Absence-d-element-fieldset-sans.html',
'3.6' => 'Pertinence-du-contenu-de-l-element.html',
'3.7' => 'Regroupement-d-elements-option.html',
'3.8' => 'Presence-d-un-attribut-label-sur-l.html',
'3.9' => 'Pertinence-du-contenu-de-l.html',
'3.10' => 'Absence-d-element-de-formulaire.html',
'3.11' => 'Absence-d-element-de-formulaire,29.html',
'3.12' => 'Pertinence-des-etiquettes-d.html',
'3.13' => 'Presence-d-informations-ou-de.html',
'3.14' => 'Presence-de-mecanismes-permettant.html',
'3.15' => 'Presence-de-mecanismes-permettant,33.html',
'3.16' => 'Presence-d-une-page-d-aide-ou-d-un.html',
'4.1' => 'Presence-de-l-attribut-alt.html',
'4.2' => 'Pertinence-de-l-alternative.html',
'4.3' => 'Pertinence-de-l-alternative,37.html',
'4.4' => 'Pertinence-de-l-alternative,38.html',
'4.5' => 'Pertinence-de-l-alternative-vide.html',
'4.6' => 'Longueur-du-contenu-des.html',
'4.7' => 'Existence-d-une-description-longue.html',
'4.8' => 'Pertinence-de-la-description.html',
'4.9' => 'Presence-de-l-attribut-longdesc.html',
'4.10' => 'Presence-d-une-information-de.html',
'4.11' => 'Coherence-dans-l-identification.html',
'5.1' => 'Acces-a-une-information.html',
'5.2' => 'Presence-de-la-transcription.html',
'5.3' => 'Pertinence-de-la-transcription.html',
'5.4' => 'Presence-d-une-description-audio.html',
'5.5' => 'Pertinence-de-la-description-audio.html',
'5.6' => 'Possibilite-de-controler-l.html',
'5.7' => 'Presence-d-une-description-audio,52.html',
'5.8' => 'Presence-d-une-description-audio,53.html',
'5.9' => 'Presence-du-sous-titrage.html',
'5.10' => 'Pertinence-du-sous-titrage.html',
'5.11' => 'Presence-d-une-alternative-aux.html',
'5.12' => 'Presence-d-une-alternative-aux,57.html',
'5.13' => 'Absence-d-elements-provoquant-des.html',
'5.14' => 'Absence-de-code-javascript,59.html',
'5.15' => 'Absence-de-mise-en-forme.html',
'5.16' => 'Compatibilite-des-elements.html',
'5.17' => 'Absence-totale-de-changements.html',
'5.18' => 'Presence-du-sous-titrage,63.html',
'5.19' => 'Absence-de-l-element-blink.html',
'5.20' => 'Absence-d-elements-provoquant-des,65.html',
'5.21' => 'Absence-de-code-javascript,66.html',
'5.22' => 'Absence-de-mise-en-forme,67.html',
'5.23' => 'Absence-d-element-marquee.html',
'5.24' => 'Absence-d-elements-affichant-des.html',
'5.25' => 'Absence-de-code-javascript,70.html',
'5.26' => 'Absence-de-mise-en-forme,71.html',
'5.27' => 'Independance-du-peripherique-d.html',
'5.28' => 'Presence-d-une-alternative-aux,73.html',
'5.29' => 'Absence-d-elements-declenchant-la.html',
'5.30' => 'Absence-d-element-bgsound.html',
'5.31' => 'Presence-de-version-en-langue-des.html',
'5.32' => 'Pertinence-de-la-version-en-langue.html',
'5.33' => 'Niveau-sonore-de-la-piste-de.html',
'5.34' => 'Presence-d-un-mecanisme-pour.html',
'6.1' => 'Acces-aux-liens-textuels-doublant.html',
'6.2' => 'Presence-d-un-avertissement.html',
'6.3' => 'Presence-d-un-avertissement,82.html',
'6.4' => 'Presence-d-un-avertissement,83.html',
'6.5' => 'Absence-d-ouverture-de-nouvelles.html',
'6.6' => 'Absence-de-piege-lors-de-la.html',
'6.7' => 'Absence-d-element-meta-provoquant.html',
'6.8' => 'Absence-de-code-javascript.html',
'6.9' => 'Absence-d-elements-provoquant-un.html',
'6.10' => 'Absence-d-element-meta-provoquant,89.html',
'6.11' => 'Absence-de-code-javascript,90.html',
'6.12' => 'Absence-d-elements-provoquant-une.html',
'6.13' => 'Possibilite-d-identifier-la.html',
'6.14' => 'Possibilite-d-identifier-la,93.html',
'6.15' => 'Coherence-de-la-destination-ou-de.html',
'6.16' => 'Absence-de-liens-sans-intitule.html',
'6.17' => 'Presence-d-une-page-contenant-le.html',
'6.18' => 'Coherence-du-plan-du-site.html',
'6.19' => 'Presence-d-un-acces-a-la-page.html',
'6.20' => 'Presence-d-un-fil-d-ariane.html',
'6.21' => 'Presence-de-menus-ou-de-barres-de.html',
'6.22' => 'Coherence-de-la-position-des-menus.html',
'6.23' => 'Coherence-de-la-presentation-des.html',
'6.24' => 'Navigation-au-clavier-dans-un.html',
'6.25' => 'Presence-d-un-avertissement,104.html',
'6.26' => 'Presence-des-informations-de.html',
'6.27' => 'Presence-des-informations-de-poids.html',
'6.28' => 'Presence-des-informations-de,107.html',
'6.29' => 'Presence-de-regroupement-pour-les.html',
'6.30' => 'Presence-d-un-balisage-permettant.html',
'6.31' => 'Presence-de-liens-d-evitement-ou-d.html',
'6.32' => 'Coherence-des-liens-d-evitement-ou.html',
'6.33' => 'Ordre-des-liens-d-evitement-ou-d.html',
'6.34' => 'Presence-d-un-moteur-de-recherche.html',
'6.35' => 'Possibilite-de-naviguer-facilement.html',
'6.36' => 'Presence-d-une-indication-de-la.html',
'7.1' => 'Absence-de-generation-de-contenus.html',
'7.2' => 'Absence-d-alteration-de-la.html',
'7.3' => 'Lisibilite-des-informations.html',
'7.4' => 'Absence-d-espaces-utilises-pour.html',
'7.5' => 'Absence-de-definition-d-une.html',
'7.6' => 'Possibilite-de-remplacer-les.html',
'7.7' => 'Possibilite-de-remplacer-les,122.html',
'7.8' => 'Absence-d-attributs-ou-d-elements.html',
'7.9' => 'Absence-d-elements-HTML-utilises-a.html',
'7.10' => 'Maintien-de-la-distinction.html',
'7.11' => 'Absence-de-suppression-de-l-effet.html',
'7.12' => 'Absence-de-justification-du-texte.html',
'7.13' => 'Lisibilite-du-document-en-cas-d.html',
'7.14' => 'Absence-d-unites-absolues-ou-de.html',
'7.15' => 'Absence-d-apparition-de-barre-de.html',
'7.16' => 'Largeur-des-blocs-de-textes.html',
'7.17' => 'Valeur-de-l-espace-entre-les.html',
'7.18' => 'Restitution-correcte-dans-les.html',
'8.1' => 'Mise-a-jour-des-alternatives-aux.html',
'8.2' => 'Universalite-du-gestionnaire-d.html',
'8.3' => 'Universalite-des-gestionnaires-d.html',
'8.4' => 'Possibilite-de-desactiver-toute.html',
'8.5' => 'Absence-de-changements-de-contexte.html',
'8.6' => 'Ordre-d-acces-au-clavier-aux.html',
'8.7' => 'Utilisation-correcte-du-role-des.html',
'8.8' => 'Presence-d-une-alternative-au-code.html',
'8.9' => 'Absence-de-suppression-du-focus.html',
'8.10' => 'Absence-de-limite-de-temps-pour.html',
'8.11' => 'Absence-de-perte-d-informations.html',
'8.12' => 'Presence-d-une-alternative-au-code,145.html',
'8.13' => 'Accessibilite-des-contenus.html',
'9.1' => 'Presence-de-la-declaration-d.html',
'9.2' => 'Conformite-de-la-position-de-la.html',
'9.3' => 'Conformite-syntaxique-de-la.html',
'9.4' => 'Validite-du-code-HTML-XHTML-au.html',
'9.5' => 'Absence-de-composants-obsoletes.html',
'9.6' => 'Presence-d-un-titre-dans-la-page.html',
'9.7' => 'Pertinence-du-titre-de-la-page.html',
'9.8' => 'Presence-d-une-langue-de.html',
'10.1' => 'Presence-d-au-moins-un-titre-de.html',
'10.2' => 'Pertinence-du-contenu-des-titres.html',
'10.3' => 'Absence-d-interruption-dans-la.html',
'10.4' => 'Presence-d-une-hierarchie-de.html',
'10.5' => 'Absence-de-simulation-visuelle-de.html',
'10.6' => 'Utilisation-systematique-de-listes.html',
'10.7' => 'Balisage-correct-des-listes-de.html',
'10.8' => 'Balisage-correct-des-citations.html',
'10.9' => 'Balisage-correct-des-abreviations.html',
'10.10' => 'Balisage-correct-des-acronymes.html',
'10.11' => 'Pertinence-de-la-version-non.html',
'10.12' => 'Pertinence-de-la-version-complete.html',
'10.13' => 'Accessibilite-des-documents.html',
'11.1' => 'Presence-des-balises-th-pour.html',
'11.2' => 'Presence-d-une-relation-entre-les.html',
'11.3' => 'Presence-d-une-relation-entre-les,170.html',
'11.4' => 'Absence-des-elements-propres-aux.html',
'11.5' => 'Absence-de-tableaux-de-donnees-ou.html',
'11.6' => 'Linearisation-correcte-des.html',
'11.7' => 'Presence-d-un-titre-pour-les.html',
'11.8' => 'Presence-d-un-resume-pour-les.html',
'11.9' => 'Pertinence-du-titre-du-tableau-de.html',
'11.10' => 'Pertinence-du-resume-du-tableau-de.html',
'12.1' => 'Presence-de-l-indication-des.html',
'12.2' => 'Presence-de-l-indication-des,179.html',
'12.3' => 'Equivalence-de-l-information-mise.html',
'12.4' => 'Presence-de-liens-ou-de.html',
'12.5' => 'Absence-de-syntaxes-cryptiques-par.html',
'12.6' => 'Presence-d-informations-sur-les.html',
'12.7' => 'Presence-d-un-moyen-de,184.html',
'12.8' => 'Presence-d-un-autre-moyen-que-la,185.html',
'12.9' => 'Presence-d-un-autre-moyen-que-la,186.html',
'12.10' => 'Utilisation-d-un-style-de.html'
);
