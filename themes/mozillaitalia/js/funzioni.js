function xpinstallCallback(url, status)
{
  if (status == 0)
    msg = "Istallazione riuscita.\n";
  else if (status == 999)
    msg = "Istallazione riuscita.  Riavviare.\n";
  else if (status == -210)
    msg = "Istallazione annullata dall'utente.\n";
  else
    msg = "Istallazione fallita con errore: " + status + "\n";

  alert(msg);
}

function triggerURL(url) {
   if (!InstallTrigger.updateEnabled())
      	return false; 
   else
        InstallTrigger.startSoftwareUpdate(url); 
}

function instWarning(xpi)
{
 if (navigator.userAgent.indexOf('Gecko') == -1)
     alert ("L'installazione del pacchetto è possibile solamente nei browser "+
            "Mozilla. Se si desidera solo scaricare il file per un'installazione "+
            "successiva, seguire il collegamento 'download'.");
 else if (!InstallTrigger.enabled())
     alert ("Per l'installazione del pacchetto è necessario abilitare l'istallazione "+
            "dei pacchetti aggiuntivi. Controllare nelle preferenze Avanzate");
 else if (navigator.userAgent.indexOf('it-IT;') != -1)
     alert ("Le preferenze di questo profilo hanno mantenuto, durante l'aggiornamento "+
            "da una versione precedente del software, l'italiano come lingua per "+
            "l'interfaccia utente. Questo impedisce la corretta installazione del "+
            "language pack italiano.\n"+
            "In Mozilla Suite selezionare l'inglese (fare click sulla voce) in Edit | Preferences | "+
            "Appearance | Languages/Content Packs. Quindi riprovare l'installazione.\n"+
            "In Firefox o Thunderbird disabilitare e disinstallare precedenti langpack ancora "+
            "presenti. Per aiuto rivolgersi al forum: http://forum.mozillaitalia.org");
 else InstallTrigger.install(xpi);
}

 // Functions needed for an XPI install
// Simplified version of Chris Cooks' install script

function doneFn(name,result) {}

function isValidUa(chosenua) {
   switch(chosenua) {
      case 'fb':
         var ua=navigator.userAgent.toLowerCase();
         return (ua.indexOf('firefox')!=-1 || ua.indexOf('firebird')!=-1 || ua.indexOf('phoenix')!=-1) && ua.indexOf('gecko')!=-1;
         break;
      case 'ms':
         var ua=navigator.userAgent.toLowerCase();
         return !(ua.indexOf('firefox')!=-1 || ua.indexOf('firebird')!=-1 || ua.indexOf('phoenix')!=-1) && ua.indexOf('gecko')!=-1;
         break;
      case 'gk':
         var ua=navigator.userAgent.toLowerCase();
         return ua.indexOf('gecko')!=-1;
         break;
      default:
         return false;
         break;
   }
} 

function doXPIInstall(file,name,ua) {
   var outstring;
   switch(ua) {
      case 'fb':
         outstring = "L'installazione di questa estensione è possibile solo in Mozilla Firefox.\n\nLa stringa di identificazione del browser corrente è:\n" + navigator.userAgent;
         break;
      case 'ms':
         outstring = "L'installazione di questa estensione è possibile solo in Mozilla Suite.\n\nLa stringa di identificazione del browser corrente è:\n" + navigator.userAgent;
         break;
      case 'tb':
         outstring = 'Per installare l\'estensione in Mozilla Thunderbird scaricare il file cliccando col tasto\n' +
            'destro del mouse sul link e scegliendo la voce "Salva destinazione sul disco".\n' +
            'Successivamente aprire l\'estensione in Thunderbird da Strumenti -> Opzioni -> Estensioni\n' +
            'selezionando il pulsante "Installa una nuova estensione".';
         break;
      case 'tblp':
         outstring = 'Per installare il langpack in Mozilla Thunderbird scaricare il file cliccando col tasto\n' +
            'destro del mouse sul link e scegliendo la voce "Salva destinazione sul disco".\n' +
            'Successivamente aprire il langpack in Thunderbird da Strumenti -> Opzioni -> Estensioni\n' +
            'selezionando il pulsante "Installa una nuova estensione".';
         break;
      case 'gk':
         outstring = "L'installazione di questa estensione è possibile solo in un browser Mozilla Firefox.\n\nLa stringa di identificazione del browser corrente è:\n" + navigator.userAgent;
         break;
      default:
         outstring = 'Errore nell\'identificazione del browser.';
         break;
   }
  if(!isValidUa(ua)) {
  	alert(outstring);
  	return false;
  }
  var xpi = new Object();
  xpi[name] = file;
  InstallTrigger.install(xpi,doneFn);
}