<?php 
    class Restaurant {
        public string $restaurantName;
        
        public function __construct(string $restaurantName) {
            // Make sure branch name and customer name are capitalized
            // code here ...
        }

        public function welcome(): string {
            // code here ...
        }

        public function welcomeBranch(): string {
            // code here ...
        }

        public function greetCustomer(): string {
            // Welcoming drinks are special for our member
            // code here ...
        }
    }

    class Cafe extends Restaurant {
        // code here ...

        public function __construct(string $restaurantName, string $branchName, string $customerName, bool $isMember) {
            // Make sure branch name and customer name are capitalized
            // code here ...
        }

        public function offerMenu(): string {
            // Menu : "Americano", "Latte", "Matcha", "Brownies"
            // code here ...
        }
    }

    class Canteen extends Restaurant {
        // code here ...

        public function __construct(string $restaurantName, string $branchName, string $customerName) {
            // Make sure branch name and customer name are capitalized
            // code here ...
        }

        public function offerMenu(): string {
            // Menu : "Ayam Geprek", "Nasi Padang", "Nasi Kuning"
            // code here ...
        }
    }

    $mainRestaurant = new Restaurant("Restaurant A");
    print_r($mainRestaurant->welcome()."\n");
    $cafe = new Cafe("Restaurant A", "Cafe A", "Jhon", true);
    print_r($cafe->welcomeBranch()."\n");
    print_r($cafe->greetCustomer()."\n");
    print_r($cafe->offerMenu()."\n");

    // code here ....
    // Declare new object for non-member customer, dont forget to welcome, greet our customer, and offer them our menu

    $mainRestaurant = new Restaurant("Restaurant A");
    print_r($mainRestaurant->welcome()."\n");
    $canteen = new Canteen("Restaurant A", "Canteen A", "Terese");
    print_r($canteen->welcomeBranch()."\n");
    print_r($canteen->offerMenu()."\n");
?>