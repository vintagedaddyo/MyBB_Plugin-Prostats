<?php
/*
 _______________________________________________________
|                                                       |
| Name: ProStats 1.9.7.3                                |
| Type: MyBB Plugin                                     |
| Author: SaeedGh (SaeehGhMail@Gmail.com)               |
| Author2: AliReza Tofighi (http://my-bb.ir)            |
| Quick simple edits for php 7.2 pkged by vintagedaddyo |
| Support: http://prostats.wordpress.com/support/       |
| Last edit: July 24, 2019                             |
|_______________________________________________________|

Information of this version:
https://community.mybb.com/thread-220378-post-1320892.html#pid1320892

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

*/

// Plugin info

$l['pstats_PName'] = '<img border="0" src="../images/prostats/prostats.png" align="absbottom" /> ProStats <span style="color:#000;">/proʊˈstæts/</span>';
$l['pstats_PDesc'] = 'Statistiques professionnelles pour MyBB. ';
$l['pstats_PWeb'] = 'http://prostats.wordpress.com';
$l['pstats_PAuth'] = '<a href="mailto:SaeedGhMail@Gmail.com">SaeedGh</a> et <a href="http://my-bb.ir">AliReza Tofighi</a> Mis a jour par <a href="http://community.mybb.com/user-6029.html">vintagedadyo</a>';
$l['pstats_PAuthSite'] = '';
$l['pstats_PVer'] = '1.9.7.3';
$l['pstats_PGUID'] = '124b68d05dcdaf6b7971050baddf340f';
$l['pstats_PCompat'] = '18*';


$l['pstats_settings_link'] = '<!--(<a href="index.php?module=config&action=change&search=prostats" style="color:#FF1493;">Reglages</a>)<br/>//-->';

//float_stats

$l['pstats_float_stats_instant_preview'] = 'Apercu instantane';


// extra_cells
$l['pstats_extra_cells_1'] = 'La plupart des reponses';
$l['pstats_extra_cells_2'] = 'La plupart des reputations';
$l['pstats_extra_cells_3'] = 'Merci beaucoup';
$l['pstats_extra_cells_4'] = 'Le plus regarde';
$l['pstats_extra_cells_5'] = 'Nouveaux membres';
$l['pstats_extra_cells_6'] = 'Top telechargements';
$l['pstats_extra_cells_7'] = 'Top affiches';
$l['pstats_extra_cells_8'] = 'Top referents';
$l['pstats_extra_cells_9'] = 'Affiches de fils superieurs';


// setting group
$l['pstats_setting_group_title'] = 'ProStats';
$l['pstats_setting_group_description'] = 'Statistiques professionnelles pour MyBB.';

// setting 1
$l['pstats_setting_1_title'] = 'Activer';
$l['pstats_setting_1_description'] = 'Voulez-vous activer le plugin?';

// setting 2
$l['pstats_setting_2_title'] = 'Afficher sur l index';
$l['pstats_setting_2_description'] = 'Affichez la table ProStats sur la page d index.';

// setting 3
$l['pstats_setting_3_title'] = 'Montrer sur le portail';
$l['pstats_setting_3_description'] = 'Affichez la table ProStats sur la page de portail.';

// setting 4
$l['pstats_setting_4_title'] = 'Activer le tag global';
$l['pstats_setting_4_description'] = 'Ainsi, vous pouvez editer des themes et inserer &lt;ProStats&gt; taguer ou vous voulez montrer les statistiques.';

// setting 5
$l['pstats_setting_5_title'] = 'Masquer des robots de recherche';
$l['pstats_setting_5_description'] = "En utilisant cette option, vous pouvez masquer les statistiques de tous les robots de recherche que vous avez definis dans <strong><a href=\"index.php?module=config-spiders\" target=\"_blank\">Araignees/Bots</a></strong> page. Cela permettra d economiser de la bande passante et de reduire la charge du serveur.";

// setting 6
$l['pstats_setting_6_title'] = 'Ignorer la liste';
$l['pstats_setting_6_description'] = 'Les forums ne doivent pas etre affiches sur ProStats. Pour selectionner plusieurs elements, maintenez la touche Ctrl enfoncee et cliquez sur chacun des elements. Pour deselectionner des elements, maintenez la touche Ctrl enfoncee et cliquez dessus.';

// setting 7
$l['pstats_setting_7_title'] = 'Position de la table dans l index et le portail';
$l['pstats_setting_7_description'] = 'Position des statistiques dans les pages d index et de portail.';

$l['pstats_setting_7_option_1'] = 'Top (En-tete)';
$l['pstats_setting_7_option_2'] = 'Bas (pied de page)';

// setting 8
$l['pstats_setting_8_title'] = "Noms d utilisateur de style";
$l['pstats_setting_8_description'] = "Style le nom d utilisateur en couleur vraie, police, etc.";

// setting 9
$l['pstats_setting_9_title'] = 'Systeme de surbrillance';
$l['pstats_setting_9_description'] = "Mettez en surbrillance les discussions supprimees, les discussions non approuvees et les discussions postees dans les forums moderes par l utilisateur actuel.<br />
 Schema de couleur: <span style=\"background-color:#E8DEFF;\">Supprime</span>, <span style=\"background-color:#FFDDE0;\">Non approuve</span>, <span style=\"background-color:#FFFE92;\">En zone de moderation</span>, <span style=\"background-color:#FFDA91;\">Zone de moderation non approuvee et en cours</span> ";

