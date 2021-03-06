<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/job')) {
            // job_index
            if (rtrim($pathinfo, '/') === '/job') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_job_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'job_index');
                }

                return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobController::indexAction',  '_route' => 'job_index',);
            }
            not_job_index:

            // job_show
            if (preg_match('#^/job/(?P<company>[^/]++)/(?P<location>[^/]++)/(?P<id>\\d+)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_job_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_show')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobController::showAction',));
            }
            not_job_show:

            // job_preview
            if (preg_match('#^/job/(?P<company>[^/]++)/(?P<location>[^/]++)/(?P<token>\\w+)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_preview')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobController::previewAction',));
            }

            // job_new
            if ($pathinfo === '/job/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_job_new;
                }

                return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobController::newAction',  '_route' => 'job_new',);
            }
            not_job_new:

            // job_create
            if ($pathinfo === '/job/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_create;
                }

                return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobController::createAction',  '_route' => 'job_create',);
            }
            not_job_create:

            // job_edit
            if (preg_match('#^/job/(?P<token>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_edit')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobController::editAction',));
            }

            // job_update
            if (preg_match('#^/job/(?P<token>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_update')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobController::updateAction',));
            }
            not_job_update:

            // job_delete
            if (preg_match('#^/job/(?P<token>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_delete')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobController::deleteAction',));
            }
            not_job_delete:

            // job_publish
            if (preg_match('#^/job/(?P<token>[^/]++)/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_publish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_publish')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobController::publishAction',));
            }
            not_job_publish:

            // job_extend
            if (preg_match('#^/job/(?P<token>[^/]++)/extend$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_extend;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_extend')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobController::extendAction',));
            }
            not_job_extend:

        }

        // category_show
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_category_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\CategoryController::showAction',  'page' => 1,));
        }
        not_category_show:

        // ens_manon_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ens_manon_homepage');
            }

            return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobController::indexAction',  '_route' => 'ens_manon_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/ens/manon')) {
                if (0 === strpos($pathinfo, '/admin/ens/manon/category')) {
                    // admin_ens_manon_category_list
                    if ($pathinfo === '/admin/ens/manon/category/list') {
                        return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'ens.manon.admin.category',  '_sonata_name' => 'admin_ens_manon_category_list',  '_route' => 'admin_ens_manon_category_list',);
                    }

                    // admin_ens_manon_category_create
                    if ($pathinfo === '/admin/ens/manon/category/create') {
                        return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'ens.manon.admin.category',  '_sonata_name' => 'admin_ens_manon_category_create',  '_route' => 'admin_ens_manon_category_create',);
                    }

                    // admin_ens_manon_category_batch
                    if ($pathinfo === '/admin/ens/manon/category/batch') {
                        return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'ens.manon.admin.category',  '_sonata_name' => 'admin_ens_manon_category_batch',  '_route' => 'admin_ens_manon_category_batch',);
                    }

                    // admin_ens_manon_category_edit
                    if (preg_match('#^/admin/ens/manon/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_manon_category_edit')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'ens.manon.admin.category',  '_sonata_name' => 'admin_ens_manon_category_edit',));
                    }

                    // admin_ens_manon_category_delete
                    if (preg_match('#^/admin/ens/manon/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_manon_category_delete')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'ens.manon.admin.category',  '_sonata_name' => 'admin_ens_manon_category_delete',));
                    }

                    // admin_ens_manon_category_show
                    if (preg_match('#^/admin/ens/manon/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_manon_category_show')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'ens.manon.admin.category',  '_sonata_name' => 'admin_ens_manon_category_show',));
                    }

                    // admin_ens_manon_category_export
                    if ($pathinfo === '/admin/ens/manon/category/export') {
                        return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'ens.manon.admin.category',  '_sonata_name' => 'admin_ens_manon_category_export',  '_route' => 'admin_ens_manon_category_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/ens/manon/job')) {
                    // admin_ens_manon_job_list
                    if ($pathinfo === '/admin/ens/manon/job/list') {
                        return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobAdminController::listAction',  '_sonata_admin' => 'ens.manon.admin.job',  '_sonata_name' => 'admin_ens_manon_job_list',  '_route' => 'admin_ens_manon_job_list',);
                    }

                    // admin_ens_manon_job_create
                    if ($pathinfo === '/admin/ens/manon/job/create') {
                        return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobAdminController::createAction',  '_sonata_admin' => 'ens.manon.admin.job',  '_sonata_name' => 'admin_ens_manon_job_create',  '_route' => 'admin_ens_manon_job_create',);
                    }

                    // admin_ens_manon_job_batch
                    if ($pathinfo === '/admin/ens/manon/job/batch') {
                        return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobAdminController::batchAction',  '_sonata_admin' => 'ens.manon.admin.job',  '_sonata_name' => 'admin_ens_manon_job_batch',  '_route' => 'admin_ens_manon_job_batch',);
                    }

                    // admin_ens_manon_job_edit
                    if (preg_match('#^/admin/ens/manon/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_manon_job_edit')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobAdminController::editAction',  '_sonata_admin' => 'ens.manon.admin.job',  '_sonata_name' => 'admin_ens_manon_job_edit',));
                    }

                    // admin_ens_manon_job_delete
                    if (preg_match('#^/admin/ens/manon/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_manon_job_delete')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobAdminController::deleteAction',  '_sonata_admin' => 'ens.manon.admin.job',  '_sonata_name' => 'admin_ens_manon_job_delete',));
                    }

                    // admin_ens_manon_job_show
                    if (preg_match('#^/admin/ens/manon/job/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_manon_job_show')), array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobAdminController::showAction',  '_sonata_admin' => 'ens.manon.admin.job',  '_sonata_name' => 'admin_ens_manon_job_show',));
                    }

                    // admin_ens_manon_job_export
                    if ($pathinfo === '/admin/ens/manon/job/export') {
                        return array (  '_controller' => 'Ens\\ManonBundle\\Controller\\JobAdminController::exportAction',  '_sonata_admin' => 'ens.manon.admin.job',  '_sonata_name' => 'admin_ens_manon_job_export',  '_route' => 'admin_ens_manon_job_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
