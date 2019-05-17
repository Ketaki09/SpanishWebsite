<?php
      if($fetch_data->num_rows()>0)
      {
        foreach ($fetch_data ->result() as $row) 
        {
    ?>
        <tr>
            <td><?php echo $row->id;?></td>
              <td><?php echo $row->id;?></td>
                <td><?php echo $row->id;?></td>

        </tr>
        <?php
        }
      }
  ?>