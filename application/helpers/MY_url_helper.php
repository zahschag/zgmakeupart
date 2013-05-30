<?php
/*
 * URL helpers, this file extends
 * the current URL helper that
 * CodeIgniter includes.
*/
/**
*Site URL
*
*
*Create a local URL based your basepath.
*
*
*
*
*/
 if(! function_exists('ci_site_url'))
 {
    function ci_site_url($uri = '')
    {
       $CI = & get_instance();
       return $CI->config->site_url($uri);
    }
 }

/**
 * base_url
 *
 * This function OVERRIDES the current
 * CodeIgniter base_url function to support
 * CDN'ized content.
 */
function base_url($uri = '')
{
   $CI =& get_instance();

   $cdn = $CI->config->item('cdn_url');
   if (!empty($cdn))
      return $cdn . $uri;

   return $CI->config->base_url($uri);
}
/**
 * Anchor Link
 *
 * Creates an anchor based on the local URL.
 *
 * @access  public
 * @param   string   the URL
 * @param   string   the link title
 * @param   mixed any attributes
 * @return  string
 */
if ( ! function_exists('anchor'))
{
   function anchor($uri = '', $title = '', $attributes = '')
   {
      $title = (string) $title;

      if ( ! is_array($uri))
      {
         $site_url = ( ! preg_match('!^\w+://! i', $uri)) ? site_url($uri) : $uri;
      }
      else
      {
         $site_url = ci_site_url($uri);
      }

      if ($title == '')
      {
         $title = $site_url;
      }

      if ($attributes != '')
      {
         $attributes = _parse_attributes($attributes);
      }

      return '<a href="'.$site_url.'"'.$attributes.'>'.$title.'</a>';
   }
}

/**
 * Anchor Link - Pop-up version
 *
 * Creates an anchor based on the local URL. The link
 * opens a new window based on the attributes specified.
 *
 * @access  public
 * @param   string   the URL
 * @param   string   the link title
 * @param   mixed any attributes
 * @return  string
 */
if ( ! function_exists('anchor_popup'))
{
   function anchor_popup($uri = '', $title = '', $attributes = FALSE)
   {
      $title = (string) $title;

      $site_url = ( ! preg_match('!^\w+://! i', $uri)) ? ci_site_url($uri) : $uri;

      if ($title == '')
      {
         $title = $site_url;
      }

      if ($attributes === FALSE)
      {
         return "<a href='javascript:void(0);' onclick=\"window.open('".$site_url."', '_blank');\">".$title."</a>";
      }

      if ( ! is_array($attributes))
      {
         $attributes = array();
      }

      foreach (array('width' => '800', 'height' => '600', 'scrollbars' => 'yes', 'status' => 'yes', 'resizable' => 'yes', 'screenx' => '0', 'screeny' => '0', ) as $key => $val)
      {
         $atts[$key] = ( ! isset($attributes[$key])) ? $val : $attributes[$key];
         unset($attributes[$key]);
      }

      if ($attributes != '')
      {
         $attributes = _parse_attributes($attributes);
      }

      return "<a href='javascript:void(0);' onclick=\"window.open('".$site_url."', '_blank', '"._parse_attributes($atts, TRUE)."');\"$attributes>".$title."</a>";
   }
}




// ------------------------------------------------------------------------

/**
 * Header Redirect
 *
 * Header redirect in two flavors
 * For very fine grained control over headers, you could use the Output
 * Library's set_header() function.
 *
 * @access  public
 * @param   string   the URL
 * @param   string   the method: location or redirect
 * @return  string
 */
if ( ! function_exists('redirect'))
{
   function redirect($uri = '', $method = 'location', $http_response_code = 302)
   {
      if ( ! preg_match('#^https?://#i', $uri))
      {
         $uri = ci_site_url($uri);
      }

      switch($method)
      {
         case 'refresh' : header("Refresh:0;url=".$uri);
            break;
         default        : header("Location: ".$uri, TRUE, $http_response_code);
            break;
      }
      exit;
   }
}

/*
 * is_active
 * Allows a string input that is
 * delimited with "/". If the current
 * params contain what is currently
 * being viewed, it will return true
 *
 * This function is order sensitive.
 * If the page is /view/lab/1 and you put
 * lab/view, this will return false. 
 *
 * @author sjlu
 */
function is_active($input_params = "")
{
   // uri_string is a CodeIgniter function
   $uri_string = uri_string();

   // direct matching, faster than looping.
   if ($uri_string == $input_params)
      return true;
      
   $uri_params = preg_split("/\//", $uri_string);
   $input_params = preg_split("/\//", $input_params);

   $prev_key = -1;
   foreach ($input_params as $param)
   {
      $curr_key = array_search($param, $uri_params);

      // if it doesn't exist, return null
      if ($curr_key === FALSE)
         return false;

      // this makes us order sensitive
      if ($curr_key < $prev_key)
         return false;

      $prev_key = $curr_key;
   }

   return true;
}

/*
 * get_controller()
 * get_function()
 * get_parameters()
 *
 * These functions help split out
 * the three different params in the
 * URL.
 * 
 * The URL is split in such a way where
 * controller/function/parameters[/]...
 */
function get_controller()
{
   $uri_string = uri_string();
   
   if (empty($uri_string))
      return $route['default_controller'];

   return preg_split("/\//", $uri_string, 1);
}

function get_function()
{
   $uri_string = uri_string();
   
   if (empty($uri_string))
      return $route['default_controller'];
  
   $uri_array = preg_split("/\//", $uri_string, 2);

   if (empty($uri_array[1]))
      return 'index';

   return $uri_array[1];
}
