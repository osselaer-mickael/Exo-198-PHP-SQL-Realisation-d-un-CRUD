Consignes :

## Préparation
* Vous allez réaliser votre premier CRUD en PHP : **CRUD** est l'acronyme de **Create Read Update Delete**
* Tout d'abord, vous allez vous connecter à une nouvelle base de données conçue pour cet exo
* A l'aide de PhpMyAdmin, créez une table eleves ( ou eleve au singulier, à vous de choisir, mais gardez votre propre convention )
  

    Les champs que cette table doit contenir sont:
    
    - id
    - nom
    - prenom
    - age

Choisissez les types de données adéquats.

## CREATE
Créez une fonction qui ajoute un élève pà la table ***eleves***, cette fonction prendra en parametre $nom,$prenom, $age

A l'intérieur de cette fonction, vous allez executer la requete sql adéquate qui va insérer un nouvel enregistrement en 
utilisant les parametres de votre fonction comme valeurs

## READ
Créez une fonction qui va selectionner tous les enregistrements de la table ***eleves*** et retourner le resultat

Vous allez faire un appel à cette fonction pour afficher la liste des élèves sur la page

Cette fonction retourne soit un tableau PHP contenant toutes les informations, soit les informations déjà mises en forme prêtes à être affichées.

## UPDATE
Créez une autre fonction permettant de mettre à jour un élève, cette fonction prendra en parametre $prenom,$nom,$age
et $idEleve, elle mettra à jour l'élève ayant pour id $idEleve en utilisant l'instruction SQL adéquate

## DELETE
Créez une autre fonction permettant de supprimer un élève, cette fonction prendra en parametre $idEleve et permettra
de supprimer l'enregistrement ayant pour id $idEleve en utilisant l'instruction SQL adéquate.

## BONUS

Créez toute la partie front qui affichera un formulaire permettant d'ajouter un éléve, un lien permettant d'afficher
la liste des éléves, un lien permettant de supprimer un éléve, un lien permettant de mettre à jour un éléve.