<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVtG3iZl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVtG3iZl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVtG3iZl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVtG3iZl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVtG3iZl\App_KernelDevDebugContainer([
    'container.build_hash' => 'VtG3iZl',
    'container.build_id' => '20aca566',
    'container.build_time' => 1743449531,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVtG3iZl');
