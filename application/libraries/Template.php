<?php
class Template {
                //ci instance
                private $CI;
                //template Data
                var $template_data = array();
                public function __construct()
                {
                                $this--->CI =&amp; get_instance();
                }
                function set($content_area, $value)
                {
                                $this-&gt;template_data[$content_area] = $value;
                }
                function load($template = '', $name ='', $view = '' , $view_data = array(), $return = FALSE)
                {
                                $this-&gt;set($name , $this-&gt;CI-&gt;load-&gt;view($view, $view_data, TRUE));
                              
                                $this-&gt;CI-&gt;load-&gt;view('layouts/'.$template, $this-&gt;template_data);
                }
                              
}
?&gt;