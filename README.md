# typo3EventManager

Beispiel Extension erstellt in Mittwald Schulung  von Oliver Thiele. 



## Notizen
Debugging wenn ot_bootstrap3 Installiert ist -> ?id=1&debug=1&no_cache=1

EXT_TYPOSCRIPT_setup.txt wird beim laden der Extension ausgeführt.
Sollte daher nur wichtige Sachen wie mapping zur DB enthalten. 

Pathsegment property für realURL 

SRIHash.org


Um zu verhindern das andere Extensions geladen werden minimale Extension mit ext_emconf.php der orginalExtension aber höhere Versionsnummer und rest leer.

##Wofür sind die Dateien

  ###ext_emconf.php 
	-Informationen für den Erweitungsmanager 
	-Abhängigkeiten
  ###ext_tables.sql	
  	 Anlegen und verändern der Datenbank. 
  	 Immer Create Statements Typo3 parst diese Datei nochmal und ändert selbstständig auf ALTER wenn die Tablle  schon existiert.
  
 



	









