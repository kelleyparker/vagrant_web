<?php

// Get the current directory
$current_directory = dirname(__FILE__);

// Function to execute shell command and handle errors
function executeCommand($command) {
    $output = shell_exec($command);
    if ($output === false) {
        echo "Error executing command: $command";
    } else {
        echo $output;
    }
}

// Run 'vagrant up' to start the VM in the current directory
if ($_GET['action'] === 'start') {
    executeCommand("cd $current_directory && vagrant up");
}

// Run 'vagrant halt' to stop the VM in the current directory
elseif ($_GET['action'] === 'stop') {
    executeCommand("cd $current_directory && vagrant halt");
}

// Run 'vagrant destroy -f' to destroy the VM in the current directory
elseif ($_GET['action'] === 'destroy') {
    executeCommand("cd $current_directory && vagrant destroy -f");
}

// Run 'vagrant status' to get the status of the VM in the current directory
elseif ($_GET['action'] === 'status') {
    executeCommand("cd $current_directory && vagrant status");
}

?>
