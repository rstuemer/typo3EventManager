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
  
  ###ext_tables.php
  	-Plugin Registrieren
  	-Flexforms	einbinden
  	-register Plugin in Template->Include List und lädt setup und constants Dateien -> 	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript',
        'typo3EventManager');
     -addLLrefForTCAdescr -> ContextSensitive Hilfe Texte etc.
     -allowTableOnStandardPages -> Kann der Datensatz auf Normalen Seiten angelegt werden. 
     -makeCategorizable -> kategorisierbar machen   

  	
  	
  	
  ###ext_localconf.php 
  	Hook Einbauen -> Beispiel ot_divider 
  	
  
  
##Interessante Links 
	FileUpload -> https://github.com/plobacher/extbasebookexample , https://github.com/helhum/upload_example
	Datenschutz-> Shariff
	SRIHash.org -> CDN Dateien auf Veränderung checken	
	Hooks: https://somethingphp.com/extending-classes-typo3/
	Typo3 Context -> http://blog.marit.ag/2014/11/03/typo3-context-verstehen-und-anwenden/
#Tips
	-System Cache Leeren aktivieren ->Installtool-> Configuration Preset -> Debugsettings -> debug -> activate -> Custom -> remove deprecated log 
##Performance 
	-Redis-Server Cache 
	-Varnish-Cache
	-APC bzw APCU
	-ViewHelper schneller wenn CompilableInterface Implementiert wird 

 



	



#TypoScript 
	-Constanten Auslesen {$name}








#phpStorm Key
 strg + geteilt (auf nummernblock) -> Zeile aufkommentieren


