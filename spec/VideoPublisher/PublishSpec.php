<?php

namespace spec\VideoPublisher;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use VideoPublisher\Services\PublishableInterface;
use VideoPublisher\Video;

class PublishSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('VideoPublisher\Publish');
    }

    function let(PublishableInterface $service)
    {
        $this->beConstructedWith($service);
    }

    function it_allows_you_to_publish_the_video_to_the_given_service(Video $video)
    {
        $this->publish($video);
    }

    function it_allows_you_to_set_a_publisher_and_publish_a_video(PublishableInterface $service, Video $video)
    {
        $this::setPublisher($service)->publish($video);
    }
}
