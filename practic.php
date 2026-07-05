<?php 
    class Restaurant {
        public string $restaurantName;
        
        public function __construct(string $restaurantName) {
            // Make sure branch name and customer name are capitalized
            $this->restaurantName = $restaurantName;
        }

        public function welcome(): string {
            return "Welcome to " . $this->restaurantName;
        }

        public function welcomeBranch(): string {
            return "This our branch " . $this->branchName;
        }

        public function greetCustomer(): string {
            // Welcoming drinks are special for our member
            $nameGreet = "Hello " . $this->customerName . ", here's the menu.";
            return $nameGreet . "\n" . ($this->isMember ? "Before you order, you can enjoy this welcoming drink" : "");
        }
    }

    class Cafe extends Restaurant {
        public string $branchName;
        public string $customerName;
        public bool $isMember;

        public function __construct(string $restaurantName, string $branchName, string $customerName, bool $isMember) {
            parent::__construct($restaurantName);
            $this->isMember = $isMember;
            $this->branchName = ucwords($branchName);
            $this->customerName = ucwords($customerName);
        }

        public function offerMenu(): string {
            // Menu : "Americano", "Latte", "Matcha", "Brownies"
            $cafeMenu = "";
            $menu = ["Americano", "Latte", "Matcha", "Brownies"];
            foreach ($menu as $cenu) {
                $cafeMenu .= "- " . $cenu . "\n"; 
            }
            return $cafeMenu;
        }
    }

    class Canteen extends Restaurant {
        public string $customerName;
        public string $branchName;

        public function __construct(string $restaurantName, string $branchName, string $customerName) {
            // Make sure branch name and customer name are capitalized
            parent::__construct($restaurantName);
            $this->customerName = ucwords($customerName);
            $this->branchName = ucwords($branchName);
        }

        public function offerMenu(): string {
            // Menu : "Ayam Geprek", "Nasi Padang", "Nasi Kuning"
            $canteenMenu = "";
            $cmenu = ["Ayam Geprek", "Nasi Padang", "Nasi Kuning"];
            foreach ($cmenu as $teen) {
                $canteenMenu .= "- " . $teen . "\n"; 
            }
            return $canteenMenu;
        }
    }

    $mainRestaurant = new Restaurant("Restaurant A");
    print_r($mainRestaurant->welcome()."\n");
    $cafe = new Cafe("Restaurant A", "Cafe A", "Jhon", true);
    print_r($cafe->welcomeBranch()."\n");
    print_r($cafe->greetCustomer()."\n");
    print_r($cafe->offerMenu()."\n");

    print_r($mainRestaurant->welcome()."\n");
    $cafe = new Cafe("Restaurant A", "Cafe B", "Lucy", false);
    print_r($cafe->welcomeBranch()."\n");
    print_r($cafe->greetCustomer()."\n");
    print_r($cafe->offerMenu()."\n");
    // Declare new object for non-member customer, dont forget to welcome, greet our customer, and offer them our menu

    $mainRestaurant = new Restaurant("Restaurant A");
    print_r($mainRestaurant->welcome()."\n");
    $canteen = new Canteen("Restaurant A", "Canteen A", "Terese");
    print_r($canteen->welcomeBranch()."\n");
    print_r($canteen->offerMenu()."\n");
?>