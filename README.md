# Video Publisher Library

This library allows you to publish videos to multiple video sharing websites. 

Currently Under Development. 
Support for Youtube and Vimeo currently in development.

## Example Usage
```php
<?php 

require 'vendor/autoload.php';

// Setup a Video for Publishing
$video = new VideoPublisher\Video;
$video->setPath('/path/to/video.mp4');
$video->setTitle('Test Video Title');
$video->setDescription('Test Video Description');
$video->setThumnail('/path/to/thumbnail.jpg');
$video->setTags([
	'Video Tag 1',
    'Video Tag 2',
]);

// Setup the Google Account for Publishing Videos
$google_account = new VideoPublisher\Account;
$google_account->setClientId('TEST'); // Set Client ID
$google_account->setClientSecret('TEST');  // Set Client Secret Key

// Post Video to the Provided Publisher Account
VideoPublisher\Publish::setPublisher($google_account)->publish($video);

```
