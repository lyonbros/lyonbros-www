<?
function is_mobile()
	{
		$useragent=$_SERVER['HTTP_USER_AGENT'];
		
		if(preg_match('/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
		{
			return true;
		}
		return false;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Lyon Bros. &lt;3 u!</title>
		
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		

		<link rel="stylesheet" href="rain.css" type="text/css" />
		<link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
		
		<script type="text/javascript" src="mootools-1.2.4-core.js"></script>
		<script type="text/javascript" src="mootools-1.2.4.4-more.js"></script>
		<script type="text/javascript" src="main.js"></script>
		<script type="text/javascript" src="rain.js"></script>
		<? if (is_mobile()) { ?>
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
			<style type="text/css">
				img.logo { width: 180px; height: 152px; float: none; display: block; margin: 15px auto 30px auto; }
				#main { float: left;  border-left: 0px none transparent; margin-top: 0px; padding: 0px; max-width: auto; width: auto; padding: 10px; font-size: 1.1em; line-height: 1.5em; background: url(/images/template/content.png); }
				#main h2 { display: none;  }
			</style>
			<script type="text/javascript">
				var rain_amount = .2;
			</script>
		<? } ?>
	</head>
	<body>
		<div id="rain"></div>
		<div id="everything">
			<img src="/images/template/logo.png" class="logo" alt="Lyon Bros. Logo"/>
			
			<div id="main">
				<h2>Oh, hello.</h2>
				<p>
					Welcome to Internet Home Page of Lyon Bros. We are the best
					web and mobile application developers. Ever. In the
					universe.
				</p>
				<ul class="listing">
					<li>
						<a href="https://turtl.it" target="_blank">
							<img src="/images/projects/turtl.png" width="530" height="371" alt="turtl">
							<h3>
								Turtl
								<small>Track playlists, wishlists, bookmarks, and everything inbetween. All private.</small>
							</h3>
						</a>
					</li>
					<li>
						<a href="http://flagger.io/" target="_blank">
							<img src="/images/projects/flagger.png" width="530" height="371" alt="flagger">
							<h3>
								Flagger
								<small>Fight for free speech by using your browser as a tool to troll the NSA.</small>
							</h3>
						</a>
					</li>
					<li>
						<a href="http://musio.com" target="_blank">
							<img src="/images/projects/musio.png" width="530" height="371" alt="musio">
							<h3>
								Musio
								<small>Publishing and promotional tools for independent musicians</small>
							</h3>
						</a>
					</li>
				</ul>

				<small class="bottom">
					Github &nbsp;|&nbsp;
					<a href="https://github.com/lyonbros" target="_blank">Lyon Bros.</a> &nbsp;|&nbsp;
					<a href="https://github.com/turtl" target="_blank">Turtl</a> &nbsp;|&nbsp;
					<a href="https://github.com/rubbingalcoholic" target="_blank">Jeff</a> &nbsp;|&nbsp;
					<a href="https://github.com/orthecreedence" target="_blank">Andrew</a>
				</small>
				<small class="bottom">
					Blog &nbsp;|&nbsp;
					<a href="http://blog.rubbingalcoholic.com/" target="_blank">Jeff</a> &nbsp;|&nbsp;
					<a href="http://blog.killtheradio.net" target="_blank">Andrew</a>
				</small>
				<small class="bottom">
					Twitter &nbsp;|&nbsp;
					<a href="https://twitter.com/turtlapp" target="_blank">Turtl</a> &nbsp;|&nbsp;
					<a href="https://twitter.com/FlaggerApp" target="_blank">Flagger</a> &nbsp;|&nbsp;
					<a href="https://twitter.com/rubbingalcohol" target="_blank">Jeff</a> &nbsp;|&nbsp;
					<a href="https://twitter.com/killltheradio" target="_blank">Andrew</a>
				</small>
			</div>
		</div>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.rubbingalcoholic.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 6]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.rubbingalcoholic.com/piwik.php?idsite=6" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->


	</body>
</html>
