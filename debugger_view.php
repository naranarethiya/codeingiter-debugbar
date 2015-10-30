<?php

	/* Copy this file in view folder of application */

?>

<script>
	window.jQuery || document.write('<script src="//code.jquery.com/jquery-1.11.3.min.js"><\/script>');
</script>
<style type="text/css">
	.bottom-right{position:fixed;bottom:0;right:0;cursor:pointer;background-color:#DD4814;height:35px}.right{right:0}#codeigniter_profiler{display:none;position:fixed;padding:0;bottom:0;right:0;height:270px;overflow:scroll;width:100%;z-index:2000}.degugger_header{width:100%;position:fixed;background-color:#faebd7}.nav-tabs>li>a{text-decoration:none}
</style>

<div class="bottom-right">
	<img src="data:image/png;base64,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" alt="Debugger"/>
</div>

<!--debugger -->
<div id="degugger_header" style="display:none">
	<div class="degugger_header">
		<ul class="nav nav-tabs">

			<li class="active">
				<a href="#database_query" data-toggle="tab">Query</a>
			</li>
			<li >
				<a href="#ci_profiler_post" data-toggle="tab">POST</a>
			</li>
			<li >
				<a href="#ci_profiler_get" data-toggle="tab">GET</a>
			</li>
			<li >
				<a href="#ci_profiler_csession" data-toggle="tab">Session</a>
			</li>
			<li >
				<a href="#ci_profiler_config" data-toggle="tab">Config</a>
			</li>
			<li >
				<a href="#ci_profiler_benchmarks" data-toggle="tab">Benchmarks</a>
			</li>
			<li >
				<a href="#ci_profiler_memory_usage" data-toggle="tab">Memory usage</a>
			</li>
			<li >
				<a href="#ci_profiler_uri_string" data-toggle="tab">URI String</a>
			</li>
			<li >
				<a href="#ci_profiler_controller_info" data-toggle="tab">Controller</a>
			</li>
			<li >
				<a href="#ci_profiler_http_headers" data-toggle="tab">HTTP Header</a>
			</li>
-			<li class="pull-right header" onclick="debugger_status();"><a style="color:red;" href="#" class="text-muted"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAIAAACQKrqGAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAB3RJTUUH2QEYAAUIIoTN8AAAAAd0RVh0QXV0aG9yAKmuzEgAAAAMdEVYdERlc2NyaXB0aW9uABMJISMAAAAKdEVYdENvcHlyaWdodACsD8w6AAAADnRFWHRDcmVhdGlvbiB0aW1lADX3DwkAAAAJdEVYdFNvZnR3YXJlAF1w/zoAAAALdEVYdERpc2NsYWltZXIAt8C0jwAAAAh0RVh0V2FybmluZwDAG+aHAAAAB3RFWHRTb3VyY2UA9f+D6wAAAAh0RVh0Q29tbWVudAD2zJa/AAAABnRFWHRUaXRsZQCo7tInAAABnklEQVQokX1RMU9TYRQ97/ZrQZISI6RgQ0I/JLI8Y8ICNZiHhBonFyZYYUGI/hEGjRSjAzDBzsAgCSEqYkexJtb47CAU+yqN4b3QNP3ufQwNiZrYmzPck3OGc3KsH4efT/belvbe4f+XHB+7Pn7X+vB0JVE60slEC2ux5HnJvsiDWDw9lAJzC1ztaM+9ySkjodRqAD6eVotnfm/HFd0ZB1A883+e13Rn/HbXNQBGQmIxEgQSBG6lMrW+qudm3bLnlj09Nzu1vupWKk2VxaiGEQ4CAP1E+Y1Ne2a6mskASA4P5zc2+4maasOIarAp7O8DIODL4Se/Wk0vLgA4WM4ev3yVssICAKCRSBEzN2v6QP3v4nXAv/yZWRlmiwhAKcSd58+04xwsZwGkFxd6b9nvHz/psgDAMCsjrKJRAL9ZtOPkVl6U19YA5IhGHs1vRyIqQgCMsLU0eu8h1QEUjByJ9BENKALw/ZIOKQKwJW2KRaLtMQB2DPYfQf+hfC5KTzie+9Xu6W4xbL78S9+4qQYyk9/CcOf1bgvr4P2JwczkBV530UhGll3wAAAAAElFTkSuQmCC"/></a></li>
		</ul>
	</div>
</div>

<script>
	var status=0;
	var degugger_header;
	var profiler;
	
	jQuery(document).ready(function() {

		if(!window.jQuery.fn.modal) {
			if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(t){"use strict";var a=t.fn.jquery.split(" ")[0].split(".");if(a[0]<2&&a[1]<9||1==a[0]&&9==a[1]&&a[2]<1)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")}(jQuery),+function(t){"use strict";function a(a){return this.each(function(){var n=t(this),r=n.data("bs.tab");r||n.data("bs.tab",r=new e(this)),"string"==typeof a&&r[a]()})}var e=function(a){this.element=t(a)};e.VERSION="3.3.5",e.TRANSITION_DURATION=150,e.prototype.show=function(){var a=this.element,e=a.closest("ul:not(.dropdown-menu)"),n=a.data("target");if(n||(n=a.attr("href"),n=n&&n.replace(/.*(?=#[^\s]*$)/,"")),!a.parent("li").hasClass("active")){var r=e.find(".active:last a"),i=t.Event("hide.bs.tab",{relatedTarget:a[0]}),s=t.Event("show.bs.tab",{relatedTarget:r[0]});if(r.trigger(i),a.trigger(s),!s.isDefaultPrevented()&&!i.isDefaultPrevented()){var o=t(n);this.activate(a.closest("li"),e),this.activate(o,o.parent(),function(){r.trigger({type:"hidden.bs.tab",relatedTarget:a[0]}),a.trigger({type:"shown.bs.tab",relatedTarget:r[0]})})}}},e.prototype.activate=function(a,n,r){function i(){s.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),a.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded",!0),o?(a[0].offsetWidth,a.addClass("in")):a.removeClass("fade"),a.parent(".dropdown-menu").length&&a.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!0),r&&r()}var s=n.find("> .active"),o=r&&t.support.transition&&(s.length&&s.hasClass("fade")||!!n.find("> .fade").length);s.length&&o?s.one("bsTransitionEnd",i).emulateTransitionEnd(e.TRANSITION_DURATION):i(),s.removeClass("in")};var n=t.fn.tab;t.fn.tab=a,t.fn.tab.Constructor=e,t.fn.tab.noConflict=function(){return t.fn.tab=n,this};var r=function(e){e.preventDefault(),a.call(t(this),"show")};t(document).on("click.bs.tab.data-api",'[data-toggle="tab"]',r).on("click.bs.tab.data-api",'[data-toggle="pill"]',r)}(jQuery);
		}

		if ($('body').css('color') !== 'rgb(51, 51, 51)') {
            $('head').prepend('<style rel="stylesheet">.nav>li,.nav>li>a{position:relative;display:block}.nav-justified>.dropdown .dropdown-menu,.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}[role=button]{cursor:pointer}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav>li>a{padding:10px 15px}.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#777;text-decoration:none;background-color:transparent;cursor:not-allowed}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent;cursor:default}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{text-align:center;margin-bottom:5px;margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0;border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-justified>li,.nav-stacked>li{float:none}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li>a{text-align:center;margin-bottom:5px}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-right-radius:0;border-top-left-radius:0}.clearfix:after,.clearfix:before,.nav:after,.nav:before{content:" ";display:table}.clearfix:after,.nav:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important}.affix{position:fixed}<\/style>');
        }

		degugger_header=$('#degugger_header').html();
		profiler=$('#codeigniter_profiler');
		create_debugger();
		$('.bottom-right').click(function() {
			debugger_status();
		});
	});
	function debugger_status() {
		if(status==0) {
			status=1;
			$('.bottom-right').hide();
			$('#codeigniter_profiler').show();
		}
		else {
			status=0;
			$('.bottom-right').show();
			$('#codeigniter_profiler').hide();
		}
	}
	function create_debugger() {
		var html='<div class="tab-content">'+$('#codeigniter_profiler').html()+'</div>';
		$('#codeigniter_profiler').html(html)
		$('#codeigniter_profiler').prepend(degugger_header);
		$('#codeigniter_profiler').css("padding","0px");
		$('#codeigniter_profiler fieldset').each(function() {
			var id=$(this).attr('id');
			if (typeof id == 'undefined'){
				$(this).attr('id','database_query')
				$(this).addClass('tab-pane active');
			}
			else {
				$(this).addClass('tab-pane');
			}
			$(this).css("margin-top","50px");
			
		});
	}
</script>