<?php
require "Model/BasicPlan.php";
require "Model/ProPlan.php";
class User
{

    public $name;
    public $currentPlan;
    public $connectedServer = [];


    // public function __construct($name, $ipAddress)
    // {
    //     $this->name = $name;
    //     $this->ipAddress = $ipAddress;
    // }


    public function subscribe($plan)
    {
        $this->currentPlan = $plan;
        echo "You are now subscribed to $plan->name\n";
    }




    public function connectServer($serverName)
    {

        if ($this->currentPlan == new BasicPlan()) {
            if (empty($this->connectedServer)) {
                $this->connectedServer[] = $serverName;
                echo "Server $serverName->name is connected\n";
                echo "Name: $this->name\n";
                print_r(($this->currentPlan)->name);
                echo "\n";
                print_r(($this->connectedServer)[0]->name);
                echo "\n";
                print_r(($this->connectedServer)[0]->ipAddress);
                echo "\n";
            } else {
                echo "User Exceeded Number of Allowed for Basic Plan\n";
            }
        } else if ($this->currentPlan == new ProPlan()) {
            $this->connectedServer[] = $serverName;
            echo "Server $serverName->name is connected\n";
            echo "Name: $this->name\n";
            print_r(($this->currentPlan)->name);
            echo "\n";
            print_r(($this->connectedServer)[0]->name);
            echo "\n";
            print_r(($this->connectedServer)[0]->ipAddress);
            echo "\n";
            print_r(($this->connectedServer)[1]->name);
            echo "\n";
            print_r(($this->connectedServer)[1]->ipAddress);
            echo "\n";
        } else {
            echo "You are not subscribed to any plan\n";
        }
    }


    public function unsubscribe()
    {
        $this->currentPlan = '';
        echo "You have successfully unsubsribed\n";
    }
}
