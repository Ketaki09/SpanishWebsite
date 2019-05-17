 <br>
 <div class="middle2">
<a href="<?php echo base_url();?>/index.php/AgentAddC">Lista de events</a>
</div>
<br>
 <div class="middle2">
  <table style="width:100%">
    <tr>
      <th>Detalles del Eventos</th>
      <th>Lugar</th> 
      <th>Fecha</th>
      
    </tr>
    <tr>
   
     <?php foreach($posts as $post){?>
     <tr>
         <td><?php echo $post->Event_id;?></td>
         <td><?php echo $post->Event_name;?></td>
      </tr>     
  <?php }?> 
    </tr>
    
  </table>
</div>