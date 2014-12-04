<?php
/* display message saved in session if any */
echo $this->Session->flash();
?>
<p>
<!--    check if user is logged, show user name and logout link or login link -->
    <?php if ($this->Session->read('Auth.Usuario')){ ?>
        You are logged in as <?php echo $this->Session->read('Auth.Usuario.usuario'); ?>. <?php echo $this->Html->link('logout', array('controller' => 'sea', 'action' => 'logout')); ?>
    <?php }else{ ?>
        <?php echo $this->Html->link('login', array('controller' => 'sea', 'action' => 'logueo')); ?>
    <?php } ?>
</p>