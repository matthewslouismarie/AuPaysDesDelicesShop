<?php

function populate_translation_array( & $array, string $language, string $domain ) {

	if ( 'fr_FR' === $language ) {
		if ( 'default' === $domain ) {
			$array['fr_FR']['default'] = array(
			'Make sure the query is spelled correctly and try again:'
				=> 'Assurez-vous de ne pas avoir fait de fautes de frappe et réessayez.',
			'No results found'
				=> 'Aucun résultat',
			'Make sure the url is spelled correctly and try again:'
				=> 'Vérifiez que l\'URL soit écrite correctement et réessayez : ',
			'All posts by %s'
				=> 'Tous les posts par %s',
			'My Recipes'
				=> 'Mes Recettes',
			'Status: '
				=> 'Statut : ',
			'Edit Recipe'
				=> 'Éditer la Recette',
			'One Comment'
				=> 'Un Commentaire',
			'%1$s Comments'
				=> '%1$s Commentaires',
			'Hide Comments'
				=> 'Masquer les Commentaires',
			'Comment navigation'
				=> 'Navigation des commentaires',
			'Older Comments'
				=> 'Commentaires Moins Récents',
			'Newer Comments'
				=> 'Commentaires Plus Récents',
			'Comments are closed.'
				=> 'Les commentaires sont fermés.',
			'Add Your Comment'
				=> 'Ajouter Votre Commentaire',
			'Make sure the query is spelled correctly and try again:'
				=> 'Assurez-vous que la requête soit correcte et réessayez.',
			'Share'
				=> 'Partager',
			'GIF'
				=> 'GIF',
			'Cooking Time: '
				=> 'Temps de Cuisson',
			'Read More'
				=> 'Lire Plus',
			'Comment'
				=> 'Commentaire',
			'Comments'
				=> 'Commentaires',
			'Views'
				=> 'Vues',
			'Top Menu'
				=> 'Menu de l\'en-tête',
			'Footer Menu'
				=> 'Menu du Pied de Page',
			'Archives/Index Sidebar'
				=> 'Barre Latérale de Archives/Index',
			'Footer Sidebar'
				=> 'Barre Latérale du Pied de Page',
			'Single Recipe Sidebar'
				=> 'Barre Latérale des Recettes Seules',
			'Single Recipe Comments Area Sidebar'
				=> 'Barre Latérale de la Zone des Commentaires des Recettes Seules',
			'Google font: on or off'
				=> 'Police Google : activée ou non',
			'Logged in as'
				=> 'Connecté en tant que : ',
			'My Profile'
				=> 'Mon Profil',
			'My Bookmarks'
				=> 'Mes Marque-pages',
			'Logout'
				=> 'Déconnexion',
			'Login'
				=> 'Connexion',
			'Register'
				=> 'Devenir Ambassadeur',
			'View your shopping cart'
				=> 'Voir votre panier',
			'%d item'
				=> '%d objet',
			'%d items'
				=> '%d objets',
			'Cart is empty'
				=> 'Le panier est vide',
			'Checkout Now'
				=> 'Passer à la Caisse Maintenant',
			'Checkout'
				=> 'Passer à la Caisse',
			'Install Required Plugins'
				=> 'Installer les Extensions Requises',
			'Install Plugins'
				=> 'Installer les Extensions',
			'Installing Plugin: %s'
				=> 'Installation de l\'Extension : %s',
			'Updating Plugin: %s'
				=> 'Mise à Jour de l\'Extension : %s',
			'Something went wrong with the plugin API.'
				=> 'L\'API de l\'extension a rencontré un problème.',
			'This theme requires the following plugin: %1$s.'
				=> 'Le thème nécessite l\'installation de l\'extension suivante : %1$s.',
			'This theme requires the following plugins: %1$s.'
				=> 'Le thème nécessite l\'installation des extensions suivantes : %1$s.',
			'This theme recommends the following plugin: %1$s.'
				=> 'Le thème recommande l\'extension suivante : %1$s.',
			'This theme recommends the following plugins: %1$s.'
				=> 'Le thèmee recommande les extensions suivantes : %1$s.',
			'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.'
				=> 'Les extensions suivantes ont besoin d\'être mises à jour pour une compatibilité maximale avec ce thème : %1$s.',
			'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.'
				=> 'Les extensions suivantes ont besoin d\'être mises à jour pour une compatibilité maximale avec ce thème : %1$s.',
			'There is an update available for: %1$s.'
				=> 'Il y a une mise à jour disponible pour : %1$s.',
			'There are updates available for the following plugins: %1$s.'
				=> 'Il y a des mises à jour disponibles pour les extensions suivantes : %1$s.',
			'The following required plugin is currently inactive: %1$s.'
				=> 'L\'extension suivante, qui est requise par le thème, est actuellement inactive : %1$s.',
			'The following required plugins are currently inactive: %1$s.'
				=> 'Les extensions suivantes, qui sont requises par le thème, sont actuellement inactives : %1$s.',
			'The following recommended plugin is currently inactive: %1$s.'
				=> 'L\'extension suivante, qui est recommandée par le thème, est actuellement inactive : %1$s.',
			'The following recommended plugins are currently inactive: %1$s.'
				=> 'Les extensions suivantes, qui sont recommandées par le thème, sont actuellement inactives : %1$s.',
			'Begin installing plugin'
				=> 'Commencer l\'installation de l\'extension',
			'Begin installing plugins'
				=> 'Commencer l\'installation des extensions',
			'Begin updating plugin'
				=> 'Commencer la mise à jour de l\'extension',
			'Begin updating plugins'
				=> 'Commencer la mise à jour des extensions',
			'Begin activating plugins'
				=> 'Commencer l\'activation des extensions',
			'Return to Required Plugins Installer'
				=> 'Revenir vers l\'Installeur des Extensions Requises',
			'Return to the Dashboard'
				=> 'Revenir vers le Tableau de bord',
			'Plugin activated successfully.'
				=> 'L\'extension a été activée avec succès',
			'The following plugin was activated successfully:'
				=> 'L\'extension suivante a été activée avec succès : ',
			'The following plugins were activated successfully:'
				=> 'Les extensions suivantes ont été activées avec succès : ',
			'No action taken. Plugin %1$s was already active.'
				=> 'Rien n\'a été fait. L\extension %1$s était déjà active.',
			'Plugin not activated. A higher version of %s is needed for this theme. '
				=> 'L\'extension n\'a pas été activée. Une version supérieure à %s est requise pour ce thème.',
			'Please update the plugin.'
				=> 'Merci de mettre à jour l\'extension.',
			'All plugins installed and activated successfully. %1$s'
				=> 'Toutes les extensions installées ont été activées avec succès. %1$s',
			'Dismiss this notice'
				=> 'Masquer ce message',
			'There are one or more required or recommended plugins to install, update or activate.'
				=> 'Il y a au moins une extension requise ou recommandée à installer, mettre à jour ou activer.',
			'Please contact the administrator of this site for help.'
				=> 'Merci de contacter l\'administrateur de ce site pour obtenir de l\'aide.',
			'This plugin needs to be updated to be compatible with your theme.'
				=> 'L\'extension a besoin d\'être mise à jour pour être compatible avec votre thème.',
			'Update Required'
				=> 'Mise à Jour Nécessaire',
			'The remote plugin package does not contain a folder with the desired slug and renaming did not work.'
				=> 'Le progiciel d\'extensions distant ne contient pas un dossier avec l\'identifiant souhaité et ce dossier n\' pas pu être renommé.',
			'Please contact the plugin provider and ask them to package their plugin according to the WordPress guidelines.'
				=> 'Merci de contacter le fournisseur de l\'extension et de leur demander d\'assembler leur extension en suivant les recommendations WordPress.',
			'The remote plugin package consists of more than one file, but the files are not packaged in a folder.'
				=> 'Le progiciel de l\'extension distant est constitué de plusieurs fichiers, mais ces fichiers ne sont pas rangés dans un dossier.',
			'and'
				=> 'et',
			'TGMPA v%s'
				=> 'TGMPA v%s',
			'Required'
				=> 'Requis',
			'Recommended'
				=> 'Recommendé',
			'WordPress Repository'
				=> 'Répertoire WordPress',
			'External Source'
				=> 'Source Externe',
			'Pre-Packaged'
				=> 'Pré-Assemblé',
			'Not Installed'
				=> 'Non Installé',
			'Installed But Not Activated'
				=> 'Installé Mais Non Activé',
			'Active'
				=> 'Actif/Active',
			'Required Update not Available'
				=> 'Mise à Jour Requise non Disponible',
			'Requires Update'
				=> 'Nécessite une Mise à Jour',
			'Update recommended'
				=> 'Mise à jour recommandée',
			'%1$s, %2$s'
				=> '%1$s, %2$s',
			'All <span class="count">(%s)</span>'
				=> 'Tous <span class="count">(%s)</span>',
			'To Install <span class="count">(%s)</span>'
				=> 'Pour Installer <span class="count">(%s)</span>',
			'Update Available <span class="count">(%s)</span>'
				=> 'Mise à Jour Disponible <span class="count">(%s)</span>',
			'To Activate <span class="count">(%s)</span>'
				=> 'Pour Activer <span class="count">(%s)</span>',
			'unknown'
				=> 'inconnu',
			'Installed version:'
				=> 'Version installée : ',
			'Minimum required version:'
				=> 'Version minimum requise : ',
			'Available version:'
				=> 'Version disponible : ',
			'No plugins to install, update or activate.'
				=> 'Aucune extension à installer, mettre à jour ou activer : ',
			'Plugin'
				=> 'Extension',
			'Source'
				=> 'Source',
			'Type'
				=> 'Type',
			'Version'
				=> 'Version',
			'Status'
				=> 'Statut',
			'Install %2$s'
				=> 'Installer %2$s',
			'Update %2$s'
				=> 'Mettre à Jour %2$s',
			'Activate %2$s'
				=> 'Activer %2$s',
			'Upgrade message from the plugin author:'
				=> 'Information sur la mise à niveau de l\'auteur de l\'extension : ',
			'Install'
				=> 'Installer',
			'Update'
				=> 'Mettre à Jour',
			'Activate'
				=> 'Activer',
			'No plugins were selected to be installed. No action taken.'
				=> 'Aucunes extensions n\'étaient sélectionnées pour être installées. Rien n\' été fait.',
			'No plugins were selected to be updated. No action taken.'
				=> 'Aucunes extensions n\'étaient sélectionnées pour être mises à jour. Rien n\' été fait.',
			'No plugins are available to be installed at this time.'
				=> 'Aucunes extensions ne peuvent être installées actuellement.',
			'No plugins are available to be updated at this time.'
				=> 'Aucunes extensions ne peuvent être mises à jour actuellement.',
			'No plugins were selected to be activated. No action taken.'
				=> 'Aucunes extensions n\'étaient sélectionnées pour être activées. Rien n\'a été fait.',
			'No plugins are available to be activated at this time.'
				=> 'Aucunes extensions ne peuvent être activées actuellement.',
			'Plugin activation failed.'
				=> 'L\extension n\'a pas pu être activé.',
			'Updating Plugin %1$s (%2$d/%3$d)'
				=> 'Mise à Jour de l\'Extension %1$s (%2$d/%3$d)',
			'An error occurred while installing %1$s: <strong>%2$s</strong>.'
				=> 'L\'installation a rencontré un problème : <strong>%2$s</strong>.',
			'The installation of %1$s failed.'
				=> '%1$s n\'a pas pu être installée.',
			'The installation and activation process is starting. This process may take a while on some hosts, so please be patient.'
				=> 'Les processus d\'installation et d\'activation ont débuté. Cela peut prendre un certain temps.',
			'%1$s installed and activated successfully.'
				=> '%1$s installé et activé avec succès.',
			'Show Details'
				=> 'Afficher les Détails',
			'Hide Details'
				=> 'Masquer les Détails',
			'All installations and activations have been completed.'
				=> 'Toutes les installations et activations sont finies.',
			'Installing and Activating Plugin %1$s (%2$d/%3$d)'
				=> 'Installation et Activation de l\'Extension %2$s (%2$d/%3$d)',
			'The installation process is starting. This process may take a while on some hosts, so please be patient.'
				=> 'L\'installation a commencé. Cela peut prendre un certain temps.',
			'%1$s installed successfully.'
				=> '%1$s installée avec succès.',
			'All installations have been completed.'
				=> 'Toutes les installations sont finies.',
			'Installing Plugin %1$s (%2$d/%3$d)'
				=> 'Installation de l\'Extension %1$s (%2$d/%3$d)',
			'No recipes found'
				=> 'Aucune recette trouvée',
			'Invalid data supplied'
				=> 'Données reçues invalides',
			'Liked'
				=> 'Aimé',
			'Like'
				=> 'J\'aime',
			'Loading…'
				=> 'Chargement…',
			'Vote'
				=> 'Vote',
			'%d Servings'
				=> '%d Portions',
			'Cooking Time:'
				=> 'Temps de Cuisson : ',
			'Easy'
				=> 'Facile',
			'Medium'
				=> 'Intermédiaire',
			'Hard'
				=> 'Difficile',
			'Previous Entries'
				=> 'Précédent',
			'Next Entries'
				=> 'Suivant',
			'Home'
				=> 'Accueil',
			'View all posts in %s'
				=> 'Voir tout dans %s',
			'failed to create css file'
				=> 'échoua à créer le fichier CSS',
			'Recipes'
				=> 'Recettes',
			'Search by ingredients'
				=> 'Recherche par ingrédient',
			'Click to select Ingredients for search...'
				=> 'Cliquez pour sélectionner des Ingrédients à rechercher…',
			'Searching...'
				=> 'Recherche…',
			'Find Recipes'
				=> 'Explorer les Recettes',
			'Submit Recipe'
				=> 'Proposer une Recette',
			'Your recipe has been submitted. We will review it and publish it shortly. In the meantime you can either publish another one using a form below or just continue browsing our website.'
				=> 'Votre recette a été proposée. Nous allons la vérifier et la publier rapidement. Vous pouvez tout à fait en proposer une autre en attendant.',
			'Update Recipe'
				=> 'Mettre à Jour la Recette',
			'Your recipe has been updated. We will review it and publish it shortly. In the meantime you can either submit/edit another one using a form below or just continue browsing our website.'
				=> 'Votre recette a été mise à jour. Nous allons la vérifier et la publier rapidement. Vous pouvez tout à fait en mettre à jour une autre.',
			'Submit your recipe'
				=> 'Soumettre votre recette',
			'Edit your recipe'
				=> 'Mettre à jour votre recette',
			'You do not have required permissions to submit recipes'
				=> 'Vous n\'avez pas les autorisations nécessaires pour proposer des recettes',
			'Login to submit your recipe'
				=> 'Connectez-vous pour proposer votre recette',
			'You do not have required permissions to edit this recipe.'
				=> 'Vous n\'avez pas les autorisations nécessaires pour mettre à jour cette recette.',
			'Recent Posts by %s:'
				=> 'Articles Récents par %s : ',
			'"%s" <span class="smaller-text">Query Search Results</span>'
				=> '"%s" <span class="smaller-text">Résultats de la Recherche</span>',
			'Search …'
				=> 'Recherche…',
			'Search for:'
				=> 'Rechercher : ',
			'Search'
				=> 'Recherche',
			'Start Reading Mode'
				=> 'Commencer le Mode Lecture',
			'Print'
				=> 'Imprimer',
			'Resume'
				=> 'Continuer',
			'Pause'
				=> 'Pause',
			'min'
				=> 'min',
			'Stop'
				=> 'Stop',
			'Start Timer'
				=> 'Lancer le Minuteur',
			'Cooking Time: %s'
				=> 'Temps de Cuisson : %s',
			'Serves %d'
				=> 'Pour %d',
			'Recipe Difficulty: %s'
				=> 'Difficulté de la Recette : %s',
			'Cooking Temperature: %s'
				=> 'Température de Cuisson : %s',
			'Share it on your social network:'
				=> 'Partager sur les réseaux sociaux : ',
			'Or you can just copy and share this url'
				=> 'Ou vous pouvez simplement copier et partager cette url',
			'Ingredients'
				=> 'Ingrédients',
			'Adjust Servings:'
				=> 'Régler le Nombre de Portions : ',
			'Nutritional information'
				=> 'Informations Nutritionelles',
			'Bookmark this recipe'
				=> 'Ajouter cette recette aux marque-pages',
			'Features:'
				=> 'Caractéristiques : ',
			'Cuisine:'
				=> 'Cuisine : ',
			'Directions'
				=> 'Instructions',
			'Steps'
				=> 'Étapes',
			'Done'
				=> 'Fait',
			'Recipe Reviews'
				=> 'Évaluations de la Recette',
			'Average Rating: '
				=> 'Score Moyen : ',
			'Total Reviews: '
				=> 'Nombre Total d\Évaluations : ',
			'There are no reviews for this recipe yet, use a form below to write your review'
				=> 'Il n\y a aucune évaluation pour cette recette pour l\'instant, utilisez ce formulaire pour écrire la votre',
			'Thank you for submitting your review, you can find it in a list above as soon as we process it.'
				=> 'Merci d\'avoir proposé votre évaluation, vous pourrez la trouver dans la liste ci-dessus dès que nous l\'avons traitée',
			'Write your own review'
				=> 'Écrivez votre propre évaluation',
			'Submit Review'
				=> 'Soumettre votre Évaluation',
			'Login to write a review'
				=> 'Connectez-vous pour écrire une évaluation',
			'previous'
				=> 'précédent',
			'next'
				=> 'suivant',
			'Related Recipes:'
				=> 'Recettes Suggérés : ',
			'Posted on'
				=> 'Posté le',
			'by'
				=> 'par',
			'Categories:'
				=> 'Catégories : ',
			'Neptune by Osetin'
				=> 'Neptune par Osetin',
			'http://neptune.pinsupreme.com'
				=> 'http://neptune.pinsupreme.com',
			'Food Recipes Wordpress Theme'
				=> 'Thème WordPress Food Recipes',
			'Tamik Soziev'
				=> 'Tamik Soziev',
			'http://soziev.com/'
				=> 'http://soziev.com/',
			'Add Media'
				=> 'Ajouter Média'
			);
			return;
		} elseif ( APDD_TEXT_DOMAIN === $domain ) {
			$array['fr_FR'][ APDD_TEXT_DOMAIN ] = array(
			'You did not write any comments yet.'
				=> 'Vous n\'avez écrit aucun commentaire.',
			'You do not have any bookmarks'
				=> 'Vous n\'avez aucun marque-pages pour le moment.',
			'Archives/Index Sidebar (fr_FR)'
				=> 'Barre Latérale de Archives/Index (fr_FR)',
			'This sidebar only gets displayed when the website is set in French (France). When that happens the default Archives/Index Sidebar is not displayed.'
				=> 'Cette barre latérale ne sera affichée que quand le site est réglée en français. Elle remplacera alors la Barre Latérale Archives/Index par défaut.',
			'Join the community'
				=> 'Devenez Ambassadeur',
			);
			return;
		} elseif ( 'acf' === $domain ) {
			$array['fr_FR']['acf'] = array(
				'No image selected' =>
					'Aucune image sélectionnée',
				'Add Image' =>
					'Ajouter une Image',
				'Visual' =>
					'Visuel',
			);
		} elseif ( 'top-10' === $domain ) {
			$array['fr_FR']['top-10'] = array(
				'(Visited %totalcount% times, %dailycount% visits today)'
					=> '(Visité %totalcount% fois, %dailycount% visites aujourd\'hui)',
			);
		} elseif ( 'userpro' === $domain ) {
			$array['fr_FR']['userpro'] = array(
			'Add a New Badge' => 'Ajouter un nouveau badge',
			'<span>%s</span> followers'
				=> 'suivi(e) par <span>%s</span> personne(s)',
			'<span>%s</span> following'
				=> 'suit <span>%s</span> personne(s)',
			'Username or E-mail'
				=> 'Pseudonyme ou Courriel',
			'Your password must be 8 characters long at least.'
				=> 'Votre mot de passe doit faire au moins 8 caractères.',
			'Confirm your Password'
				=> 'Confirmez votre Mot de Passe',
			'First Name'
				=> 'Prénom',
			'Last Name'
				=> 'Nom de Famille',
			'Profile Display Name'
				=> 'Nom Public',
			'Your profile name/nickname that is displayed to public.'
				=> 'Votre nom tel qu\'affiché sur votre profil.',
			'Username'
				=> 'Pseudonyme',
			'E-mail Address'
				=> 'Courriel',
			'Password'
				=> 'Mot de Passe',
			'Password Strength Meter'
				=> 'Sûreté du Mot de Passe',
			'Password too short'
				=> 'Mot de passe trop court',
			'Very Strong'
				=> 'Très Forte',
			'Strong'
				=> 'Forte',
			'Good'
				=> 'Bien',
			'Weak'
				=> 'Faible',
			'Very Weak'
				=> 'Très Faible',
			'Country/Region'
				=> 'Pays/Région',
			'Select your Country'
				=> 'Sélectionnez votre Pays',
			'Select your account type'
				=> 'Sélectionnez votre type de compte',
			'Profile Picture'
				=> 'Photo de Profil',
			'Upload a profile picture'
				=> 'Mettez en ligne votre photo de profil',
			'Upload a picture that presents you across the site.'
				=> 'Mettez en ligne une photo qui vous représentera sur tout le site',
			'Gender'
				=> 'Sexe',
			'Male'
				=> 'Homme',
			'Female'
				=> 'Femme',
			'Biography'
				=> 'Biographie',
			'Describe yourself.'
				=> 'Décrivez-vous.',
			'Facebook Page'
				=> 'Page Facebook',
			'Twitter'
				=> 'Twitter',
			'Google+'
				=> 'Google+',
			'Website (URL)'
				=> 'Site (URL)',
			'Are You A Human?'
				=> 'Êtes-vous un être human ?',
			'Editing a Badge' => 'Éditer un badge', 'Add Badges' => 'Ajouter des badges', 'Edit User Badges' => 'Éditer les badges de l’utilisateur', 'Edit Achievement Badges' => 'Éditer l’accomplissement du badge', 'Envato Customers' => 'Clients Envato', 'Badges and Achievements' => 'Badges et Accomplissements', 'Settings saved.' => 'Réglages enregistrés.', 'Settings are reset to default.' => 'Les réglages ont été réinitialisés.', 'You can find the achievement badges that you have created and edit the rules of achievement from this page.' => 'Vous pouvez trouver les badges d’accomplissement que vous avez créé et éditer les règles d’accomplissement depuis cette page.', 'Achievement Type' => 'Type d’accomplissement', 'Required' => 'Requis', 'Badge Title' => 'Titre du badge', 'Badge' => 'Badge', 'Actions' => 'Actions', 'Edit' => 'Éditer', 'Remove' => 'Supprimer', '%s Customers verified their purchase' => '%s clients ont vérifié leur achat', 'View Profile' => 'Voir le profil', 'If you want to add more badges, please put your badges as PNG in %s. To give a new badge, or assign a new achievement, click on a badge below to start.' => 'Si vous souhaitez ajouter plus de badges, veuillez placer vos badges au format PNG dans %s. Pour attribuer un nouveau badge, ou assigner un nouvel accomplissement, cliquez sur un badge ci-dessus pour commencer.', 'The title of badge will appear when user hovers over the badge e.g. Featured User, User of the Year, etc.' => 'Le titre du badge apparaîtra lorsque l’utilisateur survolera le badge. Ex : utilisateur de l’année, membre du staff, etc.', 'How users can get this badge?' => 'Comment les utilisateurs peuvent obtenir ce badge?', 'Give this badge to users (manual)' => 'Attribuer ce badge aux utilisateurs (manuel)', 'Require achievement (automatic)' => 'Nécessite un accomplissement (automatique)', 'Choose which users receive this badge' => 'Choisissez quels utilisateurs recevront ce badge', 'Choose...' => 'Choisissez...', 'You can assign this badge to specific to the users you want by choosing them here.' => 'Vous pouvez attribuer ce badge à des utilisateurs spécifiques en les sélectionnant ici.', 'Setup Achievement' => 'Paramétrer l’accomplissement', 'User has completed' => 'L’utilisateur a accompli', 'Posts (Any post type)' => 'Articles (de tout type)', 'Comments' => 'Commentaires', 'Submit' => 'Publier', 'Edit/Delete User Badges' => 'Éditer/Supprimer des badges d’utilisateurs', 'Select a user' => 'Sélectionnez un utilisateur', 'Select a user...' => 'Sélectionnez un utilisateur...', 'Find User Badges' => 'Trouver les badges de l’utilisateur', '%s\'s Given Badges' => 'Badges obtenus par %s', 'Delete Badge' => 'Supprimer le badge', 'This user does not have any manually assigned badges.' => 'Cet utilisateur n’a aucun badge attribué manuellement.', 'You did not choose any user.' => 'Vous n’avez pas choisi d’utilisateur.', 'You must choose a badge first.' => 'Vous devez d’abord choisir un badge.', 'You must enter a title for the badge.' => 'Vous devez entrer un titre pour le badge.', 'Badges have been assigned.' => 'Les badges ont été attribués.', 'You did not select any number for this achievement.' => 'Vous n’avez pas choisi un nombre pour cet accomplissement.', 'You must enter a required number of points for this badge.' => 'Vous devez choisir un nombre requis de points pour ce badge.', 'EMD Settings' => 'Paramètres d’EMD', 'Enhanced Member Directory' => 'Répertoire des membres amélioré', 'Your plugin pages have been rebuilt successfully.' => 'Vos pages ont été reconstruites avec succès.', 'All settings can be overriden using shortcode options.' => 'Tous les réglages peuvent être écrasés en utilisant les options des shortcodes', 'Global Layout Settings' => 'Réglages de la disposition générale', 'Number of results per page' => 'Nombre de résultats par page', 'Result Column Width' => 'Largeur de la colonne des résultats', 'A percentage (%) or pixel value. This decides how many columns the plugin will attempt to display relative to 100% width. Example: 30% means there will be max of 3 users per column.' => 'Valeur en pixel ou pourcentages (%). Cette valeur définit le nombre de colonnes que le plugin sera en mesure d’afficher par rapport à la largeur totale. Par exemple une valeur de 30% signifie qu’il pourra y avoir au maximum 3 utilisateurs par colonne.', 'Result Column Margin' => 'Marge de la colonne des résultats', 'Left margin applied to the result column, which leaves a gap so that whole width is close to 100% including the column widths.' => 'Marge de gauche appliquée à la colonne des résultats, ce qui laisse un espace de sorte que la largeur entière est proche de 100% y compris la largeur des colonnes.', 'Results Layout' => 'Disposition des résultats', 'Masonry' => 'Architecture', 'Grid / Fit Columns' => 'Grille / Forme des colonnes', 'Save Changes' => 'Enregistrer les modifications', 'Reset Options' => 'Réinitialiser les réglages', 'Previous' => 'Précédent', 'Next' => 'Suivant', 'No preference' => 'Aucune préférence', 'Only members with photo' => 'Uniquement les membres avec photo', 'Only members without photo' => 'Uniquement les membres sans photo', 'All accounts' => 'Tous les comptes', 'Only verified accounts' => 'Uniquement les comptes certifiés', 'All' => 'Tout', 'Select %s' => 'Choisissez %s', 'Customize your Search' => 'Personnalisez votre recherche', 'Filter Search' => 'Filtrer la recherche', 'View Full Profile' => 'Voir le profil intégral', 'No users are matching your search criteria.' => 'Aucun utilisateur ne correspond à votre recherche.', 'Done. You can use this seperate registration form by adding this to your register shortcode: type=%1$s Example: [userpro template=register type=%1$s]' => 'Fait. Vous pouvez utiliser ce formulaire d’inscription en ajoutant ceci à votre shortcode d’inscription: type=%1$s Exemple: [userpro template=register type=%1$s]', 'Now check all fields that you want to make available for this registration form. (Choose only these that apply)' => 'Maintenant sélectionnez tous les champs que vous souhaitez rendre disponibles dans ce formulaire d’inscription.', 'Setup Multiple Forms' => 'Paramétrer plusieurs formulaires', 'Multiple Registration Forms' => 'Formulaires d’inscription multiples', 'Default Registration Form to Use' => 'Formulaire d’inscription à utiliser par défaut', 'Choose your default form' => 'Choisissez le formulaire par défaut', 'Setup Multiple Register Forms' => 'Paramétrez plusieurs formulaires d’inscription', 'This feature helps you setup multiple or seperate registration forms. For example, If you want to have two seperate forms or more e.g. Customer, Seller, etc. This tool helps you create conditional forms, just follow the simple steps.' => 'Cette fonctionnalité vous aide à paramétrer plusieurs formulaires d’inscription. Par exemple, si vous souhaitez avoir deux formulaires différents ou plus pour les clients, les vendeurs, etc. Cet outils vous aide à créer un formulaire conditionnel, suivez simplement les étapes suivantes.', 'Quick Setup Guide' => 'Guide de démarrage rapide', 'First, setup all form fields including the multiple forms fields at the field customizer (Registration Fields) here' => 'Premièrement, paramétrez tous les champs y compris ceux des formulaires multiples dans le personnalisateur de champs (Champs d’inscription) ici', 'Enter a unique name below for a seperate registration form below to start.' => 'Entrez un nom unique ci-dessous pour démarrer un nouveau formulaire d’inscription.', 'Once entered a unique name (used to tell the plugin which fields/form group to display), you will be able to check all the fields that are available only in that specific registration form. Save and go!' => 'Une fois un nom unique renseigné (utilisé pour préciser au plugin quel champ/formulaire doit apparaître), vous serez en mesure de sélectionner tous les champs qui sont disponibles uniquement pour ce formulaire d’inscription. Enregistrez et c’est bon!', 'Enter a unique name to start' => 'Entrez un nom unique pour commencer.', 'example: customer_form' => 'exemple: customer_form', 'Done! Create another?' => 'Fait! En créer un autre?', 'Ready' => 'Prêt', 'Start' => 'Démarrer', 'Map All Users' => 'Cartographier tous les utilisateurs', 'Username' => 'Nom d’utilisateur', 'Role' => 'Rôles', 'Custom Field' => 'Champ personnalisé', 'Field Value' => 'Valeur du champ', 'Redirection URL' => 'URL de redirection', 'Remove Rule' => 'Supprimer la règle', 'You did not specify a redirection URL.' => 'Vous n’avez pas spécifié d’URL de redirection.', 'You did not specify any custom condition (e.g. specific user) for this redirection.' => 'Vous n’avez spécifié aucune condition personnalisée (par exemple un utilisateur spécifique) pour cette redirection.', 'Login Redirects' => 'Redirections de connexion', 'Registration Redirects' => 'Redirections d’inscription', 'Help' => 'Aide', 'Custom Redirects' => 'Redirections personnalisées', 'The top rules always have higher priority. So any new rule you add will be higher in priority and checked first in the redirection rules during login or registering (depending on where you set the redirection). You can setup a rule for a specific role, or a specific user, or perhaps redirect all users who choose United States as country to be redirected to a custom page. This addon also supports automatic mapping. Please check the help tab for examples and help.' => 'Les règles du haut ont toujours la priorité. Donc n’importe quelle règle que vous ajouterez sera la plus haut en priorité et sélectionnée en première dans les règles de redirection lors de la connexion ou de l’inscription (en fonction de où vous avez placé la redirection). Vous pouvez paramétrer une règle pour un rôle spécifique, ou un utilisateur spécifique, ou peut être rediriger tous les utilisateurs qui choisissent France comme pays vers une page personnalisée. Cet addon supporte également le mappage automatique. Veuillez regarder dans l’onglet d’aide pour voir des exemples.', 'Add New Redirection Rule' => 'Ajouter une nouvelle règle de redirection', '— For a specific role —' => '— Pour un rôle spécifique —', '— For a user / all users —' => '— Pour un utilisateur / tous les utilisateurs —', '— For a custom field —' => '— Pour un champ personnalisé —', 'If you want redirection based on specific custom field value enter the value here: (e.g. country or city) This is helpful if you wish to redirect users who have a specific city in profile, be redirected to a custom page after their login. If you wish to auto-map or redirect users automatically based on the custom field value you could use wildcards like this: {your_custom_field} in the redirection URL. The wildcard will also work on {username}' => 'Si vous voulez une redirection basée sur une valeur de champ personnalisée spécifique, entrez la valeur ici : (par exemple pays ou ville) C’est très utile si vous souhaitez que les utilisateurs qui ont une ville spécifique dans leur profil soient redirigés vers une page spécifique après leur connexion. Si vous souhaitez maper automatiquement ou rediriger automatiquement les utilisateurs en fonction d’un champ personnalisé vous pouvez utiliser les wildcards comme ceci : {your_custom_field} dans l’url de redirection. Cette wildcard fonctionnera également sur {username}', 'Enter field value' => 'Entrer une valeur de champ', 'You can use wildcards for automated mapping. For example, if you enter {username} that will be replaced automatically by the username in redirection url. If you want to map a custom field country then use the wildcart {country} to map the user to his country automatically. If you use wildcards, the field value is not required.' => 'Vous pouvez utiliser des wildcards pour un mapage automatique. Par exemple, si vous entrez {username} il sera automatiquement remplacé par le nom d’utilisateur dans l’url de redirection. Si vous voulez maper un champ personnalisé pays utilisez le wildcard {country} pour maper l’utilisateur à son pays automatiquement. Si vous utilisez les wildcards, les valeurs de champ de sont pas requises.', 'Enter redirection URL here.' => 'Entrez une URL de redirection ici', 'Submit New Rule' => 'Soumettre une nouvelle règle', 'Existing Login Redirects' => 'Redirections de connexion existantes', 'Existing Register Redirects' => 'Redirections d’inscription existantes', 'Social Extension Settings' => 'Réglages de l’extension sociale', 'Page Setup' => 'Paramètres des pages', 'Social Extension' => 'Extension sociale', 'You must update your permalinks or Save Changes on your permalinks setup for the nice URLs to work fine.' => 'Vous devez mettre à jour vos permaliens ou enregistrer les changements sur les réglages des permaliens pour avoir les bonnes URLs et que tout fonctionne parfaitement.', 'For a better multi-language experience, UserPro allow you to edit the slugs of the official registration/profile pages here. You must rebuild pages If you changed your slugs for the new slugs to take effect.' => 'Pour une meilleure expérience multilingue, UserPro vous permet d’éditer les liens des pages d’inscription/profil ici. Vous devez reconstruire les pages si vous changez les liens pour que ces derniers prennent effet.', 'Manage Page Slugs' => 'Gérer les liens des pages', '\\"Following\\" Slug' => 'Lien \\"Abonnements\\"', '\\"Followers\\" Slug' => 'Lien \\"Abonnés\\"', 'By default, the extension creates frontend pages automatically. However if for some reason, these pages were removed or deleted you can rebuild them here.' => 'Par défaut, UserPro crée des pages de profil, d’inscription et de connexion automatiquement. Si pour une quelconque raison ces pages devaient être supprimées vous pouvez les reconstruire ici.', 'Check / Rebuild Extension Pages' => 'Vérifier / Reconstruire les pages de profil', 'Following Page' => 'Page des abonnements', 'View Page' => 'Voir la page', 'Followers Page' => 'Page des abonnés', 'Rebuild Pages' => 'Reconstruire les pages', 'E-mail Notifications' => 'Notifications par email', 'Send e-mail notification when someone follow another user' => 'Envoyer un mail de notification lorsqu’un utilisateur s’abonne à un autre utilisateur', 'Yes' => 'Oui', 'No' => 'Non', 'New Follow E-mail Template' => '', 'Subject' => 'Rejeter', 'Email Content' => 'Contenu de l’e-mail', 'Activity Stream' => 'Fil d’actualité', 'Make public activity visible to guests' => 'Rendre l’activité publique visible aux invités', 'Exclude admin activity from wall' => 'Exlure l’activité des administrateurs', 'No. of activities per page' => 'No. d’activité par page', 'The number of items in activity stream to load per page.' => 'Le nombre d’éléments dans le fil d’actualité à charger par page.', 'Exclude these post types from activity' => 'Exclure ce type d’articles de l’activité', 'A comma seperated list of post types to hide from activity.' => 'Liste des types d’articles à masquer de l’activité, séparés par une virgule.', 'is now a verified account.' => 'est désormais un compte certifié.', 'has published a new %s.' => 'a publié un nouveau %s.', 'has updated a %s.' => 'a mis à jour un %s', 'has posted a new comment on:' => 'a posté un nouveau commentaire sur :', 'has started following %s' => 's’est abonné %s', 'has stopped following %s' => 's’est désabonné %s', 'has just registered!' => 'vient de s’inscrire !', 'you' => 'vous', '%s following' => '%s abonnements', '%s followers' => '%s abonnés', 'Follow' => 'Suivre', 'Unfollow' => 'Se désabonner', 'Following' => 'Abonné', 'Hi there,' => 'Bonjour,', '{USERPRO_FOLLOWER_NAME} is now following you on {USERPRO_BLOG_NAME}! You can click the following link to view his/her profile:' => '%s vous suit désormais sur %s! Vous pouvez cliquer sur le lien suivant pour voir son profil :', 'Or view your profile at:' => 'Ou consultez votre profil à :', 'This is an automated notification that was sent to you by UserPro. No further action is needed.' => 'Cette notification vous est envoyée automatiquement par UserPro. Aucune action supplémentaire n’est requise.', '{USERPRO_FOLLOWER_NAME} is now following you!' => '%s vous suit désormais !', 'Followers' => 'Abonnés', 'Recent Activity' => 'Activité récente', 'Close' => 'Fermer', 'Refresh' => 'Rafraîchir', 'View more activity' => 'Voir plus d’activité', 'There is no recent activity from the users you follow yet.' => 'Il n’y a aucune activité récente des utilisateurs auxquels vous êtes abonné.', 'There is no public activity to display yet.' => 'Il n’y a aucune activité public à afficher.', 'You do not have anyone who started following you yet.' => 'Vous n’avez aucun abonné pour le moment.', 'This user does not have anyone who started following him/her yet.' => 'Cet utilisateur n’a aucun abonné pour le moment.', 'You have not started following anyone yet.' => 'Vous n’être abonné à personne pour le moment.', 'This user have not started following anyone yet.' => 'Cet utilisateur n’est abonné à personne pour le moment.', 'Thank you for activating UserPro!' => 'Merci d’avoir activé UserPro!', 'This copy is unlicensed. Please activate your copy.' => 'Cette licence n’est pas active. Veuillez l’activer dès maintenant.', 'Check for updates' => 'Vérifier les mises à jour', 'Need Support?' => 'Besoin d’aide?', 'User Manual' => 'Manuel de l\'utilisateur', 'Support UserPro with your 5-star rating' => 'Soutenir UserPro avec votre Evaluation 5 étoiles', 'Download Latest' => 'Télécharger la dernière version', 'Displays the admin email that users can contact you at. You can configure it under Mail settings.' => 'Affiche l’email administrateur avec lequel les utilisateurs peuvent vous contacter. Vous pouvez le configurer dans \\"Paramètres des mails\\".', 'Displays blog name' => 'Affiche le nom du blog', 'Displays blog URL' => 'Affiche le nom du blog', 'Displays blog WP-admin URL' => 'Affiche le nom du blog', 'Displays the UserPro login page' => 'Affiche la page de connexion UserPro', 'Displays the Username of user' => 'Affiche le nom d’utilisateur de l’utilisateur', 'Displays the user first name' => 'Affiche le prénom de l’utilisateur', 'Displays the user last name' => 'Affiche le nom de famille de l’utilisateur', 'Displays the user display name or public name' => 'Affiche le nom de famille de l’utilisateur', 'Displays the E-mail address of user' => 'Affiche l’adresse e-mail de l’utilisateur', 'Displays the User Profile address' => 'Affiche l’adresse du profil de l’utilisateur', 'Outputs all profile fields in the e-mail' => 'Sortir tous les champs du profil dans l’e-mail', 'The account validation URL that user receives after signing up (If you enable e-mail validation feature)' => 'L’URL de validation que l’utilisateur reçois après son inscription (Si vous avez activé la validation par e-mail)', 'Gives a link to the admin to manage his pending user requests and registrations.' => 'Donne un lien à l’administrateur pour administrer les requêtes et inscriptions en attente.', 'This is an automatic generated URL that user will click to become verified after an invitation to get verified is sent to him.' => 'Il s’agit d’une URL générée automatiquement sur laquelle l’utilisateur devra cliquer pour obtenir le status certifié une fois qu’il y a été invité.', 'Custom Variable 1' => 'Variable personnalisée 1', '%s fields available' => '%s champs disponibles', 'Edit Field' => 'Modifier le champ', 'Delete Field' => 'Supprimer le champ', 'Registration Fields' => 'Champs de l’inscription', 'Edit Profile Fields' => 'Champs de la modification de profil', 'Login Fields' => 'Champs de connexion', 'Social Fields' => 'Champs sociaux', 'Reset' => 'Réinitialiser', 'Save' => 'Enregistrer', 'Label' => 'Label', 'Help Text' => 'Texte d’aide', 'Placeholder' => 'Espace réservé', 'Ajax Check Callback (advanced)' => 'Ajax Check Callback (Avancé)', 'Heading Text' => 'Texte d’en-tête', 'Collapsible Section' => 'Section rétractable', 'Collapsed' => 'Rétractée', 'Upload Button Text' => 'Texte du bouton de téléchargement', 'MailChimp List ID' => 'ID de la liste MailChimp', 'MailChimp Subscribe Text' => 'Texte d’abonnement MailChimp', 'Font Icon Code' => 'Code de l’icône', 'Drag fields / sections into this area' => 'Glissez des champs / sections dans cette zone', 'Add Seperator / Section' => 'Ajouter un séparateur ou une section', 'My Custom Heading' => 'Mon En-tête Personnalisée', 'Broken page. Please rebuild plugin pages.' => 'Page cassée. Veuillez reconstruire les pages du plugin.', 'Text Input' => 'Saisie de texte', 'Photo Upload' => 'Téléchargement de photo', 'File Upload' => 'Téléchargement de fichier', 'Textarea' => 'Zone de texte', 'Select Dropdown' => 'Menu déroulant', 'Multiselect Box' => 'Boîte à choix multiples', 'Checkbox (floating)' => 'Cases à cocher (flottant)', 'Checkbox (full width)' => 'Cases à cocher (toute la largeur)', 'Radio Choice (floating)' => 'Boutons radio (flottant)', 'Radio Choice (full width)' => 'Boutons radio (toute la largeur)', 'Date Picker' => 'Sélectionneur de date', 'MailChimp Newsletter Subscription' => 'Abonnement à la newsletter MailChimp', 'Password Field' => 'Champ de mot de passe', 'Password Strength Meter' => 'Indicateur de sûreté du mot de passe', 'Each field must have a title.' => 'Chaque champ doit avoir un titre.', 'Please enter a unique key or choose an existing usermeta.' => 'Veuillez entrer une clé unique ou choisir une usermeta existante.', 'This existing usermeta already exists in your fields list below.' => 'Cette usermeta existe déjà dans la liste de champs ci-dessous.', 'This unique key already exists in your fields list below.' => 'Cette clé unique existe déjà dans la liste de champs ci-dessous.', 'Verified Invite' => 'Invitation pour certification', 'Invitation sent!' => 'Invitation envoyée!', 'No restriction' => 'Description de la publication', 'Restricted to logged in members only' => 'Contenu restreint / Membres uniquement', 'You are using a trial version of UserPro plugin. If you have purchased the plugin, please enter your purchase code to enable the full version. You can enter your purchase code here.' => 'Vous utilisez une version d’essai de UserPro. Si vous avez acheté ce plugin, veuillez entrer votre code d’achat pour activer la version intégrale. Vous pouvez saisir votre code d’achat ici.', 'Badges' => 'Badges', 'Verified' => 'Certifié', 'Edit Profile' => 'Modifier le profil', 'Download Export' => 'Télécharger le fichier d’exportation', 'Settings' => 'Réglages', 'Fields' => 'Champs', '%s Requests' => '%s requêtes', 'Custom CSS' => 'CSS personnalisé', 'Email Notifications' => 'Notifications par email', 'Restrict Content' => 'Restreindre le contenu', 'Setup Pages' => 'Paramétrer les pages', 'WooCommerce' => 'WooCommerce', 'Role-based Fields' => 'Champs basés sur le rôle', 'Export Users' => 'Les utilisateurs de l\'exportation', 'Import/Export' => 'Importer/Exporter', 'Licensing' => 'Licence', '%d new verification requests' => '%d nouvelles vérifications requises', 'UserPro %s' => 'UserPro %s', 'UserPro' => 'UserPro', '%s files deleted.' => '%s fichiers supprimés.', '%s unused folders deleted.' => '%s dossiers inutilisés supprimés.', 'Online users data is reset.' => 'Les données des utilisateurs en ligne ont été réinitialisées.', 'Activity stream has been reset.' => 'Le fil d’actualité a été réinitialisé.', 'You did not specify a group name.' => 'Vous n’avez pas spécifié de nom de groupe.', 'This group exists already.' => 'Ce groupe existe déjà.', 'Group created.' => 'Groupe créé.', 'WooCommerce fields have been added.' => 'Les champs de WooCommerce ont été ajoutés.', 'WooCommerce fields have been removed.' => 'Les champs de WooCommerce ont été supprimés.', 'UserPro has been reset to factory settings.' => 'UserPro a été réinitialisé à ses réglages d’usine.', 'Please enter a purchase code.' => 'Veuillez entrer un code d’achat.', 'Thanks for activating UserPro!' => 'Merci d’avoir activé UserPro!', 'You have entered an invalid purchase code or the Envato API could be down at the moment.' => 'Vous avez entré un code d’achat erroné ou l’API Envato est hors-ligne pour le moment.', 'Your UserPro field groups have been imported.' => 'Vos groupes de champs UserPro ont été importés.', 'This is not a valid import file.' => 'Ce n’est pas un ficher d’importation valide.', 'Your UserPro fields have been imported.' => 'Vos champs UserPro ont été importés.', 'Your UserPro settings have been imported.' => 'Vos réglages UserPro ont été importés.', 'Custom CSS Styles' => 'Styles CSS personnalisés', 'If you want to override existing styles, or add some specific CSS rules, put them here. They will survive the updates.' => 'Si vous souhaitez écraser les styles existants, ou ajouter des règles CSS spécifiques, insérez-les ici. Elles persisterons au-delà des mises à jour.', 'Here you can set fields to be available for certain role(s) only. For example, If you wish to make a set of fields not visible to Subscriber role, or want to make other fields available only to a Customer role. This does the job for you.' => 'Ici vous pouvez désigner des champs comme étant disponibles pour certains rôles uniquement. Par exemple si vous souhaitez qu’un ensemble de champs ne soit visible ou disponible qu’à un rôle en particulier. Cette page se charge de tout ça pour vous.', 'Setup Field / Role Relationships' => 'Paramétrer les relations champs / rôles', 'How to edit the field settings?' => 'Comment modifier les réglages des champs ?', 'This plugin uses small icons for quick ajax editing for a field. Each icon means something, this little guide will show you how to control each field quickly and instantly.' => 'Ce plugin utilise des petites icônes pour modifier rapidement chaque champ grâce à la technologie ajax. Chaque icône signifie quelque chose, ce petit guide vous montre de quelle façon vous pouvez modifier chaque champ instantanément.', 'A transparent icon means the setting is turned off. A full-color icon means the setting is turned on. Click on any icon to switch the state of it on and off.' => 'Une icône transparente signifie que ce réglage est désactivé. Une icône en couleurs signifie que ce réglage est activé. Cliquez sur n’importe quelle icône pour l’activer ou la désactiver.', 'This removes the field from a selected group' => 'Supprimez le champ', 'Click that icon to edit field label and help text or other misc options' => 'Cliquez sur cette icône pour modifier le label du champ, son texte d’aide et bien d’autres choses.', 'Make a field hideable from public by user' => 'Permettez à l’utilisateur de rendre ce champ invisible aux autres utilisateurs', 'Make a field hidden from public by default if field is hideable' => 'Rendez ce champ invisible par défaut si celui ci peut être rendu invisible', 'Lock a field so that user cannot edit, but admins can still edit all fields' => 'Verrouillez ce champ pour que l’utilisateur ne puisse pas le modifier, en revanche les administrateurs le peuvent', 'Make a field private so that users cannot view or edit it, but admins will be able to view it' => 'Rendez ce champ privé pour que l’utilisateur ne puisse ni le voir ni le modifier, en revanche les administrateurs le peuvent', 'Make a field required' => 'Rendez ce champ requis', 'Allow HTML in a field. e.g. If the field is textarea' => 'Autorisez l’utilisation du HTML dans ce champ, par exemple s’il s’agit d’une zone de texte', 'Before resetting, please remove all UserPro pages from your Pages.' => 'Avant la réinitialisation, veuillez supprimer toutes les pages UserPro de votre site.', 'Re-Install UserPro (Warning: This will reset all fields and settings)' => 'Ré-installer UserPro (Attention : Tous les champs et réglages seront réinitialisés)', 'Groups & Fields' => 'Groupes & Champs', 'Reset All Groups' => 'Réinitialiser les groupes', 'Drag & Drop your fields into Forms' => 'Glissez & Déposez vos champs dans les formulaires', 'Each field presents a bit of data or a meta key about the user. This allow you to drag any field to any form you want but be careful, not every field is suitable for any form. e.g. It makes no sense to add Country to your login shortcode.' => 'Chaque champ présente un lot de données ou de méta clés au sujet d’un utilisateur. Il vous est possible de glisser n’importe quel champ vers n’importe quel formulaire mais soyez vigilant, tous les champs ne sont pas compatibles avec tous les formulaires. Par exemple placer le champ \\"Pays\\" dans le formulaire de connexion n’aurait aucun sens.', 'Add New Field / Add or Sync Existing Data' => 'Ajouter un nouveau champ / Ajouter ou synchroniser des données existantes', 'You can add any field to your forms such as City, Address, or anything else by clicking on Add New Field The plugin will automatically sync/recognize any meta key stored in your user database, so you could display the value of any existing meta data.' => 'Vous pouvez ajouter n’importe quels champs à vos formulaires tels que Ville, Adresse, ou n’importe quoi d’autre en cliquant sur Ajouter un nouveau champ. Le plugin synchronisera/reconnaîtra automatiquement les méta clés présentes dans votre base de données des utilisateurs, vous pouvez par conséquent afficher la valeur de n’importe quelle méta donnée existante.', 'Add New Field' => 'Ajouter un nouveau champ', 'Field Title' => 'Titre du champ', 'Enter title for this data. example: City, How did you hear about us, Twitter, Personal Website, etc.' => 'Entrez un titre pour cette donnée, par exemple : Ville, Comment avez vous entendu parler de nous, Twitter, Site personnel, etc...', 'Field Type' => 'Type de champ', 'The type of field or how a user is going to enter this data (via text, selecting a choice from dropdown, etc)' => 'Le type de champ défini la manière dont l’utilisateur renseigne les données (par texte, en sélectionnant un choix dans un menu déroulant, etc...)', 'Allowed file extensions' => 'Extensions de fichier autorisées', 'A comma seperated list of allowed file types. If blank, default will be to zip, pdf, txt.' => 'Séparez par une virgule les différentes extensions autorisées. Si vous laissez ce champ vide les extensions autorisées par défaut seront zip, pdf et txt.', 'Builtin Choice List' => 'Listes de choix intégrées', 'Countries List' => 'Liste des pays', 'Roles' => 'Rôles', 'You can also enter choices for this field manually below.' => 'Vous pouvez également renseigner vous même des choix ci-dessous.', 'Manual Choices / Options' => 'Choix / Options personnalisés', 'Please enter one choice per line!' => 'Veuillez saisir un choix par ligne !', 'Help text will be displayed below field to guide users what to put in that field or show any relevant info.' => 'Le texte d’aide sera affiché sous le champ pour aider les utilisateurs à renseigner ce champ ou apporter une information importante.', 'Custom Placeholder' => 'Personnaliser l’espace réservé', 'Setting up the user meta key' => 'Paramétrer la méta clé utilisateur', 'Unique Field Key' => 'Clé de champ unique', 'Your field key must be unique for each field. It must be letters only with only underscore allowd between them.' => 'Votre clé de champ doit être unique pour chaque champ. Elle doit être composée uniquement de lettres et de underscore.', 'Or select/sync an existing meta field key' => 'Ou sélectionnez/synchronisez une méta clé de champ existante', 'You can sync or use user meta from any other plugin directly and integrate it with UserPro. Unique key is not needed If you sync with existing field.' => 'Vous pouvez synchroniser ou utiliser les méta-données des utilisateurs depuis n’importe quel autre plugin directement et les intégrer à UserPro. Une clé unique n’est pas nécessaire si vous synchronisé un champ existant.', 'Publish' => 'Publier', 'Cancel' => 'Annuler', 'Restore Default Fields' => 'Restaurer les champs par défaut', 'Import / Export (Settings only)' => 'Importer / Exporter (Réglages uniquement)', 'Export Settings' => 'Exporter les réglages', 'Import Settings' => 'Importer les réglages', 'Import' => 'Importer', 'Import / Export Fields' => 'Importer / Exporter les champs', 'Export Fields' => 'Exporter les champs', 'Import Fields' => 'Importer les champs', 'Import / Export Field Groups' => 'Importer / Exporter les groupes de champs', 'Export Field Groups' => 'Exporter les groupes de champs', 'Import Field Groups' => 'Importer les groupes de champs', 'Please note: cURL must be enabled to successfully activate your license. If you want to find your purchase code, please look here. If you cannot enable cURL or getting another error, please use the support forum link and we will activate your license manually.' => 'Veuillez noter: cURL doit être activé pour réussir à valider votre licence. Si vous souhaitez obtenir votre code d’achat, veuillez regarder ici. Si vous ne pouvez pas activer cURL ou que vous rencontrez d’autres erreurs, veuillez utiliser le lien vers le forum d’aide et nous activerons votre licence manuellement.', 'Activate UserPro' => 'Activer UserPro', 'Enter your Item Purchase Code' => 'Entrez le code d’achat de votre produit', 'The variables in {CURLY BRACKETS} are used to present data and info in email. You can use them to customize your email template.' => 'Les variables entre {CROCHETS} sont utilisées pour afficher des données et infos dans les e-mails. Vous pouvez les utiliser pour personnaliser le contenu de vos mails.', 'Outgoing Mail Settings' => 'Réglages des mails sortants', 'The name that appears on mails sent by UserPro' => 'Le nom qui apparaît sur les mails envoyés par UserPro', 'The address that appears on mails sent by UserPro' => 'L’adresse qui apparaît sur les mails envoyés par UserPro', 'Send an e-mail when user is verified' => 'Envoyer un e-mail lorsqu’un utilisateur est certifié', 'Send an e-mail when user is unverified' => 'Envoyer un e-mail lorsqu’un utilisateur est désavoué', 'Send admin an e-mail when user updates profile' => 'Envoyer un e-mail à l’administrateur lorsqu’un utilisateur met à jour son profil', 'Send admin an e-mail when profile gets removed' => 'Envoyer un e-mail à l’administrateur lorsqu’un profil est supprimé', 'User Awaiting Manual Review Template (Admin Notification)' => 'Format de l’utilisateur qui attent une validation manuelle (Notification à l’administrateur)', 'New Registration Template (Admin Notification)' => 'Format de nouvelle inscription (Notification à l’administrateur)', 'Profile Updated (Admin Notification)' => 'Format de nouvelle inscription (Notification à l’administrateur)', 'Profile Deleted (Admin Notification)' => 'Format de nouvelle inscription (Notification à l’administrateur)', 'Customize \\"Email Validation\\" Mail' => 'Personnaliser le mail \\"Validation par e-mail\\"', 'Customize \\"New Account/Welcome\\" Mail' => 'Personnaliser le mail \\"Nouveau Compte/Bienvenue\\"', 'Customize \\"Reset Password\\" Mail' => 'Personnaliser le mail \\"Réinitialisation de mot de passe\\"', 'Customize \\"Account Removal\\" Mail' => 'Personnaliser le mail \\"Suppression de compte\\"', 'Customize \\"Account Verified\\" Mail' => 'Personnaliser le mail \\"Compte vérifié\\"', 'Customize \\"Account Un-verified\\" Mail' => 'Personnaliser le mail \\"Compte désavoué\\"', 'Customize \\"Invitation to Get Verified\\" Mail' => 'Personnaliser le mail \\"Invitation à être certifié\\"', '\\"Profile\\" Slug' => 'Lien du Profil', '\\"Register\\" Slug' => 'Lien de l’Inscription', '\\"Edit Profile\\" Slug' => 'Lien de la Modification de Profil', '\\"Login\\" Slug' => 'Lien de Connexion', '\\"Member Directory\\" Slug' => 'Lien du Répertoire des Membres', '\\"Logout\\" Slug' => 'Lien de déconnexion', 'Check / Rebuild Profile Pages' => 'Vérifier / Reconstruire les pages de profil', 'Profile Page' => 'Profil', 'Registration Page' => 'Inscription', 'Edit Profile Page' => 'Modification de profil', 'Login Page' => 'Connexion', 'Member Directory Page' => 'Répertoire des membres', 'Logout Page' => 'Page de déconnexion', 'Rebuild UserPro Pages' => 'Reconstruire les pages UserPro', 'Users Requesting Verified Status' => 'Utilisateurs réclamant le status certifié', 'Verify' => 'Certifier', 'Reject' => 'Rejeter', 'Users Awaiting Manual Approval' => 'Utilisateurs en attente d’une approbation', 'Approve' => 'Approuver', 'Delete user' => 'Supprimer l’utilisateur', 'Users Awaiting E-mail Validation' => 'Utilisateur en attente d’une validation par mail', 'Activate' => 'Activer', 'Global Restrict/Lock Settings' => 'Restrictions globales/Réglages de verrouillage', 'Do you want to lock entire site for guests?' => 'Souhaitez-vous verrouiller entièrement le site aux visiteurs?', 'Page ID that guests will be redirected to (If you locked the entire site above)' => 'L’ID de la page vers laquelle les visiteurs seront redirigés (Si vous verrouillez entièrement votre site ci-dessous)', 'This is typically your custom login page. Guests will be automatically redirected to this page If you block entire site for guests.' => 'C’est la page de connexion personnalisée. La seule et unique page à laquelle les invités ont accès si vous verrouillez intégralement votre site.', 'Page IDs (seperated by comma) that guests can view If you block the entire site for guests' => 'L’ID de la page vers laquelle les visiteurs seront redirigés (Si vous verrouillez entièrement votre site ci-dessous)', 'Redirect guests from homepage to custom URL' => 'Rediriger les invités de la page d’accueil vers une URL personnalisée', 'This option allow you to lock the homepage completely for guests and auto-redirect them to any page you want.' => 'Cette option permet de verrouiller la page d’accueil pour les visiteurs et de les rediriger vers la page que vous voulez.', 'Redirect members from homepage to custom URL' => 'Rediriger les membres depuis la page d’accueil vers une URL personnalisée', 'This option allow you to lock the homepage completely for members and auto-redirect them to any page you want.' => 'Cette option permet de verrouiller la page d’accueil pour les membres et de les rediriger vers la page que vous voulez.', 'Specific Restrict/Lock Settings' => 'Restrictions globales/Réglages de verrouillage', 'Make Restricted Content Available To' => 'Rendre le contenu restreint disponible à', 'Only Verified Members' => 'Membres certifiés uniquement', 'All Registered Members' => 'Membres inscrits uniquement', 'Redirect URL (If a whole page is locked/restricted)' => '', 'Please enter full web address to send users who access a restricted page. You can restrict any page/post by visiting it in post editor.' => '', 'Quick Maintenance' => 'Maintenance rapide', 'Clear unused Junk' => 'Effacer les indésirables', 'Clear un-used uploads' => 'Effacer les téléchargements inutilisés', 'Clear deleted users stuff' => 'Effacer les éléments supprimés par les utilisateurs', 'Purge online users data' => 'Purger les données des utilisateurs en ligne', 'Reset online users' => 'Réinitialiser les utilisateurs en ligne', 'Online' => 'En ligne', 'Clear activity stream' => 'Effacer le fil d’actualité', 'Delete all activity' => 'Supprimer toute l’activité', 'Module Settings' => 'Réglages du module', 'Social Features' => 'Outils sociaux', 'Deactivate' => 'Désactiver', 'Online/Offline Status' => 'Statut En ligne/Hors ligne', 'Show Offline Icon' => 'Afficher l’icône hors ligne', 'Compatibility Settings' => 'Réglages de compatibilité', 'Disable Activity Log' => 'Désactiver le journal d’activité', 'Please switch off logging activity If you have host problems, your site crashes or cannot save a post, etc.' => 'Veuillez désactiver l’activité de connexion si vous avez des problèmes d’hébergement, votre site plante ou que vous ne pouvez pas enregistrer un article, etc.', 'Allow Dash for Display Names' => 'Autoriser les tirets pour les noms d’affichage', 'Path Compatibility' => 'Compatibilité du chemin', 'Use Relative URIs' => 'Utiliser les URL relatives', 'Use Full Paths (including domain)' => 'Utiliser les chemins complets (incluant le domaine)', 'If you use CDN or have a problem with thumbnails, try switching this option.' => 'Si vous utilisez un CDN ou que vous avez des problèmes avec les thumbnails, essayez de changer cette option.', 'URL Encoding' => 'Codage d’URL', 'Disable' => 'Désactiver', 'External Profile Pictures' => 'Photos de profil externes', 'Save them to my server' => 'Sauvegardez-les sur mon serveur', 'Use the external source' => 'Utiliser la source extérieure', 'If your host experience some problems when saving an external picture to your uploads directory, try to use the external method.' => 'Si vous rencontrez certains problèmes d’hébergement lorsque vous enregistrez une photo extérieure, essayez d’utiliser la méthode externe.', 'General' => 'Général', 'Activate RTL Stylesheet' => 'Actier la feuille de style RTL', 'RTL Enabled' => 'RTL activé', 'RTL Disabled' => 'RTL désactivé', 'Membership' => 'Adhésion', 'Anyone can register' => 'N’importe qui peut s’inscrire', 'Disable registration' => 'Désactiver les inscriptions', 'New User Approval' => 'Approbation d’un nouvel utilisateur', 'Auto Approve' => 'Approbation automatique', 'Require E-mail Activation' => 'Nécessite une activation par e-mail', 'Require Admin Approval' => 'Requiert l’approbation d’un administrateur', 'Profile Permalink Structure' => 'Structure des permaliens', 'User ID' => 'ID de l’utilisateur', 'Full Name' => 'Nom complet', 'Display Name' => 'Nom d’affichage', 'User profiles permalink structure setting e.g. /profile/34 or /profile/Username or /profile/FirstName+LastName If you have a problem with permalink structure, you can try to change this setting.' => 'Structure des permaliens des profils d’utilisateurs, par exemple /profil/34 ou /profil/NomUtilisateur ou /profil/Prénom+Nom... Si vous avez des problèmes avec la structure des permaliens vous pouvez essayer de les modifier ici.', 'User Display Name Field' => 'Champ du nom d’affichage de l’utilisateur', 'Default (Display Name)' => 'Par défaut (Nom d’affichage)', 'Replace Display Name with custom field' => 'Remplacer le nom d’affichage par un champ personnalisé', 'Enter custom field key to override default display name on profiles with this custom field value.' => 'Entrez une clé de champ personnalité pour écraser le nom d’affichage par défaut dans les profils par la valeur de ce champ.', 'Fields to hide completely from profile view' => 'Champs masqués complètement sur la page de profil', 'A comma seperated list of custom fields to hide from profile view anyway.' => 'Liste des champs personnalisés séparés par une virgule à masquer de la page de profil.', 'Unverify Verified accounts automatically if they change display name' => 'Désavouer automatiquement les comptes certifiés lorsqu’ils changent de nom d’affichage', 'Display verified account badge beside name' => 'Afficher le badge certifié à côté du nom', 'Should the verified account badge display beside name, or as a standard badge in badges.' => 'Le badge certifié doit-il apparaître à côté du nom, ou comme n’importe quel autre badge.', 'Verified Badge Link' => 'Lien du badge certifié', 'Should the verified badge link to a specific page?' => 'Le badge de statut certifié doit-il pointer vers une page spécifique ?', 'User Roles that can publish immediately' => 'Rôles d’utilisateurs qui peuvent publier immédiatement', 'Enter comma seperated list of user roles to publish automatically using the frontend publisher without waiting admin approval. e.g. author,subscriber,etc.' => 'Entrez la liste des rôles séparés par une virgule qui peuvent publier depuis l’outil de publication UserPro sans avoir recours à la validation d’un administrateur. Ex: author,subscriber,etc.', 'Photo Lightbox' => 'Lightbox pour les photos', 'Active' => 'Actif', 'Inactive' => 'Inactif', 'Lightbox for profile photos and other photo uploads. Turn on / off lightbox globally.' => 'Utiliser la lightbox pour les photos de profil et les photos téléchargées. Activez/désactivez la lightbox en général.', 'Maximum file size for uploads' => 'Taille maximale des fichiers pour les téléchargements', 'The maximum file size that user can upload whether it is a file, or a photo. e.g. 8388608 bytes = 8MB' => 'La taille maximale des fichiers et photos que les utilisateurs peuvent télécharger. Ex: 8388608 bytes = 8MB', 'Appearance and Look' => 'Style et apparence', 'Use a Google Web Font' => 'Utiliser une police d’écriture Google Web', 'To use a Google Web Font for UserPro plugin, enter the font family name here.' => 'Pour utiliser une police Google Web pour le plugin UserPro, entrez le nom de famille de la police ici.', 'Use an installed font' => 'Utiliser une police installée', 'To override Google font and force plugin to use theme font, or another built in font please enter font face here (e.g. Open Sans, Arial, etc)' => 'Pour écraser la police d’écriture Google et forcer le plugin à utiliser la police de votre thème, ou n’importe quelle autre police intégrée, veuillez entrer le nom de la police ici (exemple Open Sans, Arial, etc)', 'Plugin Default Width' => 'Largeur du profil par défaut', 'A pixel or % width. If you want to make the plugin default width take 100% of its parent, just change this setting to 100% (It will take as much space as possible from the parent element). This option can be customized also via shortcode option max_width.' => 'Largeur en pixel ou pourcentage. Si vous souhaitez que que le plugin s’étale sur la totalité de la largeur de la page, vous n’avez qu’à écrire 100% (le plugin prendra le maximum de place possible dans son élément parent). Ce réglage peut également être défini par le shortcode grâce à la fonction max_width.', 'Default Skin' => 'Apparence par défaut', 'Thumbnail Style' => 'Style de thumbnail', 'Default' => 'Par défaut', 'Rounded' => 'Arrondi', 'A bit rounded' => 'Un peu arrondi', 'Square' => 'Carré', 'This controls the style of your profile thumbnails globally. If you let it default, these settings will be taken from your active skin.' => 'Ces contrôles vous permettre de styliser les thumbnails. Si vous laissez tout par défaut, ces réglages seront pris depuis votre skin actif.', 'Profile Photo Lightbox' => 'Lightbox de la photo de profil', 'Fields Layout' => 'Disposition des champs', 'Float (field label on same line)' => 'Flottant (label du champ sur la même ligne)', 'Block (field label on seperate line)' => 'Bloc (label sur une ligne à part)', 'Enable Field Icons' => 'Activer les icones de champ', 'Hide Top Bar from Non-Admins' => 'Masquer la barre d’administration aux non-administrateurs', 'Light Heading Option' => 'Option d’en-têtre lumineux', 'For translation compatibility, enter you \\"Light\\" heading color option here.' => 'Pour la traduction, entrez votre couleur d’en-tête \\"Light\\" ici.', 'Form Validation & Security' => '', 'Blocked Usernames / Addresses' => '', 'A list of usernames and/or emails to block from accessing or logging in the site. Enter one username or email per line.' => '', 'Maximum Field Length Validation' => '', 'Number of characters allowed' => 'Nombre de résultats par page', 'How many characters should be allowed if the above option is turned on.' => '', 'Fields that need to be validated for maximum length' => '', 'Enter a comma seperated list of field keys to include in the maximum field length validation.' => 'Liste des champs personnalisés séparés par une virgule à masquer de la page de profil.', 'Fields that need to be validated as a phone number' => '', 'Enter a comma seperated list of field keys to automatically validate as a phone number field.' => '', 'Phone Number Regular Expression' => '', 'The regex used to validate the phone number fields specified above, please do not change this unless you know what you are doing.' => '', 'Profile Settings' => 'Réglages du profil', 'Allow guests to view other profiles' => 'Permettre aux visiteurs de voir les autres profils', 'Allow members to view other member profiles' => 'Permettre aux membres de voir les profils des autres membres', 'Roles that can view other profiles' => 'Les rôles qui peuvent voir les autres profils', 'Select roles' => 'Choisir les rôles', 'For example, If you do not want users to view other profiles but want to allow these special roles to always view profiles, including administrators.' => 'Par exemple, si vous ne voulez pas que les utilisateurs voient les autres profils mais que vous souhaitez que certains rôles en soient capables, y compris les administrateurs.', 'Allow users to request verified status' => 'Permettre aux membres de réclamer le statut certifié', 'Allow users to delete their profiles' => 'Permettre aux membres de supprimer leurs profils', 'Use default gravatars until users upload a custom avatar for this site' => 'Utiliser les gravatars par défaut tant que les utilisateurs n’ont pas téléchargé leur propre avatar.', 'Allow admins to set custom notice on user accounts' => 'Permettre aux administrateurs de rédiger une note personnalisée sur les comptes utilisateurs', 'e.g. Set a custom warning to any user profile for example: This account is for test purposes only, etc.' => 'Permet de définir un avertissement personnalisé sur n’importe quel profil d’utilisateur, par exemple : Ce compte est utilisé pour des tests uniquement, etc...', 'Show custom user notice to the logged-in user' => 'Afficher une note d’utilisateur personnalisée lorsque l’utilisateur est connecté', 'Show custom user notice to the public' => 'Afficher une note d’utilisateur visible publiquement', 'Display User Country Flag in Profile' => 'Affiche le drapeau du pays dans le profil', 'Display User Country Flag in Badges' => 'Afficher le drapeau du pays dans les badges', 'Redirection & Backend Settings' => 'Redirection & Paramètres du panneau d’admin', 'Panic Key Setting' => 'Réglages de la clé d’urgence', 'The panic key helps you access WP-admin screen If you enabled the hide backend setting below, and for some reason you cannot get back into your site. To enter your backend with the panic key use this URL: %s' => 'La clé d’urgence vous aide à accéder au panneau d’administration Wordpress si vous avez activé l’option ci-dessous qui cache le backend, et que pour une raison ou pour une autre vous ne pouvez plus retourner sur votre site. Pour accéder à votre panneau d’administration avec cette clé d’urgence utilisez l’URL suivante: %s', 'Enable these roles to view the WP-admin (backend)' => 'Autoriser ces roles à voir le panneau d’administration Wordpress (backend)', 'By default, UserPro hides backend access from non-admins, however you can type a comma seperated list here of user roles to allow them to access the dashboard regardless of any other setting. example: author,editor' => 'Par défaut, UserPro cache l’accès au backend aux non-administrateurs, néanmoins vous pouvez entrer une liste de roles séparés par une virgule pour leur permettre l’accès aux panneau d’administration en dépit de tout autre réglage. Exemple: author,editor', 'Make Users Backend link to frontend profiles' => 'Faire que les liens vers la console Wordpress redirigent vers le profil de l’utilisateur.', 'If set on, users backend will link to frontend profile view/edit. Turn off to allow backend user editing.' => 'S’il est activé, les liens des utilisateurs menant vers le backend renverront vers leurs profils UserPro. Désactivez pour permettre aux utilisateur d’éditer leur profil dans le backend.', 'Redirect backend to front-end' => 'Rediriger du tableau de bord à UserPro', 'Redirect to front-end profile view' => 'Rediriger vers le profil UserPro', 'Redirect to custom URL' => 'Rediriger vers une URL personnalisée', 'Do not redirect' => 'Ne pas rediriger', 'If you choose cutom URL for this redirect' => 'Si vous choisissez une URL personnalisée pour cette redirection', 'You can redirect users to the built-in front-end pages by the plugin to hide backend access from them.' => 'Vous pouvez rediriger les utilisateurs vers les pages du plugin pour masquer l’accès au tableau de bord.', 'Redirect backend profile to front-end' => 'Rediriger du profil natif de wordpress vers celui de UserPro', 'Redirect to front-end profile edit' => 'Rediriger vers la modification de profil de UserPro', 'If you choose custom URL for this redirect' => 'Si vous choisissez une URL personnalisée pour cette redirection', 'Redirect backend registration to front-end' => 'Rediriger du formulaire d’inscription natif de wordpress vers celui de UserPro', 'Redirect to front-end registration' => 'Rediriger vers le formulaire d’inscription UserPro', 'Redirect backend login to front-end' => 'Rediriger du formulaire de connexion natif de wordpress vers celui de UserPro', 'Redirect to front-end login' => 'Rediriger vers le formulaire de connexion UserPro', 'Login Settings' => 'Réglages de connexion', 'Show logout If user is logged in already' => 'Afficher le bouton de deconnexion si l’utilisateur est connecté', 'After a successful login' => 'Après une connexion réussie', 'Refresh page only' => 'Rafraîchir la page uniquement', 'Redirect user to front-end profile' => 'Rediriger l’utlisateur vers son profil UserPro', 'You can also redirect users to custom URL by passing login_redirect valid URL in your shortcode.' => 'Vous pouvez également rediriger les utilisateurs vers une URL personnalisée en incluant login_redirect et une URL valide dans votre shortcode.', 'Redirect admins to dashboard always' => 'Toujours rediriger les administrateurs vers le tableau de bord', 'Registration Settings' => 'Réglages de l’inscription', 'Auto-Login users after registration' => 'Connecter automatiquement les utilisateurs après leur inscription', 'After a successful registration' => 'Après une inscription réussie', 'You can also redirect users to custom URL by passing register_redirect valid URL in your shortcode.' => 'Vous pouvez également rediriger les utilisateurs vers une URL personnalisée en incluant register_redirect et une URL valide dans votre shortcode.', 'Default Role for New Users' => 'Rôle par défaut pour les nouveaux utilisateurs', 'No Role' => 'Aucun rôle', 'New users will be assigned to this role automatically If you do not allow them to choose role.' => 'Les nouveaux utilisateurs seront assignés à ce rôle automatiquement si vous ne leurs permettez pas de choisir leur rôle eux-mêmes.', 'Allowed Roles during Registration' => 'Permettre le choix de rôle pendant l’inscription', 'If you enable users to select their role, this option can limit allowed roles for user.' => 'Si vous autorisez les utilisateurs à choisir leur rôle, cette option peut limiter les rôles disponibles.', 'Allow Terms & Conditions Text Before Registration' => 'Activer le texte des Conditions générales avant l’inscription', 'Terms & Conditions Text/HTML' => 'Conditions générales Texte/HTML', 'Logout Page Settings' => 'Réglages de la page de déconnexion', 'After User Logout' => 'Après la déconnexion de l’utilisateur', 'Redirect to Homepage' => 'Rediriger vers la page d’accueil', 'Redirect to Login Page' => 'Rediriger vers la page de connexion', 'Redirect to Custom Page (enter below)' => 'Rediriger vers une page personnalisée (à renseigner ci-dessous)', 'Custom Logout Redirect' => 'Redirection personnalisée lors de la déconnexion', 'Password Settings' => 'Réglages du mot de passe', 'Allow password to be reset for Admin Accounts' => 'Permettre la réinitialisation de mot de passe pour les comptes d’administrateurs', 'Facebook Integration' => 'Intégration de Facebook', 'Allow Facebook Social Connect' => 'Permettre la connexion via Facebook', 'Facebook App ID' => 'ID de l’App Facebook', 'Open https://developers.facebook.com/apps create a new app and edit its settings to make it work on your domain. In App Settings, please paste the App ID or API Key into this field.' => 'Ouvrez https://developers.facebook.com/apps, créez une nouvelle application et paramétrez la pour la rendre fonctionnelle avec votre domaine. Dans le champ Réglages de l’application, veuillez copier l’ID de l’application ou la clé API.', 'Auto Post on users Facebook wall' => 'Publier automatiquement sur le mur Facebook des utilisateurs', 'When a user connect via Facebook, a post can be added automatically to his wall.' => 'Lorsqu’un utilisateur se connect via Facebook, une publication peut être ajoutée automatiquement à son mur.', 'Post Name' => 'Nom de l’article', 'e.g. Check out this website!, Welcome to XX website, etc.' => 'Ex : Regardez ce site!, Bienvenue sur notre site, etc...', 'Post Caption' => 'Légende de l’article', 'e.g. URL or small text that appears below the post name.' => 'Ex : URL ou texte court qui apparait sous le nom de la publication.', 'Post Body' => 'Corps de l’article', 'e.g. This is the main body of post which is displayed before the description of the wall post. e.g. Check out this great item and save 50%' => 'Ex : C’est le corps de la publication qui est affiché avant la description sur le mur. Ex : Jetez un oeil à cet excellent produit et obtenez 50% de remise', 'Post Description' => 'Description de la publication', 'This is the full description of the Facebook wall post.' => 'Voici la la description complète de la publication sur le mur Facebook', 'Post Link' => 'Lien de la publication', 'The user will be taken to that URL address when they click on that post.' => 'L’utilisateur sera renvoyé vers cette URL losqu’il cliquera sur cette publication.', 'Linkedin Integration' => 'intégration Linkedin', 'Allow linkedin Social Connect' => 'Autoriser linkedin sociale Connect', 'linkedin App Key' => 'linkedin App clé', 'linkedin Secret Key' => 'linkedin clé secrète', 'Instagram Integration' => 'intégration Instagram', 'Allow Instagram Social Connect' => 'Autoriser Instagram sociale Connect', 'Instagram Client ID' => 'Instagram client ID', 'Twitter Integration' => 'Intégration de Twitter', 'Allow Twitter Social Connect' => 'Permettre la connexion via Twitter', 'Consumer key' => 'Consumer key', 'You must first create an app at https://dev.twitter.com/apps/ and enter your consumer keys to enable twitter connect.' => 'Vous devez d’abord créer une application sur https://dev.twitter.com/apps/ et entrer vos consumer keys pour activer la connection via Twitter.', 'Consumer secret' => 'Secret du consommateur', 'Auto Post on users Twitter timeline' => 'Publier automatiquement dans le fil d’actualité Twitter des utilisateurs', 'When they first connect to your site.' => 'Lorsqu’ils se connectent pour la première fois à votre site.', 'Twitter timeline message' => 'Message du fil d’actualité Twitter', 'If you enabled the above option to automatically post on users timeline.' => 'Si vous activez l’option ci-dessous pour publier automatiquement sur le fil d’actualité des utilisateurs.', 'Google Integration' => 'Intégration de Google', 'Allow Google Social Connect' => 'Permettre la connexion via Google', 'Client ID' => 'Client ID', 'Client secret' => 'Client Secret', 'Callback / Redirect URL' => 'URL de redirection', 'This URL must be in the allowed Redirect URIs for this app in your Google Console.' => 'Cette URL doit être dans les URL de redirection autorisées pour cette application dans votre console Google.', 'MailChimp Settings' => 'Réglages de MailChimp', 'MailChimp API Key' => 'Clé API MailChimp', 'Aweber Settings' => 'Paramètres Aweber', 'Campaignmonitor Settings' => 'Paramètres de Campaignmonitor', 'Enter your MailChimp API key here to allow integration with MailChimp subscription.' => 'Entrez votre clé API MailChimp ici pour activer l’intégration de l’abonnement par MailChimp.', 'BuddyPress Compatibility' => 'Compatibilité avec BuddyPress', 'Sync UserPro profile links with BuddyPress' => 'Synchroniser les liens des profils UserPro avec BuddyPress', 'Sync UserPro avatars with BuddyPress' => 'Synchroniser les avatars UserPro avec BuddyPress', 'Sync UserPro display name with BuddyPress' => 'Synchroniser le nom d’affichage UserPro avec BuddyPress', 'Envato Settings' => 'Réglages Envato', 'Envato API Key' => 'Clé API Envato', 'Envato Username' => 'Nom d’utilisateur Envato', 'Click on the next button to automatically add WooCommerce profile fields to UserPro fields and make users manage their WooCommerce profile data from one place, their UserPro profile!' => 'Cliquez sur le bouton suivant pour ajouter automatiquement les champs des profils WooCommerce à ceux de UserPro et permettre à vos utilisateurs de gérer leurs données WooCommerce sur leur profil UserPro !', 'Rebuild WooCommerce Sync' => 'Reconstruire la synchronisation WooCommerce', 'Remove WooCommerce Sync' => 'Supprimer la synchronisation WooCommerce', 'Start WooCommerce Sync' => 'Débuter la synchronisation avec WooCommerce', 'Your submission has been posted! You can view it %s.' => 'Votre article a été publié! Vous pouvez le voir %s.', 'Your submission has been sent. It will be reviewed shortly.' => 'Votre publication a été envoyée. Elle sera vérifiée bientôt.', 'Nothing was deleted. You must choose yes to confirm deletion.' => 'Rien n’a été supprimé. Vous devez confirmer la suppression en choisissant oui.', 'For security reasons, admin accounts cannot be deleted.' => 'Pour des raisons de sécurité, les comptes administrateurs ne peuvent pas être supprimés.', 'You cannot remove test accounts from frontend!' => 'Vous ne pouvez pas supprimer les comptes de test depuis UserPro !', 'This account has been deleted successfully.' => 'Ce compte a été supprimé avec succès.', 'You did not provide a secret key.' => 'Vous n’avez pas fourni de clé secrète.', 'The secret key you entered is invalid.' => 'La clé secrète que vous avez entrée n’est pas valide.', 'The secret key is invalid or expired.' => 'La clé secrète a expiré ou n’est pas valide.', 'You should provide your email or username.' => 'Vous devez entrer votre adresse e-mail ou votre nom d’utilisateur.', 'There is not such user in our system.' => 'Cet utilisateur n’existe pas.', 'Resetting admin password is not permitted!' => 'Il n’est pas permis de réinitialiser un mot de passe administrateur !', 'You should provide your password.' => 'Vous devez entrer votre mot de passe.', 'Invalid email or username entered' => 'E-mail ou nom d’utilisateur incorrect', 'The password you entered is incorrect' => 'Le mot de passe que vous avez entré est incorrect', 'Your email is pending verification. Please activate your account.' => 'Votre email est en attente de vérification. Veuillez activer votre compte.', 'Your account is currently being reviewed. Thanks for your patience.' => 'Votre compte est en cours de vérification. Merci pour votre patience.', 'Invalid purchase code or Envato API is down.' => 'Code d’achat invalide, ou l’API Envato est hors ligne.', 'The display name is already in use.' => 'Ce nom est déjà utilisé.', 'Username already taken.' => 'Nom d’utilisateur déjà pris.', 'Illegal characters are not allowed in username.' => 'Certains caractères ne sont pas autorisés dans le nom d’utilisateur.', 'Please enter a valid email.' => 'Veuillez entrer une adresse e-mail valide.', 'Email is taken. Is that you? Try to login' => 'E-mail déjà utilisé. Est-ce vous ? Essayez de vous connecter', 'No custom notice is set for this account.' => 'Aucune note personnalisée n’est définie pour ce compte.', 'Contact' => 'Contact', 'Send Message' => 'Envoyer un message', 'ID' => 'ID', 'Photo' => 'Photo', 'Location' => 'Localisation', 'Sex' => 'Sexe', '%s\'s profile photo' => 'Avatar de %s', '%s did not upload a photo yet.' => '%s n’a pas encore téléchargé de photo.', 'now!' => 'maintenant!', 'year' => 'année', 'month' => 'mois', 'day' => 'jour', 'hour' => 'heure', 'minute' => 'minute', 'second' => 'seconde', ' ago' => ' avant', 'Found 1 Member' => '1 membre trouvé', 'Found %s Members' => '%s membres trouvés', 'No available information' => 'Aucune information disponible', 'There are %s user online on the site.' => 'Il y a %s utilisateurs en ligne sur le site.', 'There are %s users online on the site.' => 'Il y a %s utilisateurs en ligne.', 'User is online :)' => 'Utilisateur en ligne :)', 'User is offline :(' => 'Utilisateur hors ligne :(', 'Verified Account' => 'Compte certifié', 'Unverified Account' => 'Compte non certifié', 'Facebook Linked' => 'Lié à Facebook', 'Twitter Linked' => 'Lié à Twitter', 'Google Linked' => 'Lié à Google', 'Verified Customer' => 'Client certifié', 'Set custom note...' => 'Rédiger une note personnalisée...', 'You or someone else has requested to change password for this account.' => 'Vous avez fait la demande d’un changement de mot de passe pour ce compte.', 'The following key was generated to you to be able to change your passsword. Login to our site and attempt to Change your Password and use that key to change your password successfully.' => 'La clé ci-dessous a été générée pour vous donner la possibilité de modifier votre mot de passe. Connectez-vous sur notre site et essayez de changer votre mot de passe, puis entrez cette clé pour pouvoir le modifier.', 'Secret Key: {VAR1}' => 'Clé secrète : {VAR1}', 'If you have any problems, please contact us at {USERPRO_ADMIN_EMAIL}.' => 'Si vous avez le moindre problème, veuillez nous contacter à {USERPRO_ADMIN_EMAIL}.', 'Best Regards!' => 'Cordialement !', 'Thanks for signing up at {USERPRO_BLOGNAME}. You must confirm/validate your account before logging in.' => 'Merci pour votre inscription à {USERPRO_BLOGNAME}. Vous devez valider votre compte avant de vous connecter.', 'Please click on the following link to successfully activate your account:' => 'Veuillez cliquer sur le lien suivant pour activer votre compte :', 'Thanks for registering. Your account is now active.' => 'Merci pour votre inscription. Votre compte est désormais activé.', 'To login please visit the following URL:' => 'Pour vous connecter veuillez vous rendre à l’adresse suivante :', 'Your account e-mail: {USERPRO_EMAIL}' => 'Votre e-mail : {USERPRO_EMAIL}', 'Your account username: {USERPRO_USERNAME}' => 'Votre nom d’utilisateur : {USERPRO_USERNAME}', 'Your account password: {VAR1}' => 'Votre mot de passe : {VAR1}', 'This is an invitation to get verified at {USERPRO_BLOGNAME}.' => 'Voici une invitation à obtenir le status certifié sur {USERPRO_BLOGNAME}.', 'To accept this invitation and get verified instantly, please click the following link:' => 'Pour accepter cette invitation et être certifié immédiatement, veuillez cliquer sur le lien suivant:', 'If you do not want to GET VERIFIED, please ignore this email. No further action is required.' => 'Si vous ne souhaitez pas obtenir le status certifié veuillez ignorer ce mail. Aucune autre action n’est requise.', 'If you have any further questions, please contact us at {USERPRO_ADMIN_EMAIL}.' => 'Si vous avez la moindre question, veuillez nous contacter à {USERPRO_ADMIN_EMAIL}.', 'Your account has been deleted from {USERPRO_BLOGNAME}.' => 'Votre compte a été supprimé de {USERPRO_BLOGNAME}.', 'Your account is now verified at {USERPRO_BLOGNAME}.' => 'Votre compté est désormais certifié sur {USERPRO_BLOGNAME}.', 'We apologize. Your account is no longer verified at {USERPRO_BLOGNAME}.' => 'Nous sommes désolés. Votre compte n’est plus certifié sur {USERPRO_BLOGNAME}.', '{USERPRO_USERNAME} has just created a new account at {USERPRO_BLOGNAME}. The account is pending your manual review.' => '{USERPRO_USERNAME} vient de créer un nouveau compte sur {USERPRO_BLOGNAME}. Ce compte attend votre approbation.', 'To approve/reject new user registrations, please click the following link:' => 'Pour approuver/rejeter les nouvelles inscriptions, veuillez suivre le lien suivant:', '{USERPRO_USERNAME} has just created a new account at {USERPRO_BLOGNAME}.' => '{USERPRO_USERNAME} vient de créer un nouveau compte sur {USERPRO_BLOGNAME}.', 'You can check his profile via the following link:' => 'Vous pouvez consulter ce profil à l’adresse suivante :', '{USERPRO_USERNAME}\'s profile has been just deleted from {USERPRO_BLOGNAME}.' => 'Le profil de {USERPRO_USERNAME} vient d\'être supprimé de {USERPRO_BLOGNAME}.', '{USERPRO_USERNAME} has just updated their profile at {USERPRO_BLOGNAME}.' => '{USERPRO_USERNAME} vient de mettre à jour son profil sur {USERPRO_BLOGNAME}.', 'To view his/her profile:' => 'Pour voir son profil :', 'Reset Your Password' => 'Réinitialiser votre mot de passe', 'Verify your Account' => 'Certifier votre compte', 'Welcome to %s!' => 'Bienvenue à %s !', 'Your profile has been removed!' => 'Votre profil a été supprimé !', 'Get Verified at %s!' => 'Certifiez %s!', 'Your account is now verified!' => 'Votre compte est désormais certifié!', 'Your account is no longer verified!' => 'Votre compte n’est plus certifié!', '[UserPro] User awaiting manual review' => '[UserPro] Un utilisateur attend une validation manuelle', '[UserPro] New User Registration' => '[UserPro] Inscription d’un nouvel utilisateur', '[UserPro] A profile has been removed!' => '[UserPro] Un profil a été supprimé !', '[UserPro] A profile has been updated!' => '[UserPro] Un profil a été mis à jour !', 'To complete registration, you must read and agree to our terms and conditions. This text can be custom.' => 'Pour terminer votre inscription, vous devez lire et accepter nos conditions générales. Ce texte peut être personnalisé.', '— Select account role —' => '— Selectionner le rôle du compte —', 'This account has been blocked' => 'Ce compte a été supprimé avec succès.', 'Please enter a correct phone number' => 'Veuillez saisir un choix par ligne !', '%s must not exceed %s characters' => '', 'Incorrect answer. please try again.' => 'Réponse incorrecte. Veuillez réessayer.', 'No file has been uploaded.' => 'Aucun fichier n’a été téléchargé', 'Upload photo' => 'Télécharger une photo', 'Upload file' => 'Télécharger un fichier', 'Make this field hidden from public' => 'Masquer ce champ au public', 'Answer: %s + %s' => 'Répondez: %s + %s', 'Password Strength' => 'Indicateur de sûreté', 'Subscribe to our newsletter' => 'S’abonner à notre newsletter', 'You are currently subscribed to this newsletter.' => 'Vous êtes actuellement abonné à cette newsletter.', 'Unsubscribe from this newsletter' => 'Se désabonner de cette newsletter', '(Your %s will not be visible to public)' => '(Votre %s ne sera pas visible au public)', 'Remember me' => 'Se souvenir de moi', '%s\'s uploaded photo' => 'Photo téléchargée par %s', 'Warning! Your account is %s verified. If you change your display name, you will lose your verification status.' => 'Attention! Votre compte est %s certifié. Si vous changez votre nom d’affichage vous perdrez votre status certifié.', '\'s Profile' => ' (profil)', 'Account Details' => 'Détails du compte', 'Profile Details' => 'Détails du profil', 'Social Profiles' => 'Profils sociaux', 'Provide some content' => 'Ajoutez du contenu', 'Enter content here...' => 'Ajoutez du contenu ici...', 'You must enter a post title' => 'Vous devez entrer un titre d’article.', 'Set Featured Image' => 'Choisissez une image d’illustration', 'You must upload a featured image' => 'Vous devez télécharger un image d’illustration', 'Logout' => 'Déconnexion', 'Member Directory' => 'Répertoire des membres', 'My Profile' => 'Mon Profil', 'Register' => 'Inscription', 'Login' => 'Connexion', '« Previous' => '« Précédent', 'Next »' => 'Suivant »', 'Congratulations! Your account is now %s Verified. ' => 'Félicitations! Vous compte est désormais %s certifié. ', 'This invitation request is invalid or has expired! ' => 'Cette requête d’invitation est invalide ou a expiré!', 'Please log in to publish a new post.' => 'Veuillez vous connecter pour publier un nouvel article.', 'Your account has been successfully activated!' => 'Votre compte a été activé avec succès !', 'Your profile has been saved.' => 'Votre profil a été enregistré.', 'Thank you for registering. Please login to continue.' => 'Merci pour votre inscription. Veuillez vous connecter pour continuer.', 'Please login to view and manage your profile.' => 'Veuillez vous connecter pour consulter et gérer votre profil.', 'Please login to view this user profile.' => 'Veuillez vous connecter pour voir ce profil d’utilisateur.', 'We\'ll email you a secret key. Once you obtain the key, you can use it to Change your Password.' => 'Nous allons vous envoyer une clé secrète par e-mail. Une fois que vous aurez obtenu cette clé, vous pourrez l\'utiliser pour modifier votre mot de passe.', 'A secret key has been sent successfully.' => 'Une clé secrète vous a été envoyée.', 'Your password has been changed successfully. Please login.' => 'Votre mot de passe a été modifié avec succès. Veuillez vous connecter.', 'Your profile has been saved!' => 'Votre profil a été enregistré!', 'This field is required' => 'Ce champ est requis', 'Your password is too short' => 'Votre mot de passe est trop court', 'Passwords do not match' => 'Les mots de passe ne correspondent pas', 'Password is not strong enough' => 'Le mot de passe n’est pas suffisamment sûr', 'Register an Account' => 'Enregistrer un compte', 'Already a member?' => 'Déjà membre ?', 'Forgot your password?' => 'Mot de passe oublié ?', 'Create an Account' => 'Créer un compte', 'Delete Profile' => 'Supprimer le profil', 'Undo, back to profile' => 'Annuler, revenir au profil', 'Confirm Deletion' => 'Confirmer la suppression', 'Back to Profile' => 'Revenir au profil', 'Reset Password' => 'Réinitialiser le mot de passe', 'Back to Login' => 'Revenir à la connexion', 'Request Secret Key' => 'Demander une clé secrète', 'Change your Password' => 'Changer votre mot de passe', 'Request New Key' => 'Demander une nouvelle clé', 'Change my Password' => 'Changer mon mot de passe', 'Do not have a secret key?' => 'Vous n’avez pas de clé secrète ?', 'Latest Members' => 'Derniers membres', 'Who is online now' => 'Qui est en ligne', 'An error has occured' => 'Une erreur est survenue', 'Existing member? login' => 'Membre existant ? Connectez-vous', 'Add a New Post' => 'Ajouter un nouvel article', 'Login with Facebook' => 'Se connecter avec Facebook', 'Login with Twitter' => 'Se connecter avec Twitter', 'Login with Google+' => 'Se connecter avec Google+', 'You must accept our terms and conditions' => 'Vous devez accepter les conditions générales', 'Your Secret Key' => 'Votre clé secrète', 'You need a secret key to change your account password. Do not have one? Click here to obtain a new key.' => 'Vous avez besoin d’une clé secrète pour changer votre mot de passe. Vous n’en avez pas ? Cliquez ici pour en obtenir une nouvelle.', 'No, do not delete' => 'Non, ne pas supprimer', 'Yes, delete this profile!' => 'Oui, supprimer ce profil !', 'This action cannot be UNDONE! It will delete all profile data.' => 'Cette action est IRREVERSIBLE ! Toutes les données de votre profil seront détruites.', 'View member photo' => 'Voir la photo des membres', 'Request Verification' => 'Demander la certification', 'View/manage your profile' => 'Voir/gérer votre profil', 'Search for a user...' => 'Rerchercher un utilisateur...', 'Search' => 'Rerchercher', 'Clear your Search' => 'Effacez votre recherche', 'No users match your search. Please try again.' => 'Aucun utilisateur ne correspond à votre recherche. Veuillez réessayer.', 'The user did not enter a description yet.' => 'L’utilisateur n’a pas rédigé de description.', 'You are not authorized to access this area.' => 'Vous n’êtes pas autorisé à accéder à cet espace.', 'You are not authorized to access this profile.' => 'Vous n’êtes pas autorisé à accéder à ce profil.', 'The user profile you are trying to reach does not exist. It could have been removed.' => 'Le profil que vous tentez de consulter n’existe pas. Il a peut être été supprimé.', 'No users are online now.' => 'Aucun utilisateur en ligne.', 'Restricted Content / Members Only' => 'Contenu restreint / Membres uniquement', 'You cannot view this content because It is available to members only. Please login or register to view this area.' => 'Vous ne pouvez pas consulter ce contenu parce qu’il n’est disponible qu’aux membres. Veuillez vous connecter ou vous inscrire pour accéder à cet espace.', 'Enter post title here...' => 'Entrer un titre d’article ici...', 'Post Type' => 'Type d’article', 'Select Categories' => 'Choisir les catégories', 'Registration Closed' => 'Inscriptions closes', 'Registration is currently disabled. We apologize for any inconvenience.' => 'Les inscriptions sont actuellement désactivées. Veuillez nous excuser pour la gêne occasionnée.', 'Your request is sent!' => 'Votre demande a été prise en compte !', 'Thanks, %s! Your request to get verified has been sent to the staff. A staff member will look at your application shortly and take the appropriate action.' => 'Merci, %s ! Votre demande de certification a été envoyée à notre équipe. Un membre de l’équipe observera bientôt votre requête et prendra la décision appropriée.', 'Username or Email' => 'Nom d’utilisateur ou e-mail', 'Access Denied' => 'Accès refusé', 'You do not have enough permissions or role to view this private content. We apologize for that.' => 'Vous n’avez pas les permissions requises ou le rôle pour consulter ce contenu privé. Veuillez nous en excuser.', );
		} elseif ( 'osetin-helper' === $domain ) {
			$array['fr_FR'][ $domain ] = array(
				'Recipes'
					=> 'Recettes',
				'Recipe'
					=> 'Recette',
				'Add Recipe'
					=> 'Nouvelle Recette',
				'Add New Recipe'
					=> 'Ajouter une Nouvelle Recette',
				'Edit Recipe'
					=> 'Modifier la Recette',
				'New Recipe'
					=> 'Nouvelle Recette',
				'View Recipe'
					=> 'Voir la Recette',
				'Search Recipes'
					=> 'Rechercher des Recettes',
				'No Recipes Found'
					=> 'Aucunes Recettes Trouvées',
				'Feature'
					=> 'Attribut',
				'Osetin Helper'
					=> 'Osetin Helper',
				'Adds Recipe support to use within a theme'
					=> 'Ajoute la fonctionnalité Recettes au thème',
				'PinSupreme'
					=> 'PinSupreme',
				'http://pinsupreme.com'
					=> 'http://pinsupreme.com',
			);
			
		} else {
			$array['fr_FR'][ $domain ] = array();
			return;
		}
	} else {
		$array[ $language ][ $domain ] = array();
		return;
	}
}