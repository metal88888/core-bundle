<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/de/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['ERR']['general'] = 'Ein Fehler ist aufgetreten!';
$GLOBALS['TL_LANG']['ERR']['unique'] = 'Doppelter Eintrag im Feld "%s"!';
$GLOBALS['TL_LANG']['ERR']['mandatory'] = 'Bitte füllen Sie das Feld "%s" aus!';
$GLOBALS['TL_LANG']['ERR']['mdtryNoLabel'] = 'Bitte füllen Sie dieses Feld aus!';
$GLOBALS['TL_LANG']['ERR']['minlength'] = 'Das Feld "%s" muss mindestens %d Zeichen lang sein!';
$GLOBALS['TL_LANG']['ERR']['maxlength'] = 'Das Feld "%s" darf höchstens %d Zeichen lang sein!';
$GLOBALS['TL_LANG']['ERR']['digit'] = 'Bitte geben Sie nur Zahlen ein!';
$GLOBALS['TL_LANG']['ERR']['prcnt'] = 'Bitte geben Sie einen Prozentsatz zwischen 0 und 100 ein!';
$GLOBALS['TL_LANG']['ERR']['alpha'] = 'Bitte geben Sie nur Buchstaben ein!';
$GLOBALS['TL_LANG']['ERR']['alnum'] = 'Bitte geben Sie nur Buchstaben und Zahlen ein!';
$GLOBALS['TL_LANG']['ERR']['phone'] = 'Bitte geben Sie eine gültige Telefonnummer ein!';
$GLOBALS['TL_LANG']['ERR']['extnd'] = 'Aus Sicherheitsgründen können Sie folgende Zeichen hier nicht verwenden: =<>&/()#';
$GLOBALS['TL_LANG']['ERR']['email'] = 'Bitte geben Sie eine gültige E-Mail-Adresse ein!';
$GLOBALS['TL_LANG']['ERR']['emails'] = 'Mindestens eine der E-Mail-Adressen ist ungültig!';
$GLOBALS['TL_LANG']['ERR']['url'] = 'Bitte geben Sie ein gültiges URL-Format ein und kodieren Sie Sonderzeichen!';
$GLOBALS['TL_LANG']['ERR']['alias'] = 'Bitte geben Sie nur Buchstaben und Zahlen sowie folgende Sonderzeichen ein: .-_';
$GLOBALS['TL_LANG']['ERR']['folderalias'] = 'Bitte geben Sie nur Buchstaben und Zahlen sowie folgende Sonderzeichen ein: .-/_';
$GLOBALS['TL_LANG']['ERR']['date'] = 'Bitte geben Sie das Datum im Format "%s" ein!';
$GLOBALS['TL_LANG']['ERR']['time'] = 'Bitte geben Sie die Uhrzeit im Format "%s" ein!';
$GLOBALS['TL_LANG']['ERR']['dateTime'] = 'Bitte geben Sie Datum und Uhrzeit im Format "%s" ein!';
$GLOBALS['TL_LANG']['ERR']['noSpace'] = 'Das Feld "%s" darf keine Leerzeichen enthalten!';
$GLOBALS['TL_LANG']['ERR']['filesize'] = 'Die maximale Größe für Datei-Uploads beträgt %s (Contao- oder php.ini-Einstellungen)!';
$GLOBALS['TL_LANG']['ERR']['filetype'] = 'Der Dateityp "%s" darf nicht hochgeladen werden!';
$GLOBALS['TL_LANG']['ERR']['filepartial'] = 'Die Datei %s wurde nur teilweise hochgeladen!';
$GLOBALS['TL_LANG']['ERR']['filewidth'] = 'Die Datei %s übersteigt die maximale Bildbreite von %d Pixel!';
$GLOBALS['TL_LANG']['ERR']['fileheight'] = 'Die Datei %s übersteigt die maximale Bildhöhe von %d Pixel!';
$GLOBALS['TL_LANG']['ERR']['filetarget'] = '%s kann nicht nach %s verschoben werden, da das Ziel existiert!';
$GLOBALS['TL_LANG']['ERR']['invalidReferer'] = 'Zugriff verweigert! Die aktuelle Hostadresse (%s) stimmt nicht mit der verweisenden Hostadresse (%s) überein!';
$GLOBALS['TL_LANG']['ERR']['invalidPass'] = 'Ungültiges Passwort!';
$GLOBALS['TL_LANG']['ERR']['passwordLength'] = 'Ein Passwort muss mindestens %d Zeichen lang sein!';
$GLOBALS['TL_LANG']['ERR']['passwordName'] = 'Der Benutzername und das Passwort müssen unterschiedlich sein!';
$GLOBALS['TL_LANG']['ERR']['passwordMatch'] = 'Die eingegebenen Passwörter stimmen nicht überein!';
$GLOBALS['TL_LANG']['ERR']['accountLocked'] = 'Das Konto wurde gesperrt! Sie können sich in %d Minuten erneut anmelden.';
$GLOBALS['TL_LANG']['ERR']['invalidLogin'] = 'Anmeldung fehlgeschlagen!';
$GLOBALS['TL_LANG']['ERR']['invalidColor'] = 'Ungültiges Farbformat!';
$GLOBALS['TL_LANG']['ERR']['all_fields'] = 'Bitte wählen Sie mindestens ein Feld aus!';
$GLOBALS['TL_LANG']['ERR']['aliasExists'] = 'Der Alias "%s" existiert bereits!';
$GLOBALS['TL_LANG']['ERR']['importFolder'] = 'Der Ordner "%s" kann nicht importiert werden!';
$GLOBALS['TL_LANG']['ERR']['notWriteable'] = 'Die Datei "%s" ist nicht beschreibbar und kann daher nicht aktualisiert werden!';
$GLOBALS['TL_LANG']['ERR']['invalidName'] = 'Dieser Datei- bzw. Verzeichnisname ist ungültig!';
$GLOBALS['TL_LANG']['ERR']['invalidFile'] = 'Die Datei bzw. das Verzeichnis "%s" ist ungültig!';
$GLOBALS['TL_LANG']['ERR']['fileExists'] = 'Die Datei "%s" existiert bereits!';
$GLOBALS['TL_LANG']['ERR']['circularReference'] = 'Ungültiges Weiterleitungsziel (Zirkelbezug)!';
$GLOBALS['TL_LANG']['ERR']['ie6warning'] = '<strong>Achtung!</strong> Sie verwenden einen %sveralteten Browser%s und <strong>können nicht alle Funktionen dieser Webseite nutzen</strong>.';
$GLOBALS['TL_LANG']['ERR']['noFallbackEmpty'] = 'Bei keinem der aktiven Website-Startpunkte ohne explizite DNS-Angabe wurde die Option "Sprachen-Fallback" ausgewählt, d.h. diese Webseiten sind nur in der einen Sprache verfügbar, die in den Seiteneinstellungen definiert wurde! Besucher und Suchmaschinen, die diese Sprache nicht sprechen, können die Webseite nicht aufrufen.';
$GLOBALS['TL_LANG']['ERR']['noFallbackDns'] = 'Bei keinem der aktiven Website-Startpunkte für <strong>%s</strong> wurde die Option "Sprachen-Fallback" ausgewählt, d.h. diese Webseiten sind nur in der einen Sprache verfügbar, die in den Seiteneinstellungen definiert wurde! Besucher und Suchmaschinen, die diese Sprache nicht sprechen, können die Webseite nicht aufrufen.';
$GLOBALS['TL_LANG']['ERR']['multipleFallback'] = 'Sie können nur einen Website-Startpunkt pro Domain als Sprachen-Fallback definieren.';
$GLOBALS['TL_LANG']['ERR']['topLevelRoot'] = 'Seiten in der obersten Ebene müssen Website-Startpunkte sein!';
$GLOBALS['TL_LANG']['ERR']['topLevelRegular'] = 'Auf der obersten Ebene befinden sich Seiten, die keine Website-Startpunkte sind. Webseiten ohne Startpunkt werden nicht mehr unterstützt, daher stellen Sie bitte sicher, dass alle Seiten unter einem Startpunkt gruppiert sind.';
$GLOBALS['TL_LANG']['ERR']['invalidTokenUrl'] = 'Der Link, den Sie aufgerufen haben, konnte nicht verifiziert werden. Wenn Sie den Link selbst aufgerufen oder von einer vertrauenswürdigen Person erhalten haben, können Sie den Vorgang fortsetzen.';
$GLOBALS['TL_LANG']['ERR']['version2format'] = 'Dieses Element verwendet noch das alte Contao 2 SRC-Format. Haben Sie die Datenbank aktualisiert?';
$GLOBALS['TL_LANG']['ERR']['form'] = 'Das Formular konnte nicht gesendet werden';
$GLOBALS['TL_LANG']['ERR']['captcha'] = 'Bitte beantworten Sie die Sicherheitsfrage!';
$GLOBALS['TL_LANG']['ERR']['download'] = 'Die Datei "%s" ist nicht für den Download verfügbar!';
$GLOBALS['TL_LANG']['ERR']['invalid'] = 'Ungültige Eingabe: %s';
$GLOBALS['TL_LANG']['ERR']['fileNotFoundSync'] = 'Kein Datenbank-Eintrag zu %s gefunden. Bitte synchronisieren Sie das Dateisystem.';
$GLOBALS['TL_LANG']['SEC']['question1'] = 'Bitte addieren Sie %d und %d.';
$GLOBALS['TL_LANG']['SEC']['question2'] = 'Was ist die Summe aus %d und %d?';
$GLOBALS['TL_LANG']['SEC']['question3'] = 'Bitte rechnen Sie %d plus %d.';
$GLOBALS['TL_LANG']['CTE']['texts'] = 'Text-Elemente';
$GLOBALS['TL_LANG']['CTE']['headline'][0] = 'Überschrift';
$GLOBALS['TL_LANG']['CTE']['headline'][1] = 'Erzeugt eine Überschrift (h1 - h6).';
$GLOBALS['TL_LANG']['CTE']['text'][0] = 'Text';
$GLOBALS['TL_LANG']['CTE']['text'][1] = 'Erzeugt ein Rich-Text-Element.';
$GLOBALS['TL_LANG']['CTE']['html'][0] = 'HTML';
$GLOBALS['TL_LANG']['CTE']['html'][1] = 'Erlaubt das Hinzufügen von eigenem HTML-Code.';
$GLOBALS['TL_LANG']['CTE']['list'][0] = 'Aufzählung';
$GLOBALS['TL_LANG']['CTE']['list'][1] = 'Erzeugt eine geordnete oder ungeordnete Liste.';
$GLOBALS['TL_LANG']['CTE']['table'][0] = 'Tabelle';
$GLOBALS['TL_LANG']['CTE']['table'][1] = 'Erzeugt eine optional sortierbare Tabelle.';
$GLOBALS['TL_LANG']['CTE']['accordion'][0] = 'Akkordeon';
$GLOBALS['TL_LANG']['CTE']['accordion'][1] = 'Erzeugt ein MooTools Akkordeon-Element.';
$GLOBALS['TL_LANG']['CTE']['code'][0] = 'Code';
$GLOBALS['TL_LANG']['CTE']['code'][1] = 'Gibt formatierten Programmcode auf dem Bildschirm aus.';
$GLOBALS['TL_LANG']['CTE']['links'] = 'Link-Elemente';
$GLOBALS['TL_LANG']['CTE']['hyperlink'][0] = 'Hyperlink';
$GLOBALS['TL_LANG']['CTE']['hyperlink'][1] = 'Erzeugt einen Verweis auf eine andere Webseite.';
$GLOBALS['TL_LANG']['CTE']['toplink'][0] = 'Top-Link';
$GLOBALS['TL_LANG']['CTE']['toplink'][1] = 'Erzeugt einen Link zum Seitenanfang.';
$GLOBALS['TL_LANG']['CTE']['media'] = 'Media-Elemente';
$GLOBALS['TL_LANG']['CTE']['image'][0] = 'Bild';
$GLOBALS['TL_LANG']['CTE']['image'][1] = 'Erzeugt ein einzelnes Bild.';
$GLOBALS['TL_LANG']['CTE']['gallery'][0] = 'Galerie';
$GLOBALS['TL_LANG']['CTE']['gallery'][1] = 'Erzeugt eine Lightbox-Bildergalerie.';
$GLOBALS['TL_LANG']['CTE']['player'][0] = 'Video/Audio';
$GLOBALS['TL_LANG']['CTE']['player'][1] = 'Erzeugt einen Video- bzw. Audio-Player.';
$GLOBALS['TL_LANG']['CTE']['youtube'][0] = 'YouTube';
$GLOBALS['TL_LANG']['CTE']['youtube'][1] = 'Fügt ein YouTube-Video ein.';
$GLOBALS['TL_LANG']['CTE']['files'] = 'Datei Elemente';
$GLOBALS['TL_LANG']['CTE']['download'][0] = 'Download';
$GLOBALS['TL_LANG']['CTE']['download'][1] = 'Erzeugt einen Link zum Download einer Datei.';
$GLOBALS['TL_LANG']['CTE']['downloads'][0] = 'Downloads';
$GLOBALS['TL_LANG']['CTE']['downloads'][1] = 'Erzeugt mehrere Links zum Download von Dateien.';
$GLOBALS['TL_LANG']['CTE']['includes'] = 'Include-Elemente';
$GLOBALS['TL_LANG']['CTE']['article'][0] = 'Artikel';
$GLOBALS['TL_LANG']['CTE']['article'][1] = 'Fügt einen anderen Artikel ein.';
$GLOBALS['TL_LANG']['CTE']['alias'][0] = 'Inhaltselement';
$GLOBALS['TL_LANG']['CTE']['alias'][1] = 'Fügt ein anderes Inhaltselement ein.';
$GLOBALS['TL_LANG']['CTE']['form'][0] = 'Formular';
$GLOBALS['TL_LANG']['CTE']['form'][1] = 'Fügt ein Formular ein.';
$GLOBALS['TL_LANG']['CTE']['module'][0] = 'Modul';
$GLOBALS['TL_LANG']['CTE']['module'][1] = 'Fügt ein Frontend-Modul ein.';
$GLOBALS['TL_LANG']['CTE']['teaser'][0] = 'Artikelteaser';
$GLOBALS['TL_LANG']['CTE']['teaser'][1] = 'Zeigt den Teasertext eines Artikels an.';
$GLOBALS['TL_LANG']['PTY']['regular'][0] = 'Reguläre Seite';
$GLOBALS['TL_LANG']['PTY']['regular'][1] = 'Eine reguläre Seite enthält Artikel und Inhaltselemente. Sie ist der Standard-Seitentyp.';
$GLOBALS['TL_LANG']['PTY']['redirect'][0] = 'Externe Weiterleitung';
$GLOBALS['TL_LANG']['PTY']['redirect'][1] = 'Dieser Seitentyp leitet Besucher automatisch zu einer externen Webseite um. Die Funktionsweise entspricht der eines Hyperlinks.';
$GLOBALS['TL_LANG']['PTY']['forward'][0] = 'Interne Weiterleitung';
$GLOBALS['TL_LANG']['PTY']['forward'][1] = 'Dieser Seitentyp leitet Besucher automatisch zu einer anderen Seite innerhalb der Seitenstruktur um.';
$GLOBALS['TL_LANG']['PTY']['root'][0] = 'Startpunkt einer Webseite';
$GLOBALS['TL_LANG']['PTY']['root'][1] = 'Dieser Seitentyp kennzeichnet den Startpunkt einer neuen Webseite innerhalb der Seitenstruktur.';
$GLOBALS['TL_LANG']['PTY']['error_403'][0] = '403 Zugriff verweigert';
$GLOBALS['TL_LANG']['PTY']['error_403'][1] = 'Ruft ein Benutzer eine geschützte Seite ohne die entsprechenden Zugriffsrechte auf, wird stattdessen die 403-Fehlerseite geladen.';
$GLOBALS['TL_LANG']['PTY']['error_404'][0] = '404 Seite nicht gefunden';
$GLOBALS['TL_LANG']['PTY']['error_404'][1] = 'Ruft ein Benutzer eine nicht vorhandene Seite auf, wird stattdessen die 404-Fehlerseite geladen.';
$GLOBALS['TL_LANG']['FOP']['fop'][0] = 'Erlaubte Datei-Operationen';
$GLOBALS['TL_LANG']['FOP']['fop'][1] = 'Hier können Sie die erlaubten Datei-Operationen festlegen.';
$GLOBALS['TL_LANG']['FOP']['f1'] = 'Dateien auf den Server hochladen';
$GLOBALS['TL_LANG']['FOP']['f2'] = 'Dateien und Verzeichnisse bearbeiten, kopieren und verschieben';
$GLOBALS['TL_LANG']['FOP']['f3'] = 'Einzelne Dateien und leere Verzeichnisse löschen';
$GLOBALS['TL_LANG']['FOP']['f4'] = 'Verzeichnisse inklusive aller Dateien und Unterordner löschen (!)';
$GLOBALS['TL_LANG']['FOP']['f5'] = 'Dateien im Quelltexteditor bearbeiten';
$GLOBALS['TL_LANG']['CHMOD']['editpage'] = 'Seite bearbeiten';
$GLOBALS['TL_LANG']['CHMOD']['editnavigation'] = 'Hierarchie der Seiten ändern';
$GLOBALS['TL_LANG']['CHMOD']['deletepage'] = 'Seite löschen';
$GLOBALS['TL_LANG']['CHMOD']['editarticles'] = 'Artikel bearbeiten';
$GLOBALS['TL_LANG']['CHMOD']['movearticles'] = 'Hierarchie der Artikel ändern';
$GLOBALS['TL_LANG']['CHMOD']['deletearticles'] = 'Artikel löschen';
$GLOBALS['TL_LANG']['CHMOD']['cuser'] = 'Besitzer';
$GLOBALS['TL_LANG']['CHMOD']['cgroup'] = 'Gruppe';
$GLOBALS['TL_LANG']['CHMOD']['cworld'] = 'Alle';
$GLOBALS['TL_LANG']['DAYS'][0] = 'Sonntag';
$GLOBALS['TL_LANG']['DAYS'][1] = 'Montag';
$GLOBALS['TL_LANG']['DAYS'][2] = 'Dienstag';
$GLOBALS['TL_LANG']['DAYS'][3] = 'Mittwoch';
$GLOBALS['TL_LANG']['DAYS'][4] = 'Donnerstag';
$GLOBALS['TL_LANG']['DAYS'][5] = 'Freitag';
$GLOBALS['TL_LANG']['DAYS'][6] = 'Samstag';
$GLOBALS['TL_LANG']['DAYS_SHORT'][0] = 'So';
$GLOBALS['TL_LANG']['DAYS_SHORT'][1] = 'Mo';
$GLOBALS['TL_LANG']['DAYS_SHORT'][2] = 'Di';
$GLOBALS['TL_LANG']['DAYS_SHORT'][3] = 'Mi';
$GLOBALS['TL_LANG']['DAYS_SHORT'][4] = 'Do';
$GLOBALS['TL_LANG']['DAYS_SHORT'][5] = 'Fr';
$GLOBALS['TL_LANG']['DAYS_SHORT'][6] = 'Sa';
$GLOBALS['TL_LANG']['MONTHS'][0] = 'Januar';
$GLOBALS['TL_LANG']['MONTHS'][1] = 'Februar';
$GLOBALS['TL_LANG']['MONTHS'][2] = 'März';
$GLOBALS['TL_LANG']['MONTHS'][3] = 'April';
$GLOBALS['TL_LANG']['MONTHS'][4] = 'Mai';
$GLOBALS['TL_LANG']['MONTHS'][5] = 'Juni';
$GLOBALS['TL_LANG']['MONTHS'][6] = 'Juli';
$GLOBALS['TL_LANG']['MONTHS'][7] = 'August';
$GLOBALS['TL_LANG']['MONTHS'][8] = 'September';
$GLOBALS['TL_LANG']['MONTHS'][9] = 'Oktober';
$GLOBALS['TL_LANG']['MONTHS'][10] = 'November';
$GLOBALS['TL_LANG']['MONTHS'][11] = 'Dezember';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][0] = 'Jan';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][1] = 'Feb';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][2] = 'Mär';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][3] = 'Apr';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][4] = 'Mai';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][5] = 'Jun';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][6] = 'Jul';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][7] = 'Aug';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][8] = 'Sep';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][9] = 'Okt';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][10] = 'Nov';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][11] = 'Dez';
$GLOBALS['TL_LANG']['MSC']['dayShortLength'] = '2';
$GLOBALS['TL_LANG']['MSC']['monthShortLength'] = '3';
$GLOBALS['TL_LANG']['MSC']['weekOffset'] = '1';
$GLOBALS['TL_LANG']['MSC']['titleFormat'] = '%d. %B %Y';
$GLOBALS['TL_LANG']['MSC']['url'][0] = 'Link-Adresse';
$GLOBALS['TL_LANG']['MSC']['url'][1] = 'Geben Sie eine Web-Adresse (http://…), eine E-Mail-Adresse (mailto:…) oder ein Inserttag ein.';
$GLOBALS['TL_LANG']['MSC']['target'][0] = 'In neuem Fenster öffnen';
$GLOBALS['TL_LANG']['MSC']['target'][1] = 'Den Link in einem neuen Browserfenster öffnen.';
$GLOBALS['TL_LANG']['MSC']['decimalSeparator'] = ',';
$GLOBALS['TL_LANG']['MSC']['thousandsSeparator'] = '.';
$GLOBALS['TL_LANG']['MSC']['separator'][0] = 'Trennzeichen';
$GLOBALS['TL_LANG']['MSC']['separator'][1] = 'Bitte wählen Sie ein Feld-Trennzeichen aus.';
$GLOBALS['TL_LANG']['MSC']['source'][0] = 'Quelldateien';
$GLOBALS['TL_LANG']['MSC']['source'][1] = 'Bitte laden Sie die zu importierenden CSV-Dateien hoch.';
$GLOBALS['TL_LANG']['MSC']['comma'] = 'Komma';
$GLOBALS['TL_LANG']['MSC']['semicolon'] = 'Strichpunkt';
$GLOBALS['TL_LANG']['MSC']['tabulator'] = 'Tabulator';
$GLOBALS['TL_LANG']['MSC']['linebreak'] = 'Zeilenumbruch';
$GLOBALS['TL_LANG']['MSC']['lw_import'][0] = 'CSV-Import';
$GLOBALS['TL_LANG']['MSC']['lw_import'][1] = 'Listeneinträge aus einer CSV-Datei importieren';
$GLOBALS['TL_LANG']['MSC']['lw_copy'] = 'Das Element duplizieren';
$GLOBALS['TL_LANG']['MSC']['lw_up'] = 'Das Element eine Position nach oben verschieben';
$GLOBALS['TL_LANG']['MSC']['lw_down'] = 'Das Element eine Position nach unten verschieben';
$GLOBALS['TL_LANG']['MSC']['lw_delete'] = 'Das Element löschen';
$GLOBALS['TL_LANG']['MSC']['tw_import'][0] = 'CSV-Import';
$GLOBALS['TL_LANG']['MSC']['tw_import'][1] = 'Tabelleneinträge aus einer CSV-Datei importieren';
$GLOBALS['TL_LANG']['MSC']['tw_expand'] = 'Die Eingabefelder vergrößern';
$GLOBALS['TL_LANG']['MSC']['tw_shrink'] = 'Die Eingabefelder verkleinern';
$GLOBALS['TL_LANG']['MSC']['tw_rcopy'] = 'Die Reihe duplizieren';
$GLOBALS['TL_LANG']['MSC']['tw_rup'] = 'Die Reihe eine Position nach oben verschieben';
$GLOBALS['TL_LANG']['MSC']['tw_rdown'] = 'Die Reihe eine Position nach unten verschieben';
$GLOBALS['TL_LANG']['MSC']['tw_rdelete'] = 'Die Reihe löschen';
$GLOBALS['TL_LANG']['MSC']['tw_ccopy'] = 'Die Spalte duplizieren';
$GLOBALS['TL_LANG']['MSC']['tw_cmovel'] = 'Die Spalte eine Position nach links verschieben';
$GLOBALS['TL_LANG']['MSC']['tw_cmover'] = 'Die Spalte eine Position nach rechts verschieben';
$GLOBALS['TL_LANG']['MSC']['tw_cdelete'] = 'Die Spalte löschen';
$GLOBALS['TL_LANG']['MSC']['ow_copy'] = 'Die Reihe duplizieren';
$GLOBALS['TL_LANG']['MSC']['ow_up'] = 'Die Reihe eine Position nach oben verschieben';
$GLOBALS['TL_LANG']['MSC']['ow_down'] = 'Die Reihe eine Position nach unten verschieben';
$GLOBALS['TL_LANG']['MSC']['ow_delete'] = 'Die Reihe löschen';
$GLOBALS['TL_LANG']['MSC']['ow_value'] = 'Wert';
$GLOBALS['TL_LANG']['MSC']['ow_label'] = 'Bezeichnung';
$GLOBALS['TL_LANG']['MSC']['ow_key'] = 'Schlüssel';
$GLOBALS['TL_LANG']['MSC']['ow_default'] = 'Standard';
$GLOBALS['TL_LANG']['MSC']['ow_group'] = 'Gruppe';
$GLOBALS['TL_LANG']['MSC']['mw_copy'] = 'Die Reihe duplizieren';
$GLOBALS['TL_LANG']['MSC']['mw_up'] = 'Die Reihe eine Position nach oben verschieben';
$GLOBALS['TL_LANG']['MSC']['mw_down'] = 'Die Reihe eine Position nach unten verschieben';
$GLOBALS['TL_LANG']['MSC']['mw_delete'] = 'Die Reihe löschen';
$GLOBALS['TL_LANG']['MSC']['mw_module'] = 'Modul';
$GLOBALS['TL_LANG']['MSC']['mw_column'] = 'Spalte';
$GLOBALS['TL_LANG']['MSC']['aw_title'] = 'Titel';
$GLOBALS['TL_LANG']['MSC']['aw_link'] = 'Link';
$GLOBALS['TL_LANG']['MSC']['aw_caption'] = 'Bildunterschrift';
$GLOBALS['TL_LANG']['MSC']['aw_delete'] = 'Die Sprache löschen';
$GLOBALS['TL_LANG']['MSC']['aw_new'] = 'Sprache hinzufügen';
$GLOBALS['TL_LANG']['MSC']['relative'] = 'Relatives Format';
$GLOBALS['TL_LANG']['MSC']['proportional'][0] = 'Proportional';
$GLOBALS['TL_LANG']['MSC']['proportional'][1] = 'Die längere Seite des Bildes wird an die vorgegebenen Abmessungen angepasst und das Bild proportional verkleinert.';
$GLOBALS['TL_LANG']['MSC']['box'][0] = 'An Rahmen anpassen';
$GLOBALS['TL_LANG']['MSC']['box'][1] = 'Die kürzere Seite des Bildes wird an die vorgegebenen Abmessungen angepasst und das Bild proportional verkleinert.';
$GLOBALS['TL_LANG']['MSC']['crop'] = 'Exaktes Format';
$GLOBALS['TL_LANG']['MSC']['left_top'][0] = 'Links | Oben';
$GLOBALS['TL_LANG']['MSC']['left_top'][1] = 'Erhält den linken Teil eines Querformat-Bildes und den oberen Teil eines Hochformat-Bildes.';
$GLOBALS['TL_LANG']['MSC']['center_top'][0] = 'Mitte | Oben';
$GLOBALS['TL_LANG']['MSC']['center_top'][1] = 'Erhält den mittleren Teil eines Querformat-Bildes und den oberen Teil eines Hochformat-Bildes.';
$GLOBALS['TL_LANG']['MSC']['right_top'][0] = 'Rechts | Oben';
$GLOBALS['TL_LANG']['MSC']['right_top'][1] = 'Erhält den rechten Teil eines Querformat-Bildes und den oberen Teil eines Hochformat-Bildes.';
$GLOBALS['TL_LANG']['MSC']['left_center'][0] = 'Links | Mitte';
$GLOBALS['TL_LANG']['MSC']['left_center'][1] = 'Erhält den linken Teil eines Querformat-Bildes und den mittleren Teil eines Hochformat-Bildes.';
$GLOBALS['TL_LANG']['MSC']['center_center'][0] = 'Mitte | Mitte';
$GLOBALS['TL_LANG']['MSC']['center_center'][1] = 'Erhält den mittleren Teil eines Querformat-Bildes und den mittleren Teil eines Hochformat-Bildes.';
$GLOBALS['TL_LANG']['MSC']['right_center'][0] = 'Rechts | Mitte';
$GLOBALS['TL_LANG']['MSC']['right_center'][1] = 'Erhält den rechten Teil eines Querformat-Bildes und den mittleren Teil eines Hochformat-Bildes.';
$GLOBALS['TL_LANG']['MSC']['left_bottom'][0] = 'Links | Unten';
$GLOBALS['TL_LANG']['MSC']['left_bottom'][1] = 'Erhält den linken Teil eines Querformat-Bildes und den unteren Teil eines Hochformat-Bildes.';
$GLOBALS['TL_LANG']['MSC']['center_bottom'][0] = 'Mitte | Unten';
$GLOBALS['TL_LANG']['MSC']['center_bottom'][1] = 'Erhält den mittleren Teil eines Querformat-Bildes und den unteren Teil eines Hochformat-Bildes.';
$GLOBALS['TL_LANG']['MSC']['right_bottom'][0] = 'Rechts | Unten';
$GLOBALS['TL_LANG']['MSC']['right_bottom'][1] = 'Erhält den rechten Teil eines Querformat-Bildes und den unteren Teil eines Hochformat-Bildes.';
$GLOBALS['TL_LANG']['MSC']['id'][0] = 'ID';
$GLOBALS['TL_LANG']['MSC']['id'][1] = 'Das Ändern der ID kann die Konsistenz der Daten gefährden!';
$GLOBALS['TL_LANG']['MSC']['pid'][0] = 'Parent-ID';
$GLOBALS['TL_LANG']['MSC']['pid'][1] = 'Das Ändern der Parent-ID kann die Konsistenz der Daten gefährden!';
$GLOBALS['TL_LANG']['MSC']['sorting'][0] = 'Sortierindex';
$GLOBALS['TL_LANG']['MSC']['sorting'][1] = 'Der Sortierindex wird normalerweise automatisch gesetzt.';
$GLOBALS['TL_LANG']['MSC']['all'][0] = 'Mehrere bearbeiten';
$GLOBALS['TL_LANG']['MSC']['all'][1] = 'Mehrere Datensätze auf einmal bearbeiten';
$GLOBALS['TL_LANG']['MSC']['all_override'][0] = 'Mehrere überschreiben';
$GLOBALS['TL_LANG']['MSC']['all_override'][1] = 'Mehrere Datensätze auf einmal überschreiben';
$GLOBALS['TL_LANG']['MSC']['all_fields'][0] = 'Vorhandene Felder';
$GLOBALS['TL_LANG']['MSC']['all_fields'][1] = 'Bitte wählen Sie die Felder aus, die Sie bearbeiten möchten.';
$GLOBALS['TL_LANG']['MSC']['password'][0] = 'Passwort';
$GLOBALS['TL_LANG']['MSC']['password'][1] = 'Bitte geben Sie ein Passwort ein.';
$GLOBALS['TL_LANG']['MSC']['confirm'][0] = 'Bestätigung';
$GLOBALS['TL_LANG']['MSC']['confirm'][1] = 'Bitte bestätigen Sie das Passwort.';
$GLOBALS['TL_LANG']['MSC']['dateAdded'][0] = 'Hinzugefügt am';
$GLOBALS['TL_LANG']['MSC']['dateAdded'][1] = 'Hinzugefügt am: %s';
$GLOBALS['TL_LANG']['MSC']['lastLogin'][0] = 'Letzte Anmeldung';
$GLOBALS['TL_LANG']['MSC']['lastLogin'][1] = 'Letzte Anmeldung: %s';
$GLOBALS['TL_LANG']['MSC']['move_up'][0] = 'Nach oben';
$GLOBALS['TL_LANG']['MSC']['move_up'][1] = 'Den Eintrag eine Position nach oben verschieben';
$GLOBALS['TL_LANG']['MSC']['move_down'][0] = 'Nach unten';
$GLOBALS['TL_LANG']['MSC']['move_down'][1] = 'Den Eintrag eine Position nach unten verschieben';
$GLOBALS['TL_LANG']['MSC']['staticFiles'][0] = 'Datei-URL';
$GLOBALS['TL_LANG']['MSC']['staticFiles'][1] = 'Die Datei-URL gilt für das <em>files</em>-Verzeichnis (Page-Speed-Optimierung).';
$GLOBALS['TL_LANG']['MSC']['staticPlugins'][0] = 'Assets-URL';
$GLOBALS['TL_LANG']['MSC']['staticPlugins'][1] = 'Die Assets-URL gilt für das <em>assets</em>-Verzeichnis (Page-Speed-Optimierung).';
$GLOBALS['TL_LANG']['MSC']['shortcuts'][0] = 'Backend-Tastaturkürzel';
$GLOBALS['TL_LANG']['MSC']['shortcuts'][1] = 'Wie Sie Ihren Arbeitsablauf durch die Verwendung von <a href="http://contao.org/de/keyboard-shortcuts.html" title="Übersicht der Tastaturkürzel auf contao.org" target="_blank">Tastaturkürzeln</a> beschleunigen.';
$GLOBALS['TL_LANG']['MSC']['toggleAll'][0] = 'Alle umschalten';
$GLOBALS['TL_LANG']['MSC']['toggleAll'][1] = 'Alle Knoten öffnen bzw. schließen';
$GLOBALS['TL_LANG']['MSC']['lockedAccount'][0] = 'Ein Contao-Konto wurde gesperrt';
$GLOBALS['TL_LANG']['MSC']['lockedAccount'][1] = "Das folgende Contao-Konto wurde aus Sicherheitsgründen gesperrt:\n\nBenutzer: %s\nName: %s\nWebseite: %s\n\nDer Account wurde für %d Minuten gesperrt, weil der Benutzer dreimal hintereinander ein falsches Passwort eingegeben hat. Nach Ablauf der Sperrfrist wird das Konto automatisch wieder entsperrt.\n\nDiese E-Mail wurde von Contao generiert. Sie können nicht darauf antworten.\n";
$GLOBALS['TL_LANG']['MSC']['toggleMobile'][0] = 'Mobile Version';
$GLOBALS['TL_LANG']['MSC']['toggleMobile'][1] = 'Zur mobilen Version wechseln';
$GLOBALS['TL_LANG']['MSC']['toggleDesktop'][0] = 'Desktop-Version';
$GLOBALS['TL_LANG']['MSC']['toggleDesktop'][1] = 'Zur Desktop-Version wechseln';
$GLOBALS['TL_LANG']['MSC']['feLink'] = 'Zum Frontend';
$GLOBALS['TL_LANG']['MSC']['fePreview'] = 'Frontend-Vorschau';
$GLOBALS['TL_LANG']['MSC']['fePreviewTitle'] = 'Vorschau der Webseite in einem neuen Fenster';
$GLOBALS['TL_LANG']['MSC']['feUser'] = 'Frontend-Benutzer';
$GLOBALS['TL_LANG']['MSC']['backToTop'] = 'Nach oben';
$GLOBALS['TL_LANG']['MSC']['backToTopTitle'] = 'An den Anfang der Seite springen';
$GLOBALS['TL_LANG']['MSC']['home'] = 'Startseite';
$GLOBALS['TL_LANG']['MSC']['homeTitle'] = 'Zurück zur Backend-Startseite';
$GLOBALS['TL_LANG']['MSC']['user'] = 'Benutzer';
$GLOBALS['TL_LANG']['MSC']['loginTo'] = 'Anmelden bei %s';
$GLOBALS['TL_LANG']['MSC']['loginBT'] = 'Anmelden';
$GLOBALS['TL_LANG']['MSC']['logoutBT'] = 'Abmelden';
$GLOBALS['TL_LANG']['MSC']['logoutBTTitle'] = 'Die aktuelle Sitzung beenden';
$GLOBALS['TL_LANG']['MSC']['backBT'] = 'Zurück';
$GLOBALS['TL_LANG']['MSC']['backBTTitle'] = 'Zurück zur vorherigen Seite';
$GLOBALS['TL_LANG']['MSC']['cancelBT'] = 'Abbrechen';
$GLOBALS['TL_LANG']['MSC']['deleteConfirm'] = 'Soll der Eintrag ID %s wirklich gelöscht werden?';
$GLOBALS['TL_LANG']['MSC']['delAllConfirm'] = 'Wollen Sie die ausgewählten Einträge wirklich löschen?';
$GLOBALS['TL_LANG']['MSC']['filterRecords'] = 'Datensätze';
$GLOBALS['TL_LANG']['MSC']['filterAll'] = 'Alle';
$GLOBALS['TL_LANG']['MSC']['showRecord'] = 'Details des Datensatzes %s anzeigen';
$GLOBALS['TL_LANG']['MSC']['editRecord'] = 'Datensatz %s bearbeiten';
$GLOBALS['TL_LANG']['MSC']['all_info'] = 'Ausgewählte Datensätze der Tabelle %s bearbeiten';
$GLOBALS['TL_LANG']['MSC']['showOnly'] = 'Anzeigen';
$GLOBALS['TL_LANG']['MSC']['sortBy'] = 'Sortieren';
$GLOBALS['TL_LANG']['MSC']['filter'] = 'Filtern';
$GLOBALS['TL_LANG']['MSC']['search'] = 'Suchen';
$GLOBALS['TL_LANG']['MSC']['noResult'] = 'Keine Einträge gefunden.';
$GLOBALS['TL_LANG']['MSC']['save'] = 'Speichern';
$GLOBALS['TL_LANG']['MSC']['saveNclose'] = 'Speichern und schließen';
$GLOBALS['TL_LANG']['MSC']['saveNedit'] = 'Speichern und bearbeiten';
$GLOBALS['TL_LANG']['MSC']['saveNback'] = 'Speichern und zurück';
$GLOBALS['TL_LANG']['MSC']['saveNcreate'] = 'Speichern und neu';
$GLOBALS['TL_LANG']['MSC']['continue'] = 'Weiter';
$GLOBALS['TL_LANG']['MSC']['close'] = 'Schließen';
$GLOBALS['TL_LANG']['MSC']['skipNavigation'] = 'Navigation überspringen';
$GLOBALS['TL_LANG']['MSC']['selectAll'] = 'Alle auswählen';
$GLOBALS['TL_LANG']['MSC']['pw_new'] = 'Passwort ändern';
$GLOBALS['TL_LANG']['MSC']['pw_change'] = 'Bitte geben Sie ein neues Passwort ein';
$GLOBALS['TL_LANG']['MSC']['pw_changed'] = 'Das Passwort wurde aktualisiert.';
$GLOBALS['TL_LANG']['MSC']['fallback'] = 'Standard';
$GLOBALS['TL_LANG']['MSC']['view'] = 'In einem neuen Fenster öffnen';
$GLOBALS['TL_LANG']['MSC']['fullsize'] = 'Großansicht des Bildes in einem neuen Fenster öffnen';
$GLOBALS['TL_LANG']['MSC']['datepicker'] = 'Datum auswählen';
$GLOBALS['TL_LANG']['MSC']['colorpicker'] = 'Farbe auswählen';
$GLOBALS['TL_LANG']['MSC']['pagepicker'] = 'Seiten auswählen';
$GLOBALS['TL_LANG']['MSC']['filepicker'] = 'Dateien auswählen';
$GLOBALS['TL_LANG']['MSC']['ppHeadline'] = 'Contao-Seiten';
$GLOBALS['TL_LANG']['MSC']['fpHeadline'] = 'Contao-Dateien';
$GLOBALS['TL_LANG']['MSC']['yes'] = 'ja';
$GLOBALS['TL_LANG']['MSC']['no'] = 'nein';
$GLOBALS['TL_LANG']['MSC']['goBack'] = 'Zurück';
$GLOBALS['TL_LANG']['MSC']['reload'] = 'Neu laden';
$GLOBALS['TL_LANG']['MSC']['above'] = 'oberhalb';
$GLOBALS['TL_LANG']['MSC']['below'] = 'unterhalb';
$GLOBALS['TL_LANG']['MSC']['date'] = 'Datum';
$GLOBALS['TL_LANG']['MSC']['tstamp'] = 'Änderungsdatum';
$GLOBALS['TL_LANG']['MSC']['entry'] = '%s Eintrag';
$GLOBALS['TL_LANG']['MSC']['entries'] = '%s Einträge';
$GLOBALS['TL_LANG']['MSC']['files'] = '%s Datei(en)';
$GLOBALS['TL_LANG']['MSC']['left'] = 'linksbündig';
$GLOBALS['TL_LANG']['MSC']['center'] = 'zentriert';
$GLOBALS['TL_LANG']['MSC']['right'] = 'rechtsbündig';
$GLOBALS['TL_LANG']['MSC']['justify'] = 'Blocksatz';
$GLOBALS['TL_LANG']['MSC']['filetree'] = 'Dateisystem';
$GLOBALS['TL_LANG']['MSC']['male'] = 'Männlich';
$GLOBALS['TL_LANG']['MSC']['female'] = 'Weiblich';
$GLOBALS['TL_LANG']['MSC']['fileSize'] = 'Dateigröße';
$GLOBALS['TL_LANG']['MSC']['fileCreated'] = 'Erstellt am';
$GLOBALS['TL_LANG']['MSC']['fileModified'] = 'Zuletzt geändert am';
$GLOBALS['TL_LANG']['MSC']['fileAccessed'] = 'Letzter Zugriff am';
$GLOBALS['TL_LANG']['MSC']['fileDownload'] = 'Herunterladen';
$GLOBALS['TL_LANG']['MSC']['fileDownloadTitle'] = 'Diese Datei herunterladen';
$GLOBALS['TL_LANG']['MSC']['fileImageSize'] = 'Breite/Höhe in Pixeln';
$GLOBALS['TL_LANG']['MSC']['filePath'] = 'Relativer Pfad';
$GLOBALS['TL_LANG']['MSC']['version'] = 'Version';
$GLOBALS['TL_LANG']['MSC']['restore'] = 'Wiederherstellen';
$GLOBALS['TL_LANG']['MSC']['backendModules'] = 'Backend-Module';
$GLOBALS['TL_LANG']['MSC']['welcomeTo'] = '%s Backend';
$GLOBALS['TL_LANG']['MSC']['updateVersion'] = 'Contao Version %s verfügbar';
$GLOBALS['TL_LANG']['MSC']['wordWrap'] = 'Zeilenumbruch';
$GLOBALS['TL_LANG']['MSC']['saveAlert'] = 'ACHTUNG! Nicht gespeicherte Änderungen gehen verloren. Fortfahren?';
$GLOBALS['TL_LANG']['MSC']['toggleNodes'] = 'Alle öffnen/schließen';
$GLOBALS['TL_LANG']['MSC']['expandNode'] = 'Bereich öffnen';
$GLOBALS['TL_LANG']['MSC']['collapseNode'] = 'Bereich schließen';
$GLOBALS['TL_LANG']['MSC']['loadingData'] = 'Die Daten werden geladen';
$GLOBALS['TL_LANG']['MSC']['deleteSelected'] = 'Löschen';
$GLOBALS['TL_LANG']['MSC']['editSelected'] = 'Bearbeiten';
$GLOBALS['TL_LANG']['MSC']['overrideSelected'] = 'Überschreiben';
$GLOBALS['TL_LANG']['MSC']['moveSelected'] = 'Verschieben';
$GLOBALS['TL_LANG']['MSC']['copySelected'] = 'Kopieren';
$GLOBALS['TL_LANG']['MSC']['aliasSelected'] = 'Aliase generieren';
$GLOBALS['TL_LANG']['MSC']['changeSelected'] = 'Auswahl ändern';
$GLOBALS['TL_LANG']['MSC']['resetSelected'] = 'Auswahl aufheben';
$GLOBALS['TL_LANG']['MSC']['fileManager'] = 'Dateimanager in einem Popup-Fenster öffnen';
$GLOBALS['TL_LANG']['MSC']['systemMessages'] = 'Systemnachrichten';
$GLOBALS['TL_LANG']['MSC']['clearClipboard'] = 'Ablage leeren';
$GLOBALS['TL_LANG']['MSC']['hiddenElements'] = 'Unveröffentlichte Elemente';
$GLOBALS['TL_LANG']['MSC']['hiddenHide'] = 'verstecken';
$GLOBALS['TL_LANG']['MSC']['hiddenShow'] = 'anzeigen';
$GLOBALS['TL_LANG']['MSC']['apply'] = 'Anwenden';
$GLOBALS['TL_LANG']['MSC']['applyTitle'] = 'Die Änderungen anwenden';
$GLOBALS['TL_LANG']['MSC']['mandatory'] = 'Pflichtfeld';
$GLOBALS['TL_LANG']['MSC']['create'] = 'Anlegen';
$GLOBALS['TL_LANG']['MSC']['delete'] = 'Löschen';
$GLOBALS['TL_LANG']['MSC']['protected'] = 'geschützt';
$GLOBALS['TL_LANG']['MSC']['guests'] = 'nur Gäste';
$GLOBALS['TL_LANG']['MSC']['updateMode'] = 'Update-Modus';
$GLOBALS['TL_LANG']['MSC']['updateAdd'] = 'Ausgewählte Werte hinzufügen';
$GLOBALS['TL_LANG']['MSC']['updateRemove'] = 'Ausgewählte Werte entfernen';
$GLOBALS['TL_LANG']['MSC']['updateReplace'] = 'Bestehende Einträge überschreiben';
$GLOBALS['TL_LANG']['MSC']['ascending'] = 'aufsteigend';
$GLOBALS['TL_LANG']['MSC']['descending'] = 'absteigend';
$GLOBALS['TL_LANG']['MSC']['default'] = 'Standard';
$GLOBALS['TL_LANG']['MSC']['helpWizard'] = 'Den Hilfe-Assistent aufrufen';
$GLOBALS['TL_LANG']['MSC']['helpWizardTitle'] = 'Hilfe-Assistent';
$GLOBALS['TL_LANG']['MSC']['noCookies'] = 'Für die Nutzung von Contao müssen Cookies erlaubt sein.';
$GLOBALS['TL_LANG']['MSC']['copyOf'] = '%s (Kopie)';
$GLOBALS['TL_LANG']['MSC']['coreOnlyMode'] = 'Contao läuft momentan im <strong>abgesicherten Modus</strong>, in dem nur Core-Module geladen werden, um Fehlern durch inkompatible Third-Party-Erweiterungen vorzubeugen. Nach Prüfung der installierten Erweiterungen können Sie den abgesicherten Modus wieder deaktivieren.';
$GLOBALS['TL_LANG']['MSC']['name'] = 'Name';
$GLOBALS['TL_LANG']['MSC']['emailAddress'] = 'E-Mail-Adresse';
$GLOBALS['TL_LANG']['MSC']['register'] = 'Registrieren';
$GLOBALS['TL_LANG']['MSC']['accountActivated'] = 'Ihr Konto wurde aktiviert.';
$GLOBALS['TL_LANG']['MSC']['accountError'] = 'Die Anfrage kann nicht verarbeitet werden.';
$GLOBALS['TL_LANG']['MSC']['emailSubject'] = 'Ihre Registrierung auf %s';
$GLOBALS['TL_LANG']['MSC']['adminSubject'] = 'Neue Registrierung auf %s';
$GLOBALS['TL_LANG']['MSC']['adminText'] = 'Ein neues Mitglied (ID %s) hat sich auf Ihrer Webseite registriert.%sFalls Sie die automatische E-Mail-Aktivierung nicht nutzen, müssen Sie das Konto manuell im Backend aktivieren.';
$GLOBALS['TL_LANG']['MSC']['requestPassword'] = 'Neues Passwort anfordern';
$GLOBALS['TL_LANG']['MSC']['setNewPassword'] = 'Passwort übernehmen';
$GLOBALS['TL_LANG']['MSC']['newPasswordSet'] = 'Ihr Passwort wurde aktualisiert.';
$GLOBALS['TL_LANG']['MSC']['passwordSubject'] = 'Ihre Passwortanfrage für %s';
$GLOBALS['TL_LANG']['MSC']['accountNotFound'] = 'Kein passendes Konto gefunden';
$GLOBALS['TL_LANG']['MSC']['securityQuestion'] = 'Sicherheitsfrage';
$GLOBALS['TL_LANG']['MSC']['closeAccount'] = 'Konto schließen';
$GLOBALS['TL_LANG']['MSC']['changeSelection'] = 'Auswahl ändern';
$GLOBALS['TL_LANG']['MSC']['currentlySelected'] = 'Ausgewählt';
$GLOBALS['TL_LANG']['MSC']['selectNode'] = 'Nur diesen Knoten anzeigen';
$GLOBALS['TL_LANG']['MSC']['selectAllNodes'] = 'Alle Knoten anzeigen';
$GLOBALS['TL_LANG']['MSC']['showDifferences'] = 'Unterschiede anzeigen';
$GLOBALS['TL_LANG']['MSC']['editElement'] = 'Element bearbeiten';
$GLOBALS['TL_LANG']['MSC']['table'] = 'Tabelle';
$GLOBALS['TL_LANG']['MSC']['description'] = 'Beschreibung';
$GLOBALS['TL_LANG']['MSC']['noVersions'] = 'Zur Zeit sind keine Versionen vorhanden.';
$GLOBALS['TL_LANG']['MSC']['latestChanges'] = 'Zuletzt bearbeitet';
$GLOBALS['TL_LANG']['MSC']['identicalVersions'] = 'Die beiden ausgewählten Versionen sind identisch.';
$GLOBALS['TL_LANG']['MSC']['selectNewPosition'] = 'Legen Sie als Nächstes die (neue) Position des Elements fest';
$GLOBALS['TL_LANG']['MSC']['go'] = 'Los';
$GLOBALS['TL_LANG']['MSC']['quicknav'] = 'Quicknavigation';
$GLOBALS['TL_LANG']['MSC']['quicklink'] = 'Quicklink';
$GLOBALS['TL_LANG']['MSC']['username'] = 'Benutzername';
$GLOBALS['TL_LANG']['MSC']['login'] = 'Anmelden';
$GLOBALS['TL_LANG']['MSC']['logout'] = 'Abmelden';
$GLOBALS['TL_LANG']['MSC']['loggedInAs'] = 'Sie sind angemeldet als %s.';
$GLOBALS['TL_LANG']['MSC']['emptyField'] = 'Bitte geben Sie Benutzername und Passwort ein!';
$GLOBALS['TL_LANG']['MSC']['confirmation'] = 'Bestätigung';
$GLOBALS['TL_LANG']['MSC']['sMatches'] = '%s Vorkommen für %s';
$GLOBALS['TL_LANG']['MSC']['sEmpty'] = 'Keine Ergebnisse für <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['sResults'] = 'Ergebnisse %s - %s von %s für <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['sNoResult'] = 'Ihre Suche nach <strong>%s</strong> ergab keine Treffer.';
$GLOBALS['TL_LANG']['MSC']['seconds'] = 'Sekunden';
$GLOBALS['TL_LANG']['MSC']['up'] = 'Nach oben';
$GLOBALS['TL_LANG']['MSC']['first'] = '&#171; Anfang';
$GLOBALS['TL_LANG']['MSC']['previous'] = 'Zurück';
$GLOBALS['TL_LANG']['MSC']['next'] = 'Vorwärts';
$GLOBALS['TL_LANG']['MSC']['last'] = 'Ende &#187;';
$GLOBALS['TL_LANG']['MSC']['goToPage'] = 'Gehe zu Seite %s';
$GLOBALS['TL_LANG']['MSC']['totalPages'] = 'Seite %s von %s';
$GLOBALS['TL_LANG']['MSC']['fileUploaded'] = 'Die Datei %s wurde erfolgreich hochgeladen.';
$GLOBALS['TL_LANG']['MSC']['fileExceeds'] = 'Das Bild %s wurde erfolgreich hochgeladen, ist jedoch zu groß für die automatische Bildbearbeitung.';
$GLOBALS['TL_LANG']['MSC']['fileResized'] = 'Das Bild %s wurde erfolgreich hochgeladen und auf die maximalen Abmessungen verkleinert.';
$GLOBALS['TL_LANG']['MSC']['searchLabel'] = 'Suchen';
$GLOBALS['TL_LANG']['MSC']['keywords'] = 'Suchbegriffe';
$GLOBALS['TL_LANG']['MSC']['options'] = 'Optionen';
$GLOBALS['TL_LANG']['MSC']['matchAll'] = 'finde alle Wörter';
$GLOBALS['TL_LANG']['MSC']['matchAny'] = 'finde irgendein Wort';
$GLOBALS['TL_LANG']['MSC']['saveData'] = 'Daten speichern';
$GLOBALS['TL_LANG']['MSC']['printPage'] = 'Diese Seite drucken';
$GLOBALS['TL_LANG']['MSC']['printAsPdf'] = 'Artikel als PDF drucken';
$GLOBALS['TL_LANG']['MSC']['facebookShare'] = 'Auf Facebook teilen';
$GLOBALS['TL_LANG']['MSC']['twitterShare'] = 'Auf Twitter teilen';
$GLOBALS['TL_LANG']['MSC']['gplusShare'] = 'Auf Google+ teilen';
$GLOBALS['TL_LANG']['MSC']['pleaseWait'] = 'Bitte warten Sie';
$GLOBALS['TL_LANG']['MSC']['loading'] = 'Laden …';
$GLOBALS['TL_LANG']['MSC']['more'] = 'Weiterlesen …';
$GLOBALS['TL_LANG']['MSC']['readMore'] = 'Den Artikel lesen: %s';
$GLOBALS['TL_LANG']['MSC']['targetPage'] = 'Zielseite';
$GLOBALS['TL_LANG']['MSC']['invalidPage'] = 'Der Eintrag "%s" existiert leider nicht.';
$GLOBALS['TL_LANG']['MSC']['list_orderBy'] = 'Sortiere nach %s';
$GLOBALS['TL_LANG']['MSC']['list_perPage'] = 'Ergebnisse pro Seite';
$GLOBALS['TL_LANG']['MSC']['published'] = 'Veröffentlicht';
$GLOBALS['TL_LANG']['MSC']['unpublished'] = 'Nicht veröffentlicht';
$GLOBALS['TL_LANG']['MSC']['addComment'] = 'Einen Kommentar schreiben';
$GLOBALS['TL_LANG']['MSC']['autologin'] = 'Angemeldet bleiben';
$GLOBALS['TL_LANG']['MSC']['relevance'] = '%s Relevanz';
$GLOBALS['TL_LANG']['MSC']['invalidTokenUrl'] = 'Ungültiges Token';
$GLOBALS['TL_LANG']['MSC']['changelog'] = 'Änderungsliste';
$GLOBALS['TL_LANG']['MSC']['coreOnlyOff'] = 'Deaktivieren';
$GLOBALS['TL_LANG']['MSC']['dragItemsHint'] = 'Elemente können durch Ziehen umsortiert werden';
$GLOBALS['TL_LANG']['UNITS'][0] = 'Byte';
$GLOBALS['TL_LANG']['UNITS'][1] = 'KiB';
$GLOBALS['TL_LANG']['UNITS'][2] = 'MiB';
$GLOBALS['TL_LANG']['UNITS'][3] = 'GiB';
$GLOBALS['TL_LANG']['UNITS'][4] = 'TiB';
$GLOBALS['TL_LANG']['UNITS'][5] = 'PiB';
$GLOBALS['TL_LANG']['UNITS'][6] = 'EiB';
$GLOBALS['TL_LANG']['UNITS'][7] = 'ZiB';
$GLOBALS['TL_LANG']['UNITS'][8] = 'YiB';
$GLOBALS['TL_LANG']['CONFIRM']['do'] = 'Modul';
$GLOBALS['TL_LANG']['CONFIRM']['table'] = 'Betroffene Tabelle';
$GLOBALS['TL_LANG']['CONFIRM']['act'] = 'Aktion';
$GLOBALS['TL_LANG']['CONFIRM']['id'] = 'Betroffener Datensatz';
$GLOBALS['TL_LANG']['DP']['select_a_time'] = 'Uhrzeit auswählen';
$GLOBALS['TL_LANG']['DP']['use_mouse_wheel'] = 'Ändern Sie die Werte mit Hilfe des Mausrads';
$GLOBALS['TL_LANG']['DP']['time_confirm_button'] = 'OK';
$GLOBALS['TL_LANG']['DP']['apply_range'] = 'Anwenden';
$GLOBALS['TL_LANG']['DP']['cancel'] = 'Abbrechen';
$GLOBALS['TL_LANG']['DP']['week'] = 'W';
