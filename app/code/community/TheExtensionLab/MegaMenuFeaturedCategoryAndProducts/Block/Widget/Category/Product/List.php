<?php 
class TheExtensionLab_MegaMenuFeaturedCategoryAndProducts_Block_Widget_Category_Product_List
    extends TheExtensionLab_MegaMenu_Block_Widget_Product_Featured
    implements Mage_Widget_Block_Interface
{
	protected function getFeaturedCategoryNode()
    {

        $currentMenu = Mage::registry('current_menu');
        $childNodes = $currentMenu->getAllChildNodes();

        $categoryNodeId = 'category-node-'.$this->getMenuFeaturedCategoryId();

        if(!isset($childNodes[$categoryNodeId])){
            return false;
        }

        $categoryNode = $childNodes[$categoryNodeId];

        return $categoryNode;

    }
}