<?php
define("INDEX", ""); // ÓÑÒÀÍÎÂÊÀ ÊÎÍÑÒÀÍÒÛ ÃËÀÂÍÎÃÎ ÊÎÍÒÐÎËËÅÐÀ
define("ROOT", DIRNAME(__FILE__));
define("VIEW", '/mysite/view/templatemo_160_orange_bar/');
//var_dump($_GET, $_SERVER);
require_once(ROOT."/cfg/core.php"); // ÏÎÄÊËÞ×ÅÍÈÅ ßÄÐÀ

// ÏÎÄÊËÞ×ÅÍÈÅ Ê ÁÄ
$db = new MyDB();
@$db->connect();

// ÃËÀÂÍÛÉ ÊÎÍÒÐÎËËÅÐ
include(ROOT."/com/page.php");

include (ROOT."/view/templatemo_160_orange_bar/index.php");
//include (ROOT."/template.php");
$db->close();

