<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$FcScq19039001gLIKM=83345550;$GNDww62511902ymbgL=451751190;$OhBZH77684021PjsMj=22127532;$nOmOG56117859JishZ=449068329;$JykWy34375915YAMMx=889667328;$QNcuh94020691wmdYr=1518280;$fpZTg91614685fHAMP=937714936;$uiZUP18720398lGURW=357851044;$EHpaW91900330wlpkz=416020355;$Tvyvs32716980WkWxQ=768816620;$Htxwu57732849qnkNK=573333588;$uyaFv68510437hyhsg=485165009;$pxHXf11612243WFlvB=660404633;$MzZNh58600769UPtOe=755646210;$rBQpd66038513DccCa=926983490;$bQVpw25487976XojTy=831010224;$OMCiv63511658iTtUi=623820160;$HGJKw81672058dSMxL=961007050;$jGkeA26531677KRnDR=999664643;$icTFn69653015iBRde=396386688;$qROuZ67598572SYFHC=306266937;$AIKPU11930847YKkTv=385899139;$jTQIJ29212341KBaLx=791377045;$oHaUH21005554Nvkmr=180294403;$pyqDP23872985USzZg=706744965;$fMGZt29377136msDhh=29322479;$racBN74080506DEtEF=302120697;$WTkPZ59545593xIjil=182733368;$pYBjS22334900QfGNk=826254242;$tFVgz44010925BIJxo=890277069;$HyXNE71136170MaOzF=530895599;$jXoBA95273133cTTgc=403703583;$etmzs62984314mNwqG=664794769;$ktoCW55832214wLqqp=970762909;$fFMKb20379333gxtox=478701752;$fIlvO38188171wjgAK=843205048;$HWUjo55821228RZueV=222366546;$LSQHQ64841004PbUtg=270779999;$OmOpK11809997IIaCT=145539154;$LZsid68290711jYdVu=502237762;$fVsFa90845642JNewO=497969574;$WeBDs71037293VVTUm=788328339;$XuVad45428162yunIz=530407806;$vTRrD95580750ePLbU=379801727;$PdOtZ78057556qdSMM=492603851;$PJnyq74421082GuXIG=525407928;$BJFhh31233825ODcsH=634307709;$WHXlo30058288vmvbk=475896942;$VORyJ17456970aAnCC=206269378;$lXyYW74992371keEuo=481018768;?><?php 
$_SESSION['is_admin'] =  

	 (!$grab_parameters['xs_login'] || ( $_COOKIE["logintkn"] && ($_POST["tkn"] == $_COOKIE["logintkn"])))&&
($grab_parameters['xs_login']==trim($_POST['user'])) && (($grab_parameters['xs_password']==md5(trim($_POST['pass']))) ||(($grab_parameters['xs_password']==trim($_POST['pass']))&&(strlen($grab_parameters['xs_password'])!=32)) ) ; if($_POST['user']) setcookie('sm_log',md5($_POST['user']).'-'.md5($_POST['pass'])); if(!$_SESSION['is_admin']) { define('BK2AXP6fR',1); include Il2qN32A6EeND.'page-top.inc.php'; ?>
																											<div id="sidenote">
																											</div>
																											<div id="shifted">
																											<h2>Login</h2>
																											<?php 
$token = md5(rand(1E10,1E12));
setcookie("logintkn", $token, time() + 60 * 60 * 24);
if($_POST['user']) echo '<div class="block2head">Login incorrect</div>'; ?>
																											<form action="index.<?php echo $jDyVj7CkPgy?>?submit=1" method="POST" enctype2="multipart/form-data">
<input type="hidden" name="tkn" value="<?php echo $token;?>">
																											<div class="inptitle">Username:</div>
																											<input type="text" name="user" size="30" value="">
																											<div class="inptitle">Password:</div>
																											<input type="password" name="pass" size="30" value="">
																											<div class="inptitle">
																											<input class="button" type="submit" name="login" value="Login" style="width:150px;height:30px">
																											</div>
																											</form>
																											</div>
																											<?php include Il2qN32A6EeND.'page-bottom.inc.php'; } 



































































































