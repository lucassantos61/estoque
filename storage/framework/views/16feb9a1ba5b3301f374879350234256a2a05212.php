<?php $__env->startSection('conteudo'); ?>
	<table class ="table table-striped table-bordered table-hover">
		<h1>Detalhes do  produto <?php echo e($detalhes->nome); ?></h1>
		<ul>
			<li>
				<b>Valor: </b><?php echo e($detalhes->valor); ?>

			</li>
			<li>
				<b>Descrição: </b><?php echo e(isset($detalhes->descricao) ? $detalhes->descricao : 'Não há descrição'); ?>

			</li>
			<li>
				<b>Qauntidade: </b><?php echo e($detalhes->quantidade); ?>

			</li>
		</ul>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>