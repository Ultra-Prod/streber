<?php if(!function_exists('startedIndexPhp')) { header("location:../index.php"); exit;}

/**
* Edit this file to overwrite streber-settings
*
* use confChange('NAME', 'Value'); 
*
* read http://www.streber-pm.org/3719  or have a look at conf/conf.inc
*/

confChange('LOG_LEVEL', LOG_MESSAGE_ALL);
confChange('DISPLAY_ERROR_LIST', 'DETAILS');
#confChange('CHECK_IP_ADDRESS', true);
#confChange('USE_MOD_REWRITE', true);
#confChange('USE_PROFILER', true);
confChange('STOP_IF_INSTALL_DIRECTORY_EXISTS', false);
#confChange('LINK_STAR_LIGHT', true);		# syntaxhighlighting for Gheckobased browsers

### uncomment the following line if you upgraded from mySQL 4
#confChange('DB_USE_UTF8_ENCODING',true);

#confChange('EMAIL_ADMINISTRATOR','mail.somedomain.de');
#confChange('SMTP','mail.yourdomain.de');
#confChange('ANONYMOUS_USER', 7);
#confChange('REGISTER_NEW_USERS', true);
#confChange('REGISTER_NEW_USERS_TO_PROJECT', 10);

#function postInitCustomize() 
#{
#    global $PH;
#    $PH->hash['projView']->req= 'pages/custom_projView.inc.php';
#    $PH->hash['projViewFiles']->req= 'pages/custom_projViewFiles.inc.php';
#}

confChange('TASKDETAILS_IN_SIDEBOARD', true);
?>