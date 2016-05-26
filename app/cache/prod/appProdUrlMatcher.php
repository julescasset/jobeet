<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
