<?php
/**
 * Collection.php
 */
class MailUp_MailUpSync_Model_Mysql4_Sync_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        $this->_init("mailup/sync");
    }
}