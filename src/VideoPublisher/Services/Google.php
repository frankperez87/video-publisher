<?php

namespace VideoPublisher\Services;

use Google_Client;
use Google_Service_YouTube;
use Google_Service_YouTube_Video;
use Google_Service_YouTube_VideoSnippet;
use Google_Service_YouTube_VideoStatus;
use VideoPublisher\Account;
use VideoPublisher\Video;

class Google implements PublishableInterface
{
    private $client;

    public function __construct(Account $account)
    {
        $this->client = new Google_Client();
        $this->client->setApplicationName('Google YouTube Publisher');
        $this->client->setClientId($account->getClientId());
        $this->client->setClientSecret($account->getClientSecret());
        $this->client->setScopes('https://www.googleapis.com/auth/youtube');
    }

    public function video(Video $video)
    {
        //https://developers.google.com/youtube/v3/code_samples/php#resumable_uploads
        //https://github.com/youtube/api-samples/blob/master/php/resumable_upload.php
//        $youtube = new Google_Service_YouTube($this->client);
//        $token = $this->client->getAccessToken();
//
//        $snippet = new Google_Service_YouTube_VideoSnippet();
//        $snippet->setTitle($video->getTitle());
//        $snippet->setDescription($video->getDescription());
//        $snippet->setTags($video->getTags());
//        $snippet->setCategoryId("22");
//
//        $status = new Google_Service_YouTube_VideoStatus();
//        $status->privacyStatus = "public";
//
//        $video = new Google_Service_YouTube_Video();
//        $video->setSnippet($snippet);
//        $video->setStatus($status);
        return $this;
    }

    public function publish()
    {
        // TODO: Implement publish() method.
        return true;
    }

}
