<?php
// Usage demonstration of the calculatePayroll function
require_once(__DIR__ . "/SalaryCalculator.php");

/**
 * Function calculatePayroll
 *
 * Calculates the payroll for employees with allowances, deductions, and base salary.
 *
 * @param float $baseSalary The base salary of the employee.
 * @param float $allowances The total allowances for the employee.
 * @param float $deductions The total deductions for the employee.
 * @param int $age The employee age
 *
 * @return float The net pay after all deductions and allowances have been implemented.
 */
function calculatePayroll($baseSalary, $allowances, $deductions, $age)
{
    $employeePayroll = new EmployeePayroll($baseSalary, $allowances, $deductions, $age);
    $netPay = $employeePayroll->calculateNetPay();
    return $netPay;
}

$allowances = 1000.00;
$deductions = 500.00;

$employee1 = "Employee A";
$baseSalary1 = 5000.00;
$age1 = 66;

$employee2 = "Employee B";
$baseSalary2 = 4000.00;
$age2 = 62;

$netPayEmployee1 = calculatePayroll($baseSalary1, $allowances, $deductions, $age1);

echo "The net pay for the employee " .$employee1. " is: $" . number_format($netPayEmployee1, 2);

$netPayEmployee2 = calculatePayroll($baseSalary2, $allowances, $deductions, $age2);

echo "The net pay for the employee " .$employee2. " is: $" . number_format($netPayEmployee2, 2);
?>
