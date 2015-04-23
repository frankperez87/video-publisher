<?php

namespace spec\VideoPublisher;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PublishSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('VideoPublisher\Publish');
    }
}
