<?php
/**
 * Romanian language file
 * @author Alexandru Cuciureanu
 * @package p01-contact
 */
$p01contact_lang = array(
// fields
'name'    => 'Nume',
'email'   => 'Email',
'address' => 'Adresa postala',
'phone'   => 'Numar telefon',
'website' => 'Website',
'subject' => 'Subiect',
'message' => 'Mesaj',
'file'    => 'Atasament',
'captcha' => 'Captcha',
'reload'  => 'Reincarcare',
'fieldcaptcha' => 'Te rog sa nu completezi urmatorul spatiu :',
'askcopy' => 'Trimite-mi o copie al acestui email',
'send'    => 'Trimite',

// email words
'askedcopy'=> 'A fost solicitata o copie al acestui email',
'nofrom'   => 'Anonim',
'nosubject'=> '(Fara subiect)',
'fromsite' => 'Mesaj trimis de',
'sentfrom' => 'Acest email a fost trimis de pe pagina',
        
// status messages
'sent'    => 'Mesajul a fost trimis.',
'error'   => 'Eroare : mesajul nu a fost trimis.',
'disable' => 'Formularele de contact sunt dezactivate.',
'target'  => 'Acest formular de contact nu are un recipient.',
'token'   => 'Mesajul a fost deja trimis.',

// fields errors
'field_required'=> 'Acest spatiu trebuie completat',
'field_email'   => 'Te rog sa completezi o adresa de email valida',
'field_phone'   => 'Te rog sa folosesti un numar de telefon valid',
'field_website' => 'Te rog sa introduci o adresa de web valida',
'field_message' => 'Te rog sa scrii un mesaj mai lung',
'field_captcha' => 'Te rog copiaza urmatorul text',
'field_fieldcaptcha' => 'Te rog sa nu completezi urmatorul spatiu',
'field_password'=> 'Parola gresita',

// configuration panel

'config_title' => 'Configurare p01contact',

// messages
'config_updated' => 'Schimbarile tale au fost salvate.',

'config_error_open' =>
'<b>Nu a putut fi deschis fisierul de configurare.</b> 
Verifica daca fisierul exista sau daca ai permisiunile corecte :',

'config_error_modify' => 
'<b>Nu a putut fi modificat fisierul de configurare.</b> 
Verifica permisiunile :',

// New release alert
'new_release' => 'Exista o noua versiune!',
'download' => 'Descarca ultima versiune',

// Links
'doc' => 'Documentatie',
'forum' => 'Forum',

// Parameters
'enable'     => 'Activeaza',
'enable_sub' =>
'Activeaza sau dezactiveaza trimiterea de email (nu ascunde formularul de contact).',

'default_email'     => 'Emailul implicit',
'default_email_sub' => 'Lasa spatiu gol pentru a seta ca',

'lang'     => 'Limba',
'lang_sub' => 'Limba implicita este setata ca',

'default_params'     => 'Parametri impliciti',
'default_params_sub' =>
'Etichete implicite in formular. Foloseste sintaxa din documentatie.',

'message_len'     => 'Lungimea minima a mesajului',
'message_len_sub' => 'Numarul minim de caractere pentru spatiile destinate mesajelor',

'checklists'     => 'Casute pentru bifat',
'blacklist'      => 'Blacklist',
'whitelist'      => 'Whitelist',
'checklists_sub' =>
'Blacklist : cuvinte care nu trebuie sa apara in email.<br />
Whitelist : posibile cuvinte care ar trebui sa apara in email.<br />
Separate de virgula.',

'general_fields' => 'Campuri generale',
'special_fields' => 'Campuri speciale',

'debug'     => 'Mod Debug',
'debug_sub' =>
'Dezactiveaza trimiterea mesajului, afiseaza structura de date p01-contact, date trimise prin POST si 
email care a fost trimis.',
'debug_warn'=> 'Nu activa siteul in productie!'
);
?>
