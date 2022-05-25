Espace membre basique---------------------
Url     : http://codes-sources.commentcamarche.net/source/52290-espace-membre-basiqueAuteur  : cs_bonhommecreaDate    : 02/08/2013
Licence :
=========

Ce document intitulé « Espace membre basique » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

Salut a tous ^^
<br />
<br />Comme pour tous les scripts d&eacute;j&agrave; fa
its, il y a les pr&eacute;-requis et puis viens la source.
<br />[---]
<br />p
r&eacute;-requis :
<br />
<br />Il vous faut 
<br />
<br />-une base de donn
&eacute;e MySQL.
<br />-PHP5 ou ult&eacute;rieur.
<br />-le strict minimum en 
PHP.
<br />
<br />_____
<br />
<br />Ce que je contiens :
<br />
<br />-In
scription/Connexion.
<br />-Un espace membre.
<br />-La liste des membres insc
rits
<br />-message perso a l'inscription
<br />-Un profil.
<br />
<br />___
__
<br />
<br />Prochaines Mise a jour :
<br />
<br />-Mini-Chat (il est d&e
acute;j&agrave; sur mon site, mais je travaille encore dessus).
<br />-Messager
ie Priv&eacute;e.
<br />-Forum.
<br />-Livre d'or.
<br />-Newsletter.
<br />
-News.
<br />
<br />_____
<br />
<br />Les chose a faire :
<br />
<br />T&
eacute;l&eacute;charger Le fichier ZIP ci-dessous.
<br />
<br />IMPORTER LE FI
CHIER membre.sql  DANS VOTRE BASE DE DONNEES
<br />Modifier les fichiers pour l
es adapter &agrave; votre site.
<br />Effectuer les modifications indiqu&eacute
;es dans READ-ME.txt (ce sont les m&ecirc;me pour les 3 fichiers, mais bon ...).

<br />Envoyer les fichiers sur le serveur.
<br />
<br />_____
<br />A savoi
r :
<br />
<br />La page &quot; page-vide.php &quot; est un exemple de page qu
i montre comment utiliser les sessions.
<br />
<br />Vous pouvez tester l'espa
ce sur <a href='http://ultra-upload.tk' target='_blank'>http://ultra-upload.tk</
a>
<br /><a name='source-exemple'></a><h2> Source / Exemple : </h2>
<br /><pr
e class='code' data-mode='basic'>
--
-- Structure de la table `membre`
--


CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,

  `login` text NOT NULL,
  `pass_md5` text NOT NULL,
  `message` text,
  `ema
il` text,
  `arive` text,
  `signature` text,
  `site_web` text,
  `avatar` 
text,
  `rang` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=la
tin1 AUTO_INCREMENT=1 ;

-
</pre>
