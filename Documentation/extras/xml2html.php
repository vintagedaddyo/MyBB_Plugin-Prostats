<?php 

////////////////////////////////////////////////////////
/////////////// Settings & Customize area //////////////
////////////////////////////////////////////////////////

//Set target XML feed URL
$url = 'http://www.example.com/index.php?stats=xml';

//If "Google SEO" plugin is active, set it to 1 (Default is 0)
$googleseo = 0;

//Error message when target url is not accessible. You can leave it empty.
$error['url_notaccess'] = '<pre>ERROR: Feed address is not accessible!</pre>';

//Error message when given data is not ProStats XML. You can leave it empty.
$error['url_invalid'] = '<pre>An error occurred! This could be because of one of the following reasons:
- The target link is wrong
- The target Forum is closed
- ProStats plugin is inactive
- ProStats XML feed setting is off<pre>';

/*
Set last topics template using $xml and $record objects:

$xml
(
	//you can use these in both Parent template and Last topics template

	[bburl] (Buletin board url)
	[seo] (Buletin SEO state. '0'=Off '1'=On)
	
	
	//This is $record object that you can use it in the Last post template

	[record] (Holder data of a row)
	(
		[@attributes][num] (Num of the row)
		[tid] (Topic ID number)
		[fuid] (First poster ID number)
		[fid] (Forum ID number)
		[bulb] (Light bulb state. 'on'=unread 'off'=read)
		[lasttime] (The unix time stamp of last post)
		[datetime] (Formatted date and/or time considering target forum settings)
		[subject] (Short subject of topic)
		[longsubject] (Subject of topic)
		[uname] (First poster user name)
		[uname2] (First poster formatted user name considering target forum settings)
		[luid] (Last poster ID number)
		[luname] (Last poster user name)
		[luname2] (Last poster user name considering target forum settings)
		[fname] (Forum short name)
		[ffullname] (Forum compelete name)
	)
)

Some examples and their results:

{$xml->bburl} In the Parent template will output: http://www.example.com
{$xml->bburl} In the Last topics template will output: http://www.example.com
{$record->uname2} In the Parent template will output Nothing! (you can't use $record object in the Parent template)
{$record->uname2} In Last topics template will output: <font color="green">Admin</span>

*/


/*
Parent template that contain Last topics
Extra pre defined:

{$lasttopics} (All given last topics)
*/
$parent_template = '<div>{$record->uname2}{$lasttopics}</div> ';


/*
Last topics template
Extra pre defined:

{$threadlink} (Thread link)
{$forumlink} (Forum link)
{$firstposter_profilelink} (First poster profile link)
{$lastposter_profilelink} (Last poster profile link)
*/
$lasttopics_template = '
<div>
	<a href="{$threadlink}">{$record->subject}</a>
	- {$record->datetime}
	- Started by <a href="{$firstposter_profilelink}">{$record->uname2}</a>
	- Last post by <a href="{$lastposter_profilelink}">{$record->luname2}</a>
</div>
';

////////////////////////////////////////////////////////
////////////////////////////////////////////////////////
////////////////////////////////////////////////////////


$remote_xml = my_fetch_remote_file($url);

if(!$remote_xml)
{
	die($error['url_notaccess']);
}

@$xml = simplexml_load_string($remote_xml);

if(@!$xml->record)
{
	die($error['url_invalid']);
}

$output = '';
$i = 0;

foreach ($xml->record as $record)
{
	if (intval($googleseo) == 1)
	{
		$threadlink = $xml->bburl.'/Thread-'.space2dash($record->longsubject).'?action=lastpost';
		$forumlink = $xml->bburl.'/Forum-'.space2dash($record->ffullname);
		$firstposter_profilelink = $xml->bburl.'/User-'.$record->uname;
		$lastposter_profilelink = $xml->bburl.'/User-'.$record->luname;
	}
	else if (intval($xml->seo) == 1)
	{
		$threadlink = $xml->bburl.'/thread-'.$record->tid.'-lastpost.html';
		$forumlink = $xml->bburl.'/forum-'.$record->fid.'.html';
		$firstposter_profilelink = $xml->bburl.'/user-'.$record->fuid.'.html';
		$lastposter_profilelink = $xml->bburl.'/user-'.$record->luid.'.html';
	}
	else
	{
		$threadlink = $xml->bburl.'/showthread.php?tid='.$record->tid.'&action=lastpost';
		$forumlink = $xml->bburl.'/forumdisplay.php?fid='.$record->fid;
		$firstposter_profilelink = $xml->bburl.'/member.php?action=profile&uid='.$record->fuid;
		$lastposter_profilelink = $xml->bburl.'/member.php?action=profile&uid='.$record->luid;
	}
	
	eval("\$lasttopics .= \"".addslashes($lasttopics_template)."\";");
	
	++$i;
}

$record = '';

eval("\$output .= \"".addslashes($parent_template)."\";");

echo $output;



/**
 * Fetch the contents of a remote fle.
 *
 * @param string The URL of the remote file
 * @return string The remote file contents.
 */
function my_fetch_remote_file($url)
{
	if(function_exists("curl_init"))
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
 	else if(function_exists("fsockopen"))
	{
		$url = @parse_url($url);
		if(!$url['host'])
		{
			return false;
		}
		if(!$url['port'])
		{
			$url['port'] = 80;
		}
		if(!$url['path'])
		{
			$url['path'] = "/";
		}
		if($url['query'])
		{
			$url['path'] .= "?{$url['query']}";
		}
		$fp = @fsockopen($url['host'], $url['port'], $error_no, $error, 10);
		@stream_set_timeout($fp, 10);
		if(!$fp)
		{
			return false;
		}
		$headers = array();

		$headers[] = "GET {$url['path']} HTTP/1.0";
		$headers[] = "Host: {$url['host']}";
		$headers[] = "Connection: Close";
		$headers[] = "\r\n";
		
		$headers = implode("\r\n", $headers);	
		if(!@fwrite($fp, $headers))
		{
			return false;
		}
		while(!feof($fp))
		{
			$data .= fgets($fp, 12800);
		}
		fclose($fp);
		$data = explode("\r\n\r\n", $data, 2);
		return $data[1];
	}
}

/**
 * Replace spaces with dash.
 *
 * @param string The string.
 * @return string The replaced string.
 */
function space2dash($string='')
{
	return str_replace(' ', '-', $string);
}

?>