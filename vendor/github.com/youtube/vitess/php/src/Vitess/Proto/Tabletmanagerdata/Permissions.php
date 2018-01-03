<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: tabletmanagerdata.proto

namespace Vitess\Proto\Tabletmanagerdata {

  class Permissions extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Tabletmanagerdata\UserPermission[]  */
    public $user_permissions = array();
    
    /**  @var \Vitess\Proto\Tabletmanagerdata\DbPermission[]  */
    public $db_permissions = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'tabletmanagerdata.Permissions');

      // REPEATED MESSAGE user_permissions = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "user_permissions";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\Vitess\Proto\Tabletmanagerdata\UserPermission';
      $descriptor->addField($f);

      // REPEATED MESSAGE db_permissions = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "db_permissions";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\Vitess\Proto\Tabletmanagerdata\DbPermission';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <user_permissions> has a value
     *
     * @return boolean
     */
    public function hasUserPermissions(){
      return $this->_has(1);
    }
    
    /**
     * Clear <user_permissions> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\Permissions
     */
    public function clearUserPermissions(){
      return $this->_clear(1);
    }
    
    /**
     * Get <user_permissions> value
     *
     * @param int $idx
     * @return \Vitess\Proto\Tabletmanagerdata\UserPermission
     */
    public function getUserPermissions($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <user_permissions> value
     *
     * @param \Vitess\Proto\Tabletmanagerdata\UserPermission $value
     * @return \Vitess\Proto\Tabletmanagerdata\Permissions
     */
    public function setUserPermissions(\Vitess\Proto\Tabletmanagerdata\UserPermission $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <user_permissions>
     *
     * @return \Vitess\Proto\Tabletmanagerdata\UserPermission[]
     */
    public function getUserPermissionsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <user_permissions>
     *
     * @param \Vitess\Proto\Tabletmanagerdata\UserPermission $value
     * @return \Vitess\Proto\Tabletmanagerdata\Permissions
     */
    public function addUserPermissions(\Vitess\Proto\Tabletmanagerdata\UserPermission $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <db_permissions> has a value
     *
     * @return boolean
     */
    public function hasDbPermissions(){
      return $this->_has(2);
    }
    
    /**
     * Clear <db_permissions> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\Permissions
     */
    public function clearDbPermissions(){
      return $this->_clear(2);
    }
    
    /**
     * Get <db_permissions> value
     *
     * @param int $idx
     * @return \Vitess\Proto\Tabletmanagerdata\DbPermission
     */
    public function getDbPermissions($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <db_permissions> value
     *
     * @param \Vitess\Proto\Tabletmanagerdata\DbPermission $value
     * @return \Vitess\Proto\Tabletmanagerdata\Permissions
     */
    public function setDbPermissions(\Vitess\Proto\Tabletmanagerdata\DbPermission $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <db_permissions>
     *
     * @return \Vitess\Proto\Tabletmanagerdata\DbPermission[]
     */
    public function getDbPermissionsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <db_permissions>
     *
     * @param \Vitess\Proto\Tabletmanagerdata\DbPermission $value
     * @return \Vitess\Proto\Tabletmanagerdata\Permissions
     */
    public function addDbPermissions(\Vitess\Proto\Tabletmanagerdata\DbPermission $value){
     return $this->_add(2, $value);
    }
  }
}

