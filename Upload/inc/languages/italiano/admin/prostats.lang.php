<?php
/*
 _______________________________________________________
|                                                       |
| Name: ProStats 1.9.7.5                                |
| Type: MyBB Plugin                                     |
| Author: SaeedGh (SaeehGhMail@Gmail.com)               |
| Author2: AliReza Tofighi (http://my-bb.ir)            |
| Quick simple edits for php 7.2 pkged by vintagedaddyo |
| Support: http://prostats.wordpress.com/support/       |
| Last edit: May 11, 2022                               |
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
$l['pstats_PDesc'] = 'Statistiche professionali per MyBB. ';
$l['pstats_PWeb'] = 'http://prostats.wordpress.com';
$l['pstats_PAuth'] = '<a href="mailto:SaeedGhMail@Gmail.com">SaeedGh</a> e <a href="http://my-bb.ir">AliReza Tofighi</a> Aggiornato da <a href="http://community.mybb.com/user-6029.html">vintagedadyo</a>';
$l['pstats_PAuthSite'] = '';
$l['pstats_PVer'] = '1.9.7.5';
$l['pstats_PGUID'] = '124b68d05dcdaf6b7971050baddf340f';
$l['pstats_PCompat'] = '18*';


$l['pstats_settings_link'] = '<!--(<a href="index.php?module=config&action=change&search=prostats" style="color:#FF1493;">impostazioni</a>)<br/>-->';


//float_stats

$l['pstats_float_stats_instant_preview'] = 'Anteprima istantanea';


// extra_cells
$l['pstats_extra_cells_1'] = 'La maggior parte delle risposte';
$l['pstats_extra_cells_2'] = 'La maggior parte della reputazione';
$l['pstats_extra_cells_3'] = 'Grazie di cuore';
$l['pstats_extra_cells_4'] = 'I piu visti';
$l['pstats_extra_cells_5'] = 'Nuovi membri';
$l['pstats_extra_cells_6'] = 'Download migliori';
$l['pstats_extra_cells_7'] = 'Manifesti alti';
$l['pstats_extra_cells_8'] = 'Top referenti';
$l['pstats_extra_cells_9'] = 'Poster ad alta discussione';

// setting group
$l['pstats_setting_group_title'] = 'ProStats';
$l['pstats_setting_group_description'] = 'Statistiche professionali per MyBB.';

// setting 1
$l['pstats_setting_1_title'] = 'Abilitare';
$l['pstats_setting_1_description'] = 'Vuoi abilitare il plugin?';

// setting 2
$l['pstats_setting_2_title'] = 'Mostra sull indice';
$l['pstats_setting_2_description'] = 'Mostra la tabella ProStats nella pagina dell indice.';

// setting 3
$l['pstats_setting_3_title'] = 'Mostra sul portale';
$l['pstats_setting_3_description'] = 'Mostra la tabella ProStats sulla pagina del portale.';

// setting 4
$l['pstats_setting_4_title'] = 'Attiva il tag globale';
$l['pstats_setting_4_description'] = 'Quindi puoi modificare temi e inserire &lt;ProStats&gt; tag dove vuoi mostrare le statistiche.';

// setting 5
$l['pstats_setting_5_title'] = 'Nascondi dai bot di ricerca';
$l['pstats_setting_5_description'] = "Usando questa opzione puoi nascondere le statistiche da tutti i robot di ricerca in cui li hai definiti <strong><a href=\"index.php?module=config-spiders\" target=\"_blank\">Ragni/Motori di ricerca</a></strong> pagina. Cio consentira di risparmiare larghezza di banda e ridurre il carico del server..";

// setting 6
$l['pstats_setting_6_title'] = 'Ignora lista';
$l['pstats_setting_6_description'] = 'Forum da non mostrare su ProStats. Per selezionare più elementi, tenere premuto il tasto Ctrl e fare clic su ciascuno degli elementi. Per deselezionare gli oggetti tieni premuto il tasto Ctrl e fai clic su di essi.';

// setting 7
$l['pstats_setting_7_title'] = 'Posizione della tabella nell indice';
$l['pstats_setting_7_description'] = 'Posizione delle statistiche nelle pagine dell indice.';

$l['pstats_setting_7_option_1'] = 'Superiore (intestazione)';
$l['pstats_setting_7_option_2'] = 'In basso (pie di pagina)';

// setting 8
$l['pstats_setting_8_title'] = 'Stile Nomi utente';
$l['pstats_setting_8_description'] = 'Personalizza il nome utente in true color, font, ecc.';

// setting 9
$l['pstats_setting_9_title'] = 'Sistema di evidenziazione';
$l['pstats_setting_9_description'] = "Evidenzia i thread eliminati automaticamente, i thread non approvati e i thread che vengono pubblicati nei forum moderati dall utente corrente.<br />
 Combinazione di colori: <span style=\"background-color:#E8DEFF;\">Eliminata</span>, <span style=\"background-color:#FFDDE0;\">Non approvato</span>, <span style=\"background-color:#FFFE92;\">Nella zona di moderazione</span>, <span style=\"background-color:#FFDA91;\">Zona non approvata e con moderazione</span> ";

// setting 10
$l['pstats_setting_10_title'] = 'Lunghezza del soggetto';
$l['pstats_setting_10_description'] = 'Lunghezza massima dell argomento/post soggetti. (Inserire 0 per rimuovere la limitazione)';

// setting 11
$l['pstats_setting_11_title'] = 'Numero di righe';
$l['pstats_setting_11_description'] = "Quanti oggetti devono essere mostrati? Input an <strong style=\"color:red;\">dispari</strong> numero maggiore o uguale a 3.";

// setting 12
$l['pstats_setting_12_title'] = 'Formato data e ora';
$l['pstats_setting_12_description'] = "Il formato di data e ora che verrebbe utilizzato nelle statistiche. [<a href=\"http://php.net/manual/en/function.date.php\" target=\"_blank\">Maggiori informazioni</a>]";

$l['pstats_setting_12_value'] = 'M-d, h:i';

// setting 13
$l['pstats_setting_13_title'] = 'Dati e ora parte variabile';
$l['pstats_setting_13_description'] = "Una parte del formato di data e ora che deve essere sostituito con \"Leri\" or \"Oggi\".";

$l['pstats_setting_13_value'] = 'm-d';

// setting 14
$l['pstats_setting_14_title'] = 'Blocco di messaggi';
$l['pstats_setting_14_description'] = 'Questo e un blocco nella parte superiore/inferiore della tabella ProStats in cui puoi inserire i tuoi contenuti HTML. Lascialo vuoto per nasconderlo.';

// setting 15
$l['pstats_setting_15_title'] = 'Posizione del blocco dei messaggi';
$l['pstats_setting_15_description'] = 'La posizione del blocco di messaggi nella tabella ProStats.';

$l['pstats_setting_15_option_1'] = 'Superiore';
$l['pstats_setting_15_option_2'] = 'Giu (predefinito)';

// setting 16
$l['pstats_setting_16_title'] = 'Mostra gli ultimi messaggi';
$l['pstats_setting_16_description'] = 'Mostra gli ultimi messaggi nella tabella ProStats.';

// setting 17
$l['pstats_setting_17_title'] = 'Mostra prefisso per gli ultimi messaggi';
$l['pstats_setting_17_description'] = 'Mostra prefissi in tema di post recenti (se ce ne sono).';

// setting 18
$l['pstats_setting_18_title'] = 'Statistiche degli ultimi messaggi';
$l['pstats_setting_18_description'] = "Che tipo di statistiche vuoi mostrare per gli ultimi post?<br />Le tue scelte sono: <strong>Latest_posts, Date, Starter, Last_sender, Forum</strong><br />Separali con una virgola (\",\").";
$l['pstats_setting_18_options_value'] = "Latest_posts, Date, Starter, Last_sender, Forum";

// setting 19
$l['pstats_setting_19_title'] = 'Posizione degli ultimi post';
$l['pstats_setting_19_description'] = 'La posizione del blocco degli ultimi post.';

$l['pstats_setting_19_option_1'] = 'Sinistra';
$l['pstats_setting_19_option_2'] = 'Destro';

// setting 20
$l['pstats_setting_20_title'] = 'Cella supplementare 1 (in alto a sinistra)';
$l['pstats_setting_20_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:-28px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 21
$l['pstats_setting_21_title'] = 'Cella supplementare 2 (in basso a sinistra)';
$l['pstats_setting_21_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:-28px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 22
$l['pstats_setting_22_title'] = 'Cella supplementare 3 (Cima-Medio)';
$l['pstats_setting_22_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:-14px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 23
$l['pstats_setting_23_title'] = 'Cella supplementare 4 (Parte inferiore-Medio)';
$l['pstats_setting_23_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:-14px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 24
$l['pstats_setting_24_title'] = 'Cella supplementare 5 (Superiore-Destro)';
$l['pstats_setting_24_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:0px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 25
$l['pstats_setting_25_title'] = 'Cella supplementare 6 (Parte inferiore-Destro)';
$l['pstats_setting_25_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:0px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 26
$l['pstats_setting_26_title'] = 'Attiva il feed XML';
$l['pstats_setting_26_description'] = "Emetti le statistiche in formato XML da mostrare su altri siti web. [<a href=\"http://community.mybb.com/thread-48686.html\" target=\"_blank\">Maggiori informazioni</a>]";

// setting 27
$l['pstats_setting_27_title'] = 'Versione ProStats';
$l['pstats_setting_27_description'] = 'NON MODIFICARE QUESTA IMPOSTAZIONE';

// setting 28
$l['pstats_setting_28_title'] = 'Visualizzazione risposte ProStats';
$l['pstats_setting_28_description'] = 'Abilita o disabilita la visualizzazione del conteggio delle risposte.';

// cells switch
$l['pstats_switch_latest_posts'] = 'Latest_posts';
$l['pstats_switch_date'] = 'Date';
$l['pstats_switch_starter'] = 'Starter';
$l['pstats_switch_last_sender'] = 'Last_sender';
$l['pstats_switch_forum'] = 'Forum';

// setting 29
$l['pstats_setting_29_title'] = 'Posizione della tabella nell portale';
$l['pstats_setting_29_description'] = 'Posizione delle statistiche nelle pagina dell portale.';

$l['pstats_setting_29_option_1'] = 'Superiore (intestazione)';
$l['pstats_setting_7_option_2'] = 'In basso (pie di pagina)';
?>