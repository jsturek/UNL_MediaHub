<?php
class UNL_MediaHub_MediaList_Filter_Video implements UNL_MediaHub_Filter
{
    public function apply(Doctrine_Query_Abstract $query)
    {
        $query->andWhere('m.type LIKE "video/%"');
    }

    public function getLabel()
    {
        return 'Audio';
    }

    public function getType()
    {
        return '';
    }

    public function getValue()
    {
        return '';
    }

    public function __toString()
    {
        return '';
    }

    public static function getDescription()
    {
        return 'Find media that is audio';
    }
}
