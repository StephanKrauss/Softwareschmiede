### erstes Online Meeting

#### Erweiterung des Skriptes für das Debugging



#### erstes Test Skript
![](https://i.imgur.com/NYRiPnP.png)



#### einstellen der Sprache im Notepad
![](https://i.imgur.com/UBsSK5K.png)

#### Installation der xdebug.dll
+ Kontrolle der Installation mit *'phpinfo()'*
+ Auswahl der richtigen xdebug.dll


#### Anpassen der *'php.ini'* 

	[XDebug]
	zend_extension = "c:\xampp\php\ext\php_xdebug-2.5.0-7.1-vc14.dll"
	
	xdebug.collect_return = 1
	xdebug.collect_params = 1
	xdebug.collect_includes = 1;
	
	xdebug.remote_enable = true
	xdebug.remote_host = "127.0.0.1"
	xdebug.remote_port = 9000
	xdebug.remote_handler = "dbgp"
	
	xdebug.profiler_append = 0
	xdebug.profiler_enable = 0
	xdebug.profiler_enable_trigger = 1
	xdebug.profiler_output_dir = "C:\xampp\tmp"
	xdebug.profiler_output_name = "cachegrind.out.%s"
	
	xdebug.trace_output_dir = "C:\xampp\tmp"
	xdebug.trace_enable_trigger = 0
	xdebug.trace_format = 1
	xdebug.trace_output_name = "trace.out.%s"

#### Auflistung der benötigten Plugins für den Editor Notepad++

##### folgende Plugin sind im Editor installiert

im Menü befinden sich die Plugin:
 +  DBGP Plugin
 	+ von Damjan Zobo Cvetko 	
 	+ [Debug Plugin](https://sourceforge.net/projects/npp-plugins/files/DBGP%20Plugin/)  
 	+ dbgp.dll in das *'plugins'* Verzeichnis des Editore
 +  mit Plugin Manager *'PHP Autocompletion'* installieren
 	+ [Php Plugin Autocompletion](https://github.com/StanDog/npp-phpautocompletion) 
 +  Plugin *'Markdown Viewer'* mit Plugin Manager installieren