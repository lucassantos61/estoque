<?php $__env->startSection('conteudo'); ?>
<?php if(empty(@produtos)): ?>
	<div class="alert alert-danger">
	Você não tem nenhum produto cadastrado.
	</div>
<?php else: ?>
	<table class ="table table-striped table-bordered table-hover">
		<h1>Listagem de produtos</h1>
		<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr class="<?php echo e($p->quantidade <= 1 ? 'danger':''); ?>">
			<td><?php echo e($p->nome); ?></td>
			<td><?php echo e($p->valor); ?></td>
			<td><?php echo e(isset($p->descricao) ? $p->descricao : 'Não há descrição'); ?></td>
			<td><?php echo e($p->quantidade); ?></td>
			<td>
				<a href="/produtos/mostra/<?php echo e($p->id); ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
<?php endif; ?>
<h4>
	<span class="label label-danger pull-right">
		Um ou menos itens no estoque
	</span>
</h4>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>