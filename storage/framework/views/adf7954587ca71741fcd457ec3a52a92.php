    <?php $__env->startSection('menu'); ?>
            <!-- Division pour le sommaire -->
        <div id="menuGauche">
            <div id="infosUtil">
                  
             </div>  
               <ul id="menuList">
                   <li >
             
                   <strong>Bonjour <?php echo e($comptable['nom'] ." ".$comptable['prenom']); ?></strong>
                   <br> <br>
                   <strong>Role  : Comptable
                      
                  </strong>

                   </li>
                  <li class="smenu">
                     <a href="<?php echo e(route('cheminVisiteur')); ?>" title="Suivie fiche Frais">Suivie fiche Frais</a>
                  </li>

                </li>
                <li class="smenu">
                   <a href="<?php echo e(route('cheminEdition')); ?>" title="Edtion Fiche Frais">Edition de fiche Frais</a>
                </li>
                
               <li class="smenu">
                <a href="<?php echo e(route('chemin_deconnexion')); ?>" title="Se déconnecter">Déconnexion</a>
                  </li>
                </ul>
               
        </div>
    <?php $__env->stopSection(); ?>          
<?php echo $__env->make('modeles/visiteur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon+\www\Mission-2_AP-main\resources\views/sommaire_comptable.blade.php ENDPATH**/ ?>