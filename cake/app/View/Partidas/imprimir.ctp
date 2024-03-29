<div class="partidas index">
    <h2><?php echo __('Partidas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('catalogo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('enero_monto'); ?></th>
            <th><?php echo $this->Paginator->sort('febrero_monto'); ?></th>
			<th><?php echo $this->Paginator->sort('marzo_monto'); ?></th>
			<th><?php echo $this->Paginator->sort('mayo_monto'); ?></th>
			<th><?php echo $this->Paginator->sort('junio_monto'); ?></th>
			<th><?php echo $this->Paginator->sort('julio_monto'); ?></th>
			<th><?php echo $this->Paginator->sort('agosto_monto'); ?></th>
			<th><?php echo $this->Paginator->sort('septiembre_monto'); ?></th>
			<th><?php echo $this->Paginator->sort('octubre_monto'); ?></th>
			<th><?php echo $this->Paginator->sort('noviembre_monto'); ?></th>
			<th><?php echo $this->Paginator->sort('diciembre_monto'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($partidas as $partida): ?>
	<tr>
		<td><?php echo h($partida['Partida']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($partida['Catalogo']['catalogo'], array('controller' => 'catalogos', 'action' => 'view', $partida['Catalogo']['id'])); ?>
		</td>
		<td><?php echo h($partida['Partida']['enero_monto']); ?>&nbsp;</td>
        <td><?php echo h($partida['Partida']['febrero_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['marzo_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['abril_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['mayo_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['junio_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['julio_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['agosto_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['septiembre_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['octubre_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['noviembre_monto']); ?>&nbsp;</td>
		<td><?php echo h($partida['Partida']['diciembre_monto']); ?>&nbsp;</td>
<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $partida['Partida']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $partida['Partida']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $partida['Partida']['id']), null, __('Seguro que deseas borrar # %s?', $partida['Partida']['id'])); ?>
            </td>
	</tr>
<?php endforeach; ?>
 	</table>
   	<p>
    
  <table cellpadding="0" cellspacing="0">	
	<th>
    <?php
// *************************************************************Calcular Totales**********************************

    $conexion = mysql_connect("127.0.0.1", "root", "");
    mysql_select_db("windows", $conexion);

	//Enero
	
	$totalEne=0;
	$res=mysql_query("select enero_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalEne+=$row['enero_monto'];
	
	$res=mysql_query("select enero_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalEne+=$row['enero_federal'];
	
	$res=mysql_query("select enero_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalEne+=$row['enero_estatal'];
	
	$res=mysql_query("select enero_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalEne+=$row['enero_propio'];
	
	echo "<b> Enero Total = $totalEne</b><br>"; //muestra la suma total de enero
	
	//Febrero
	
	$res=0;
	$totalFeb=0;
	$res=mysql_query("select febrero_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalFeb+=$row['febrero_monto'];
	
	$res=mysql_query("select febrero_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalFeb+=$row['febrero_federal'];
	
	$res=mysql_query("select febrero_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalFeb+=$row['febrero_estatal'];
	
	$res=mysql_query("select febrero_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalFeb+=$row['febrero_propio'];
	
	echo "<b> Febrero Total = $totalFeb</b><br>"; //muestra la suma total de febrero
	
	//Marzo

	$totalMar=0;
	$res=mysql_query("select marzo_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMar+=$row['marzo_monto'];
	
	$res=mysql_query("select marzo_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMar+=$row['marzo_federal'];
	
	$res=mysql_query("select marzo_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMar+=$row['marzo_estatal'];
	
	$res=mysql_query("select marzo_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMar+=$row['marzo_propio'];
	
	echo "<b> Marzo Total = $totalMar</b></br>"; //muestra la suma total de marzo

	//Abril

	$res=0;
	$totalAbr=0;
	$res=mysql_query("select abril_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAbr+=$row['abril_monto'];
	
	$res=mysql_query("select abril_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAbr+=$row['abril_federal'];
	
	$res=mysql_query("select abril_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAbr+=$row['abril_estatal'];
	
	$res=mysql_query("select abril_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAbr+=$row['abril_propio'];
	
	echo "<b> Abril Total = $totalAbr</b></br>"; //muestra la suma total de Abril

	//Mayo

	$totalMay=0;
	$res=mysql_query("select mayo_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMay+=$row['mayo_monto'];
	
	$res=mysql_query("select mayo_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMay+=$row['mayo_federal'];
	
	$res=mysql_query("select mayo_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMay+=$row['mayo_estatal'];
	
	$res=mysql_query("select mayo_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalMay+=$row['mayo_propio'];
	
	echo "<b> Mayo Total = $totalMay</b></br>"; //muestra la suma total de Mayo

	//Junio

	$totalJun=0;
	$res=mysql_query("select junio_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJun+=$row['junio_monto'];
	
	$res=mysql_query("select junio_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJun+=$row['junio_federal'];
	
	$res=mysql_query("select junio_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJun+=$row['junio_estatal'];
	
	$res=mysql_query("select junio_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJun+=$row['junio_propio'];
	
	echo "<b> Junio Total = $totalJun</b></br>"; //muestra la suma total de Junio

	//Julio

	$totalJul=0;
	$res=mysql_query("select julio_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJul+=$row['julio_monto'];
	
	$res=mysql_query("select julio_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJul+=$row['julio_federal'];
	
	$res=mysql_query("select julio_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJul+=$row['julio_estatal'];
	
	$res=mysql_query("select julio_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalJul+=$row['julio_propio'];
	
	echo "<b> Julio Total = $totalJul</b></br>"; //muestra la suma total de Julio

	//Agosto

	$totalAgo=0;
	$res=mysql_query("select agosto_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAgo+=$row['agosto_monto'];
	
	$res=mysql_query("select agosto_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAgo+=$row['agosto_federal'];
	
	$res=mysql_query("select agosto_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAgo+=$row['agosto_estatal'];
	
	$res=mysql_query("select agosto_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalAgo+=$row['agosto_propio'];
	
	echo "<b> Agosto Total = $totalAgo</b></br>"; //muestra la suma total de Agosto

	//Septiembre

	$totalSep=0;
	$res=mysql_query("select septiembre_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalSep+=$row['septiembre_monto'];
	
	$res=mysql_query("select septiembre_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalSep+=$row['septiembre_federal'];
	
	$res=mysql_query("select septiembre_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalSep+=$row['septiembre_estatal'];
	
	$res=mysql_query("select septiembre_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalSep+=$row['septiembre_propio'];
	
	echo "<b> Septiembre Total = $totalSep</b></br>"; //muestra la suma total de Septiembre

	//Octubre

	$totalOct=0;
	$res=mysql_query("select octubre_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalOct+=$row['octubre_monto'];
	
	$res=mysql_query("select octubre_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalOct+=$row['octubre_federal'];
	
	$res=mysql_query("select octubre_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalOct+=$row['octubre_estatal'];
	
	$res=mysql_query("select octubre_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalOct+=$row['octubre_propio'];
	
	echo "<b> Octubre Total = $totalOct</b></br>"; //muestra la suma total de Octubre

	//Noviembre

	$totalNov=0;
	$res=mysql_query("select noviembre_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalNov+=$row['noviembre_monto'];
	
	$res=mysql_query("select noviembre_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalNov+=$row['noviembre_federal'];
	
	$res=mysql_query("select noviembre_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalNov+=$row['noviembre_estatal'];
	
	$res=mysql_query("select noviembre_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalNov+=$row['noviembre_propio'];
	
	echo "<b> Noviembre Total = $totalNov</b></br>"; //muestra la suma total de Noviembre

	//Diciembre

	$totalDic=0;
	$res=mysql_query("select diciembre_monto from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalDic+=$row['diciembre_monto'];
	
	$res=mysql_query("select diciembre_federal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalDic+=$row['diciembre_federal'];
	
	$res=mysql_query("select diciembre_estatal from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalDic+=$row['diciembre_estatal'];
	
	$res=mysql_query("select diciembre_propio from partidas");
	while($row=mysql_fetch_assoc($res))
	$totalDic+=$row['diciembre_propio'];
	
	echo "<b> Diciembre Total = $totalDic</b></br>"; //muestra la suma total de Diciembre

?>
    </th>
   </table>
	
	
	
	
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} resultados de {:count} totales, empezando en {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
    		<input type="button" name="IMPRIMIR" value="Imprimir" onclick="window.print();">
  	</ul>
</div>
