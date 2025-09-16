<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$ugDnL35449807bfgMR=139248079;$ICHoR94833970BSazx=290713983;$ARJEK50401235JIWGM=937172337;$fOTih76557284DQmkD=66555945;$ZhePp21057579jyfQz=834512251;$TJYvO85637764ZuHlM=119491813;$iHWux62703212nRHup=947518515;$yHLKl10260902EnXaE=808619968;$mihwZ57879901bgbkQ=7250178;$nrira70743216brsCm=780598425;$pktTe64926682ucGLp=989967761;$qFSwa21781543WDOuk=387371305;$naANO25184487OVNRY=900921632;$lQMMn55655994McKhP=112424429;$UGxPB69492816rGXxG=268982928;$CMKvw96088065gXtoQ=833824231;$HVkaO15244772QSZmn=432783334;$pIphC64646274OLbgn=947261737;$VpjHR80944749FcSTE=597184066;$pvJim22987284HUJXz=611318935;$WQtsG25503741YvpBQ=941336993;$GvVJW97609348Kbvda=572781245;$TxISO71286399LiOgU=624129925;$oFgtw21475205rHORD=654989690;$GWZWX33345290aXGHr=469409286;$SUCNZ21616102qiIGW=915257076;$eMYXE40186288gZbuN=253935357;$tMjZE27714413NfjtW=191836096;$rMeix85835959bOkAX=691074413;$AWZxr59323285PlyNS=618499138;$QJLrE97315724pBNzs=963530100;$CMuff80769459pGNNB=161567587;$pEOrT33575515hHFpe=324040013;$yXLJL46470104ncchD=238979592;$YtXSw95144720pLuGc=650793800;$Rtmes93053647VfqRb=13531744;$uoNKY76890392lUCGB=90583512;$qKmEL78178424scxud=935522755;$sZtlH57277591DVqzY=386875174;$PByzy37953454UCspk=747623448;$tMxok76355678RzXaP=324874177;$xxckN29364519Rxyfb=104060763;$nMwCs55749792tkSTE=44892501;$TszUC68113315mWOvF=139358336;$cIElg63471952lHauW=150296658;$CLutw75812493zJYkG=438937979;$QpFRb15848576BbBqL=485940287;$hxxuF89603393agvPn=224877076;$aNhnE62012909tSTZH=965747057;$XRgVv55494805jQsbJ=311889835;?><?php class SiteCrawler { var $oVuCHr0sTvvxGkVf0B4 = false; var $nNXg3_3MIwATs1LLnl = array(); var $G7Jm5TuIwXGvGAP27 = array(); var $ybU_ViMnsXh = array(); var $x_VjCgpZmBejipM4ua = false; var $Zn4fHyrSKXDE3zeaGh = false; var $jIwT91h33RI = array(); var $j4ByT3Fb2qnFm = array(); var $rpf0hMm3s5B1 = ''; var $hBIB0xhM6G1f6PFlnM = ''; var $SnDzWJ__zP = ''; var $EmYP4RQZ5sVlUA02 = ''; var $OmbLdr2sYjfqzsvQLkF = ''; var $DOLUEjG8B6UnIbR = ''; var $uh81KZzIMaY = ''; var $Ow3RUgFV2JFc = ''; var $bkFhNzhUv9opP4 = ''; var $P544ar4HSneEHQkym = ''; var $v6EDx10Q4VaXJj = 0; var $f0SvwzVrPSVgca5fQ = 0; var $ctime = 0; var $pl = 0; var $mu = 0; var $pn = 0; var $cnu = 0; var $url_ind = 0; var $tsize = 0; var $links_level = 0; var $yyEzaq75nN3xOkxB5Z = 0; var $nettime = 0; var $sg8UdHG3wDnMA = 0; var $fetch_no = 0; var $daaWRxYVS_S06OhNUzc = 0; var $eCdiJHpPdpI9a9x = array(); var $sm_sessions = array(); var $kPX6zCJppRB8P1lE = array(); var $progpar = array(); var $XSuqiSdLVXjYxmyeBz7 = array(); function J1aZ1U_EhNDVvG($KqoMpJ5Gue7K = false, $dmM2HBteQ7 = false) { global $hZXDegwPns, $grab_parameters, $STOFDIS0uk, $m8, $NN7qjJXDtlroH6AUI; $WEiHACSW1BCJnptPEAz=explode(" ",microtime()); $this->ctime = $WEiHACSW1BCJnptPEAz[0]+$WEiHACSW1BCJnptPEAz[1] - $this->daaWRxYVS_S06OhNUzc; $_ut = ($this->ctime - $hZXDegwPns > 5); if( $_ut || $dmM2HBteQ7 || ( (  (($this->cnu==$this->url_ind) || ($this->pl==0) || ($this->pn==1) || ($this->pn%$grab_parameters['xs_progupdate'])==0) ||  ($this->v6EDx10Q4VaXJj>=$this->f0SvwzVrPSVgca5fQ)  ) && ($this->pn != $this->kPX6zCJppRB8P1lE['pn']) && !$KqoMpJ5Gue7K ) ) { $this->kPX6zCJppRB8P1lE['pn'] = $this->pn; $hZXDegwPns = $this->ctime; $this->mu = function_exists('memory_get_usage') ? memory_get_usage() : '-'; $STOFDIS0uk = max($STOFDIS0uk, $this->mu); if($this->mu>$m8+1000000){ $m8 = $this->mu; $cc = ' style="color:red"'; }else  $cc=''; if(intval($this->mu)) $this->mu = number_format($this->mu/1024,1).' Kb'; Y1qFyrFH0Wg53("\n(<span".$cc.">memory".($cc?' up':'').": $this->mu</span>)<br>\n"); $this->progpar = array( $this->ctime, // 0. running time 
																									 str_replace($this->P544ar4HSneEHQkym, '', $this->DOLUEjG8B6UnIbR),  // 1. current URL 
																									 $this->pl,                    // 2. urls left 
																									 $this->pn,                    // 3. processed urls 
																									 $this->tsize,                 // 4. bandwidth usage 
																									 $this->links_level,           // 5. depth level 
																									 $this->mu,                    // 6. memory usage 
																									 $this->v6EDx10Q4VaXJj, // 7. added in sitemap 
																									 $this->yyEzaq75nN3xOkxB5Z,     // 8. in the queue 
																									 $this->nettime,	// 9. network time 
																									 $this->sg8UdHG3wDnMA, // 10. last net time 
																									 $this->fetch_no, // 11. fetched urls 
																									 $this->eCdiJHpPdpI9a9x // 12. number of added images/videos/etc 
																									 ); $thbYEMtAtZf = count($this->sm_sessions)-1; if(!$this->sm_sessions[$thbYEMtAtZf]['progress_start']){ $this->sm_sessions[$thbYEMtAtZf]['progress_start'] = $this->progpar; } $this->sm_sessions[$thbYEMtAtZf]['progress_end'] = $this->progpar; if($this->ybU_ViMnsXh['bgexec']){ if(((time()-$NN7qjJXDtlroH6AUI)>GTbIezugf4NKv1('xs_state_interval',5)) || $dmM2HBteQ7){ $NN7qjJXDtlroH6AUI = time(); $this->progpar[] = NpJgovXJ0kAS(); if($KqoMpJ5Gue7K){ $this->progpar[] = $KqoMpJ5Gue7K; } tRsLQ5oUyNb5(xG52MBct6dseMt,AEks4EOfaorM1XL($this->progpar)); } } if($this->oVuCHr0sTvvxGkVf0B4 && (!$this->G7Jm5TuIwXGvGAP27['f'] || $_ut)) { call_user_func($this->oVuCHr0sTvvxGkVf0B4,$this->progpar); } } else { call_user_func($this->oVuCHr0sTvvxGkVf0B4,array('cmd'=>'ping', 'bg' => $this->ybU_ViMnsXh['bgexec'])); } return $this->progpar; } function WgybUT5kJ1d($MoKlUqiQ_Gl5lBJ3){ return strstr($MoKlUqiQ_Gl5lBJ3,'text/html') || strstr($MoKlUqiQ_Gl5lBJ3,'/xhtml'); } function y43YmKEIbMB_($nm, $cn){ preg_match('#<input[^>]*name="'.$nm.'"[^>]*value="(.*?)"#is', $cn, $_inpm); return $_inpm[1]; } function uVXuIROgIY6OtzA($cn, $dp){ global $grab_parameters,$BMbehimV7yzhTAnB; $HKItJXfv2IpkFWKN = array(); Y1qFyrFH0Wg53("\n*** Parse JS - ".$this->DOLUEjG8B6UnIbR.", ($dp)\n", 2); if(strstr($cn, '__VIEWSTATE')){ preg_match_all('#<form[^>]*action="([^>]*?)".*?</form>#is', $cn, $_vsm); foreach($_vsm[0] as $i=>$_vm) { if(!preg_match('#<input[^>]*?"__VIEWSTATE"#is', $_vm)) continue; $_action = $_vsm[1][$i]; $FZhCnLBSDRN5 = $this->cNb13B8Lppddrz($_action, $this->DOLUEjG8B6UnIbR); if($FZhCnLBSDRN5 == 1) continue; $_fex2 = $this->c3kFmC6dF($_action); if($_fex2['f'])continue; $JGCgyfM90KMFJ6q = array('__VIEWSTATE','__VIEWSTATEGENERATOR','__EVENTVALIDATION'); $ag_FFGD0_gAg2 = array(); foreach($JGCgyfM90KMFJ6q as $p) $ag_FFGD0_gAg2[$p] = $this->y43YmKEIbMB_($p, $_vm); preg_match_all('#__doPostBack(\(.*?\))#is', $_vm, $_dpball); $tAY21G84UZ6z = array(); foreach($_dpball[1] as $_dpb) { $_dpb = stripslashes(str_replace('&#39;',"'",$_dpb)); if(preg_match('#\'(.*?)\'(?:\s*\,\'(.*?)\')?#', $_dpb, $_a)){ $RJqvCiiBlb9biCay = $_action .' -> '. $_a[1]. '/'. $_a[2]; if($this->XSuqiSdLVXjYxmyeBz7[$RJqvCiiBlb9biCay]++) continue; $_fex2 = $this->c3kFmC6dF($_a[1]); if(!$_fex2['f'] ) $tAY21G84UZ6z[] = array($_a,$RJqvCiiBlb9biCay); } } foreach($tAY21G84UZ6z as $jp){ $_a = $jp[0]; $RJqvCiiBlb9biCay = $jp[1]; $ybU_ViMnsXh = $ag_FFGD0_gAg2; $ybU_ViMnsXh['__EVENTTARGET'] = $_a[1]; $ybU_ViMnsXh['__EVENTARGUMENT'] = $_a[2]; $QlDIrjacod6EI = $BMbehimV7yzhTAnB->fetch($_action, 0, false, false,  http_build_query($ybU_ViMnsXh,'','&'), array('contenttype'=>'application/x-www-form-urlencoded')); $this->J1aZ1U_EhNDVvG(); Y1qFyrFH0Wg53("\n(js post $dp) $RJqvCiiBlb9biCay\nlast - ".$QlDIrjacod6EI['last_url'] ); if(($_action != $QlDIrjacod6EI['last_url'])){ $HKItJXfv2IpkFWKN[] = $QlDIrjacod6EI['last_url']; }else { $HKItJXfv2IpkFWKN = array_merge($HKItJXfv2IpkFWKN, $this->S0edEnGQ3vY2Z($QlDIrjacod6EI['content'], $dp+1)); } Y1qFyrFH0Wg53("\n>> llist ".count($HKItJXfv2IpkFWKN).", ".$HKItJXfv2IpkFWKN[0]."\n"); } } } return $HKItJXfv2IpkFWKN; } function S0edEnGQ3vY2Z(&$cn, $dp = 0, $orrD38h_h = 5){ global $grab_parameters,$BMbehimV7yzhTAnB; Y1qFyrFH0Wg53("\n* Parse HTML - ".$this->DOLUEjG8B6UnIbR.", ($dp/$orrD38h_h) [".strlen($cn)."]\n", 2); if($dp > $orrD38h_h)return array(); if(preg_match_all('#<(?:div|span)\s[^>]*?(?:data-|\s)src\s*=\s*["\']([^>]*?)("|\')#is', $cn, $F0EyJRCOlHiY76R7QoL)) { foreach($F0EyJRCOlHiY76R7QoL[1] as $i=>$Ruf7CxjDDxD3fd0Ow) { $FZhCnLBSDRN5 = $this->cNb13B8Lppddrz($Ruf7CxjDDxD3fd0Ow, $this->DOLUEjG8B6UnIbR); if($FZhCnLBSDRN5 == 1) continue; $_fex2 = $this->c3kFmC6dF($Ruf7CxjDDxD3fd0Ow); if($_fex2['f'])continue; $dAtjF96pVyo = $BMbehimV7yzhTAnB->fetch($Ruf7CxjDDxD3fd0Ow, 0, false, false); if($this->WgybUT5kJ1d($dAtjF96pVyo['headers']['content-type'])){ $w2NcFnqWndI5uur4n9 = $F0EyJRCOlHiY76R7QoL[0][$i]; $fPFHSfAQq71RkmX4 = strpos($cn, $w2NcFnqWndI5uur4n9); if ($fPFHSfAQq71RkmX4 !== false) { $cn = substr_replace($cn, $dAtjF96pVyo['content'], $fPFHSfAQq71RkmX4, strlen($w2NcFnqWndI5uur4n9)); } } } } $WfTLI8VErD9bfq = $grab_parameters['xs_utf8_enc'] ? 'isu':'is'; $_t = 'a|area|go'; $_t .= '|link'; preg_match_all('#<(?:'.$_t.')(?:[^>]*?\s)href\s*=\s*(?:"([^"]*)|\'([^\']*)|([^\s\"\\\\>]+))[^>]*>#is'.$WfTLI8VErD9bfq, $cn, $am); preg_match_all('#<option(?:[^>]*?)?value\s*=\s*"(http[^"]*)#is'.$WfTLI8VErD9bfq, $cn, $mwL8XaoX3); $_sc = '(?:i?frame'.($grab_parameters['xs_parse_js'] ? '|script':'').')'; preg_match_all('#<'.$_sc.'\s[^>]*?src\s*=\s*["\']?(.*?)("|>|\')#is', $cn, $kRH7ebqvErCU7_); preg_match_all('#<meta\s[^>]*http-equiv\s*=\s*"?refresh[^>]*URL\s*=\s*["\']?(.*?)("|>|\'[>\s])#'.$WfTLI8VErD9bfq, $cn, $urj9gizLciVTHRbGo); if($grab_parameters['xs_parse_swf']) preg_match_all('#<object[^>]*application/x-shockwave-flash[^>]*data\s*=\s*["\']([^"\'>]+).*?>#'.$WfTLI8VErD9bfq, $cn, $FYyqjOozx);
																									
																									else $FYyqjOozx = array(array(),array());
																									
																									
																									preg_match_all('#<a[^>]*?onclick\s*=\s*"[^"]*\.load\(\'([^\']*)#'.$WfTLI8VErD9bfq, $cn, $yR0nqm0h6BvMa);
																									
																									
																									preg_match_all('#"url"\:"(http[^"]*)#is'.$WfTLI8VErD9bfq, $cn, $NSwWuFWHQ_jkuAk);
																									
																									$HKItJXfv2IpkFWKN = array();
																									
																									$iHv9zT2dFtho9ZEWpZ = 'stylesheet|publisher';
																									
																									if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
																									
																									$iHv9zT2dFtho9ZEWpZ .= '|nofollow';
																									
																									for($i=0;$i<count($am[1]);$i++)
																									
																									{
																									
																									if(!preg_match('#rel\s*=\s*["\']?\s*('.$iHv9zT2dFtho9ZEWpZ.')#i', $am[0][$i]))
																									
																									$HKItJXfv2IpkFWKN[] = $am[1][$i];
																									
																									}
																									
																									$HKItJXfv2IpkFWKN = @array_merge(
																									
																									$HKItJXfv2IpkFWKN,
																									
																									
																									$am[2],$am[3],  
																									
																									$kRH7ebqvErCU7_[1],$urj9gizLciVTHRbGo[1],
																									
																									$mwL8XaoX3[1],$yR0nqm0h6BvMa[1],
																									
																									$NSwWuFWHQ_jkuAk[1],
																									
																									$FYyqjOozx[1]);
																									
																									if($grab_parameters['xs_parse_js'] &&
																									
																									$this->Wgawp9PPP('xs_parse_js_only', $this->DOLUEjG8B6UnIbR, true)
																									
																									){
																									
																									
																									if($dp < $orrD38h_h)
																									
																									$HKItJXfv2IpkFWKN = @array_merge($HKItJXfv2IpkFWKN, $this->uVXuIROgIY6OtzA($cn, $dp));
																									
																									}
																									
																									return $HKItJXfv2IpkFWKN;
																									
																									}
																									
																									function QQ4p9CDWnkySpQVP($Z_WfwiMXVZat7HjzC){
																									
																									
																									return preg_replace('#^(www|\w)\.#', '', $Z_WfwiMXVZat7HjzC);
																									
																									}
																									
																									function hFA05AzH2W3($Oi0cRD0EPmThood) {	
																									
																									if(preg_match('#^(.*?\://[^/]*)#', $Oi0cRD0EPmThood, $kNWqzALtB))
																									
																									return strtolower($kNWqzALtB[1]) .  substr($Oi0cRD0EPmThood, strlen($kNWqzALtB[1]));
																									
																									else
																									
																									return $Oi0cRD0EPmThood;
																									
																									}
																									
																									function cNb13B8Lppddrz(&$a, $l8Kc6qO7MU, $AH_je7H3wlcG9Fq = '')
																									
																									{
																									
																									global $grab_parameters;
																									
																									$uh81KZzIMaY = $this->uh81KZzIMaY;
																									
																									$Ow3RUgFV2JFc = $this->Ow3RUgFV2JFc;
																									
																									$a1 = $a;
																									
																									
																									
																									if(strstr($l8Kc6qO7MU,'://')) {
																									
																									$uh81KZzIMaY = preg_replace('#(:\/\/.*?)\/.*$#', '$01', $Ow3RUgFV2JFc);
																									
																									
																									}
																									
																									$PKex1qV3FkDZy3oGMJ = parse_url($this->bkFhNzhUv9opP4);
																									
																									if($PKex1qV3FkDZy3oGMJ['scheme'] && substr($a, 0, 2) == '//')
																									
																									$a = $PKex1qV3FkDZy3oGMJ['scheme'].':'.$a;
																									
																									$a = str_replace(array('&trade;'), array('%E2%84%A2'), $a);
																									
																									$a = str_replace(
																									
																									array('&#38;','&#038;','&amp;','&#x3a;','&#x3A;','&#x2f;', '&#x2F;'),
																									
																									array('&', '&', '&', ':', ':', '/', '/')
																									
																									,$a);
																									
																									
																									
																									
																									$GIetD1LODh3TwNlJbZ6 = @parse_url($a);
																									
																									$_scheme = strtolower($GIetD1LODh3TwNlJbZ6['scheme']);
																									
																									if($_scheme && ($_scheme!='http')&& ($_scheme!='https')) {
																									
																									$FZhCnLBSDRN5 = 1;
																									
																									}else {
																									
																									$a = str_replace(':80/', '/', $a);
																									
																									$a = str_replace(':443/', '/', $a);
																									
																									if($a[0]=='?')$a = preg_replace('#^([^\?]*?)([^/\?]*?)(\?.*)?$#','$2',$l8Kc6qO7MU).$a;
																									
																									if($grab_parameters['xs_inc_ajax'] && strstr($a,'#!')){
																									
																									$Ow3RUgFV2JFc = preg_replace('#\#.*$#', '', $Ow3RUgFV2JFc);
																									
																									if($a[0] != '/' && !strstr($a,':/'))
																									
																									$a = $Ow3RUgFV2JFc . preg_replace('#^([^\#]*?/)?([^/\#]*)?(\#.*)?$#', '$2', $l8Kc6qO7MU).$a;
																									
																									}
																									
																									if(preg_match('#^https?(:|&\#58;)#is',$a)){
																									
																									if(preg_match('#://[^/]*$#is',$a))
																									
																									$a .= '/';
																									
																									}
																									
																									else if($a&& $a[0]=='/')$a = $uh81KZzIMaY.$a;
																									
																									else $a = $Ow3RUgFV2JFc.$a;
																									
																									if($a[0]=='/')$a = $uh81KZzIMaY.$a;
																									
																									$a=str_replace('/./','/',$a);
																									
																									$a=preg_replace('#/\.$#','/',$a);
																									
																									if(substr($a,-2) == '..')$a.='/';
																									
																									if(strstr($a,'../')){
																									
																									preg_match('#(.*?:.*?//.*?)(/.*)$#',$a,$aa);
																									
																									do{
																									
																									$ap = $aa[2];
																									
																									$aa[2] = preg_replace('#/?[^/]*/\.\.#','',$ap,1);
																									
																									}while($aa[2]!=$ap);
																									
																									$a = $aa[1].$aa[2];
																									
																									}
																									
																									$a = preg_replace('#/\./#','/',$a);
																									
																									$a = preg_replace('#([^&])\#'.($grab_parameters['xs_inc_ajax']?'([^\!]|$)':'').'.*$#','$01',$a);
																									
																									
																									$a = preg_replace('#^(/)/+#','\\1',$a);
																									
																									$a = preg_replace('#[\r\n]+#s','',$a);
																									
																									
																									if($grab_parameters['xs_cleanurls'])
																									
																									$a = @preg_replace($grab_parameters['xs_cleanurls'],'',$a);
																									
																									if($grab_parameters['xs_custom_replace']){
																									
																									global $GgMPUoxBiec;
																									
																									if(!isset($GgMPUoxBiec)){
																									
																									$_ar = preg_split('#[\r\n]+#', trim($grab_parameters['xs_custom_replace']));
																									
																									$GgMPUoxBiec = array();
																									
																									foreach($_ar as $v){
																									
																									$me = explode(' ', $v);
																									
																									if($me[0]&& $me[1])$GgMPUoxBiec['#'.$me[0].'#'] = $me[1];
																									
																									}
																									
																									}
																									
																									if($GgMPUoxBiec){
																									
																									$a = @preg_replace(array_keys($GgMPUoxBiec),array_values($GgMPUoxBiec),$a);
																									
																									}
																									
																									}
																									
																									if($grab_parameters['xs_cleanpar'])
																									
																									{
																									
																									do {
																									
																									$FDx0Iug_XB5BZB9 = $a;
																									
																									$a = @preg_replace('#[\\?\\&]('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\%\-\+\.\_\=\/\,]*$#i','',$a);
																									
																									$a = @preg_replace('#([\\?\\&])('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\%\-\+\.\_\=\/\,]*&#i','$1',$a);
																									
																									}while($a != $FDx0Iug_XB5BZB9);
																									
																									$a = @preg_replace('#\?\&?$#','',$a);
																									
																									}
																									
																									
																									$FZhCnLBSDRN5 = (strtolower(substr($a,0,strlen($this->bkFhNzhUv9opP4)) ) != strtolower($this->bkFhNzhUv9opP4)) ? 1 : 0;
																									
																									if($FZhCnLBSDRN5 && $grab_parameters['xs_allow_subdomains']){
																									
																									$GIetD1LODh3TwNlJbZ6 = @parse_url($a);
																									
																									if($GIetD1LODh3TwNlJbZ6['host'] &&
																									
																									
																									preg_match('#^(.*?\.)?'.preg_quote($this->QQ4p9CDWnkySpQVP($PKex1qV3FkDZy3oGMJ['host']),'#').'$#', $GIetD1LODh3TwNlJbZ6['host'])
																									
																									){
																									
																									$FZhCnLBSDRN5 = 2;
																									
																									}
																									
																									}
																									
																									if($FZhCnLBSDRN5 && $grab_parameters['xs_allow_extscheme']){
																									
																									$_i2 = preg_replace('#^.*?://#','',$this->bkFhNzhUv9opP4);
																									
																									$_a2 = preg_replace('#^.*?://#','',$a);
																									
																									$FZhCnLBSDRN5 = strtolower(substr($_a2,0,strlen($_i2)) ) != strtolower($_i2);
																									
																									}
																									
																									if($FZhCnLBSDRN5 && $AH_je7H3wlcG9Fq) {
																									
																									
																									$f_u91wB3S = $this->a9dsgafzgeL($AH_je7H3wlcG9Fq);
																									
																									
																									if($f_u91wB3S && preg_match('#('.$f_u91wB3S.')#', $a))
																									
																									$FZhCnLBSDRN5 = 2;
																									
																									}
																									
																									}
																									
																									Y1qFyrFH0Wg53("<br/>($a -- [$a1] -- $FZhCnLBSDRN5 - $l8Kc6qO7MU - $uh81KZzIMaY - $Ow3RUgFV2JFc - [".$this->QQ4p9CDWnkySpQVP($PKex1qV3FkDZy3oGMJ['host']).", ".$GIetD1LODh3TwNlJbZ6['host']."])<br>\n",3);
																									
																									return $FZhCnLBSDRN5;
																									
																									}
																									
																									function MePjOUuIoiDc($l8Kc6qO7MU){
																									
																									return strstr($l8Kc6qO7MU,'://') ? $l8Kc6qO7MU : $this->bkFhNzhUv9opP4 . $l8Kc6qO7MU;
																									
																									}
																									
																									function Wgawp9PPP($WIIEBv57Mj3znHtr1yy, $l8Kc6qO7MU, $obZ3l3uVVZ6RXfi = true){
																									
																									global $D7nANqHO4vgu70VyTf,$grab_parameters;
																									
																									$b9jQQ3chNS4D97D2Kh9 = $obZ3l3uVVZ6RXfi;
																									
																									if($grab_parameters[$WIIEBv57Mj3znHtr1yy]){
																									
																									if(!isset($D7nANqHO4vgu70VyTf[$WIIEBv57Mj3znHtr1yy])){
																									
																									$D7nANqHO4vgu70VyTf[$WIIEBv57Mj3znHtr1yy] = $grab_parameters[$WIIEBv57Mj3znHtr1yy];
																									
																									if(!preg_match('#[\*\$]#',$D7nANqHO4vgu70VyTf[$WIIEBv57Mj3znHtr1yy]))
																									
																									$D7nANqHO4vgu70VyTf[$WIIEBv57Mj3znHtr1yy] = preg_quote($D7nANqHO4vgu70VyTf[$WIIEBv57Mj3znHtr1yy],'#');
																									
																									$D7nANqHO4vgu70VyTf[$WIIEBv57Mj3znHtr1yy] = '#'.str_replace(' ', '|', $D7nANqHO4vgu70VyTf[$WIIEBv57Mj3znHtr1yy]).'#';
																									
																									}
																									
																									$b9jQQ3chNS4D97D2Kh9 = preg_match($D7nANqHO4vgu70VyTf[$WIIEBv57Mj3znHtr1yy],$l8Kc6qO7MU);
																									
																									}
																									
																									return $b9jQQ3chNS4D97D2Kh9;
																									
																									}
																									
																									function a9dsgafzgeL($x8YZAHLCXE5HDXp){
																									
																									if(!isset($this->nNXg3_3MIwATs1LLnl[$x8YZAHLCXE5HDXp])){
																									
																									$this->nNXg3_3MIwATs1LLnl[$x8YZAHLCXE5HDXp] = trim($x8YZAHLCXE5HDXp) ? 
																									
																									preg_replace(
																									
																									'#(^|\|)/#',
																									
																									'$01(?:^|/)',
																									
																									preg_replace("#\s*[\r\n]+\s*#",'|', (strstr($s=trim($x8YZAHLCXE5HDXp),'*')?$s:preg_quote($s,'#')))
																									
																									) : '';
																									
																									}
																									
																									return $this->nNXg3_3MIwATs1LLnl[$x8YZAHLCXE5HDXp];
																									
																									}
																									
																									function aTvJ1PVPra4($Oca2gy2Bmi1oRVJQIG, $l8Kc6qO7MU) {
																									
																									$f = false;
																									
																									if($Oca2gy2Bmi1oRVJQIG)
																									
																									foreach($Oca2gy2Bmi1oRVJQIG as $bm)
																									
																									{
																									
																									if($f = ($f || preg_match('#^('.$bm.')#', $l8Kc6qO7MU, $_imatch)))
																									
																									break;
																									
																									}
																									
																									return $f ? $_imatch[1] : 0;
																									
																									}
																									
																									function HQafr74PZizhbMt9h($l8Kc6qO7MU) {
																									
																									$bm = $this->aTvJ1PVPra4($this->SnDzWJ__zP, $l8Kc6qO7MU);
																									
																									if($bm)
																									
																									{
																									
																									$gh8SvDaGa1s = $this->aTvJ1PVPra4($this->botmatch_allow, $l8Kc6qO7MU);
																									
																									return $gh8SvDaGa1s ? false : $bm;
																									
																									}
																									
																									return false;
																									
																									}
																									
																									function c3kFmC6dF(&$l8Kc6qO7MU) {
																									
																									global $grab_parameters;
																									
																									$us = '';
																									
																									if(isset($this->j4ByT3Fb2qnFm[$l8Kc6qO7MU]))
																									
																									$l8Kc6qO7MU =$this->j4ByT3Fb2qnFm[$l8Kc6qO7MU];
																									
																									$f = $this->x_VjCgpZmBejipM4ua && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$l8Kc6qO7MU);
																									
																									if($f&&!$us)$us = 'excl-ext';
																									
																									if($this->rpf0hMm3s5B1&&!$f)$f=$f||@preg_match('#('.$this->rpf0hMm3s5B1.')#',$l8Kc6qO7MU);
																									
																									if($f&&!$us)$us = 'excl-mask';
																									
																									if($this->hBIB0xhM6G1f6PFlnM && $f && $grab_parameters['xs_incl_force'])
																									
																									$f = !preg_match('#('.$this->hBIB0xhM6G1f6PFlnM.')#',$l8Kc6qO7MU);
																									
																									$f = $f || $this->HQafr74PZizhbMt9h($this->EmYP4RQZ5sVlUA02 . $l8Kc6qO7MU);
																									
																									if($f&&!$us)$us = 'excl-bot';
																									
																									$f2 = false;
																									
																									$X8JtNAylCZ = false;
																									
																									if(!$f)
																									
																									{
																									
																									$f2 = $this->Zn4fHyrSKXDE3zeaGh && preg_match('#'.$grab_parameters['xs_inc_skip'].'#i',$l8Kc6qO7MU);
																									
																									if($this->hBIB0xhM6G1f6PFlnM && !$f2)
																									
																									$f2 = $f2||(preg_match('#('.$this->hBIB0xhM6G1f6PFlnM.')#',$l8Kc6qO7MU));
																									
																									if($grab_parameters['xs_parse_only'] && !$f2 && $l8Kc6qO7MU && ($l8Kc6qO7MU!='/'))
																									
																									{
																									
																									
																									$f2 = $f2 || !$this->Wgawp9PPP('xs_parse_only', $l8Kc6qO7MU, true);
																									
																									}
																									
																									}
																									
																									$f3 = false;
																									
																									if($this->noincmask)$f3=@preg_match('#('.$this->noincmask.')#',$l8Kc6qO7MU);
																									
																									return array('f' => $f, 'f2' => $f2, 'f3' => $f3, 'uskip' => $us);	
																									
																									}
																									
																									 
																									
																									function J_rIrBABt0kr2W($ybU_ViMnsXh, &$urls_completed) {
																									
																									global $grab_parameters,$BMbehimV7yzhTAnB;
																									
																									
																									error_reporting(E_ALL&~E_NOTICE);
																									
																									$this->ybU_ViMnsXh = $ybU_ViMnsXh;
																									
																									@set_time_limit($grab_parameters['xs_exec_time']);
																									
																									if($this->ybU_ViMnsXh['bgexec'])
																									
																									{
																									
																									ignore_user_abort(true);
																									
																									}
																									
																									register_shutdown_function('zYZyfiVzd5nnQ');
																									
																									if(function_exists('ini_set'))
																									
																									{
																									
																									@ini_set("zlib.output_compression", 0);
																									
																									@ini_set("output_buffering", 0);
																									
																									}
																									
																									$WEiHACSW1BCJnptPEAz = explode(" ",microtime());
																									
																									$this->daaWRxYVS_S06OhNUzc = $WEiHACSW1BCJnptPEAz[0]+$WEiHACSW1BCJnptPEAz[1];
																									
																									$starttime = $jsnXB2aVs8qQ = time();
																									
																									$STOFDIS0uk = $this->nettime = 0;
																									
																									$this->P544ar4HSneEHQkym = $this->ybU_ViMnsXh['initurl'];
																									
																									$this->f0SvwzVrPSVgca5fQ = $this->ybU_ViMnsXh['maxpg']>0 ? $this->ybU_ViMnsXh['maxpg'] : 1E10;
																									
																									$qRiPVKF15hx = $this->ybU_ViMnsXh['maxdepth'] ? $this->ybU_ViMnsXh['maxdepth'] : -1;
																									
																									$this->oVuCHr0sTvvxGkVf0B4 = $this->ybU_ViMnsXh['progress_callback'];
																									
																									$this->rpf0hMm3s5B1 = $this->a9dsgafzgeL($grab_parameters['xs_excl_urls']);
																									
																									$this->hBIB0xhM6G1f6PFlnM = $this->a9dsgafzgeL($grab_parameters['xs_incl_urls']);
																									
																									$this->noincmask = $this->a9dsgafzgeL($grab_parameters['xs_noincl_urls']);
																									
																									$pGFKDdHBGwGhWg33Zxc = $this->a9dsgafzgeL($grab_parameters['xs_prev_sm_incl']);
																									
																									$uzeH6XHCKkzxDvzJ = $this->a9dsgafzgeL($grab_parameters['xs_prev_sm_cache']);
																									
																									$wPZewNPRf = $qjMr2JDo0lqukcC5Os = array();
																									
																									$Y03xTjpD03URLod0 = '';
																									
																									$EAgDzuTKpxTzh = preg_split('#[\r\n]+#', $grab_parameters['xs_ind_attr']);
																									
																									$yh0wrldpZd7tXXEcXnR = '#200'.($grab_parameters['xs_allow_httpcode']?'|'.$grab_parameters['xs_allow_httpcode']:'').'#';
																									
																									$qd4rAaNH3V = '#400|429'.($grab_parameters['xs_badreq_httpcode']?'|'.$grab_parameters['xs_badreq_httpcode']:'').'#';
																									
																									if($grab_parameters['xs_memsave'])
																									
																									{
																									
																									if(!file_exists(K0e08WrVt))
																									
																									mkdir(K0e08WrVt, 0777);
																									
																									else
																									
																									if($this->ybU_ViMnsXh['resume']=='')
																									
																									AcAo_7JhC_QYBb1w_(K0e08WrVt, '.txt');
																									
																									}
																									
																									foreach($EAgDzuTKpxTzh as $ia)
																									
																									if($ia)
																									
																									{
																									
																									$is = explode(',', $ia);
																									
																									if($is[0][0]=='$')
																									
																									$dZCmLdGmNkpu = substr($is[0], 1);
																									
																									else
																									
																									$dZCmLdGmNkpu = str_replace(array('\\^', '\\$'), array('^','$'), preg_quote($is[0],'#'));
																									
																									$qjMr2JDo0lqukcC5Os[] = $dZCmLdGmNkpu;
																									
																									
																									$wPZewNPRf[] = 
																									
																									array('lm' => $is[1], 'f' => $is[2], 'p' => $is[3]);
																									
																									}
																									
																									if($qjMr2JDo0lqukcC5Os)
																									
																									$Y03xTjpD03URLod0 = '('.implode(')|(',$qjMr2JDo0lqukcC5Os).')';
																									
																									
																									$VV3sUzJmSC8h9Is = parse_url($this->P544ar4HSneEHQkym);
																									
																									if(!$VV3sUzJmSC8h9Is['path']){$this->P544ar4HSneEHQkym.='/';$VV3sUzJmSC8h9Is = parse_url($this->P544ar4HSneEHQkym);}
																									
																									$D0hmz3RHCMU = 0;
																									
																									do {
																									
																									$QlDIrjacod6EI = $BMbehimV7yzhTAnB->fetch($this->P544ar4HSneEHQkym,0,true);// the first request is to skip session id
																									
																									$ERLBrlT95p = !preg_match($yh0wrldpZd7tXXEcXnR,$QlDIrjacod6EI['code']);
																									
																									}while($ERLBrlT95p && ($D0hmz3RHCMU++ <2));
																									
																									
																									
																									if($ERLBrlT95p)
																									
																									{
																									
																									$ERLBrlT95p = '';
																									
																									foreach($QlDIrjacod6EI['headers'] as $k=>$v)
																									
																									$ERLBrlT95p .= $k.': '.$v.'<br />';
																									
																									return array(
																									
																									'errmsg'=>'<b>There was an error while retrieving the URL specified:</b> '.$this->P544ar4HSneEHQkym.''.
																									
																									($QlDIrjacod6EI['errormsg']?'<br><b>Error message:</b> '.$QlDIrjacod6EI['errormsg']:'').
																									
																									'<br><b>HTTP Code:</b><br>'.$QlDIrjacod6EI['protoline'].
																									
																									'<br><b>HTTP headers:</b><br>'.$ERLBrlT95p.
																									
																									'<br><b>HTTP output:</b><br>'.$QlDIrjacod6EI['content']
																									
																									,
																									
																									);
																									
																									}
																									
																									$this->P544ar4HSneEHQkym = $QlDIrjacod6EI['last_url'];
																									
																									if($grab_parameters['xs_moreurls']){
																									
																									
																									$this->mu = preg_split('#[\r\n]+#', $grab_parameters['xs_moreurls']);
																									
																									foreach($this->mu as $mi=>$R7FS7RqA1){
																									
																									$R7FS7RqA1 = str_replace($this->bkFhNzhUv9opP4, '', $R7FS7RqA1);
																									
																									$QlDIrjacod6EI = $BMbehimV7yzhTAnB->fetch($R7FS7RqA1,0,true);
																									
																									if($mi>3)break;
																									
																									}
																									
																									}
																									
																									$urls_completed = array();
																									
																									$urls_ext = array();
																									
																									$urls_404 = array();
																									
																									$this->uh81KZzIMaY = $VV3sUzJmSC8h9Is['scheme'].'://'.$VV3sUzJmSC8h9Is['host'].((!$VV3sUzJmSC8h9Is['port'] || ($VV3sUzJmSC8h9Is['port']=='80'))?'':(':'.$VV3sUzJmSC8h9Is['port']));
																									
																									$this->pn = $this->tsize = $retrno = $TuEwF9Ritr = $YT1jStP3W6hA8BaGih = $this->fetch_no = 0;
																									
																									$this->bkFhNzhUv9opP4 = PpV5U2ubaMUby9SliLO($this->uh81KZzIMaY.'/', Xz3u7KwMuNzZ0p($VV3sUzJmSC8h9Is['path']));
																									
																									$RZtxEsvLuhroi = parse_url($this->bkFhNzhUv9opP4);
																									
																									$this->EmYP4RQZ5sVlUA02 = preg_replace('#^.+://[^/]+#', '', $this->bkFhNzhUv9opP4);
																									
																									$this->jIwT91h33RI = $BMbehimV7yzhTAnB->fetch($this->P544ar4HSneEHQkym,0,true,true);
																									
																									$wtzM8Jk_rs093Y = str_replace($this->bkFhNzhUv9opP4,'',$this->P544ar4HSneEHQkym);
																									
																									$urls_list_full = array($wtzM8Jk_rs093Y=>1);
																									
																									if(!$wtzM8Jk_rs093Y)$wtzM8Jk_rs093Y='';
																									
																									$urls_list = array($wtzM8Jk_rs093Y=>1);
																									
																									$urls_list2 = $urls_list_skipped = array();
																									
																									$this->j4ByT3Fb2qnFm = array();
																									
																									$this->links_level = 0;
																									
																									$TVvWoKWbz = $ref_links = $ref_links2 = $ref_links_list = array();
																									
																									$VyhgXUa51zparv = 0;
																									
																									
																									
																									$L4mLqYhIAiYjTbXKzE = $this->f0SvwzVrPSVgca5fQ;
																									
																									if(!$grab_parameters['xs_progupdate'])$grab_parameters['xs_progupdate'] = 20;
																									
																									$this->SnDzWJ__zP = array();
																									
																									$this->botmatch_allow = array();
																									
																									if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
																									
																									{
																									
																									$g4n5F_7FaU = $BMbehimV7yzhTAnB->fetch($this->uh81KZzIMaY.'/robots.txt');
																									
																									if($this->uh81KZzIMaY.'/' != $this->bkFhNzhUv9opP4)
																									
																									{
																									
																									$gZFmFXnelwoC3AwFFJm = $BMbehimV7yzhTAnB->fetch($this->bkFhNzhUv9opP4.'robots.txt');
																									
																									$g4n5F_7FaU['content']  .= "\n".$gZFmFXnelwoC3AwFFJm['content'];
																									
																									}
																									
																									$ra=preg_split('#user-agent:\s*#im',$g4n5F_7FaU['content']);
																									
																									$GzSfk1giMUbzwGas=$DuocJq3hD3J71=array();
																									
																									for($i=1;$i<count($ra);$i++){
																									
																									preg_match('#^(\S+)(.*)$#s',$ra[$i],$q6SUh6Rgt);
																									
																									if($q6SUh6Rgt[1]=='*'||strstr($q6SUh6Rgt[1],'google')){
																									
																									preg_match_all('#^disallow:\s*([^\#\r\n]*)#im',$q6SUh6Rgt[2],$rm);
																									
																									for($pi=0;$pi<count($rm[1]);$pi++)
																									
																									if($rm[1][$pi])
																									
																									$GzSfk1giMUbzwGas[] = 
																									
																									str_replace('\\$','$',
																									
																									str_replace(' ','',
																									
																									str_replace('\\*','.*',
																									
																									preg_quote($rm[1][$pi],'#')
																									
																									)));
																									
																									preg_match_all('#^allow:\s*(\S*)#im',$q6SUh6Rgt[2],$rm);
																									
																									for($pi=0;$pi<count($rm[1]);$pi++)
																									
																									if($rm[1][$pi] && ($rm[1][$pi]!='/')) {
																									
																									$DuocJq3hD3J71[] = 
																									
																									str_replace('\\$','$',
																									
																									str_replace('\\*','.*',
																									
																									str_replace(' ','',
																									
																									preg_quote($rm[1][$pi],'#')
																									
																									)));
																									
																									}
																									
																									}
																									
																									}
																									
																									for($i=0;$i<count($GzSfk1giMUbzwGas);$i+=200)
																									
																									$this->SnDzWJ__zP[]=implode('|', array_slice($GzSfk1giMUbzwGas, $i,200));
																									
																									for($i=0;$i<count($DuocJq3hD3J71);$i+=200)
																									
																									$this->botmatch_allow[]=implode('|', array_slice($DuocJq3hD3J71, $i,200));
																									
																									}
																									
																									if($grab_parameters['xs_inc_ajax'])
																									
																									$grab_parameters['xs_proto_skip'] = str_replace(
																									
																									'\#', '\#(?:[^\!]|$)', $grab_parameters['xs_proto_skip']);
																									
																									$this->x_VjCgpZmBejipM4ua = $grab_parameters['xs_exc_skip']!='\\.()';
																									
																									$this->Zn4fHyrSKXDE3zeaGh = $grab_parameters['xs_inc_skip']!='\\.()';
																									
																									$grab_parameters['xs_inc_skip'] .= '(?:$|\?)';
																									
																									$grab_parameters['xs_exc_skip'] .= '(?:$|\?)';
																									
																									if($grab_parameters['xs_debug']) {
																									
																									$_GET['ddbg']=1;
																									
																									t58ZTbPW78();
																									
																									}
																									
																									$up2v2qKUD = 0;
																									
																									$runstate = array();
																									
																									$this->url_ind = 0;
																									
																									$this->cnu = 1;
																									
																									$pf = cokTfdpvPOceFs7s(TuLXmMBFSKj5mt.naDNgdhQWKEoBa,'w');fclose($pf);
																									
																									$tAVJZD0QsV = false;
																									
																									if($this->ybU_ViMnsXh['resume']!=''){
																									
																									$GgTdwek2adLV9c = @qosXLA3o9B8rfQ4hiZq(Zx6LBsBDu(TuLXmMBFSKj5mt . Nivf2Dt1sV, true));
																									
																									if($GgTdwek2adLV9c)
																									
																									{
																									
																									$tAVJZD0QsV = true;
																									
																									echo 'Resuming the last session (last updated: '.date('Y-m-d H:i:s',$GgTdwek2adLV9c['time']).')'."\n";
																									
																									extract($GgTdwek2adLV9c);
																									
																									foreach($GgTdwek2adLV9c as $k=>$v){
																									
																									if(isset($this->$k))$this->$k=$v;
																									
																									}
																									
																									$this->daaWRxYVS_S06OhNUzc-=$this->ctime;
																									
																									$up2v2qKUD = $this->ctime;
																									
																									unset($GgTdwek2adLV9c);
																									
																									}
																									
																									}
																									
																									$SGEO59T9jVNyKd = 0;
																									
																									if(!$tAVJZD0QsV){
																									
																									if($grab_parameters['xs_moreurls']){
																									
																									$this->mu = preg_split('#[\r\n]+#', $grab_parameters['xs_moreurls']);
																									
																									foreach($this->mu as $R7FS7RqA1){
																									
																									
																									
																									$FZhCnLBSDRN5 = $this->cNb13B8Lppddrz($R7FS7RqA1, $this->DOLUEjG8B6UnIbR);
																									
																									
																									$urls_list[$R7FS7RqA1]++;
																									
																									}
																									
																									}
																									
																									if($grab_parameters['xs_prev_sm_base']){
																									
																									if($sm_base = @Zx6LBsBDu(TuLXmMBFSKj5mt.'sm_base.db',true)){
																									
																									$sm_base = @unserialize($sm_base);
																									
																									}
																									
																									if(is_array($sm_base)
																									
																									&& ($grab_parameters['xs_prev_sm_base_min']<count($sm_base))
																									
																									){
																									
																									if($pGFKDdHBGwGhWg33Zxc)
																									
																									foreach($sm_base as $_u=>$_e){
																									
																									if(preg_match('#('.$pGFKDdHBGwGhWg33Zxc.')#',$_u))
																									
																									$urls_list[$_u]++;
																									
																									}
																									
																									}
																									
																									else
																									
																									$sm_base = array();
																									
																									}
																									
																									$SGEO59T9jVNyKd = count($urls_list);
																									
																									$urls_list_full = $urls_list;
																									
																									$this->cnu = count($urls_list);
																									
																									}
																									
																									$WWPZwI4EWtHrzkv = explode('|', $grab_parameters['xs_force_inc']);
																									
																									$pVU4cG24BzAk3x0gZZ = $clHcYOUz0bV = array();
																									
																									$this->v6EDx10Q4VaXJj = count($urls_completed);
																									
																									$this->yyEzaq75nN3xOkxB5Z = count($urls_list2);
																									
																									sleep(1); @SwIPpM21WDqv(TuLXmMBFSKj5mt.naDNgdhQWKEoBa);
																									
																									$this->sm_sessions[] = array(
																									
																									'start' => time(),
																									
																									'instance' => $grab_parameters['xs_instance_id']
																									
																									);
																									
																									
																									$this->J1aZ1U_EhNDVvG();
																									
																									
																									if($urls_list)
																									
																									do {
																									
																									uSk7q90jdmeIeR565A('pre',true);
																									
																									uSk7q90jdmeIeR565A('pre1');
																									
																									if($pVU4cG24BzAk3x0gZZ) {
																									
																									$_ul = array_shift($pVU4cG24BzAk3x0gZZ);
																									
																									}else
																									
																									$_ul = each($urls_list);
																									
																									list($this->DOLUEjG8B6UnIbR, $CnBnOGIbTeJN) = $_ul;
																									
																									$I4vpcwjEN5Au6yqs = ($CnBnOGIbTeJN>0 && $CnBnOGIbTeJN<1) ? $CnBnOGIbTeJN : 0;
																									
																									$this->url_ind++;
																									
																									Y1qFyrFH0Wg53("\n[ ".$this->url_ind." - $this->DOLUEjG8B6UnIbR, $CnBnOGIbTeJN] \n");
																									
																									unset($urls_list[$this->DOLUEjG8B6UnIbR]);
																									
																									$uEDtK97iHl5VTo5hy = IaXzOg24Zukh13cJ($this->DOLUEjG8B6UnIbR);
																									
																									$b454ZQeWx = false;
																									
																									$LGV4EeAbzAXby = '';
																									
																									uSk7q90jdmeIeR565A('pre1',true);
																									
																									uSk7q90jdmeIeR565A('pre2a');
																									
																									$QlDIrjacod6EI = array();
																									
																									$cn = '';
																									
																									$this->G7Jm5TuIwXGvGAP27 = $_fex = $this->c3kFmC6dF($this->DOLUEjG8B6UnIbR);
																									
																									extract($_fex);
																									
																									if($f)
																									
																									$LGV4EeAbzAXby = $_fex['uskip'];
																									
																									
																									
																									uSk7q90jdmeIeR565A('pre2a',true);
																									
																									uSk7q90jdmeIeR565A('pre2b');
																									
																									if(!$f && ($this->v6EDx10Q4VaXJj>0) && ($X8JtNAylCZ = $sm_base[$this->DOLUEjG8B6UnIbR])){
																									
																									$f2 = true;
																									
																									}
																									
																									if($this->jIwT91h33RI && strstr($this->jIwT91h33RI['content'],'header'))$f2 = true;
																									
																									uSk7q90jdmeIeR565A('pre2b',true);
																									
																									do{
																									
																									$n18va60cVcyCN29De8a = count($urls_list) + $this->yyEzaq75nN3xOkxB5Z + $this->v6EDx10Q4VaXJj;      
																									
																									$f3 = $WWPZwI4EWtHrzkv[2] && (
																									
																									($L4mLqYhIAiYjTbXKzE*$WWPZwI4EWtHrzkv[2]+1000)<
																									
																									($Ru3swEi2GsGD-$this->url_ind-$SGEO59T9jVNyKd));
																									
																									if(!$f && !$f2)
																									
																									{
																									
																									
																									$ZE9rhqjjhsD = ($WWPZwI4EWtHrzkv[1] && 
																									
																									(
																									
																									(($this->ctime>$WWPZwI4EWtHrzkv[0]) && ($this->pn>$this->f0SvwzVrPSVgca5fQ*$WWPZwI4EWtHrzkv[1]))
																									
																									|| $f3));	
																									
																									$N69Z8wTNfNwNEEIpKX = ($WWPZwI4EWtHrzkv[3] && $this->f0SvwzVrPSVgca5fQ && (($n18va60cVcyCN29De8a>$this->f0SvwzVrPSVgca5fQ*$WWPZwI4EWtHrzkv[3])));
																									
																									if($WWPZwI4EWtHrzkv[3] && $this->f0SvwzVrPSVgca5fQ && (($this->pn>$this->f0SvwzVrPSVgca5fQ*$WWPZwI4EWtHrzkv[3]))){
																									
																									$urls_list = $urls_list2 = array();
																									
																									$this->yyEzaq75nN3xOkxB5Z = 0;
																									
																									$this->cnu = 0;
																									
																									}
																									
																									if($qRiPVKF15hx<=0 || $this->links_level<$qRiPVKF15hx)
																									
																									{
																									
																									uSk7q90jdmeIeR565A('extract');
																									
																									$uSMMREDor3X6 = microtime(true);
																									
																									$TCZ0YcVp78YOZp5K = PpV5U2ubaMUby9SliLO($this->bkFhNzhUv9opP4, $this->DOLUEjG8B6UnIbR);
																									
																									if(GTbIezugf4NKv1('xs_http_parallel')){
																									
																									if(!$pVU4cG24BzAk3x0gZZ && !isset($BMbehimV7yzhTAnB->HDBt8adXH[$TCZ0YcVp78YOZp5K])){
																									
																									$pVU4cG24BzAk3x0gZZ = array();
																									
																									$clHcYOUz0bV = array($TCZ0YcVp78YOZp5K);
																									
																									$_par = GTbIezugf4NKv1('xs_http_parallel_num', 10);
																									
																									for($i=0;($i<$_par*5)&&(count($clHcYOUz0bV)<$_par);$i++)
																									
																									if($_ul = each($urls_list)) {
																									
																									$pVU4cG24BzAk3x0gZZ[] = $_ul;
																									
																									$_fex2 = $this->c3kFmC6dF($_ul[0]);
																									
																									if(!$_fex2['f'] && !$_fex2['f2']){
																									
																									$_u1 = PpV5U2ubaMUby9SliLO($this->bkFhNzhUv9opP4, $_ul[0]);
																									
																									if(!isset($sm_base[$_u1])){
																									
																									$clHcYOUz0bV[] = $_u1;
																									
																									}
																									
																									}
																									
																									}
																									
																									$BMbehimV7yzhTAnB->jcqY0UaS33sP7($clHcYOUz0bV);
																									
																									}
																									
																									}
																									
																									
																									
																									Y1qFyrFH0Wg53("<h4> { $TCZ0YcVp78YOZp5K } </h4>\n");
																									
																									$kTaH9YDO7TIIqd48=0;
																									
																									$TuEwF9Ritr++;
																									
																									do {
																									
																									$QlDIrjacod6EI = $BMbehimV7yzhTAnB->fetch($TCZ0YcVp78YOZp5K, 0, 0);
																									
																									$this->J1aZ1U_EhNDVvG();
																									
																									$_to = $QlDIrjacod6EI['flags']['socket_timeout'];
																									
																									if($_to && ($RZtxEsvLuhroi['host']!=$QlDIrjacod6EI['purl']['host'])){
																									
																									$QlDIrjacod6EI['flags']['error'] = 'Host doesn\'t match';
																									
																									}
																									
																									$_ic = intval($QlDIrjacod6EI['code']);
																									
																									$EKoWm9aILayN = preg_match($qd4rAaNH3V,$_ic);
																									
																									$aadFjJDSYZYmOL = ($_ic == 403);
																									
																									if($yh0wrldpZd7tXXEcXnR && preg_match($yh0wrldpZd7tXXEcXnR,$_ic)){
																									
																									$EKoWm9aILayN = $aadFjJDSYZYmOL = false;
																									
																									}
																									
																									$zK7ezck9yAI9KHsqQn2 = (($_ic == 301)||($_ic==302)) && ($TCZ0YcVp78YOZp5K == $QlDIrjacod6EI['last_url']);
																									
																									if( !$QlDIrjacod6EI['flags']['error'] && 
																									
																									(($EKoWm9aILayN || $aadFjJDSYZYmOL || $zK7ezck9yAI9KHsqQn2) || !$QlDIrjacod6EI['code'] || $_to)
																									
																									)
																									
																									{
																									
																									$kTaH9YDO7TIIqd48++;
																									
																									$_sl = $grab_parameters['xs_delay_ms']?$grab_parameters['xs_delay_ms']:1;
																									
																									if($QlDIrjacod6EI['headers'] && ($_csl = $QlDIrjacod6EI['headers']['retry-after']))
																									
																									$_sl = max($_sl, $_csl + ($kTaH9YDO7TIIqd48+1)*$_sl);
																									
																									
																									if(($_to) && $grab_parameters['xs_timeout_break']){
																									
																									Y1qFyrFH0Wg53("<p> # TIMEOUT - $_to #</p>\n");
																									
																									if($kTaH9YDO7TIIqd48==3){
																									
																									
																									if(strstr($_to,'read') ){
																									
																									Y1qFyrFH0Wg53("<p> read200 break?</p>\n");
																									
																									break ;
																									
																									}
																									
																									if($YT1jStP3W6hA8BaGih++>5) {
																									
																									$EbJQzReVy1kXGzRI = "Too many timeouts detected";
																									
																									break 2;
																									
																									}
																									
																									Y1qFyrFH0Wg53("<p> # MULTI TIMEOUT - BREAK #</p>\n");
																									
																									$_sl = 60;	    			
																									
																									$kTaH9YDO7TIIqd48 = 0;
																									
																									}
																									
																									}
																									
																									$YaphOuzNC_5VYlG = $zK7ezck9yAI9KHsqQn2?"(".$TCZ0YcVp78YOZp5K." => ".$QlDIrjacod6EI['last_url'].")":"-";
																									
																									Y1qFyrFH0Wg53("<p> # RETRY - ".$QlDIrjacod6EI['code']." - ".(intval($QlDIrjacod6EI['code']))." - error(".$QlDIrjacod6EI['flags']['error'].") self-redir($YaphOuzNC_5VYlG) badreq($EKoWm9aILayN) forbreq($aadFjJDSYZYmOL) tmout($_to)# zZz $_sl</p>\n");
																									
																									sleep($_sl);
																									
																									}
																									
																									else 
																									
																									break;
																									
																									}while($kTaH9YDO7TIIqd48<3);
																									
																									$this->fetch_no++;
																									
																									uSk7q90jdmeIeR565A('extract', true);
																									
																									uSk7q90jdmeIeR565A('analyze');
																									
																									$this->sg8UdHG3wDnMA = microtime(true)-$uSMMREDor3X6;
																									
																									$this->nettime += $this->sg8UdHG3wDnMA;
																									
																									
																									
																									Y1qFyrFH0Wg53("<hr>\n[[[ ".$QlDIrjacod6EI['code']." ]]] - ".number_format($this->sg8UdHG3wDnMA,2)."s (".number_format($BMbehimV7yzhTAnB->NkAHXfvGIvhJD,2).' + '.number_format($BMbehimV7yzhTAnB->yEhPOV5uztTiZ,2).")\n".var_export($QlDIrjacod6EI['headers'],1));
																									
																									$MoKlUqiQ_Gl5lBJ3 = is_array($QlDIrjacod6EI['headers']) ? strtolower($QlDIrjacod6EI['headers']['content-type']) : '';
																									
																									$JIyUhRRXIXO3i2Dh = $this->WgybUT5kJ1d($MoKlUqiQ_Gl5lBJ3) || !$MoKlUqiQ_Gl5lBJ3;
																									
																									
																									if((strstr($MoKlUqiQ_Gl5lBJ3,'application/') && strstr($MoKlUqiQ_Gl5lBJ3,'pdf'))
																									
																									||strstr($MoKlUqiQ_Gl5lBJ3,'/xml')
																									
																									||strstr($MoKlUqiQ_Gl5lBJ3,'text/plain')
																									
																									) 
																									
																									{
																									
																									$QlDIrjacod6EI['content'] = '';
																									
																									$JIyUhRRXIXO3i2Dh = true;
																									
																									}
																									
																									$DekzZDMh24NjiG2_pM = ($grab_parameters['xs_parse_swf'] && strstr($MoKlUqiQ_Gl5lBJ3, 'shockwave-flash'));
																									
																									$wZvHwzmGbsTPR  = ($grab_parameters['xs_parse_js'] && strstr($MoKlUqiQ_Gl5lBJ3, 'javascript'));
																									
																									if($MoKlUqiQ_Gl5lBJ3 && !$JIyUhRRXIXO3i2Dh && !$DekzZDMh24NjiG2_pM && !$wZvHwzmGbsTPR){
																									
																									if(!$ZE9rhqjjhsD){
																									
																									$LGV4EeAbzAXby = $MoKlUqiQ_Gl5lBJ3;
																									
																									continue;
																									
																									}
																									
																									}
																									
																									$HKItJXfv2IpkFWKN = array();
																									
																									
																									if($QlDIrjacod6EI['code']==404
																									
																									|| ($grab_parameters['xs_force_404']
																									
																									&& preg_match('#'.implode('|',preg_split('#\s+#',$grab_parameters['xs_force_404'])).'#', $this->DOLUEjG8B6UnIbR)
																									
																									)
																									
																									){
																									
																									if($this->links_level>0)
																									
																									if(!$grab_parameters['xs_chlog_list_max'] ||
																									
																									count($urls_404) < $grab_parameters['xs_chlog_list_max']) {
																									
																									
																									$JoT5CW39qbqbKq8rmi = $ref_links2[$this->DOLUEjG8B6UnIbR];
																									
																									
																									if($JoT5CW39qbqbKq8rmi && isset($this->j4ByT3Fb2qnFm[$JoT5CW39qbqbKq8rmi[0]])
																									
																									&& isset($ref_links_list[$JoT5CW39qbqbKq8rmi[0]])
																									
																									){
																									
																									
																									$JoT5CW39qbqbKq8rmi = array_merge($JoT5CW39qbqbKq8rmi, $ref_links_list[$JoT5CW39qbqbKq8rmi[0]]);
																									
																									}
																									
																									$urls_404[]=array($this->DOLUEjG8B6UnIbR, $JoT5CW39qbqbKq8rmi);
																									
																									}
																									
																									}
																									
																									
																									$cn = $QlDIrjacod6EI['content'];
																									
																									
																									Y1qFyrFH0Wg53("\n\n<hr>\n\n$cn\n\n<hr>\n\n",4);//exit;
																									
																									$this->tsize+=strlen($cn);
																									
																									
																									if($tmnsax_itcf9 = preg_replace('#<!--(\[if IE\]>|.*?-->)#is', '',$cn))
																									
																									$cn = $tmnsax_itcf9;
																									
																									preg_match('#<base[^>]*?href=[\'"](.*?)[\'"]#is',$cn,$bm);
																									
																									if(isset($bm[1])&& $bm[1]){
																									
																									if($VV3sUzJmSC8h9Is['scheme'] && substr($bm[1], 0, 2) == '//')
																									
																									$bm[1] = $VV3sUzJmSC8h9Is['scheme'].':'.$bm[1];
																									
																									$this->Ow3RUgFV2JFc = Xz3u7KwMuNzZ0p($bm[1].(preg_match('#//.*/#',$bm[1])?'-':'/-'));
																									
																									}
																									
																									else
																									
																									$this->Ow3RUgFV2JFc = Xz3u7KwMuNzZ0p(strstr($this->DOLUEjG8B6UnIbR,'://') ? $this->DOLUEjG8B6UnIbR : $this->bkFhNzhUv9opP4 . $this->DOLUEjG8B6UnIbR);
																									
																									
																									if($grab_parameters['xs_canonical'])
																									
																									if(($TCZ0YcVp78YOZp5K == $QlDIrjacod6EI['last_url'])
																									
																									&& 
																									
																									(
																									
																									preg_match('#<link[^>]*rel=[\'"]canonical[\'"][^>]*\shref=[\'"]([^>]*?)[\'"]#is', $cn, $kjWDl5x2xr) ||
																									
																									preg_match('#<link[^>]*\shref=[\'"]([^>]*?)[\'"][^>]*rel=[\'"]canonical[\'"]#is', $cn, $kjWDl5x2xr))
																									
																									){
																									
																									$Hsxcukh6rzFt44Vq = $this->hFA05AzH2W3(trim($kjWDl5x2xr[1]));
																									
																									$FZhCnLBSDRN5 = $this->cNb13B8Lppddrz($Hsxcukh6rzFt44Vq, $this->DOLUEjG8B6UnIbR);
																									
																									if($TCZ0YcVp78YOZp5K != $Hsxcukh6rzFt44Vq){
																									
																									$LGV4EeAbzAXby = 'canonical - '.$Hsxcukh6rzFt44Vq;
																									
																									}
																									
																									
																									}
																									
																									if($QlDIrjacod6EI['last_url']){
																									
																									$FZhCnLBSDRN5 = $this->cNb13B8Lppddrz($QlDIrjacod6EI['last_url'], $this->DOLUEjG8B6UnIbR);
																									
																									if($FZhCnLBSDRN5 == 1){
																									
																									$LGV4EeAbzAXby = 'lu (ext) - '.$QlDIrjacod6EI['last_url'];
																									
																									if($QlDIrjacod6EI['last_url'] != $TCZ0YcVp78YOZp5K) {
																									
																									
																									continue;
																									
																									}
																									
																									}
																									
																									}
																									
																									$y6VpH8bXrPg2jmb = preg_replace('#^.*?'.preg_quote($this->bkFhNzhUv9opP4,'#').'#','',$QlDIrjacod6EI['last_url']);
																									
																									if(($TCZ0YcVp78YOZp5K != $QlDIrjacod6EI['last_url']))// && ($TCZ0YcVp78YOZp5K != $QlDIrjacod6EI['last_url'].'/')) 
																									
																									{
																									
																									$this->j4ByT3Fb2qnFm[$this->DOLUEjG8B6UnIbR] = $QlDIrjacod6EI['last_url']; $io=$this->DOLUEjG8B6UnIbR;
																									
																									if(strlen($y6VpH8bXrPg2jmb) <= 2048)
																									
																									if(!isset($urls_list_full[$y6VpH8bXrPg2jmb])) {
																									
																									$urls_list2[$y6VpH8bXrPg2jmb]++;
																									
																									if(count($ref_links[$y6VpH8bXrPg2jmb])<max(1,intval($grab_parameters['xs_maxref'])))
																									
																									$ref_links[$y6VpH8bXrPg2jmb][] = $this->DOLUEjG8B6UnIbR;
																									
																									if(
																									
																									$grab_parameters['xs_ref_list_store'] && 
																									
																									($_rlmax = $grab_parameters['xs_ref_list_max'])
																									
																									){
																									
																									if(
																									
																									(isset($ref_links_list[$y6VpH8bXrPg2jmb])
																									
																									|| count($ref_links_list)<$_rlmax)
																									
																									&&    					
																									
																									(count($ref_links_list[$y6VpH8bXrPg2jmb])<max(1,intval($grab_parameters['xs_maxref'])))
																									
																									)
																									
																									{
																									
																									if(!$ref_links_list[$y6VpH8bXrPg2jmb])
																									
																									$ref_links_list[$y6VpH8bXrPg2jmb] = array();
																									
																									if(!in_array($this->DOLUEjG8B6UnIbR, $ref_links_list[$y6VpH8bXrPg2jmb]))
																									
																									$ref_links_list[$y6VpH8bXrPg2jmb][] = $this->DOLUEjG8B6UnIbR;
																									
																									}
																									
																									}
																									
																									}
																									
																									$LGV4EeAbzAXby = 'lu - '.$QlDIrjacod6EI['last_url'];
																									
																									if(!$ZE9rhqjjhsD)continue;
																									
																									}
																									
																									if($yh0wrldpZd7tXXEcXnR && !preg_match($yh0wrldpZd7tXXEcXnR,$QlDIrjacod6EI['code'])){
																									
																									$LGV4EeAbzAXby = $QlDIrjacod6EI['code'];
																									
																									continue;
																									
																									}
																									
																									$retrno++;
																									
																									if($ZE9rhqjjhsD||$N69Z8wTNfNwNEEIpKX) {
																									
																									
																									$JIyUhRRXIXO3i2Dh = false;
																									
																									}
																									
																									uSk7q90jdmeIeR565A('analyze',true);
																									
																									if($DekzZDMh24NjiG2_pM)
																									
																									{
																									
																									include_once teibqRLPh2.'class.pfile.inc.php';
																									
																									$am = new SWFParser();
																									
																									$am->HuQdTv8rF9ChG_6V3k($cn);
																									
																									$FYyqjOozx = $am->Fu_sqeHdIl();
																									
																									}else
																									
																									if($JIyUhRRXIXO3i2Dh || $wZvHwzmGbsTPR)
																									
																									{
																									
																									uSk7q90jdmeIeR565A('parse');
																									
																									if($wZvHwzmGbsTPR) {
																									
																									$LGV4EeAbzAXby = 'js';
																									
																									$f = true; // Do not index
																									
																									preg_match_all('#(?:add|menu)item\s*\([^\)]*?["\']((?:\.+\/|http).*?)["\)\']#is', $cn, $kRH7ebqvErCU7_);
																									
																									$HKItJXfv2IpkFWKN = $kRH7ebqvErCU7_[1];
																									
																									if(preg_match_all('#\(\s*(\{.*?["\']content["\']\s*\:\s*[\'"](.*?)[\'"]\s*\})\s*\)#is', $cn, $urj9gizLciVTHRbGo)){
																									
																									foreach($urj9gizLciVTHRbGo[1] as $dyw4xbxxe){
																									
																									if($YhJoneFEIPB0uCcyNdx = stripslashes($dyw4xbxxe)){
																									
																									$HKItJXfv2IpkFWKN = array_merge(
																									
																									$HKItJXfv2IpkFWKN, $this->S0edEnGQ3vY2Z($YhJoneFEIPB0uCcyNdx));
																									
																									}
																									
																									}
																									
																									}
																									
																									}else {
																									
																									$HKItJXfv2IpkFWKN = $this->S0edEnGQ3vY2Z($cn);
																									
																									}
																									
																									}
																									
																									$HKItJXfv2IpkFWKN = array_unique($HKItJXfv2IpkFWKN);
																									
																									
																									$nn = $nt = 0;
																									
																									reset($HKItJXfv2IpkFWKN);
																									
																									if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
																									
																									if(preg_match('#<meta\s*name=[\'"]robots[\'"]\s*content=[\'"][^\'"]*?nofollow#is',$cn))
																									
																									$HKItJXfv2IpkFWKN = array();
																									
																									if(!$runstate['charset']){
																									
																									
																									
																									if(preg_match('#<meta[^>]*?charset\s*=\s*"?([^">]*)"#is',$cn, $hIdLm72zHqja8VfH))
																									
																									$runstate['charset'] = $hIdLm72zHqja8VfH[1];
																									
																									}
																									
																									uSk7q90jdmeIeR565A('parse', true);
																									
																									uSk7q90jdmeIeR565A('llist');
																									
																									foreach($HKItJXfv2IpkFWKN as $i=>$ll)
																									
																									if($ll)
																									
																									{                    
																									
																									if(preg_match('#^https?%3a%2f#i', $ll))
																									
																									$ll = urldecode($ll);
																									
																									$a = $sa = trim($ll);
																									
																									$a = str_replace('&#58;',':',$a);
																									
																									if($grab_parameters['xs_proto_skip'] && 
																									
																									(preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',$a)||
																									
																									($this->x_VjCgpZmBejipM4ua && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$a))||
																									
																									preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',function_exists('html_entity_decode')?html_entity_decode($a):$a)
																									
																									))
																									
																									continue;
																									
																									
																									if(strlen($a) > 4096) continue;
																									
																									$FZhCnLBSDRN5 = $this->cNb13B8Lppddrz($a, $this->DOLUEjG8B6UnIbR);
																									
																									if($FZhCnLBSDRN5 == 1)
																									
																									{
																									
																									if($grab_parameters['xs_extlinks'] &&
																									
																									(!$grab_parameters['xs_extlinks_excl'] || !preg_match('#'.$this->a9dsgafzgeL($grab_parameters['xs_extlinks_excl']).'#',$a)) &&
																									
																									(!$grab_parameters['xs_ext_max'] || (count($urls_ext)<$grab_parameters['xs_ext_max']))
																									
																									)
																									
																									{
																									
																									if(!$urls_ext[$a] && 
																									
																									(!$grab_parameters['xs_ext_skip'] || 
																									
																									!preg_match('#'.$grab_parameters['xs_ext_skip'].'#',$a)
																									
																									)
																									
																									)
																									
																									$urls_ext[$a] = $TCZ0YcVp78YOZp5K;
																									
																									}
																									
																									continue;
																									
																									}
																									
																									$y6VpH8bXrPg2jmb = $FZhCnLBSDRN5 ? $a : substr($a,strlen($this->bkFhNzhUv9opP4));
																									
																									$y6VpH8bXrPg2jmb = str_replace(' ', '%20', $y6VpH8bXrPg2jmb);
																									
																									
																									if(
																									
																									$grab_parameters['xs_ref_list_store'] &&
																									
																									($_rlmax = $grab_parameters['xs_ref_list_max'])
																									
																									){
																									
																									
																									if(
																									
																									(isset($ref_links_list[$y6VpH8bXrPg2jmb])
																									
																									|| count($ref_links_list)<$_rlmax)
																									
																									&&    					
																									
																									(count($ref_links_list[$y6VpH8bXrPg2jmb])<max(1,intval($grab_parameters['xs_maxref'])))
																									
																									)
																									
																									{
																									
																									
																									if(!$ref_links_list[$y6VpH8bXrPg2jmb])
																									
																									$ref_links_list[$y6VpH8bXrPg2jmb] = array();
																									
																									if(!in_array($this->DOLUEjG8B6UnIbR, $ref_links_list[$y6VpH8bXrPg2jmb]))
																									
																									$ref_links_list[$y6VpH8bXrPg2jmb][] = $this->DOLUEjG8B6UnIbR;
																									
																									}
																									
																									}
																									
																									
																									if($urls_list_full[$y6VpH8bXrPg2jmb] || !strcmp($y6VpH8bXrPg2jmb, $this->DOLUEjG8B6UnIbR))
																									
																									continue;
																									
																									if($grab_parameters['xs_exclude_check'])
																									
																									{
																									
																									$_f=$_f2=false;
																									
																									$_f=$this->rpf0hMm3s5B1&&preg_match('#('.$this->rpf0hMm3s5B1.')#',$y6VpH8bXrPg2jmb);
																									
																									$_f = $_f || ($_fbot = $this->HQafr74PZizhbMt9h($this->EmYP4RQZ5sVlUA02.$y6VpH8bXrPg2jmb));
																									
																									
																									if($_f)continue;
																									
																									}
																									
																									Y1qFyrFH0Wg53("<u>[$y6VpH8bXrPg2jmb]</u><br>\n",2);//exit;
																									
																									$urls_list2[$y6VpH8bXrPg2jmb]++;
																									
																									if($grab_parameters['xs_maxref'] && count($ref_links[$y6VpH8bXrPg2jmb])<$grab_parameters['xs_maxref'])
																									
																									$ref_links[$y6VpH8bXrPg2jmb][] = $this->DOLUEjG8B6UnIbR;
																									
																									$nt++;
																									
																									}
																									
																									unset($HKItJXfv2IpkFWKN);
																									
																									uSk7q90jdmeIeR565A('llist', true);
																									
																									}
																									
																									}
																									
																									
																									$this->yyEzaq75nN3xOkxB5Z = count($urls_list2);
																									
																									uSk7q90jdmeIeR565A('analyze', true);
																									
																									uSk7q90jdmeIeR565A('post');
																									
																									if(!$f){
																									
																									
																									if($f = $f || !$this->Wgawp9PPP('xs_incl_only', $this->MePjOUuIoiDc($this->DOLUEjG8B6UnIbR), true))
																									
																									$LGV4EeAbzAXby = 'inclonly';
																									
																									}
																									
																									if($_fex['f3']) {
																									
																									$f = true;
																									
																									$LGV4EeAbzAXby = 'noinclmask';
																									
																									}
																									
																									if(!$f)
																									
																									if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt'])
																									
																									{
																									
																									$f = $f||preg_match('#<meta\s*name=[\'"]robots[\'"]\s*content=[\'"][^\'"]*?noindex#is',$cn,$_cm);
																									
																									if($f)$LGV4EeAbzAXby = 'mrob';
																									
																									}
																									
																									if(!$f && !$LGV4EeAbzAXby)
																									
																									{
																									
																									
																									if(!$X8JtNAylCZ) {
																									
																									$X8JtNAylCZ = array(
																									
																									
																									'link' => preg_replace('#//+$#','/', 
																									
																									preg_replace('#^([^/\:\?]/)/+#','\\1', 
																									
																									(preg_match('#^\w+://#',$this->DOLUEjG8B6UnIbR) ? $this->DOLUEjG8B6UnIbR : $this->bkFhNzhUv9opP4 . $this->DOLUEjG8B6UnIbR)
																									
																									))
																									
																									);
																									
																									if($grab_parameters['xs_makehtml']||$grab_parameters['xs_makeror']||$grab_parameters['xs_rssinfo']||$grab_parameters['xs_newsinfo'])
																									
																									{
																									
																									preg_match('#<title[^>]*?>([^<]*?)</title>#is', $QlDIrjacod6EI['content'], $ML8jl66IHjaM8420);
																									
																									$X8JtNAylCZ['t'] = trim(strip_tags($ML8jl66IHjaM8420[1]));
																									
																									}
																									
																									if($grab_parameters['xs_metadesc']||$grab_parameters['xs_videoinfo'])
																									
																									{
																									
																									if(!preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?description[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $XVdOSUuqjOIO3RCo))
																									
																									preg_match('#<meta[^>]*content\s*=\s*["]?([^>\"]*)\s[^>]*(?:http-equiv|name)\s*=\s*"?description#is', $cn, $XVdOSUuqjOIO3RCo);
																									
																									if($XVdOSUuqjOIO3RCo[1])
																									
																									$X8JtNAylCZ['d'] = trim($XVdOSUuqjOIO3RCo[1]);
																									
																									}
																									
																									if($grab_parameters['xs_makeror']||$grab_parameters['xs_autopriority'])
																									
																									$X8JtNAylCZ['o'] = max(0,$this->links_level);
																									
																									if($I4vpcwjEN5Au6yqs)
																									
																									$X8JtNAylCZ['p'] = $I4vpcwjEN5Au6yqs;
																									
																									if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?last-modified[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $XVdOSUuqjOIO3RCo)){
																									
																									$X8JtNAylCZ['clm'] = str_replace('@',' ',$XVdOSUuqjOIO3RCo[1]);
																									
																									}
																									
																									if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?priority[^>]*content\s*=\s*["]?([\d\.]+)#is', $cn, $XVdOSUuqjOIO3RCo)){
																									
																									$X8JtNAylCZ['p'] = $XVdOSUuqjOIO3RCo[1];
																									
																									}
																									
																									if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?changefreq[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $XVdOSUuqjOIO3RCo)){
																									
																									$X8JtNAylCZ['f'] = $XVdOSUuqjOIO3RCo[1];
																									
																									}else
																									
																									if(preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?revisit-after[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $XVdOSUuqjOIO3RCo)){
																									
																									if(preg_match('#(\d+)\s*hour#',$XVdOSUuqjOIO3RCo[1])){
																									
																									$X8JtNAylCZ['f'] = 'hourly';
																									
																									}
																									
																									if(preg_match('#(\d+)\s*month#',$XVdOSUuqjOIO3RCo[1])){
																									
																									$X8JtNAylCZ['f'] = 'monthly';
																									
																									}
																									
																									if(preg_match('#(\d+)\s*day#',$XVdOSUuqjOIO3RCo[1], $XVdOSUuqjOIO3RCo)){
																									
																									$d = $XVdOSUuqjOIO3RCo[1]+0;
																									
																									if($d<4)$X8JtNAylCZ['f'] = 'daily';
																									
																									else
																									
																									if($d<22)$X8JtNAylCZ['f'] = 'weekly';
																									
																									else
																									
																									$X8JtNAylCZ['f'] = 'monthly';
																									
																									}
																									
																									}
																									
																									
																									if(preg_match('#'.$Y03xTjpD03URLod0.'#',$this->MePjOUuIoiDc($this->DOLUEjG8B6UnIbR),$zCujrt7MupJtVA))
																									
																									{
																									
																									for($_i=0;$_i<count($zCujrt7MupJtVA);$_i++)
																									
																									{
																									
																									if($zCujrt7MupJtVA[$_i+1])
																									
																									break;
																									
																									}
																									
																									if($wPZewNPRf[$_i]) {
																									
																									if(!$X8JtNAylCZ['clm'])
																									
																									$X8JtNAylCZ['clm'] = $wPZewNPRf[$_i]['lm'];
																									
																									if(!$X8JtNAylCZ['f'])
																									
																									$X8JtNAylCZ['f'] = $wPZewNPRf[$_i]['f'];
																									
																									$X8JtNAylCZ['p'] = $wPZewNPRf[$_i]['p'];
																									
																									}
																									
																									}
																									
																									$xz = 'img';
																									
																									if($grab_parameters['xs_imginfo'])
																									
																									{
																									
																									$_imgext = '(?:jpg|png|gif|jpeg|bmp)';
																									
																									preg_match_all('#<(?:img|div)[^>]*?(?:src|data-(?:image|thumbnail))(?:set)?\s*=\s*("([^">]+)|\'([^\'>]+)|([^\s\"\\\\>]+))(.*?>)#is', $cn, $IhQkkSUgvj, PREG_SET_ORDER);
																									
																									preg_match_all('#<a[^>]*\shref\s*=\s*[\'"]?([^>\'" ]*?\.'.$_imgext.')([\'" ][^>]*?>|>)#is', $cn, $kRH7ebqvErCU7_, PREG_SET_ORDER);
																									
																									$urj9gizLciVTHRbGo = array();
																									
																									
																									$ai = $ae = array();
																									
																									$IhQkkSUgvj = array_merge($IhQkkSUgvj, $kRH7ebqvErCU7_, $urj9gizLciVTHRbGo);
																									
																									$_maxi = $grab_parameters['xs_img_maxperpage'];
																									
																									if(!$_maxi)$_maxi = 1000;
																									
																									foreach($IhQkkSUgvj as $im)
																									
																									{
																									
																									$_il = array($im[1]);
																									
																									if(strstr($im[0],'srcset')){
																									
																									$_il = preg_split('#(\s*,\s*|\s+[^\./]+\s*)#', $im[1]);
																									
																									}
																									
																									foreach($_il as $_ili)
																									
																									if($_ili)
																									
																									{
																									
																									$_im1 = trim(preg_replace('#^[\'\"]+#','',$_ili));
																									
																									$FZhCnLBSDRN5 = $this->cNb13B8Lppddrz($_im1, $this->DOLUEjG8B6UnIbR, 
																									
																									$grab_parameters['xs_img_allow_domains']);
																									
																									if($FZhCnLBSDRN5 == 1) 
																									
																									continue;
																									
																									if($grab_parameters['xs_imgincmask'])
																									
																									if(!$this->Wgawp9PPP('xs_imgincmask', $_im1, true))
																									
																									continue;
																									
																									$RbZex9ppJ = $this->EmYP4RQZ5sVlUA02.substr($_im1,strlen($this->bkFhNzhUv9opP4));
																									
																									if($FZhCnLBSDRN5 != 2) 
																									
																									{
																									
																									if($this->HQafr74PZizhbMt9h($RbZex9ppJ))
																									
																									continue;
																									
																									}
																									
																									if(!$this->rpf0hMm3s5B1||!@preg_match('#('.$this->rpf0hMm3s5B1.')#',$RbZex9ppJ))
																									
																									{
																									
																									if(!$imlist[md5($_im1)]++)
																									
																									{
																									
																									preg_match('#(?:title|alt)=[\'"](.*?)[\'"]#i', $im[0], $tm);
																									
																									$t =$tm[1];
																									
																									$ai[] = array($_im1, $t);
																									
																									}
																									
																									}
																									
																									if(count($ai) >= $_maxi)break;
																									
																									}
																									
																									if($ai){
																									
																									$X8JtNAylCZ['i'] = $ai;
																									
																									$this->eCdiJHpPdpI9a9x['i'] += count($ai);
																									
																									}
																									
																									}
																									
																									}
																									
																									$xz = '/img';
																									
																									$xz = 'video';
																									
																									if($grab_parameters['xs_videoinfo'])
																									
																									{
																									
																									
																									$k8e4W6s5Gv = array(
																									
																									'(?:https?\:)?//www.youtube(?:-nocookie)?.com/(?:v/|embed/|watch\?v=)',
																									
																									'(?:https?\:)?//youtu\.be/',
																									
																									'(?:https?\:)?//video.google.com/googleplayer\.swf\?docid=',
																									
																									'(?:https?\:)?//(?:player\.)?vimeo.com/(?:video/|moogaloop\.swf\?clip_id=)',
																									
																									'(?:https?\:)?//www.dailymotion.com/(?:embed|swf)/video/',
																									
																									'(?:https?\:)?//(?:media.mtvnservices.com|www.mtv.com/player/)[^>]*?vid(?:=|%3D)',
																									
																									'(?:https?\:)?//blip.tv/play/',    				
																									
																									'(?:https?\:)?//network.coull.com/(?:embediframe/|embed)\?v='
																									
																									);
																									
																									
																									
																									$k8e4W6s5Gv = '(?:'. implode('|', $k8e4W6s5Gv).')';
																									
																									
																									$A3NAtuGvCw = '[a-z0-9\-\_]';
																									
																									$k8e4W6s5Gv = '('.$k8e4W6s5Gv.'('.$A3NAtuGvCw.'+))';
																									
																									
																									preg_match_all('#<param[^>]*name=[\'"\s]*?(?:movie|src)[^>]*value=[\'"\s]*?'.$k8e4W6s5Gv.'([^>\'"]*)#is', $cn, $IhQkkSUgvj, PREG_SET_ORDER);
																									
																									preg_match_all('#flashvars\s*=\s*\{[^\}]*?file:\s*[\'"]'.$k8e4W6s5Gv.'#is', $cn, $Kxl6hZGu3ez, PREG_SET_ORDER);
																									
																									preg_match_all('#<(?:embed|script)[^>]*src=[\'"\s]*?'.$k8e4W6s5Gv.'([^>\'"]*)#is', $cn, $FYyqjOozx, PREG_SET_ORDER);
																									
																									preg_match_all('#<(?:iframe|video)[^>]*src=[^>]*?'.$k8e4W6s5Gv.'([^>\'"]*)#is', $cn, $v8PlXiAvMzoI, PREG_SET_ORDER);
																									
																									preg_match_all('#<[^>]*(?:href|data-path)=[^>]*?'.$k8e4W6s5Gv.'([^>\'"]*)#is', $cn, $lQQ3OGHNrN6C3Tk, PREG_SET_ORDER);
																									
																									preg_match_all('#file\"\s*\:\s*\[\'"]'.$k8e4W6s5Gv.'#is', $cn, $CozzCCWhB, PREG_SET_ORDER);
																									
																									preg_match_all('#\.addVariable\([\'\"]file[\'\"],[\'\"]'.$k8e4W6s5Gv.'#is', $cn, $t, PREG_SET_ORDER);
																									
																									$ai = $ae = $K2gdoNsllycNdodxSYP = array();
																									
																									preg_match_all('#jwplayer\([^\)]*?\)\.setup\(\{(.*?)\}\)#is', $cn, $ps);
																									
																									if($ps && $ps[1]) {
																									
																									foreach($ps[1] as $QItJGRmfTqoxhzim){
																									
																									if(
																									
																									preg_match('#\"provider\"\s*\:\s*\"youtube\"#is', $QItJGRmfTqoxhzim, $m1)
																									
																									&& preg_match('#\"file\"\s*\:\s*\"[^\"]*?(?:v=)?('.$A3NAtuGvCw.'+)#is', $QItJGRmfTqoxhzim, $m2)
																									
																									){
																									
																									preg_match('#\"image\"\s*\:\s*\"([^\"]+)#is', $QItJGRmfTqoxhzim, $m3);
																									
																									$_th = $m3 ? $m3[1] : '';
																									
																									if($_th)
																									
																									$this->cNb13B8Lppddrz($_th, $this->DOLUEjG8B6UnIbR);
																									
																									$K2gdoNsllycNdodxSYP[] = array(
																									
																									'',
																									
																									'http://www.youtube.com/watch?v='.$m2[1],
																									
																									$m2[1],
																									
																									'',
																									
																									$X8JtNAylCZ['t'],
																									
																									$X8JtNAylCZ['d'],
																									
																									$_th
																									
																									);
																									
																									}
																									
																									}
																									
																									}
																									
																									$IhQkkSUgvj = array_merge($IhQkkSUgvj,$FYyqjOozx,$v8PlXiAvMzoI,$Kxl6hZGu3ez, $lQQ3OGHNrN6C3Tk, $CozzCCWhB, $K2gdoNsllycNdodxSYP, $t);
																									
																									preg_match_all('#<[^>]*id="video".*?>(.*?)</div>#is', $cn, $ps);
																									
																									if($ps && $ps[1]) {
																									
																									foreach($ps[1] as $QItJGRmfTqoxhzim){
																									
																									if(
																									
																									
																									
																									preg_match('#<[^>]*href="(.*?)"[^>]*data-type="video"#is', $QItJGRmfTqoxhzim, $m_l)
																									
																									&& preg_match('#<img[^>]*src="(.*?)"#is', $QItJGRmfTqoxhzim, $m_i)
																									
																									){
																									
																									$_th = $m_i[1];
																									
																									$this->cNb13B8Lppddrz($_th, $this->DOLUEjG8B6UnIbR);
																									
																									$this->cNb13B8Lppddrz($m_l[1], $this->DOLUEjG8B6UnIbR);
																									
																									$ai[] = array(
																									
																									'title' => strip_tags($X8JtNAylCZ['t']),
																									
																									'playerloc' => $m_l[1],
																									
																									'thumb' => $_th,
																									
																									'desc' => strip_tags($X8JtNAylCZ['d']),
																									
																									);
																									
																									}
																									
																									}
																									
																									}
																									
																									$ps = preg_split('#<[^>]*itemtype=\"http\:\/\/schema\.org\/VideoObject\"#is', $cn);
																									
																									if(count($ps)>1) {
																									
																									$bkihCg0ejQFJ9 = array();
																									
																									foreach($ps as $pp){
																									
																									if(
																									
																									(preg_match('#<[^>]*itemprop=\"name\"[^>]*content="([^>]*?)"#is', $pp, $m1)
																									
																									||preg_match('#<[^>]*itemprop=\"name\"[^>]*?>(.*?)<#is', $pp, $m1)
																									
																									)
																									
																									&& preg_match('#<[^>]*itemprop=\"(?:(?:content|embed)(?:url)?)\"[^>]*content="([^>]*?)"#is', $pp, $m2)
																									
																									&& preg_match('#<[^>]*itemprop=\"thumbnail(?:url)?\"[^>]*content="([^>]*?)"#is', $pp, $m3)
																									
																									){
																									
																									
																									preg_match('#<[^>]*itemprop=\"duration\"[^>]*content="([^>]*?)"#is', $pp, $m11);
																									
																									if(!preg_match('#<[^>]*itemprop=\"description\"[^>]*?content="([^>]*?)"#is', $pp, $m4))
																									
																									preg_match('#<[^>]*itemprop=\"description\"[^>]*?>(.*?)</(div|h|p)#is', $pp, $m4);
																									
																									$kuDTF_IlS1 = $m11[1];
																									
																									if(preg_match('#T(?:([\d\.]+)H)?(?:([\d\.]+)M)?([\d\.]+)S#i', $kuDTF_IlS1, $dm)) {
																									
																									$kuDTF_IlS1 = $dm[3] + $dm[2]*60 + $dm[1]*3600;;
																									
																									}
																									
																									$this->cNb13B8Lppddrz($m2[1], $this->DOLUEjG8B6UnIbR, true);
																									
																									$this->cNb13B8Lppddrz($m3[1], $this->DOLUEjG8B6UnIbR, true);
																									
																									$bkihCg0ejQFJ9[] = array(
																									
																									'title' => strip_tags($m1[1]),
																									
																									'playerloc' => $m2[1],
																									
																									'thumb' => $m3[1],
																									
																									'desc' => strip_tags(preg_replace('#<br.*?>#', "\n", ($m4 ? $m4[1] : ($X8JtNAylCZ['d'] ? $X8JtNAylCZ['d'] : $m1[1])))),
																									
																									'dur' => $kuDTF_IlS1,
																									
																									);
																									
																									if(preg_match('#'.$k8e4W6s5Gv.'#is', $m2[1], $_lm))
																									
																									$imlist[md5(trim($_lm[2]))]++;
																									
																									}
																									
																									}
																									
																									if($bkihCg0ejQFJ9){
																									
																									$ai = $bkihCg0ejQFJ9;
																									
																									
																									
																									
																									}
																									
																									}
																									
																									preg_match_all('#<script[^>]*application/ld\+json[^>]*>(.+?)</script>#is', $cn, $ps);
																									
																									if(count($ps)>1) {
																									
																									$bkihCg0ejQFJ9 = array();
																									
																									foreach($ps[1] as $pp){
																									
																									$nUe0qU78gun = json_decode($pp, true);
																									
																									foreach($nUe0qU78gun as $k=>$v)$nUe0qU78gun[strtolower($k)] = $v;
																									
																									if(
																									
																									($nUe0qU78gun['@type'] == 'VideoObject')
																									
																									&& $nUe0qU78gun['embedurl']
																									
																									&& $nUe0qU78gun['thumbnailurl']
																									
																									){
																									
																									
																									preg_match('#\"duration\"\s*\:\s*\"(.*?)\"#is', $pp, $m11);
																									
																									preg_match('#\"description\"\s*\:\s*\"(.*?)\"#is', $pp, $m4);
																									
																									$kuDTF_IlS1 = $nUe0qU78gun['duration'];
																									
																									if(preg_match('#T(?:([\d\.]+)H)?(?:([\d\.]+)M)?([\d\.]+)S#i', $kuDTF_IlS1, $dm)) {
																									
																									$kuDTF_IlS1 = $dm[3] + $dm[2]*60 + $dm[1]*3600;;
																									
																									}
																									
																									$this->cNb13B8Lppddrz($m2[1], $this->DOLUEjG8B6UnIbR, true);
																									
																									$this->cNb13B8Lppddrz($m3[1], $this->DOLUEjG8B6UnIbR, true);
																									
																									$bkihCg0ejQFJ9[] = array(
																									
																									'title' => strip_tags($nUe0qU78gun['name']),
																									
																									'playerloc' => $nUe0qU78gun['embedurl'],
																									
																									'thumb' => $nUe0qU78gun['thumbnailurl'],
																									
																									'desc' => strip_tags($nUe0qU78gun['description']),
																									
																									'dur' => $kuDTF_IlS1,
																									
																									);
																									
																									if(preg_match('#'.$k8e4W6s5Gv.'#is', $nUe0qU78gun['embedurl'], $_lm))
																									
																									$imlist[md5(trim($_lm[2]))]++;
																									
																									}
																									
																									}
																									
																									if($bkihCg0ejQFJ9){
																									
																									$IhQkkSUgvj = array();
																									
																									$ai = $bkihCg0ejQFJ9;
																									
																									}
																									
																									}
																									
																									if(preg_match('#<meta[^>]*property="og:type"[^>]*content="video#is', $cn)) {
																									
																									preg_match('#<meta[^>]*property="og:duration"[^>]*content="(.*?)"#is', $cn, $m1 );
																									
																									preg_match('#<meta[^>]*property="og:url"[^>]*content="(.*?)"#is', $cn, $m2 );
																									
																									preg_match('#<meta[^>]*property="og:image"[^>]*content="(.*?)"#is', $cn, $m3 );
																									
																									preg_match('#<meta[^>]*property="og:title"[^>]*content="(.*?)"#is', $cn, $m4 );
																									
																									preg_match('#<meta[^>]*property="og:description"[^>]*content="(.*?)"#is', $cn, $m5 );
																									
																									if($m1&& $m2&& $m3&& $m4) {
																									
																									$xGYLdaKGmo5z = explode(':', $m1[1]);
																									
																									$kuDTF_IlS1 = $xGYLdaKGmo5z[0]*60+$xGYLdaKGmo5z[1];
																									
																									if(count($xGYLdaKGmo5z)==3)
																									
																									$kuDTF_IlS1 = $kuDTF_IlS1*60+$kuDTF_IlS1[2];
																									
																									$IhQkkSUgvj = $ai = array();
																									
																									$ai[] = array(
																									
																									'thumb' => $m3[1],
																									
																									'title' => $m4[1],
																									
																									'desc' => $m5?$m5[1]:$m4[1],
																									
																									'dur' => $kuDTF_IlS1,
																									
																									'playerloc' => $m2[1],
																									
																									);
																									
																									if(preg_match('#'.$k8e4W6s5Gv.'#is', $m2[1], $_lm))
																									
																									$imlist[md5(trim($_lm[2]))]++;
																									
																									}
																									
																									}
																									
																									foreach($IhQkkSUgvj as $im)
																									
																									{
																									
																									$_i5 = md5(trim($im[2]));
																									
																									$imlist[$_i5]++;
																									
																									if(!$imlist2[$_i5]++){
																									
																									array_shift($im);
																									
																									
																									$ai[] = $im;
																									
																									}
																									
																									}
																									
																									
																									if($ai){
																									
																									$X8JtNAylCZ['v'] = $ai;
																									
																									$this->eCdiJHpPdpI9a9x['v'] += count($ai);
																									
																									}
																									
																									if(function_exists('xml_extra_video_step1'))
																									
																									xml_extra_video_step1($X8JtNAylCZ, $cn, $imlist);
																									
																									}
																									
																									$xz = '/video';
																									
																									if($grab_parameters['xs_hreflang']){
																									
																									if(
																									
																									preg_match_all('#<link[^>]*rel\s*=\s*"alternate"[^>]*>#is', $cn, $XsN8sUfLWDkOwk, PREG_SET_ORDER)
																									
																									){
																									
																									$_la = array();
																									
																									foreach($XsN8sUfLWDkOwk as $_alt1){
																									
																									if(preg_match('#\s(hreflang|media)\s*=\s*"([^">]*?)"[^>]*>#is', $_alt1[0], $_alt)
																									
																									&& preg_match('#\s*href\s*=\s*[\'"]([^>]*?)[\'"]#is', $_alt1[0], $_hm)
																									
																									)
																									
																									$_la[] = array('t' => $_alt[1], 'l' => $_alt[2], 'u' => $_hm[1]);
																									
																									}
																									
																									$X8JtNAylCZ['hl'] = $_la;
																									
																									}
																									
																									}
																									
																									if($grab_parameters['xs_lastmod_notparsed'] && $f2)
																									
																									{
																									
																									$QlDIrjacod6EI = $BMbehimV7yzhTAnB->fetch($TCZ0YcVp78YOZp5K, 0, 1, false, "", array('req'=>'HEAD'));
																									
																									}
																									
																									if(!$X8JtNAylCZ['lm'] && isset($QlDIrjacod6EI['headers']['last-modified']))
																									
																									$X8JtNAylCZ['lm'] = $QlDIrjacod6EI['headers']['last-modified'];
																									
																									}
																									
																									if(!$X8JtNAylCZ['lm'] && 
																									
																									preg_match('#<meta[^>]*?name\s*=\s*\"TACH-Filing-Date\" content\s*=\s*"?([^">]*)"#is',$QlDIrjacod6EI['content'], $hIdLm72zHqja8VfH))
																									
																									$X8JtNAylCZ['lm'] = $hIdLm72zHqja8VfH[1];
																									
																									uSk7q90jdmeIeR565A('post', true);
																									
																									uSk7q90jdmeIeR565A('post-save1');
																									
																									Y1qFyrFH0Wg53("\n((include ".$X8JtNAylCZ['link']."))<br />\n");
																									
																									$b454ZQeWx = true;
																									
																									if($grab_parameters['xs_memsave'])
																									
																									{
																									
																									Qg9JXhBg7s($uEDtK97iHl5VTo5hy, $X8JtNAylCZ);
																									
																									$urls_completed[] = $uEDtK97iHl5VTo5hy;
																									
																									}else
																									
																									$urls_completed[] = serialize($X8JtNAylCZ);
																									
																									$this->v6EDx10Q4VaXJj++;
																									
																									
																									uSk7q90jdmeIeR565A('post-save1',true);
																									
																									uSk7q90jdmeIeR565A('post-save2');
																									
																									if($grab_parameters['xs_prev_sm_base']
																									
																									&& $uzeH6XHCKkzxDvzJ &&
																									
																									preg_match('#('.$uzeH6XHCKkzxDvzJ.')#',$this->DOLUEjG8B6UnIbR)){
																									
																									$sm_base[$this->DOLUEjG8B6UnIbR] = $X8JtNAylCZ;
																									
																									}
																									
																									$L4mLqYhIAiYjTbXKzE = $this->f0SvwzVrPSVgca5fQ - $this->v6EDx10Q4VaXJj;
																									
																									uSk7q90jdmeIeR565A('post-save2',true);
																									
																									
																									}
																									
																									}while(false);// zerowhile
																									
																									uSk7q90jdmeIeR565A('post-progress1');
																									
																									if($this->url_ind>=$this->cnu)
																									
																									{
																									
																									unset($urls_list);
																									
																									$this->url_ind = 0;
																									
																									$urls_list = $urls_list2;
																									
																									
																									$urls_list_full += $urls_list;
																									
																									$this->cnu = count($urls_list);
																									
																									unset($ref_links2);
																									
																									$ref_links2 = $ref_links;
																									
																									unset($ref_links); unset($urls_list2);
																									
																									$ref_links = array();
																									
																									$urls_list2 = array();
																									
																									$this->links_level++;
																									
																									Y1qFyrFH0Wg53("\n<br>NEXT LEVEL:$this->links_level<br />\n");
																									
																									}
																									
																									if(!$b454ZQeWx){
																									
																									
																									Y1qFyrFH0Wg53("\n({skipped ".$this->DOLUEjG8B6UnIbR." - $LGV4EeAbzAXby})<br />\n");
																									
																									if(!$grab_parameters['xs_chlog_list_max'] ||
																									
																									count($urls_list_skipped) < $grab_parameters['xs_chlog_list_max']) {
																									
																									$urls_list_skipped[$this->DOLUEjG8B6UnIbR] = $LGV4EeAbzAXby;
																									
																									}
																									
																									}
																									
																									uSk7q90jdmeIeR565A('post-progress1',true);
																									
																									uSk7q90jdmeIeR565A('post-progress2');
																									
																									$this->pn++;
																									
																									oE9dBNjn0hHPEIxcl();
																									
																									$this->pl=min($this->cnu - $this->url_ind,$L4mLqYhIAiYjTbXKzE);
																									
																									$HHUIEjSFr65XvbO = ($this->v6EDx10Q4VaXJj>=$this->f0SvwzVrPSVgca5fQ) || ($this->url_ind >= $this->cnu);
																									
																									if(!$EbJQzReVy1kXGzRI) {
																									
																									
																									if($EbJQzReVy1kXGzRI = vlFjdpHNBgwv5SbZw()){
																									
																									if(!@SwIPpM21WDqv($EbJQzReVy1kXGzRI))
																									
																									$EbJQzReVy1kXGzRI=0;
																									
																									}
																									
																									}
																									
																									uSk7q90jdmeIeR565A('post-progress2',true);
																									
																									uSk7q90jdmeIeR565A('post-progress3');
																									
																									$progpar = $this->J1aZ1U_EhNDVvG(false, $HHUIEjSFr65XvbO||$EbJQzReVy1kXGzRI);
																									
																									uSk7q90jdmeIeR565A('post-progress3',true);
																									
																									uSk7q90jdmeIeR565A('post-progress4');
																									
																									if($grab_parameters['xs_exec_time'] && 
																									
																									((time()-$jsnXB2aVs8qQ) > $grab_parameters['xs_exec_time']) ){
																									
																									$EbJQzReVy1kXGzRI = 'Time limit exceeded - '.($grab_parameters['xs_exec_time']).' - '.(time()-$jsnXB2aVs8qQ);
																									
																									}
																									
																									if($grab_parameters['xs_savestate_time']>0 &&
																									
																									( 
																									
																									($this->ctime-$up2v2qKUD>$grab_parameters['xs_savestate_time'])
																									
																									|| $HHUIEjSFr65XvbO
																									
																									|| $EbJQzReVy1kXGzRI
																									
																									)
																									
																									)
																									
																									{
																									
																									$up2v2qKUD = $this->ctime;
																									
																									Y1qFyrFH0Wg53("(saving dump)<br />\n");
																									
																									$GgTdwek2adLV9c = array();
																									
																									$A2oFMCziPL7 = array(
																									
																									'url_ind',
																									
																									'urls_list','urls_list2','cnu',
																									
																									'ref_links','ref_links2','ref_links_list',
																									
																									'urls_list_full','urls_completed',
																									
																									'urls_404',
																									
																									'nt','tsize','pn','links_level','ctime', 'urls_ext','fetch_no',
																									
																									'starttime', 'retrno', 'nettime', 'urls_list_skipped',
																									
																									'imlist', 'imlist2', 'progpar', 'runstate', 'sm_base', 'sm_sessions'
																									
																									);
																									
																									foreach($A2oFMCziPL7 as $k){
																									
																									$GgTdwek2adLV9c[$k] = isset($this->$k) ? $this->$k : $$k;
																									
																									}
																									
																									$GgTdwek2adLV9c['time']=time();
																									
																									$SeiE5ilOiKyJYMhaQ=AEks4EOfaorM1XL($GgTdwek2adLV9c);
																									
																									tRsLQ5oUyNb5(Nivf2Dt1sV,$SeiE5ilOiKyJYMhaQ,TuLXmMBFSKj5mt,true);
																									
																									unset($GgTdwek2adLV9c);
																									
																									unset($SeiE5ilOiKyJYMhaQ);
																									
																									}
																									
																									if($grab_parameters['xs_delay_req'] && $grab_parameters['xs_delay_ms'] &&
																									
																									(($TuEwF9Ritr%$grab_parameters['xs_delay_req'])==0))
																									
																									{
																									
																									sleep(intval($grab_parameters['xs_delay_ms']));
																									
																									}
																									
																									uSk7q90jdmeIeR565A('post-progress4', true);
																									
																									}while(!$HHUIEjSFr65XvbO && !$EbJQzReVy1kXGzRI);
																									
																									Y1qFyrFH0Wg53("\n\n<br><br>Crawling completed<br>\n");
																									
																									if($_GET['ddbgexit']){
																									
																									echo '<hr><hr><h2>Dbg exit</h2>';
																									
																									echo $BMbehimV7yzhTAnB->fJoL60i7iYf7GH6yW.' / '.$BMbehimV7yzhTAnB->nettime.'<hr>';
																									
																									echo NpJgovXJ0kAS().'<hr>';
																									
																									exit;
																									
																									}
																									
																									return array(
																									
																									'u404'=>$urls_404,
																									
																									'ref_links_list'=>$ref_links_list,
																									
																									'starttime'=>$starttime,
																									
																									'topmu' => $STOFDIS0uk,
																									
																									'ctime'=>$this->ctime,
																									
																									'tsize'=>$this->tsize,
																									
																									'retrno' => $retrno,
																									
																									'nettime' => $this->nettime,
																									
																									'errmsg'=>'',
																									
																									'initurl'=>$this->P544ar4HSneEHQkym,
																									
																									'initdir'=>$this->bkFhNzhUv9opP4,
																									
																									'ucount'=>$this->v6EDx10Q4VaXJj,
																									
																									'crcount'=>$this->pn,
																									
																									'fetch_no'=>$this->fetch_no,
																									
																									'time'=>time(),
																									
																									'params'=>$this->ybU_ViMnsXh,
																									
																									'sm_sessions'=>$this->sm_sessions,
																									
																									'interrupt'=>$EbJQzReVy1kXGzRI,
																									
																									'runstate' => $runstate,
																									
																									'sm_base' => $sm_base,
																									
																									'urls_ext'=>$urls_ext,
																									
																									'urls_list_skipped' => $urls_list_skipped,
																									
																									'max_reached' => $this->v6EDx10Q4VaXJj>=$this->f0SvwzVrPSVgca5fQ
																									
																									);
																									
																									}
																									
																									}
																									
																									$AytXoOMaBW5POdJt1 = new SiteCrawler();
																									
																									function zYZyfiVzd5nnQ(){
																									
																									@SwIPpM21WDqv(TuLXmMBFSKj5mt.K4_KgxUWZs3RY8W);
																									
																									if(@file_exists(TuLXmMBFSKj5mt.xG52MBct6dseMt))
																									
																									@rename(TuLXmMBFSKj5mt.xG52MBct6dseMt,TuLXmMBFSKj5mt.K4_KgxUWZs3RY8W);
																									
																									}
																									
																									



































































































