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

<!-- _class: lead -->

![center](assets/mvc.png)

---

## Router

Définir un uniquement point d'entrée dans la l'application