<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1dubxi4\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1dubxi4/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1dubxi4.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1dubxi4\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container1dubxi4\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '1dubxi4',
    'container.build_id' => '7cb02feb',
    'container.build_time' => 1609021102,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1dubxi4');
