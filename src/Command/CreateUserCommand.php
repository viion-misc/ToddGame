<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CreateUserCommand extends Command
{
    /** @var EntityManagerInterface */
    private $em;
    
    public function __construct(?string $name = null, EntityManagerInterface $em)
    {
        parent::__construct($name);
        
        $this->em = $em;
    }
    
    protected function configure()
    {
        $this
            ->setName('app:create-user')
            ->setDescription('Creates a new user.')
            ->setHelp('This command allows you to create a user...')
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        
        $name = strtolower(trim($io->ask('Name? eg: josh.freeman - No spaces')));
        $isAdmin = strtolower($io->ask('Should be admin? Y or N')) === 'y';
        $io->text("Creating user: {$name}");
        
        /** @var User $exists */
        $exists = $this->em->getRepository(User::class)->findOneBy(['name' => $name]);
        if ($exists) {
            $io->text("User exists, use code: {$exists->getCode()} to login.");
            return;
        }
    
        $user = new User($name, $isAdmin);
        $this->em->persist($user);
        $this->em->flush();
        
        
        $io->text("Created user: {$user->getName()}, they can login with code: {$user->getCode()}");
    }
}
