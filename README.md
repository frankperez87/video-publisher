# Video Publisher Library

This library allows you to publish videos to multiple video sharing websites. 

Currently Under Development. 
Support for Youtube and Vimeo in currently in development.

## Example Usage
```php
<?php 

require 'vendor/autoload.php';

$video = new VideoPublisher\Video;
$video->setPath('/path/to/video.mp4');
$video->setTitle('Test Video Title');
$video->setDescription('Test Video Description');
$video->setThumnail('/path/to/thumbnail.jpg');
$video->setTags([
	'Video Tag 1',
    'Video Tag 2',
]);

$google_account = new VideoPublisher\Account;
$google_account->setClientId('TEST'); // Set Client ID
$google_account->setClientSecret('TEST);  // Set Client Secret Key

$youtube = new VideoPublisher\Services\Google($google_account);
$youtube->upload($video);

```