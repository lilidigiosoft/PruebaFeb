<?php
require_once("layouts/header.php");
?>
<a href="index.php?m=nuevo" class="btn">NUEVO</a>

<table>//LISTADO DE REGISTROS

<tr>
  <td>ID</td>
  <td>NOMBRE</td>
  <td>RFC</td>
  <td>DOMICILIO</td>
</tr>

<tbody>
      <?php
      if(!empty($dato)) 
         foreach($dato as $key => $value)
             foreach($value as $v):?>
             <tr>
                 <td><?php echo $v['id']?></td>
                 <td><?php echo $v['nombre']?></td>
                 <td><?php echo $v['rfc']?></td>
                 <td><?php echo $v['domicilio']?></td>
                 
                     <a class ="btn" href="/index.php?m=editar&id=<?php echo $v['id']?>">EDITAR</a> 
                     <a class ="btn" href="/index.php?m=editar&id=<?php echo $v['id']?>">ELIMITAR</a> 
                     
                     <td>
                     <a href="/index.php?m=editar&id=<?php echo $v['id']?>"></a>
                     </td> 
                 </td>
             </tr>
             <?php endforeach; ?>
      <?php else: ?>
         <tr>
            <td colspan="4">NO HAY REGISTROS</td>
         </tr>
      <?php endif; ?>
     
</tbody>

</table>

<?php
require_once("layouts/footer.php");


