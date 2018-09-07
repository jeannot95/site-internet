<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/p')) {
            // jeu_pages_homepage
            if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeu_pages_homepage')), array (  '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesController::pageAction',));
            }

            // jeu_article_panier
            if ('/panier' === $pathinfo) {
                return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::panierAction',  '_route' => 'jeu_article_panier',);
            }

            // presentation
            if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::presentationAction',));
            }

            if (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

        }

        // contact
        if ('/contact' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_contact;
            }

            return array (  '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesController::contactAction',  '_route' => 'contact',);
        }
        not_contact:

        // categorieProduits
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieProduits')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::produitsAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/pages')) {
                    // adminPages
                    if ('/admin/pages' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminPages;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'adminPages');
                        }

                        return array (  '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::indexAction',  '_route' => 'adminPages',);
                    }
                    not_adminPages:

                    // adminPages_show
                    if (preg_match('#^/admin/pages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminPages_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_show')), array (  '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::showAction',));
                    }
                    not_adminPages_show:

                    // adminPages_new
                    if ('/admin/pages/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminPages_new;
                        }

                        return array (  '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::newAction',  '_route' => 'adminPages_new',);
                    }
                    not_adminPages_new:

                    // adminPages_create
                    if ('/admin/pages/create' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_adminPages_create;
                        }

                        return array (  '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::createAction',  '_route' => 'adminPages_create',);
                    }
                    not_adminPages_create:

                    // adminPages_edit
                    if (preg_match('#^/admin/pages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminPages_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_edit')), array (  '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::editAction',));
                    }
                    not_adminPages_edit:

                    // adminPages_update
                    if (preg_match('#^/admin/pages/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_adminPages_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_update')), array (  '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::updateAction',));
                    }
                    not_adminPages_update:

                    // adminPages_delete
                    if (preg_match('#^/admin/pages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_adminPages_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_delete')), array (  '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::deleteAction',));
                    }
                    not_adminPages_delete:

                }

                // admin
                if ('/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'admin');
                    }

                    return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::indexAction',  '_route' => 'admin',);
                }

                if (0 === strpos($pathinfo, '/admin/produits')) {
                    // adminProduits_index
                    if (preg_match('#^/admin/produits(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminProduits_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_index')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::indexAction',  'page' => 1,));
                    }
                    not_adminProduits_index:

                    // adminProduits_show
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminProduits_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_show')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::showAction',));
                    }
                    not_adminProduits_show:

                    // adminProduits_new
                    if ('/admin/produits/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminProduits_new;
                        }

                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::newAction',  '_route' => 'adminProduits_new',);
                    }
                    not_adminProduits_new:

                    // adminProduits_create
                    if ('/admin/produits/create' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_adminProduits_create;
                        }

                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::createAction',  '_route' => 'adminProduits_create',);
                    }
                    not_adminProduits_create:

                    // adminProduits_edit
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminProduits_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_edit')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::editAction',));
                    }
                    not_adminProduits_edit:

                    // adminProduits_update
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_adminProduits_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_update')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::updateAction',));
                    }
                    not_adminProduits_update:

                    // adminProduits_delete
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_adminProduits_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_delete')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::deleteAction',));
                    }
                    not_adminProduits_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/public')) {
                    // adminPublic_index
                    if ('/admin/public' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminPublic_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'adminPublic_index');
                        }

                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::indexAction',  '_route' => 'adminPublic_index',);
                    }
                    not_adminPublic_index:

                    // adminPublic_show
                    if (preg_match('#^/admin/public/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminPublic_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPublic_show')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::showAction',));
                    }
                    not_adminPublic_show:

                    // adminPublic_new
                    if ('/admin/public/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminPublic_new;
                        }

                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::newAction',  '_route' => 'adminPublic_new',);
                    }
                    not_adminPublic_new:

                    // adminPublic_create
                    if ('/admin/public/create' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_adminPublic_create;
                        }

                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::createAction',  '_route' => 'adminPublic_create',);
                    }
                    not_adminPublic_create:

                    // adminPublic_edit
                    if (preg_match('#^/admin/public/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminPublic_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPublic_edit')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::editAction',));
                    }
                    not_adminPublic_edit:

                    // adminPublic_update
                    if (preg_match('#^/admin/public/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_adminPublic_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPublic_update')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::updateAction',));
                    }
                    not_adminPublic_update:

                    // adminPublic_delete
                    if (preg_match('#^/admin/public/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_adminPublic_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPublic_delete')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::deleteAction',));
                    }
                    not_adminPublic_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/categories')) {
                    // adminCategories_index
                    if ('/admin/categories' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminCategories_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'adminCategories_index');
                        }

                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::indexAction',  '_route' => 'adminCategories_index',);
                    }
                    not_adminCategories_index:

                    // adminCategories_show
                    if (preg_match('#^/admin/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminCategories_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_show')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::showAction',));
                    }
                    not_adminCategories_show:

                    // adminCategories_new
                    if ('/admin/categories/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminCategories_new;
                        }

                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::newAction',  '_route' => 'adminCategories_new',);
                    }
                    not_adminCategories_new:

                    // adminCategories_create
                    if ('/admin/categories/create' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_adminCategories_create;
                        }

                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::createAction',  '_route' => 'adminCategories_create',);
                    }
                    not_adminCategories_create:

                    // adminCategories_edit
                    if (preg_match('#^/admin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_adminCategories_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_edit')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::editAction',));
                    }
                    not_adminCategories_edit:

                    // adminCategories_update
                    if (preg_match('#^/admin/categories/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_adminCategories_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_update')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::updateAction',));
                    }
                    not_adminCategories_update:

                    // adminCategories_delete
                    if (preg_match('#^/admin/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_adminCategories_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_delete')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::deleteAction',));
                    }
                    not_adminCategories_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/avis')) {
                    // adminAvis_index
                    if (preg_match('#^/admin/avis(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminAvis_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminAvis_index')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\AvisAdminController::indexAction',  'page' => 1,));
                    }
                    not_adminAvis_index:

                    // adminAvis_show
                    if (preg_match('#^/admin/avis/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_adminAvis_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminAvis_show')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\AvisAdminController::showAction',));
                    }
                    not_adminAvis_show:

                    // adminAvis_delete
                    if (preg_match('#^/admin/avis/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_adminAvis_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminAvis_delete')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\AvisAdminController::deleteAction',));
                    }
                    not_adminAvis_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/statistiques')) {
                    // adminStatistiques_index
                    if ('/admin/statistiques' === $trimmedPathinfo) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'adminStatistiques_index');
                        }

                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\StatistiquesAdminController::indexAction',  '_route' => 'adminStatistiques_index',);
                    }

                    // adminStatistiques_note
                    if ('/admin/statistiques/note' === $pathinfo) {
                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\StatistiquesAdminController::noteAction',  '_route' => 'adminStatistiques_note',);
                    }

                    // adminStatistiques_commande
                    if ('/admin/statistiques/commande' === $pathinfo) {
                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\StatistiquesAdminController::commandeAction',  '_route' => 'adminStatistiques_commande',);
                    }

                    // adminStatistiques_user
                    if ('/admin/statistiques/user' === $pathinfo) {
                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\StatistiquesAdminController::userAction',  '_route' => 'adminStatistiques_user',);
                    }

                    // adminStatistiques_riche
                    if ('/admin/statistiques/riche' === $pathinfo) {
                        return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\StatistiquesAdminController::richeAction',  '_route' => 'adminStatistiques_riche',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/ajout')) {
                // jeu_article_ajouter_panier
                if (0 === strpos($pathinfo, '/ajouter') && preg_match('#^/ajouter/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeu_article_ajouter_panier')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::ajouterAction',));
                }

                // jeu_article_ajout
                if ('/ajout' === $pathinfo) {
                    return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::ajouterAction',  '_route' => 'jeu_article_ajout',);
                }

            }

            elseif (0 === strpos($pathinfo, '/accueil')) {
                // jeu_article_homepage
                if (preg_match('#^/accueil(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeu_article_homepage')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::indexAction',  'page' => 1,));
                }

                // produits
                if (preg_match('#^/accueil(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produits')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::indexAction',  'page' => 1,));
                }

            }

            // jeu_article_avis_depos
            if (0 === strpos($pathinfo, '/avis/depos') && preg_match('#^/avis/depos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeu_article_avis_depos')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\AvisController::deposAction',));
            }

            // jeu_article_avis_vue
            if (0 === strpos($pathinfo, '/avis/vue') && preg_match('#^/avis/vue/(?P<id>[^/]++)(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeu_article_avis_vue')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\AvisController::vueAction',  'page' => 1,));
            }

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            // jeu_user_panier
            if ('/user/panier' === $pathinfo) {
                return array (  '_controller' => 'Jeu\\UserBundle\\Controller\\UserController::panierAction',  '_route' => 'jeu_user_panier',);
            }

            if (0 === strpos($pathinfo, '/user/profile/factures')) {
                // jeu_user_factures
                if ('/user/profile/factures' === $pathinfo) {
                    return array (  '_controller' => 'Jeu\\UserBundle\\Controller\\UserController::facturesAction',  '_route' => 'jeu_user_factures',);
                }

                // facturePDF
                if (0 === strpos($pathinfo, '/user/profile/factures/PDF') && preg_match('#^/user/profile/factures/PDF/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturePDF')), array (  '_controller' => 'Jeu\\UserBundle\\Controller\\UserController::facturePDFAction',));
                }

            }

            // jeu_user_validation_commande
            if (0 === strpos($pathinfo, '/user/API/Banque') && preg_match('#^/user/API/Banque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeu_user_validation_commande')), array (  '_controller' => 'Jeu\\UserBundle\\Controller\\CommandeController::validationCommandeAction',));
            }

            if (0 === strpos($pathinfo, '/user/admin/utilisateurs')) {
                // adminUtilisateurs_index
                if (preg_match('#^/user/admin/utilisateurs(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_adminUtilisateurs_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminUtilisateurs_index')), array (  '_controller' => 'Jeu\\UserBundle\\Controller\\UserAdminController::indexAction',  'page' => 1,));
                }
                not_adminUtilisateurs_index:

                // adminAdressesUtilisateurs
                if (preg_match('#^/user/admin/utilisateurs/(?P<id>[^/]++)/adresses$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_adminAdressesUtilisateurs;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminAdressesUtilisateurs')), array (  '_controller' => 'Jeu\\UserBundle\\Controller\\UserAdminController::utilisateurAction',));
                }
                not_adminAdressesUtilisateurs:

                // adminFacturesUtilisateurs
                if (preg_match('#^/user/admin/utilisateurs/(?P<id>[^/]++)/factures$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_adminFacturesUtilisateurs;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminFacturesUtilisateurs')), array (  '_controller' => 'Jeu\\UserBundle\\Controller\\UserAdminController::utilisateurAction',));
                }
                not_adminFacturesUtilisateurs:

            }

            elseif (0 === strpos($pathinfo, '/user/admin/commandes')) {
                // adminCommande
                if (preg_match('#^/user/admin/commandes(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCommande')), array (  '_controller' => 'Jeu\\UserBundle\\Controller\\CommandesAdminController::commandesAction',  'page' => 1,));
                }

                // adminShowFacture
                if (0 === strpos($pathinfo, '/user/admin/commandes/facture') && preg_match('#^/user/admin/commandes/facture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminShowFacture')), array (  '_controller' => 'Jeu\\UserBundle\\Controller\\CommandesAdminController::showFactureAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/supprimer')) {
                // jeu_article_supprimer_panier
                if (0 === strpos($pathinfo, '/supprimerpanier') && preg_match('#^/supprimerpanier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeu_article_supprimer_panier')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::supprimerAction',));
                }

                // jeu_article_supprimer
                if (preg_match('#^/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeu_article_supprimer')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::supprimerAction',));
                }

            }

            // livraison_adresse_suppression
            if (0 === strpos($pathinfo, '/suppression/adresse') && preg_match('#^/suppression/adresse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraison_adresse_suppression')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::suppressionAdresseAction',));
            }

            // jeu_article_selection
            if ('/selection' === $pathinfo) {
                return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::selectionAction',  '_route' => 'jeu_article_selection',);
            }

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            // jeu_article_livraison
            if ('/livraison' === $pathinfo) {
                return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::livraisonAction',  '_route' => 'jeu_article_livraison',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // jeu_article_validation
        if ('/validation' === $pathinfo) {
            return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::validationAction',  '_route' => 'jeu_article_validation',);
        }

        // jeu_article_view
        if (0 === strpos($pathinfo, '/vue') && preg_match('#^/vue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeu_article_view')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::viewAction',));
        }

        // jeu_article_modifier
        if (0 === strpos($pathinfo, '/modif') && preg_match('#^/modif/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeu_article_modifier')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::modifierAction',));
        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/recherche')) {
                // jeu_article_recherche
                if ('/recherche' === $pathinfo) {
                    return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::rechercheAction',  '_route' => 'jeu_article_recherche',);
                }

                // rechercheProduits
                if (0 === strpos($pathinfo, '/recherches') && preg_match('#^/recherches(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_rechercheProduits;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rechercheProduits')), array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::rechercheTraitementAction',  'page' => 1,));
                }
                not_rechercheProduits:

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        // meilleurVente
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'meilleurVente');
            }

            return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::meilleurAction',  '_route' => 'meilleurVente',);
        }

        // jeu_article_testprod
        if ('/testprod' === $pathinfo) {
            return array (  '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::testAction',  '_route' => 'jeu_article_testprod',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
