<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2019 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Fri, 16 Aug 2019 03:00:41 GMT
 */

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$db_config['dbhost'] = '127.0.0.1';
$db_config['dbport'] = '';
$db_config['dbname'] = 'nukeviet';
$db_config['dbsystem'] = 'nukeviet';
$db_config['dbuname'] = 'root';
$db_config['dbpass'] = '';
$db_config['dbtype'] = 'mysql';
$db_config['collation'] = 'utf8mb4_unicode_ci';
$db_config['charset'] = 'utf8mb4';
$db_config['persistent'] = false;
$db_config['prefix'] = 'nv';

$global_config['site_domain'] = '';
$global_config['name_show'] = 0;
$global_config['idsite'] = 0;
$global_config['sitekey'] = '21c0aa174d09cb894569cee3f1c0d1f4';// Do not change sitekey!
$global_config['hashprefix'] = '{SSHA512}';
$global_config['cached'] = 'files';
$global_config['session_handler'] = 'files';
$global_config['extension_setup'] = 3; // 0: No, 1: Upload, 2: NukeViet Store, 3: Upload + NukeViet Store
// Readmore: https://wiki.nukeviet.vn/nukeviet4:advanced_setting:file_config