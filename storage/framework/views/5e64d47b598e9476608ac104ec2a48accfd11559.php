<html>
<head>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <title>Pagina de Clientes</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<style>
		body { padding: 20px; }
	</style>
</head>
<body>

  <main role="main">
    <div class="row">
      <div class="container  col-sm-8 offset-md-2">


        <div class="card border" align="center">
          <div class="card-header">
            <h5 class="card-title">Cadastro de Cliente</h5> 
          </div>
          <div class="card-body">
          
            <table class="table table-bordered table-hover" id="tabelaprodutos" >
              <thead>
                <tr> <th>Código</th> <th>Nome</th> <th>Idade</th> <th>Email</th> </tr>
              </thead>
              <tbody>

                <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr> 
                    <td><?php echo e($c->id); ?></td> 
                    <td><?php echo e($c->nome); ?></td> 
                    <td><?php echo e($c->idade); ?></td> 
                    <td><?php echo e($c->email); ?></td> 
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table>
          </div>
          <a href="/novocliente" class="btn btn-primary">Cadastrar Cliente</a>
        </div>
      </div>
    </div>
  </main>

  <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\Projetos\validacao\resources\views/clientes.blade.php ENDPATH**/ ?>