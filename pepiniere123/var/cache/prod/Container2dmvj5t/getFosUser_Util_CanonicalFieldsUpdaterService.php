<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.util.canonical_fields_updater' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Util\\CanonicalFieldsUpdater.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Util\\CanonicalizerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Util\\Canonicalizer.php';

$a = ${($_ = isset($this->services['fos_user.util.email_canonicalizer']) ? $this->services['fos_user.util.email_canonicalizer'] : ($this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer())) && false ?: '_'};

return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
