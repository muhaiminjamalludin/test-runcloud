<!DOCTYPE html>

<html>


<body>

    <?php
    require_once "Model/User.php";
    require_once "Model/Server.php";
    require_once "Model/BasicPlan.php";
    require_once "Model/ProPlan.php";
    print "\n\nRunCloud Assestment !\n\n";

    /*
* Setting Up required details
*/
    $user = new User();
    $user->name = 'Ashraf Kamarudin';


    $server_1 = new Server();
    $server_1->name = 'Server 1';
    $server_1->ipAddress = '192.168.0.1';

    $server_2 = new Server();
    $server_2->name = 'Server 2';
    $server_2->ipAddress = '192.168.0';

    /*
* Flow 1 - Basic Plan
*/

    print "Flow #1 Basic Plan Subscription !\n\n";
    $user->subscribe(new BasicPlan());

    //var_dump($user->currentPlan);
    $user->connectServer($server_1);
    $user->connectServer($server_2); //fail
    /*
* Flow 2 - Pro/Business Plan
*/
    print "Flow #2 Upgrade Plan Subscription !\n\n";

    $user->subscribe(new ProPlan());
    // var_dump($user->currentPlan);
    // var_dump($user->connectedServer);
    $user->connectServer($server_2); // success

    /*
* Flow 3 - Unsubscribe
*/

    print "Flow #3 Unsubscribe Plan Subscription !\n\n";

    $user->unsubscribe();

    $user->connectServer($server_2);


    ?>
</body>

</html>