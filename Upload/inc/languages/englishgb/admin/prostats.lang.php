<?php
/*
 _______________________________________________________
|                                                       |
| Name: ProStats 1.9.7.3                               |
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
$l['pstats_PDesc'] = 'Professional stats for MyBB. ';
$l['pstats_PWeb'] = 'http://prostats.wordpress.com';
$l['pstats_PAuth'] = '<a href="mailto:SaeedGhMail@Gmail.com">SaeedGh</a> and <a href="http://my-bb.ir">AliReza Tofighi</a> updated by <a href="http://community.mybb.com/user-6029.html">vintagedadyo</a>';
$l['pstats_PAuthSite'] = '';
$l['pstats_PVer'] = '1.9.7.3';
$l['pstats_PGUID'] = '124b68d05dcdaf6b7971050baddf340f';
$l['pstats_PCompat'] = '18*';


$l['pstats_settings_link'] = '<!--(<a href="index.php?module=config&action=change&search=prostats" style="color:#FF1493;">Settings</a>)<br/>//-->';


//float_stats

$l['pstats_float_stats_instant_preview'] = 'Instant Preview';


// extra_cells
$l['pstats_extra_cells_1'] = 'Most replies';
$l['pstats_extra_cells_2'] = 'Most reputations';
$l['pstats_extra_cells_3'] = 'Most thanks';
$l['pstats_extra_cells_4'] = 'Most viewed';
$l['pstats_extra_cells_5'] = 'New members';
$l['pstats_extra_cells_6'] = 'Top downloads';
$l['pstats_extra_cells_7'] = 'Top posters';
$l['pstats_extra_cells_8'] = 'Top referrers';
$l['pstats_extra_cells_9'] = 'Top Thread Posters';

// setting group
$l['pstats_setting_group_title'] = 'ProStats';
$l['pstats_setting_group_description'] = 'Professional stats for MyBB.';

// setting 1
$l['pstats_setting_1_title'] = 'Enable';
$l['pstats_setting_1_description'] = 'Do you want to enable the plugin?';

// setting 2
$l['pstats_setting_2_title'] = 'Show on index';
$l['pstats_setting_2_description'] = 'Show the ProStats table on the index page.';

// setting 3
$l['pstats_setting_3_title'] = 'Show on portal';
$l['pstats_setting_3_description'] = 'Show the ProStats table on the portal page.';

// setting 4
$l['pstats_setting_4_title'] = 'Activate global tag';
$l['pstats_setting_4_description'] = 'So you can edit themes and insert &lt;ProStats&gt; tag wherever you want to show the stats.';

// setting 5
$l['pstats_setting_5_title'] = 'Hide from search bots';
$l['pstats_setting_5_description'] = "Using this option you can hide stats from all search bots you\'ve defined them in <strong><a href=\"index.php?module=config-spiders\" target=\"_blank\">Spiders/Bots</a></strong> page. This will save bandwidth and decrease server load.";

// setting 6
$l['pstats_setting_6_title'] = 'Ignore list';
$l['pstats_setting_6_description'] = 'Forums not to be shown on ProStats. To select multiple items hold down the Ctrl key, and click each of the items. To deselect items hold down the Ctrl key and click on them.';

// setting 7
$l['pstats_setting_7_title'] = 'Table position in index and portal';
$l['pstats_setting_7_description'] = 'Position of stats in index and portal pages.';

$l['pstats_setting_7_option_1'] = 'Top (Header)';
$l['pstats_setting_7_option_2'] = 'Bottom (Footer)';

// setting 8
$l['pstats_setting_8_title'] = 'Style usernames';
$l['pstats_setting_8_description'] = 'Style the username in true color, font, etc.';

// setting 9
$l['pstats_setting_9_title'] = 'Highlighting System';
$l['pstats_setting_9_description'] = "Highlight soft-deleted threads, unapproved threads, and threads which are posted in forums moderated by current user.<br />
 Color scheme: <span style=\"background-color:#E8DEFF;\">Deleted</span>, <span style=\"background-color:#FFDDE0;\">Unapproved</span>, <span style=\"background-color:#FFFE92;\">In moderation zone</span>, <span style=\"background-color:#FFDA91;\">Unapproved & In moderation zone</span> ";

// setting 10
$l['pstats_setting_10_title'] = 'Subject length';
$l['pstats_setting_10_description'] = 'Maximum length of topic/post subjects. (Input 0 to remove the limitation)';

// setting 11
$l['pstats_setting_11_title'] = 'Number of rows';
$l['pstats_setting_11_description'] = "How much items must be shown? Input an <strong style=\"color:red;\">odd</strong> number greater than or equal to 3.";

// setting 12
$l['pstats_setting_12_title'] = 'Date and Time format';
$l['pstats_setting_12_description'] = "The format of Date and Time which would be used in stats. [<a href=\"http://php.net/manual/en/function.date.php\" target=\"_blank\">More Information</a>]";

$l['pstats_setting_12_value'] = 'M-d, h:i';

// setting 13
$l['pstats_setting_13_title'] = 'Date and Time variable part';
$l['pstats_setting_13_description'] = "A part of Date and Time format that must be replaced with \"Yesterday\" or \"Today\".";

$l['pstats_setting_13_value'] = 'm-d';

// setting 14
$l['pstats_setting_14_title'] = 'Message block';
$l['pstats_setting_14_description'] = 'This is a block on top/bottom of the ProStats table that you can put your HTML contents in it. Leave it empty to hide it.';

// setting 15
$l['pstats_setting_15_title'] = 'Message block position';
$l['pstats_setting_15_description'] = 'The position of message block in the ProStats table.';

$l['pstats_setting_15_option_1'] = 'Top';
$l['pstats_setting_15_option_2'] = 'Down (Default)';

// setting 16
$l['pstats_setting_16_title'] = 'Show latest posts';
$l['pstats_setting_16_description'] = 'Show latest posts in the ProStats table.';

// setting 17
$l['pstats_setting_17_title'] = 'Show prefix for latest posts';
$l['pstats_setting_17_description'] = 'Show prefixes in subject of latest posts (if there are any).';

// setting 18
$l['pstats_setting_18_title'] = 'Stats of latest posts';
$l['pstats_setting_18_description'] = "What type of stats you want to be shown for latest posts?<br />Your choices are: <strong>Latest_posts, Date, Starter, Last_sender, Forum</strong><br />Separate them by comma (\",\").";
$l['pstats_setting_18_options_value'] = "Latest_posts, Date, Starter, Last_sender, Forum";

// setting 19
$l['pstats_setting_19_title'] = 'Latest posts position';
$l['pstats_setting_19_description'] = 'The position of the Latest posts block.';

$l['pstats_setting_19_option_1'] = 'Left';
$l['pstats_setting_19_option_2'] = 'Right';

// setting 20
$l['pstats_setting_20_title'] = 'Extra cell 1 (Top-Left)';
$l['pstats_setting_20_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:-28px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 21
$l['pstats_setting_21_title'] = 'Extra cell 2 (Bottom-Left)';
$l['pstats_setting_21_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:-28px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 22
$l['pstats_setting_22_title'] = 'Extra cell 3 (Top-Middle)';
$l['pstats_setting_22_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:-14px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 23
$l['pstats_setting_23_title'] = 'Extra cell 4 (Bottom-Middle)';
$l['pstats_setting_23_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:-14px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 24
$l['pstats_setting_24_title'] = 'Extra cell 5 (Top-Right)';
$l['pstats_setting_24_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-178px;margin-left:0px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 25
$l['pstats_setting_25_title'] = 'Extra cell 6 (Bottom-Right)';
$l['pstats_setting_25_description'] = "<div class=\"ec_div\"><img style=\"float:left;\" src=\"../images/prostats/ps_cells.gif\" /><img style=\"float:left;margin-top:-159px;margin-left:0px;\" src=\"../images/prostats/ps_cells.gif\" /></div>";

// setting 26
$l['pstats_setting_26_title'] = 'Activate XML feed';
$l['pstats_setting_26_description'] = "Output the stats in XML format to show on other websites. [<a href=\"http://community.mybb.com/thread-48686.html\" target=\"_blank\">More Information</a>]";

// setting 27
$l['pstats_setting_27_title'] = 'Check for updates';
$l['pstats_setting_27_description'] = "Turn this setting On and you\'ll be notified whenever a new version released. Notification will be shown above the ProStats\'s table and would be visible only to Admins.";

// setting 28
$l['pstats_setting_28_title'] = 'Surprise!';
$l['pstats_setting_28_description'] = 'This option may add a little fun to your forum sometimes! It would probably happen once or twice a year and only Admins can see the result.';

// setting 29
$l['pstats_setting_29_title'] = 'ProStats Version';
$l['pstats_setting_29_description'] = 'DO NOT MODIFY THIS SETTING';

// setting 30
$l['pstats_setting_30_title'] = 'ProStats Replies Display';
$l['pstats_setting_30_description'] = 'This enables or disables reply count display.';

// cells switch
$l['pstats_switch_latest_posts'] = 'Latest_posts';
$l['pstats_switch_date'] = 'Date';
$l['pstats_switch_starter'] = 'Starter';
$l['pstats_switch_last_sender'] = 'Last_sender';
$l['pstats_switch_forum'] = 'Forum';

?>