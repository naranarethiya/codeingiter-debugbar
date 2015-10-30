<?php
/*
	Copy this file in to hook folder of application
*/

class HookClass
{
	function EnableProfiler() {
		$CI =& get_instance();
		if(ENVIRONMENT=='development') {
			$CI->output->enable_profiler(true);
		}
	}
	function AttechProfilerView() {
		$CI =& get_instance();
		if(ENVIRONMENT!='development' || $CI->input->is_ajax_request()) {
			echo $output=$CI->output->get_output();
		}
		else {
			$output=$CI->output->get_output();
			$CI->load->library('profiler');
	        $debugger=$CI->load->view("debugger_view",'',true);
	        if (preg_match("|</body>.*?</html>|is", $output)) {
	            $output  = preg_replace("|</body>.*?</html>|is", '', $output);
	            $output .= $CI->profiler->run();
	            $output .= $debugger;
	            $output .= '</body></html>';
	        }
	        else {
	            $output .= $CI->profiler->run().$debugger;
	        }
			echo $output;	
		}
	}
}
?>