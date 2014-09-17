Fca jargon buster implementation.

index.html, shows an example implemenation

1. Drop this piece of code wherever you want the jargon buster to reside on your web page.

	<!-- Jargon Buster -->
    <!--[if lte IE 8]><script>document.createElement('ng-include');document.createElement('ng-pluralize');document.createElement('ng-view');document.createElement('slownik');document.createElement('guzik');document.createElement('ng:include');document.createElement('ng:pluralize');document.createElement('ng:view');</script><![endif]-->
    <div id="fca-app-wrap"><script src="jargon-buster.js"></script></div>
    <!-- end of Jargon Buster -->


2. Make sure that the jargon-buster.js in the script above points to the right location on your server. 
Here it is as 

	<script src="jargon-buster.js"></script>
But it might be the case that you keep all the third party widgets 
	<script src="cms/content/widgets/jargon-buster/jargon-buster.js"></script>

That's it.



