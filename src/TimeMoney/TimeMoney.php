<?php
namespace TimeMoney;
class TimeMoney extends \pocketmine\plugin\PluginBase{
    public $array = array();
    public $config;
    public function onEnable(){
        @mkdir($this->getDataFolder());
        $cfg = ["Money" => 1,"Time" => 5,];
        $this->getServer()->getPluginManager()->registerEvents(new Event(), $this);
        $this->config = (new \pocketmine\utils\Config($this->getDataFolder()."config.yml", Config::YAML,$cfg))->getAll();
        $this->config->save();
    }
}
?>
