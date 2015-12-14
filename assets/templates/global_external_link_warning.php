<?php

// -------------------------------------
// EXTERNAL LINK WARNING

echo 	'<div id="externalWarning">
			<p id="header">'
	 			. $externalWarningHeader . 
			'</p>
			<p>'
	 			. $externalWarningSubHead .
 			'</p>
			<p><a href="javascript:openExternal()" class="link">' . $externalWarningProceed . '</a> &nbsp; or &nbsp; <a href="javascript:closeExternalWarning()" class="link">' . $externalWarningBack . '</a></p>
		</div>';

?>