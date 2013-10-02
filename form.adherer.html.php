<?php 
/**
 * Plugin adhesion
 *
 * @version	1.4
 * @date	02/10/2013
 * @author	Stephane F, Cyril MAGUIRE
 **/
 if(!defined('PLX_ROOT')) exit;

$plxMotor = plxMotor::getInstance();
$plxPlugin=$plxMotor->plxPlugins->getInstance('adhesion');
?>
<?php if ($plxPlugin->getParam('desc_adhesion') != str_replace("'","’",$plxPlugin->getLang('L_DEFAULT_DESC'))) echo htmlspecialchars_decode($plxPlugin->getParam('desc_adhesion'));?>