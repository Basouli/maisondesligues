<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFMxTd4l\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFMxTd4l/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFMxTd4l.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFMxTd4l\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerFMxTd4l\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'FMxTd4l',
    'container.build_id' => 'c9c3bc3f',
    'container.build_time' => 1651483942,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFMxTd4l');
