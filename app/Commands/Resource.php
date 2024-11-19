<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class Resource extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'App';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'make:resource';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'make:resource [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        $name = $params[0];

        if (empty($name)) {
            CLI::error('Please provide a name for the resource!');
        }

        $modelName = ucfirst($name);
        $controllerName = $modelName.'Controller';
        $migrationName = $modelName.'s';

        CLI::write("Creating model for $modelName...");
        $this->call('make:model', [$modelName]);

        CLI::write("Creating controller for $controllerName...");
        $this->call('make:controller', [$controllerName]);

        CLI::write("Creating migration for $migrationName...");
        $this->call('make:migration', [$migrationName]);

        CLI::write('Resource have been created successfully.');
    }
}
