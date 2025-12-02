# 🔐 Sécurité & Accès — Blog Laravel (Tutoriel 3.2.1)

## 1️⃣ Structure des zones du blog

Le tableau ci-dessous récapitule l’ensemble des pages du blog et leur niveau d’accès.

### **Zones du blog**

| Zone / Page                        | URL (exemple)                     | Type d’accès                       |
|-----------------------------------|----------------------------------|------------------------------------|
| Accueil du blog                   | /                                | Public                             |
| Liste des articles                | /articles                        | Public                             |
| Affichage d’un article            | /articles/{slug}                 | Public                             |
| Tableau de bord administrateur    | /admin                           | Réservé aux utilisateurs connectés |
| Création d’un article             | /admin/articles/create           | Réservé à certains rôles           |
| Édition d’un article              | /admin/articles/{id}/edit        | Réservé à certains rôles           |
| Suppression d’un article          | /admin/articles/{id}/delete      | Réservé à certains rôles           |

---

## 2️⃣ Rôles disponibles

Trois rôles distincts permettent de définir les permissions dans le blog.

### **Rôles**

| Rôle        | Description |
|-------------|-------------|
| **Visiteur** | Utilisateur non connecté, accès limité à la lecture des articles publics. |
| **Auteur**   | Utilisateur connecté capable de créer des articles et de gérer **uniquement les siens**. |
| **Admin**    | Gestionnaire du blog, peut administrer tous les articles ainsi que les utilisateurs. |

---

## 3️⃣ Répartition des permissions

Le tableau suivant indique les actions autorisées selon chaque rôle.

### **Tableau Rôle × Action**

| Action / Rôle                     | Visiteur | Auteur | Admin |
|-----------------------------------|:--------:|:------:|:-----:|
| Lecture des articles publics      | ✔️        | ✔️      | ✔️     |
| Accès à /admin                    | ❌        | ✔️      | ✔️     |
| Création d’un article             | ❌        | ✔️      | ❌     |
| Modification de ses propres articles | ❌     | ✔️      | ✔️     |
| Modification de tous les articles | ❌        | ❌      | ✔️     |
| Suppression de ses propres articles | ❌      | ✔️      | ✔️     |
| Suppression de tous les articles  | ❌        | ❌      | ✔️     |

---

## 4️⃣ Mise en œuvre dans Laravel

Laravel offre plusieurs mécanismes pour traduire ces règles métiers en code :

- **Gestion de l’utilisateur connecté**  
  → Authentification native (Laravel UI) : login, logout, `Auth::user()`.

- **Restriction d’accès à /admin pour les non connectés**  
  → Middleware `auth` placé sur les routes d’administration.

- **Distinction entre Auteur et Admin**  
  → Utilisation d’un champ `is_admin` dans la table `users`, accessible via `Auth::user()->is_admin`.

- **Contrôle fin des permissions (création, modification, suppression)**  
  → Gates & Policies.  
    Exemples :  
    - "Un auteur ne peut modifier que ses propres articles."  
    - "L’admin peut gérer tous les articles sans restriction."

---
