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
    }

    public function it_allows_you_to_upload_a_video(Video $video)
    {
        $this->upload($video);
    }
}
