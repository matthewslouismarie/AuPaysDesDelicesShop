document.addEventListener('DOMContentLoaded', function () {
    var dom_observer = new MutationObserver(function(mutation) {
        jQuery(document).ready(function() {
        });
    });
    var container = document.body;
    var config = { attributes: true, childList: true, characterData: true };
    dom_observer.observe(container, config);
    jQuery(document).bind('DOMNodeInserted', function(){
            jQuery("label:contains('Username or E-mail')").text('Pseudonyme ou Courriel');
            jQuery(".userpro-field-user_pass_confirm label:contains('Password')").text('Confirmer mot de passe');
            jQuery("label:contains('Antispam Question')").text('Question Antispam');
            jQuery("label:contains('Password')").text('Mot de Passe');
            jQuery("label:contains('Username')").text('Pseudonyme');
            jQuery("label:contains('E-mail Address')").text('Courriel');
            jQuery("label:contains('Profile Display Name')").text('Nom Tel Qu\'affiché');
            jQuery("label:contains('Profile Picture')").text('Photo de profil');
            jQuery("label:contains('Gender')").text('Sexe');
            jQuery("label:contains('Country/Region')").text('Pays');
            jQuery("label:contains('Facebook Page')").text('Page Facebook');
            jQuery("label:contains('First Name')").text('Prénom');
            jQuery("label:contains('Last Name')").text('Nom de Famille');
            jQuery("label:contains('Biography')").text('Biographie');
            jQuery("label:contains('Website (URL)')").text('Site Web');
    });
});
