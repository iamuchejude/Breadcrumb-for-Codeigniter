<?php
  defined('BASEPATH') or exit('Page access is not allowed');

  class Breadcrumb {
    /*
     * Breadcrumb generator for codeigniter
     * Breadcrumb Variables
     * By Nwankwo Uche Jude(@JudeTheGeniuss)
    */
    private $breadcrumb = array();
    private $includeHome;
    private $containerOpen;
    private $containerClose;
    private $divider;
    private $crumbOpen;
    private $crumbClose;
    private $CI;

    public function __construct() {
        $CI =& get_instance();
        $CI->load->library('url');
        $CI->load->config('breadcrumb', TRUE);
        $this->include_home = $CI->config->item('includeHome', 'breadcrumb');
        $this->container_open = $CI->config->item('containerOpen', 'breadcrumb');
        $this->container_close = $CI->config->item('containerClose', 'breadcrumb');
        $this->divider = $CI->config->item('divider', 'breadcrumb');
        $this->crumb_open = $CI->config->item('crumbOpen', 'breadcrumb');
        $this->crumb_close = $CI->config->item('crumbClose', 'breadcrumb');
        if(isset($this->_include_home) && (strlen($this->_include_home) > 0)) {
          $this->_breadcrumb[] = array('title'=>$this->_include_home, 'href'=>rtrim(base_url(),'/'));
        }
    }

    public function addCrumbs($crumbTitle = NULL, $crumbUrl = '', $segment = FALSE) {
        // if the method won't receive the $title parameter, it won't do anything to the $_breadcrumb
        if(is_null($crumbTitle)) {
          return " ";
        }
        // first let's find out if we have a url
        if(isset($crumbUrl) && (strlen($crumbUrl) > 0)) {
            // if segment not FALSE we will build the url from the previous crumb
            if($segment) {
              $previousUrl = $this->breadcrumb[sizeof($this->breadcrumb) - 1]['crumbUrl'];
              $crumbUrl = $previousUrl . '/' . $crumbUrl;
            } elseif (!filter_var($crumbUrl, FILTER_VALIDATE_URL)) {
               // else if the url is not an valid we compose the URL from our site's base URL
              $crumbUrl = base_url($crumbUrl);
            }
        }
        // add crumb to the end of the breadcrumb
        $this->breadcrumb[] = array('title' => $title, 'href' => $href);
    }

    public function showBreadcrumb() {
      $breadcrumbOutput = $this->containerOpen; // Breadcrumb opening tag
      if(sizeof($this->breadcrumb) > 0) {
        foreach($this->breadcrumb as $key => $crumb) {
          $breadcrumbOutput .= $this->crumbOpen; // Crumb Opening tag
          if(strlen($crumb['crumbUrl']) > 0) {
            $breadcrumbOutput .= anchor($crumb['crumbURL'], $crumb['crumbTitle']);
          } else {
            $breadcrumbOutput .= $crumb['crumbTitle'];
          }
          $breadcrumbOutput .= $this->crumbClose; // Crumb Closing tag with the divider if is not the last crumb
          if($key < (sizeof($this->breadcrumb) - 1)) {
            $breadcrumbOutput .= $this->divider;
          }
        }
      }
      $breadcrumbOutput .= $this->containerClose; // Breadcrumb Closing tag
      return $breadcrumbOutput;
    }
  }
