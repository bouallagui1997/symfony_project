<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_message.deleter' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\message-bundle\\FOS\\MessageBundle\\Deleter\\DeleterInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\message-bundle\\FOS\\MessageBundle\\Deleter\\Deleter.php';

return $this->services['fos_message.deleter'] = new \FOS\MessageBundle\Deleter\Deleter(${($_ = isset($this->services['fos_message.authorizer']) ? $this->services['fos_message.authorizer'] : $this->getFosMessage_AuthorizerService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.participant_provider']) ? $this->services['fos_message.participant_provider'] : $this->getFosMessage_ParticipantProviderService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
