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
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
 
private $blocksmined = 0;

public function onBlockBreakEvent(BlockBreakEvent $event) {
      $player = $event->getPlayer();
      $item = $player->getInventory()->getItemInHand();
      $dpickaxe = item::get(278, 0, 1);
      $this->blocksmined() + 1;
      if($item->getId() == $dpickaxe->getId()) {
         $broken = $this->blocksmined();
         $item->setLore(["Pickaxe Level: 0\nBlocks Mined: $broken"]);
      }
   }
}
          
