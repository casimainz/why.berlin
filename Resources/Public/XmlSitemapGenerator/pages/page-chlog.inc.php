<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$nNqZu12174894HrQEi=350735325;$gdlxN88289141VnDbA=262484085;$hYpxh10619656ViLXj=892486890;$VNiFs29145376yBCnn=183646930;$XCElL11887203ovxjZ=407285466;$ITfNR97627106ArooQ=288098080;$tEWPH27404963beFGI=551268772;$pjBui62162058eIIpz=462502050;$TTsqB56895596hOgWe=231317390;$aAFHD84747682skDlN=324737984;$cghBC57563730tmKLa=646371081;$Rsdow74881957RKbMK=830798809;$DogyU27811284jzzRi=540526606;$ykOZQ86174974JvjPL=620900262;$ifUmK85901352tcxXr=977328064;$gzlJx71825060MrLZV=118978843;$kVrTc67439833ytFky=373753455;$coTJO74728893zmFdj=246700241;$fjTGn54443065ilMkk=684128766;$XavcY38895422agwIb=675248321;$QiOCh48619435CbpcG=62883025;$mhvVc45992250lhylN=427507246;$UyKjF31432342yTBaX=524392197;$VekhO26983601svySu=326747089;$DAuXw42750906qifsY=774252969;$ymARy48002954fVTQu=435585836;$nekbr73991182qgWiu=41471202;$PVHZO83428920thfSJ=315567354;$CZZen36802581UhBOb=321789420;$CaALS24623364bNohk=191989692;$moDyq49027174FVmZY=670850987;$oLwGm15724818rAlJj=832807792;$fxRwt27431564zyMaV=428772444;$PhrKf55210520Uvxgc=445359033;$nJxJR18690699nnqTu=168839296;$sWuRj98217709XscSx=885509771;$NMgmG27334977MisEL=541511960;$hKHdz50220683hskqN=546400705;$SRqZn41984216igHVE=617145013;$iGRLw46976013IoacH=898148594;$ppbXe83161628pivXV=259204263;$BOrOR78300956benBZ=930808432;$olRAR74416065QBZqB=340871826;$kskax12642263kQeXO=663751244;$wiuBI19567318dAHFy=492820690;$iixbN60336827XGUEs=618488998;$EHXdC96363427ixjCm=764267766;$daWfn93058609eDSnt=604396153;$RKprA62626018GLRox=502257368;$BlBUq83660530FbspO=243081882;?><?php include teibqRLPh2.'page-top.inc.php'; $taQuUZ8AF = Da4nnYdI_(); if($grab_parameters['xs_chlogorder'] == 'desc') rsort($taQuUZ8AF); $et3ImjsCjAcqDEfe5=$_GET['log']; if($et3ImjsCjAcqDEfe5){ ?>
																													<div id="sidenote">
																													<div class="block1head">
																													Crawler logs
																													</div>
																													<div class="block1">
																													<?php for($i=0;$i<count($taQuUZ8AF);$i++){ $dxyqXsvpFM82 = SFyCqd1ndtCTQ($taQuUZ8AF[$i]); if($i+1==$et3ImjsCjAcqDEfe5)echo '<u>'; ?>
																													<a href="index.<?php echo $EJVz_oOyhql?>?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$dxyqXsvpFM82['time'])?></a>
																													( +<?php echo count($dxyqXsvpFM82['newurls'])?> -<?php echo count($dxyqXsvpFM82['losturls'])?>)
																													</u>
																													<br>
																													<?php	} ?>
																													</div>
																													</div>
																													<?php } ?>
																													<div<?php if($et3ImjsCjAcqDEfe5) echo ' id="shifted"';?> >
																													<h2>ChangeLog</h2>
																													<?php if($et3ImjsCjAcqDEfe5){ $dxyqXsvpFM82 = SFyCqd1ndtCTQ($taQuUZ8AF[$et3ImjsCjAcqDEfe5-1]); ?><h4><?php echo date('j F Y, H:i',$dxyqXsvpFM82['time'])?></h4>
																													<div class="inptitle">New URLs (<?php echo count($dxyqXsvpFM82['newurls'])?>)</div>
																													<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$dxyqXsvpFM82['newurls']))?></textarea>
																													<div class="inptitle">Removed URLs (<?php echo count($dxyqXsvpFM82['losturls'])?>)</div>
																													<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$dxyqXsvpFM82['losturls']))?></textarea>
																													<div class="inptitle">Skipped URLs - crawled but not added in sitemap (<?php echo count($dxyqXsvpFM82['urls_list_skipped'])?>)</div>
																													<textarea style="width:100%;height:300px"><?php foreach($dxyqXsvpFM82['urls_list_skipped'] as $k=>$v)echo @htmlspecialchars($k.' - '.$v)."\n";?></textarea>
																													<?php function RTmuVi9U11F($nl){ $lc = ''; $it = 0; if($nl) foreach($nl as $l=>$il){ $lc .= $l."\n"; foreach($il as $i=>$c){ $lc .= "\t".$i."\n"; $it++; } } return array($it,$lc); } ?>
																													<?php $ni = RTmuVi9U11F($dxyqXsvpFM82['newurls_i']); ?>
																													<div class="inptitle">New images (<?php echo $ni[0]?>)</div>
																													<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																													<?php $ni = RTmuVi9U11F($dxyqXsvpFM82['losturls_i']); ?>
																													<div class="inptitle">Removed images (<?php echo $ni[0]?>)</div>
																													<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																													<?php $ni = RTmuVi9U11F($dxyqXsvpFM82['newurls_v']); ?>
																													<div class="inptitle">New videos (<?php echo $ni[0]?>)</div>
																													<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																													<?php $ni = RTmuVi9U11F($dxyqXsvpFM82['losturls_v']); ?>
																													<div class="inptitle">Removed videos (<?php echo $ni[0]?>)</div>
																													<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars($ni[1])?></textarea>
																													<?php	 }else{ ?>
																													<table>
																													<tr class=block1head>
																													<th>No</th>
																													<th>Date/Time</th>
																													<th>Indexed pages</th>
																													<th>Processed pages</th>
																													<th>Skipped pages</th>
																													<th>Proc.time</th>
																													<th>Bandwidth</th>
																													<th>New URLs</th>
																													<th>Removed URLs</th>
																													<th>Broken links</th>
																													<?php if($grab_parameters['xs_imginfo'])echo '<th>Images</th>';?>
																													<?php if($grab_parameters['xs_videoinfo'])echo '<th>Videos</th>';?>
																													<?php if($grab_parameters['xs_newsinfo'])echo '<th>News</th>';?>
																													<?php if($grab_parameters['xs_rssinfo'])echo '<th>RSS</th>';?>
																													</tr>
																													<?php  $TrFAgxpi9mVbENrkkwT=array(); for($i=0;$i<count($taQuUZ8AF);$i++){ $dxyqXsvpFM82 = SFyCqd1ndtCTQ($taQuUZ8AF[$i]); if(!$dxyqXsvpFM82)continue; foreach($dxyqXsvpFM82 as $k=>$v)if(!is_array($v))$TrFAgxpi9mVbENrkkwT[$k]+=intval($v);else $TrFAgxpi9mVbENrkkwT[$k]+=count($v); ?>
																													<tr class=block1>
																													<td><?php echo $i+1?></td>
																													<td><a href="index.php?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$dxyqXsvpFM82['time'])?></a></td>
																													<td><?php echo number_format($dxyqXsvpFM82['ucount'])?></td>
																													<td><?php echo number_format($dxyqXsvpFM82['crcount'])?></td>
																													<td><?php echo count($dxyqXsvpFM82['urls_list_skipped'])?></td>
																													<td><?php echo number_format($dxyqXsvpFM82['ctime'],2)?>s</td>
																													<td><?php echo number_format($dxyqXsvpFM82['tsize']/1024/1024,2)?></td>
																													<td><?php echo count($dxyqXsvpFM82['newurls'])?></td>
																													<td><?php echo count($dxyqXsvpFM82['losturls'])?></td>
																													<td><?php echo count($dxyqXsvpFM82['u404'])?></td>
																													<?php if($grab_parameters['xs_imginfo'])echo '<td>'.$dxyqXsvpFM82['images_no'].'</td>';?>
																													<?php if($grab_parameters['xs_videoinfo'])echo '<td>'.$dxyqXsvpFM82['videos_no'].'</td>';?>
																													<?php if($grab_parameters['xs_newsinfo'])echo '<td>'.$dxyqXsvpFM82['news_no'].'</td>';?>
																													<?php if($grab_parameters['xs_rssinfo'])echo '<td>'.$dxyqXsvpFM82['rss_no'].'</td>';?>
																													</tr>
																													<?php }?>
																													<tr class=block1>
																													<th colspan=2>Total</th>
																													<th><?php echo number_format($TrFAgxpi9mVbENrkkwT['ucount'])?></th>
																													<th><?php echo number_format($TrFAgxpi9mVbENrkkwT['crcount'])?></th>
																													<th>-</th>
																													<th><?php echo number_format($TrFAgxpi9mVbENrkkwT['ctime'],2)?>s</th>
																													<th><?php echo number_format($TrFAgxpi9mVbENrkkwT['tsize']/1024/1024,2)?> Mb</th>
																													<th><?php echo ($TrFAgxpi9mVbENrkkwT['newurls'])?></th>
																													<th><?php echo ($TrFAgxpi9mVbENrkkwT['losturls'])?></th>
																													<th>-</th>
																													<?php if($grab_parameters['xs_imginfo'])echo '<th></th>';?>
																													<?php if($grab_parameters['xs_videoinfo'])echo '<th></th>';?>
																													<?php if($grab_parameters['xs_newsinfo'])echo '<th></th>';?>
																													<?php if($grab_parameters['xs_rssinfo'])echo '<th></th>';?>
																													</tr>
																													</table>
																													<?php } ?>
																													</div>
																													<?php include teibqRLPh2.'page-bottom.inc.php'; 



































































































