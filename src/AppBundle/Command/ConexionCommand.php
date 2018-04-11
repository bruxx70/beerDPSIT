<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class ConexionCommand extends ContainerAwareCommand 
{
    protected function configure()
    {
        
    $this
        // the name of the command (the part after "bin/console")
        ->setName('beer:list-style')

        // the short description shown while running "php bin/console list"
        ->setDescription('Listado de tipos de cerveza.')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('This command lista estilos de cerveza')
    ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
            /* // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);

        // outputs a message followed by a "\n"
        $output->writeln('Whoa!');

        // outputs a message without adding a "\n" at the end of the line
        $output->write('You are about to ');
        $output->write('create a user.');*/

         $em = $this->getContainer()->get('doctrine')->getManager();
         $estilos = $em->getRepository('AppBundle:Estilo')->findAll();
         foreach ($estilos as $value) {
         	$output->writeln($value->__toString());
         }
    }
}

 ?>