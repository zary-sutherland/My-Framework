<?php
namespace FRAMEWORKNS;

class Auth implements AuthInterface {

        //read in from ini file amd check if appropriate permission is found for the specific page and role
        function isActionAllowable($action,$page,$role){
                $pagePermissions = parse_ini_file(DATA_DIR.DS."roles.ini",true);
                $allowedActions = $this->determineAllowedActions($pagePermissions[$page][$role]);
                if(in_array($action,$allowedActions)){
                    return true;
                }
                return false;
        }

        //determing all of the actions the users role can perform
        function determineAllowedActions($userAccessLevel = 0) {
            if(!is_numeric($userAccessLevel)) {
                return array();
            }
            $return = array();
            while ($userAccessLevel > 0) {
                for($i = 0, $n = 0; $i <= $userAccessLevel; $i = 1 * pow(2, $n), $n++) {
                    $end = $i;
                }
                $return[] = $end;
                $userAccessLevel = $userAccessLevel - $end;
            }
            sort($return);
            return $return;
        }
    }


?>