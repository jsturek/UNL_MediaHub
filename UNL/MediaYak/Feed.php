<?php
class UNL_MediaYak_Feed extends UNL_MediaYak_Models_BaseFeed
{
    protected $namespaces = array();
    
    /**
     * Get by ID
     *
     * @param int $id The id of the feed to get
     *
     * @return UNL_MediaYak_Feed
     */
    
    /**
     * Get a feed by PK.
     *
     * @param int $id ID of the feed.
     *
     * @return UNL_MediaYak_Feed
     */
    static function getById($id)
    {
        return Doctrine::getTable('UNL_MediaYak_Feed')->find($id);
    }
    
    /**
     * get a feed by the title
     *
     * @param string $title Title of the feed/channel
     *
     * @return UNL_MediaYak_Feed
     */
    static function getByTitle($title)
    {
        return Doctrine::getTable('UNL_MediaYak_Feed')->findOneByTitle($title);
    }
    
    /**
     * Add Media to the feed
     *
     * @param UNL_MediaYak_Media          $media    The media to add
     * @param UNL_MediaYak_Media_MetaData $metadata unused
     *
     * @return unknown
     */
    function addMedia(UNL_MediaYak_Media $media, UNL_MediaYak_Media_MetaData $metadata = null)
    {
        $this->UNL_MediaYak_Media[] = $media;
        return $this->save();
    }
    
    /**
     * Add a feed to the system
     *
     * @param array             $data Associative array of details.
     * @param UNL_MediaYak_User $user User creating this feed
     *
     * @return UNL_MediaYak_Feed
     */
    public static function addFeed($data, UNL_MediaYak_User $user)
    {
        $data = array_merge($data, array('datecreated' => date('Y-m-d H:i:s'),
                                         'uidcreated'  => $user->uid));
        $feed = new self();
        $feed->fromArray($data);
        $feed->save();
        $feed->addUser($user);
        return $feed;
    }
    
    /**
     * Add a user with all permissions to this feed.
     *
     * @param UNL_MedaiYak_User $user The user to grant permission to
     */
    
    /**
     * Add all permissions for a user to this feed.
     *
     * @param UNL_MediaYak_User $user
     */
    function addUser(UNL_MediaYak_User $user)
    {
        $permissions = new ReflectionClass('UNL_MediaYak_Permission');
        foreach($permissions->getConstants() as $key=>$permission) {
            if (substr($key, 0, 9) == 'USER_CAN_') {
                $this->grantUserPermission($user, UNL_MediaYak_Permission::getByID($permission));
            }
        }
    }
    
    /**
     * Check if the user has a given permission for this feed.
     *
     * @param UNL_MediaYak_User       $user       User to check
     * @param UNL_MediaYak_Permission $permission Permission
     *
     * @return bool
     */
    
    /**
     * check if user has a given permission for this feed
     *
     * @param UNL_MediaYak_User $user
     * @param UNL_MediaYak_Permission $permission
     *
     * @return bool
     */
    function userHasPermission(UNL_MediaYak_User $user, UNL_MediaYak_Permission $permission)
    {
        return UNL_MediaYak_Permission::userHasPermission($user, $permission, $this);
    }
    
    /**
     * Grant a user permission over the feed.
     *
     * @param UNL_MediaYak_User       $user       User to grant permission for
     * @param UNL_MediaYak_Permission $permission Permission to grant
     *
     *
     */
    
    /**
     * Grant permission for a user.
     *
     * @param UNL_MediaYak_User $user
     * @param UNL_MediaYak_Permission $permission
     *
     * @return bool
     */
    function grantUserPermission(UNL_MediaYak_User $user, UNL_MediaYak_Permission $permission)
    {
        return UNL_MediaYak_Permission::grantUserPermission($user, $permission, $this);
    }
    
    function addNamespace(UNL_MediaYak_Feed_NamespacedAttributes $namespace)
    {
        
    }
    
    /**
     * Check if this feed is linked to the related media.
     *
     * @param UNL_MediaYak_Media $media The media file we're checking
     *
     * @return bool
     */
    public function hasMedia(UNL_MediaYak_Media $media)
    {
        $query = new Doctrine_Query();
        $query->from('UNL_MediaYak_Feed_Media')
              ->where('feed_id = ? AND media_id = ?', array($this->id, $media->id));
        return $query->count();
    }
}
?>