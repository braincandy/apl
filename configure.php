<?php

$apl_configuration = array(
  APL_LANGUAGE_PHP => array(
    '#base_path' => '\\Apl\\Renders\\PHP',
    'styles' => 'AplPHPCodeStyler',
    'themers' => array(
      'AplPHPBasicThemeDelegate',
    ),
    'renderers' => array(
      'AplPHPBasicRenderDelegate',
    ),
  ),
);

\Apl\Core\AplRegistry::bulkRegister($apl_configuration);