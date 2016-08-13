<?php

namespace pets\command;

use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pets\main;
use pocketmine\utils\TextFormat as TF;

class PetCommand extends PluginCommand {

	public function __construct(main $main, $name) {
		parent::__construct(
				$name, $main
		);
		$this->main = $main;
	}

	public function execute(CommandSender $sender, $currentAlias, array $args) {
		switch (strtolower(array_shift($args))):
			case "name":
				if (isset($args[1])){
					unset($args[0]);
					$name = implode(" ", $args);
					$this->main->getPet($sender->getName())->setNameTag($name);
					$sender->sendMessage("Set Name to ".$name);
				}
			break;
			
			case "list":
				if($sender->hasPermission('pets.command.list')){
				$sender->sendMessage("§e======Pets List======");
				$sender->sendMessage("§e§ldog / wolf");
				$sender->sendMessage("§e§lblaze");
				$sender->sendMessage("§e§lpig");
				$sender->sendMessage("§e§lchicken");
				$sender->sendMessage("§e§lrabbit");
				$sender->sendMessage("§e§lmagma");
				$sender->sendMessage("§e§lbat");
				$sender->sendMessage("§e§lsilverfish");
				$sender->sendMessage("§e§lcat / ocelot");
				$sender->sendMessage("§e§lslime");
				}
				else{
				$sender->sendMessage("§4You do not have permission to use this command");
				 }
			break;
			
			case "help":
				if($sender->hasPermission('pet.command.help')){
				$sender->sendMessage("§e======PetHelp======");
				$sender->sendMessage("§b/pets to enable or disable your pet");
				$sender->sendMessage("§b/pets type [type] to change your pet");
				$sender->sendMessage("§b/pets name [new name] to change pet's name");
				$sender->sendMessage("§b/pets list : to show list pets");
				}
				else{
					$sender->sendMessage(TextFormat::RED."You do not have permission to use this command");
				}
			break;
			
			case "type":
				if(count($args) = 2){
					if($args[0]=='dog'){
						if ($sender->hasPermission("pets.type.dog")){
							$this->main->changePet($sender, "WolfPet");
							$sender->sendMessage("Your pet has changed to Wolf!");
							return true;
						}else{
							$sender->sendMessage("You do not have permission for dog pet!");
							return true;
						}
					}elseif($args[0]=='chicken'){
						if ($sender->hasPermission("pets.type.chicken")){
							$this->main->changePet($sender, "ChickenPet");
							$sender->sendMessage("Your pet has changed to Chicken!");
							return true;
						}else{
							$sender->sendMessage("You do not have permission for chicken pet!");
							return true;
						}
					}elseif($args[0]=='blaze'){
						if ($sender->hasPermission("pets.type.blaze")){
							$this->main->changePet($sender, "BlazePet");
							$sender->sendMessage("Your pet has changed to Blaze!");
							return true;
						}else{
							$sender->sendMessage("You do not have permission for blaze pet!");
							return true;
						}
					}elseif($args[0]=='magma'){
						if ($sender->hasPermission("pets.type.magma")){
							$this->main->changePet($sender, "MagmaPet");
							$sender->sendMessage("Your pet has changed to Magma!");
							return true;
						}else{
							$sender->sendMessage("You do not have permission for blaze pet!");
							return true;
						}
					}elseif($args[0]=='rabbit'){
						if ($sender->hasPermission("pets.type.rabbit")){
							$this->main->changePet($sender, "RabbitPet");
							$sender->sendMessage("Your pet has changed to Rabbit!");
							return true;
						}else{
							$sender->sendMessage("You do not have permission for rabbit pet!");
							return true;
						}
					}elseif($args[0]=='bat'){
						if ($sender->hasPermission("pets.type.bat")){
							$this->main->changePet($sender, "BatPet");
							$sender->sendMessage("Your pet has changed to Bat!");
							return true;
						}else{
							$sender->sendMessage("You do not have permission for bat pet!");
							return true;
						}
					}elseif($args[0]=='pig'){
						if ($sender->hasPermission("pets.type.pig")){
							$this->main->changePet($sender, "PigPet");
							$sender->sendMessage("Your pet has changed to Pig!");
							return true;
						}else{
							$sender->sendMessage("You do not have permission for SiverFish pet!");
							return true;
						}
					}
				}
				else{
					$sender->sendMessage("pls use /pet help")
				
						
						case "silverfish":
							if ($sender->hasPermission("pets.type.silverfish")){
								$this->main->changePet($sender, "SilverfishPet");
								$sender->sendMessage("Your pet has changed to SiverFish!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for SiverFish pet!");
								return true;
							}
						break;
						
						case "ocelot":
							if ($sender->hasPermission("pets.type.ocelot")){
								$this->main->changePet($sender, "OcelotPet");
								$sender->sendMessage("Your pet has changed to Ocelot!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for Ocelot pet!");
								return true;
							}
						break;
						
						case "slime":
							if ($sender->hasPermission("pets.type.slime")){
								$this->main->changePet($sender, "SlimePet");
								$sender->sendMessage("Your pet has changed to Slime!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for Slime pet!");
								return true;
							}
						break;
						
						case "block":
							if ($sender->hasPermission("pets.type.block")){
								$this->main->changePet($sender, "BlockPet");
								$sender->sendMessage("Your pet has changed to Block");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for Block pet!");
								return true;
							}
						break;
						
						case "cavespider":
							if ($sender->hasPermission("pets.type.cavespider")){
								$this->main->changePet($sender, "CaveSpiderPet");
								$sender->sendMessage("Your pet has changed to Cavespider!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for Spider pet!");
								return true;
							}
						break;
						
						case "cow":
							if ($sender->hasPermission("pets.type.cow")){
								$this->main->changePet($sender, "CowPet");
								$sender->sendMessage("Your pet has changed to Cow!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for Cow pet!");
								return true;
							}
						break;
						case "Creeper":
							if ($sender->hasPermission("pets.type.Creeper")){
								$this->main->changePet($sender, "CreeperPet");
								$sender->sendMessage("Your pet has changed to Creeper!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for Creeper pet!");
								return true;
							}
						break;
						case "enderman":
							if ($sender->hasPermission("pets.type.enderman")){
								$this->main->changePet($sender, "EndermanPet");
								$sender->sendMessage("Your pet has changed to endeman pet");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for Enderman pet!");
								return true;
							}
						break;
						
						case "ghast":
							if ($sender->hasPermission("pets.type.ghast")){
								$this->main->changePet($sender, "GhastPet");
								$sender->sendMessage("Your pet has changed to Ghast!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for Ghast pet!");
								return true;
							}
						break;
					}
					
				}
				else{
					$sender->sendMessage("/pet type [type]");
					$sender->sendMessage("•> ghast, enderman, creeper,cow,cavespider,block, ocelot, slime,blaze, pig, chicken, dog, rabbit, magma, bat, silverfish");
					return true;
					}
				return true;
			break;
		}
		
		return true;
	}

}

