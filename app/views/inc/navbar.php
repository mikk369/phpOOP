    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3" aria-label="Third navbar example">
        <div class="container">
            <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php  echo URLROOT; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php  echo URLROOT; ?>/pages/about">About</a>
                    </li>
                </ul>
                    <!-- side navbar -->
                <ul class="navbar-nav ms-auto">
                    <?php if(isset($_SESSION['user_id'])) :  ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php  echo URLROOT; ?>/users/logout">Logout</a>
                        </li>
                    <?php else : ?>        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php  echo URLROOT; ?>/users/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php  echo URLROOT; ?>/users/login">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>