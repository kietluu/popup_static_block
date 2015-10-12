<?php
/**
 * Created by PhpStorm.
 * User: kietluu
 * Date: 06/10/2015
 * Time: 11:15
 */

$content = '<div class="highslide-dimming highslide-viewport-size"
	 style="padding: 0px; border: none; margin: 0px; visibility: visible; opacity: 0.75;z-index:999;display:none;"></div>
<div id="esns_background_layer" style="display:none;">
	<div id="aw_popup_window"
		 style="width: 620px; height: 530px; margin-left: -310px; margin-top: -265px; top: 50%; left: 50%; display: block;">
		<div id="aw_popup_header">
			<span id="aw_popup_title"></span>
			<img id="aw_popup_close_btn" onclick="Popup.hideWindow();return false;"
				 src="http://popup.demo.aheadworks.com/skin/frontend/rwd/default/popup/images/close_label.gif">
		</div>
		<div id="aw_popup_content"><p style="text-align: center;"><strong><span class="first-popup-span"
																				style="font-size: large; padding-left: 12px; display: block;">Subscribe to our magazine and get discount on all other products!</span></strong>
			</p>

			<p><img class="first-popup" style="display: block; margin-left: auto; margin-right: auto;"
					title="Pop-up+ Magento Extension"
					src="http://popup.demo.aheadworks.com/media/aw_popup/magazines.jpg"
					alt="Life is a game magazine" width="600" height="400"></p>

			<p>&nbsp;</p>

			<p style="text-align: center;"><strong><span style="font-size: large; padding-left: 12px;">This is Pop-up+ extension demo</span></strong>
			</p>
		</div>
	</div>
</div>
<style>
	#aw_popup_window {
		position: fixed;
		overflow: hidden;
		z-index: 1000;
		background: #ffffff;
		top: 0;
		left: 0;
		border: solid 1px;
		border-radius: 6px;
		padding: 10px;
	}
#aw_popup_close_btn {
		cursor: pointer;
		float: right;
	}
.highslide-dimming {
    background: #fff;
}

.highslide-viewport-size {
    position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
}

</style>
';

$identifier = 'popup';

Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
$data = array(
	'title' => 'Popup',
	'identifier' => $identifier,
	'content' => $content,
	'is_active' => 1,
	'stores' => array(0)
);
$collection = Mage::getModel('cms/block')->getCollection()->addFieldToFilter('identifier', $identifier)->getFirstItem();
if ($collection->getId() == NULL)
	Mage::getModel('cms/block')->setData($data)->save();
