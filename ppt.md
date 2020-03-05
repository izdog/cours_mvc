---
marp: true
theme: gaia
---
<style>
    img[alt~="center"] {
        display: block;
        margin: 0 auto;
    }
</style>
<!-- _class:
    - lead
    - invert
     
     -->
# **MVC**
### **M**odèle **V**ue **C**ontroleur

---

# MVC

Le modèle MVC est un design pattern, qui décrit la manière d'architecturer une application "informatique" en la décomposant en trois partie.

- La partie **Model**
- La partie **Vue**
- La partie **Controleur**

---

# Modèle

Gère la couche métier *(business métier, logique métier)*

Récupère les informations de la base de données, les organise, les assemble pour qu'elles puissent être envoyer au **Controleur**

---

# Vue

Gère l'affichage des informations

Représentation des données du **Modèle** 

--- 

# Controleur

Gère la dynamique de l'application

Fait le lien entre **l'utilisateur** et le reste de **l'application**

Récupère les données de l'utilisateur *(formulaire)*, les filtre/controle

Récupère les données du **Model**

Génère la/les vues

--- 

<!-- _class: 
    - lead 
    - invert
-->

![center](assets/mvc.png)

---

## Router

Rediriger toutes les URLS vers un uniquement point d'entrée pour :

- Centralisé les éléments essentiels au bon fonctionnement de l'application
- Utiliser des URLS personnalisées

---
<!-- _class: invert -->
![center](assets/routeur.png)

---

# Exemple de table de routage

Table de routage Symfony YAML :

``` yaml
# config/routes.yaml
blog_list:
    path: /blog
    controller: App\Controller\BlogController::list
    methods: GET|HEAD

api_post_show:
    path: /api/posts/{id}
    controller: App\Controller\BlogApiController::show
    methods: GET|HEAD
```

---

# Exemple de table de routage

Table de routage Laravel PHP :

```php
Route::get('/article', 'ArticleController@index');

Route::get('/article/{id}', 'ArticleController@show');

Route::put('/article/edit/{id}', 'ArticleController@edit');

Route::post('/article/post', 'ArticleController@post')
```

---

# Avantages

**Séparation des différentes couches de l'application**

**Permet le travail à plusieurs**

**Réutilisabilité**

---

# Contraintes

**Beaucoup de fichier à manipuler**

**Difficultés de conception**