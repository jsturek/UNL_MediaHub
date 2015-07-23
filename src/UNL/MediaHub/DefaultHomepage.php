<?php
class UNL_MediaHub_DefaultHomepage implements UNL_MediaHub_CacheableInterface
{
    public $top_media;
    
    public $options = array();
    
    function __construct($options = array())
    {
        $this->options = $options + $this->options;
    }

    function preRun($cached)
    {
        
    }

    function getCacheKey()
    {
        return 'homepage-' . $this->options['format'];
    }

    function run()
    {
        
    }
    
    function getTopMedia()
    {
        $options = array(
            'limit'   => 30,
            'orderby' => 'popular_play_count'
        );
        $top_media = new UNL_MediaHub_MediaList($options);
        $top_media->run();
        
        //return $top_media->items;
        $limit = 6;
        $found_channels = array();
        $media_list = array();
        foreach ($top_media->items as $media) {
            if (count($media_list) >= $limit) {
                //Break out of the loop once we have reached 6 videos
                break;
            }

            //Get the media's feeds
            $feeds = $media->getFeeds();
            $feeds->run();
            
            if (0 == count($feeds->items)) {
                //skip media with no feeds
                continue;
            }

            $skip = false;
            foreach ($feeds->items as $feed) {
                if (in_array($feed->id, $found_channels)) {
                    //We already found a video in this feed, skip it.
                    $skip = true;
                }

                $found_channels[] = $feed->id;
            }

            if ($skip) {
                continue;
            }

            $media_list[] = $media;
        }

        return $media_list;
    }
}