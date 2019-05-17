
        <br>
       <a href="<?php echo base_url();?>/index.php/AgentAddC">Iniciar Session</a>
<h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Lista de Eventos</h2>
   
<?php foreach($posts as $post){?>
     <tr>
         <td><?php echo $post->Event_id;?></td>
         <td><?php echo $post->Event_name;?></td>
      </tr>     
  <?php }?> 
</div>

</div>
