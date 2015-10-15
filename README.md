# popup_static_block

#Note :
When create Package Extension, have one problem:
After install in other magento website will not show grid Popup Management.
  Have 2 ways to resolve:
  1. Remember add file app/design/adminhtml/default/default/layout/popup/popup_static.xml
  2. If don't add file above, in file app/code/local/Popup/Static/controllers/Adminhtml/BlockController.php
  Change $brandBlock = $this->getLayout()->createBlock('popup_static_adminhtml/block');
  to $brandBlock = $this->getLayout()->createBlock('popup_static/adminhtml_block');
