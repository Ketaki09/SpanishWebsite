
    <br>
    <div class="con">
              <img src="<?php echo base_url('images/bannercontacto.jpg'); ?>" size width="100%" height="40%" />
    <div class="centered"><a href="pg17.html">Contacto</a></div>
    </div>
    <br>

    <div class="middle2">
        <h3>Informacion del contacto</h3>
        <p class="alpha">
                &#9974;198 West Street Suite 721 &nbsp &nbsp &nbsp &#9990; +1235 2355 98 &nbsp &nbsp &nbsp &#9974; info@diazapps.com 
                &nbsp &nbsp &nbsp  &nbsp&#9974; diazapp.com

        </p>
    </div>

    <div class="middle2">
        <h3>LEAN en las redes sociales </h3>
        <table style="width:100%">
                <tr>
                  <th>  <img src="<?php echo base_url('images/facebook.png'); ?>" size width="42px" height="42px"/></th>
                  <th>  <img src="<?php echo base_url('images/twitter.png'); ?>" size width="42px" height="42px"/></th> 
                  <th><img src="<?php echo base_url('images/instagram.png'); ?>" size width="42px" height="42px"/></th>
                  <th>  <img src="<?php echo base_url('images/correo.png'); ?>" size width="42px" height="42px"/></th>
                </tr>
        </table>
    </div>
    <div class="middle2">
        <?php echo form_open('contactData'); ?>  
                    
                    <?php if (isset($message)) { ?>
                    <CENTER><h3 style="color:green;">Query Recieved!</h3></CENTER><br>
                    <?php } ?>
                    <?php echo form_label('First Name :'); ?> <?php echo form_error('fname'); ?><br />
                    <?php echo form_input(array('id' => 'fname', 'name' => 'fname')); ?><br />

                    <?php echo form_label('Last Name :'); ?> <?php echo form_error('lname'); ?><br />
                    <?php echo form_input(array('id' => 'lname', 'name' => 'lname')); ?><br />

                    <?php echo form_label('Email :'); ?> <?php echo form_error('email'); ?><br />
                    <?php echo form_input(array('id' => 'email', 'name' => 'email')); ?><br />

                    <?php echo form_label('Comments :'); ?> <?php echo form_error('comment'); ?><br />
                    <?php echo form_input(array('id' => 'comment', 'name' => 'comment')); ?><br />

                    <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
                    <?php echo form_close(); ?><br/>
    </div>
