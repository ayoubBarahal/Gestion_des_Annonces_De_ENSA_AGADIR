# Site Web de Gestion des Annonces de l'ENSA Agadir

Ce projet est un site web développé en HTML, CSS, JavaScript et PHP qui permet la gestion des annonces pour l'École Nationale des Sciences Appliquées (ENSA) d'Agadir. Le site permet à différents types d'utilisateurs d'accéder à des fonctionnalités spécifiques.

## Fonctionnalités

### Administrateur

L'administrateur peut :
- Ajouter, modifier et supprimer des étudiants, des professeurs et des chefs de filière.
- Gérer les annonces et les valider avant leur publication.

### Chef de Filière

Le chef de filière peut :
- Confirmer les annonces rédigées par les professeurs pour sa filière.

### Étudiant

L'étudiant peut :
- S'inscrire sur le site pour accéder aux annonces concernant sa filière et sa classe.

## Structure du Projet

Le projet est organisé en plusieurs fichiers et répertoires :
- **index.html :** La page d'accueil du site.
- **css/ :** Le répertoire contenant les fichiers CSS pour la mise en forme.
- **js/ :** Le répertoire contenant les fichiers JavaScript pour le comportement interactif.
- **php/ :** Le répertoire contenant les scripts PHP pour la logique serveur et l'interaction avec la base de données.
- **includes/ :** Le répertoire contenant les fichiers réutilisables inclus dans plusieurs pages.
- **admin/ :** Le répertoire contenant les pages et fonctionnalités spécifiques à l'administrateur.
- **chef_filiere/ :** Le répertoire contenant les pages et fonctionnalités spécifiques aux chefs de filière.
- **etudiant/ :** Le répertoire contenant les pages et fonctionnalités spécifiques aux étudiants.
- **database.sql :** Le fichier SQL contenant la structure de la base de données.

## Utilisation

1. Assurez-vous d'avoir un serveur web (comme Apache) et PHP installés sur votre système.
2. Clonez ce dépôt sur votre serveur.
3. Importez la structure de la base de données en utilisant le fichier `database.sql`.
4. Configurez les paramètres de connexion à la base de données dans les fichiers PHP, le cas échéant.
5. Accédez au site via votre navigateur web et commencez à utiliser les fonctionnalités enregistrées pour chaque type d'utilisateur.

## Auteur

Ce projet a été développé par [Votre Nom]. N'hésitez pas à le modifier et à l'utiliser selon vos besoins.

## Contributions

Les contributions sous forme de pull requests sont les bienvenues. Pour des changements majeurs, veuillez ouvrir d'abord une issue pour discuter de ce que vous souhaitez changer.

## Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.
