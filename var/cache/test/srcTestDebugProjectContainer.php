<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOk5bCkC\srcTestDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOk5bCkC/srcTestDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerOk5bCkC.legacy');

    return;
}

if (!\class_exists(srcTestDebugProjectContainer::class, false)) {
    \class_alias(\ContainerOk5bCkC\srcTestDebugProjectContainer::class, srcTestDebugProjectContainer::class, false);
}

return new \ContainerOk5bCkC\srcTestDebugProjectContainer(array(
    'container.build_hash' => 'Ok5bCkC',
    'container.build_id' => '07ef9274',
    'container.build_time' => 1535902427,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerOk5bCkC');