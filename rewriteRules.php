<?php

// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
return [
    'src/MyPackageService.php' => 'src/:uc:packageService.php',
    'config/mypackage.php' => 'config/:lc:package.php',
    'src/Facades/MyPackageService.php' => 'src/Facades/:uc:packageService.php',
    'src/MyPackageServiceProvider.php' => 'src/:uc:packageServiceProvider.php',
];
