<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH9VS8yY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH9VS8yY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerH9VS8yY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerH9VS8yY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerH9VS8yY\App_KernelDevDebugContainer([
    'container.build_hash' => 'H9VS8yY',
    'container.build_id' => '503b859a',
    'container.build_time' => 1726692560,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerH9VS8yY');
