<?php

namespace OmerBabaFk;

use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat as C;

class main  extends PluginBase implements Listener{

          public function onLoad(){
                    $this->getLogger()->info("Eklenti Yükleniyor...");
          }
          public function onEnable(){
                    $this->getServer()->getPluginManager()->registerEvents($this,$this);
		    $this->getLogger()->info("Eklenti Aktif...");
          }
          public function onDisable(){
                    $this->getLogger()->info("Eklenti De-Aktif...");
          }
	  public function onJoin(PlayerJoinEvent $event){
  		 $player = $event->getPlayer();
   		$name = $player->getName();
   		$event->setJoinMessage("§7[§a+§7] §b$name §eSunucumuza Giriş Yaptı !");
	}
        public function onQuit(PlayerQuitEvent $event){
  		 $player = $event->getPlayer();
   		$name = $player->getName();
   		$event->setQuitMessage("§7[§4-§7] §b$name §eSunucumuzdan ��k�� Yaptı !");
	}

}