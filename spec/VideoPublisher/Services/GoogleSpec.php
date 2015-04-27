<?php

namespace spec\VideoPublisher\Services;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use VideoPublisher\Account;
use VideoPublisher\Video;

class GoogleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('VideoPublisher\Services\Google');
    }

    function let(Account $account)
    {
        $this->beConstructedWith($account);
        $this->shouldImplement('VideoPublisher\Services\PublishableInterface');
    }

    public function it_allows_you_to_upload_a_video(Video $video)
    {
        $this->video($video)->shouldReturn($this);
    }

    public function it_allows_you_to_publish_a_video()
    {
        $this->publish()->shouldReturn(true);
    }

    public function it_allows_you_to_upload_a_video_and_publish(Video $video)
    {
        $this->video($video)->publish()->shouldReturn(true);
    }
}
