<?php
   /**
      * @package DImage
      * @subpackage mod_dimage_360
      * @copyright Copyright (C) 2011 - 2018 D'arteweb, All rights reserved.
      * @license GNU General Public License version 2 or later; see LICENSE.txt
   */
defined('_JEXEC') or die('');

$param = $params->get('logoFile');
$position = $params->get('position');
$doc = JFactory::getDocument();
$doc->addScript( JURI::base().'modules/mod_dimage_360/tmpl/js/three.min.js' );
$doc->addScript( JURI::base().'modules/mod_dimage_360/tmpl/js/photo-sphere-viewer.min.js' );
?>
<style>
#dtcontainer{
width: 100%;
height: 600px;
}
</style>
<div id="dtcontainer"></div>
<?php if($param == '')
{
	echo "Images not selected";
}?>
<script>
var div = document.getElementById('dtcontainer');
var PSV = new PhotoSphereViewer({
		panorama: '<?php echo JURI::base().''.$param;?>',
		container: div,
		time_anim: 3000,
		navbar: true,
		<?php
		if(isset($position) && $position != '')
		{
			?>
		default_position:{long: <?php echo $position ?>, lat: Math.PI/2},
		<?php 
		}
		?>
		navbar_style: {
			backgroundColor: 'rgba(58, 67, 77, 0.7)'
		},		
	});
</script>
