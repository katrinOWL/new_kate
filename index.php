<?php
define("INDEX", ""); // ��������� ��������� �������� �����������
define("ROOT", DIRNAME(__FILE__));
define("VIEW", '/mysite/view/templatemo_160_orange_bar/');
//var_dump($_GET, $_SERVER);
require_once(ROOT."/cfg/core.php"); // ����������� ����

// ����������� � ��
$db = new MyDB();
@$db->connect();

// ������� ����������
include(ROOT."/com/page.php");

include (ROOT."/view/templatemo_160_orange_bar/index.php");
//include (ROOT."/template.php");
$db->close();

