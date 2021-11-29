<?php
namespace Fayez\Calculator\Command;

use Symfony\Component\Console\Command\Command;

class CalculatorSumTwoIntegersCommand extends Command
{
    private $a;
    private $b;

    /**
     * @param $a
     * @param $b
     */
    public function __construct($a, $b)
    {
        parent::__construct();

        $this->a = $a;
        $this->b = $b;
    }

    protected function configure()
    {
        $this
            ->setName('fayez:sum')
            ->setDescription('Summing up two integers');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write('Result is: ' . ($this->a + $this->b).PHP_EOL);
    }

}
