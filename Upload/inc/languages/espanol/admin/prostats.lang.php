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
$l['pstats_PDesc'] = 'Estadisticas profesionales de MyBB. ';
$l['pstats_PWeb'] = 'http://prostats.wordpress.com';
$l['pstats_PAuth'] = '<a href="mailto:SaeedGhMail@Gmail.com">SaeedGh</a> y <a href="http://my-bb.ir">AliReza Tofighi</a> Actualizado por <a href="http://community.mybb.com/user-6029.html">vintagedadyo</a>';
$l['pstats_PAuthSite'] = '';
$l['pstats_PVer'] = '1.9.7.5';
$l['pstats_PGUID'] = '124b68d05dcdaf6b7971050baddf340f';
$l['pstats_PCompat'] = '18*';


$l['pstats_settings_link'] = '<!--(<a href="index.php?module=config&action=change&search=prostats" style="color:#FF1493;">Ajustes</a>)<br/>//-->';


//float_stats

$l['pstats_float_stats_instant_preview'] = 'Vista previa instantanea';


// extra_cells
$l['pstats_extra_cells_1'] = 'La mayoria de las respuestas';
$l['pstats_extra_cells_2'] = 'La mayoria de las reputaciones';
$l['pstats_extra_cells_3'] = 'Muchas gracias';
$l['pstats_extra_cells_4'] = 'Mas visto';
$l['pstats_extra_cells_5'] = 'Nuevos miembros';
$l['pstats_extra_cells_6'] = 'Mejores descargas';
$l['pstats_extra_cells_7'] = 'Mejores carteles';
$l['pstats_extra_cells_8'] = 'Los mejores referentes';
$l['pstats_extra_cells_9'] = 'Posters de hilo superior';

// setting group
$l['pstats_setting_group_title'] = 'ProStats';
$l['pstats_setting_group_description'] = 'Estadisticas profesionales de MyBB.';

// setting 1
$l['pstats_setting_1_title'] = 'Habilitar';
$l['pstats_setting_1_description'] = '¿Quieres habilitar el plugin?';

// setting 2
$l['pstats_setting_2_title'] = 'Mostrar en el indice';
$l['pstats_setting_2_description'] = 'Mostrar la tabla ProStats en la pagina de indice.';

// setting 3
$l['pstats_setting_3_title'] = 'Mostrar en el portal';
$l['pstats_setting_3_description'] = 'Mostrar la tabla ProStats en la pagina del portal.';

// setting 4
$l['pstats_setting_4_title'] = 'Activar etiqueta global';
$l['pstats_setting_4_description'] = 'Asi, puede editar temas e insertar &lt;ProStats &gt; Etiqueta donde quieras mostrar las estadisticas.';

// setting 5
$l['pstats_setting_5_title'] = 'Ocultar de los bots de busqueda';
$l['pstats_setting_5_description'] = "Con esta opcion puedes ocultar las estadisticas de todos los bots de busqueda que hayas definido en <strong><a href=\"index.php?module=config-spiders\" target=\"_blank\">Aranas/Bots</a></strong> pagina. Esto ahorrará ancho de banda y disminuira la carga del servidor.";

// setting 6
$l['pstats_setting_6_title'] = 'Lista de ignorados';
$l['pstats_setting_6_description'] = 'Los foros no se muestran en ProStats. Para seleccionar varios elementos, mantenga presionada la tecla Ctrl y haga clic en cada uno de los elementos. Para deseleccionar elementos, mantenga presionada la tecla Ctrl y haga clic en ellos.';

// setting 7
$l['pstats_setting_7_title'] = 'Posicion de la tabla en el indice';
$l['pstats_setting_7_description'] = 'Posicion de las estadisticas en las pagina de indice.';

$l['pstats_setting_7_option_1'] = 'Arriba (Encabezado)';
$l['pstats_setting_7_option_2'] = 'Parte inferior (pie de página)';

// setting 8
$l['pstats_setting_8_title'] = 'Nombres de usuario de estilo';
$l['pstats_setting_8_description'] = 'Estilo el nombre de usuario en color verdadero, fuente, etc.';

// setting 9
$l['pstats_setting_9_title'] = 'Sistema de resaltado';
$l['pstats_setting_9_description'] = "Resalte los hilos eliminados, los hilos no aprobados y los que se publican en los foros moderados por el usuario actual.<br />
 Esquema de colores: <span style=\"background-color:#E8DEFF;\">Eliminado</span>, <span style=\"background-color:#FFDDE0;\">No aprobado</span>, <span style=\"background-color:#FFFE92;\">En zona de moderación</span>, <span style=\"background-color:#FFDA91;\">Zona no aprobada y en moderacion</span> ";

// setting 10
$l['pstats_setting_10_title'] = 'Longitud del tema';
$l['pstats_setting_10_description'] = 'Longitud maxima del tema / post temas. (Entrada 0 para eliminar la limitacion)';

