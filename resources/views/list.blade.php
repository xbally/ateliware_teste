@extends('layout.app')

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">List Framework</h5>

<?php if(count($framework) > 0): ?>
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $framework; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $framework): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($framework->title); ?></td>
                    <td><?php echo e($framework->link_ref); ?></td>
                    <td>
                        <a href="/show/{{$framework->id}}" class="btn btn-primary">Visualizar</a>
                    </td>
                            </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                
                        </tbody>
            </table>
            <?php endif; ?>        
    </div>
    <div class="card-footer">
        <a href="/registre" class="btn btn-sm btn-primary" role="button">New Framework</a>
        
        <a href="/index" class="btn btn-sm btn-danger" role="button">Volta</a>
    </div>
</div>

@endsection