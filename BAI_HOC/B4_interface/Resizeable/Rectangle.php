 <?php

    use JetBrains\PhpStorm\Pure;

    class Rectangle implements Resizeable {
        private $width;
        private $height;
    
        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }
    
        public function getArea() {
            return $this->width * $this->height;
        }
    
        public function resize($percentage) {
            $this->width *= (1 + $percentage / 100);
            $this->height *= (1 + $percentage / 100);
        }
    }