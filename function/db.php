<?php

    /*
     * Die Idee hinter der Klasse ist, das man relativ schnell auf ein anderen Datenbank System wechseln kann, ohne den ganzen Code durchzugehen.
     * Aktuell unterstüzte System. MySQL
     *
     * (Diese Klasse ist mit diesen Projekt neu entstanden, und war ursprünglich auch noch nie geplant, aber so lern ich hoffentlich selber noch etwas...)
     */

    class db {

		//put your code here
		var $connection;
		var $database;
		var $system;
	
		function error($meldung) {
		    // Ein einfaches DIE ist zwar unschön, aber erfüllt ohne Probleme seine Dienste...
		    die($meldung);
		}
	
		function db($system, $destination, $user = "", $password = "") {
		    // Verbindung zum Server aufbauen
		    $this->system = $system;
		    if ($this->system == "mysql") {
				if (!$this->connection = mysql_connect($destination, $user, $password)) {
				    $this->error("Keine Verbindung zum Datenbank-Server");
				}
		    } else {
				$this->error("Datenbank System ist nicht bekannt");
		    }
		}
	
		function connect_db($database_name) {
		    // Datenbank auswählen
		    if ($this->system == "mysql") {
				if (!$this->database = mysql_select_db($database_name, $this->connection)) {
				    $this->error("Keine Verbindung zur Datenbank möglich!");
				}
		    }
		}
		
		function sql_select($tabelle, $felder="*", $where_string="") {
			// Select Abfrage
			$sql_felder="";
			$return_array=array();
			if (is_array($felder)) {
				foreach ($felder as $key => $value) {
					if ($sql_felder=="") {
						$sql_felder=$vale;
					} else {
						$sql_felder.=', '.$value;
					}
				}
			} else {
				$sql_felder=$felder;
			}
			if ($this->system == "mysql") {
				if ($where_string!="") {
					$sql_string="SELECT ".$sql_felder." FROM ".$tabelle." WHERE ".$where_string;
				} else {
					$sql_string="SELECT ".$sql_felder." FROM ".$tabelle;
				} 
				if ($query=mysql_query($sql_string, $this->connection)) {
					if (mysql_num_rows($query)>0) {
						while ($row=mysql_fetch_assoc($query)) {
							$return_array[]=$row;
						}
					}
				} else {
					$this->error("<b>Abfrage:</b> <i>"+$sql_string+"</i><br>Konnte nicht ausgeführt werden!<br>");
				}
			}
			return $return_array;
		}
		
		function sql_insert_update($tabelle, $felder_werte_array) {
			// Insert or Upate
			$sql_felder="";
			$return=false;
			if (!is_array($felder_werte_array)) {
				$this->error("<b>Programmfehler:</b><i>ID:10-T Fehler</i><br>Falsche Werte für INSERT Befehl!<br><pre>".var_dump($felder_werte_array)."</pre>");
			}
//			if (!is_array($key_werte_array)) {
//				$this->error("<b>Programmfehler:</b><i>ID:10T Fehler</i><br>Falsche Werte für UPDATE Befehl!<br><pre>".var_dump($key_werte_array)."</pre>");
//			}
			foreach ($felder_werte_array as $key=>$value) {
				if ($sql_felder=="") {
					$sql_felder=$key."='".$value."'";
				} else {
					$sql_felder.=", ".$key."='".$value."'";
				}
			}
			if ($this->system == "mysql") {
				$sql_string="INSERT INTO ".$tabelle." SET ".$sql_felder." ON DUPLICATE KEY UPDATE ".$sql_felder;
				if ($query=mysql_query($sql_string, $this->connection)) {
					$return=true;
				} else {
					$this->error("<b>Abfrage:</b> <i>"+$sql_string+"</i><br>Konnte nicht ausgeführt werden!<br>");
				}
			}
			return $return;
		}

    }

    // Eine Datenbank Verbindung wird in den meisten Projekten sowieso immer benötigt, also hier der Aufruf
    // Natürlich ist es wieder so, das diese am Besten nur aufgebaut wird, wenn diese benötigt wird...
    // Mit wenigen Änderungen in der Klasse ist die auch möglich ;)
    $database = new db("mysql", "127.0.0.1", "root");
    $database->connect_db("bugiad");
?>