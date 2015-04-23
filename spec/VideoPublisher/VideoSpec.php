<?php

namespace spec\VideoPublisher;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class VideoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('VideoPublisher\Video');
    }

    function it_allows_you_to_set_the_video_path()
    {
        $this->setPath('PATH TO VIDEO');
        $this->getPath()->shouldReturn('PATH TO VIDEO');
    }

    function it_allows_you_to_set_the_video_title()
    {
        $this->setTitle('TITLE');
        $this->getTitle()->shouldReturn('TITLE');
    }

    function it_allows_you_to_set_the_video_description()
    {
        $this->setDescription('DESCRIPTION');
        $this->getDescription()->shouldReturn('DESCRIPTION');
    }

    function it_allows_you_to_set_the_video_thumbnail()
    {
        $this->setThumbnail('PATH TO THUMBNAIL');
        $this->getThumbnail()->shouldReturn('PATH TO THUMBNAIL');
    }

    function it_allows_you_to_set_the_video_tags()
    {
        $this->setTags(['TAG 1', 'TAG 2']);
        $this->getTags()->shouldReturn(['TAG 1', 'TAG 2']);
    }
}
