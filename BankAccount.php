<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "تم إيداع $amount في الحساب. الرصيد الحالي: $this->balance<br>";
        } else {
            echo "المبلغ المودع يجب أن يكون أكبر من الصفر.<br>";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0) {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
                echo "تم سحب $amount من الحساب. الرصيد الحالي: $this->balance<br>";
            } else {
                echo "لا يوجد رصيد كافي لسحب $amount. الرصيد الحالي: $this->balance<br>";
            }
        } else {
            echo "المبلغ المسحوب يجب أن يكون أكبر من الصفر.<br>";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}
$customer = new BankAccount('1');

$customer->deposit(500);
echo '<br>';

$customer->withdraw(200);



?>


