<?php include('Header.php'); ?>

<div class="container">
    <h2>Employee Objets </h2>

    <?php
    interface Employee {
        public function displayEmployeeInfo();
    }

    class Management implements Employee {
        protected $sin, $age, $salary;

        public function __construct($sin, $age, $salary) {
            $this->sin = $sin;
            $this->age = $age;
            $this->salary = $salary;
        }

        public function displayEmployeeInfo() {
            echo "<p>SIN: $this->sin, Age: $this->age, Salary: $this->salary</p>";
        }
    }

    class Manager extends Management {
        private $adminLevel;

        public function __construct($sin, $age, $salary, $adminLevel) {
            parent::__construct($sin, $age, $salary);
            $this->adminLevel = $adminLevel;
        }

        public function displayEmployeeInfo() {
            parent::displayEmployeeInfo();
            echo "<p>Admin Level: $this->adminLevel</p><hr>";
        }
    }

    class Development implements Employee {
        protected $sin, $age, $salary;

        public function __construct($sin, $age, $salary) {
            $this->sin = $sin;
            $this->age = $age;
            $this->salary = $salary;
        }

        public function displayEmployeeInfo() {
            echo "<p>SIN: $this->sin, Age: $this->age, Salary: $this->salary</p>";
        }
    }

    class ITSpecialist extends Development {
        private $project;

        public function __construct($sin, $age, $salary, $project) {
            parent::__construct($sin, $age, $salary);
            $this->project = $project;
        }

        public function displayEmployeeInfo() {
            parent::displayEmployeeInfo();
            echo "<p>Project: $this->project</p><hr>";
        }
    }

    echo "<h4> Managers:</h4>";
    $m1 = new Manager("111111111", 45, 95000, "Levl 2");
   
    $m1->displayEmployeeInfo();
    

   echo "<h4>IT Specialists:</h4>";
    $dev1 = new ITSpecialist("33333333", 30, 80000, "Web");
    $dev2 = new ITSpecialist("444444444", 32, 82000, "Mobile");
    $dev1->displayEmployeeInfo();
    $dev2->displayEmployeeInfo();
    ?>
</div>
<?php include('Footer.php'); ?>
