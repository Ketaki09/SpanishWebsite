
<br>
  
<br>     
<br>
            <br>

       <div class="con">
      <img src="<?php echo base_url('images/bannerregistro.jpg'); ?>" size width="100%" height="40%" />
    <div class="centered"></div>

            </div>
            <br>
            <br>
    <div class="middle2">
        <?php echo form_open('AgentAdddataC'); ?>  
                    <h3> Registro de Evento</h3>
                    
                   
                    <?php echo form_label('Nombres :'); ?> <?php echo form_error('fname'); ?><br />
                    <?php echo form_input(array('id' => 'fname', 'name' => 'fname')); ?><br />


                    <?php echo form_label('Responsable :'); ?> <?php echo form_error('lname'); ?><br />
                    <?php echo form_input(array('id' => 'lname', 'name' => 'lname')); ?><br />


                    <?php echo form_label('Lugar :'); ?> <?php echo form_error('comment'); ?><br />
                    <?php echo form_input(array('id' => 'comment', 'name' => 'comment')); ?><br />

                    <?php echo form_label('Fecha :'); ?> <?php echo form_error('zip'); ?><br />
                    <?php echo form_input(array('id' => 'zip', 'name' => 'zip')); ?><br />

                    <?php echo form_submit(array('id' => 'submit', 'value' => 'Registrate')); ?>
                    <?php echo form_close(); ?><br/>
         
    </div>


            
 