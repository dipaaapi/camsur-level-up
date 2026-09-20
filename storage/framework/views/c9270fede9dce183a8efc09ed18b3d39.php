<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title><?php echo e($title ?? View::yieldContent('title', config('app.name', 'Camarines Sur Official Portal'))); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-50 font-sans antialiased min-h-screen flex flex-col justify-between">

    
    <?php if (isset($component)) { $__componentOriginal0f9a1b477159a1cb58a91ae03b0cf45f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f9a1b477159a1cb58a91ae03b0cf45f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.guest.panels.page-skeleton','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest.panels.page-skeleton'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f9a1b477159a1cb58a91ae03b0cf45f)): ?>
<?php $attributes = $__attributesOriginal0f9a1b477159a1cb58a91ae03b0cf45f; ?>
<?php unset($__attributesOriginal0f9a1b477159a1cb58a91ae03b0cf45f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f9a1b477159a1cb58a91ae03b0cf45f)): ?>
<?php $component = $__componentOriginal0f9a1b477159a1cb58a91ae03b0cf45f; ?>
<?php unset($__componentOriginal0f9a1b477159a1cb58a91ae03b0cf45f); ?>
<?php endif; ?>

    
    <div id="global-page-wrapper" class="opacity-0 transition-opacity duration-700 ease-out flex-grow flex flex-col justify-between">

        
        <?php if (isset($component)) { $__componentOriginal526f6500cff6ee7414d19d7734827511 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal526f6500cff6ee7414d19d7734827511 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.guest.panels.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest.panels.nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal526f6500cff6ee7414d19d7734827511)): ?>
<?php $attributes = $__attributesOriginal526f6500cff6ee7414d19d7734827511; ?>
<?php unset($__attributesOriginal526f6500cff6ee7414d19d7734827511); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal526f6500cff6ee7414d19d7734827511)): ?>
<?php $component = $__componentOriginal526f6500cff6ee7414d19d7734827511; ?>
<?php unset($__componentOriginal526f6500cff6ee7414d19d7734827511); ?>
<?php endif; ?>

        
        <main class="flex-grow">
            <?php echo e($slot ?? $content ?? ''); ?>

            <?php echo $__env->yieldContent('content'); ?>
        </main>

        
        <footer class="mt-auto">
            
            <?php if (isset($component)) { $__componentOriginal5291e483d7b9ff8a83fc29e2ca990d4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5291e483d7b9ff8a83fc29e2ca990d4a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.guest.panels.footer.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest.panels.footer.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5291e483d7b9ff8a83fc29e2ca990d4a)): ?>
<?php $attributes = $__attributesOriginal5291e483d7b9ff8a83fc29e2ca990d4a; ?>
<?php unset($__attributesOriginal5291e483d7b9ff8a83fc29e2ca990d4a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5291e483d7b9ff8a83fc29e2ca990d4a)): ?>
<?php $component = $__componentOriginal5291e483d7b9ff8a83fc29e2ca990d4a; ?>
<?php unset($__componentOriginal5291e483d7b9ff8a83fc29e2ca990d4a); ?>
<?php endif; ?>

            
            <?php if (isset($component)) { $__componentOriginal8df3e1a6c3f10f761d6827a50515709f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8df3e1a6c3f10f761d6827a50515709f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.guest.panels.footer.govph','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest.panels.footer.govph'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8df3e1a6c3f10f761d6827a50515709f)): ?>
<?php $attributes = $__attributesOriginal8df3e1a6c3f10f761d6827a50515709f; ?>
<?php unset($__attributesOriginal8df3e1a6c3f10f761d6827a50515709f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8df3e1a6c3f10f761d6827a50515709f)): ?>
<?php $component = $__componentOriginal8df3e1a6c3f10f761d6827a50515709f; ?>
<?php unset($__componentOriginal8df3e1a6c3f10f761d6827a50515709f); ?>
<?php endif; ?>

            
            <?php if (isset($component)) { $__componentOriginal6cabe2406c56dc0394e88a37d2177db9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cabe2406c56dc0394e88a37d2177db9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.guest.panels.footer.copyright','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest.panels.footer.copyright'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cabe2406c56dc0394e88a37d2177db9)): ?>
<?php $attributes = $__attributesOriginal6cabe2406c56dc0394e88a37d2177db9; ?>
<?php unset($__attributesOriginal6cabe2406c56dc0394e88a37d2177db9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cabe2406c56dc0394e88a37d2177db9)): ?>
<?php $component = $__componentOriginal6cabe2406c56dc0394e88a37d2177db9; ?>
<?php unset($__componentOriginal6cabe2406c56dc0394e88a37d2177db9); ?>
<?php endif; ?>
        </footer>

        
        <?php if (isset($component)) { $__componentOriginal3220ce8b8b9aaddd67d498c5276f5592 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3220ce8b8b9aaddd67d498c5276f5592 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.guest.panels.accessibility-toolbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest.panels.accessibility-toolbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3220ce8b8b9aaddd67d498c5276f5592)): ?>
<?php $attributes = $__attributesOriginal3220ce8b8b9aaddd67d498c5276f5592; ?>
<?php unset($__attributesOriginal3220ce8b8b9aaddd67d498c5276f5592); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3220ce8b8b9aaddd67d498c5276f5592)): ?>
<?php $component = $__componentOriginal3220ce8b8b9aaddd67d498c5276f5592; ?>
<?php unset($__componentOriginal3220ce8b8b9aaddd67d498c5276f5592); ?>
<?php endif; ?>

        
        <?php if (isset($component)) { $__componentOriginalb3ba8daa3b9363af3463bc219a1dec7b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb3ba8daa3b9363af3463bc219a1dec7b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.guest.panels.search-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest.panels.search-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb3ba8daa3b9363af3463bc219a1dec7b)): ?>
<?php $attributes = $__attributesOriginalb3ba8daa3b9363af3463bc219a1dec7b; ?>
<?php unset($__attributesOriginalb3ba8daa3b9363af3463bc219a1dec7b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb3ba8daa3b9363af3463bc219a1dec7b)): ?>
<?php $component = $__componentOriginalb3ba8daa3b9363af3463bc219a1dec7b; ?>
<?php unset($__componentOriginalb3ba8daa3b9363af3463bc219a1dec7b); ?>
<?php endif; ?>
    </div>

</body>
</html><?php /**PATH /var/www/resources/views/layouts/guest.blade.php ENDPATH**/ ?>