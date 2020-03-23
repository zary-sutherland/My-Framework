<?php
namespace FRAMEWORKNS;

    interface AuthInterface {


        function isActionAllowable($action, $page, $role);

        function determineAllowedActions();
    }
?>