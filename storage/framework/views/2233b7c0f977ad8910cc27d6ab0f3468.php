    <?php $__env->startSection('contenu1'); ?>
      <div id="contenu">
 
      <form  action="<?php echo e(route('cheminRemboursement')); ?>" id = "formulaire" method="POST">
        <?php echo e(csrf_field()); ?> <!-- laravel va ajouter un champ caché avec un token -->
        <h1>Liste des fiches à Valider : </h1>
       
        <?php $__currentLoopData = $lesVisiteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visiteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" id = "card">
          <h5 class="card-header"><?php echo e($visiteur['nom']); ?> - <?php echo e($visiteur['prenom']); ?></h5>
          <div class="card-body">
            
            <h5 class="card-title"> Date : <?php echo e($visiteur['mois']); ?>  </h5>
            <h6 class="card-title"> Etat : <?php echo e($visiteur['etat']); ?>  </h5>
            <p class="card-text"> Montant :  <?php echo e($visiteur['montant']); ?>  € </p>
            <p> <strong> Selectionner : </strong>
            <input type="checkbox"  class="btn btn-primary" name="visiteur_ids[]" value="<?php echo e($visiteur['id']); ?>-<?php echo e($visiteur['mois']); ?>" />
            </p> 
          </div>
          
        </div>  
        
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
          <div class="piedForm">
         

              <button  id="ok" type="submit" value="Valider"  class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                Valider
              </button>
             
              <button  id="annuler" type="reset" type="submit" value="Effacer" class="btn btn-danger" data-toggle="button" aria-pressed="false" autocomplete="off"> Effacer
              </button>
          
           
            </div>
          </form>

    
        <!-- On affiche les récement remboursé une fois qu'on a valider -->
       
       
        <h1>Liste des visiteurs récemment remboursé</h1>
        <table class="table table-striped-columns table-bordered Rembourser">
          <thead class="table-success">
            <tr >
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Prenom </th>
              <th scope="col">Montant</th>
              <th scope="col">Mois</th>
              <th scope="col">Etat</th>
              <th scope="col">Date de Validation </th>
              <th scope="col">Date de remboursement</th>
          
            </tr>
          </thead>
          <?php if(isset($Validations)): ?>
            <tbody  class="table-group-divider ">
              <?php echo e($i = 1); ?>

              <?php $__currentLoopData = $Validations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <tr>
                  <td> <?php echo e($i++); ?> </td>
                  
                
                  <td><?php echo e($valider['nom']); ?> </td>
                  <td> <?php echo e($valider['prenom']); ?></td>
                  <td><?php echo e($valider['montant']); ?></td>
                  <td><?php echo e($valider['mois']); ?></td>
                  <td><?php echo e($valider['etat']); ?></td>
                  <td><?php echo e($valider['date']); ?></td>
                  <td><?php echo e($valider['date']); ?></td>
                 
                  
                </tr> <!-- Assurez-vous que 'id' existe dans la base de données -->
                  
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </tbody>

        </table>

     
<?php endif; ?>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('sommaire_comptable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon+\www\Mission-2_AP-main\resources\views/Suivie_fiche_frais.blade.php ENDPATH**/ ?>