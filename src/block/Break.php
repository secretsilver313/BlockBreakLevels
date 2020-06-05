<?php

namespace block;

use pocketmine\Server;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\inventory\Inventory;
use pocketmine\item\Armor;
use pocketmine\item\Tool;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\event\player\PlayerJoinEvent;

class Break extends PluginBase {
 
public $blocksmined = 0;

public function onBlockBreakEvent(BlockBreakEvent $event) {
      $player = $event->getPlayer();
      $item = $player->getInventory()->getItemInHand()->getId();
      $pickaxe = item::get(278, 0, 1);
      $this->blocksmined() + 1;
      if($item == $pickaxe) {
         $item->setLore(["Pickaxe Level: 0\nBlocks Mined: $this->blocksmined()"]);
      }
   }
}
          
