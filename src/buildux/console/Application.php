<?php

namespace icircle\buildux\console;

use Symfony\Component\Console\Application as SymfonyApplication;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\IO\ConsoleIO;
use icircle\buildux\console\commands\CleanCommand;
use icircle\buildux\console\commands\BuildCommand;

class Application extends SymfonyApplication {
	
	public function doRun(InputInterface $input, OutputInterface $output)
	{
		$this->registerCommands();
	
		$this->io = new ConsoleIO($input, $output, $this->getHelperSet());
	
		return parent::doRun($input, $output);
	}
	
	protected function registerCommands(){
		$this->add(new CleanCommand());
		$this->add(new BuildCommand());
	}
	
}