<?php 
    // Includes
    include(db.php);
    include(products.php);

    // Routes
    function getRoutes() {
        // Local Variables
        $url = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        if($method === "GET") {
            switch($url) {
                case "/profile":
                    include("profile/profile.php");
                    break;
                default:
                    include("/");
                    break;
            }
        }
        if($method === "POST") {
            switch($url) {
                case "/profile":
                    include("profile/profile.php");
                    break;
                default:
                    include("/");
                    break;
            }
        }
    }
?>