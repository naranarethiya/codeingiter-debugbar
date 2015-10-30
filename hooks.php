
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Copy following to array and paste it in config/hook.php 
*/
$hook['post_controller_constructor'][] = array(
									'class'    => 'HookClass',
									'function' => 'EnableProfiler',
									'filename' => 'hook.debugger.php',
									'filepath' => 'hooks',
									'params'   => array()
                                );

$hook['display_override'][] = array(
									'class'    => 'HookClass',
									'function' => 'AttechProfilerView',
									'filename' => 'hook.debugger.php',
									'filepath' => 'hooks',
									'params'   => array()
                                );


/* End of file hooks.php */
/* Location: ./application/config/hooks.php */