// setting 10
$l['pstats_setting_10_title'] = 'Longueur du sujet';
$l['pstats_setting_10_description'] = 'Longueur maximale du sujet/sujet. (Entrez 0 pour supprimer la limitation)';

// setting 11
$l['pstats_setting_11_title'] = 'Nombre de rangees';
$l['pstats_setting_11_description'] = "Combien d articles doivent etre affiches? Entrer un <strong style=\"color:red;\">impaire</strong> nombre superieur ou egal a 3.";

// setting 12
$l['pstats_setting_12_title'] = 'Format de date et heure';
$l['pstats_setting_12_description'] = "Le format de date et heure qui serait utilise dans les statistiques. [<a href=\"http://php.net/manual/en/function.date.php\" target=\"_blank\">Plus d information</a>]";

$l['pstats_setting_12_value'] = 'M-d, h:i';

// setting 13
$l['pstats_setting_13_title'] = 'Partie variable date et heure';
$l['pstats_setting_13_description'] = "Une partie du format de date et heure qui doit etre remplacee par \"Hier\" or \"Aujourd hui\".";

$l['pstats_setting_13_value'] = 'm-d';

// setting 14
$l['pstats_setting_14_title'] = 'Bloc de message';
$l['pstats_setting_14_description'] = 'Ceci est un bloc en haut/en bas du tableau ProStats dans lequel vous pouvez placer votre contenu HTML. Laissez-le vide pour le cacher.';

// setting 15
$l['pstats_setting_15_title'] = 'Position du bloc de message';
$l['pstats_setting_15_description'] = 'La position du bloc de messages dans la table ProStats.';

$l['pstats_setting_15_option_1'] = 'Haut';
$l['pstats_setting_15_option_2'] = 'Down (par defaut)';

// setting 16
$l['pstats_setting_16_title'] = 'Afficher les derniers messages';
$l['pstats_setting_16_description'] = 'Afficher les derniers messages dans la table ProStats.';

// setting 17
$l['pstats_setting_17_title'] = 'Afficher le prefixe pour les derniers messages';
$l['pstats_setting_17_description'] = "Afficher les prefixes dans le sujet des derniers messages (s il y en a).";

// setting 18
$l['pstats_setting_18_title'] = 'Statistiques des derniers messages';
$l['pstats_setting_8_description'] = "Quel type de statistiques souhaitez-vous afficher pour les derniers messages?<br />Vos choix sont: <strong>Latest_posts, Date, Starter, Last_sender, Forum</strong><br />Separez-les par une virgule (\",\").";
$l['pstats_setting_18_options_value'] = 'Latest_posts, Date, Starter, Last_sender, Forum';

// setting 19
$l['pstats_setting_19_title'] = 'Derniers postes postes';
$l['pstats_setting_19_description'] = 'La position du bloc Derniers messages.';

$l['pstats_setting_19_option_1'] = 'La gauche';
$l['pstats_setting_19_option_2'] = 'Droite';

// setting 20
$l['pstats_setting_20_title'] = 'Cellule supplementaire 1 (en haut a gauche)';
$l['pstats_setting_20_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:-28px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 21
$l['pstats_setting_21_title'] = 'Cellule supplementaire 2 (en bas a gauche)';
$l['pstats_setting_21_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:-28px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 22
$l['pstats_setting_22_title'] = 'Cellule supplementaire 3 (haut-milieu)';
$l['pstats_setting_22_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:-14px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 23
$l['pstats_setting_23_title'] = 'Extra Cell 4 (Bas-Milieu)';
$l['pstats_setting_23_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:-14px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 24
$l['pstats_setting_24_title'] = 'Cellule supplementaire 5 (en haut a droite)';
$l['pstats_setting_24_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:0px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 25
$l['pstats_setting_25_title'] = 'Cellule supplementaire 6 (Bas-Droite)';
$l['pstats_setting_25_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:0px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 26
$l['pstats_setting_26_title'] = 'Activer le flux XML';
$l['pstats_setting_26_description'] = "Generez les statistiques au format XML a afficher sur d autres sites Web. [<a href=\"http://community.mybb.com/thread-48686.html\" target=\"_blank\">Plus d information</a>]";

// setting 27
$l['pstats_setting_27_title'] = 'erifier les mises a jour';
$l['pstats_setting_27_description'] = 'Activez ce parametre et vous serez averti chaque fois qu une nouvelle version sera publiee. La notification sera affichee au-dessus du tableau des ProStats et ne sera visible que par les administrateurs.';

// setting 28
$l['pstats_setting_28_title'] = 'Surprise!';
$l['pstats_setting_28_description'] = 'Cette option peut ajouter un peu de fun a votre forum parfois! Cela se produirait probablement une ou deux fois par an et seuls les administrateurs peuvent voir le resultat.';

// setting 29
$l['pstats_setting_29_title'] = 'Version ProStats';
$l['pstats_setting_29_description'] = 'NE MODIFIEZ PAS CE CADRE';

// setting 30
$l['pstats_setting_30_title'] = 'Affichage des reponses ProStats';
$l['pstats_setting_30_description'] = 'Ceci active ou desactive l affichage du nombre de reponses.';

// cells switch
$l['pstats_switch_latest_posts'] = 'Latest_posts';
$l['pstats_switch_date'] = 'Date';
$l['pstats_switch_starter'] = 'Starter';
$l['pstats_switch_last_sender'] = 'Last_sender';
$l['pstats_switch_forum'] = 'Forum';

?>