<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
//$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('cake.generic', 'jquery-ui-1.8.16.custom'));
                echo $this->Html->script(array('jquery-2.1.1', 'jquery.cycle','jquery-ui-1.8.16.custom.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<script>
    var j$ = jQuery.noConflict();
    /*j$(document).ready(function(){
        j$(".button").button();
    });*/

    j$(function(){
        j$('#menu li a').click(function(event){
            var elem = j$(this).next();
            if(elem.is('ul')){
                event.preventDefault();
                j$('#menu ul:visible').not(elem).slideUp();
                elem.slideToggle();
            }
        });

        j$('#menuIco').click(function(){
            if (j$('#menuPrin').css('display')=='none'){
                j$('#menuPrin').show(1200);
            }else{
                j$('#menuPrin').hide(1200);
            }
        });
    });
</script>
</head>
<body>
	<div id="container">
            <a href="/sea"><div id="header"></div></a>
            
                <div id="content2">
                    <div id="menuPrin"><?php echo $this->element('menu'); ?></div>
                    <?php echo $this->Html->image('menuPrin.png', array('alt' => 'Menu', 'width' => '22', 'id' => 'menuIco')); ?>
                    <div id="content">
                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->fetch('content'); ?>
                    </div>
                </div>
		<div id="footer">
                    
                    <p>&reg; Derechos Reservados @ CopyRight. 2011-2012</p>
                    <p>WEBMASTER: De Freitas J.</p>
                    
                    <?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);*/
			?>
			<p>
				<?php //echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
