<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZg4CLZp\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZg4CLZp/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZg4CLZp.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZg4CLZp\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZg4CLZp\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Zg4CLZp',
    'container.build_id' => '06ef7060',
    'container.build_time' => 1649081957,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZg4CLZp');
