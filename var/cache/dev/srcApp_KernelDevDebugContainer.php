<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRXOAZAP\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRXOAZAP/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRXOAZAP.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRXOAZAP\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRXOAZAP\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'RXOAZAP',
    'container.build_id' => 'a988daaf',
    'container.build_time' => 1651484168,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRXOAZAP');