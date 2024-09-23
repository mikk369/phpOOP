    <?php
        class Pages extends Controller {
            public function __construct() {
            }

            public function index() {
                $data = [
                    'title' => 'MVC TEST in PHP',
                    'description' => 'Simple social network in PHP'
                ];


                
                $this->view('pages/index', $data);
            }

            public function about() {
                $data = [
                    'title' => 'About us',
                    'description' => 'App to share posts with other users'];

                $this->view('pages/about', $data);
            }
        }
    ?>