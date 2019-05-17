


    <div class="middle2">
   

        <fieldset>

        <h3><b>Registro de Agente LEAN</h3>
        
      <?php echo form_open('SignUpDPC'); ?>  
                    
                    <?php if (isset($message)) { ?>
                    <CENTER><h3 style="color:green;">Query Recieved!</h3></CENTER><br>
                    <?php } ?>

                    <?php echo form_label('Correo :'); ?> <?php echo form_error('email'); ?><br />
                    <?php echo form_input(array('id' => 'email', 'name' => 'email')); ?><br />

                    <?php echo form_label('Contrasena :'); ?> <?php echo form_error('psd'); ?><br />
                    <?php echo form_input(array('id' => 'psd', 'name' => 'psd')); ?><br />

                    <?php echo form_label('Nombre :'); ?> <?php echo form_error('fname'); ?><br />
                    <?php echo form_input(array('id' => 'fname', 'name' => 'fname')); ?><br />


                    <?php echo form_label('Apellido :'); ?> <?php echo form_error('lname'); ?><br />
                    <?php echo form_input(array('id' => 'lname', 'name' => 'lname')); ?><br />


                    <?php echo form_label('Direccion :'); ?> <?php echo form_error('comment'); ?><br />
                    <?php echo form_input(array('id' => 'comment', 'name' => 'comment')); ?><br />


                    <?php echo form_label('Ciudad :'); ?> <?php echo form_error('city'); ?><br />
                    <?php echo form_input(array('id' => 'city', 'name' => 'city')); ?><br />

                    <?php echo form_label('Estado :'); ?> <?php echo form_error('state'); ?><br />
                    <?php echo form_input(array('id' => 'state', 'name' => 'state')); ?><br />

                    <?php echo form_label('Codige Postal :'); ?> <?php echo form_error('zip'); ?><br />
                    <?php echo form_input(array('id' => 'zip', 'name' => 'zip')); ?><br />

                    <?php echo form_submit(array('id' => 'submit', 'value' => 'Registrate')); ?>
                    <?php echo form_close(); ?><br/>
                    
                    <?php echo form_reset(array('id' => 'reset', 'value' => 'Cerrar')); ?>
                    <?php echo form_close(); ?><br/>

        </fieldset>
  </div>  
    