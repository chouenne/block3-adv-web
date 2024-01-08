<!-- 
+public
-private
#protected -->

<?php
// 1. Write a php class called Animal with a method called makeSound(). Create a subclass called Cat that overrides the makeSound() method to bark.
// class Animal {
//     public function makeSound() {
//         echo "waoh";
//     }
// }

// class Cat extends Animal {
//     public function makeSound() {
//         echo "meow";
//     }
// }

// $testAnimal = new Animal();
// $testAnimal->makeSound();
// $testCat = new Cat();
// $testCat->makeSound();



// 2. Write a php class called Vehicle with a method called drive(). Create a subclass called Car that overrides the drive() method to print "Repairing a car".

class Vehicle
{
    public function drive()
    {
        echo "Drivng a vehicle ";
    }
}

class car extends Animal
{
    public function drive()
    {
        echo "Repairing a car";
    }
}

$testVehicle = new Vehicle();
$testVehicle->drive();
$testCar = new Car();
$testCar->drive();




// Write a php class called Shape with a method called getArea(). Create a subclass called Rectangle that overrides the getArea() method to calculate the area of a rectangle.

// class Shape
// {
//     public function getArea()
//     {
//         echo "A = πr2";
//     }
// }

// class Rectangle extends Shape
// {
//     public function getArea()
//     {
//         echo "A = wl";
//     }
// }

// $testShape = new Shape();
// $testShape->getArea();
// $testRectangle = new Rectangle();
// $testRectangle->getArea();

// Write a php class called Employee with methods called work() and getSalary(). Create a subclass called HRManager that overrides the work() method and adds a new method called addEmployee().

// class Employee
// {
//     public function work()
//     {
//         echo "write the report";
//     }
// }

// class HRManager
// {
//     public function work()
//     {
//         echo "manage the profiles of employee";
//     }

//     public function addEmployee()
//     {
//         echo "organize the interview";
//     }
// }

// $testEmployee = new Employee();
// $testEmployee->work();
// $testHRManager = new HRManager();
// $testHRManager->work();
// $testHRManager2 = new HRManager();
// $testHRManager2->addEmployee();



// Write a php class known as "BankAccount" with methods called deposit() and withdraw(). Create a subclass called SavingsAccount that overrides the withdraw() method to prevent withdrawals if the account balance falls below one hundred.
//hard to understand
class BankAccount
{
    // The initial balance is set to 0, balance is the amount that currently in the bank card
    protected $balance = 0;

    // Method to deposit money into the account
    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "Deposited: $amount\n";
        $this->displayBalance();
    }

    // Method to withdraw money from the account

    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdraw: $amount\n";
        } else {
            echo "Insufficient amount for drawing!";
        }
        $this->displayBalance();
    }

    // Method to display the current balance
    public function displayBalance()
    {
        echo "Current Balance: $this->balance";
    }
}

class SavingsAccount extends BankAccount
{
    public function withdraw($amount)
    {
        if ($this->balance >= $amount && $this->balance - $amount >= 100) {
            $this->balance -= $amount;
            echo "Withdraw: $amount\n";
        } else {
            echo " cannot operate Minimum balance requirement not met. \n";
        }
        $this->displayBalance();
    }
}

$account = new SavingsAccount();
$account->deposit(200); // Output: Deposited: 200, Current Balance: 200
$account->withdraw(50); // Output: Withdrawn: 50, Current Balance: 150
$account->withdraw(100); // Output: Cannot withdraw. Minimum balance requirement not met., Current Balance: 150
$account->withdraw(40); // Output: Withdrawn: 40, Current Balance: 110
$account->withdraw(20); // Output: Cannot withdraw. Minimum balance requirement not met., Current Balance: 110


// Write a php class called Animal with a method named move(). Create a subclass called Cheetah that overrides the move() method to run.
class Animal
{
    public function move()
    {
        echo "crawl";
    }
}

class Cheetah extends Animal
{
    public function move()
    {
        echo "run";
    }
}

$testAnimal = new Animal();
$testAnimal->move();
$testCat = new Cheetah();
$testCat->move();

// Write a php class known as Person with methods called getFirstName() and getLastName(). Create a subclass called Employee that adds a new method named getEmployeeId() and overrides the getLastName() method to include the employee's job title.
class Person
{
    protected $firstName;
    protected $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}

class Employee extends Person
{
    protected $employeeId;
    protected $jobTitle;
    public function __construct($firstName, $lastName, $employeeId, $jobTitle)
    {
        parent::__construct($firstName, $lastName);
        $this->employeeId = $employeeId;
        $this->jobTitle = $jobTitle;
    }
    public function getEmployeeId()
    {
        return $this->employeeId;
    }
    // Override getLastName() to include job title
    public function getLastName()
    {
        return $this->lastName . ' (' . $this->jobTitle . ')';
    }

}

$person = new Person("Xuan", "Huang");
echo "Person: " . $person->getFirstName() . " " . $person->getLastName() . "\n";
$employee = new Employee("Jane", "Smith", "E12345", "Software Developer");
echo "Employee: " . $employee->getFirstName() . " " . $employee->getLastName() . ", ID: " . $employee->getEmployeeId() . "\n";


// Write a php class called Shape with methods called getPerimeter() and getArea(). Create a subclass called Circle that overrides the getPerimeter() and getArea() methods to calculate the area and perimeter of a circle.
class Shape
{
    public function getPerimeter()
    {
        echo "P=2(l+w)";
    }

    public function getArea()
    {
        echo "A=wl";
    }
}

class Circle extends Shape
{
    public function getPerimeter()
    {
        echo "C=2πr";
    }

    public function getArea()
    {
        echo "A=πr2";
    }
}

$testShape = new Shape();
$testShape->getPerimeter();
$testShape->getArea();
$testCircle = new Circle();
$testCircle->getPerimeter();
$testCircle->getArea();

// Write a php vehicle class hierarchy. The base class should be Vehicle, with subclasses Truck, Car and Motorcycle. Each subclass should have properties such as make, model, year, and fuel type. Implement methods for calculating fuel efficiency, distance traveled, and maximum speed.


// Write a php ca class hierarchy for employees of a company. The base class should be Employee, with subclasses Manager, Developer, and Programmer. Each subclass should have properties such as name, address, salary, and job title. Implement methods for calculating bonuses, generating performance reports, and managing projects.

?>