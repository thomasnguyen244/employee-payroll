<?php
/**
 * Class SalaryCalculator
 *
 * Represents an employee's payroll with allowances, deductions, and base salary.
 */
class SalaryCalculator
{
    /** @var float $baseSalary The base salary of the employee. */
    private $baseSalary;

    /** @var float $allowances The total allowances for the employee. */
    private $allowances;

    /** @var float $deductions The total deductions for the employee. */
    private $deductions;

    /** @var int $age The employee age. */
    private $age;

    /**
     * EmployeePayroll constructor.
     *
     * @param float $baseSalary The base salary of the employee.
     * @param float $allowances The total allowances for the employee.
     * @param float $deductions The total deductions for the employee.
     * @param int $age The employee age
     */
    public function __construct($baseSalary, $allowances, $deductions, $age)
    {
        $this->baseSalary = $baseSalary;
        $this->allowances = $allowances;
        $this->deductions = $deductions;
        $this->age = $age;
    }

    /**
     * Calculate the net pay for the employee.
     *
     * @return float The net pay after all deductions and allowances have been implemented.
     */
    public function calculateNetPay()
    {
        if ($this->age <= 65) {
            $netPay = $this->baseSalary + $this->allowances - $this->deductions;
        } else {
            $netPay = $this->baseSalary + $this->allowances + ($this->allowances * 10 / 100) - $this->deductions; // plus 10% of allowance for employees have age is greater than 65
        }
        return $netPay;
    }
}
?>
