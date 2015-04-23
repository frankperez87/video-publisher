<?php

namespace spec\VideoPublisher;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AccountSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('VideoPublisher\Account');
    }

    function it_can_set_a_client_id()
    {
        $this->setClientId('TEST');
        $this->getClientId()->shouldReturn('TEST');
    }

    function it_can_set_a_client_secret()
    {
        $this->setClientSecret('TEST');
        $this->getClientSecret()->shouldReturn('TEST');
    }
}
