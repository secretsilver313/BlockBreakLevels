<?php

namespace block;

use pocketmine\Server;
use pocketmine\event\block\BlockBreakEvent;


class Main extends PluginBase {

public funtion onEnable() {
}

public $blocksmined = 0;

 onItemHeldEvent(itemHeldEvent $event) {
 
 $player = $event->getPlayer();
  $item = $player->getInventory()->getItemInHand()->getId();
  $pickaxe = item::get(278, 0, 1);
  $setlore = $player->getInventory()->getItemInHand->setLore(["0"]);
  $blocksmine = 0;

  if($player $item == $pickaxe) {
  $player->getInventory()->getItemInHand->setLore(["Pickaxe Level: 0 \n  Blocks Mined: $blocksmined "])
  }else{
  }

 onBlockBreakEvent(blockBreakEvent $event) {
 
  $player = $event->getPlayer();
  $pickaxe = item::get(278, 0, 1)
  $inv = $player->getInventory();
  $item = $player->getInventory()->getItemInHand()->getId();
  $plore = $player->getlore

  $this->$blocksmined() +1
 }
}
