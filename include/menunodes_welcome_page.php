<?php

function getMenuNodes_welcome_page($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["welcome_page"] = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "";



	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "2";
	$menuNode["name"] = "PROPIETARIO";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "propietario";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "Farmer_48px_1139667_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "PROPIETARIO";

	$menuNode["comments"] = "EN ESTE APARTADO SE REGISTRA LA INFORMACION DE LOS PROPIETARIOS";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "3";
	$menuNode["name"] = "FINCA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "finca";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "barn_46.95785440613px_1209098_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "#"."D2B48C";
	
	$menuNode["title"] = "FINCA";

	$menuNode["comments"] = "EN ESTE APARTADO SE REGISTRA LA INFORMACION PERTINENTE A LAS FINCAS";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "4";
	$menuNode["name"] = "L. PRODUCTIVA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "lineas_agrarias";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "plant_48.432989690722px_1209097_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "#"."800080";
	
	$menuNode["title"] = "L. PRODUCTIVA";

	$menuNode["comments"] = "EN ESTE APARTADO SE REGISTRA LA INFORMACION PERTINENTE A CADA UNA DE LAS LINEAS AGROPECUARIAS";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "5";
	$menuNode["name"] = "AGRICOLA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "agricola";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "corn_48px_1219195_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "#"."009300";
	
	$menuNode["title"] = "AGRICOLA";

	$menuNode["comments"] = "EN ESTE APARTADO SE REGISTRA LA INFORMACION PERTINENTE A LOS CULTIVOS AGRICOLAS";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "6";
	$menuNode["name"] = "PECUARIO";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "pecuario";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "cow_48px_1234956_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "#"."D526D5";
	
	$menuNode["title"] = "PECUARIO";

	$menuNode["comments"] = "EN ESTE APARTADO SE REGISTRA LA INFORMACION PERTINENTE A LA LINEA PECUARIA";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "7";
	$menuNode["name"] = "HORTIFRUTAL";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "hortifruticola";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "Fruits_Vegetables_48px_1139668_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "#"."7B7BC0";
	
	$menuNode["title"] = "HORTIFRUTAL";

	$menuNode["comments"] = "EN ESTE APARTADO SE REGISTRA LA INFORMACION SOBRE HORTALIZAS Y FRUTAS";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "8";
	$menuNode["name"] = "LEGAL";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "legal";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "law_43.586206896552px_1233351_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "#"."0000FF";
	
	$menuNode["title"] = "LEGAL";

	$menuNode["comments"] = "EN ESTE APARTADO SE REGISTRA LA INFORMACION PERTINENTE A LA LEGALIZACIÓN";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "9";
	$menuNode["name"] = "INVERSION";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "inversion";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "handshake_48px_1216396_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "#"."A48B00";
	
	$menuNode["title"] = "INVERSION";

	$menuNode["comments"] = "EN ESTE APARTADO SE REGISTRA LA INFORMACION PERTINENTE A LA INVERSION Y PLANES DE DESARROLLO";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "10";
	$menuNode["name"] = "REP GLOBAL";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "REPORTE GLOBAL";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Report";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "Distributor_report_48px_1176941_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "#"."029DA6";
	
	$menuNode["title"] = "REP GLOBAL";

	$menuNode["comments"] = "EN ESTE APARTADO SE GENERAN LOS REPORTES GLOBALES DE INTERES ";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "11";
	$menuNode["name"] = "REP PECUARIO";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "REPORTE PECUARIO";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Report";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "Distributor_report_48px_1176941_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "REP PECUARIO";

	$menuNode["comments"] = "REPORTE GLOBAL POR LINEA PECUARIA";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "12";
	$menuNode["name"] = "REP VEREDA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "REPORTE VEREDA";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Report";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "Distributor_report_48px_1176941_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "REP VEREDA";

	$menuNode["comments"] = "REPORTE GLOBAL AGRUPADO POR VEREDA";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "13";
	$menuNode["name"] = "REP INVERSION";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "REPORTE INVERSION";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Report";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "Distributor_report_48px_1176941_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "REP INVERSION";

	$menuNode["comments"] = "REPORTE GLOBAL POR INVERSIÓN";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "14";
	$menuNode["name"] = "REP LEGAL";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "REPORTE LEGAL";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Report";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "Distributor_report_48px_1176941_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "REP LEGAL";

	$menuNode["comments"] = "REPORTE GLOBAL DE LEGALIDAD";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "15";
	$menuNode["name"] = "REP LINEAS";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "REPORTE LINEAS";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Report";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "Distributor_report_48px_1176941_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "REP LINEAS";

	$menuNode["comments"] = "REPORTE GLOBAL POR LINEAS PRODUCTIVAS";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "16";
	$menuNode["name"] = "REP FINCA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "REPORTE FINCA";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Report";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "Distributor_report_48px_1176941_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "REP FINCA";

	$menuNode["comments"] = "REPORTE GLOBAL AGRUPADO POR FINCA";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "17";
	$menuNode["name"] = "REP AGRICOLA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "REPORTE AGRICOLA";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Report";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "Distributor_report_48px_1176941_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "REP AGRICOLA";

	$menuNode["comments"] = "REPORTE GLOBAL DEL SECTOR AGRICOLA";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "18";
	$menuNode["name"] = "REP HORTICOLA";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "REPORTE HORTIFRUTICOLA";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Report";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "Distributor_report_48px_1176941_easyicon.net.png";
	$menuNode["iconType"] = "1";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "REP HORTICOLA";

	$menuNode["comments"] = "REPORTE GLOBAL POR LINEAS HORTIFRUTICOLAS";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
}
?>
