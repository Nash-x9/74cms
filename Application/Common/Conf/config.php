<?php
return array (
  'MODULE_ALLOW_LIST' => array ('Home','Admin','Weixin','Mobile','Apk','Jobfair','Mall','Store','Parttime','Gworker','House'),
  'MODULE_DENY_LIST' => array ('Common'),
  'DEFAULT_MODULE' => 'Home',
  'TAGLIB_PRE_LOAD' => 'qscms',
  'DEFAULT_FILTER' => 'htmlspecialchars,stripslashes,strip_tags',
  'TMPL_ACTION_SUCCESS' => 'public:showmsg',
  'TMPL_ACTION_ERROR' => 'public:showmsg',
  'LANG_SWITCH_ON' => true,
  'DEFAULT_LANG' => 'zh-cn',
  'LANG_AUTO_DETECT' => true,
  'LANG_LIST' => 'zh-cn',
  'LOAD_EXT_CONFIG' => 'url,db,cache,tags,sub_domain,pwdhash,html_cache',
  'CRON_ON' => true,
  'DATA_CACHE_SUBDIR' => true,
  'DATA_PATH_LEVEL' => 3,
  'TMPL_DETECT_THEME' => true,
  'APP_SUB_DOMAIN_DEPLOY' => true,
  'TOKEN_ON' => false,
  'TOKEN_NAME' => '__hash__',
  'TOKEN_TYPE' => 'md5',
  'TOKEN_RESET' => true,
  'DB_FIELDTYPE_CHECK' => true,
  'OUTPUT_ENCODE' => true,
  'PWD_ENCRYPT_METHOD' => 0,
);
?>