<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDxsaH1Z\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDxsaH1Z/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDxsaH1Z.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDxsaH1Z\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDxsaH1Z\App_KernelDevDebugContainer([
    'container.build_hash' => 'DxsaH1Z',
    'container.build_id' => '38f516bd',
    'container.build_time' => 1661974357,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDxsaH1Z');