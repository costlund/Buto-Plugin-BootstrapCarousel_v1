<?php
class PluginBootstrapCarousel_v1{
  public function widget_carousel($data){
    $data = new PluginWfArray($data);
    if(!$data->get('data/id')){
      throw new Exception('PluginBootstrapCarousel_v1 says: Param id is not set for widget.');
    }
    $data->set('data/hash_id', '#'.$data->get('data/id').'');
    $element = new PluginWfYml(__DIR__.'/element/carousel.yml');
    $element->setByTag($data->get('data'));
    /**
     * Fade.
     */
    if($data->get('data/fade')){
      $element->set('0/attribute/class', 'carousel slide carousel-fade');
    }
    /**
     * Items.
     */
    $carousel_item = new PluginWfArray($element->get('0/innerHTML/1/innerHTML/0'));
    $items = array();
    if(!is_array($data->get('data/item'))){
      $data->set('data/item', array(wfDocument::createHtmlElement('p', 'Element one'), wfDocument::createHtmlElement('p', 'Element two')));
    }
    /**
     * enabled / disabled
     * Remove item.
     */
    foreach($data->get('data/item') as $k => $v){
      $i = new PluginWfArray($v);
      if($i->get('settings/enabled')===false || $i->get('settings/disabled')===true){
        $data->setUnset("data/item/$k");
      }
    }
    /**
     * 
     */
    foreach ($data->get('data/item') as $key => $value) {
      $carousel_item->set('innerHTML', array($value));
      $items[] = $carousel_item->get();
      if(wfPhpfunc::strstr($carousel_item->get('attribute/class'), ' active')){
        $carousel_item->set('attribute/class', 'carousel-item');
      }
    }
    $element->set('0/innerHTML/1/innerHTML', $items);
    /**
     * Indicators generate.
     */
    $carousel_indicators = new PluginWfArray($element->get('0/innerHTML/0/innerHTML/0'));
    $items = array();
    foreach ($data->get('data/item') as $key => $value) {
      $carousel_indicators->set('attribute/data-bs-slide-to', $key);
      $items[] = $carousel_indicators->get();
      if($carousel_indicators->get('attribute/class')=='active'){
        $carousel_indicators->set('attribute/class', null);
      }
    }
    $element->set('0/innerHTML/0/innerHTML', $items);
    /**
     * Indicators enabled.
     */
    if($data->get('data/indicators')===null){
      $data->set('data/indicators', true);
    }
    $element->set('0/innerHTML/0/settings/enabled', $data->get('data/indicators'));
    /**
     * Links enabled.
     */
    if($data->get('data/controls')===null){
      $data->set('data/controls', true);
    }
    $element->set('0/innerHTML/2/settings/enabled', $data->get('data/controls'));
    $element->set('0/innerHTML/3/settings/enabled', $data->get('data/controls'));
    /**
     * Style.
     */
    if($data->get('data/style')){
      $element->set('1/innerHTML', $data->get('data/style'));
    }
    /**
     * 
     */
    //wfHelp::yml_dump($element);
    wfDocument::renderElement($element->get());
  }
  public function page_demo(){
    wfPlugin::includeonce('wf/yml');
    wfPlugin::enable('theme/include');
    wfPlugin::enable('bootstrap/carousel_v1');
    $element = new PluginWfYml(__DIR__.'/page/demo.yml');
    wfDocument::renderElement($element->get());
  }
}
