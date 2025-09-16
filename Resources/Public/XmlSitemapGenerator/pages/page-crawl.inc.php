<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$FtnrG23204090FWMEJ=510696906;$kYlHj54189342tSApl=253169878;$ArOLD39387729SScWo=505681545;$hHzzj87471494DPnYM=536455211;$mLVmQ46188202kruBs=229913445;$bepGW45871822EjUsF=70892995;$QoVaz22557272qdoHW=889112363;$lWFeH29531924vioFl=951379627;$VKsVB21170074QBbxK=666055691;$ylqNZ96689703MOPLI=622418167;$QzknL79779473ThERH=689652013;$znlvT95823046eNsEU=151564326;$DWLfk39179046DAxKl=516096178;$HFTMV15671791LfoTY=758033765;$JOlPT49857720lwkVX=160654017;$ikbIJ44660811dnvyv=13517330;$bxFlK72878902CYEAM=424150881;$DYpsE78003502SIwGb=973356918;$YUvhr87809507TgXJk=63015354;$safJe13648168oNCEb=797751138;$XcIVs50011798mIAsT=827490866;$KcaUt27255366mbZvx=664771316;$NVUyB82966846JpUNO=620376998;$RWmnZ95434024xPQsV=519067248;$zqdfF36150709RIQBa=917886899;$EmkRB59781124UKaJe=189575963;$OAHov22190521ptykS=974284772;$RTwhO39836958zYHTh=675870725;$OEhCw38636771IhOPI=190909564;$aSahc22211802Eesgm=821798986;$sfhAG44094617eFMiM=120462875;$zxzJg10226090frRNd=239356726;$eEjIC18628628uKlUo=25351840;$SmKIQ37134061YCllj=415226142;$GJOrj19954088jlMPu=587089662;$rrnQP88365934JequS=764183823;$WwEAH15324121BGQXe=374427949;$ImytL51016634iRyRQ=706803813;$ihObq99388382TPklN=261933875;$DPmxB63444782PQXrh=385505173;$nMOom48325202vitNu=830986843;$gIKXk87103026uylkN=769248157;$YfODN12887301dKKmT=236627404;$Ztceh74752212xfuGw=582701100;$AvOrc10381894vESqs=529974859;$bhYoo34746509Hfdop=54128640;$CKltb77275726RJwNk=803672089;$zmfmV46401310QXeGs=44375738;$rktdl31329173MuLgF=931124810;$plhrB98513183VOzFW=903077729;?><?php include teibqRLPh2.'page-top.inc.php'; $ZsXlJXVp1YdYHod = $_REQUEST['crawl']; if($_GET['act']=='interrupt'){ tRsLQ5oUyNb5(naDNgdhQWKEoBa,''); echo '<h2>The "stop" signal has been sent to a crawler.</h2><a href="index.'.$EJVz_oOyhql.'?op=crawl">Return to crawler page</a>'; }else if(file_exists($fn=TuLXmMBFSKj5mt.xG52MBct6dseMt)&&(time()-filemtime($fn)<10*60)){ $T5BFssWBn=true; $ZsXlJXVp1YdYHod = 1; } if($ZsXlJXVp1YdYHod){ if($T5BFssWBn) echo '<h4>Crawling already in progress.<br/>Last log access time: '.date('Y-m-d H:i:s',@filemtime($fn)).'<br><small><a href="index.'.$EJVz_oOyhql.'?op=crawl&act=interrupt">Click here</a> to interrupt it.</small></h4>'; else { echo '<h4>Please wait. Sitemap generation in progress...</h4>'; if($_POST['bg']) echo '<div class="block2head">Please note! The script will run in the background until completion, even if browser window is closed.</div>'; } ?>
																											<script type="text/javascript">
																											var lastupdate = 0;
																											var framegotsome = false;
																											function UVpFiOpoH()
																											{
																											var cd = new Date();
																											if(!lastupdate)return false;
																											var df = (cd - lastupdate)/1000;
																											<?php if($grab_parameters['xs_autoresume']){?>
																											var re = document.getElementById('rlog');
																											re.innerHTML = 'Auto-restart monitoring: '+ cd + ' (' + Math.round(df) + ' second(s) since last update)';
																											var ifr = document.getElementById('cproc');
																											var frfr = window.frames['clog'];
																											
																											var doresume = (df >= <?php echo intval($grab_parameters['xs_autoresume']);?>);
																											if(typeof frfr != 'undefined') {
																											if( (typeof frfr.pageLoadCompleted != 'undefined') &&
																											!frfr.pageLoadCompleted) 
																											{
																											
																											framegotsome = true;
																											doresume = false;
																											}
																											
																											if(!frfr.document.getElementById('glog')) {	
																											
																											}
																											}
																											if(doresume)
																											{
																											var rle = document.getElementById('runlog');
																											lastupdate = cd;
																											if(rle)
																											{
																											rle.style.display  = '';
																											rle.innerHTML = cd + ': resuming generator ('+Math.round(df)+' seconds with no response)<br />' + rle.innerHTML;
																											}
																											var lc = ifr.src;
																											lc = lc.replace(/resume=\d*/,'resume=1')
																											lc = lc.replace(/seed=\d*/,'seed='+Math.random())
																											
																											ifr.src = lc;
																											}
																											<?php } ?>
																											}
																											window.setInterval('UVpFiOpoH()', 1000);
																											</script>
																											<iframe id="cproc" name="clog" style="width:100%;height:300px;border:0px" frameborder=0 src="index.<?php echo $EJVz_oOyhql?>?op=crawlproc&bg=<?php echo $_REQUEST['bg']?>&resume=<?php echo $_REQUEST['resume']?>&seed=<?php echo rand(1E8,1E9);?>"></iframe>
																											<!--
																											<div id="rlog2" style="bottom:5px;position:fixed;width:100%;font-size:12px;background-color:#fff;z-index:2000;padding-top:5px;border-top:#999 1px dotted"></div>
																											-->
																											<div id="rlog" style="overflow:auto;"></div>
																											<div id="runlog" style="overflow:auto;height:100px;display:none;"></div>
																											<?php }else if(!$INmFvsAdD3rRS5bHW) { ?>
																											<div id="sidenote">
																											<?php include teibqRLPh2.'page-sitemap-detail.inc.php'; ?>
																											</div>
																											<div id="shifted">
																											<h2>Crawling</h2>
																											<form action="index.<?php echo $EJVz_oOyhql?>?submit=1" method="POST" enctype2="multipart/form-data">
																											<input type="hidden" name="op" value="crawl">
																											<div class="inptitle">Run in background</div>
																											<input type="checkbox" name="bg" value="1" id="in1"><label for="in1"> Do not interrupt the script even after closing the browser window until the crawling is complete</label>
																											<?php if(@file_exists(TuLXmMBFSKj5mt.Nivf2Dt1sV)){ if(@file_exists(TuLXmMBFSKj5mt.K4_KgxUWZs3RY8W) &&(filemtime(TuLXmMBFSKj5mt.K4_KgxUWZs3RY8W)>filemtime(TuLXmMBFSKj5mt.Nivf2Dt1sV)) ){ $kjPC0QROnpy = @qosXLA3o9B8rfQ4hiZq(Zx6LBsBDu(TuLXmMBFSKj5mt.K4_KgxUWZs3RY8W, true)); } if(!$kjPC0QROnpy){ $GgTdwek2adLV9c = @qosXLA3o9B8rfQ4hiZq(Zx6LBsBDu(TuLXmMBFSKj5mt.Nivf2Dt1sV, true)); $kjPC0QROnpy = $GgTdwek2adLV9c['progpar']; } ?>
																											<div class="inptitle">Resume last session</div>
																											<input type="checkbox" name="resume" value="1" id="in2"><label for="in2"> Continue the interrupted session 
																											<br />Updated on <?php  $plXwUjrYzC1dGwg = filemtime(TuLXmMBFSKj5mt.Nivf2Dt1sV); echo date('Y-m-d H:i:s',$plXwUjrYzC1dGwg); if(time()-$plXwUjrYzC1dGwg<600)echo ' ('.(time()-$plXwUjrYzC1dGwg).' seconds ago) '; ?>, 
																											<?php echo	'Time elapsed: '.xnuzCmCCV3S9VStg($kjPC0QROnpy[0]).',<br />Pages crawled: '.intval($kjPC0QROnpy[3]). ' ('.intval($kjPC0QROnpy[7]).' added in sitemap), '. 'Queued: '.$kjPC0QROnpy[2].', Depth level: '.$kjPC0QROnpy[5]. '<br />Current page: '.$kjPC0QROnpy[1].' ('.number_format($kjPC0QROnpy[10],1).')'; } ?>
																											</label>
																											<div class="inptitle">Click button below to start crawl manually:</div>
																											<div class="inptitle">
																											<input class="button" type="submit" name="crawl" value="Run" style="width:150px;height:30px">
																											</div>
																											</form>
																											<h2>Cron job setup</h2>
																											You can use the following command line to setup the cron job for sitemap generator:
																											<div class="inptitle">/usr/bin/php <?php echo dirname(dirname(__FILE__)).'/runcrawl.php'?></div>
																											<h2>Web Cron setup</h2>
																											If you cannot setup a regular cron task on your server, you can try a web cron instead:
																											<div class="inptitle"><?php 	echo $WaXVp05U6lf9QQ4kJ.'/index.php?op=crawlproc&resume=1'?></div>
																											</div>
																											<?php } include teibqRLPh2.'page-bottom.inc.php'; 



































































































