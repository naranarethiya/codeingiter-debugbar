# codeingiter-debugbar

Displays a debugbar in the browser with information from codeiniter Profiling class.

Displays profiling details in bootstrap tab.

![Codeigniter Debugbar](https://raw.githubusercontent.com/naranarethiya/codeingiter-debugbar/2de76ec2b7c30ce9246adeaea87510f57becd283/debugbar_sanp.png "Codeigniter Debugbar")

## Installation
	To install debugbar in codeiniter project follow the below steps

	1. Enable Hook.
	..* Open /config/config.php
	..* Search $config['enable_hooks'] and replace with $config['enable_hooks'] = true;
	2. Copy debugger_view.php file into /application/view folder.
	3. Copy hook.debugger.php file into /application/hook folder.
	4. Copy hooks.php file into /application/config folder.
	..* if you already using hook in your application just copy two array variable from hooks.php to /application/config/hook.php

