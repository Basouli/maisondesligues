<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNtqsyHN\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNtqsyHN/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNtqsyHN.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNtqsyHN\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNtqsyHN\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NtqsyHN',
    'container.build_id' => '46ec0a53',
    'container.build_time' => 1651597652,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNtqsyHN');
