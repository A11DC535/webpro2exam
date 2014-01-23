<?php

require_once 'Dispatcher.php';
require_once 'util.php' ;
$dispatcher = new Dispatcher();

IncludePathSetting($dispatcher);

//apacheのドキュメントルートから何階層目のディレクトリにMVCアプリを配備するか。
//ルートを0とすると、eigyou/ 配下は1階層目に当たるので、1とする。
$dispatcher->setPramLevel(1);
$dispatcher->dispatch();

?>
