<?php

echo Bootstrap::pageTitle(array('title'=>$L->g('About'), 'icon'=>'info-circle'));

echo '
<table class="table mt-3">
	<tbody>
';

echo '<tr>';
echo '<td>Software edition</td>';
if (defined('BLUDIT_PRO')) {
	echo '<td>Professional edition</td>';
} elseif (defined('BLUDIT_PRO_LICENSE_INVALID')) {
	echo '<td>Standard edition</td>';
} else {
	echo '<td>Standard edition</td>';
}
echo '</tr>';

echo '<tr>';
echo '<td>Software version</td>';
echo '<td>'.BLUDIT_VERSION.'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Release codename</td>';
echo '<td>'.BLUDIT_CODENAME.'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Build number</td>';
echo '<td>'.BLUDIT_BUILD.'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Disk usage</td>';
echo '<td>'.Filesystem::bytesToHumanFileSize(Filesystem::getSize(PATH_ROOT)).'</td>';
echo '</tr>';

echo '<tr>';
echo '<td><a href="'.HTML_PATH_ADMIN_ROOT.'developers'.'">System information</a></td>';
echo '<td></td>';
echo '</tr>';

echo '
	</tbody>
</table>
';
