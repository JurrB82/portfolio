<nav id="navbar">
    <a href="index.php">
        <span id="logoText">
            Next Gen. Tarot
        </span>    
        </a>
        
        <ul id="navOptions">
            <?php if (isset($_SESSION['tarotLogin']) && ($_SESSION['tarotLogin'] == true)) {
                echo
                '<li>
                    <a href="spreads.php">SPREADS</a>
                </li>
                <li>
                    <a href="log.php">MIJN LOG</a>
                </li>'; 
            }
            ?>
            <li>
                <a href="blog.php">BLOGS & VLOGS</a>
            </li>
            <li>
                <a href="contact.php">CONTACT</a>
            </li>
        </ul>
    </nav>
