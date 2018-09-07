<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_pages_homepage' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesController::pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPages' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pages/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPages_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPages_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pages/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPages_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pages/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPages_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPages_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPages_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\PagesBundle\\Controller\\PagesAdminController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_user_panier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\UserBundle\\Controller\\UserController::panierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_user_validation_commande' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\UserBundle\\Controller\\CommandeController::validationCommandeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/API/Banque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_user_factures' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\UserBundle\\Controller\\UserController::facturesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/profile/factures',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'facturePDF' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\UserBundle\\Controller\\UserController::facturePDFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/profile/factures/PDF',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminUtilisateurs_index' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Jeu\\UserBundle\\Controller\\UserAdminController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/user/admin/utilisateurs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminAdressesUtilisateurs' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\UserBundle\\Controller\\UserAdminController::utilisateurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adresses',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user/admin/utilisateurs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminFacturesUtilisateurs' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\UserBundle\\Controller\\UserAdminController::utilisateurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/factures',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user/admin/utilisateurs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminCommande' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Jeu\\UserBundle\\Controller\\CommandesAdminController::commandesAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/user/admin/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminShowFacture' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\UserBundle\\Controller\\CommandesAdminController::showFactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/admin/commandes/facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_panier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::panierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_ajouter_panier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::ajouterAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_supprimer_panier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::supprimerAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimerpanier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_livraison' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::livraisonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/livraison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_validation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::validationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/validation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livraison_adresse_suppression' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PanierController::suppressionAdresseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/suppression/adresse',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_homepage' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::modifierAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::supprimerAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_avis_depos' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\AvisController::deposAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/avis/depos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_avis_vue' => array (  0 =>   array (    0 => 'id',    1 => 'page',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\AvisController::vueAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/avis/vue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_selection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::selectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/selection',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'meilleurVente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::meilleurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produits' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'presentation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::presentationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorieProduits' => array (  0 =>   array (    0 => 'categorie',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::produitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'categorie',    ),    1 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rechercheProduits' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::rechercheTraitementAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/recherches',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminProduits_index' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminProduits_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminProduits_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produits/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminProduits_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produits/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminProduits_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminProduits_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminProduits_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticlesAdminController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminCategories_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminCategories_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminCategories_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminCategories_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminCategories_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminCategories_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminCategories_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\CategoriesAdminController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPublic_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/public/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPublic_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/public',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPublic_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/public/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPublic_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/public/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPublic_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/public',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPublic_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/public',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPublic_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\PublicAdminController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/public',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminAvis_index' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\AvisAdminController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin/avis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminAvis_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\AvisAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/avis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminAvis_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\AvisAdminController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/avis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminStatistiques_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\StatistiquesAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/statistiques/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminStatistiques_note' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\StatistiquesAdminController::noteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/statistiques/note',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminStatistiques_commande' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\StatistiquesAdminController::commandeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/statistiques/commande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminStatistiques_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\StatistiquesAdminController::userAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/statistiques/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminStatistiques_riche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\StatistiquesAdminController::richeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/statistiques/riche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jeu_article_testprod' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jeu\\ArticleBundle\\Controller\\ArticleController::testAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/testprod',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.change_password.controller:changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}