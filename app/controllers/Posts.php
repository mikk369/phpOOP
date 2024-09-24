    <?php 
    class Posts extends Controller {
        private $postModel;
        
        public function __construct() {
            //if want to show posts to not loged in users then need to take it out from constructor
            if(!isLoggedIn()) {
                redirect('users/login');
            }

            $this->postModel = $this->model('Post');
        }
        public function index() {
            //Get posts
            $posts = $this->postModel->getPosts();
            $data = [
                'posts' => $posts
            ];

            $this->view('posts/index', $data);
        }
    }

    ?>