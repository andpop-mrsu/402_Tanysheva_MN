<?php 
	namespace Maria_brash\cold_hot\Controller;
    use function Maria_brash\cold_hot\View\showGame;
    
    function startGame() {
        echo "Game started".PHP_EOL;
        showGame();
    }
?>
