<?php

class Card {
    public $ahref;
    public $img;
    public $title;
    public $date;
    public $author;
    public $text;
    
    public function __construct($ahref,$img,$title,$date,$author,$text) 
    {
        $this->ahref=$ahref;
        $this->img = $img;
        $this->title = $title;
        $this->date = $date;
        $this->author = $author;
        $this->text = $text;
        $this->makeCard();
    }

    public function makeCard() {

        ?>
            <div class="haha">
                <img src="<?php echo $this->img; ?>">
                <div class="little-container">
                    <a href="<?php echo $this->ahref; ?>"><?php echo $this->title; ?></a>
                    <p><span class="grey-text"><?php echo $this->date; ?> by</span> <a href="#" class="admin"><?php echo $this->author; ?></a></p>
                    <p><?php echo $this->text; ?></p>
                </div>
            </div>

        <?php
    }

} // end of the class