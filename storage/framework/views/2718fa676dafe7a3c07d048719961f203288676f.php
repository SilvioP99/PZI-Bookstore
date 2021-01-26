

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Administracija korisnika</div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary mb-4 float-right" data-bs-toggle="modal" data-bs-target="#addUsersModal">
                        Dodavanje korisnika
                    </button>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Ime korisnika</th>
                            <th>Prezime korisnika</th>
                            <th>Email korisnika</th>
                            <th>Uloga korisnika</th>
                            <th>Datum i vrijeme registracije</th>
                            <th>Opcije</th>
                        </tr>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->id); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->surname); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->role); ?></td>
                            <td><?php echo e($user->created_at); ?></td>
                            <td>
                                <a href="<?php echo e(route('users.delete', $user->id)); ?>" class="btn btn-danger"><i>Izbriši</i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <div class="modal fade" id="addUsersModal" tabindex="-1" role="dialog" aria-labelledby="addUsersModalLabel" aria-hidden="true">
                        <form id="addUsersForm" method="POST" action="<?php echo e(route('users.add')); ?>">
                        @crsf
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addUsersModalLabel">Dodavanje korisnika</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zatvori">
                                        <span aria-hidden="true">&times</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Ime korisnika</label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" id="name" value="<?php echo e(old('name')); ?>">
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Prezime korisnika</label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="surname" id="surname" value="<?php echo e(old('surname')); ?>">
                                           
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Email korisnika</label>
                                            <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" id="email" value="<?php echo e(old('email')); ?>">
                                           
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Lozinka korisnika</label>
                                            <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" id="password" value="<?php echo e(old('password')); ?>">
                                           
                                        </div>
                                        <div class="mb-3">
                                            <label for="password_confirmation" class="form-label">Ponovite lozinku korisnika</label>
                                            <input type="password" class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="password_confirmation" id="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                                        <button id="addUserBtn" type="button" class="btn btn-primary">Pohrani podatke</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bookstore\resources\views/ui.blade.php ENDPATH**/ ?>