// setting 11
$l['pstats_setting_11_title'] = 'Numero de filas';
$l['pstats_setting_11_description'] = "¿Cuantos articulos se deben mostrar? Ingrese un <strong style=\"color:red;\">impar</strong> numero mayor o igual a 3.";

// setting 12
$l['pstats_setting_12_title'] = 'Formato de fecha y hora';
$l['pstats_setting_12_description'] = "El formato de Fecha y Hora que se usaria en las estadisticas. [<a href=\"http://php.net/manual/en/function.date.php\" target=\"_blank\">Mas informacion</a>]";

$l['pstats_setting_12_value'] = 'M-d, h:i';

// setting 13
$l['pstats_setting_13_title'] = 'Parte variable de fecha y hora';
$l['pstats_setting_13_description'] = "Una parte del formato de fecha y hora que debe reemplazarse con \"Ayer\" or \"Hoy\".";

$l['pstats_setting_13_value'] = 'm-d';

// setting 14
$l['pstats_setting_14_title'] = 'Bloque de mensajes';
$l['pstats_setting_14_description'] = 'Este es un bloque en la parte superior/inferior de la tabla de ProStats en el que puede colocar su contenido HTML. Dejalo vacio para ocultarlo.';

// setting 15
$l['pstats_setting_15_title'] = 'Posicion del bloque de mensaje';
$l['pstats_setting_15_description'] = 'La posicion del bloque de mensajes en la tabla ProStats.';

$l['pstats_setting_15_option_1'] = 'Parte superior';
$l['pstats_setting_15_option_2'] = 'Abajo (predeterminado)';

// setting 16
$l['pstats_setting_16_title'] = 'Mostrar los ultimos mensajes';
$l['pstats_setting_16_description'] = 'Mostrar las ultimas publicaciones en la tabla ProStats.';

// setting 17
$l['pstats_setting_17_title'] = 'Mostrar prefijo para los ultimos mensajes';
$l['pstats_setting_17_description'] = 'Mostrar prefijos en el tema de las ultimas publicaciones (si hay alguna).';

// setting 18
$l['pstats_setting_18_title'] = 'Estadisticas de los ultimos mensajes';
$l['pstats_setting_18_description'] = "¿Que tipo de estadisticas quieres que se muestren para las ultimas publicaciones?<br />Sus opciones son: <strong>Latest_posts, Date, Starter, Last_sender, Forum</strong><br />Separalos por coma (\",\").";
$l['pstats_setting_18_options_value'] = "Latest_posts, Date, Starter, Last_sender, Forum";

// setting 19
$l['pstats_setting_19_title'] = 'Ultimos puestos de posicion';
$l['pstats_setting_19_description'] = 'La posicion del bloque Ultimos mensajes.';

$l['pstats_setting_19_option_1'] = 'Izquierda';
$l['pstats_setting_19_option_2'] = 'Derecha';

// setting 20
$l['pstats_setting_20_title'] = 'Celda extra 1 (arriba a la izquierda)';
$l['pstats_setting_20_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:-28px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 21
$l['pstats_setting_21_title'] = 'Celula extra 2 (abajo a la izquierda)';
$l['pstats_setting_21_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:-28px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 22
$l['pstats_setting_22_title'] = 'Celula extra 3 (superior-media)';
$l['pstats_setting_22_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:-14px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 23
$l['pstats_setting_23_title'] = 'Celula extra 4 (parte inferior central)';
$l['pstats_setting_23_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:-14px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 24
$l['pstats_setting_24_title'] = 'Celda extra 5 (arriba a la derecha)';
$l['pstats_setting_24_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:0px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 25
$l['pstats_setting_25_title'] = 'Celda extra 6 (abajo a la derecha)';
$l['pstats_setting_25_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:0px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 26
$l['pstats_setting_26_title'] = 'Activar el feed XML';
$l['pstats_setting_26_description'] = "Muestra las estadisticas en formato XML para mostrarlas en otros sitios web. [<a href=\"http://community.mybb.com/thread-48686.html\" target=\"_blank\">Mas informacion</a>]";

// setting 27
$l['pstats_setting_27_title'] = 'Version ProStats';
$l['pstats_setting_27_description'] = 'NO MODIFICAR ESTE AJUSTE';

// setting 28
$l['pstats_setting_28_title'] = 'ProStats Replies Display';
$l['pstats_setting_28_description'] = 'Esto habilita o inhabilita la visualizacion del conteo de respuestas.';

// cells switch 
$l['pstats_switch_latest_posts'] = 'Latest_posts';
$l['pstats_switch_date'] = 'Date';
$l['pstats_switch_starter'] = 'Starter';
$l['pstats_switch_last_sender'] = 'Last_sender';
$l['pstats_switch_forum'] = 'Forum';

// setting 29
$l['pstats_setting_29_title'] = 'Posicion de la tabla en el portal';
$l['pstats_setting_29_description'] = 'Posicion de las estadisticas en las paginas de portal.';

$l['pstats_setting_29_option_1'] = 'Arriba (Encabezado)';
$l['pstats_setting_29_option_2'] = 'Parte inferior (pie de pagina)';

?>