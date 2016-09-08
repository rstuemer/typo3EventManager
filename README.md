# typo3EventManager

Beispiel Extension erstellt in Mittwald Schulung  von Oliver Thiele. 



## Notizen
Debugging wenn ot_bootstrap3 Installiert ist -> ?id=1&debug=1&no_cache=1

EXT_TYPOSCRIPT_setup.txt wird beim laden der Extension ausgeführt.
Sollte daher nur wichtige Sachen wie mapping zur DB enthalten. 

Pathsegment property für realURL 

SRIHash.org

Stapelregister (Umgekehr Polnische Notation)

Um zu verhindern das andere Extensions geladen werden minimale Extension mit ext_emconf.php der orginalExtension aber höhere Versionsnummer und rest leer.

## Wofür sind die Dateien

  ### ext_emconf.php 
	-Informationen für den Erweitungsmanager 
	-Abhängigkeiten
	
  ### ext_tables.sql	
  	 Anlegen und verändern der Datenbank. 
  	 Immer Create Statements Typo3 parst diese Datei nochmal und ändert selbstständig auf ALTER wenn die Tablle  schon existiert.
  
  ### ext_tables.php
  	-Plugin Registrieren
  	-Flexforms	einbinden
  	-addStaticFile : register Plugin in Template->Include List und lädt setup und constants Dateien 
     -addLLrefForTCAdescr: ContextSensitive Hilfe Texte etc.
     -allowTableOnStandardPages : Kann der Datensatz auf Normalen Seiten angelegt werden. 
     -makeCategorizable: kategorisierbar machen   

  	
  	
  	
  ### ext_localconf.php 
  	Hook Einbauen : Beispiel ot_divider 
  	
  
###Typo3 URLs
  	http://typo3.p372665.mittwaldserver.info/
  	?tx_otevents_pi1%5Bevent%5D=1
  	&tx_otevents_pi1%5Baction%5D=show
  	&tx_otevents_pi1%5Bcontroller%5D=Event&
  	cHash=a33d2542e86a0303254c3d3321a32484
  	#### CHash 
  		Wenn Parameter angehängt sind wird immer ein CHash angehängt 		
  	RealURL PID:1 Event->Show		
  	http://url/event/title-der-veranstaltung
  	Aufpassen das es keinen Chash-Wert gibt wenn man realURL verwendet
  	



## Interessante Links 
	-FileUpload : https://github.com/plobacher/extbasebookexample , https://github.com/helhum/upload_example
	-Datenschutz: Shariff
	-SRIHash.org : CDN Dateien auf Veränderung checken	
	-Hooks: https://somethingphp.com/extending-classes-typo3/
	-Typo3 Context : http://blog.marit.ag/2014/11/03/typo3-context-verstehen-und-anwenden/
# Tips
	-System Cache Leeren aktivieren ->Installtool-> Configuration Preset -> Debugsettings -> debug -> activate -> Custom -> remove deprecated log 
	-DebugUtility::var_dump($events,"Events");
	-ext_emconf.php -> Add psr4 Autoloader   
	```php
		'autoload' => ['psr-4' => ['OliverThiele\\OtEvents\\'=> 'Classes']
		
		
	-Pagination Filtern Configuration > addQueryStringMenthod	
    -Wenn Datenbank Feld hinzugefügt wird muss in Configuration/TCS/{tableFile} das Feld in Interface und einem der Types eingetragen werden.       
    -Mit Palettes können mehrere Felder im Backend nebeneinnander dargestellt werden       
           
     Backend Extension wenn Anderes CSS etc. dann kann das über -> backend->layouts->default am Tag f:becontainer geladen werden                                           ],
## Einstellungen 
		Installtool -> All Configuration 
			-pageNotFoundOnCHashError rausnehmen (dann kann es aber sein das RealURL den alten CHash hat und damit die Seiten nicht gecacht werden )
## Performance 
	-Redis-Server Cache 
	-Varnish-Cache
	-APC bzw APCU
	-ViewHelper schneller wenn CompilableInterface Implementiert wird 

 



	



# TypoScript 
	-Constanten Auslesen {$name}








# phpStorm Key
 strg + geteilt (auf nummernblock) -> Zeile aufkommentieren
alt + shift + pfeil -> Zeile verschieben

